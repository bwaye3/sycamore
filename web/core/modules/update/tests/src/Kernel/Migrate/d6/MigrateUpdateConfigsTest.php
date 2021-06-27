<?php

namespace Drupal\Tests\update\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to update.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateUpdateConfigsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['update'];
=======
  protected static $modules = ['update'];
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
    $this->executeMigration('update_settings');
  }

  /**
   * Tests migration of update variables to update.settings.yml.
   */
  public function testUpdateSettings() {
    $config = $this->config('update.settings');
<<<<<<< HEAD
    $this->assertIdentical(2, $config->get('fetch.max_attempts'));
    $this->assertIdentical('http://updates.drupal.org/release-history', $config->get('fetch.url'));
    $this->assertIdentical('all', $config->get('notification.threshold'));
    $this->assertIdentical([], $config->get('notification.emails'));
    $this->assertIdentical(7, $config->get('check.interval_days'));
=======
    $this->assertSame(2, $config->get('fetch.max_attempts'));
    $this->assertSame('https://updates.drupal.org/release-history', $config->get('fetch.url'));
    $this->assertSame('all', $config->get('notification.threshold'));
    $this->assertSame([], $config->get('notification.emails'));
    $this->assertSame(7, $config->get('check.interval_days'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'update.settings', $config->get());
  }

}
