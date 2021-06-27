<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Core\File\FileSystemInterface;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the exportation of locale files.
 *
 * @group locale
 */
class LocaleExportTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['locale'];
=======
  protected static $modules = ['locale'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user able to create languages and export translations.
   */
  protected $adminUser = NULL;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->adminUser = $this->drupalCreateUser([
      'administer languages',
      'translate interface',
      'access administration pages',
    ]);
    $this->drupalLogin($this->adminUser);

    // Copy test po files to the translations directory.
    \Drupal::service('file_system')->copy(__DIR__ . '/../../../tests/test.de.po', 'translations://', FileSystemInterface::EXISTS_REPLACE);
    \Drupal::service('file_system')->copy(__DIR__ . '/../../../tests/test.xx.po', 'translations://', FileSystemInterface::EXISTS_REPLACE);
  }

  /**
<<<<<<< HEAD
   * Test exportation of translations.
=======
   * Tests exportation of translations.
>>>>>>> dev
   */
  public function testExportTranslation() {
    $file_system = \Drupal::service('file_system');
    // First import some known translations.
    // This will also automatically add the 'fr' language.
    $name = $file_system->tempnam('temporary://', "po_") . '.po';
    file_put_contents($name, $this->getPoFile());
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/import', [
      'langcode' => 'fr',
      'files[file]' => $name,
    ], t('Import'));
    $file_system->unlink($name);

    // Get the French translations.
    $this->drupalPostForm('admin/config/regional/translate/export', [
      'langcode' => 'fr',
    ], t('Export'));

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal', 'Exported French translation file.');
    // Ensure our imported translations exist in the file.
    $this->assertRaw('msgstr "lundi"', 'French translations present in exported file.');
=======
    $this->drupalGet('admin/config/regional/translate/import');
    $this->submitForm([
      'langcode' => 'fr',
      'files[file]' => $name,
    ], 'Import');
    $file_system->unlink($name);

    // Get the French translations.
    $this->drupalGet('admin/config/regional/translate/export');
    $this->submitForm(['langcode' => 'fr'], 'Export');

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal');
    // Ensure our imported translations exist in the file.
    $this->assertRaw('msgstr "lundi"');
>>>>>>> dev

    // Import some more French translations which will be marked as customized.
    $name = $file_system->tempnam('temporary://', "po2_") . '.po';
    file_put_contents($name, $this->getCustomPoFile());
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/import', [
      'langcode' => 'fr',
      'files[file]' => $name,
      'customized' => 1,
    ], t('Import'));
=======
    $this->drupalGet('admin/config/regional/translate/import');
    $this->submitForm([
      'langcode' => 'fr',
      'files[file]' => $name,
      'customized' => 1,
    ], 'Import');
>>>>>>> dev
    $file_system->unlink($name);

    // Create string without translation in the locales_source table.
    $this->container
      ->get('locale.storage')
      ->createString()
      ->setString('February')
      ->save();

    // Export only customized French translations.
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/export', [
=======
    $this->drupalGet('admin/config/regional/translate/export');
    $this->submitForm([
>>>>>>> dev
      'langcode' => 'fr',
      'content_options[not_customized]' => FALSE,
      'content_options[customized]' => TRUE,
      'content_options[not_translated]' => FALSE,
<<<<<<< HEAD
    ], t('Export'));

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal', 'Exported French translation file with only customized strings.');
    // Ensure the customized translations exist in the file.
    $this->assertRaw('msgstr "janvier"', 'French custom translation present in exported file.');
    // Ensure no untranslated strings exist in the file.
    $this->assertNoRaw('msgid "February"', 'Untranslated string not present in exported file.');

    // Export only untranslated French translations.
    $this->drupalPostForm('admin/config/regional/translate/export', [
=======
    ], 'Export');

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal');
    // Ensure the customized translations exist in the file.
    $this->assertRaw('msgstr "janvier"');
    // Ensure no untranslated strings exist in the file.
    $this->assertNoRaw('msgid "February"');

    // Export only untranslated French translations.
    $this->drupalGet('admin/config/regional/translate/export');
    $this->submitForm([
>>>>>>> dev
      'langcode' => 'fr',
      'content_options[not_customized]' => FALSE,
      'content_options[customized]' => FALSE,
      'content_options[not_translated]' => TRUE,
<<<<<<< HEAD
    ], t('Export'));

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal', 'Exported French translation file with only untranslated strings.');
    // Ensure no customized translations exist in the file.
    $this->assertNoRaw('msgstr "janvier"', 'French custom translation not present in exported file.');
    // Ensure the untranslated strings exist in the file, and with right quotes.
    $this->assertRaw($this->getUntranslatedString(), 'Empty string present in exported file.');
  }

  /**
   * Test exportation of translation template file.
=======
    ], 'Export');

    // Ensure we have a translation file.
    $this->assertRaw('# French translation of Drupal');
    // Ensure no customized translations exist in the file.
    $this->assertNoRaw('msgstr "janvier"');
    // Ensure the untranslated strings exist in the file, and with right quotes.
    $this->assertRaw($this->getUntranslatedString());
  }

  /**
   * Tests exportation of translation template file.
>>>>>>> dev
   */
  public function testExportTranslationTemplateFile() {
    // Load an admin page with JavaScript so _drupal_add_library() fires at
    // least once and _locale_parse_js_file() gets to run at least once so that
    // the locales_source table gets populated with something.
    $this->drupalGet('admin/config/regional/language');
    // Get the translation template file.
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/export', [], t('Export'));
    // Ensure we have a translation file.
    $this->assertRaw('# LANGUAGE translation of PROJECT', 'Exported translation template file.');
=======
    $this->drupalGet('admin/config/regional/translate/export');
    $this->submitForm([], 'Export');
    // Ensure we have a translation file.
    $this->assertRaw('# LANGUAGE translation of PROJECT');
>>>>>>> dev
  }

  /**
   * Helper function that returns a proper .po file.
   */
  public function getPoFile() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "Monday"
msgstr "lundi"
EOF;
  }

  /**
   * Helper function that returns a .po file which strings will be marked
   * as customized.
   */
  public function getCustomPoFile() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "January"
msgstr "janvier"
EOF;
  }

  /**
   * Returns a .po file fragment with an untranslated string.
   *
   * @return string
   *   A .po file fragment with an untranslated string.
   */
  public function getUntranslatedString() {
    return <<< EOF
msgid "February"
msgstr ""
EOF;
  }

}
