<?php

namespace Drupal\taxonomy;

use Drupal\Core\Breadcrumb\BreadcrumbBuilderInterface;
use Drupal\Core\Breadcrumb\Breadcrumb;
<<<<<<< HEAD
use Drupal\Core\DependencyInjection\DeprecatedServicePropertyTrait;
=======
>>>>>>> dev
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Link;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Provides a custom taxonomy breadcrumb builder that uses the term hierarchy.
 */
class TermBreadcrumbBuilder implements BreadcrumbBuilderInterface {
  use StringTranslationTrait;
<<<<<<< HEAD
  use DeprecatedServicePropertyTrait;

  /**
   * {@inheritdoc}
   */
  protected $deprecatedProperties = ['entityManager' => 'entity.manager'];
=======
>>>>>>> dev

  /**
   * The entity repository manager.
   *
   * @var \Drupal\Core\Entity\EntityRepositoryInterface
   */
  protected $entityRepository;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
<<<<<<< HEAD
   * The taxonomy storage.
   *
   * @var \Drupal\taxonomy\TermStorageInterface
   */
  protected $termStorage;

  /**
=======
>>>>>>> dev
   * Constructs the TermBreadcrumbBuilder.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Entity\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   */
<<<<<<< HEAD
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EntityRepositoryInterface $entity_repository = NULL) {
    $this->entityTypeManager = $entity_type_manager;
    $this->termStorage = $entity_type_manager->getStorage('taxonomy_term');
    if (!$entity_repository) {
      @trigger_error('The entity.repository service must be passed to TermBreadcrumbBuilder::__construct(), it is required before Drupal 9.0.0. See https://www.drupal.org/node/2549139.', E_USER_DEPRECATED);
      $entity_repository = \Drupal::service('entity.repository');
    }
=======
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EntityRepositoryInterface $entity_repository) {
    $this->entityTypeManager = $entity_type_manager;
>>>>>>> dev
    $this->entityRepository = $entity_repository;
  }

  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    return $route_match->getRouteName() == 'entity.taxonomy_term.canonical'
      && $route_match->getParameter('taxonomy_term') instanceof TermInterface;
  }

  /**
   * {@inheritdoc}
   */
  public function build(RouteMatchInterface $route_match) {
    $breadcrumb = new Breadcrumb();
    $breadcrumb->addLink(Link::createFromRoute($this->t('Home'), '<front>'));
    $term = $route_match->getParameter('taxonomy_term');
    // Breadcrumb needs to have terms cacheable metadata as a cacheable
    // dependency even though it is not shown in the breadcrumb because e.g. its
    // parent might have changed.
    $breadcrumb->addCacheableDependency($term);
    // @todo This overrides any other possible breadcrumb and is a pure
    //   hard-coded presumption. Make this behavior configurable per
    //   vocabulary or term.
<<<<<<< HEAD
    $parents = $this->termStorage->loadAllParents($term->id());
=======
    $parents = $this->entityTypeManager->getStorage('taxonomy_term')->loadAllParents($term->id());
>>>>>>> dev
    // Remove current term being accessed.
    array_shift($parents);
    foreach (array_reverse($parents) as $term) {
      $term = $this->entityRepository->getTranslationFromContext($term);
      $breadcrumb->addCacheableDependency($term);
      $breadcrumb->addLink(Link::createFromRoute($term->getName(), 'entity.taxonomy_term.canonical', ['taxonomy_term' => $term->id()]));
    }

    // This breadcrumb builder is based on a route parameter, and hence it
    // depends on the 'route' cache context.
    $breadcrumb->addCacheContexts(['route']);

    return $breadcrumb;
  }

}
