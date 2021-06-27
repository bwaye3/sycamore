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
 * Implementation of a String TypedData contextual block plugin used by Plugin
 * API context test.
 *
 * @see \Drupal\plugin_test\Plugin\MockBlockManager
 */
<<<<<<< HEAD
class TypedDataStringBlock extends ContextAwarePluginBase {
=======
class TypedDataStringBlock extends PluginBase implements ContextAwarePluginInterface {

  use ContextAwarePluginTrait;
>>>>>>> dev

  public function getTitle() {
    return $this->getContextValue('string');
  }

}
