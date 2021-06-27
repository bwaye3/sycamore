<?php

namespace Drupal\Tests\dblog\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Upgrade variables to dblog.settings.yml.
 *
 * @group migrate_drupal_7
 */
class MigrateDblogConfigsTest extends MigrateDrupal7TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['dblog'];
=======
  protected static $modules = ['dblog'];
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
    $this->installConfig(static::$modules);
    $this->executeMigration('d7_dblog_settings');
  }

  /**
   * Tests migration of dblog variables to dblog.settings.yml.
   */
  public function testDblogSettings() {
    $config = $this->config('dblog.settings');
<<<<<<< HEAD
    $this->assertIdentical(10000, $config->get('row_limit'));
=======
    $this->assertSame(10000, $config->get('row_limit'));
>>>>>>> dev
  }

}
