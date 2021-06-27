<?php

namespace Drupal\Tests\action\Kernel\Migrate\d7;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Upgrade variables to null.
 *
 * @group migrate_drupal_7
 */
class MigrateActionConfigsTest extends MigrateDrupal7TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['action'];
=======
  protected static $modules = ['action'];
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
    $this->executeMigration('action_settings');
  }

  /**
   * Tests migration of action variables to null.
   */
  public function testActionSettings() {
    $config = $this->config('action.settings');
    $this->assertTrue($config->isNew());
  }

}
