<?php

namespace Drupal\Tests\file\Kernel\Migrate\d6;

use Drupal\Core\Entity\Entity\EntityViewDisplay;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upload entity display.
 *
 * @group migrate_drupal_6
 */
class MigrateUploadEntityDisplayTest extends MigrateDrupal6TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['menu_ui'];
=======
  protected static $modules = ['menu_ui'];
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
    $this->migrateFields();
  }

  /**
   * Tests Drupal 6 upload settings to Drupal 8 entity display migration.
   */
  public function testUploadEntityDisplay() {
    $this->executeMigration('d6_upload_entity_display');

    $display = EntityViewDisplay::load('node.page.default');
    $component = $display->getComponent('upload');
<<<<<<< HEAD
    $this->assertIdentical('file_default', $component['type']);

    $display = EntityViewDisplay::load('node.story.default');
    $component = $display->getComponent('upload');
    $this->assertIdentical('file_default', $component['type']);
=======
    $this->assertSame('file_default', $component['type']);

    $display = EntityViewDisplay::load('node.story.default');
    $component = $display->getComponent('upload');
    $this->assertSame('file_default', $component['type']);
>>>>>>> dev

    // Assure this doesn't exist.
    $display = EntityViewDisplay::load('node.article.default');
    $component = $display->getComponent('upload');
    $this->assertNull($component);

<<<<<<< HEAD
    $this->assertIdentical([['node', 'page', 'default', 'upload']], $this->getMigration('d6_upload_entity_display')->getIdMap()->lookupDestinationIds(['page']));
=======
    $this->assertSame([['node', 'page', 'default', 'upload']], $this->getMigration('d6_upload_entity_display')->getIdMap()->lookupDestinationIds(['page']));
>>>>>>> dev
  }

  /**
   * Tests that entity displays are ignored appropriately.
   *
   * Entity displays should be ignored when they belong to node types which
   * were not migrated.
   */
  public function testSkipNonExistentNodeType() {
    // The "story" node type is migrated by d6_node_type but we need to pretend
    // that it didn't occur, so record that in the map table.
    $this->mockFailure('d6_node_type', ['type' => 'story']);

    // d6_upload_entity_display should skip over the "story" node type config
    // because, according to the map table, it didn't occur.
    $migration = $this->getMigration('d6_upload_entity_display');

    $this->executeMigration($migration);
    $this->assertNull($migration->getIdMap()->lookupDestinationIds(['node_type' => 'story'])[0][0]);
  }

}
