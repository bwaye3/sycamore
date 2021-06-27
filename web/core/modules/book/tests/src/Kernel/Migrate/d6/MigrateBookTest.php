<?php

namespace Drupal\Tests\book\Kernel\Migrate\d6;

use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;
use Drupal\node\Entity\Node;

/**
 * Upgrade book structure.
 *
 * @group migrate_drupal_6
 */
class MigrateBookTest extends MigrateDrupal6TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['book', 'node', 'menu_ui'];
=======
  protected static $modules = ['book', 'node', 'menu_ui'];
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
    $this->installSchema('book', ['book']);
    $this->installSchema('node', ['node_access']);
    $this->migrateContent();
    $this->executeMigrations(['d6_node', 'd6_book']);
  }

  /**
   * Tests the Drupal 6 book structure to Drupal 8 migration.
   */
  public function testBook() {
    $nodes = Node::loadMultiple([4, 5, 6, 7, 8]);
<<<<<<< HEAD
    $this->assertIdentical('4', $nodes[4]->book['bid']);
    $this->assertIdentical('0', $nodes[4]->book['pid']);

    $this->assertIdentical('4', $nodes[5]->book['bid']);
    $this->assertIdentical('4', $nodes[5]->book['pid']);

    $this->assertIdentical('4', $nodes[6]->book['bid']);
    $this->assertIdentical('5', $nodes[6]->book['pid']);

    $this->assertIdentical('4', $nodes[7]->book['bid']);
    $this->assertIdentical('5', $nodes[7]->book['pid']);

    $this->assertIdentical('8', $nodes[8]->book['bid']);
    $this->assertIdentical('0', $nodes[8]->book['pid']);

    $tree = \Drupal::service('book.manager')->bookTreeAllData(4);
    $this->assertIdentical('4', $tree['49990 Node 4 4']['link']['nid']);
    $this->assertIdentical('5', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['link']['nid']);
    $this->assertIdentical('6', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 6 6']['link']['nid']);
    $this->assertIdentical('7', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 7 7']['link']['nid']);
    $this->assertIdentical([], $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 6 6']['below']);
    $this->assertIdentical([], $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 7 7']['below']);
=======
    $this->assertSame('4', $nodes[4]->book['bid']);
    $this->assertSame('0', $nodes[4]->book['pid']);

    $this->assertSame('4', $nodes[5]->book['bid']);
    $this->assertSame('4', $nodes[5]->book['pid']);

    $this->assertSame('4', $nodes[6]->book['bid']);
    $this->assertSame('5', $nodes[6]->book['pid']);

    $this->assertSame('4', $nodes[7]->book['bid']);
    $this->assertSame('5', $nodes[7]->book['pid']);

    $this->assertSame('8', $nodes[8]->book['bid']);
    $this->assertSame('0', $nodes[8]->book['pid']);

    $tree = \Drupal::service('book.manager')->bookTreeAllData(4);
    $this->assertSame('4', $tree['49990 Node 4 4']['link']['nid']);
    $this->assertSame('5', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['link']['nid']);
    $this->assertSame('6', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 6 6']['link']['nid']);
    $this->assertSame('7', $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 7 7']['link']['nid']);
    $this->assertSame([], $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 6 6']['below']);
    $this->assertSame([], $tree['49990 Node 4 4']['below']['50000 Node 5 5']['below']['50000 Node 7 7']['below']);
>>>>>>> dev

    // Set the d6_book migration to update and re run the migration.
    $id_map = $this->migration->getIdMap();
    $id_map->prepareUpdate();
    $this->executeMigration('d6_book');
  }

}
