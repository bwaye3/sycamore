<?php

namespace Drupal\Tests\node\Kernel\Migrate\d7;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Upgrade variables to node.settings config object.
 *
 * @group node
 */
class MigrateNodeSettingsTest extends MigrateDrupal7TestBase {

  use SchemaCheckTestTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node'];
=======
  protected static $modules = ['node'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->executeMigration('d7_node_settings');
  }

  /**
   * Tests migration of node variables to node.settings config object.
   */
  public function testAggregatorSettings() {
    $config = $this->config('node.settings');
<<<<<<< HEAD
    $this->assertEqual(1, $config->get('use_admin_theme'));
=======
    $this->assertEquals(1, $config->get('use_admin_theme'));
>>>>>>> dev
  }

}
