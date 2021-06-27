<?php

namespace Drupal\Tests\action\Unit\Menu;

use Drupal\Tests\Core\Menu\LocalTaskIntegrationTestBase;

/**
 * Tests action local tasks.
 *
 * @group action
 */
class ActionLocalTasksTest extends LocalTaskIntegrationTestBase {

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    $this->directoryList = ['action' => 'core/modules/action'];
    parent::setUp();
  }

  /**
   * Tests local task existence.
   */
  public function testActionLocalTasks() {
    $this->assertLocalTasks('entity.action.collection', [['action.admin']]);
  }

}
