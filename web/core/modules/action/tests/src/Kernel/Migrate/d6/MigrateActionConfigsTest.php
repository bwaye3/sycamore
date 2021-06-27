<?php

namespace Drupal\Tests\action\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to null.
 *
 * @group migrate_drupal_6
 */
class MigrateActionConfigsTest extends MigrateDrupal6TestBase {

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
