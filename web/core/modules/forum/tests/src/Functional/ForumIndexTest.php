<?php

namespace Drupal\Tests\forum\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the forum index listing.
 *
 * @group forum
 */
class ForumIndexTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['taxonomy', 'comment', 'forum'];
=======
  protected static $modules = ['taxonomy', 'comment', 'forum'];
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

    // Create a test user.
    $web_user = $this->drupalCreateUser([
      'create forum content',
      'edit own forum content',
      'edit any forum content',
      'administer nodes',
      'administer forums',
    ]);
    $this->drupalLogin($web_user);
  }

  /**
   * Tests the forum index for published and unpublished nodes.
   */
  public function testForumIndexStatus() {
    // The forum ID to use.
    $tid = 1;

    // Create a test node.
    $title = $this->randomMachineName(20);
    $edit = [
      'title[0][value]' => $title,
      'body[0][value]' => $this->randomMachineName(200),
    ];

    // Create the forum topic, preselecting the forum ID via a URL parameter.
    $this->drupalGet("forum/$tid");
    $this->clickLink(t('Add new @node_type', ['@node_type' => 'Forum topic']));
<<<<<<< HEAD
    $this->assertUrl('node/add/forum', ['query' => ['forum_id' => $tid]]);
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->assertSession()->addressEquals("node/add/forum?forum_id=$tid");
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Check that the node exists in the database.
    $node = $this->drupalGetNodeByTitle($title);
    $this->assertTrue(!empty($node), 'New forum node found in database.');

    // Create a child forum.
    $edit = [
      'name[0][value]' => $this->randomMachineName(20),
      'description[0][value]' => $this->randomMachineName(200),
      'parent[0]' => $tid,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/forum/add/forum', $edit, t('Save'));
    $this->assertSession()->linkExists(t('edit forum'));
=======
    $this->drupalGet('admin/structure/forum/add/forum');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->linkExists('edit forum');
>>>>>>> dev

    $tid_child = $tid + 1;

    // Verify that the node appears on the index.
    $this->drupalGet('forum/' . $tid);
<<<<<<< HEAD
    $this->assertText($title, 'Published forum topic appears on index.');
    $this->assertCacheTag('node_list');
    $this->assertCacheTag('config:node.type.forum');
    $this->assertCacheTag('comment_list');
    $this->assertCacheTag('node:' . $node->id());
    $this->assertCacheTag('taxonomy_term:' . $tid);
    $this->assertCacheTag('taxonomy_term:' . $tid_child);

    // Unpublish the node.
    $edit = ['status[value]' => FALSE];
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, t('Save'));
    $this->drupalGet('node/' . $node->id());
    $this->assertText(t('Access denied'), 'Unpublished node is no longer accessible.');

    // Verify that the node no longer appears on the index.
    $this->drupalGet('forum/' . $tid);
    $this->assertNoText($title, 'Unpublished forum topic no longer appears on index.');
=======
    $this->assertSession()->pageTextContains($title);
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'node_list');
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:node.type.forum');
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'comment_list');
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'node:' . $node->id());
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'taxonomy_term:' . $tid);
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'taxonomy_term:' . $tid_child);

    // Unpublish the node.
    $edit = ['status[value]' => FALSE];
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
    $this->drupalGet('node/' . $node->id());
    $this->assertSession()->pageTextContains('Access denied');

    // Verify that the node no longer appears on the index.
    $this->drupalGet('forum/' . $tid);
    $this->assertNoText($title);
>>>>>>> dev
  }

}
