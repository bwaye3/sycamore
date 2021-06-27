<?php

namespace Drupal\Tests\config_translation\Kernel\Migrate\d6;

use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade i18n maintenance variables to system.*.yml.
 *
 * @group migrate_drupal_6
<<<<<<< HEAD
 * @group legacy
 */
class MigrateSystemMaintenanceTranslationTest extends MigrateDrupal6TestBase {

  public static $modules = [
=======
 */
class MigrateSystemMaintenanceTranslationTest extends MigrateDrupal6TestBase {

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
    $this->executeMigration('d6_system_maintenance_translation');
  }

  /**
   * Tests migration of system (maintenance) variables to system.maintenance.yml.
   */
  public function testSystemMaintenance() {
    $config = \Drupal::service('language_manager')->getLanguageConfigOverride('fr', 'system.maintenance');
    $this->assertIdentical('fr - Drupal is currently under maintenance. We should be back shortly. Thank you for your patience.', $config->get('message'));
=======
  protected function setUp(): void {
    parent::setUp();
    $this->executeMigrations([
      'language',
      'system_maintenance',
      'd6_system_maintenance_translation',
    ]);
  }

  /**
   * Tests migration of system variables to system.maintenance.yml.
   */
  public function testSystemMaintenance() {
    $config = \Drupal::service('language_manager')->getLanguageConfigOverride('fr', 'system.maintenance');
    $this->assertSame('fr - Drupal is currently under maintenance. We should be back shortly. Thank you for your patience.', $config->get('message'));
>>>>>>> dev
  }

}
