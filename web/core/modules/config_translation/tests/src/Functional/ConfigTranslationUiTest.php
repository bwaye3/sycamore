<?php

namespace Drupal\Tests\config_translation\Functional;

<<<<<<< HEAD
use Behat\Mink\Element\NodeElement;
=======
>>>>>>> dev
use Drupal\Component\Utility\Html;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Language\Language;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Test\AssertMailTrait;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\filter\Entity\FilterFormat;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\node\Entity\NodeType;
use Drupal\Tests\BrowserTestBase;

/**
 * Translate settings and entities to various languages.
 *
 * @group config_translation
 */
class ConfigTranslationUiTest extends BrowserTestBase {

  use AssertMailTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'block',
    'config_translation',
    'config_translation_test',
    'contact',
    'contact_test',
    'contextual',
    'entity_test',
    'field_test',
    'field_ui',
    'filter',
    'filter_test',
    'node',
    'views',
    'views_ui',
<<<<<<< HEAD
=======
    'menu_ui',
>>>>>>> dev
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Languages to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  protected $langcodes = ['fr', 'ta'];
=======
  protected $langcodes = ['fr', 'ta', 'tyv'];
>>>>>>> dev

  /**
   * Administrator user for tests.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * Translator user for tests.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $translatorUser;

  /**
   * String translation storage object.
   *
   * @var \Drupal\locale\StringStorageInterface
   */
  protected $localeStorage;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $translator_permissions = [
      'translate configuration',
    ];

    /** @var \Drupal\filter\FilterFormatInterface $filter_test_format */
    $filter_test_format = FilterFormat::load('filter_test');
    /** @var \Drupal\filter\FilterFormatInterface $filtered_html_format */
    $filtered_html_format = FilterFormat::load('filtered_html');
    /** @var \Drupal\filter\FilterFormatInterface $full_html_format */
    $full_html_format = FilterFormat::load('full_html');

    $admin_permissions = array_merge(
      $translator_permissions,
      [
        'administer languages',
        'administer site configuration',
        'link to any page',
        'administer contact forms',
        'administer filters',
        $filtered_html_format->getPermissionName(),
        $full_html_format->getPermissionName(),
        $filter_test_format->getPermissionName(),
        'access site-wide contact form',
        'access contextual links',
        'administer views',
        'administer account settings',
        'administer themes',
        'bypass node access',
        'administer content types',
        'translate interface',
      ]
    );
    // Create and log in user.
    $this->translatorUser = $this->drupalCreateUser($translator_permissions);
    $this->adminUser = $this->drupalCreateUser($admin_permissions);

