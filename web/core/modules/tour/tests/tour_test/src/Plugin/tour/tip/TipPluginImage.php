<?php

namespace Drupal\tour_test\Plugin\tour\tip;

<<<<<<< HEAD
use Drupal\Component\Utility\Html;
use Drupal\tour\TipPluginBase;
=======
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Utility\Token;
use Drupal\tour\TipPluginBase;
use Drupal\tour\TourTipPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
>>>>>>> dev

/**
 * Displays an image as a tip.
 *
 * @Tip(
 *   id = "image",
 *   title = @Translation("Image")
 * )
 */
<<<<<<< HEAD
class TipPluginImage extends TipPluginBase {
=======
class TipPluginImage extends TipPluginBase implements ContainerFactoryPluginInterface, TourTipPluginInterface {
>>>>>>> dev

  /**
   * The url which is used for the image in this Tip.
   *
   * @var string
   *   A url used for the image.
   */
  protected $url;

  /**
   * The alt text which is used for the image in this Tip.
   *
   * @var string
<<<<<<< HEAD
   *   A alt text used for the image.
=======
   *   An alt text used for the image.
>>>>>>> dev
   */
  protected $alt;

  /**
<<<<<<< HEAD
   * {@inheritdoc}
   */
  public function getOutput() {
    $prefix = '<h2 class="tour-tip-label" id="tour-tip-' . $this->get('ariaId') . '-label">' . Html::escape($this->get('label')) . '</h2>';
    $prefix .= '<p class="tour-tip-image" id="tour-tip-' . $this->get('ariaId') . '-contents">';
    return [
      '#prefix' => $prefix,
      '#theme' => 'image',
      '#uri' => $this->get('url'),
      '#alt' => $this->get('alt'),
      '#suffix' => '</p>',
=======
   * Token service.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $token;

  /**
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
   * {@inheritdoc}
   */
  public function getBody(): array {
    $image = [
      '#theme' => 'image',
      '#uri' => $this->get('url'),
      '#alt' => $this->get('alt'),
    ];

    return [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#attributes' => [
        'class' => ['tour-tip-image'],
      ],
      'image' => $image,
>>>>>>> dev
    ];
  }

}
