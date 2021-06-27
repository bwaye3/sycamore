<?php

namespace Drupal\Tests\block_content\Kernel\Migrate;

use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\FieldConfigInterface;
use Drupal\field\FieldStorageConfigInterface;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Attaches a body field to the custom block type.
 *
 * @group block_content
 */
class MigrateBlockContentBodyFieldTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = ['block', 'block_content', 'filter', 'text'];
=======
  protected static $modules = ['block', 'block_content', 'filter', 'text'];
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
    $this->installEntitySchema('block_content');
    $this->installConfig(['block_content']);
    $this->executeMigrations([
      'block_content_type',
      'block_content_body_field',
    ]);
  }

  /**
   * Tests the block content body field migration.
   */
  public function testBlockContentBodyFieldMigration() {
    /** @var \Drupal\field\FieldStorageConfigInterface $storage */
    $storage = FieldStorageConfig::load('block_content.body');
    $this->assertInstanceOf(FieldStorageConfigInterface::class, $storage);
<<<<<<< HEAD
    $this->assertIdentical('block_content', $storage->getTargetEntityTypeId());
    $this->assertIdentical(['basic'], array_values($storage->getBundles()));
    $this->assertIdentical('body', $storage->getName());
=======
    $this->assertSame('block_content', $storage->getTargetEntityTypeId());
    $this->assertSame(['basic'], array_values($storage->getBundles()));
    $this->assertSame('body', $storage->getName());
>>>>>>> dev

    /** @var \Drupal\field\FieldConfigInterface $field */
    $field = FieldConfig::load('block_content.basic.body');
    $this->assertInstanceOf(FieldConfigInterface::class, $field);
<<<<<<< HEAD
    $this->assertIdentical('block_content', $field->getTargetEntityTypeId());
    $this->assertIdentical('basic', $field->getTargetBundle());
    $this->assertIdentical('body', $field->getName());
    $this->assertIdentical('Body', $field->getLabel());
=======
    $this->assertSame('block_content', $field->getTargetEntityTypeId());
    $this->assertSame('basic', $field->getTargetBundle());
    $this->assertSame('body', $field->getName());
    $this->assertSame('Body', $field->getLabel());
>>>>>>> dev
  }

}