    // Add languages.
    foreach ($this->langcodes as $langcode) {
      ConfigurableLanguage::createFromLangcode($langcode)->save();
    }
    $this->localeStorage = $this->container->get('locale.storage');
    $this->drupalPlaceBlock('local_tasks_block');
    $this->drupalPlaceBlock('page_title_block');
  }

  /**
   * Tests the site information translation interface.
   */
  public function testSiteInformationTranslationUi() {
    $this->drupalLogin($this->adminUser);

    $site_name = 'Name of the site for testing configuration translation';
    $site_slogan = 'Site slogan for testing configuration translation';
    $site_name_label = 'Site name';
    $fr_site_name = 'Nom du site pour tester la configuration traduction';
    $fr_site_slogan = 'Slogan du site pour tester la traduction de configuration';
    $fr_site_name_label = 'Libellé du champ "Nom du site"';
    $translation_base_url = 'admin/config/system/site-information/translate';

    // Set site name and slogan for default language.
    $this->setSiteInformation($site_name, $site_slogan);

    $this->drupalGet('admin/config/system/site-information');
    // Check translation tab exist.
<<<<<<< HEAD
    $this->assertLinkByHref($translation_base_url);
=======
    $this->assertSession()->linkByHrefExists($translation_base_url);
>>>>>>> dev

    $this->drupalGet($translation_base_url);

    // Check that the 'Edit' link in the source language links back to the
    // original form.
    $this->clickLink(t('Edit'));
    // Also check that saving the form leads back to the translation overview.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save configuration'));
    $this->assertUrl($translation_base_url);

    // Check 'Add' link of French to visit add page.
    $this->assertLinkByHref("$translation_base_url/fr/add");
=======
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->addressEquals($translation_base_url);

    // Check 'Add' link of French to visit add page.
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/add");
>>>>>>> dev
    $this->clickLink(t('Add'));

    // Make sure original text is present on this page.
    $this->assertRaw($site_name);
    $this->assertRaw($site_slogan);

    // Update site name and slogan for French.
    $edit = [
      'translation[config_names][system.site][name]' => $fr_site_name,
      'translation[config_names][system.site][slogan]' => $fr_site_slogan,
    ];

<<<<<<< HEAD
    $this->drupalPostForm("$translation_base_url/fr/add", $edit, t('Save translation'));
    $this->assertRaw(t('Successfully saved @language translation.', ['@language' => 'French']));

    // Check for edit, delete links (and no 'add' link) for French language.
    $this->assertNoLinkByHref("$translation_base_url/fr/add");
    $this->assertLinkByHref("$translation_base_url/fr/edit");
    $this->assertLinkByHref("$translation_base_url/fr/delete");

    // Check translation saved proper.
    $this->drupalGet("$translation_base_url/fr/edit");
    $this->assertFieldByName('translation[config_names][system.site][name]', $fr_site_name);
    $this->assertFieldByName('translation[config_names][system.site][slogan]', $fr_site_slogan);
=======
    $this->drupalGet("{$translation_base_url}/fr/add");
    $this->submitForm($edit, 'Save translation');
    $this->assertRaw(t('Successfully saved @language translation.', ['@language' => 'French']));

    // Check for edit, delete links (and no 'add' link) for French language.
    $this->assertSession()->linkByHrefNotExists("$translation_base_url/fr/add");
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/edit");
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/delete");

    // Check translation saved proper.
    $this->drupalGet("$translation_base_url/fr/edit");
    $this->assertSession()->fieldValueEquals('translation[config_names][system.site][name]', $fr_site_name);
    $this->assertSession()->fieldValueEquals('translation[config_names][system.site][slogan]', $fr_site_slogan);
>>>>>>> dev

    // Place branding block with site name and slogan into header region.
    $this->drupalPlaceBlock('system_branding_block', ['region' => 'header']);

    // Check French translation of site name and slogan are in place.
    $this->drupalGet('fr');
    $this->assertRaw($fr_site_name);
    $this->assertRaw($fr_site_slogan);

    // Visit French site to ensure base language string present as source.
    $this->drupalGet("fr/$translation_base_url/fr/edit");
<<<<<<< HEAD
    $this->assertText($site_name);
    $this->assertText($site_slogan);
=======
    $this->assertSession()->pageTextContains($site_name);
    $this->assertSession()->pageTextContains($site_slogan);
>>>>>>> dev

    // Translate 'Site name' label in French.
    $search = [
      'string' => $site_name_label,
      'langcode' => 'fr',
      'translation' => 'untranslated',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $search, t('Filter'));

    $textarea = current($this->xpath('//textarea'));
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($search, 'Filter');

    $textarea = $this->assertSession()->elementExists('xpath', '//textarea');
>>>>>>> dev
    $lid = $textarea->getAttribute('name');
    $edit = [
      $lid => $fr_site_name_label,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate', $edit, t('Save translations'));

    // Ensure that the label is in French (and not in English).
    $this->drupalGet("fr/$translation_base_url/fr/edit");
    $this->assertText($fr_site_name_label);
=======
    $this->drupalGet('admin/config/regional/translate');
    $this->submitForm($edit, 'Save translations');

    // Ensure that the label is in French (and not in English).
    $this->drupalGet("fr/$translation_base_url/fr/edit");
    $this->assertSession()->pageTextContains($fr_site_name_label);
>>>>>>> dev
    $this->assertNoText($site_name_label);

    // Ensure that the label is also in French (and not in English)
    // when editing another language with the interface in French.
    $this->drupalGet("fr/$translation_base_url/ta/edit");
<<<<<<< HEAD
    $this->assertText($fr_site_name_label);
=======
    $this->assertSession()->pageTextContains($fr_site_name_label);
>>>>>>> dev
    $this->assertNoText($site_name_label);

    // Ensure that the label is not translated when the interface is in English.
    $this->drupalGet("$translation_base_url/fr/edit");
<<<<<<< HEAD
    $this->assertText($site_name_label);
=======
    $this->assertSession()->pageTextContains($site_name_label);
>>>>>>> dev
    $this->assertNoText($fr_site_name_label);
  }

  /**
   * Tests the site information translation interface.
   */
  public function testSourceValueDuplicateSave() {
    $this->drupalLogin($this->adminUser);

    $site_name = 'Site name for testing configuration translation';
    $site_slogan = 'Site slogan for testing configuration translation';
    $translation_base_url = 'admin/config/system/site-information/translate';
    $this->setSiteInformation($site_name, $site_slogan);

    $this->drupalGet($translation_base_url);

    // Case 1: Update new value for site slogan and site name.
    $edit = [
      'translation[config_names][system.site][name]' => 'FR ' . $site_name,
      'translation[config_names][system.site][slogan]' => 'FR ' . $site_slogan,
    ];
    // First time, no overrides, so just Add link.
<<<<<<< HEAD
    $this->drupalPostForm("$translation_base_url/fr/add", $edit, t('Save translation'));
=======
    $this->drupalGet("{$translation_base_url}/fr/add");
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev

    // Read overridden file from active config.
    $override = \Drupal::languageManager()->getLanguageConfigOverride('fr', 'system.site');

    // Expect both name and slogan in language specific file.
    $expected = [
      'name' => 'FR ' . $site_name,
      'slogan' => 'FR ' . $site_slogan,
    ];
<<<<<<< HEAD
    $this->assertEqual($expected, $override->get());
=======
    $this->assertEquals($expected, $override->get());
>>>>>>> dev

    // Case 2: Update new value for site slogan and default value for site name.
    $this->drupalGet("$translation_base_url/fr/edit");
    // Assert that the language configuration does not leak outside of the
    // translation form into the actual site name and slogan.
    $this->assertNoText('FR ' . $site_name);
    $this->assertNoText('FR ' . $site_slogan);
    $edit = [
      'translation[config_names][system.site][name]' => $site_name,
      'translation[config_names][system.site][slogan]' => 'FR ' . $site_slogan,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save translation'));
=======
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev
    $this->assertRaw(t('Successfully updated @language translation.', ['@language' => 'French']));
    $override = \Drupal::languageManager()->getLanguageConfigOverride('fr', 'system.site');

    // Expect only slogan in language specific file.
    $expected = 'FR ' . $site_slogan;
<<<<<<< HEAD
    $this->assertEqual($expected, $override->get('slogan'));
=======
    $this->assertEquals($expected, $override->get('slogan'));
>>>>>>> dev

    // Case 3: Keep default value for site name and slogan.
    $this->drupalGet("$translation_base_url/fr/edit");
    $this->assertNoText('FR ' . $site_slogan);
    $edit = [
      'translation[config_names][system.site][name]' => $site_name,
      'translation[config_names][system.site][slogan]' => $site_slogan,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save translation'));
=======
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev
    $override = \Drupal::languageManager()->getLanguageConfigOverride('fr', 'system.site');

    // Expect no language specific file.
    $this->assertTrue($override->isNew());

    // Check configuration page with translator user. Should have no access.
    $this->drupalLogout();
    $this->drupalLogin($this->translatorUser);
    $this->drupalGet('admin/config/system/site-information');
    $this->assertSession()->statusCodeEquals(403);

    // While translator can access the translation page, the edit link is not
    // present due to lack of permissions.
    $this->drupalGet($translation_base_url);
<<<<<<< HEAD
    $this->assertSession()->linkNotExists(t('Edit'));

    // Check 'Add' link for French.
    $this->assertLinkByHref("$translation_base_url/fr/add");
=======
    $this->assertSession()->linkNotExists('Edit');

    // Check 'Add' link for French.
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/add");
>>>>>>> dev
  }

  /**
   * Tests the contact form translation.
   */
  public function testContactConfigEntityTranslation() {
    $this->drupalLogin($this->adminUser);

    $this->drupalGet('admin/structure/contact');

    // Check for default contact form configuration entity from Contact module.
<<<<<<< HEAD
    $this->assertLinkByHref('admin/structure/contact/manage/feedback');
=======
    $this->assertSession()->linkByHrefExists('admin/structure/contact/manage/feedback');
>>>>>>> dev

    // Save default language configuration.
    $label = 'Send your feedback';
    $edit = [
      'label' => $label,
      'recipients' => 'sales@example.com,support@example.com',
      'reply' => 'Thank you for your mail',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/contact/manage/feedback', $edit, t('Save'));

    // Ensure translation link is present.
    $translation_base_url = 'admin/structure/contact/manage/feedback/translate';
    $this->assertLinkByHref($translation_base_url);

    // Make sure translate tab is present.
    $this->drupalGet('admin/structure/contact/manage/feedback');
    $this->assertSession()->linkExists(t('Translate @type', ['@type' => 'contact form']));

    // Visit the form to confirm the changes.
    $this->drupalGet('contact/feedback');
    $this->assertText($label);

    foreach ($this->langcodes as $langcode) {
      $this->drupalGet($translation_base_url);
      $this->assertSession()->linkExists(t('Translate @type', ['@type' => 'contact form']));

      // 'Add' link should be present for $langcode translation.
      $translation_page_url = "$translation_base_url/$langcode/add";
      $this->assertLinkByHref($translation_page_url);

      // Make sure original text is present on this page.
      $this->drupalGet($translation_page_url);
      $this->assertText($label);
=======
    $this->drupalGet('admin/structure/contact/manage/feedback');
    $this->submitForm($edit, 'Save');

    // Ensure translation link is present.
    $translation_base_url = 'admin/structure/contact/manage/feedback/translate';
    $this->assertSession()->linkByHrefExists($translation_base_url);

    // Make sure translate tab is present.
    $this->drupalGet('admin/structure/contact/manage/feedback');
    $this->assertSession()->linkExists('Translate contact form');

    // Visit the form to confirm the changes.
    $this->drupalGet('contact/feedback');
    $this->assertSession()->pageTextContains($label);

    foreach ($this->langcodes as $langcode) {
      $this->drupalGet($translation_base_url);
      $this->assertSession()->linkExists('Translate contact form');

      // 'Add' link should be present for $langcode translation.
      $translation_page_url = "$translation_base_url/$langcode/add";
      $this->assertSession()->linkByHrefExists($translation_page_url);

      // Make sure original text is present on this page.
      $this->drupalGet($translation_page_url);
      $this->assertSession()->pageTextContains($label);
>>>>>>> dev

      // Update translatable fields.
      $edit = [
        'translation[config_names][contact.form.feedback][label]' => 'Website feedback - ' . $langcode,
        'translation[config_names][contact.form.feedback][reply]' => 'Thank you for your mail - ' . $langcode,
      ];

      // Save language specific version of form.
<<<<<<< HEAD
      $this->drupalPostForm($translation_page_url, $edit, t('Save translation'));
=======
      $this->drupalGet($translation_page_url);
      $this->submitForm($edit, 'Save translation');
>>>>>>> dev

      // Expect translated values in language specific file.
      $override = \Drupal::languageManager()->getLanguageConfigOverride($langcode, 'contact.form.feedback');
      $expected = [
        'label' => 'Website feedback - ' . $langcode,
        'reply' => 'Thank you for your mail - ' . $langcode,
      ];
<<<<<<< HEAD
      $this->assertEqual($expected, $override->get());

      // Check for edit, delete links (and no 'add' link) for $langcode.
      $this->assertNoLinkByHref("$translation_base_url/$langcode/add");
      $this->assertLinkByHref("$translation_base_url/$langcode/edit");
      $this->assertLinkByHref("$translation_base_url/$langcode/delete");

      // Visit language specific version of form to check label.
      $this->drupalGet($langcode . '/contact/feedback');
      $this->assertText('Website feedback - ' . $langcode);
=======
      $this->assertEquals($expected, $override->get());

      // Check for edit, delete links (and no 'add' link) for $langcode.
      $this->assertSession()->linkByHrefNotExists("$translation_base_url/$langcode/add");
      $this->assertSession()->linkByHrefExists("$translation_base_url/$langcode/edit");
      $this->assertSession()->linkByHrefExists("$translation_base_url/$langcode/delete");

      // Visit language specific version of form to check label.
      $this->drupalGet($langcode . '/contact/feedback');
      $this->assertSession()->pageTextContains('Website feedback - ' . $langcode);
>>>>>>> dev

      // Submit feedback.
      $edit = [
        'subject[0][value]' => 'Test subject',
        'message[0][value]' => 'Test message',
      ];
<<<<<<< HEAD
      $this->drupalPostForm(NULL, $edit, t('Send message'));
=======
      $this->submitForm($edit, 'Send message');
>>>>>>> dev
    }

    // Now that all language translations are present, check translation and
    // original text all appear in any translated page on the translation
    // forms.
    foreach ($this->langcodes as $langcode) {
      $langcode_prefixes = array_merge([''], $this->langcodes);
      foreach ($langcode_prefixes as $langcode_prefix) {
        $this->drupalGet(ltrim("$langcode_prefix/$translation_base_url/$langcode/edit", '/'));
<<<<<<< HEAD
        $this->assertFieldByName('translation[config_names][contact.form.feedback][label]', 'Website feedback - ' . $langcode);
        $this->assertText($label);
=======
        $this->assertSession()->fieldValueEquals('translation[config_names][contact.form.feedback][label]', 'Website feedback - ' . $langcode);
        $this->assertSession()->pageTextContains($label);
>>>>>>> dev
      }
    }

    // We get all emails so no need to check inside the loop.
    $captured_emails = $this->getMails();

    // Check language specific auto reply text in email body.
    foreach ($captured_emails as $email) {
      if ($email['id'] == 'contact_page_autoreply') {
        // Trim because we get an added newline for the body.
<<<<<<< HEAD
        $this->assertEqual(trim($email['body']), 'Thank you for your mail - ' . $email['langcode']);
=======
        $this->assertEquals('Thank you for your mail - ' . $email['langcode'], trim($email['body']));
>>>>>>> dev
      }
    }

    // Test that delete links work and operations perform properly.
    foreach ($this->langcodes as $langcode) {
      $replacements = ['%label' => t('@label @entity_type', ['@label' => $label, '@entity_type' => mb_strtolower(t('Contact form'))]), '@language' => \Drupal::languageManager()->getLanguage($langcode)->getName()];

      $this->drupalGet("$translation_base_url/$langcode/delete");
      $this->assertRaw(t('Are you sure you want to delete the @language translation of %label?', $replacements));
      // Assert link back to list page to cancel delete is present.
<<<<<<< HEAD
      $this->assertLinkByHref($translation_base_url);

      $this->drupalPostForm(NULL, [], t('Delete'));
      $this->assertRaw(t('@language translation of %label was deleted', $replacements));
      $this->assertLinkByHref("$translation_base_url/$langcode/add");
      $this->assertNoLinkByHref("translation_base_url/$langcode/edit");
      $this->assertNoLinkByHref("$translation_base_url/$langcode/delete");
=======
      $this->assertSession()->linkByHrefExists($translation_base_url);

      $this->submitForm([], 'Delete');
      $this->assertRaw(t('@language translation of %label was deleted', $replacements));
      $this->assertSession()->linkByHrefExists("$translation_base_url/$langcode/add");
      $this->assertSession()->linkByHrefNotExists("translation_base_url/$langcode/edit");
      $this->assertSession()->linkByHrefNotExists("$translation_base_url/$langcode/delete");
>>>>>>> dev

      // Expect no language specific file present anymore.
      $override = \Drupal::languageManager()->getLanguageConfigOverride($langcode, 'contact.form.feedback');
      $this->assertTrue($override->isNew());
    }

    // Check configuration page with translator user. Should have no access.
    $this->drupalLogout();
    $this->drupalLogin($this->translatorUser);
    $this->drupalGet('admin/structure/contact/manage/feedback');
    $this->assertSession()->statusCodeEquals(403);

    // While translator can access the translation page, the edit link is not
    // present due to lack of permissions.
    $this->drupalGet($translation_base_url);
<<<<<<< HEAD
    $this->assertSession()->linkNotExists(t('Edit'));

    // Check 'Add' link for French.
    $this->assertLinkByHref("$translation_base_url/fr/add");
=======
    $this->assertSession()->linkNotExists('Edit');

    // Check 'Add' link for French.
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/add");
>>>>>>> dev
  }

  /**
   * Tests date format translation.
   */
  public function testDateFormatTranslation() {
    $this->drupalLogin($this->adminUser);

    $this->drupalGet('admin/config/regional/date-time');

    // Check for medium format.
<<<<<<< HEAD
    $this->assertLinkByHref('admin/config/regional/date-time/formats/manage/medium');
=======
    $this->assertSession()->linkByHrefExists('admin/config/regional/date-time/formats/manage/medium');
>>>>>>> dev

    // Save default language configuration for a new format.
    $edit = [
      'label' => 'Custom medium date',
      'id' => 'custom_medium',
      'date_format_pattern' => 'Y. m. d. H:i',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
>>>>>>> dev

    // Test translating a default shipped format and our custom format.
    $formats = [
      'medium' => 'Default medium date',
      'custom_medium' => 'Custom medium date',
    ];
    foreach ($formats as $id => $label) {
      $translation_base_url = 'admin/config/regional/date-time/formats/manage/' . $id . '/translate';

      $this->drupalGet($translation_base_url);

      // 'Add' link should be present for French translation.
      $translation_page_url = "$translation_base_url/fr/add";
<<<<<<< HEAD
      $this->assertLinkByHref($translation_page_url);

      // Make sure original text is present on this page.
      $this->drupalGet($translation_page_url);
      $this->assertText($label);
=======
      $this->assertSession()->linkByHrefExists($translation_page_url);

      // Make sure original text is present on this page.
      $this->drupalGet($translation_page_url);
      $this->assertSession()->pageTextContains($label);
>>>>>>> dev

      // Make sure that the date library is added.
      $this->assertRaw('core/modules/system/js/system.date.js');

      // Update translatable fields.
      $edit = [
        'translation[config_names][core.date_format.' . $id . '][label]' => $id . ' - FR',
        'translation[config_names][core.date_format.' . $id . '][pattern]' => 'D',
      ];

      // Save language specific version of form.
<<<<<<< HEAD
      $this->drupalPostForm($translation_page_url, $edit, t('Save translation'));
=======
      $this->drupalGet($translation_page_url);
      $this->submitForm($edit, 'Save translation');
>>>>>>> dev

      // Get translation and check we've got the right value.
      $override = \Drupal::languageManager()->getLanguageConfigOverride('fr', 'core.date_format.' . $id);
      $expected = [
        'label' => $id . ' - FR',
        'pattern' => 'D',
      ];
<<<<<<< HEAD
      $this->assertEqual($expected, $override->get());
=======
      $this->assertEquals($expected, $override->get());
>>>>>>> dev

      // Formatting the date 8 / 27 / 1985 @ 13:37 EST with pattern D should
      // display "Tue".
      $formatted_date = $this->container->get('date.formatter')->format(494015820, $id, NULL, 'America/New_York', 'fr');
<<<<<<< HEAD
      $this->assertEqual($formatted_date, 'Tue', 'Got the right formatted date using the date format translation pattern.');
=======
      $this->assertEquals('Tue', $formatted_date, 'Got the right formatted date using the date format translation pattern.');
>>>>>>> dev
    }
  }

  /**
   * Tests the account settings translation interface.
   *
   * This is the only special case so far where we have multiple configuration
   * names involved building up one configuration translation form. Test that
   * the translations are saved for all configuration names properly.
   */
  public function testAccountSettingsConfigurationTranslation() {
    $this->drupalLogin($this->adminUser);

    $this->drupalGet('admin/config/people/accounts');
<<<<<<< HEAD
    $this->assertSession()->linkExists(t('Translate @type', ['@type' => 'account settings']));

    $this->drupalGet('admin/config/people/accounts/translate');
    $this->assertSession()->linkExists(t('Translate @type', ['@type' => 'account settings']));
    $this->assertLinkByHref('admin/config/people/accounts/translate/fr/add');
=======
    $this->assertSession()->linkExists('Translate account settings');

    $this->drupalGet('admin/config/people/accounts/translate');
    $this->assertSession()->linkExists('Translate account settings');
    $this->assertSession()->linkByHrefExists('admin/config/people/accounts/translate/fr/add');
>>>>>>> dev

    // Update account settings fields for French.
    $edit = [
      'translation[config_names][user.settings][anonymous]' => 'Anonyme',
      'translation[config_names][user.mail][status_blocked][subject]' => 'Testing, your account is blocked.',
      'translation[config_names][user.mail][status_blocked][body]' => 'Testing account blocked body.',
    ];

<<<<<<< HEAD
    $this->drupalPostForm('admin/config/people/accounts/translate/fr/add', $edit, t('Save translation'));
=======
    $this->drupalGet('admin/config/people/accounts/translate/fr/add');
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev

    // Make sure the changes are saved and loaded back properly.
    $this->drupalGet('admin/config/people/accounts/translate/fr/edit');
    foreach ($edit as $key => $value) {
      // Check the translations appear in the right field type as well.
<<<<<<< HEAD
      $xpath = '//' . (strpos($key, '[body]') ? 'textarea' : 'input') . '[@name="' . $key . '"]';
      $this->assertFieldByXPath($xpath, $value);
    }
    // Check that labels for email settings appear.
    $this->assertText(t('Account cancellation confirmation'));
    $this->assertText(t('Password recovery'));
=======
      $this->assertSession()->fieldValueEquals($key, $value);
    }
    // Check that labels for email settings appear.
    $this->assertSession()->pageTextContains('Account cancellation confirmation');
    $this->assertSession()->pageTextContains('Password recovery');
>>>>>>> dev
  }

  /**
   * Tests source and target language edge cases.
   */
  public function testSourceAndTargetLanguage() {
    $this->drupalLogin($this->adminUser);

    // Loading translation page for not-specified language (und)
    // should return 403.
    $this->drupalGet('admin/config/system/site-information/translate/und/add');
    $this->assertSession()->statusCodeEquals(403);

    // Check the source language doesn't have 'Add' or 'Delete' link and
    // make sure source language edit goes to original configuration page
    // not the translation specific edit page.
    $this->drupalGet('admin/config/system/site-information/translate');
<<<<<<< HEAD
    $this->assertNoLinkByHref('admin/config/system/site-information/translate/en/edit');
    $this->assertNoLinkByHref('admin/config/system/site-information/translate/en/add');
    $this->assertNoLinkByHref('admin/config/system/site-information/translate/en/delete');
    $this->assertLinkByHref('admin/config/system/site-information');
=======
    $this->assertSession()->linkByHrefNotExists('admin/config/system/site-information/translate/en/edit');
    $this->assertSession()->linkByHrefNotExists('admin/config/system/site-information/translate/en/add');
    $this->assertSession()->linkByHrefNotExists('admin/config/system/site-information/translate/en/delete');
    $this->assertSession()->linkByHrefExists('admin/config/system/site-information');
>>>>>>> dev

    // Translation addition to source language should return 403.
    $this->drupalGet('admin/config/system/site-information/translate/en/add');
    $this->assertSession()->statusCodeEquals(403);

    // Translation editing in source language should return 403.
    $this->drupalGet('admin/config/system/site-information/translate/en/edit');
    $this->assertSession()->statusCodeEquals(403);

    // Translation deletion in source language should return 403.
    $this->drupalGet('admin/config/system/site-information/translate/en/delete');
    $this->assertSession()->statusCodeEquals(403);

    // Set default language of site information to not-specified language (und).
    $this->config('system.site')
      ->set('langcode', LanguageInterface::LANGCODE_NOT_SPECIFIED)
      ->save();

    // Make sure translation tab does not exist on the configuration page.
    $this->drupalGet('admin/config/system/site-information');
<<<<<<< HEAD
    $this->assertNoLinkByHref('admin/config/system/site-information/translate');
=======
    $this->assertSession()->linkByHrefNotExists('admin/config/system/site-information/translate');
>>>>>>> dev

    // If source language is not specified, translation page should be 403.
    $this->drupalGet('admin/config/system/site-information/translate');
    $this->assertSession()->statusCodeEquals(403);
  }

  /**
   * Tests the views translation interface.
   */
  public function testViewsTranslationUI() {
    $this->drupalLogin($this->adminUser);

    $description = 'All content promoted to the front page.';
    $human_readable_name = 'Frontpage';
<<<<<<< HEAD
    $display_settings_master = 'Master';
    $display_options_master = '(Empty)';
=======
    $display_settings_default = 'Default';
    $display_options_default = '(Empty)';
>>>>>>> dev
    $translation_base_url = 'admin/structure/views/view/frontpage/translate';

    $this->drupalGet($translation_base_url);

    // Check 'Add' link of French to visit add page.
<<<<<<< HEAD
    $this->assertLinkByHref("$translation_base_url/fr/add");
=======
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/add");
>>>>>>> dev
    $this->clickLink(t('Add'));

    // Make sure original text is present on this page.
    $this->assertRaw($description);
    $this->assertRaw($human_readable_name);

    // Update Views Fields for French.
    $edit = [
      'translation[config_names][views.view.frontpage][description]' => $description . " FR",
      'translation[config_names][views.view.frontpage][label]' => $human_readable_name . " FR",
<<<<<<< HEAD
      'translation[config_names][views.view.frontpage][display][default][display_title]' => $display_settings_master . " FR",
      'translation[config_names][views.view.frontpage][display][default][display_options][title]' => $display_options_master . " FR",
    ];
    $this->drupalPostForm("$translation_base_url/fr/add", $edit, t('Save translation'));
    $this->assertRaw(t('Successfully saved @language translation.', ['@language' => 'French']));

    // Check for edit, delete links (and no 'add' link) for French language.
    $this->assertNoLinkByHref("$translation_base_url/fr/add");
    $this->assertLinkByHref("$translation_base_url/fr/edit");
    $this->assertLinkByHref("$translation_base_url/fr/delete");

    // Check translation saved proper.
    $this->drupalGet("$translation_base_url/fr/edit");
    $this->assertFieldByName('translation[config_names][views.view.frontpage][description]', $description . " FR");
    $this->assertFieldByName('translation[config_names][views.view.frontpage][label]', $human_readable_name . " FR");
    $this->assertFieldByName('translation[config_names][views.view.frontpage][display][default][display_title]', $display_settings_master . " FR");
    $this->assertFieldByName('translation[config_names][views.view.frontpage][display][default][display_options][title]', $display_options_master . " FR");
  }

  /**
   * Test the number of source elements for plural strings in config translation forms.
=======
      'translation[config_names][views.view.frontpage][display][default][display_title]' => $display_settings_default . " FR",
      'translation[config_names][views.view.frontpage][display][default][display_options][title]' => $display_options_default . " FR",
    ];
    $this->drupalGet("{$translation_base_url}/fr/add");
    $this->submitForm($edit, 'Save translation');
    $this->assertRaw(t('Successfully saved @language translation.', ['@language' => 'French']));

    // Check for edit, delete links (and no 'add' link) for French language.
    $this->assertSession()->linkByHrefNotExists("$translation_base_url/fr/add");
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/edit");
    $this->assertSession()->linkByHrefExists("$translation_base_url/fr/delete");

    // Check translation saved proper.
    $this->drupalGet("$translation_base_url/fr/edit");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.frontpage][description]', $description . " FR");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.frontpage][label]', $human_readable_name . " FR");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.frontpage][display][default][display_title]', $display_settings_default . " FR");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.frontpage][display][default][display_options][title]', $display_options_default . " FR");
  }

  /**
   * Tests the number of source elements for plural strings in config
   * translation forms.
>>>>>>> dev
   */
  public function testPluralConfigStringsSourceElements() {
    $this->drupalLogin($this->adminUser);

    // Languages to test, with various number of plural forms.
    $languages = [
      'vi' => ['plurals' => 1, 'expected' => [TRUE, FALSE, FALSE, FALSE]],
      'fr' => ['plurals' => 2, 'expected' => [TRUE, TRUE, FALSE, FALSE]],
      'sl' => ['plurals' => 4, 'expected' => [TRUE, TRUE, TRUE, TRUE]],
    ];

    foreach ($languages as $langcode => $data) {
      // Import a .po file to add a new language with a given number of plural forms
      $name = \Drupal::service('file_system')->tempnam('temporary://', $langcode . '_') . '.po';
      file_put_contents($name, $this->getPoFile($data['plurals']));
<<<<<<< HEAD
      $this->drupalPostForm('admin/config/regional/translate/import', [
        'langcode' => $langcode,
        'files[file]' => $name,
      ], t('Import'));
=======
      $this->drupalGet('admin/config/regional/translate/import');
      $this->submitForm([
        'langcode' => $langcode,
        'files[file]' => $name,
      ], 'Import');
>>>>>>> dev

      // Change the config langcode of the 'files' view.
      $config = \Drupal::service('config.factory')->getEditable('views.view.files');
      $config->set('langcode', $langcode);
      $config->save();

      // Go to the translation page of the 'files' view.
      $translation_url = 'admin/structure/views/view/files/translate/en/add';
      $this->drupalGet($translation_url);

      // Check if the expected number of source elements are present.
      foreach ($data['expected'] as $index => $expected) {
        if ($expected) {
          $this->assertRaw('edit-source-config-names-viewsviewfiles-display-default-display-options-fields-count-format-plural-string-' . $index);
        }
        else {
          $this->assertNoRaw('edit-source-config-names-viewsviewfiles-display-default-display-options-fields-count-format-plural-string-' . $index);
        }
      }
    }
  }

  /**
<<<<<<< HEAD
   * Test translation of plural strings with multiple plural forms in config.
=======
   * Tests translation of plural strings with multiple plural forms in config.
>>>>>>> dev
   */
  public function testPluralConfigStrings() {
    $this->drupalLogin($this->adminUser);

    // First import a .po file with multiple plural forms.
    // This will also automatically add the 'sl' language.
    $name = \Drupal::service('file_system')->tempnam('temporary://', "sl_") . '.po';
    file_put_contents($name, $this->getPoFile(4));
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/import', [
      'langcode' => 'sl',
      'files[file]' => $name,
    ], t('Import'));
=======
    $this->drupalGet('admin/config/regional/translate/import');
    $this->submitForm([
      'langcode' => 'sl',
      'files[file]' => $name,
    ], 'Import');
>>>>>>> dev

    // Translate the files view, as this one uses numeric formatters.
    $description = 'Singular form';
    $field_value = '1 place';
    $field_value_plural = '@count places';
    $translation_url = 'admin/structure/views/view/files/translate/sl/add';
    $this->drupalGet($translation_url);

    // Make sure original text is present on this page, in addition to 2 new
    // empty fields.
    $this->assertRaw($description);
<<<<<<< HEAD
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][0]', $field_value);
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][1]', $field_value_plural);
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][2]', '');
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][3]', '');
=======
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][0]', $field_value);
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][1]', $field_value_plural);
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][2]', '');
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][3]', '');
>>>>>>> dev

    // Then make sure it also works.
    $edit = [
      'translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][0]' => $field_value . ' SL',
      'translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][1]' => $field_value_plural . ' 1 SL',
      'translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][2]' => $field_value_plural . ' 2 SL',
      'translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][3]' => $field_value_plural . ' 3 SL',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($translation_url, $edit, t('Save translation'));

    // Make sure the values have changed.
    $this->drupalGet($translation_url);
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][0]', "$field_value SL");
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][1]', "$field_value_plural 1 SL");
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][2]', "$field_value_plural 2 SL");
    $this->assertFieldByName('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][3]', "$field_value_plural 3 SL");
