<?php

namespace Drupal\Tests\file\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to file.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateFileConfigsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->executeMigration('file_settings');
  }

  /**
   * Tests migration of file variables to file.settings.yml.
   */
  public function testFileSettings() {
    $config = $this->config('file.settings');
<<<<<<< HEAD
    $this->assertIdentical('textfield', $config->get('description.type'));
    $this->assertIdentical(128, $config->get('description.length'));
    $this->assertIdentical('sites/default/files/icons', $config->get('icon.directory'));
=======
    $this->assertSame('textfield', $config->get('description.type'));
    $this->assertSame(128, $config->get('description.length'));
    $this->assertSame('sites/default/files/icons', $config->get('icon.directory'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'file.settings', $config->get());
  }

}
