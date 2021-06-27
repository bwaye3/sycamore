<?php

namespace Drupal\tour\Plugin\tour\tip;

<<<<<<< HEAD
use Drupal\Component\Utility\Html;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Utility\Token;
use Drupal\tour\TipPluginBase;
=======
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Utility\Token;
use Drupal\tour\TipPluginBase;
use Drupal\tour\TourTipPluginInterface;
>>>>>>> dev
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Displays some text as a tip.
 *
 * @Tip(
 *   id = "text",
 *   title = @Translation("Text")
 * )
 */
<<<<<<< HEAD
class TipPluginText extends TipPluginBase implements ContainerFactoryPluginInterface {
=======
class TipPluginText extends TipPluginBase implements ContainerFactoryPluginInterface, TourTipPluginInterface {
>>>>>>> dev

  /**
   * The body text which is used for render of this Text Tip.
   *
   * @var string
   */
  protected $body;

  /**
   * Token service.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $token;

  /**
<<<<<<< HEAD
   * The forced position of where the tip will be located.
   *
   * @var string
   */
  protected $location;

  /**
   * Unique aria-id.
   *
   * @var string
   */
  protected $ariaId;

  /**
=======
>>>>>>> dev
   * Constructs a \Drupal\tour\Plugin\tour\tip\TipPluginText object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Utility\Token $token
   *   The token service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, Token $token) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->token = $token;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static($configuration, $plugin_id, $plugin_definition, $container->get('token'));
  }

  /**
<<<<<<< HEAD
   * Returns a ID that is guaranteed uniqueness.
   *
   * @return string
   *   A unique id to be used to generate aria attributes.
   */
  public function getAriaId() {
    if (!$this->ariaId) {
      $this->ariaId = Html::getUniqueId($this->get('id'));
    }
    return $this->ariaId;
  }

  /**
   * Returns body of the text tip.
   *
   * @return string
   *   The tip body.
   */
  public function getBody() {
    return $this->get('body');
  }

  /**
   * Returns location of the text tip.
   *
   * @return string
   *   The tip location.
   */
  public function getLocation() {
    return $this->get('location');
  }

  /**
   * {@inheritdoc}
   */
  public function getAttributes() {
    $attributes = parent::getAttributes();
    $attributes['data-aria-describedby'] = 'tour-tip-' . $this->getAriaId() . '-contents';
    $attributes['data-aria-labelledby'] = 'tour-tip-' . $this->getAriaId() . '-label';
    if ($location = $this->get('location')) {
      $attributes['data-options'] = 'tipLocation:' . $location;
    }
    return $attributes;
=======
   * {@inheritdoc}
   */
  public function getBody(): array {
    return [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->token->replace($this->get('body')),
      '#attributes' => [
        'class' => ['tour-tip-body'],
      ],
    ];
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function getOutput() {
<<<<<<< HEAD
    $output = '<h2 class="tour-tip-label" id="tour-tip-' . $this->getAriaId() . '-label">' . Html::escape($this->getLabel()) . '</h2>';
    $output .= '<p class="tour-tip-body" id="tour-tip-' . $this->getAriaId() . '-contents">' . $this->token->replace($this->getBody()) . '</p>';
=======
    // Call parent to trigger error when calling this function.
    parent::getOutput();
    $output = '<p class="tour-tip-body">' . $this->token->replace($this->get('body')) . '</p>';
>>>>>>> dev
    return ['#markup' => $output];
  }

}
