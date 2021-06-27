<?php

namespace Drupal\Tests\block_content\Kernel\Migrate;

use Drupal\block_content\BlockContentTypeInterface;
use Drupal\block_content\Entity\BlockContentType;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of the basic block content type.
 *
 * @group block_content
 */
class MigrateBlockContentTypeTest extends MigrateDrupal7TestBase {

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
    $this->executeMigration('block_content_type');
  }

  /**
   * Tests the block content type migration.
   */
  public function testBlockContentTypeMigration() {
    /** @var \Drupal\block_content\BlockContentTypeInterface $entity */
    $entity = BlockContentType::load('basic');
    $this->assertInstanceOf(BlockContentTypeInterface::class, $entity);
<<<<<<< HEAD
    $this->assertIdentical('Basic', $entity->label());
=======
    $this->assertSame('Basic', $entity->label());
>>>>>>> dev
  }

}
