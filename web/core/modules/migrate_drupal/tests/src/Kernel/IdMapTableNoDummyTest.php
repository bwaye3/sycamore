<?php

namespace Drupal\Tests\migrate_drupal\Kernel;

use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Test that no dummy migrate_map tables are created.
 *
 * @group migrate_drupal
 */
class IdMapTableNoDummyTest extends MigrateDrupal6TestBase {

  /**
   * The migration plugin manager.
   *
   * @var \Drupal\migrate\Plugin\MigrationPluginManagerInterface
   */
  protected $pluginManager;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function setUp() {
=======
  public function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->pluginManager = $this->container->get('plugin.manager.migration');
    $this->pluginManager->createInstance('d6_user');
  }

  /**
<<<<<<< HEAD
   * Test that dummy map tables do not exist.
=======
   * Tests that dummy map tables do not exist.
>>>>>>> dev
   */
  public function testNoDummyTables() {
    $database = \Drupal::database();
    $tables = $database->schema()->findTables('%migrate_map%');
    $dummy_tables = preg_grep("/.*migrate_map_([0-9a-fA-F]){13}/", $tables);
    $this->assertCount(0, $dummy_tables);
  }

}
