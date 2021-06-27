<?php

namespace Drupal\tracker\Plugin\Menu;

use Drupal\Core\Menu\LocalTaskDefault;
<<<<<<< HEAD
use Drupal\Core\Routing\RouteMatchInterface;
=======
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
>>>>>>> dev

/**
 * Provides route parameters needed to link to the current user tracker tab.
 */
<<<<<<< HEAD
class UserTrackerTab extends LocalTaskDefault {
=======
class UserTrackerTab extends LocalTaskDefault implements ContainerFactoryPluginInterface {
>>>>>>> dev

  /**
   * Current user object.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
<<<<<<< HEAD
   * Gets the current active user.
   *
   * @todo: https://www.drupal.org/node/2105123 put this method in
   *   \Drupal\Core\Plugin\PluginBase instead.
   *
   * @return \Drupal\Core\Session\AccountInterface
   */
  protected function currentUser() {
    if (!$this->currentUser) {
      $this->currentUser = \Drupal::currentUser();
    }
    return $this->currentUser;
=======
   * Construct the UserTrackerTab object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param array $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   */
  public function __construct(array $configuration, $plugin_id, array $plugin_definition, AccountInterface $current_user) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->currentUser = $current_user;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_user')
    );
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function getRouteParameters(RouteMatchInterface $route_match) {
<<<<<<< HEAD
    return ['user' => $this->currentUser()->Id()];
=======
    return ['user' => $this->currentUser->id()];
>>>>>>> dev
  }

}
