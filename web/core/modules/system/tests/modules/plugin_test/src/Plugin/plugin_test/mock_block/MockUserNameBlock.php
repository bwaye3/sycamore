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
 * Implementation of a user name block plugin used by Plugin API context test.
 *
 * @see \Drupal\plugin_test\Plugin\MockBlockManager
 */
<<<<<<< HEAD
class MockUserNameBlock extends ContextAwarePluginBase {
=======
class MockUserNameBlock extends PluginBase implements ContextAwarePluginInterface {

  use ContextAwarePluginTrait;
>>>>>>> dev

  public function getTitle() {
    $user = $this->getContextValue('user');
    return $user->label();
  }

}
