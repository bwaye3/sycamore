<?php

namespace Drupal\Tests\views_ui\Functional;

<<<<<<< HEAD
use Drupal\Component\Render\FormattableMarkup;
=======
>>>>>>> dev
use Drupal\views\Entity\View;
use Drupal\views\Views;

/**
 * Tests the display UI.
 *
 * @group views_ui
 */
class DisplayTest extends UITestBase {

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
    $view = $this->randomView();
    $this->assertNoText('Block');
    $this->assertNoText('Block 2');

<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Add @display', ['@display' => 'Block']));
    $this->assertText('Block');
=======
    $this->submitForm([], 'Add Block');
    $this->assertSession()->pageTextContains('Block');
>>>>>>> dev
    $this->assertNoText('Block 2');
  }

  /**
   * Tests reordering of displays.
   */
  public function testReorderDisplay() {
    $view = [
      'block[create]' => TRUE,
    ];
    $view = $this->randomView($view);

    $this->clickLink(t('Reorder displays'));
    $this->assertNotEmpty($this->xpath('//tr[@id="display-row-default"]'), 'Make sure the default display appears on the reorder listing');
    $this->assertNotEmpty($this->xpath('//tr[@id="display-row-page_1"]'), 'Make sure the page display appears on the reorder listing');
    $this->assertNotEmpty($this->xpath('//tr[@id="display-row-block_1"]'), 'Make sure the block display appears on the reorder listing');

    // Ensure the view displays are in the expected order in configuration.
    $expected_display_order = ['default', 'block_1', 'page_1'];
<<<<<<< HEAD
    $this->assertEqual(array_keys(Views::getView($view['id'])->storage->get('display')), $expected_display_order, 'The correct display names are present.');
=======
    $this->assertEquals($expected_display_order, array_keys(Views::getView($view['id'])->storage->get('display')), 'The correct display names are present.');
>>>>>>> dev
    // Put the block display in front of the page display.
    $edit = [
      'displays[page_1][weight]' => 2,
      'displays[block_1][weight]' => 1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Apply'));
    $this->drupalPostForm(NULL, [], t('Save'));

    $view = Views::getView($view['id']);
    $displays = $view->storage->get('display');
    $this->assertEqual($displays['default']['position'], 0, 'Make sure the master display comes first.');
    $this->assertEqual($displays['block_1']['position'], 1, 'Make sure the block display comes before the page display.');
    $this->assertEqual($displays['page_1']['position'], 2, 'Make sure the page display comes after the block display.');

    // Ensure the view displays are in the expected order in configuration.
    $this->assertEqual(array_keys($view->storage->get('display')), $expected_display_order, 'The correct display names are present.');
=======
    $this->submitForm($edit, 'Apply');
    $this->submitForm([], 'Save');

    $view = Views::getView($view['id']);
    $displays = $view->storage->get('display');
    $this->assertEquals(0, $displays['default']['position'], 'Make sure the default display comes first.');
    $this->assertEquals(1, $displays['block_1']['position'], 'Make sure the block display comes before the page display.');
    $this->assertEquals(2, $displays['page_1']['position'], 'Make sure the page display comes after the block display.');

    // Ensure the view displays are in the expected order in configuration.
    $this->assertEquals($expected_display_order, array_keys($view->storage->get('display')), 'The correct display names are present.');
>>>>>>> dev
  }

  /**
   * Tests disabling of a display.
   */
  public function testDisableDisplay() {
    $view = $this->randomView();
    $path_prefix = 'admin/structure/views/view/' . $view['id'] . '/edit';

<<<<<<< HEAD
    $this->drupalGet($path_prefix);
    $this->assertEmpty($this->xpath('//div[contains(@class, :class)]', [':class' => 'views-display-disabled']), 'Make sure the disabled display css class does not appear after initial adding of a view.');

    $this->assertFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-disable', NULL, 'Make sure the disable button is visible.');
    $this->assertNoFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-enable', NULL, 'Make sure the enable button is not visible.');
    $this->drupalPostForm(NULL, [], 'Disable Page');
    $this->assertNotEmpty($this->xpath('//div[contains(@class, :class)]', [':class' => 'views-display-disabled']), 'Make sure the disabled display css class appears once the display is marked as such.');

    $this->assertNoFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-disable', NULL, 'Make sure the disable button is not visible.');
    $this->assertFieldById('edit-displays-settings-settings-content-tab-content-details-top-actions-enable', NULL, 'Make sure the enable button is visible.');
    $this->drupalPostForm(NULL, [], 'Enable Page');
    $this->assertEmpty($this->xpath('//div[contains(@class, :class)]', [':class' => 'views-display-disabled']), 'Make sure the disabled display css class does not appears once the display is enabled again.');
=======
    // Verify that the disabled display css class does not appear after initial
    // adding of a view.
    $this->drupalGet($path_prefix);
    $this->assertSession()->elementNotExists('xpath', "//div[contains(@class, 'views-display-disabled')]");
    $this->assertSession()->buttonExists('edit-displays-settings-settings-content-tab-content-details-top-actions-disable');
    $this->assertSession()->buttonNotExists('edit-displays-settings-settings-content-tab-content-details-top-actions-enable');

    // Verify that the disabled display css class appears once the display is
    // marked as such.
    $this->submitForm([], 'Disable Page');
    $this->assertSession()->elementExists('xpath', "//div[contains(@class, 'views-display-disabled')]");
    $this->assertSession()->buttonNotExists('edit-displays-settings-settings-content-tab-content-details-top-actions-disable');
    $this->assertSession()->buttonExists('edit-displays-settings-settings-content-tab-content-details-top-actions-enable');

    // Verify that the disabled display css class does not appears once the
    // display is enabled again.
    $this->submitForm([], 'Enable Page');
    $this->assertSession()->elementNotExists('xpath', "//div[contains(@class, 'views-display-disabled')]");
>>>>>>> dev
  }

  /**
   * Tests views_ui_views_plugins_display_alter is altering plugin definitions.
   */
  public function testDisplayPluginsAlter() {
    $definitions = Views::pluginManager('display')->getDefinitions();

    $expected = [
      'route_name' => 'entity.view.edit_form',
      'route_parameters_names' => ['view' => 'id'],
    ];

    // Test the expected views_ui array exists on each definition.
    foreach ($definitions as $definition) {
<<<<<<< HEAD
      $this->assertIdentical($definition['contextual links']['entity.view.edit_form'], $expected, 'Expected views_ui array found in plugin definition.');
=======
      $this->assertSame($expected, $definition['contextual links']['entity.view.edit_form'], 'Expected views_ui array found in plugin definition.');
>>>>>>> dev
    }
  }

  /**
   * Tests display areas.
   */
  public function testDisplayAreas() {
    // Show the advanced column.
    $this->config('views.settings')->set('ui.show.advanced_column', TRUE)->save();

    // Add a new data display to the view.
    $view = Views::getView('test_display');
    $view->storage->addDisplay('display_no_area_test');
    $view->save();

    $this->drupalGet('admin/structure/views/view/test_display/edit/display_no_area_test_1');

    $areas = [
      'header',
      'footer',
      'empty',
    ];

    // Assert that the expected text is found in each area category.
    foreach ($areas as $type) {
<<<<<<< HEAD
      $element = $this->xpath('//div[contains(@class, :class)]/div', [':class' => $type]);
      $this->assertEqual($element[0]->getHtml(), new FormattableMarkup('The selected display type does not use @type plugins', ['@type' => $type]));
=======
      $this->assertSession()->elementTextEquals('xpath', "//div[contains(@class, '$type')]/div", "The selected display type does not use $type plugins");
>>>>>>> dev
    }
  }

  /**
   * Tests the link-display setting.
   */
  public function testLinkDisplay() {
    // Test setting the link display in the UI form.
    $path = 'admin/structure/views/view/test_display/edit/block_1';
    $link_display_path = 'admin/structure/views/nojs/display/test_display/block_1/link_display';

    // Test the link text displays 'None' and not 'Block 1'
    $this->drupalGet($path);
    $result = $this->xpath("//a[contains(@href, :path)]", [':path' => $link_display_path]);
<<<<<<< HEAD
    $this->assertEqual($result[0]->getHtml(), t('None'), 'Make sure that the link option summary shows "None" by default.');

    $this->drupalGet($link_display_path);
    $this->assertFieldChecked('edit-link-display-0');

    // Test the default radio option on the link display form.
    $this->drupalPostForm($link_display_path, ['link_display' => 'page_1'], t('Apply'));
    // The form redirects to the master display.
    $this->drupalGet($path);

    $result = $this->xpath("//a[contains(@href, :path)]", [':path' => $link_display_path]);
    $this->assertEqual($result[0]->getHtml(), 'Page', 'Make sure that the link option summary shows the right linked display.');

    $this->drupalPostForm($link_display_path, ['link_display' => 'custom_url', 'link_url' => 'a-custom-url'], t('Apply'));
    // The form redirects to the master display.
    $this->drupalGet($path);

    $this->assertSession()->linkExists(t('Custom URL'), 0, 'The link option has custom URL as summary.');

    // Test the default link_url value for new display
    $this->drupalPostForm(NULL, [], t('Add Block'));
    $this->assertUrl('admin/structure/views/view/test_display/edit/block_2');
    $this->clickLink(t('Custom URL'));
    $this->assertFieldByName('link_url', 'a-custom-url');
=======
    $this->assertEquals(t('None'), $result[0]->getHtml(), 'Make sure that the link option summary shows "None" by default.');

    $this->drupalGet($link_display_path);
    $this->assertSession()->checkboxChecked('edit-link-display-0');

    // Test the default radio option on the link display form.
    $this->drupalGet($link_display_path);
    $this->submitForm(['link_display' => 'page_1'], 'Apply');
    // The form redirects to the default display.
    $this->drupalGet($path);

    $result = $this->xpath("//a[contains(@href, :path)]", [':path' => $link_display_path]);
    $this->assertEquals('Page', $result[0]->getHtml(), 'Make sure that the link option summary shows the right linked display.');

    $this->drupalGet($link_display_path);
    $this->submitForm([
      'link_display' => 'custom_url',
      'link_url' => 'a-custom-url',
    ], 'Apply');
    // The form redirects to the default display.
    $this->drupalGet($path);

    $this->assertSession()->linkExists('Custom URL', 0, 'The link option has custom URL as summary.');

    // Test the default link_url value for new display
    $this->submitForm([], 'Add Block');
    $this->assertSession()->addressEquals('admin/structure/views/view/test_display/edit/block_2');
    $this->clickLink(t('Custom URL'));
    $this->assertSession()->fieldValueEquals('link_url', 'a-custom-url');
>>>>>>> dev
  }

  /**
   * Tests that the view status is correctly reflected on the edit form.
   */
  public function testViewStatus() {
    $view = $this->randomView();
    $id = $view['id'];

    // The view should initially have the enabled class on its form wrapper.
    $this->drupalGet('admin/structure/views/view/' . $id);
<<<<<<< HEAD
    $elements = $this->xpath('//div[contains(@class, :edit) and contains(@class, :status)]', [':edit' => 'views-edit-view', ':status' => 'enabled']);
    $this->assertNotEmpty($elements, 'The enabled class was found on the form wrapper');
=======
    $this->assertSession()->elementExists('xpath', "//div[contains(@class, 'views-edit-view') and contains(@class, 'enabled')]");
>>>>>>> dev

    $view = Views::getView($id);
    $view->storage->disable()->save();

<<<<<<< HEAD
    $this->drupalGet('admin/structure/views/view/' . $id);
    $elements = $this->xpath('//div[contains(@class, :edit) and contains(@class, :status)]', [':edit' => 'views-edit-view', ':status' => 'disabled']);
    $this->assertNotEmpty($elements, 'The disabled class was found on the form wrapper.');
=======
    // The view should now have the disabled class on its form wrapper.
    $this->drupalGet('admin/structure/views/view/' . $id);
    $this->assertSession()->elementExists('xpath', "//div[contains(@class, 'views-edit-view') and contains(@class, 'disabled')]");
>>>>>>> dev
  }

  /**
   * Ensures that no XSS is possible for buttons.
   */
  public function testDisplayTitleInButtonsXss() {
    $xss_markup = '"><script>alert(123)</script>';
    $view = $this->randomView();
    $view = View::load($view['id']);
<<<<<<< HEAD
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.master_display', TRUE)->save();
=======
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.default_display', TRUE)->save();
>>>>>>> dev

    foreach ([$xss_markup, '&quot;><script>alert(123)</script>'] as $input) {
      $display =& $view->getDisplay('page_1');
      $display['display_title'] = $input;
      $view->save();

      $this->drupalGet("admin/structure/views/view/{$view->id()}");
      $escaped = views_ui_truncate($input, 25);
<<<<<<< HEAD
      $this->assertEscaped($escaped);
      $this->assertNoRaw($xss_markup);

      $this->drupalGet("admin/structure/views/view/{$view->id()}/edit/page_1");
      $this->assertEscaped("View $escaped");
      $this->assertNoRaw("View $xss_markup");
      $this->assertEscaped("Duplicate $escaped");
      $this->assertNoRaw("Duplicate $xss_markup");
      $this->assertEscaped("Delete $escaped");
=======
      $this->assertSession()->assertEscaped($escaped);
      $this->assertNoRaw($xss_markup);

      $this->drupalGet("admin/structure/views/view/{$view->id()}/edit/page_1");
      $this->assertSession()->assertEscaped("View $escaped");
      $this->assertNoRaw("View $xss_markup");
      $this->assertSession()->assertEscaped("Duplicate $escaped");
      $this->assertNoRaw("Duplicate $xss_markup");
      $this->assertSession()->assertEscaped("Delete $escaped");
>>>>>>> dev
      $this->assertNoRaw("Delete $xss_markup");
    }
  }

  /**
   * Tests the action links on the edit display UI.
   */
  public function testActionLinks() {
    // Change the display title of a display so it contains characters that will
    // be escaped when rendered.
    $display_title = "'<test>'";
    $this->drupalGet('admin/structure/views/view/test_display');
    $display_title_path = 'admin/structure/views/nojs/display/test_display/block_1/display_title';
<<<<<<< HEAD
    $this->drupalPostForm($display_title_path, ['display_title' => $display_title], t('Apply'));

    // Ensure that the title is escaped as expected.
    $this->assertEscaped($display_title);
    $this->assertNoRaw($display_title);

    // Ensure that the dropdown buttons are displayed correctly.
    $this->assertFieldByXpath('//input[@type="submit"]', 'Duplicate ' . $display_title);
    $this->assertFieldByXpath('//input[@type="submit"]', 'Delete ' . $display_title);
    $this->assertFieldByXpath('//input[@type="submit"]', 'Disable ' . $display_title);
    $this->assertNoFieldByXpath('//input[@type="submit"]', 'Enable ' . $display_title);

    // Disable the display so we can test the rendering of the "Enable" button.
    $this->drupalPostForm(NULL, NULL, 'Disable ' . $display_title);
    $this->assertFieldByXpath('//input[@type="submit"]', 'Enable ' . $display_title);
    $this->assertNoFieldByXpath('//input[@type="submit"]', 'Disable ' . $display_title);

    // Ensure that the title is escaped as expected.
    $this->assertEscaped($display_title);
=======
    $this->drupalGet($display_title_path);
    $this->submitForm(['display_title' => $display_title], 'Apply');

    // Ensure that the title is escaped as expected.
    $this->assertSession()->assertEscaped($display_title);
    $this->assertNoRaw($display_title);

    // Ensure that the dropdown buttons are displayed correctly.
    $this->assertSession()->buttonExists('Duplicate ' . $display_title);
    $this->assertSession()->buttonExists('Delete ' . $display_title);
    $this->assertSession()->buttonExists('Disable ' . $display_title);
    $this->assertSession()->buttonNotExists('Enable ' . $display_title);

    // Disable the display so we can test the rendering of the "Enable" button.
    $this->submitForm([], 'Disable ' . $display_title);
    $this->assertSession()->buttonExists('Enable ' . $display_title);
    $this->assertSession()->buttonNotExists('Disable ' . $display_title);

    // Ensure that the title is escaped as expected.
    $this->assertSession()->assertEscaped($display_title);
>>>>>>> dev
    $this->assertNoRaw($display_title);
  }

  /**
   * Tests that the override option is hidden when it's not needed.
   */
  public function testHideDisplayOverride() {
    // Test that the override option appears with two displays.
    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
<<<<<<< HEAD
    $this->assertText('All displays');

    // Remove a display and test if the override option is hidden.
    $this->drupalPostForm('admin/structure/views/view/test_display/edit/block_1', [], t('Delete @display', ['@display' => 'Block']));
    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->assertSession()->pageTextContains('All displays');

    // Remove a display and test if the override option is hidden.
    $this->drupalGet('admin/structure/views/view/test_display/edit/block_1');
    $this->submitForm([], 'Delete Block');
    $this->submitForm([], 'Save');
>>>>>>> dev

    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
    $this->assertNoText('All displays');

<<<<<<< HEAD
    // Test that the override option is shown when display master is on.
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.master_display', TRUE)->save();
    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
    $this->assertText('All displays');

    // Test that the override option is shown if the current display is
    // overridden so that the option to revert is available.
    $this->drupalPostForm(NULL, ['override[dropdown]' => 'page_1'], t('Apply'));
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.master_display', FALSE)->save();
    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
    $this->assertText('Revert to default');
=======
    // Test that the override option is shown when default display is on.
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.default_display', TRUE)->save();
    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
    $this->assertSession()->pageTextContains('All displays');

    // Test that the override option is shown if the current display is
    // overridden so that the option to revert is available.
    $this->submitForm(['override[dropdown]' => 'page_1'], 'Apply');
    \Drupal::configFactory()->getEditable('views.settings')->set('ui.show.default_display', FALSE)->save();
    $this->drupalGet('admin/structure/views/nojs/handler/test_display/page_1/field/title');
    $this->assertSession()->pageTextContains('Revert to default');
>>>>>>> dev
  }

}
