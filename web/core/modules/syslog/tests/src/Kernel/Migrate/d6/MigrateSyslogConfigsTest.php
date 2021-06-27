<?php

namespace Drupal\Tests\syslog\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to syslog.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateSyslogConfigsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['syslog'];
=======
  protected static $modules = ['syslog'];
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
    $this->executeMigration('d6_syslog_settings');
  }

  /**
   * Tests migration of syslog variables to syslog.settings.yml.
   */
  public function testSyslogSettings() {
    $config = $this->config('syslog.settings');
<<<<<<< HEAD
    $this->assertIdentical('drupal', $config->get('identity'));
    $this->assertIdentical(128, $config->get('facility'));
=======
    $this->assertSame('drupal', $config->get('identity'));
    $this->assertSame(128, $config->get('facility'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'syslog.settings', $config->get());
  }

}
