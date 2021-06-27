<?php

namespace Drupal\Tests\node\Kernel\Migrate;

use Drupal\Tests\migrate_drupal\Kernel\MigrateDrupalTestBase;
use Drupal\migrate_drupal\Tests\StubTestTrait;
use Drupal\node\Entity\NodeType;

/**
 * Test stub creation for nodes.
 *
 * @group node
 */
class MigrateNodeStubTest extends MigrateDrupalTestBase {

  use StubTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['node'];
=======
  protected static $modules = ['node'];
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
    $this->installEntitySchema('node');
    // Need at least one node type present.
    NodeType::create([
      'type' => 'testnodetype',
      'name' => 'Test node type',
    ])->save();
  }

  /**
   * Tests creation of node stubs.
   */
  public function testStub() {
    $this->performStubTest('node');
  }

}
