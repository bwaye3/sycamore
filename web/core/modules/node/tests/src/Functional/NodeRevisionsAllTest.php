<?php

namespace Drupal\Tests\node\Functional;

use Drupal\Core\Database\Database;
use Drupal\node\NodeInterface;

/**
 * Create a node with revisions and test viewing, saving, reverting, and
 * deleting revisions for user with access to all.
 *
 * @group node
 */
class NodeRevisionsAllTest extends NodeTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A list of nodes created to be used as starting point of different tests.
   *
   * @var Drupal\node\NodeInterface[]
   */
  protected $nodes;

  /**
   * Revision logs of nodes created by the setup method.
   *
   * @var string[]
   */
  protected $revisionLogs;

  /**
   * An arbitrary user for revision authoring.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $revisionUser;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create and log in user.
    $web_user = $this->drupalCreateUser(
      [
        'view page revisions',
        'revert page revisions',
        'delete page revisions',
        'edit any page content',
        'delete any page content',
      ]
    );
    $this->drupalLogin($web_user);

    // Create an initial node.
    $node = $this->drupalCreateNode();

    // Create a user for revision authoring.
    // This must be different from user performing revert.
    $this->revisionUser = $this->drupalCreateUser();

    $settings = get_object_vars($node);
    $settings['revision'] = 1;

    $nodes = [];
    $logs = [];

    // Get the original node.
    $nodes[] = clone $node;

    // Create three revisions.
    $revision_count = 3;
    for ($i = 0; $i < $revision_count; $i++) {
      $logs[] = $node->revision_log = $this->randomMachineName(32);

      $node = $this->createNodeRevision($node);
      $nodes[] = clone $node;
    }

    $this->nodes = $nodes;
    $this->revisionLogs = $logs;
  }

  /**
   * Creates a new revision for a given node.
   *
   * @param \Drupal\node\NodeInterface $node
   *   A node object.
   *
   * @return \Drupal\node\NodeInterface
   *   A node object with up to date revision information.
   */
  protected function createNodeRevision(NodeInterface $node) {
    // Create revision with a random title and body and update variables.
    $node->title = $this->randomMachineName();
    $node->body = [
      'value' => $this->randomMachineName(32),
      'format' => filter_default_format(),
    ];
    $node->setNewRevision();
    // Ensure the revision author is a different user.
    $node->setRevisionUserId($this->revisionUser->id());
    $node->save();

    return $node;
  }

  /**
   * Checks node revision operations.
   */
  public function testRevisions() {
    $node_storage = $this->container->get('entity_type.manager')->getStorage('node');
    $nodes = $this->nodes;
    $logs = $this->revisionLogs;

    // Get last node for simple checks.
    $node = $nodes[3];

    // Create and log in user.
    $content_admin = $this->drupalCreateUser(
      [
        'view all revisions',
        'revert all revisions',
        'delete all revisions',
        'edit any page content',
        'delete any page content',
      ]
    );
    $this->drupalLogin($content_admin);

    // Confirm the correct revision text appears on "view revisions" page.
    $this->drupalGet("node/" . $node->id() . "/revisions/" . $node->getRevisionId() . "/view");
<<<<<<< HEAD
    $this->assertText($node->body->value, 'Correct text displays for version.');
=======
    $this->assertSession()->pageTextContains($node->body->value);
>>>>>>> dev

    // Confirm the correct revision log message appears on the "revisions
    // overview" page.
    $this->drupalGet("node/" . $node->id() . "/revisions");
    foreach ($logs as $revision_log) {
<<<<<<< HEAD
      $this->assertText($revision_log, 'Revision log message found.');
=======
      $this->assertSession()->pageTextContains($revision_log);
>>>>>>> dev
    }

    // Confirm that this is the current revision.
    $this->assertTrue($node->isDefaultRevision(), 'Third node revision is the current one.');

    // Confirm that revisions revert properly.
<<<<<<< HEAD
    $this->drupalPostForm("node/" . $node->id() . "/revisions/" . $nodes[1]->getRevisionId() . "/revert", [], t('Revert'));
=======
    $this->drupalGet("node/" . $node->id() . "/revisions/" . $nodes[1]->getRevisionId() . "/revert");
    $this->submitForm([], 'Revert');
>>>>>>> dev
    $this->assertRaw(t('@type %title has been reverted to the revision from %revision-date.',
      [
        '@type' => 'Basic page',
        '%title' => $nodes[1]->getTitle(),
        '%revision-date' => $this->container->get('date.formatter')->format($nodes[1]->getRevisionCreationTime()),
<<<<<<< HEAD
      ]),
      'Revision reverted.');
    $node_storage->resetCache([$node->id()]);
    $reverted_node = $node_storage->load($node->id());
    $this->assertTrue(($nodes[1]->body->value == $reverted_node->body->value), 'Node reverted correctly.');

    // Confirm the revision author is the user performing the revert.
    $this->assertTrue($reverted_node->getRevisionUserId() == $this->loggedInUser->id(), 'Node revision author is user performing revert.');
    // And that its not the revision author.
    $this->assertTrue($reverted_node->getRevisionUserId() != $this->revisionUser->id(), 'Node revision author is not original revision author.');
=======
      ]));
    $node_storage->resetCache([$node->id()]);
    $reverted_node = $node_storage->load($node->id());
    $this->assertSame($nodes[1]->body->value, $reverted_node->body->value, 'Node reverted correctly.');

    // Confirm the revision author is the user performing the revert.
    $this->assertSame($this->loggedInUser->id(), $reverted_node->getRevisionUserId(), 'Node revision author is user performing revert.');
    // And that its not the revision author.
    $this->assertNotSame($this->revisionUser->id(), $reverted_node->getRevisionUserId(), 'Node revision author is not original revision author.');
