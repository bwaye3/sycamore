<?php

namespace Drupal\Tests\node\Functional;

/**
 * Tests that the post information (submitted by Username on date) text displays
 * appropriately.
 *
 * @group node
 */
class NodePostSettingsTest extends NodeTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $web_user = $this->drupalCreateUser([
      'create page content',
      'administer content types',
      'access user profiles',
    ]);
    $this->drupalLogin($web_user);
  }

  /**
   * Confirms "Basic page" content type and post information is on a new node.
   */
  public function testPagePostInfo() {

    // Set "Basic page" content type to display post information.
    $edit = [];
    $edit['display_submitted'] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/page', $edit, t('Save content type'));
=======
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev

    // Create a node.
    $edit = [];
    $edit['title[0][value]'] = $this->randomMachineName(8);
    $edit['body[0][value]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('node/add/page', $edit, t('Save'));

    // Check that the post information is displayed.
    $node = $this->drupalGetNodeByTitle($edit['title[0][value]']);
    $elements = $this->xpath('//div[contains(@class, :class)]', [':class' => 'node__submitted']);
    $this->assertCount(1, $elements, 'Post information is displayed.');
=======
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Save');

    // Check that the post information is displayed.
    $node = $this->drupalGetNodeByTitle($edit['title[0][value]']);
    $this->assertSession()->elementsCount('xpath', '//div[contains(@class, "node__submitted")]', 1);
>>>>>>> dev
    $node->delete();

    // Set "Basic page" content type to display post information.
    $edit = [];
    $edit['display_submitted'] = FALSE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/page', $edit, t('Save content type'));
=======
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev

    // Create a node.
    $edit = [];
    $edit['title[0][value]'] = $this->randomMachineName(8);
    $edit['body[0][value]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('node/add/page', $edit, t('Save'));

    // Check that the post information is displayed.
    $elements = $this->xpath('//div[contains(@class, :class)]', [':class' => 'node__submitted']);
    $this->assertCount(0, $elements, 'Post information is not displayed.');
=======
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Save');

    // Check that the post information is not displayed.
    $this->assertSession()->elementNotExists('xpath', '//div[contains(@class, "node__submitted")]');
>>>>>>> dev
  }

}
