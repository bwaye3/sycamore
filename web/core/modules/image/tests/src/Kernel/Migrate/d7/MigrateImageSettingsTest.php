<?php

namespace Drupal\Tests\image\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of Image variables to configuration.
 *
 * @group image
 */
class MigrateImageSettingsTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = ['image'];
=======
  protected static $modules = ['image'];
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
    $this->executeMigration('d7_image_settings');
  }

  /**
   * Tests the migration.
   */
  public function testMigration() {
    $config = $this->config('image.settings');
    // These settings are not recommended...
    $this->assertTrue($config->get('allow_insecure_derivatives'));
    $this->assertTrue($config->get('suppress_itok_output'));
<<<<<<< HEAD
    $this->assertIdentical("core/modules/image/testsample.png", $config->get('preview_image'));
=======
    $this->assertSame("core/modules/image/testsample.png", $config->get('preview_image'));
>>>>>>> dev
  }

}
