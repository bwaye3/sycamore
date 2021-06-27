<?php

namespace Drupal\Tests\views_ui\Functional;

use Drupal\views\Views;

/**
 * Tests creation, retrieval, updating, and deletion of displays in the Web UI.
 *
 * @group views_ui
 */
class DisplayCRUDTest extends UITestBase {

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_display'];

  /**
<<<<<<< HEAD
   * Modules to enable
   *
   * @var array
   */
  public static $modules = ['contextual'];
=======
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['contextual'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests adding a display.
   */
  public function testAddDisplay() {
<<<<<<< HEAD
    // Show the master display.
    $this->config('views.settings')->set('ui.show.master_display', TRUE)->save();
=======
    // Show the default display.
    $this->config('views.settings')->set('ui.show.default_display', TRUE)->save();
>>>>>>> dev

    $settings['page[create]'] = FALSE;
    $view = $this->randomView($settings);

    $path_prefix = 'admin/structure/views/view/' . $view['id'] . '/edit';
    $this->drupalGet($path_prefix);

    // Add a new display.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], 'Add Page');
    $this->assertLinkByHref($path_prefix . '/page_1', 0, 'Make sure after adding a display the new display appears in the UI');

    $this->assertSession()->linkNotExists('Master*', 'Make sure the master display is not marked as changed.');
    $this->assertSession()->linkExists('Page*', 0, 'Make sure the added display is marked as changed.');

    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_1/path", ['path' => 'test/path'], t('Apply'));
    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->submitForm([], 'Add Page');
    $this->assertSession()->linkByHrefExists($path_prefix . '/page_1', 0, 'Make sure after adding a display the new display appears in the UI');

    $this->assertSession()->linkNotExists('Default*', 'Make sure the default display is not marked as changed.');
    $this->assertSession()->linkExists('Page*', 0, 'Make sure the added display is marked as changed.');

    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_1/path");
    $this->submitForm(['path' => 'test/path'], 'Apply');
    $this->submitForm([], 'Save');
>>>>>>> dev
  }

  /**
   * Tests removing a display.
   */
  public function testRemoveDisplay() {
    $view = $this->randomView();
    $path_prefix = 'admin/structure/views/view/' . $view['id'] . '/edit';

<<<<<<< HEAD
    $this->drupalGet($path_prefix . '/default');
    $this->assertNoFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-delete', 'Delete Page', 'Make sure there is no delete button on the default display.');

    $this->drupalGet($path_prefix . '/page_1');
    $this->assertFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-delete', 'Delete Page', 'Make sure there is a delete button on the page display.');

    // Delete the page, so we can test the undo process.
    $this->drupalPostForm($path_prefix . '/page_1', [], 'Delete Page');
    $this->assertFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-undo-delete', 'Undo delete of Page', 'Make sure there a undo button on the page display after deleting.');
=======
    // Make sure there is no delete button on the default display.
    $this->drupalGet($path_prefix . '/default');
    $this->assertSession()->buttonNotExists('edit-displays-settings-settings-content-tab-content-details-top-actions-delete');

    $this->drupalGet($path_prefix . '/page_1');
    $this->assertSession()->buttonExists('edit-displays-settings-settings-content-tab-content-details-top-actions-delete');

    // Delete the page, so we can test the undo process.
    $this->drupalGet($path_prefix . '/page_1');
    $this->submitForm([], 'Delete Page');
    $this->assertSession()->buttonExists('edit-displays-settings-settings-content-tab-content-details-top-actions-undo-delete');
>>>>>>> dev
    $element = $this->xpath('//a[contains(@href, :href) and contains(@class, :class)]', [':href' => $path_prefix . '/page_1', ':class' => 'views-display-deleted-link']);
    $this->assertTrue(!empty($element), 'Make sure the display link is marked as to be deleted.');

    $element = $this->xpath('//a[contains(@href, :href) and contains(@class, :class)]', [':href' => $path_prefix . '/page_1', ':class' => 'views-display-deleted-link']);
    $this->assertTrue(!empty($element), 'Make sure the display link is marked as to be deleted.');

    // Undo the deleting of the display.
<<<<<<< HEAD
    $this->drupalPostForm($path_prefix . '/page_1', [], 'Undo delete of Page');
    $this->assertNoFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-undo-delete', 'Undo delete of Page', 'Make sure there is no undo button on the page display after reverting.');
    $this->assertFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-delete', 'Delete Page', 'Make sure there is a delete button on the page display after the reverting.');

    // Now delete again and save the view.
    $this->drupalPostForm($path_prefix . '/page_1', [], 'Delete Page');
    $this->drupalPostForm(NULL, [], t('Save'));

    $this->assertNoLinkByHref($path_prefix . '/page_1', 'Make sure there is no display tab for the deleted display.');
=======
    $this->drupalGet($path_prefix . '/page_1');
    $this->submitForm([], 'Undo delete of Page');
    $this->assertSession()->buttonNotExists('edit-displays-settings-settings-content-tab-content-details-top-actions-undo-delete');
    $this->assertSession()->buttonExists('edit-displays-settings-settings-content-tab-content-details-top-actions-delete');

    // Now delete again and save the view.
    $this->drupalGet($path_prefix . '/page_1');
    $this->submitForm([], 'Delete Page');
    $this->submitForm([], 'Save');

    $this->assertSession()->linkByHrefNotExists($path_prefix . '/page_1', 'Make sure there is no display tab for the deleted display.');
>>>>>>> dev

    // Test deleting a display that has a modified machine name.
    $view = $this->randomView();
    $machine_name = 'new_machine_name';
    $path_prefix = 'admin/structure/views/view/' . $view['id'] . '/edit';
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_1/display_id", ['display_id' => $machine_name], 'Apply');
    $this->drupalPostForm(NULL, [], 'Delete Page');
    $this->drupalPostForm(NULL, [], t('Save'));
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoLinkByHref($path_prefix . '/new_machine_name', 'Make sure there is no display tab for the deleted display.');
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_1/display_id");
    $this->submitForm(['display_id' => $machine_name], 'Apply');
    $this->submitForm([], 'Delete Page');
    $this->submitForm([], 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->linkByHrefNotExists($path_prefix . '/new_machine_name', 'Make sure there is no display tab for the deleted display.');
>>>>>>> dev
  }

  /**
   * Tests that the correct display is loaded by default.
   */
  public function testDefaultDisplay() {
    $this->drupalGet('admin/structure/views/view/test_display');
    $elements = $this->xpath('//*[@id="views-page-1-display-title"]');
    $this->assertCount(1, $elements, 'The page display is loaded as the default display.');
  }

  /**
   * Tests the duplicating of a display.
   */
  public function testDuplicateDisplay() {
    $view = $this->randomView();
    $path_prefix = 'admin/structure/views/view/' . $view['id'] . '/edit';
    $path = $view['page[path]'];

    $this->drupalGet($path_prefix);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], 'Duplicate Page');
    $this->assertLinkByHref($path_prefix . '/page_2', 0, 'Make sure after duplicating the new display appears in the UI');
    $this->assertUrl($path_prefix . '/page_2', [], 'The user got redirected to the new display.');
=======
    $this->submitForm([], 'Duplicate Page');
    // Verify that the user got redirected to the new display.
    $this->assertSession()->linkByHrefExists($path_prefix . '/page_2', 0, 'Make sure after duplicating the new display appears in the UI');
    $this->assertSession()->addressEquals($path_prefix . '/page_2');
>>>>>>> dev

    // Set the title and override the css classes.
    $random_title = $this->randomMachineName();
    $random_css = $this->randomMachineName();
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_2/title", ['title' => $random_title], t('Apply'));
    $this->drupalPostForm("admin/structure/views/nojs/display/{$view['id']}/page_2/css_class", ['override[dropdown]' => 'page_2', 'css_class' => $random_css], t('Apply'));

    // Duplicate as a different display type.
    $this->drupalPostForm(NULL, [], 'Duplicate as Block');
    $this->assertLinkByHref($path_prefix . '/block_1', 0, 'Make sure after duplicating the new display appears in the UI');
    $this->assertUrl($path_prefix . '/block_1', [], 'The user got redirected to the new display.');
    $this->assertText(t('Block settings'));
    $this->assertNoText(t('Page settings'));

    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_2/title");
    $this->submitForm(['title' => $random_title], 'Apply');
    $this->drupalGet("admin/structure/views/nojs/display/{$view['id']}/page_2/css_class");
    $this->submitForm([
      'override[dropdown]' => 'page_2',
      'css_class' => $random_css,
    ], 'Apply');

    // Duplicate as a different display type.
    $this->submitForm([], 'Duplicate as Block');
    $this->assertSession()->linkByHrefExists($path_prefix . '/block_1', 0, 'Make sure after duplicating the new display appears in the UI');
    $this->assertSession()->addressEquals($path_prefix . '/block_1');
    $this->assertSession()->pageTextContains('Block settings');
    $this->assertNoText('Page settings');

    $this->submitForm([], 'Save');
>>>>>>> dev
    $view = Views::getView($view['id']);
    $view->initDisplay();

    $page_2 = $view->displayHandlers->get('page_2');
    $this->assertNotEmpty($page_2, 'The new page display got saved.');
<<<<<<< HEAD
    $this->assertEqual($page_2->display['display_title'], 'Page');
    $this->assertEqual($page_2->display['display_options']['path'], $path);
    $block_1 = $view->displayHandlers->get('block_1');
    $this->assertNotEmpty($block_1, 'The new block display got saved.');
    $this->assertEqual($block_1->display['display_plugin'], 'block');
    $this->assertEqual($block_1->display['display_title'], 'Block', 'The new display title got generated as expected.');
    $this->assertFalse(isset($block_1->display['display_options']['path']));
    $this->assertEqual($block_1->getOption('title'), $random_title, 'The overridden title option from the display got copied into the duplicate');
    $this->assertEqual($block_1->getOption('css_class'), $random_css, 'The overridden css_class option from the display got copied into the duplicate');

    // Test duplicating a display after changing the machine name.
    $view_id = $view->id();
    $this->drupalPostForm("admin/structure/views/nojs/display/$view_id/page_2/display_id", ['display_id' => 'page_new'], 'Apply');
    $this->drupalPostForm(NULL, [], 'Duplicate as Block');
    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->assertEquals('Page', $page_2->display['display_title']);
    $this->assertEquals($path, $page_2->display['display_options']['path']);
    $block_1 = $view->displayHandlers->get('block_1');
    $this->assertNotEmpty($block_1, 'The new block display got saved.');
    $this->assertEquals('block', $block_1->display['display_plugin']);
    $this->assertEquals('Block', $block_1->display['display_title'], 'The new display title got generated as expected.');
    $this->assertFalse(isset($block_1->display['display_options']['path']));
    $this->assertEquals($random_title, $block_1->getOption('title'), 'The overridden title option from the display got copied into the duplicate');
    $this->assertEquals($random_css, $block_1->getOption('css_class'), 'The overridden css_class option from the display got copied into the duplicate');

    // Test duplicating a display after changing the machine name.
    $view_id = $view->id();
    $this->drupalGet("admin/structure/views/nojs/display/{$view_id}/page_2/display_id");
    $this->submitForm(['display_id' => 'page_new'], 'Apply');
    $this->submitForm([], 'Duplicate as Block');
    $this->submitForm([], 'Save');
>>>>>>> dev
    $view = Views::getView($view_id);
    $view->initDisplay();
    $this->assertNotNull($view->displayHandlers->get('page_new'), 'The original display is saved with a changed id');
    $this->assertNotNull($view->displayHandlers->get('block_2'), 'The duplicate display is saved with new id');
  }

}