=======
    $this->drupalGet($translation_url);
    $this->submitForm($edit, 'Save translation');

    // Make sure the values have changed.
    $this->drupalGet($translation_url);
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][0]', "$field_value SL");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][1]', "$field_value_plural 1 SL");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][2]', "$field_value_plural 2 SL");
    $this->assertSession()->fieldValueEquals('translation[config_names][views.view.files][display][default][display_options][fields][count][format_plural_string][3]', "$field_value_plural 3 SL");
>>>>>>> dev
  }

  /**
   * Tests the translation of field and field storage configuration.
   */
  public function testFieldConfigTranslation() {
    // Add a test field which has a translatable field setting and a
    // translatable field storage setting.
    $field_name = strtolower($this->randomMachineName());
    $field_storage = FieldStorageConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'entity_test',
      'type' => 'test_field',
    ]);

    $translatable_storage_setting = $this->randomString();
    $field_storage->setSetting('translatable_storage_setting', $translatable_storage_setting);
    $field_storage->save();

    $bundle = strtolower($this->randomMachineName());
    entity_test_create_bundle($bundle);
    $field = FieldConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'entity_test',
      'bundle' => $bundle,
    ]);

    $translatable_field_setting = $this->randomString();
    $field->setSetting('translatable_field_setting', $translatable_field_setting);
    $field->save();

    $this->drupalLogin($this->translatorUser);

    $this->drupalGet("/entity_test/structure/$bundle/fields/entity_test.$bundle.$field_name/translate");
    $this->clickLink('Add');

