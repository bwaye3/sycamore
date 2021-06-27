<?php

namespace Drupal\Component\Plugin;

/**
 * A helper class to determine if a plugin is configurable.
 *
<<<<<<< HEAD
 * Because configurable plugins in Drupal 8 might implement either the
 * deprecated ConfigurablePluginInterface or the new ConfigurableInterface,
 * this static method is provided so that a calling class can determine if a
 * plugin is configurable without checking it against a deprecated interface.
 * In Drupal 9, this check should be reduced to checking for
 * ConfigurableInterface only and be deprecated in favor of calling classes
 * checking against the interface directly.
=======
 * @todo Deprecate this class. https://www.drupal.org/node/3105685
>>>>>>> dev
 */
class PluginHelper {

  /**
   * Determines if a plugin is configurable.
   *
   * @param mixed $plugin
   *   The plugin to check.
   *
   * @return bool
   *   A boolean indicating whether the plugin is configurable.
   */
  public static function isConfigurable($plugin) {
<<<<<<< HEAD
    return $plugin instanceof ConfigurableInterface || $plugin instanceof ConfigurablePluginInterface;
=======
    return $plugin instanceof ConfigurableInterface;
>>>>>>> dev
  }

}
