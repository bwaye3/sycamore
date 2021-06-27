<?php

namespace Drupal\Core\Plugin;

use Drupal\Component\Plugin\ContextAwarePluginInterface as ComponentContextAwarePluginInterface;

/**
 * An override of ContextAwarePluginInterface for documentation purposes.
 *
 * @see \Drupal\Component\Plugin\ContextAwarePluginInterface
<<<<<<< HEAD
=======
 * @see \Drupal\Core\Plugin\ContextAwarePluginTrait
>>>>>>> dev
 *
 * @ingroup plugin_api
 */
interface ContextAwarePluginInterface extends ComponentContextAwarePluginInterface {

  /**
   * Gets the context definitions of the plugin.
   *
   * @return \Drupal\Core\Plugin\Context\ContextDefinitionInterface[]
   *   The array of context definitions, keyed by context name.
   */
  public function getContextDefinitions();

  /**
   * Gets a specific context definition of the plugin.
   *
   * @param string $name
   *   The name of the context in the plugin definition.
   *
   * @return \Drupal\Core\Plugin\Context\ContextDefinitionInterface
   *   The definition against which the context value must validate.
   *
<<<<<<< HEAD
   * @throws \Drupal\Component\Plugin\Exception\PluginException
=======
   * @throws \Drupal\Component\Plugin\Exception\ContextException
>>>>>>> dev
   *   If the requested context is not defined.
   */
  public function getContextDefinition($name);

}
