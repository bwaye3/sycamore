<?php

namespace Drupal\Tests\comment\Functional;

/**
 * Tests comment links altering.
 *
 * @group comment
 */
class CommentLinksAlterTest extends CommentTestBase {

<<<<<<< HEAD
  public static $modules = ['comment_test'];
=======
  protected static $modules = ['comment_test'];
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

    // Enable comment_test.module's hook_comment_links_alter() implementation.
    $this->container->get('state')->set('comment_test_links_alter_enabled', TRUE);
  }

  /**
   * Tests comment links altering.
   */
  public function testCommentLinksAlter() {
    $this->drupalLogin($this->webUser);
    $comment_text = $this->randomMachineName();
    $subject = $this->randomMachineName();
<<<<<<< HEAD
    $comment = $this->postComment($this->node, $comment_text, $subject);

    $this->drupalGet('node/' . $this->node->id());

    $this->assertSession()->linkExists(t('Report'));
=======
    $this->postComment($this->node, $comment_text, $subject);

    $this->drupalGet('node/' . $this->node->id());

    $this->assertSession()->linkExists('Report');
>>>>>>> dev
  }

}
