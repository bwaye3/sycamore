<?php

namespace Drupal\Tests\migrate\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the migration plugin.
 *
 * @group migrate
 *
 * @coversDefaultClass \Drupal\migrate\Plugin\Migration
 */
class MigrationTest extends KernelTestBase {

  /**
   * Enable field because we are using one of its source plugins.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['migrate', 'field'];
=======
  protected static $modules = ['migrate', 'field'];
>>>>>>> dev

  /**
   * Tests Migration::set().
   *
   * @covers ::set
   */
  public function testSetInvalidation() {
    $migration = \Drupal::service('plugin.manager.migration')->createStubMigration([
      'source' => ['plugin' => 'empty'],
      'destination' => ['plugin' => 'entity:entity_view_mode'],
    ]);
<<<<<<< HEAD
    $this->assertEqual('empty', $migration->getSourcePlugin()->getPluginId());
    $this->assertEqual('entity:entity_view_mode', $migration->getDestinationPlugin()->getPluginId());

    // Test the source plugin is invalidated.
    $migration->set('source', ['plugin' => 'embedded_data', 'data_rows' => [], 'ids' => []]);
    $this->assertEqual('embedded_data', $migration->getSourcePlugin()->getPluginId());

    // Test the destination plugin is invalidated.
    $migration->set('destination', ['plugin' => 'null']);
    $this->assertEqual('null', $migration->getDestinationPlugin()->getPluginId());
=======
    $this->assertEquals('empty', $migration->getSourcePlugin()->getPluginId());
    $this->assertEquals('entity:entity_view_mode', $migration->getDestinationPlugin()->getPluginId());

    // Test the source plugin is invalidated.
    $migration->set('source', ['plugin' => 'embedded_data', 'data_rows' => [], 'ids' => []]);
    $this->assertEquals('embedded_data', $migration->getSourcePlugin()->getPluginId());

    // Test the destination plugin is invalidated.
    $migration->set('destination', ['plugin' => 'null']);
    $this->assertEquals('null', $migration->getDestinationPlugin()->getPluginId());
>>>>>>> dev
  }

}
