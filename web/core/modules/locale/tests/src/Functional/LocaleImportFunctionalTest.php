<?php

namespace Drupal\Tests\locale\Functional;

<<<<<<< HEAD
use Drupal\Component\Render\FormattableMarkup;
=======
>>>>>>> dev
use Drupal\Core\Url;
use Drupal\Core\Database\Database;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Tests\BrowserTestBase;
use Drupal\Core\Language\LanguageInterface;

/**
 * Tests the import of locale files.
 *
 * @group locale
 */
class LocaleImportFunctionalTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['locale', 'dblog'];
=======
  protected static $modules = ['locale', 'dblog'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user able to create languages and import translations.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUser;

  /**
   * A user able to create languages, import translations and access site
   * reports.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUserAccessSiteReports;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Copy test po files to the translations directory.
    /** @var \Drupal\Core\File\FileSystemInterface $file_system */
    $file_system = \Drupal::service('file_system');
    $file_system->copy(__DIR__ . '/../../../tests/test.de.po', 'translations://', FileSystemInterface::EXISTS_REPLACE);
    $file_system->copy(__DIR__ . '/../../../tests/test.xx.po', 'translations://', FileSystemInterface::EXISTS_REPLACE);

    $this->adminUser = $this->drupalCreateUser([
      'administer languages',
      'translate interface',
      'access administration pages',
    ]);
    $this->adminUserAccessSiteReports = $this->drupalCreateUser([
      'administer languages',
      'translate interface',
      'access administration pages',
      'access site reports',
    ]);
    $this->drupalLogin($this->adminUser);

    // Enable import of translations. By default this is disabled for automated
    // tests.
    $this->config('locale.settings')
      ->set('translation.import_enabled', TRUE)
      ->set('translation.use_source', LOCALE_TRANSLATION_USE_SOURCE_LOCAL)
      ->save();
  }

  /**
<<<<<<< HEAD
   * Test import of standalone .po files.
=======
   * Tests import of standalone .po files.
>>>>>>> dev
   */
  public function testStandalonePoFile() {
    // Try importing a .po file.
    $this->importPoFile($this->getPoFile(), [
      'langcode' => 'fr',
    ]);
    $this->config('locale.settings');
    // The import should automatically create the corresponding language.
<<<<<<< HEAD
    $this->assertRaw(t('The language %language has been created.', ['%language' => 'French']), 'The language has been automatically created.');

    // The import should have created 8 strings.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 8, '%update' => 0, '%delete' => 0]), 'The translation file was successfully imported.');

    // This import should have saved plural forms to have 2 variants.
    $locale_plurals = \Drupal::service('locale.plural.formula')->getNumberOfPlurals('fr');
    $this->assertEqual(2, $locale_plurals, 'Plural number initialized.');

    // Ensure we were redirected correctly.
    $this->assertUrl(Url::fromRoute('locale.translate_page', [], ['absolute' => TRUE])->toString(), [], 'Correct page redirection.');
=======
    $this->assertRaw(t('The language %language has been created.', ['%language' => 'French']));

    // The import should have created 8 strings.
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 8, '%update' => 0, '%delete' => 0]));

    // This import should have saved plural forms to have 2 variants.
    $locale_plurals = \Drupal::service('locale.plural.formula')->getNumberOfPlurals('fr');
    $this->assertEquals(2, $locale_plurals, 'Plural number initialized.');

    // Ensure we were redirected correctly.
    $this->assertSession()->addressEquals(Url::fromRoute('locale.translate_page'));
