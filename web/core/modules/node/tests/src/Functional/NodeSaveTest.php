<?php

namespace Drupal\Tests\node\Functional;

use Drupal\node\Entity\Node;

/**
 * Tests $node->save() for saving content.
 *
 * @group node
 */
class NodeSaveTest extends NodeTestBase {

  /**
   * A normal logged in user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $webUser;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node_test'];
=======
  protected static $modules = ['node_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a user that is allowed to post; we'll use this to test the submission.
    $web_user = $this->drupalCreateUser(['create article content']);
    $this->drupalLogin($web_user);
    $this->webUser = $web_user;
  }

  /**
   * Checks whether custom node IDs are saved properly during an import operation.
   *
   * Workflow:
   *  - first create a piece of content
   *  - save the content
   *  - check if node exists
   */
  public function testImport() {
    // Node ID must be a number that is not in the database.
    $nids = \Drupal::entityTypeManager()->getStorage('node')->getQuery()
<<<<<<< HEAD
=======
      ->accessCheck(FALSE)
>>>>>>> dev
      ->sort('nid', 'DESC')
      ->range(0, 1)
      ->execute();
    $max_nid = reset($nids);
    $test_nid = $max_nid + mt_rand(1000, 1000000);
    $title = $this->randomMachineName(8);
    $node = [
      'title' => $title,
      'body' => [['value' => $this->randomMachineName(32)]],
      'uid' => $this->webUser->id(),
      'type' => 'article',
      'nid' => $test_nid,
    ];
    /** @var \Drupal\node\NodeInterface $node */
    $node = Node::create($node);
    $node->enforceIsNew();

<<<<<<< HEAD
    $this->assertEqual($node->getOwnerId(), $this->webUser->id());
=======
    $this->assertEquals($this->webUser->id(), $node->getOwnerId());
>>>>>>> dev

    $node->save();
    // Test the import.
    $node_by_nid = Node::load($test_nid);
    $this->assertNotEmpty($node_by_nid, 'Node load by node ID.');

    $node_by_title = $this->drupalGetNodeByTitle($title);
    $this->assertNotEmpty($node_by_title, 'Node load by node title.');
  }

  /**
   * Verifies accuracy of the "created" and "changed" timestamp functionality.
   */
  public function testTimestamps() {
    // Use the default timestamps.
    $edit = [
      'uid' => $this->webUser->id(),
      'type' => 'article',
      'title' => $this->randomMachineName(8),
    ];

    Node::create($edit)->save();
    $node = $this->drupalGetNodeByTitle($edit['title']);
<<<<<<< HEAD
    $this->assertEqual($node->getCreatedTime(), REQUEST_TIME, 'Creating a node sets default "created" timestamp.');
    $this->assertEqual($node->getChangedTime(), REQUEST_TIME, 'Creating a node sets default "changed" timestamp.');
=======
    $this->assertEquals(REQUEST_TIME, $node->getCreatedTime(), 'Creating a node sets default "created" timestamp.');
    $this->assertEquals(REQUEST_TIME, $node->getChangedTime(), 'Creating a node sets default "changed" timestamp.');
>>>>>>> dev

    // Store the timestamps.
    $created = $node->getCreatedTime();

    $node->save();
    $node = $this->drupalGetNodeByTitle($edit['title'], TRUE);
<<<<<<< HEAD
    $this->assertEqual($node->getCreatedTime(), $created, 'Updating a node preserves "created" timestamp.');
=======
    $this->assertEquals($created, $node->getCreatedTime(), 'Updating a node preserves "created" timestamp.');
>>>>>>> dev

    // Programmatically set the timestamps using hook_ENTITY_TYPE_presave().
    $node->title = 'testing_node_presave';

    $node->save();
    $node = $this->drupalGetNodeByTitle('testing_node_presave', TRUE);
<<<<<<< HEAD
    $this->assertEqual($node->getCreatedTime(), 280299600, 'Saving a node uses "created" timestamp set in presave hook.');
    $this->assertEqual($node->getChangedTime(), 979534800, 'Saving a node uses "changed" timestamp set in presave hook.');
=======
    $this->assertEquals(280299600, $node->getCreatedTime(), 'Saving a node uses "created" timestamp set in presave hook.');
    $this->assertEquals(979534800, $node->getChangedTime(), 'Saving a node uses "changed" timestamp set in presave hook.');
>>>>>>> dev

    // Programmatically set the timestamps on the node.
    $edit = [
      'uid' => $this->webUser->id(),
      'type' => 'article',
      'title' => $this->randomMachineName(8),
      // Sun, 19 Nov 1978 05:00:00 GMT.
      'created' => 280299600,
      // Drupal 1.0 release.
      'changed' => 979534800,
    ];

    Node::create($edit)->save();
    $node = $this->drupalGetNodeByTitle($edit['title']);
<<<<<<< HEAD
    $this->assertEqual($node->getCreatedTime(), 280299600, 'Creating a node programmatically uses programmatically set "created" timestamp.');
    $this->assertEqual($node->getChangedTime(), 979534800, 'Creating a node programmatically uses programmatically set "changed" timestamp.');
=======
    $this->assertEquals(280299600, $node->getCreatedTime(), 'Creating a node programmatically uses programmatically set "created" timestamp.');
    $this->assertEquals(979534800, $node->getChangedTime(), 'Creating a node programmatically uses programmatically set "changed" timestamp.');
>>>>>>> dev

    // Update the timestamps.
    $node->setCreatedTime(979534800);
    $node->changed = 280299600;

    $node->save();
    $node = $this->drupalGetNodeByTitle($edit['title'], TRUE);
<<<<<<< HEAD
    $this->assertEqual($node->getCreatedTime(), 979534800, 'Updating a node uses user-set "created" timestamp.');
    // Allowing setting changed timestamps is required, see
    // Drupal\content_translation\ContentTranslationMetadataWrapper::setChangedTime($timestamp)
    // for example.
    $this->assertEqual($node->getChangedTime(), 280299600, 'Updating a node uses user-set "changed" timestamp.');
=======
    $this->assertEquals(979534800, $node->getCreatedTime(), 'Updating a node uses user-set "created" timestamp.');
    // Allowing setting changed timestamps is required, see
    // Drupal\content_translation\ContentTranslationMetadataWrapper::setChangedTime($timestamp)
    // for example.
    $this->assertEquals(280299600, $node->getChangedTime(), 'Updating a node uses user-set "changed" timestamp.');
>>>>>>> dev
  }

