<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Core\Database\Database;
use Drupal\Core\Language\LanguageInterface;

/**
 * Tests for updating the interface translations of projects.
 *
 * @group locale
 */
class LocaleUpdateTest extends LocaleUpdateBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    module_load_include('compare.inc', 'locale');
    module_load_include('fetch.inc', 'locale');
    $admin_user = $this->drupalCreateUser([
      'administer modules',
      'administer site configuration',
      'administer languages',
      'access administration pages',
      'translate interface',
    ]);
    $this->drupalLogin($admin_user);
    // We use German as test language. This language must match the translation
    // file that come with the locale_test module (test.de.po) and can therefore
    // not be chosen randomly.
    $this->addLanguage('de');
  }

  /**
   * Checks if local or remote translation sources are detected.
   *
   * The translation status process by default checks the status of the
   * installed projects. For testing purpose a predefined set of modules with
   * fixed file names and release versions is used. This custom project
   * definition is applied using a hook_locale_translation_projects_alter
   * implementation in the locale_test module.
   *
   * This test generates a set of local and remote translation files in their
   * respective local and remote translation directory. The test checks whether
   * the most recent files are selected in the different check scenarios: check
   * for local files only, check for both local and remote files.
   */
  public function testUpdateCheckStatus() {
    // Case when contributed modules are absent.
    $this->drupalGet('admin/reports/translations');
<<<<<<< HEAD
    $this->assertText(t('Missing translations for one project'));
=======
    $this->assertSession()->pageTextContains('Missing translations for one project');
>>>>>>> dev

    $config = $this->config('locale.settings');
    // Set a flag to let the locale_test module replace the project data with a
    // set of test projects.
    \Drupal::state()->set('locale.test_projects_alter', TRUE);

    // Create local and remote translations files.
    $this->setTranslationFiles();
    $config->set('translation.default_filename', '%project-%version.%language._po')->save();

    // Set the test conditions.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_LOCAL,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Get status of translation sources at local file system.
    $this->drupalGet('admin/reports/translations/check');
    $result = locale_translation_get_status();
<<<<<<< HEAD
    $this->assertEqual($result['contrib_module_one']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of contrib_module_one found');
    $this->assertEqual($result['contrib_module_one']['de']->timestamp, $this->timestampOld, 'Translation timestamp found');
    $this->assertEqual($result['contrib_module_two']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of contrib_module_two found');
    $this->assertEqual($result['contrib_module_two']['de']->timestamp, $this->timestampNew, 'Translation timestamp found');
    $this->assertEqual($result['locale_test']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of locale_test found');
    $this->assertEqual($result['custom_module_one']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of custom_module_one found');
=======
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['contrib_module_one']['de']->type, 'Translation of contrib_module_one found');
    $this->assertEquals($this->timestampOld, $result['contrib_module_one']['de']->timestamp, 'Translation timestamp found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['contrib_module_two']['de']->type, 'Translation of contrib_module_two found');
    $this->assertEquals($this->timestampNew, $result['contrib_module_two']['de']->timestamp, 'Translation timestamp found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['locale_test']['de']->type, 'Translation of locale_test found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['custom_module_one']['de']->type, 'Translation of custom_module_one found');
>>>>>>> dev

    // Set the test conditions.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_REMOTE_AND_LOCAL,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Get status of translation sources at both local and remote locations.
    $this->drupalGet('admin/reports/translations/check');
    $result = locale_translation_get_status();
<<<<<<< HEAD
    $this->assertEqual($result['contrib_module_one']['de']->type, LOCALE_TRANSLATION_REMOTE, 'Translation of contrib_module_one found');
    $this->assertEqual($result['contrib_module_one']['de']->timestamp, $this->timestampNew, 'Translation timestamp found');
    $this->assertEqual($result['contrib_module_two']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of contrib_module_two found');
    $this->assertEqual($result['contrib_module_two']['de']->timestamp, $this->timestampNew, 'Translation timestamp found');
    $this->assertEqual($result['contrib_module_three']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of contrib_module_three found');
    $this->assertEqual($result['contrib_module_three']['de']->timestamp, $this->timestampOld, 'Translation timestamp found');
    $this->assertEqual($result['locale_test']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of locale_test found');
    $this->assertEqual($result['custom_module_one']['de']->type, LOCALE_TRANSLATION_LOCAL, 'Translation of custom_module_one found');
=======
    $this->assertEquals(LOCALE_TRANSLATION_REMOTE, $result['contrib_module_one']['de']->type, 'Translation of contrib_module_one found');
    $this->assertEquals($this->timestampNew, $result['contrib_module_one']['de']->timestamp, 'Translation timestamp found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['contrib_module_two']['de']->type, 'Translation of contrib_module_two found');
    $this->assertEquals($this->timestampNew, $result['contrib_module_two']['de']->timestamp, 'Translation timestamp found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['contrib_module_three']['de']->type, 'Translation of contrib_module_three found');
    $this->assertEquals($this->timestampOld, $result['contrib_module_three']['de']->timestamp, 'Translation timestamp found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['locale_test']['de']->type, 'Translation of locale_test found');
    $this->assertEquals(LOCALE_TRANSLATION_LOCAL, $result['custom_module_one']['de']->type, 'Translation of custom_module_one found');
>>>>>>> dev
  }

  /**
   * Tests translation import from remote sources.
   *
   * Test conditions:
   *  - Source: remote and local files
   *  - Import overwrite: all existing translations
   */
  public function testUpdateImportSourceRemote() {
    $config = $this->config('locale.settings');

    // Build the test environment.
    $this->setTranslationFiles();
    $this->setCurrentTranslations();
    $config->set('translation.default_filename', '%project-%version.%language._po');

    // Set the update conditions for this test.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_REMOTE_AND_LOCAL,
      'overwrite' => LOCALE_TRANSLATION_OVERWRITE_ALL,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Get the translation status.
    $this->drupalGet('admin/reports/translations/check');

    // Check the status on the Available translation status page.
<<<<<<< HEAD
    $this->assertRaw('<label for="edit-langcodes-de" class="visually-hidden">Update German</label>', 'German language found');
    $this->assertText('Updates for: Contributed module one, Contributed module two, Custom module one, Locale test', 'Updates found');
    /** @var \Drupal\Core\Datetime\DateFormatterInterface $date_formatter */
    $date_formatter = $this->container->get('date.formatter');
    $this->assertText('Contributed module one (' . $date_formatter->format($this->timestampNew, 'html_date') . ')', 'Updates for Contrib module one');
    $this->assertText('Contributed module two (' . $date_formatter->format($this->timestampNew, 'html_date') . ')', 'Updates for Contrib module two');

    // Execute the translation update.
    $this->drupalPostForm('admin/reports/translations', [], t('Update translations'));

    // Check if the translation has been updated, using the status cache.
    $status = locale_translation_get_status();
    $this->assertEqual($status['contrib_module_one']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_one found');
    $this->assertEqual($status['contrib_module_two']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_two found');
    $this->assertEqual($status['contrib_module_three']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_three found');
=======
    $this->assertRaw('<label for="edit-langcodes-de" class="visually-hidden">Update German</label>');
    $this->assertSession()->pageTextContains('Updates for: Contributed module one, Contributed module two, Custom module one, Locale test');
    /** @var \Drupal\Core\Datetime\DateFormatterInterface $date_formatter */
    $date_formatter = $this->container->get('date.formatter');
    $this->assertSession()->pageTextContains('Contributed module one (' . $date_formatter->format($this->timestampNew, 'html_date') . ')');
    $this->assertSession()->pageTextContains('Contributed module two (' . $date_formatter->format($this->timestampNew, 'html_date') . ')');

    // Execute the translation update.
    $this->drupalGet('admin/reports/translations');
    $this->submitForm([], 'Update translations');

    // Check if the translation has been updated, using the status cache.
    $status = locale_translation_get_status();
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_one']['de']->type, 'Translation of contrib_module_one found');
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_two']['de']->type, 'Translation of contrib_module_two found');
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_three']['de']->type, 'Translation of contrib_module_three found');
>>>>>>> dev

    // Check the new translation status.
    // The static cache needs to be flushed first to get the most recent data
    // from the database. The function was called earlier during this test.
    drupal_static_reset('locale_translation_get_file_history');
    $history = locale_translation_get_file_history();
<<<<<<< HEAD
    $this->assertTrue($history['contrib_module_one']['de']->timestamp >= $this->timestampNow, 'Translation of contrib_module_one is imported');
    $this->assertTrue($history['contrib_module_one']['de']->last_checked >= $this->timestampNow, 'Translation of contrib_module_one is updated');
    $this->assertEqual($history['contrib_module_two']['de']->timestamp, $this->timestampNew, 'Translation of contrib_module_two is imported');
    $this->assertTrue($history['contrib_module_two']['de']->last_checked >= $this->timestampNow, 'Translation of contrib_module_two is updated');
    $this->assertEqual($history['contrib_module_three']['de']->timestamp, $this->timestampMedium, 'Translation of contrib_module_three is not imported');
    $this->assertEqual($history['contrib_module_three']['de']->last_checked, $this->timestampMedium, 'Translation of contrib_module_three is not updated');

    // Check whether existing translations have (not) been overwritten.
    $this->assertEqual(t('January', [], ['langcode' => 'de']), 'Januar_1', 'Translation of January');
    $this->assertEqual(t('February', [], ['langcode' => 'de']), 'Februar_2', 'Translation of February');
    $this->assertEqual(t('March', [], ['langcode' => 'de']), 'Marz_2', 'Translation of March');
    $this->assertEqual(t('April', [], ['langcode' => 'de']), 'April_2', 'Translation of April');
    $this->assertEqual(t('May', [], ['langcode' => 'de']), 'Mai_customized', 'Translation of May');
    $this->assertEqual(t('June', [], ['langcode' => 'de']), 'Juni', 'Translation of June');
    $this->assertEqual(t('Monday', [], ['langcode' => 'de']), 'Montag', 'Translation of Monday');
=======
    // Verify that the translation of contrib_module_one is imported and
    // updated.
    $this->assertGreaterThanOrEqual($this->timestampNow, $history['contrib_module_one']['de']->timestamp);
    $this->assertGreaterThanOrEqual($this->timestampNow, $history['contrib_module_one']['de']->last_checked);
    $this->assertEquals($this->timestampNew, $history['contrib_module_two']['de']->timestamp, 'Translation of contrib_module_two is imported');
    // Verify that the translation of contrib_module_two is updated.
    $this->assertGreaterThanOrEqual($this->timestampNow, $history['contrib_module_two']['de']->last_checked);
    $this->assertEquals($this->timestampMedium, $history['contrib_module_three']['de']->timestamp, 'Translation of contrib_module_three is not imported');
    $this->assertEquals($this->timestampMedium, $history['contrib_module_three']['de']->last_checked, 'Translation of contrib_module_three is not updated');

    // Check whether existing translations have (not) been overwritten.
    // cSpell:disable
    $this->assertEquals('Januar_1', t('January', [], ['langcode' => 'de']), 'Translation of January');
    $this->assertEquals('Februar_2', t('February', [], ['langcode' => 'de']), 'Translation of February');
    $this->assertEquals('Marz_2', t('March', [], ['langcode' => 'de']), 'Translation of March');
    $this->assertEquals('April_2', t('April', [], ['langcode' => 'de']), 'Translation of April');
    $this->assertEquals('Mai_customized', t('May', [], ['langcode' => 'de']), 'Translation of May');
    $this->assertEquals('Juni', t('June', [], ['langcode' => 'de']), 'Translation of June');
    $this->assertEquals('Montag', t('Monday', [], ['langcode' => 'de']), 'Translation of Monday');
    // cSpell:enable
>>>>>>> dev
  }

  /**
   * Tests translation import from local sources.
   *
   * Test conditions:
   *  - Source: local files only
   *  - Import overwrite: all existing translations
   */
  public function testUpdateImportSourceLocal() {
    $config = $this->config('locale.settings');

    // Build the test environment.
    $this->setTranslationFiles();
    $this->setCurrentTranslations();
    $config->set('translation.default_filename', '%project-%version.%language._po');

    // Set the update conditions for this test.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_LOCAL,
      'overwrite' => LOCALE_TRANSLATION_OVERWRITE_ALL,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));

    // Execute the translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalPostForm('admin/reports/translations', [], t('Update translations'));

    // Check if the translation has been updated, using the status cache.
    $status = locale_translation_get_status();
    $this->assertEqual($status['contrib_module_one']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_one found');
    $this->assertEqual($status['contrib_module_two']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_two found');
    $this->assertEqual($status['contrib_module_three']['de']->type, LOCALE_TRANSLATION_CURRENT, 'Translation of contrib_module_three found');
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');

    // Execute the translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalGet('admin/reports/translations');
    $this->submitForm([], 'Update translations');

    // Check if the translation has been updated, using the status cache.
    $status = locale_translation_get_status();
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_one']['de']->type, 'Translation of contrib_module_one found');
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_two']['de']->type, 'Translation of contrib_module_two found');
    $this->assertEquals(LOCALE_TRANSLATION_CURRENT, $status['contrib_module_three']['de']->type, 'Translation of contrib_module_three found');
>>>>>>> dev

    // Check the new translation status.
    // The static cache needs to be flushed first to get the most recent data
    // from the database. The function was called earlier during this test.
    drupal_static_reset('locale_translation_get_file_history');
    $history = locale_translation_get_file_history();
<<<<<<< HEAD
    $this->assertTrue($history['contrib_module_one']['de']->timestamp >= $this->timestampMedium, 'Translation of contrib_module_one is imported');
    $this->assertEqual($history['contrib_module_one']['de']->last_checked, $this->timestampMedium, 'Translation of contrib_module_one is updated');
    $this->assertEqual($history['contrib_module_two']['de']->timestamp, $this->timestampNew, 'Translation of contrib_module_two is imported');
    $this->assertTrue($history['contrib_module_two']['de']->last_checked >= $this->timestampNow, 'Translation of contrib_module_two is updated');
    $this->assertEqual($history['contrib_module_three']['de']->timestamp, $this->timestampMedium, 'Translation of contrib_module_three is not imported');
    $this->assertEqual($history['contrib_module_three']['de']->last_checked, $this->timestampMedium, 'Translation of contrib_module_three is not updated');

    // Check whether existing translations have (not) been overwritten.
    $this->assertEqual(t('January', [], ['langcode' => 'de']), 'Januar_customized', 'Translation of January');
    $this->assertEqual(t('February', [], ['langcode' => 'de']), 'Februar_2', 'Translation of February');
    $this->assertEqual(t('March', [], ['langcode' => 'de']), 'Marz_2', 'Translation of March');
    $this->assertEqual(t('April', [], ['langcode' => 'de']), 'April_2', 'Translation of April');
    $this->assertEqual(t('May', [], ['langcode' => 'de']), 'Mai_customized', 'Translation of May');
    $this->assertEqual(t('June', [], ['langcode' => 'de']), 'Juni', 'Translation of June');
    $this->assertEqual(t('Monday', [], ['langcode' => 'de']), 'Montag', 'Translation of Monday');
=======
    // Verify that the translation of contrib_module_one is imported.
    $this->assertGreaterThanOrEqual($this->timestampMedium, $history['contrib_module_one']['de']->timestamp);
    $this->assertEquals($this->timestampMedium, $history['contrib_module_one']['de']->last_checked, 'Translation of contrib_module_one is updated');
    $this->assertEquals($this->timestampNew, $history['contrib_module_two']['de']->timestamp, 'Translation of contrib_module_two is imported');
    // Verify that the translation of contrib_module_two is updated.
    $this->assertGreaterThanOrEqual($this->timestampNow, $history['contrib_module_two']['de']->last_checked);
    $this->assertEquals($this->timestampMedium, $history['contrib_module_three']['de']->timestamp, 'Translation of contrib_module_three is not imported');
    $this->assertEquals($this->timestampMedium, $history['contrib_module_three']['de']->last_checked, 'Translation of contrib_module_three is not updated');

    // Check whether existing translations have (not) been overwritten.
    // cSpell:disable
    $this->assertEquals('Januar_customized', t('January', [], ['langcode' => 'de']), 'Translation of January');
    $this->assertEquals('Februar_2', t('February', [], ['langcode' => 'de']), 'Translation of February');
    $this->assertEquals('Marz_2', t('March', [], ['langcode' => 'de']), 'Translation of March');
    $this->assertEquals('April_2', t('April', [], ['langcode' => 'de']), 'Translation of April');
    $this->assertEquals('Mai_customized', t('May', [], ['langcode' => 'de']), 'Translation of May');
    $this->assertEquals('Juni', t('June', [], ['langcode' => 'de']), 'Translation of June');
    $this->assertEquals('Montag', t('Monday', [], ['langcode' => 'de']), 'Translation of Monday');
    // cSpell:enable
>>>>>>> dev
  }

  /**
   * Tests translation import and only overwrite non-customized translations.
   *
   * Test conditions:
   *  - Source: remote and local files
   *  - Import overwrite: only overwrite non-customized translations
   */
  public function testUpdateImportModeNonCustomized() {
    $config = $this->config('locale.settings');

    // Build the test environment.
    $this->setTranslationFiles();
    $this->setCurrentTranslations();
    $config->set('translation.default_filename', '%project-%version.%language._po');

    // Set the test conditions.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_REMOTE_AND_LOCAL,
      'overwrite' => LOCALE_TRANSLATION_OVERWRITE_NON_CUSTOMIZED,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));

    // Execute translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalPostForm('admin/reports/translations', [], t('Update translations'));

    // Check whether existing translations have (not) been overwritten.
    $this->assertEqual(t('January', [], ['langcode' => 'de']), 'Januar_customized', 'Translation of January');
    $this->assertEqual(t('February', [], ['langcode' => 'de']), 'Februar_customized', 'Translation of February');
    $this->assertEqual(t('March', [], ['langcode' => 'de']), 'Marz_2', 'Translation of March');
    $this->assertEqual(t('April', [], ['langcode' => 'de']), 'April_2', 'Translation of April');
    $this->assertEqual(t('May', [], ['langcode' => 'de']), 'Mai_customized', 'Translation of May');
    $this->assertEqual(t('June', [], ['langcode' => 'de']), 'Juni', 'Translation of June');
    $this->assertEqual(t('Monday', [], ['langcode' => 'de']), 'Montag', 'Translation of Monday');
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');

    // Execute translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalGet('admin/reports/translations');
    $this->submitForm([], 'Update translations');

    // Check whether existing translations have (not) been overwritten.
    // cSpell:disable
    $this->assertEquals('Januar_customized', t('January', [], ['langcode' => 'de']), 'Translation of January');
    $this->assertEquals('Februar_customized', t('February', [], ['langcode' => 'de']), 'Translation of February');
    $this->assertEquals('Marz_2', t('March', [], ['langcode' => 'de']), 'Translation of March');
    $this->assertEquals('April_2', t('April', [], ['langcode' => 'de']), 'Translation of April');
    $this->assertEquals('Mai_customized', t('May', [], ['langcode' => 'de']), 'Translation of May');
    $this->assertEquals('Juni', t('June', [], ['langcode' => 'de']), 'Translation of June');
    $this->assertEquals('Montag', t('Monday', [], ['langcode' => 'de']), 'Translation of Monday');
    // cSpell:enable
>>>>>>> dev
  }

  /**
   * Tests translation import and don't overwrite any translation.
   *
   * Test conditions:
   *  - Source: remote and local files
   *  - Import overwrite: don't overwrite any existing translation
   */
  public function testUpdateImportModeNone() {
    $config = $this->config('locale.settings');

    // Build the test environment.
    $this->setTranslationFiles();
    $this->setCurrentTranslations();
    $config->set('translation.default_filename', '%project-%version.%language._po');

    // Set the test conditions.
    $edit = [
      'use_source' => LOCALE_TRANSLATION_USE_SOURCE_REMOTE_AND_LOCAL,
      'overwrite' => LOCALE_TRANSLATION_OVERWRITE_NONE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));

    // Execute translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalPostForm('admin/reports/translations', [], t('Update translations'));

    // Check whether existing translations have (not) been overwritten.
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');

    // Execute translation update.
    $this->drupalGet('admin/reports/translations/check');
    $this->drupalGet('admin/reports/translations');
    $this->submitForm([], 'Update translations');

    // Check whether existing translations have (not) been overwritten.
    // cSpell:disable
>>>>>>> dev
    $this->assertTranslation('January', 'Januar_customized', 'de');
    $this->assertTranslation('February', 'Februar_customized', 'de');
    $this->assertTranslation('March', 'Marz', 'de');
    $this->assertTranslation('April', 'April_2', 'de');
    $this->assertTranslation('May', 'Mai_customized', 'de');
    $this->assertTranslation('June', 'Juni', 'de');
    $this->assertTranslation('Monday', 'Montag', 'de');
<<<<<<< HEAD
=======
    // cSpell:enable
>>>>>>> dev
  }

  /**
   * Tests automatic translation import when a module is enabled.
   */
  public function testEnableUninstallModule() {
    // Make the hidden test modules look like a normal custom module.
    \Drupal::state()->set('locale.test_system_info_alter', TRUE);

    // Check if there is no translation yet.
    $this->assertTranslation('Tuesday', '', 'de');

    // Enable a module.
    $edit = [
      'modules[locale_test_translate][enable]' => 'locale_test_translate',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));

    // Check if translations have been imported.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.',
      ['%number' => 7, '%update' => 0, '%delete' => 0]), 'One translation file imported.');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');

    // Check if translations have been imported.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.',
      ['%number' => 7, '%update' => 0, '%delete' => 0]));
    // cSpell:disable-next-line
>>>>>>> dev
    $this->assertTranslation('Tuesday', 'Dienstag', 'de');

    $edit = [
      'uninstall[locale_test_translate]' => 1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules/uninstall', $edit, t('Uninstall'));
    $this->drupalPostForm(NULL, [], t('Uninstall'));
=======
    $this->drupalGet('admin/modules/uninstall');
    $this->submitForm($edit, 'Uninstall');
    $this->submitForm([], 'Uninstall');
>>>>>>> dev

    // Check if the file data is removed from the database.
    $history = locale_translation_get_file_history();
    $this->assertFalse(isset($history['locale_test_translate']), 'Project removed from the file history');
    $projects = locale_translation_get_projects();
    $this->assertFalse(isset($projects['locale_test_translate']), 'Project removed from the project list');
  }

  /**
   * Tests automatic translation import when a language is added.
   *
   * When a language is added, the system will check for translations files of
   * enabled modules and will import them. When a language is removed the system
   * will remove all translations of that language from the database.
   */
  public function testEnableLanguage() {
    // Make the hidden test modules look like a normal custom module.
    \Drupal::state()->set('locale.test_system_info_alter', TRUE);

    // Enable a module.
    $edit = [
      'modules[locale_test_translate][enable]' => 'locale_test_translate',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));

    // Check if there is no Dutch translation yet.
    $this->assertTranslation('Extraday', '', 'nl');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');

    // Check if there is no Dutch translation yet.
    $this->assertTranslation('Extraday', '', 'nl');
    // cSpell:disable-next-line
>>>>>>> dev
    $this->assertTranslation('Tuesday', 'Dienstag', 'de');

    // Add a language.
    $edit = [
      'predefined_langcode' => 'nl',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));

    // Check if the right number of translations are added.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.',
      ['%number' => 8, '%update' => 0, '%delete' => 0]), 'One language added.');
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');

    // Check if the right number of translations are added.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.',
      ['%number' => 8, '%update' => 0, '%delete' => 0]));
    // cSpell:disable-next-line
>>>>>>> dev
    $this->assertTranslation('Extraday', 'extra dag', 'nl');

    // Check if the language data is added to the database.
    $connection = Database::getConnection();
    $result = $connection->select('locale_file', 'lf')
      ->fields('lf', ['project'])
      ->condition('langcode', 'nl')
      ->execute()
      ->fetchField();
    $this->assertNotEmpty($result, 'Files added to file history');

    // Remove a language.
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/delete/nl', [], t('Delete'));
=======
    $this->drupalGet('admin/config/regional/language/delete/nl');
    $this->submitForm([], 'Delete');
>>>>>>> dev

    // Check if the language data is removed from the database.
    $result = $connection->select('locale_file', 'lf')
      ->fields('lf', ['project'])
      ->condition('langcode', 'nl')
      ->execute()
      ->fetchField();
    $this->assertFalse($result, 'Files removed from file history');

    // Check that the Dutch translation is gone.
    $this->assertTranslation('Extraday', '', 'nl');
<<<<<<< HEAD
=======
    // cSpell:disable-next-line
>>>>>>> dev
    $this->assertTranslation('Tuesday', 'Dienstag', 'de');
  }

  /**
   * Tests automatic translation import when a custom language is added.
   */
  public function testEnableCustomLanguage() {
    // Make the hidden test modules look like a normal custom module.
    \Drupal::state()->set('locale.test_system_info_alter', TRUE);

    // Enable a module.
    $edit = [
      'modules[locale_test_translate][enable]' => 'locale_test_translate',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
>>>>>>> dev

    // Create a custom language with language code 'xx' and a random
    // name.
    $langcode = 'xx';
    $name = $this->randomMachineName(16);
    $edit = [
      'predefined_langcode' => 'custom',
      'langcode' => $langcode,
      'label' => $name,
      'direction' => LanguageInterface::DIRECTION_LTR,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add custom language'));

    // Ensure the translation file is automatically imported when the language
    // was added.
    $this->assertText(t('One translation file imported.'), 'Language file automatically imported.');
    $this->assertText(t('One translation string was skipped because of disallowed or malformed HTML'), 'Language file automatically imported.');
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add custom language');

    // Ensure the translation file is automatically imported when the language
    // was added.
    $this->assertSession()->pageTextContains('One translation file imported.');
    $this->assertSession()->pageTextContains('One translation string was skipped because of disallowed or malformed HTML');
>>>>>>> dev

    // Ensure the strings were successfully imported.
    $search = [
      'string' => 'lundi',
      'langcode' => $langcode,
      'translation' => 'translated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertNoText(t('No strings available.'), 'String successfully imported.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertNoText('No strings available.');
>>>>>>> dev

    // Ensure the multiline string was imported.
    $search = [
      'string' => 'Source string for multiline translation',
      'langcode' => $langcode,
      'translation' => 'all',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertText('Multiline translation string to make sure that import works with it.', 'String successfully imported.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertSession()->pageTextContains('Multiline translation string to make sure that import works with it.');
>>>>>>> dev

    // Ensure 'Allowed HTML source string' was imported but the translation for
    // 'Another allowed HTML source string' was not because it contains invalid
    // HTML.
    $search = [
      'string' => 'HTML source string',
      'langcode' => $langcode,
      'translation' => 'all',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertText('Allowed HTML source string', 'String successfully imported.');
    $this->assertNoText('Another allowed HTML source string', 'String with disallowed translation not imported.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertSession()->pageTextContains('Allowed HTML source string');
    $this->assertNoText('Another allowed HTML source string');
>>>>>>> dev
  }

}