>>>>>>> dev

    // Try importing a .po file with invalid tags.
    $this->importPoFile($this->getBadPoFile(), [
      'langcode' => 'fr',
    ]);

    // The import should have created 1 string and rejected 2.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]), 'The translation file was successfully imported.');

    $skip_message = \Drupal::translation()->formatPlural(2, 'One translation string was skipped because of disallowed or malformed HTML. <a href=":url">See the log</a> for details.', '@count translation strings were skipped because of disallowed or malformed HTML. See the log for details.', [':url' => Url::fromRoute('dblog.overview')->toString()]);
    $this->assertRaw($skip_message, 'Unsafe strings were skipped.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]));

    $skip_message = \Drupal::translation()->formatPlural(2, 'One translation string was skipped because of disallowed or malformed HTML. <a href=":url">See the log</a> for details.', '@count translation strings were skipped because of disallowed or malformed HTML. See the log for details.', [':url' => Url::fromRoute('dblog.overview')->toString()]);
    $this->assertRaw($skip_message);
>>>>>>> dev

    // Repeat the process with a user that can access site reports, and this
    // time the different warnings must contain links to the log.
    $this->drupalLogin($this->adminUserAccessSiteReports);

    // Try importing a .po file with invalid tags.
    $this->importPoFile($this->getBadPoFile(), [
      'langcode' => 'fr',
    ]);

    $skip_message = \Drupal::translation()->formatPlural(2, 'One translation string was skipped because of disallowed or malformed HTML. <a href=":url">See the log</a> for details.', '@count translation strings were skipped because of disallowed or malformed HTML. <a href=":url">See the log</a> for details.', [':url' => Url::fromRoute('dblog.overview')->toString()]);
<<<<<<< HEAD
    $this->assertRaw($skip_message, 'Unsafe strings were skipped.');
=======
    $this->assertRaw($skip_message);
>>>>>>> dev

    // Check empty files import with a user that cannot access site reports..
    $this->drupalLogin($this->adminUser);
    // Try importing a zero byte sized .po file.
    $this->importPoFile($this->getEmptyPoFile(), [
      'langcode' => 'fr',
    ]);
    // The import should have created 0 string and rejected 0.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file could not be imported. See the log for details.'), 'The empty translation file import reported no translations imported.');
=======
    $this->assertRaw(t('One translation file could not be imported. See the log for details.'));
>>>>>>> dev

    // Repeat the process with a user that can access site reports, and this
    // time the different warnings must contain links to the log.
    $this->drupalLogin($this->adminUserAccessSiteReports);
    // Try importing a zero byte sized .po file.
    $this->importPoFile($this->getEmptyPoFile(), [
      'langcode' => 'fr',
    ]);
    // The import should have created 0 string and rejected 0.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file could not be imported. <a href=":url">See the log</a> for details.', [':url' => Url::fromRoute('dblog.overview')->toString()]), 'The empty translation file import reported no translations imported.');

    // Try importing a .po file which doesn't exist.
    $name = $this->randomMachineName(16);
    $this->drupalPostForm('admin/config/regional/translate/import', [
      'langcode' => 'fr',
      'files[file]' => $name,
    ], t('Import'));
    $this->assertUrl(Url::fromRoute('locale.translate_import', [], ['absolute' => TRUE])->toString(), [], 'Correct page redirection.');
    $this->assertText(t('File to import not found.'), 'File to import not found message.');
=======
    $this->assertRaw(t('One translation file could not be imported. <a href=":url">See the log</a> for details.', [':url' => Url::fromRoute('dblog.overview')->toString()]));

    // Try importing a .po file which doesn't exist.
    $name = $this->randomMachineName(16);
    $this->drupalGet('admin/config/regional/translate/import');
    $this->submitForm([
      'langcode' => 'fr',
      'files[file]' => $name,
    ], 'Import');
    $this->assertSession()->addressEquals(Url::fromRoute('locale.translate_import'));
    $this->assertSession()->pageTextContains('File to import not found.');
>>>>>>> dev

    // Try importing a .po file with overriding strings, and ensure existing
    // strings are kept.
    $this->importPoFile($this->getOverwritePoFile(), [
      'langcode' => 'fr',
    ]);

    // The import should have created 1 string.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]), 'The translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]));
>>>>>>> dev
    // Ensure string wasn't overwritten.
    $search = [
      'string' => 'Montag',
      'langcode' => 'fr',
      'translation' => 'translated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertText(t('No strings available.'), 'String not overwritten by imported string.');

    // This import should not have changed number of plural forms.
    $locale_plurals = \Drupal::service('locale.plural.formula')->getNumberOfPlurals('fr');
    $this->assertEqual(2, $locale_plurals, 'Plural numbers untouched.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertSession()->pageTextContains('No strings available.');

    // This import should not have changed number of plural forms.
    $locale_plurals = \Drupal::service('locale.plural.formula')->getNumberOfPlurals('fr');
    $this->assertEquals(2, $locale_plurals, 'Plural numbers untouched.');
>>>>>>> dev

    // Try importing a .po file with overriding strings, and ensure existing
    // strings are overwritten.
    $this->importPoFile($this->getOverwritePoFile(), [
      'langcode' => 'fr',
      'overwrite_options[not_customized]' => TRUE,
    ]);

    // The import should have updated 2 strings.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 2, '%delete' => 0]), 'The translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 2, '%delete' => 0]));
>>>>>>> dev
    // Ensure string was overwritten.
    $search = [
      'string' => 'Montag',
      'langcode' => 'fr',
      'translation' => 'translated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertNoText(t('No strings available.'), 'String overwritten by imported string.');
    // This import should have changed number of plural forms.
    $locale_plurals = \Drupal::service('locale.plural.formula')->reset()->getNumberOfPlurals('fr');
    $this->assertEqual(3, $locale_plurals, 'Plural numbers changed.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertNoText('No strings available.');
    // This import should have changed number of plural forms.
    $locale_plurals = \Drupal::service('locale.plural.formula')->reset()->getNumberOfPlurals('fr');
    $this->assertEquals(3, $locale_plurals, 'Plural numbers changed.');
>>>>>>> dev

    // Importing a .po file and mark its strings as customized strings.
    $this->importPoFile($this->getCustomPoFile(), [
      'langcode' => 'fr',
      'customized' => TRUE,
    ]);

    // The import should have created 6 strings.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 6, '%update' => 0, '%delete' => 0]), 'The customized translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 6, '%update' => 0, '%delete' => 0]));
>>>>>>> dev

    // The database should now contain 6 customized strings (two imported
    // strings are not translated).
    $count = Database::getConnection()->select('locales_target')
      ->condition('customized', 1)
      ->countQuery()
      ->execute()
      ->fetchField();
<<<<<<< HEAD
    $this->assertEqual($count, 6, 'Customized translations successfully imported.');
=======
    $this->assertEquals($count, 6, 'Customized translations successfully imported.');
>>>>>>> dev

    // Try importing a .po file with overriding strings, and ensure existing
    // customized strings are kept.
    $this->importPoFile($this->getCustomOverwritePoFile(), [
      'langcode' => 'fr',
      'overwrite_options[not_customized]' => TRUE,
      'overwrite_options[customized]' => FALSE,
    ]);

    // The import should have created 1 string.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]), 'The customized translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]));
>>>>>>> dev
    // Ensure string wasn't overwritten.
    $search = [
      'string' => 'januari',
      'langcode' => 'fr',
      'translation' => 'translated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertText(t('No strings available.'), 'Customized string not overwritten by imported string.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertSession()->pageTextContains('No strings available.');
>>>>>>> dev

    // Try importing a .po file with overriding strings, and ensure existing
    // customized strings are overwritten.
    $this->importPoFile($this->getCustomOverwritePoFile(), [
      'langcode' => 'fr',
      'overwrite_options[not_customized]' => FALSE,
      'overwrite_options[customized]' => TRUE,
    ]);

    // The import should have updated 2 strings.
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 2, '%delete' => 0]), 'The customized translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 2, '%delete' => 0]));
>>>>>>> dev
    // Ensure string was overwritten.
    $search = [
      'string' => 'januari',
      'langcode' => 'fr',
      'translation' => 'translated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertNoText(t('No strings available.'), 'Customized string overwritten by imported string.');
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertNoText('No strings available.');
>>>>>>> dev

  }

  /**
<<<<<<< HEAD
   * Test msgctxt context support.
=======
   * Tests msgctxt context support.
>>>>>>> dev
   */
  public function testLanguageContext() {
    // Try importing a .po file.
    $this->importPoFile($this->getPoFileWithContext(), [
      'langcode' => 'hr',
    ]);

    // We cast the return value of t() to string so as to retrieve the
    // translated value, rendered as a string.
<<<<<<< HEAD
    $this->assertIdentical((string) t('May', [], ['langcode' => 'hr', 'context' => 'Long month name']), 'Svibanj', 'Long month name context is working.');
    $this->assertIdentical((string) t('May', [], ['langcode' => 'hr']), 'Svi.', 'Default context is working.');
  }

  /**
   * Test empty msgstr at end of .po file see #611786.
=======
    $this->assertSame('Svibanj', (string) t('May', [], ['langcode' => 'hr', 'context' => 'Long month name']), 'Long month name context is working.');
    $this->assertSame('Svi.', (string) t('May', [], ['langcode' => 'hr']), 'Default context is working.');
  }

  /**
   * Tests empty msgstr at end of .po file see #611786.
>>>>>>> dev
   */
  public function testEmptyMsgstr() {
    $langcode = 'hu';

    // Try importing a .po file.
    $this->importPoFile($this->getPoFileWithMsgstr(), [
      'langcode' => $langcode,
    ]);

<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]), 'The translation file was successfully imported.');
    $this->assertIdentical((string) t('Operations', [], ['langcode' => $langcode]), 'Műveletek', 'String imported and translated.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 1, '%update' => 0, '%delete' => 0]));
    $this->assertSame('Műveletek', (string) t('Operations', [], ['langcode' => $langcode]), 'String imported and translated.');
>>>>>>> dev

    // Try importing a .po file.
    $this->importPoFile($this->getPoFileWithEmptyMsgstr(), [
      'langcode' => $langcode,
      'overwrite_options[not_customized]' => TRUE,
    ]);
<<<<<<< HEAD
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 0, '%delete' => 1]), 'The translation file was successfully imported.');
=======
    $this->assertRaw(t('One translation file imported. %number translations were added, %update translations were updated and %delete translations were removed.', ['%number' => 0, '%update' => 0, '%delete' => 1]));
