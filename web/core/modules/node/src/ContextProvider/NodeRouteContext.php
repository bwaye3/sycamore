<?php

namespace Drupal\node\ContextProvider;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Plugin\Context\Context;
use Drupal\Core\Plugin\Context\ContextProviderInterface;
use Drupal\Core\Plugin\Context\EntityContext;
use Drupal\Core\Plugin\Context\EntityContextDefinition;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\node\Entity\Node;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Sets the current node as a context on node routes.
 */
class NodeRouteContext implements ContextProviderInterface {

  use StringTranslationTrait;

  /**
   * The route match object.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * Constructs a new NodeRouteContext.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match object.
   */
  public function __construct(RouteMatchInterface $route_match) {
    $this->routeMatch = $route_match;
  }

  /**
   * {@inheritdoc}
   */
  public function getRuntimeContexts(array $unqualified_context_ids) {
    $result = [];
    $context_definition = EntityContextDefinition::create('node')->setRequired(FALSE);
    $value = NULL;
<<<<<<< HEAD
    if (($route_object = $this->routeMatch->getRouteObject()) && ($route_contexts = $route_object->getOption('parameters')) && isset($route_contexts['node'])) {
      if ($node = $this->routeMatch->getParameter('node')) {
        $value = $node;
      }
    }
    elseif ($this->routeMatch->getRouteName() == 'node.add') {
      $node_type = $this->routeMatch->getParameter('node_type');
      $value = Node::create(['type' => $node_type->id()]);
=======
    if (($route_object = $this->routeMatch->getRouteObject())) {
      $route_contexts = $route_object->getOption('parameters');
      // Check for a node revision parameter first.
      // @todo https://www.drupal.org/i/2730631 will allow to use the upcasted
      //   node revision object.
      if ($revision_id = $this->routeMatch->getRawParameter('node_revision')) {
        $value = \Drupal::entityTypeManager()->getStorage('node')->loadRevision($revision_id);
      }
      elseif (isset($route_contexts['node']) && $node = $this->routeMatch->getParameter('node')) {
        $value = $node;
      }
      elseif (isset($route_contexts['node_preview']) && $node = $this->routeMatch->getParameter('node_preview')) {
        $value = $node;
      }
      elseif ($this->routeMatch->getRouteName() == 'node.add') {
        $node_type = $this->routeMatch->getParameter('node_type');
        $value = Node::create(['type' => $node_type->id()]);
      }
>>>>>>> dev
    }

    $cacheability = new CacheableMetadata();
    $cacheability->setCacheContexts(['route']);

    $context = new Context($context_definition, $value);
    $context->addCacheableDependency($cacheability);
    $result['node'] = $context;

    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function getAvailableContexts() {
    $context = EntityContext::fromEntityTypeId('node', $this->t('Node from URL'));
    return ['node' => $context];
  }

}
