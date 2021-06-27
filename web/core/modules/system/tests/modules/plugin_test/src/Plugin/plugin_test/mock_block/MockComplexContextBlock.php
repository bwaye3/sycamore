<?php

namespace Drupal\plugin_test\Plugin\plugin_test\mock_block;

<<<<<<< HEAD
use Drupal\Core\Plugin\ContextAwarePluginBase;
=======
use Drupal\Core\Plugin\ContextAwarePluginInterface;
use Drupal\Core\Plugin\ContextAwarePluginTrait;
use Drupal\Core\Plugin\PluginBase;
>>>>>>> dev

/**
 * Implementation of a complex context plugin used by Plugin API context tests.
 *
 * @see \Drupal\plugin_test\Plugin\MockBlockManager
 */
<<<<<<< HEAD
class MockComplexContextBlock extends ContextAwarePluginBase {
=======
class MockComplexContextBlock extends PluginBase implements ContextAwarePluginInterface {

  use ContextAwarePluginTrait;
>>>>>>> dev

  public function getTitle() {
    $user = $this->getContextValue('user');
    $node = $this->getContextValue('node');
    return $user->label() . ' -- ' . $node->label();
  }

}