>>>>>>> dev

    $str = "Operations";
    $search = [
      'string' => $str,
      'langcode' => $langcode,
      'translation' => 'untranslated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
    $this->assertText($str, 'Search found the string as untranslated.');
=======
    // Check that search finds the string as untranslated.
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');
    $this->assertSession()->pageTextContains($str);
>>>>>>> dev
  }

  /**
   * Tests .po file import with configuration translation.
   */
  public function testConfigPoFile() {
    // Values for translations to assert. Config key, original string,
    // translation and config property name.
    $config_strings = [
      'system.maintenance' => [
        '@site is currently under maintenance. We should be back shortly. Thank you for your patience.',
<<<<<<< HEAD
=======
        // cSpell:disable-next-line
>>>>>>> dev
        '@site karbantartás alatt áll. Rövidesen visszatérünk. Köszönjük a türelmet.',
        'message',
      ],
      'user.role.anonymous' => [
        'Anonymous user',
<<<<<<< HEAD
=======
        // cSpell:disable-next-line
>>>>>>> dev
        'Névtelen felhasználó',
        'label',
      ],
    ];

    // Add custom language for testing.
    $langcode = 'xx';
    $edit = [
      'predefined_langcode' => 'custom',
      'langcode' => $langcode,
      'label' => $this->randomMachineName(16),
      'direction' => LanguageInterface::DIRECTION_LTR,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add custom language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add custom language');
>>>>>>> dev

    // Check for the source strings we are going to translate. Adding the
    // custom language should have made the process to export configuration
    // strings to interface translation executed.
    $locale_storage = $this->container->get('locale.storage');
    foreach ($config_strings as $config_string) {
      $string = $locale_storage->findString(['source' => $config_string[0], 'context' => '', 'type' => 'configuration']);
      $this->assertNotEmpty($string, 'Configuration strings have been created upon installation.');
    }

    // Import a .po file to translate.
    $this->importPoFile($this->getPoFileWithConfig(), [
      'langcode' => $langcode,
    ]);

    // Translations got recorded in the interface translation system.
    foreach ($config_strings as $config_string) {
      $search = [
        'string' => $config_string[0],
        'langcode' => $langcode,
        'translation' => 'all',
      ];
<<<<<<< HEAD
      $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));
      $this->assertText($config_string[1], new FormattableMarkup('Translation of @string found.', ['@string' => $config_string[0]]));
=======
      $this->drupalGet('admin/config/regional/translate');
      $this->submitForm($search, 'Filter');
      $this->assertSession()->pageTextContains($config_string[1]);
>>>>>>> dev
    }

    // Test that translations got recorded in the config system.
    $overrides = \Drupal::service('language.config_factory_override');
    foreach ($config_strings as $config_key => $config_string) {
      $override = $overrides->getOverride($langcode, $config_key);
<<<<<<< HEAD
      $this->assertEqual($override->get($config_string[2]), $config_string[1]);
=======
      $this->assertEquals($override->get($config_string[2]), $config_string[1]);
>>>>>>> dev
    }
  }

  /**
   * Tests .po file import with user.settings configuration.
   */
  public function testConfigtranslationImportingPoFile() {
    // Set the language code.
    $langcode = 'de';

    // Import a .po file to translate.
    $this->importPoFile($this->getPoFileWithConfigDe(), [
      'langcode' => $langcode,
    ]);

    // Check that the 'Anonymous' string is translated.
    $config = \Drupal::languageManager()->getLanguageConfigOverride($langcode, 'user.settings');
<<<<<<< HEAD
    $this->assertEqual($config->get('anonymous'), 'Anonymous German');
  }

  /**
   * Test the translation are imported when a new language is created.
=======
    $this->assertEquals('Anonymous German', $config->get('anonymous'));
  }

  /**
   * Tests the translation are imported when a new language is created.
>>>>>>> dev
   */
  public function testCreatedLanguageTranslation() {
    // Import a .po file to add de language.
    $this->importPoFile($this->getPoFileWithConfigDe(), ['langcode' => 'de']);

    // Get the language.entity.de label and check it's been translated.
    $override = \Drupal::languageManager()->getLanguageConfigOverride('de', 'language.entity.de');
<<<<<<< HEAD
    $this->assertEqual($override->get('label'), 'Deutsch');
=======
    $this->assertEquals('Deutsch', $override->get('label'));
>>>>>>> dev
  }

  /**
   * Helper function: import a standalone .po file in a given language.
   *
   * @param string $contents
   *   Contents of the .po file to import.
   * @param array $options
   *   (optional) Additional options to pass to the translation import form.
   */
  public function importPoFile($contents, array $options = []) {
    $file_system = \Drupal::service('file_system');
    $name = $file_system->tempnam('temporary://', "po_") . '.po';
    file_put_contents($name, $contents);
    $options['files[file]'] = $name;
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/import', $options, t('Import'));
=======
    $this->drupalGet('admin/config/regional/translate/import');
    $this->submitForm($options, 'Import');
>>>>>>> dev
    $file_system->unlink($name);
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

msgid "One sheep"
msgid_plural "@count sheep"
msgstr[0] "un mouton"
msgstr[1] "@count moutons"

msgid "Monday"
msgstr "lundi"

msgid "Tuesday"
msgstr "mardi"

msgid "Wednesday"
msgstr "mercredi"

msgid "Thursday"
msgstr "jeudi"

msgid "Friday"
msgstr "vendredi"

msgid "Saturday"
msgstr "samedi"

msgid "Sunday"
msgstr "dimanche"
EOF;
  }

  /**
<<<<<<< HEAD
   * Helper function that returns a empty .po file.
=======
   * Helper function that returns an empty .po file.
>>>>>>> dev
   */
  public function getEmptyPoFile() {
    return '';
  }

  /**
   * Helper function that returns a bad .po file.
   */
  public function getBadPoFile() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "Save configuration"