>>>>>>> dev

    // Confirm that this is not the current version.
    $node = node_revision_load($node->getRevisionId());
    $this->assertFalse($node->isDefaultRevision(), 'Third node revision is not the current one.');

    // Confirm that the node can still be updated.
<<<<<<< HEAD
    $this->drupalPostForm("node/" . $reverted_node->id() . "/edit", ['body[0][value]' => 'We are Drupal.'], t('Save'));
    $this->assertText(t('Basic page @title has been updated.', ['@title' => $reverted_node->getTitle()]), 'Node was successfully saved after reverting a revision.');
    $this->assertText('We are Drupal.', 'Node was correctly updated after reverting a revision.');

    // Confirm revisions delete properly.
    $this->drupalPostForm("node/" . $node->id() . "/revisions/" . $nodes[1]->getRevisionId() . "/delete", [], t('Delete'));
=======
    $this->drupalGet("node/" . $reverted_node->id() . "/edit");
    $this->submitForm(['body[0][value]' => 'We are Drupal.'], 'Save');
    $this->assertSession()->pageTextContains('Basic page ' . $reverted_node->getTitle() . ' has been updated.');
    $this->assertSession()->pageTextContains('We are Drupal.');

    // Confirm revisions delete properly.
    $this->drupalGet("node/" . $node->id() . "/revisions/" . $nodes[1]->getRevisionId() . "/delete");
    $this->submitForm([], 'Delete');
>>>>>>> dev
    $this->assertRaw(t('Revision from %revision-date of @type %title has been deleted.',
      [
        '%revision-date' => $this->container->get('date.formatter')->format($nodes[1]->getRevisionCreationTime()),
        '@type' => 'Basic page',
        '%title' => $nodes[1]->getTitle(),
<<<<<<< HEAD
      ]),
      'Revision deleted.');
    $connection = Database::getConnection();
    $this->assertTrue($connection->query('SELECT COUNT(vid) FROM {node_revision} WHERE nid = :nid and vid = :vid',
      [':nid' => $node->id(), ':vid' => $nodes[1]->getRevisionId()])->fetchField() == 0,
      'Revision not found.');
=======
      ]));
    $nids = \Drupal::entityQuery('node')
      ->allRevisions()
      ->accessCheck(FALSE)
      ->condition('nid', $node->id())
      ->condition('vid', $nodes[1]->getRevisionId())
      ->execute();
    $this->assertCount(0, $nids);
>>>>>>> dev

    // Set the revision timestamp to an older date to make sure that the
    // confirmation message correctly displays the stored revision date.
    $old_revision_date = REQUEST_TIME - 86400;
<<<<<<< HEAD
    $connection->update('node_revision')
=======
    Database::getConnection()->update('node_revision')
>>>>>>> dev
      ->condition('vid', $nodes[2]->getRevisionId())
      ->fields([
        'revision_timestamp' => $old_revision_date,
      ])
      ->execute();
<<<<<<< HEAD
    $this->drupalPostForm("node/" . $node->id() . "/revisions/" . $nodes[2]->getRevisionId() . "/revert", [], t('Revert'));
=======
    $this->drupalGet("node/" . $node->id() . "/revisions/" . $nodes[2]->getRevisionId() . "/revert");
    $this->submitForm([], 'Revert');
>>>>>>> dev
    $this->assertRaw(t('@type %title has been reverted to the revision from %revision-date.', [
      '@type' => 'Basic page',
      '%title' => $nodes[2]->getTitle(),
      '%revision-date' => $this->container->get('date.formatter')->format($old_revision_date),
    ]));

    // Create 50 more revisions in order to trigger paging on the revisions
    // overview screen.
    $node = $nodes[0];
    for ($i = 0; $i < 50; $i++) {
      $logs[] = $node->revision_log = $this->randomMachineName(32);

      $node = $this->createNodeRevision($node);
      $nodes[] = clone $node;
    }

    $this->drupalGet('node/' . $node->id() . '/revisions');

    // Check that the pager exists.
    $this->assertRaw('page=1');

    // Check that the last revision is displayed on the first page.
<<<<<<< HEAD
    $this->assertText(end($logs));
=======
    $this->assertSession()->pageTextContains(end($logs));
>>>>>>> dev

    // Go to the second page and check that one of the initial three revisions
    // is displayed.
    $this->clickLink(t('Page 2'));
<<<<<<< HEAD
    $this->assertText($logs[2]);
=======
    $this->assertSession()->pageTextContains($logs[2]);
>>>>>>> dev
  }

}
