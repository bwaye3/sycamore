<?php

namespace Drupal\Tests\taxonomy\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;
use Drupal\node\Entity\Node;
use Drupal\node\NodeInterface;

/**
 * @group taxonomy
 */
class MigrateNodeTaxonomyTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'comment',
    'datetime',
    'image',
    'link',
    'menu_ui',
    'node',
    'taxonomy',
    'telephone',
    'text',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('file');

    $this->migrateTaxonomyTerms();
    $this->migrateUsers(FALSE);
    $this->executeMigration('d7_node:article');
  }

  /**
<<<<<<< HEAD
   * Test node migration from Drupal 7 to 8.
=======
   * Tests node migration from Drupal 7 to 8.
>>>>>>> dev
   */
  public function testMigration() {
    $node = Node::load(2);
    $this->assertInstanceOf(NodeInterface::class, $node);
<<<<<<< HEAD
    $this->assertEqual(9, $node->field_tags[0]->target_id);
    $this->assertEqual(14, $node->field_tags[1]->target_id);
    $this->assertEqual(17, $node->field_tags[2]->target_id);
=======
    $this->assertEquals(9, $node->field_tags[0]->target_id);
    $this->assertEquals(14, $node->field_tags[1]->target_id);
    $this->assertEquals(17, $node->field_tags[2]->target_id);
>>>>>>> dev
  }

}
