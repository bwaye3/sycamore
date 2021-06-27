<?php

namespace Drupal\sitemap\Controller;

<<<<<<< HEAD
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
=======
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\sitemap\SitemapManager;
>>>>>>> dev

/**
 * Controller routines for update routes.
 */
class SitemapController implements ContainerInjectionInterface {

  /**
<<<<<<< HEAD
   * Module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;
=======
   * The configuration factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The SitemapMap plugin manager.
   *
   * @var \Drupal\sitemap\SitemapManager
   */
  protected $sitemapManager;
>>>>>>> dev

  /**
   * Constructs update status data.
   *
<<<<<<< HEAD
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   Module Handler Service.
   */
  public function __construct(ModuleHandlerInterface $module_handler) {
    $this->moduleHandler = $module_handler;
=======
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The configuration factory.
   * @param \Drupal\sitemap\SitemapManager $sitemap_manager
   *   The SitemapMap plugin manager.
   */
  public function __construct(ConfigFactoryInterface $config_factory, SitemapManager $sitemap_manager) {
    $this->configFactory = $config_factory;
    $this->sitemapManager = $sitemap_manager;
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
<<<<<<< HEAD
      $container->get('module_handler')
=======
      $container->get('config.factory'),
      $container->get('plugin.manager.sitemap')
>>>>>>> dev
    );
  }

  /**
   * Controller for /sitemap.
   *
   * @return array
<<<<<<< HEAD
   *   Renderable string.
   */
  public function buildPage() {
    $sitemap = array(
      '#theme' => 'sitemap',
    );

    // Check whether to include the default CSS.
    $config = \Drupal::config('sitemap.settings');
    if ($config->get('css') == 1) {
      $sitemap['#attached']['library'] = array(
        'sitemap/sitemap.theme',
      );
=======
   *   Renderable array.
   */
  public function buildSitemap() {
    $config = $this->configFactory->get('sitemap.settings');

    // Build the Sitemap message.
    $message = '';
    if (!empty($config->get('message')) && !empty($config->get('message')['value'])) {
      $message = check_markup($config->get('message')['value'], $config->get('message')['format']);
    }

    // Build the plugin content.
    $plugins_config = $config->get('plugins');
    $plugins = [];
    $plugin_config = [];
    $definitions = $this->sitemapManager->getDefinitions();
    foreach ($definitions as $id => $definition) {
      if ($this->sitemapManager->hasDefinition($id)) {
        if (!empty($plugins_config[$id])) {
          $plugin_config = $plugins_config[$id];
        }
        $instance = $this->sitemapManager->createInstance($id, $plugin_config);
        if ($instance->enabled) {
          $plugins[] = $instance->view() + ['#weight' => $instance->weight];
        }
      }
    }
    uasort($plugins, ['Drupal\Component\Utility\SortArray', 'sortByWeightProperty']);

    // Build the render array.
    $sitemap = [
      '#theme' => 'sitemap',
      '#message' => $message,
      '#sitemap_items' => $plugins,
    ];

    // Check whether to include the default CSS.
    if ($config->get('include_css') == 1) {
      $sitemap['#attached']['library'] = [
        'sitemap/sitemap.theme',
      ];
>>>>>>> dev
    }

    return $sitemap;
  }

  /**
   * Returns sitemap page's title.
   *
   * @return string
   *   Sitemap page title.
   */
  public function getTitle() {
<<<<<<< HEAD
    $config = \Drupal::config('sitemap.settings');
=======
    $config = $this->configFactory->get('sitemap.settings');
>>>>>>> dev
    return $config->get('page_title');
  }

}
