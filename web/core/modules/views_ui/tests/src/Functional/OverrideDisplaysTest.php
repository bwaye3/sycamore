<?php

namespace Drupal\Tests\views_ui\Functional;

/**
 * Tests that displays can be correctly overridden via the user interface.
 *
 * @group views_ui
 */
class OverrideDisplaysTest extends UITestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $this->drupalPlaceBlock('page_title_block');
  }

  /**
   * Tests that displays can be overridden via the UI.
   */
  public function testOverrideDisplays() {
    // Create a basic view that shows all content, with a page and a block
    // display.
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = strtolower($this->randomMachineName(16));
    $view['page[create]'] = 1;
    $view['page[path]'] = $this->randomMachineName(16);
    $view['block[create]'] = 1;
    $view_path = $view['page[path]'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
>>>>>>> dev

    // Configure its title. Since the page and block both started off with the
    // same (empty) title in the views wizard, we expect the wizard to have set
    // things up so that they both inherit from the default display, and we
    // therefore only need to change that to have it take effect for both.
    $edit = [];
    $edit['title'] = $original_title = $this->randomMachineName(16);
    $edit['override[dropdown]'] = 'default';
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_1/title", $edit, t('Apply'));
    $this->drupalPostForm("admin/structure/views/view/{$view['id']}/edit/page_1", [], t('Save'));
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_1/title");
    $this->submitForm($edit, 'Apply');
    $this->drupalGet("admin/structure/views/view/{$view['id']}/edit/page_1");
    $this->submitForm([], 'Save');
>>>>>>> dev

    // Add a node that will appear in the view, so that the block will actually
    // be displayed.
    $this->drupalCreateContentType(['type' => 'page']);
    $this->drupalCreateNode();

    // Make sure the title appears in the page.
    $this->drupalGet($view_path);
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText($original_title);
=======
    $this->assertSession()->pageTextContains($original_title);
>>>>>>> dev

    // Confirm that the view block is available in the block administration UI.
    $this->drupalGet('admin/structure/block/list/' . $this->config('system.theme')->get('default'));
    $this->clickLink('Place block');
<<<<<<< HEAD
    $this->assertText($view['label']);
=======
    $this->assertSession()->pageTextContains($view['label']);
>>>>>>> dev

    // Place the block.
    $this->drupalPlaceBlock("views_block:{$view['id']}-block_1");

    // Make sure the title appears in the block.
    $this->drupalGet('');
<<<<<<< HEAD
    $this->assertText($original_title);
=======
    $this->assertSession()->pageTextContains($original_title);
>>>>>>> dev

    // Change the title for the page display only, and make sure that the
    // original title still appears on the page.
    $edit = [];
    $edit['title'] = $new_title = $this->randomMachineName(16);
    $edit['override[dropdown]'] = 'page_1';
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_1/title", $edit, t('Apply'));
    $this->drupalPostForm("admin/structure/views/view/{$view['id']}/edit/page_1", [], t('Save'));
    $this->drupalGet($view_path);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($new_title);
    $this->assertText($original_title);
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_1/title");
    $this->submitForm($edit, 'Apply');
    $this->drupalGet("admin/structure/views/view/{$view['id']}/edit/page_1");
    $this->submitForm([], 'Save');
    $this->drupalGet($view_path);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains($new_title);
    $this->assertSession()->pageTextContains($original_title);
>>>>>>> dev
  }

  /**
   * Tests that the wizard correctly sets up default and overridden displays.
   */
  public function testWizardMixedDefaultOverriddenDisplays() {
    // Create a basic view with a page, block, and feed. Give the page and feed
    // identical titles, but give the block a different one, so we expect the
    // page and feed to inherit their titles from the default display, but the
    // block to override it.
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = strtolower($this->randomMachineName(16));
    $view['page[create]'] = 1;
    $view['page[title]'] = $this->randomMachineName(16);
    $view['page[path]'] = $this->randomMachineName(16);
    $view['page[feed]'] = 1;
    $view['page[feed_properties][path]'] = $this->randomMachineName(16);
    $view['block[create]'] = 1;
    $view['block[title]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
>>>>>>> dev

    // Add a node that will appear in the view, so that the block will actually
    // be displayed.
    $this->drupalCreateContentType(['type' => 'page']);
    $this->drupalCreateNode();

    // Make sure that the feed, page and block all start off with the correct
    // titles.
    $this->drupalGet($view['page[path]']);
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText($view['page[title]']);
    $this->assertNoText($view['block[title]']);
    $this->drupalGet($view['page[feed_properties][path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($view['page[title]']);
=======
    $this->assertSession()->pageTextContains($view['page[title]']);
    $this->assertNoText($view['block[title]']);
    $this->drupalGet($view['page[feed_properties][path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->responseContains($view['page[title]']);
>>>>>>> dev
    $this->assertNoText($view['block[title]']);

    // Confirm that the block is available in the block administration UI.
    $this->drupalGet('admin/structure/block/list/' . $this->config('system.theme')->get('default'));
    $this->clickLink('Place block');
<<<<<<< HEAD
    $this->assertText($view['label']);
=======
    $this->assertSession()->pageTextContains($view['label']);
>>>>>>> dev

    // Put the block into the first sidebar region, and make sure it will not
    // display on the view's page display (since we will be searching for the
    // presence/absence of the view's title in both the page and the block).
    $this->drupalPlaceBlock("views_block:{$view['id']}-block_1", [
      'visibility' => [
        'request_path' => [
          'pages' => '/' . $view['page[path]'],
          'negate' => TRUE,
        ],
      ],
    ]);

    $this->drupalGet('');
<<<<<<< HEAD
    $this->assertText($view['block[title]']);
=======
    $this->assertSession()->pageTextContains($view['block[title]']);
>>>>>>> dev
    $this->assertNoText($view['page[title]']);

    // Edit the page and change the title. This should automatically change
    // the feed's title also, but not the block.
    $edit = [];
    $edit['title'] = $new_default_title = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_1/title", $edit, t('Apply'));
    $this->drupalPostForm("admin/structure/views/view/{$view['id']}/edit/page_1", [], t('Save'));
    $this->drupalGet($view['page[path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($new_default_title);
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_1/title");
    $this->submitForm($edit, 'Apply');
    $this->drupalGet("admin/structure/views/view/{$view['id']}/edit/page_1");
    $this->submitForm([], 'Save');
    $this->drupalGet($view['page[path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains($new_default_title);
>>>>>>> dev
    $this->assertNoText($view['page[title]']);
    $this->assertNoText($view['block[title]']);
    $this->drupalGet($view['page[feed_properties][path]']);
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText($new_default_title);
=======
    $this->assertSession()->responseContains($new_default_title);
>>>>>>> dev
    $this->assertNoText($view['page[title]']);
    $this->assertNoText($view['block[title]']);
    $this->drupalGet('');
    $this->assertNoText($new_default_title);
    $this->assertNoText($view['page[title]']);
<<<<<<< HEAD
    $this->assertText($view['block[title]']);
=======
    $this->assertSession()->pageTextContains($view['block[title]']);
>>>>>>> dev

    // Edit the block and change the title. This should automatically change
    // the block title only, and leave the defaults alone.
    $edit = [];
    $edit['title'] = $new_block_title = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/block_1/title", $edit, t('Apply'));
    $this->drupalPostForm("admin/structure/views/view/{$view['id']}/edit/block_1", [], t('Save'));
    $this->drupalGet($view['page[path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($new_default_title);
    $this->drupalGet($view['page[feed_properties][path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($new_default_title);
    $this->assertNoText($new_block_title);
    $this->drupalGet('');
    $this->assertText($new_block_title);
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/block_1/title");
    $this->submitForm($edit, 'Apply');
    $this->drupalGet("admin/structure/views/view/{$view['id']}/edit/block_1");
    $this->submitForm([], 'Save');
    $this->drupalGet($view['page[path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains($new_default_title);
    $this->drupalGet($view['page[feed_properties][path]']);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->responseContains($new_default_title);
    $this->assertNoText($new_block_title);
    $this->drupalGet('');
    $this->assertSession()->pageTextContains($new_block_title);
>>>>>>> dev
    $this->assertNoText($view['block[title]']);
  }

  /**
   * Tests that the revert to all displays select-option works as expected.
   */
  public function testRevertAllDisplays() {
    // Create a basic view with a page, block.
    // Because there is both a title on page and block we expect the title on
    // the block be overridden.
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = strtolower($this->randomMachineName(16));
    $view['page[create]'] = 1;
    $view['page[title]'] = $this->randomMachineName(16);
    $view['page[path]'] = $this->randomMachineName(16);
    $view['block[create]'] = 1;
    $view['block[title]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
>>>>>>> dev

    // Revert the title of the block to the default ones, but submit some new
    // values to be sure that the new value is not stored.
    $edit = [];
    $edit['title'] = $this->randomMachineName();
    $edit['override[dropdown]'] = 'default_revert';

<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/block_1/title", $edit, t('Apply'));
    $this->drupalPostForm("admin/structure/views/view/{$view['id']}/edit/block_1", [], t('Save'));
    $this->assertText($view['page[title]']);
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/block_1/title");
    $this->submitForm($edit, 'Apply');
    $this->drupalGet("admin/structure/views/view/{$view['id']}/edit/block_1");
    $this->submitForm([], 'Save');
    $this->assertSession()->pageTextContains($view['page[title]']);
>>>>>>> dev
  }

}
