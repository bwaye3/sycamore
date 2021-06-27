<?php

namespace Drupal\Tests\user\Kernel\Migrate\d7;

use Drupal\Core\Field\FieldConfigInterface;
use Drupal\field\Entity\FieldConfig;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * User picture field instance migration.
 *
 * @group user
 */
class MigrateUserPictureFieldInstanceTest extends MigrateDrupal7TestBase {

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
    ]);
  }

  /**
<<<<<<< HEAD
   * Test the user picture field migration.
=======
   * Tests the user picture field migration.
>>>>>>> dev
   */
  public function testUserPictureField() {
    /** @var \Drupal\field\FieldConfigInterface $field */
    $field = FieldConfig::load('user.user.user_picture');
    $this->assertInstanceOf(FieldConfigInterface::class, $field);
<<<<<<< HEAD
    $this->assertIdentical('user', $field->getTargetEntityTypeId());
    $this->assertIdentical('user', $field->getTargetBundle());
    $this->assertIdentical('user_picture', $field->getName());
=======
    $this->assertSame('user', $field->getTargetEntityTypeId());
    $this->assertSame('user', $field->getTargetBundle());
    $this->assertSame('user_picture', $field->getName());
>>>>>>> dev
  }

}
