<?php

namespace Drupal\Tests\config_translation\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migrations of i18n maintenance variable.
 *
 * @group migrate_drupal_7
 */
class MigrateSystemMaintenanceTranslationTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'language',
    'config_translation',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
    parent::setUp();
    $this->executeMigration('d7_system_maintenance_translation');
=======
  protected function setUp(): void {
    parent::setUp();
    $this->executeMigrations([
      'language',
      'system_maintenance',
      'd7_system_maintenance_translation',
    ]);
>>>>>>> dev
  }

  /**
   * Tests migrations of i18n maintenance variable.
   */
  public function testSystemMaintenance() {
    $config = \Drupal::service('language_manager')->getLanguageConfigOverride('is', 'system.maintenance');
    $this->assertSame('is - This is a custom maintenance mode message.', $config->get('message'));
  }

}
