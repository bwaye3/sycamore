<?php

namespace Drupal\Tests\user\Kernel\Migrate\d7;

use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of the user_picture field's entity form display settings.
 *
 * @group user
 */
class MigrateUserPictureEntityFormDisplayTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = ['image', 'file'];
=======
  protected static $modules = ['image', 'file'];
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
    $this->executeMigrations([
      'user_picture_field',
      'user_picture_field_instance',
      'user_picture_entity_form_display',
    ]);
  }

  /**
   * Tests the field's entity form display settings.
   */
  public function testEntityFormDisplaySettings() {
    $component = EntityFormDisplay::load('user.user.default')->getComponent('user_picture');
<<<<<<< HEAD
    $this->assertIdentical('image_image', $component['type']);
    $this->assertIdentical('throbber', $component['settings']['progress_indicator']);
    $this->assertIdentical('thumbnail', $component['settings']['preview_image_style']);
=======
    $this->assertSame('image_image', $component['type']);
    $this->assertSame('throbber', $component['settings']['progress_indicator']);
    $this->assertSame('thumbnail', $component['settings']['preview_image_style']);
>>>>>>> dev
  }

}
