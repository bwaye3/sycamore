<?php

namespace Drupal\Tests\menu_ui\Kernel\Migrate;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of menu_ui settings.
 *
 * @group menu_ui
 */
class MigrateMenuSettingsTest extends MigrateDrupal7TestBase {

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
    $this->installConfig(['menu_ui']);
    $this->executeMigration('menu_settings');
  }

  public function testMigration() {
    $this->assertTrue(\Drupal::config('menu_ui.settings')->get('override_parent_selector'));
  }

}