<<<<<<< HEAD
    $this->assertText('Translatable field setting');
    $this->assertEscaped($translatable_field_setting);
    $this->assertText('Translatable storage setting');
    $this->assertEscaped($translatable_storage_setting);
=======
    $this->assertSession()->pageTextContains('Translatable field setting');
    $this->assertSession()->assertEscaped($translatable_field_setting);
    $this->assertSession()->pageTextContains('Translatable storage setting');
    $this->assertSession()->assertEscaped($translatable_storage_setting);
>>>>>>> dev
  }

  /**
   * Tests the translation of a boolean field settings.
   */
  public function testBooleanFieldConfigTranslation() {
    // Add a test boolean field.
    $field_name = strtolower($this->randomMachineName());
    FieldStorageConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'entity_test',
      'type' => 'boolean',
    ])->save();

    $bundle = strtolower($this->randomMachineName());
    entity_test_create_bundle($bundle);
    $field = FieldConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'entity_test',
      'bundle' => $bundle,
    ]);

    $on_label = 'On label (with <em>HTML</em> & things)';
    $field->setSetting('on_label', $on_label);
    $off_label = 'Off label (with <em>HTML</em> & things)';
    $field->setSetting('off_label', $off_label);
    $field->save();

    $this->drupalLogin($this->translatorUser);

    $this->drupalGet("/entity_test/structure/$bundle/fields/entity_test.$bundle.$field_name/translate");
    $this->clickLink('Add');

    // Checks the text of details summary element that surrounds the translation
    // options.
