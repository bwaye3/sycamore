<?php

namespace Drupal\Tests\views_ui\Functional;

<<<<<<< HEAD
=======
use Drupal\Core\Database\Database;

>>>>>>> dev
/**
 * Tests all ui related settings under admin/structure/views/settings.
 *
 * @group views_ui
 */
class SettingsTest extends UITestBase {

  /**
   * Stores an admin user used by the different tests.
   *
   * @var \Drupal\user\User
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);
    $this->drupalPlaceBlock('local_tasks_block');
  }

  /**
   * Tests the settings for the edit ui.
   */
  public function testEditUI() {
    $this->drupalLogin($this->adminUser);

    // Test the settings tab exists.
    $this->drupalGet('admin/structure/views');
<<<<<<< HEAD
    $this->assertLinkByHref('admin/structure/views/settings');

    // Test the confirmation message.
    $this->drupalPostForm('admin/structure/views/settings', [], t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));

    // Configure to always show the master display.
    $edit = [
      'ui_show_master_display' => TRUE,
    ];
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));
=======
    $this->assertSession()->linkNotExists('admin/structure/views/settings');

    // Test the confirmation message.
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');

    // Configure to always show the default display.
    $edit = [
      'ui_show_default_display' => TRUE,
    ];
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    $view = [];
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = strtolower($this->randomMachineName(16));
    $view['description'] = $this->randomMachineName(16);
    $view['page[create]'] = TRUE;
    $view['page[title]'] = $this->randomMachineName(16);
    $view['page[path]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));

    // Configure to not always show the master display.
    // If you have a view without a page or block the master display should be
    // still shown.
    $edit = [
      'ui_show_master_display' => FALSE,
    ];
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));

    $view['page[create]'] = FALSE;
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));

    // Create a view with an additional display, so master should be hidden.
    $view['page[create]'] = TRUE;
    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));

    $this->assertSession()->linkNotExists(t('Master'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');

    // Configure to not always show the default display.
    // If you have a view without a page or block the default display should be
    // still shown.
    $edit = [
      'ui_show_default_display' => FALSE,
    ];
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');

    $view['page[create]'] = FALSE;
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');

    // Create a view with an additional display, so default should be hidden.
    $view['page[create]'] = TRUE;
    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');

    $this->assertSession()->linkNotExists('Default');
>>>>>>> dev

    // Configure to always show the advanced settings.
    // @todo It doesn't seem to be a way to test this as this works just on js.

    // Configure to show the embeddable display.
    $edit = [
      'ui_show_display_embed' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
    $this->assertFieldById('edit-displays-top-add-display-embed', NULL);
=======
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
    $this->assertSession()->buttonExists('edit-displays-top-add-display-embed');
>>>>>>> dev

    $edit = [
      'ui_show_display_embed' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));

    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
    $this->assertNoFieldById('edit-displays-top-add-display-embed');
=======
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');

    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
    $this->assertSession()->buttonNotExists('edit-displays-top-add-display-embed');
>>>>>>> dev

    // Configure to hide/show the sql at the preview.
    $edit = [
      'ui_show_sql_query_enabled' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));

    $this->drupalPostForm(NULL, [], t('Update preview'));
    $xpath = $this->xpath('//div[@class="views-query-info"]/pre');
    $this->assertCount(0, $xpath, 'The views sql is hidden.');
=======
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');

    // Verify that the views sql is hidden.
    $this->submitForm([], 'Update preview');
    $this->assertSession()->elementNotExists('xpath', '//div[@class="views-query-info"]/pre');
>>>>>>> dev

    $edit = [
      'ui_show_sql_query_enabled' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings', $edit, t('Save configuration'));

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));

    $this->drupalPostForm(NULL, [], t('Update preview'));
    $xpath = $this->xpath('//div[@class="views-query-info"]//pre');
    $this->assertCount(1, $xpath, 'The views sql is shown.');
    $this->assertStringNotContainsString('db_condition_placeholder', $xpath[0]->getText(), 'No placeholders are shown in the views sql.');
    $this->assertStringContainsString("node_field_data.status = '1'", $xpath[0]->getText(), 'The placeholders in the views sql is replace by the actual value.');
=======
    $this->drupalGet('admin/structure/views/settings');
    $this->submitForm($edit, 'Save configuration');

    $view['id'] = strtolower($this->randomMachineName());
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');

    // Verify that the views sql is shown.
    $this->submitForm([], 'Update preview');
    $this->assertSession()->elementExists('xpath', '//div[@class="views-query-info"]//pre');
    // Verify that no placeholders are shown in the views sql.
    $this->assertSession()->elementTextNotContains('xpath', '//div[@class="views-query-info"]//pre', 'db_condition_placeholder');
    // Verify that the placeholders in the views sql are replaced by the actual
    // values.
    $this->assertSession()->elementTextContains('xpath', '//div[@class="views-query-info"]//pre', Database::getConnection()->escapeField("node_field_data.status") . " = '1'");
>>>>>>> dev

    // Test the advanced settings form.

    // Test the confirmation message.
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings/advanced', [], t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));
=======
    $this->drupalGet('admin/structure/views/settings/advanced');
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');
>>>>>>> dev

    $edit = [
      'skip_cache' => TRUE,
      'sql_signature' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/settings/advanced', $edit, t('Save configuration'));

    $this->assertFieldChecked('edit-skip-cache', 'The skip_cache option is checked.');
    $this->assertFieldChecked('edit-sql-signature', 'The sql_signature option is checked.');

    // Test the "Clear Views' cache" button.
    $this->drupalPostForm('admin/structure/views/settings/advanced', [], t("Clear Views' cache"));
    $this->assertText(t('The cache has been cleared.'));
=======
    $this->drupalGet('admin/structure/views/settings/advanced');
    $this->submitForm($edit, 'Save configuration');

    $this->assertSession()->checkboxChecked('edit-skip-cache');
    $this->assertSession()->checkboxChecked('edit-sql-signature');

    // Test the "Clear Views' cache" button.
    $this->drupalGet('admin/structure/views/settings/advanced');
    $this->submitForm([], "Clear Views' cache");
    $this->assertSession()->pageTextContains('The cache has been cleared.');
>>>>>>> dev
  }

}
