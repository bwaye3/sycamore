<?php

namespace Drupal\Tests\tracker\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of Tracker settings to configuration.
 *
 * @group tracker
 */
class MigrateTrackerSettingsTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = ['tracker'];
=======
  protected static $modules = ['tracker'];
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
    $this->installConfig(['tracker']);
    $this->executeMigration('d7_tracker_settings');
  }

  /**
   * Tests migration of tracker's variables to configuration.
   */
  public function testMigration() {
<<<<<<< HEAD
    $this->assertIdentical(999, \Drupal::config('tracker.settings')->get('cron_index_limit'));
=======
    $this->assertSame(999, \Drupal::config('tracker.settings')->get('cron_index_limit'));
>>>>>>> dev
  }

}
