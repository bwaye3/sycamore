<?php

namespace Drupal\search\Plugin;

use Drupal\Component\Plugin\ConfigurableInterface;
<<<<<<< HEAD
use Drupal\Component\Plugin\ConfigurablePluginInterface;
=======
>>>>>>> dev
use Drupal\Component\Plugin\DependentPluginInterface;
use Drupal\Core\Plugin\PluginFormInterface;

/**
 * Provides an interface for a configurable Search plugin.
 */
<<<<<<< HEAD
interface ConfigurableSearchPluginInterface extends ConfigurableInterface, DependentPluginInterface, ConfigurablePluginInterface, PluginFormInterface, SearchInterface {
=======
interface ConfigurableSearchPluginInterface extends ConfigurableInterface, DependentPluginInterface, PluginFormInterface, SearchInterface {
>>>>>>> dev

  /**
   * Sets the ID for the search page using this plugin.
   *
   * @param string $search_page_id
   *   The search page ID.
   *
   * @return static
   */
  public function setSearchPageId($search_page_id);

}