msgstr "Enregistrer la configuration"

msgid "edit"
msgstr "modifier<img SRC="javascript:alert(\'xss\');">"

msgid "delete"
msgstr "supprimer<script>alert('xss');</script>"

EOF;
  }

  /**
   * Helper function that returns a proper .po file for testing.
   */
  public function getOverwritePoFile() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\\n"

msgid "Monday"
msgstr "Montag"

msgid "Day"
msgstr "Jour"
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

msgid "One dog"
msgid_plural "@count dogs"
msgstr[0] "un chien"
msgstr[1] "@count chiens"

msgid "January"
msgstr "janvier"

msgid "February"
msgstr "février"

msgid "March"
msgstr "mars"

msgid "April"
msgstr "avril"

msgid "June"
msgstr "juin"
EOF;
  }

  /**
   * Helper function that returns a .po file for testing customized strings.
   */
  public function getCustomOverwritePoFile() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "January"
msgstr "januari"

msgid "February"
msgstr "februari"

msgid "July"
msgstr "juillet"
EOF;
  }

  /**
   * Helper function that returns a .po file with context.
   */
  public function getPoFileWithContext() {
    // Croatian (code hr) is one of the languages that have a different
    // form for the full name and the abbreviated name for the month of May.
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\\n"

msgctxt "Long month name"
msgid "May"
msgstr "Svibanj"

msgid "May"
msgstr "Svi."
EOF;
  }

  /**
   * Helper function that returns a .po file with an empty last item.
   */
  public function getPoFileWithEmptyMsgstr() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "Operations"
msgstr ""

EOF;
  }

  /**
   * Helper function that returns a .po file with an empty last item.
   */
  public function getPoFileWithMsgstr() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "Operations"
msgstr "Műveletek"

msgid "Will not appear in Drupal core, so we can ensure the test passes"
msgstr ""

EOF;
  }

  /**
   * Helper function that returns a .po file with configuration translations.
   */
  public function getPoFileWithConfig() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "@site is currently under maintenance. We should be back shortly. Thank you for your patience."
msgstr "@site karbantartás alatt áll. Rövidesen visszatérünk. Köszönjük a türelmet."

msgid "Anonymous user"
msgstr "Névtelen felhasználó"

EOF;
  }

  /**
   * Helper function that returns a .po file with configuration translations.
   */
  public function getPoFileWithConfigDe() {
    return <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n > 1);\\n"

msgid "Anonymous"
msgstr "Anonymous German"

msgid "German"
msgstr "Deutsch"

EOF;
  }

}
