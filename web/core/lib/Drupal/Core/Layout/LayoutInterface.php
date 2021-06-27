<?php

namespace Drupal\Core\Layout;

<<<<<<< HEAD
use Drupal\Component\Plugin\ConfigurablePluginInterface;
=======
>>>>>>> dev
use Drupal\Component\Plugin\DerivativeInspectionInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\Component\Plugin\DependentPluginInterface;
<<<<<<< HEAD
=======
use Drupal\Core\Plugin\ContextAwarePluginInterface;
>>>>>>> dev

/**
 * Provides an interface for static Layout plugins.
 */
<<<<<<< HEAD
interface LayoutInterface extends PluginInspectionInterface, DerivativeInspectionInterface, ConfigurableInterface, DependentPluginInterface, ConfigurablePluginInterface {
=======
interface LayoutInterface extends PluginInspectionInterface, DerivativeInspectionInterface, ConfigurableInterface, DependentPluginInterface, ContextAwarePluginInterface {
>>>>>>> dev

  /**
   * Build a render array for layout with regions.
   *
   * @param array $regions
   *   An associative array keyed by region name, containing render arrays
   *   representing the content that should be placed in each region.
   *
   * @return array
   *   Render array for the layout with regions.
   */
  public function build(array $regions);

  /**
   * {@inheritdoc}
   *
   * @return \Drupal\Core\Layout\LayoutDefinition
   */
  public function getPluginDefinition();

}