<<<<<<< HEAD
    $this->assertText(Html::escape(strip_tags($on_label)) . ' Boolean settings');

    // Checks that the correct on and off labels appear on the form.
    $this->assertEscaped($on_label);
    $this->assertEscaped($off_label);
  }

  /**
   * Test translation storage in locale storage.
=======
    $this->assertSession()->responseContains(Html::escape(strip_tags($on_label)) . ' Boolean settings');

    // Checks that the correct on and off labels appear on the form.
    $this->assertSession()->assertEscaped($on_label);
    $this->assertSession()->assertEscaped($off_label);
  }

  /**
   * Tests translation storage in locale storage.
>>>>>>> dev
   */
  public function testLocaleDBStorage() {
    // Enable import of translations. By default this is disabled for automated
    // tests.
    $this->config('locale.settings')
      ->set('translation.import_enabled', TRUE)
      ->set('translation.use_source', LOCALE_TRANSLATION_USE_SOURCE_LOCAL)
      ->save();

    $this->drupalLogin($this->adminUser);

    $langcode = 'xx';
    $name = $this->randomMachineName(16);
    $edit = [
      'predefined_langcode' => 'custom',
      'langcode' => $langcode,
      'label' => $name,
      'direction' => Language::DIRECTION_LTR,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add custom language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add custom language');
>>>>>>> dev

    // Make sure there is no translation stored in locale storage before edit.
    $translation = $this->getTranslation('user.settings', 'anonymous', 'fr');
    $this->assertTrue(empty($translation));

    // Add custom translation.
    $edit = [
      'translation[config_names][user.settings][anonymous]' => 'Anonyme',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/people/accounts/translate/fr/add', $edit, t('Save translation'));
=======
    $this->drupalGet('admin/config/people/accounts/translate/fr/add');
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev

    // Make sure translation stored in locale storage after saved language
    // specific configuration translation.
    $translation = $this->getTranslation('user.settings', 'anonymous', 'fr');
<<<<<<< HEAD
    $this->assertEqual('Anonyme', $translation->getString());
=======
    $this->assertEquals('Anonyme', $translation->getString());
>>>>>>> dev

    // revert custom translations to base translation.
    $edit = [
      'translation[config_names][user.settings][anonymous]' => 'Anonymous',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/people/accounts/translate/fr/edit', $edit, t('Save translation'));

    // Make sure there is no translation stored in locale storage after revert.
    $translation = $this->getTranslation('user.settings', 'anonymous', 'fr');
    $this->assertEqual('Anonymous', $translation->getString());
=======
    $this->drupalGet('admin/config/people/accounts/translate/fr/edit');
    $this->submitForm($edit, 'Save translation');

    // Make sure there is no translation stored in locale storage after revert.
    $translation = $this->getTranslation('user.settings', 'anonymous', 'fr');
    $this->assertEquals('Anonymous', $translation->getString());
>>>>>>> dev
  }

  /**
   * Tests the single language existing.
   */
  public function testSingleLanguageUI() {
    $this->drupalLogin($this->adminUser);

    // Delete French language
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/delete/fr', [], t('Delete'));
=======
    $this->drupalGet('admin/config/regional/language/delete/fr');
    $this->submitForm([], 'Delete');
>>>>>>> dev
    $this->assertRaw(t('The %language (%langcode) language has been removed.', ['%language' => 'French', '%langcode' => 'fr']));

    // Change default language to Tamil.
    $edit = [
      'site_default_language' => 'ta',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language', $edit, t('Save configuration'));
    $this->assertRaw(t('Configuration saved.'));

    // Delete English language
    $this->drupalPostForm('admin/config/regional/language/delete/en', [], t('Delete'));
=======
    $this->drupalGet('admin/config/regional/language');
    $this->submitForm($edit, 'Save configuration');
    $this->assertRaw(t('Configuration saved.'));

    // Delete English language
    $this->drupalGet('admin/config/regional/language/delete/en');
    $this->submitForm([], 'Delete');
>>>>>>> dev
    $this->assertRaw(t('The %language (%langcode) language has been removed.', ['%language' => 'English', '%langcode' => 'en']));

    // Visit account setting translation page, this should not
    // throw any notices.
    $this->drupalGet('admin/config/people/accounts/translate');
    $this->assertSession()->statusCodeEquals(200);
  }

  /**
   * Tests the config_translation_info_alter() hook.
   */
  public function testAlterInfo() {
    $this->drupalLogin($this->adminUser);

    $this->container->get('state')->set('config_translation_test_config_translation_info_alter', TRUE);
    $this->container->get('plugin.manager.config_translation.mapper')->clearCachedDefinitions();

<<<<<<< HEAD
    // Check out if the translation page has the altered in settings.
    $this->drupalGet('admin/config/system/site-information/translate/fr/add');
    $this->assertText(t('Feed channel'));
    $this->assertText(t('Feed description'));

    // Check if the translation page does not have the altered out settings.
    $this->drupalGet('admin/config/people/accounts/translate/fr/add');
    $this->assertText(t('Name'));
    $this->assertNoText(t('Account cancellation confirmation'));
    $this->assertNoText(t('Password recovery'));
=======
    // Check if the translation page does not have the altered out settings.
    $this->drupalGet('admin/config/people/accounts/translate/fr/add');
    $this->assertSession()->pageTextContains('Name');
    $this->assertNoText('Account cancellation confirmation');
    $this->assertNoText('Password recovery');
>>>>>>> dev
  }

  /**
   * Tests the sequence data type translation.
   */
  public function testSequenceTranslation() {
    $this->drupalLogin($this->adminUser);
    /** @var \Drupal\Core\Config\ConfigFactoryInterface $config_factory */
    $config_factory = $this->container->get('config.factory');

    $expected = [
      'kitten',
      'llama',
      'elephant',
    ];
    $actual = $config_factory
      ->getEditable('config_translation_test.content')
      ->get('animals');
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev

    $edit = [
      'translation[config_names][config_translation_test.content][content][value]' => '<p><strong>Hello World</strong> - FR</p>',
      'translation[config_names][config_translation_test.content][animals][0]' => 'kitten - FR',
      'translation[config_names][config_translation_test.content][animals][1]' => 'llama - FR',
      'translation[config_names][config_translation_test.content][animals][2]' => 'elephant - FR',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/media/file-system/translate/fr/add', $edit, t('Save translation'));
=======
    $this->drupalGet('admin/config/media/file-system/translate/fr/add');
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev

    $this->container->get('language.config_factory_override')
      ->setLanguage(new Language(['id' => 'fr']));

    $expected = [
      'kitten - FR',
      'llama - FR',
      'elephant - FR',
    ];
    $actual = $config_factory
      ->get('config_translation_test.content')
      ->get('animals');
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
  }

  /**
   * Test text_format translation.
=======
    $this->assertEquals($expected, $actual);
  }

  /**
   * Tests text_format translation.
>>>>>>> dev
   */
  public function testTextFormatTranslation() {
    $this->drupalLogin($this->adminUser);
    /** @var \Drupal\Core\Config\ConfigFactoryInterface $config_factory */
    $config_factory = $this->container->get('config.factory');

    $expected = [
      'value' => '<p><strong>Hello World</strong></p>',
      'format' => 'plain_text',
    ];
    $actual = $config_factory
      ->get('config_translation_test.content')
      ->getOriginal('content', FALSE);
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev

    $translation_base_url = 'admin/config/media/file-system/translate';
    $this->drupalGet($translation_base_url);

    // 'Add' link should be present for French translation.
    $translation_page_url = "$translation_base_url/fr/add";
<<<<<<< HEAD
    $this->assertLinkByHref($translation_page_url);
=======
    $this->assertSession()->linkByHrefExists($translation_page_url);
>>>>>>> dev

    $this->drupalGet($translation_page_url);

    // Assert that changing the text format is not possible, even for an
    // administrator.
<<<<<<< HEAD
    $this->assertNoFieldByName('translation[config_names][config_translation_test.content][content][format]');
=======
    $this->assertSession()->fieldNotExists('translation[config_names][config_translation_test.content][content][format]');
>>>>>>> dev

    // Update translatable fields.
    $edit = [
      'translation[config_names][config_translation_test.content][content][value]' => '<p><strong>Hello World</strong> - FR</p>',
    ];

    // Save language specific version of form.
<<<<<<< HEAD
    $this->drupalPostForm($translation_page_url, $edit, t('Save translation'));
=======
    $this->drupalGet($translation_page_url);
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev

    // Get translation and check we've got the right value.
    $expected = [
      'value' => '<p><strong>Hello World</strong> - FR</p>',
      'format' => 'plain_text',
    ];
    $this->container->get('language.config_factory_override')
      ->setLanguage(new Language(['id' => 'fr']));
    $actual = $config_factory
      ->get('config_translation_test.content')
      ->get('content');
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev

    // Change the text format of the source configuration and verify that the
    // text format of the translation does not change because that could lead to
    // security vulnerabilities.
    $config_factory
      ->getEditable('config_translation_test.content')
      ->set('content.format', 'full_html')
      ->save();

    $actual = $config_factory
      ->get('config_translation_test.content')
      ->get('content');
    // The translation should not have changed, so re-use $expected.
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev

    // Because the text is now in a text format that the translator does not
    // have access to, the translator should not be able to translate it.
    $translation_page_url = "$translation_base_url/fr/edit";
    $this->drupalLogin($this->translatorUser);
    $this->drupalGet($translation_page_url);
    $this->assertDisabledTextarea('edit-translation-config-names-config-translation-testcontent-content-value');
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save translation'));
=======
    $this->submitForm([], 'Save translation');
>>>>>>> dev
    // Check that submitting the form did not update the text format of the
    // translation.
    $actual = $config_factory
      ->get('config_translation_test.content')
      ->get('content');
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev

    // The administrator must explicitly change the text format.
    $this->drupalLogin($this->adminUser);
    $edit = [
      'translation[config_names][config_translation_test.content][content][format]' => 'full_html',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($translation_page_url, $edit, t('Save translation'));
=======
    $this->drupalGet($translation_page_url);
    $this->submitForm($edit, 'Save translation');
>>>>>>> dev
    $expected = [
      'value' => '<p><strong>Hello World</strong> - FR</p>',
      'format' => 'full_html',
    ];
    $actual = $config_factory
      ->get('config_translation_test.content')
      ->get('content');
<<<<<<< HEAD
    $this->assertEqual($expected, $actual);
=======
    $this->assertEquals($expected, $actual);
>>>>>>> dev
  }

  /**
   * Tests field translation for node fields.
   */
  public function testNodeFieldTranslation() {
    NodeType::create(['type' => 'article', 'name' => 'Article'])->save();

    $field_name = 'translatable_field';
    $field_storage = FieldStorageConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'node',
      'type' => 'text',
    ]);

    $field_storage->setSetting('translatable_storage_setting', 'translatable_storage_setting');
    $field_storage->save();
    $field = FieldConfig::create([
      'field_name' => $field_name,
      'entity_type' => 'node',
      'bundle' => 'article',
    ]);
    $field->save();

    $this->drupalLogin($this->translatorUser);

    $this->drupalGet("/entity_test/structure/article/fields/node.article.$field_name/translate");
    $this->clickLink('Add');

    $form_values = [
      'translation[config_names][field.field.node.article.translatable_field][description]' => 'FR Help text.',
      'translation[config_names][field.field.node.article.translatable_field][label]' => 'FR label',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $form_values, 'Save translation');
    $this->assertText('Successfully saved French translation.');
=======
    $this->submitForm($form_values, 'Save translation');
    $this->assertSession()->pageTextContains('Successfully saved French translation.');
>>>>>>> dev

    // Check that the translations are saved.
    $this->clickLink('Add');
    $this->assertRaw('FR label');
  }

  /**
<<<<<<< HEAD
=======
   * Test translation save confirmation message.
   */
  public function testMenuTranslationWithoutChange() {
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('admin/structure/menu/manage/main/translate/tyv/add');
    $this->submitForm([], 'Save translation');
    $this->assertSession()->pageTextContains('Tuvan translation was not added. To add a translation, you must modify the configuration.');

    $this->drupalGet('admin/structure/menu/manage/main/translate/tyv/add');
    $edit = [
      'translation[config_names][system.menu.main][label]' => 'Main navigation Translation',
      'translation[config_names][system.menu.main][description]' => 'Site section links Translation',
    ];
    $this->submitForm($edit, 'Save translation');
    $this->assertSession()->pageTextContains('Successfully saved Tuvan translation.');
  }

  /**
>>>>>>> dev
   * Gets translation from locale storage.
   *
   * @param $config_name
   *   Configuration object.
   * @param $key
   *   Translation configuration field key.
   * @param $langcode
   *   String language code to load translation.
   *
   * @return bool|mixed
   *   Returns translation if exists, FALSE otherwise.
   */
  protected function getTranslation($config_name, $key, $langcode) {
    $settings_locations = $this->localeStorage->getLocations(['type' => 'configuration', 'name' => $config_name]);
    $this->assertTrue(!empty($settings_locations), new FormattableMarkup('Configuration locations found for %config_name.', ['%config_name' => $config_name]));

    if (!empty($settings_locations)) {
      $source = $this->container->get('config.factory')->get($config_name)->get($key);
      $source_string = $this->localeStorage->findString(['source' => $source, 'type' => 'configuration']);
      $this->assertTrue(!empty($source_string), new FormattableMarkup('Found string for %config_name.%key.', ['%config_name' => $config_name, '%key' => $key]));

      if (!empty($source_string)) {
        $conditions = [
          'lid' => $source_string->lid,
          'language' => $langcode,
        ];
        $translations = $this->localeStorage->getTranslations($conditions + ['translated' => TRUE]);
        return reset($translations);
      }
    }
    return FALSE;
  }

  /**
   * Sets site name and slogan for default language, helps in tests.
   *
   * @param string $site_name
   * @param string $site_slogan
   */
  protected function setSiteInformation($site_name, $site_slogan) {
    $edit = [
      'site_name' => $site_name,
      'site_slogan' => $site_slogan,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev
    $this->assertRaw(t('The configuration options have been saved.'));
  }

  /**
   * Get server-rendered contextual links for the given contextual link ids.
   *
   * @param array $ids
   *   An array of contextual link ids.
   * @param string $current_path
   *   The Drupal path for the page for which the contextual links are rendered.
   *
   * @return string
   *   The response body.
   */
  protected function renderContextualLinks($ids, $current_path) {
    $post = [];
    for ($i = 0; $i < count($ids); $i++) {
      $post['ids[' . $i . ']'] = $ids[$i];
    }
    return $this->drupalPostWithFormat('contextual/render', 'json', $post, ['query' => ['destination' => $current_path]]);
  }

  /**
   * Asserts that a textarea with a given ID has been disabled from editing.
   *
   * @param string $id
   *   The HTML ID of the textarea.
   *
   * @return bool
   *   TRUE if the assertion passed; FALSE otherwise.
   */
  protected function assertDisabledTextarea($id) {
<<<<<<< HEAD
    $textarea = $this->xpath('//textarea[@id=:id and contains(@disabled, "disabled")]', [
      ':id' => $id,
    ]);
    $textarea = reset($textarea);
    $this->assertInstanceOf(NodeElement::class, $textarea);
    $expected = 'This field has been disabled because you do not have sufficient permissions to edit it.';
    $this->assertEqual($textarea->getText(), $expected, new FormattableMarkup('Disabled textarea @id hides text in an inaccessible text format.', [
      '@id' => $id,
    ]));
=======
    $textarea = $this->assertSession()->fieldDisabled($id);
    $this->assertSame('textarea', $textarea->getTagName());
    $this->assertSame('This field has been disabled because you do not have sufficient permissions to edit it.', $textarea->getText());
>>>>>>> dev
    // Make sure the text format select is not shown.
    $select_id = str_replace('value', 'format--2', $id);
    $xpath = $this->assertSession()->buildXPathQuery('//select[@id=:id]', [':id' => $select_id]);
    $this->assertSession()->elementNotExists('xpath', $xpath);
  }

  /**
   * Helper function that returns a .po file with a given number of plural forms.
   */
  public function getPoFile($plurals) {
    $po_file = [];

    $po_file[1] = <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=1; plural=0;\\n"
EOF;

    $po_file[2] = <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=2; plural=(n>1);\\n"
EOF;

    $po_file[4] = <<< EOF
msgid ""
msgstr ""
"Project-Id-Version: Drupal 8\\n"
"MIME-Version: 1.0\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Plural-Forms: nplurals=4; plural=(((n%100)==1)?(0):(((n%100)==2)?(1):((((n%100)==3)||((n%100)==4))?(2):3)));\\n"
EOF;

    return $po_file[$plurals];
  }

}