  /**
   * Tests node presave and static node load cache.
   *
   * This test determines changes in hook_ENTITY_TYPE_presave() and verifies
   * that the static node load cache is cleared upon save.
   */
  public function testDeterminingChanges() {
    // Initial creation.
    $node = Node::create([
      'uid' => $this->webUser->id(),
      'type' => 'article',
      'title' => 'test_changes',
    ]);
    $node->save();

    // Update the node without applying changes.
    $node->save();
<<<<<<< HEAD
    $this->assertEqual($node->label(), 'test_changes', 'No changes have been determined.');
=======
    $this->assertEquals('test_changes', $node->label(), 'No changes have been determined.');
>>>>>>> dev

    // Apply changes.
    $node->title = 'updated';
    $node->save();

    // The hook implementations node_test_node_presave() and
    // node_test_node_update() determine changes and change the title.
<<<<<<< HEAD
    $this->assertEqual($node->label(), 'updated_presave_update', 'Changes have been determined.');

    // Test the static node load cache to be cleared.
    $node = Node::load($node->id());
    $this->assertEqual($node->label(), 'updated_presave', 'Static cache has been cleared.');
=======
    $this->assertEquals('updated_presave_update', $node->label(), 'Changes have been determined.');

    // Test the static node load cache to be cleared.
    $node = Node::load($node->id());
    $this->assertEquals('updated_presave', $node->label(), 'Static cache has been cleared.');
>>>>>>> dev
  }

  /**
   * Tests saving a node on node insert.
   *
   * This test ensures that a node has been fully saved when
   * hook_ENTITY_TYPE_insert() is invoked, so that the node can be saved again
   * in a hook implementation without errors.
   *
   * @see node_test_node_insert()
   */
  public function testNodeSaveOnInsert() {
    // node_test_node_insert() triggers a save on insert if the title equals
    // 'new'.
    $node = $this->drupalCreateNode(['title' => 'new']);
<<<<<<< HEAD
    $this->assertEqual($node->getTitle(), 'Node ' . $node->id(), 'Node saved on node insert.');
=======
    $this->assertEquals('Node ' . $node->id(), $node->getTitle(), 'Node saved on node insert.');
>>>>>>> dev
  }

}
