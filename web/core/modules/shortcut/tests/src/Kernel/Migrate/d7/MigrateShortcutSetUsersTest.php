<?php

namespace Drupal\Tests\shortcut\Kernel\Migrate\d7;

use Drupal\user\Entity\User;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Test shortcut_set_users migration.
 *
 * @group shortcut
 */
class MigrateShortcutSetUsersTest extends MigrateDrupal7TestBase {

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
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('shortcut');
    $this->installEntitySchema('menu_link_content');
    $this->installSchema('shortcut', ['shortcut_set_users']);
<<<<<<< HEAD
    \Drupal::service('router.builder')->rebuild();
    $this->migrateUsers(FALSE);
    $this->executeMigration('d7_shortcut_set');
    $this->executeMigration('d7_menu');
    $this->executeMigration('d7_menu_links');
=======
    $this->migrateUsers(FALSE);
    $this->executeMigration('d7_shortcut_set');
    $this->executeMigration('d7_menu');
>>>>>>> dev
    $this->executeMigration('d7_shortcut');
    $this->executeMigration('d7_shortcut_set_users');
  }

  /**
<<<<<<< HEAD
   * Test the shortcut set migration.
=======
   * Tests the shortcut set migration.
>>>>>>> dev
   */
  public function testShortcutSetUsersMigration() {
    // Check if migrated user has correct migrated shortcut set assigned.
    $account = User::load(2);
    $shortcut_set = shortcut_current_displayed_set($account);
    /** @var \Drupal\shortcut\ShortcutSetInterface $shortcut_set */
<<<<<<< HEAD
    $this->assertIdentical('shortcut_set_2', $shortcut_set->id());
=======
    $this->assertSame('shortcut_set_2', $shortcut_set->id());
>>>>>>> dev
  }

}
