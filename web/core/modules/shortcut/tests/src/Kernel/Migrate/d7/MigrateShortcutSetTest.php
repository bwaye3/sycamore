<?php

namespace Drupal\Tests\shortcut\Kernel\Migrate\d7;

use Drupal\shortcut\Entity\ShortcutSet;
use Drupal\shortcut\ShortcutSetInterface;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Test shortcut_set migration to ShortcutSet entities.
 *
 * @group shortcut
 */
class MigrateShortcutSetTest extends MigrateDrupal7TestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'link',
    'field',
    'shortcut',
    'menu_link_content',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
    parent::setUp();
    $this->installEntitySchema('shortcut');
    $this->installEntitySchema('menu_link_content');
    \Drupal::service('router.builder')->rebuild();
    $this->executeMigration('d7_shortcut_set');
    $this->executeMigration('d7_menu');
    $this->executeMigration('d7_menu_links');
=======
  protected function setUp(): void {
    parent::setUp();
    $this->installEntitySchema('shortcut');
    $this->installEntitySchema('menu_link_content');
    $this->executeMigration('d7_shortcut_set');
    $this->executeMigration('d7_menu');
>>>>>>> dev
    $this->executeMigration('d7_shortcut');
  }

  /**
<<<<<<< HEAD
   * Test the shortcut set migration.
=======
   * Tests the shortcut set migration.
>>>>>>> dev
   */
  public function testShortcutSetMigration() {
    $this->assertEntity('default', 'Default', 2);
    $this->assertEntity('shortcut_set_2', 'Alternative shortcut set', 2);
  }

  /**
   * Asserts various aspects of a shortcut set entity.
   *
   * @param string $id
   *   The expected shortcut set ID.
   * @param string $label
   *   The expected shortcut set label.
   * @param int $expected_size
   *   The number of shortcuts expected to be in the set.
   */
  protected function assertEntity($id, $label, $expected_size) {
    $shortcut_set = ShortcutSet::load($id);
    $this->assertInstanceOf(ShortcutSetInterface::class, $shortcut_set);
    /** @var \Drupal\shortcut\ShortcutSetInterface $shortcut_set */
<<<<<<< HEAD
    $this->assertIdentical($id, $shortcut_set->id());
    $this->assertIdentical($label, $shortcut_set->label());

    // Check the number of shortcuts in the set.
    $shortcuts = $shortcut_set->getShortcuts();
    $this->assertIdentical(count($shortcuts), $expected_size);
=======
    $this->assertSame($id, $shortcut_set->id());
    $this->assertSame($label, $shortcut_set->label());

    // Check the number of shortcuts in the set.
    $shortcuts = $shortcut_set->getShortcuts();
    $this->assertCount($expected_size, $shortcuts);
>>>>>>> dev
  }

}
