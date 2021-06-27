<?php

namespace Drupal\Tests\language\Functional;

use Drupal\Core\Language\LanguageInterface;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\language\Entity\ContentLanguageSettings;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the features of the language configuration element field.
 *
 * @group language
 */
class LanguageConfigurationElementTest extends BrowserTestBase {

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
    'taxonomy',
    'node',
    'language',
    'language_elements_test',
    'field_ui',
  ];

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
    $user = $this->drupalCreateUser([
      'access administration pages',
      'administer languages',
      'administer content types',
    ]);
    $this->drupalLogin($user);
  }

  /**
   * Tests the language settings have been saved.
   */
  public function testLanguageConfigurationElement() {
    $this->drupalGet('language-tests/language_configuration_element');
    $edit['lang_configuration[langcode]'] = 'current_interface';
    $edit['lang_configuration[language_alterable]'] = FALSE;
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, 'Save');
    $lang_conf = ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'some_bundle');

    // Check that the settings have been saved.
    $this->assertEqual($lang_conf->getDefaultLangcode(), 'current_interface');
    $this->assertFalse($lang_conf->isLanguageAlterable());
    $this->drupalGet('language-tests/language_configuration_element');
    $this->assertOptionSelected('edit-lang-configuration-langcode', 'current_interface');
    $this->assertNoFieldChecked('edit-lang-configuration-language-alterable');
=======
    $this->submitForm($edit, 'Save');
    $lang_conf = ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'some_bundle');

    // Check that the settings have been saved.
    $this->assertEquals('current_interface', $lang_conf->getDefaultLangcode());
    $this->assertFalse($lang_conf->isLanguageAlterable());
    $this->drupalGet('language-tests/language_configuration_element');
    $this->assertTrue($this->assertSession()->optionExists('edit-lang-configuration-langcode', 'current_interface')->isSelected());
    $this->assertSession()->checkboxNotChecked('edit-lang-configuration-language-alterable');
>>>>>>> dev

    // Reload the page and save again.
    $this->drupalGet('language-tests/language_configuration_element');
    $edit['lang_configuration[langcode]'] = 'authors_default';
    $edit['lang_configuration[language_alterable]'] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, 'Save');
    $lang_conf = ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'some_bundle');

    // Check that the settings have been saved.
    $this->assertEqual($lang_conf->getDefaultLangcode(), 'authors_default');
    $this->assertTrue($lang_conf->isLanguageAlterable());
    $this->drupalGet('language-tests/language_configuration_element');
    $this->assertOptionSelected('edit-lang-configuration-langcode', 'authors_default');
    $this->assertFieldChecked('edit-lang-configuration-language-alterable');
=======
    $this->submitForm($edit, 'Save');
    $lang_conf = ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'some_bundle');

    // Check that the settings have been saved.
    $this->assertEquals('authors_default', $lang_conf->getDefaultLangcode());
    $this->assertTrue($lang_conf->isLanguageAlterable());
    $this->drupalGet('language-tests/language_configuration_element');
    $this->assertTrue($this->assertSession()->optionExists('edit-lang-configuration-langcode', 'authors_default')->isSelected());
    $this->assertSession()->checkboxChecked('edit-lang-configuration-language-alterable');
>>>>>>> dev

    // Test if content type settings have been saved.
    $edit = [
      'name' => 'Page',
      'type' => 'page',
      'language_configuration[langcode]' => 'authors_default',
      'language_configuration[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/add', $edit, 'Save and manage fields');

    // Make sure the settings are saved when creating the content type.
    $this->drupalGet('admin/structure/types/manage/page');
    $this->assertOptionSelected('edit-language-configuration-langcode', 'authors_default');
    $this->assertFieldChecked('edit-language-configuration-language-alterable');
=======
    $this->drupalGet('admin/structure/types/add');
    $this->submitForm($edit, 'Save and manage fields');

    // Make sure the settings are saved when creating the content type.
    $this->drupalGet('admin/structure/types/manage/page');
    $this->assertTrue($this->assertSession()->optionExists('edit-language-configuration-langcode', 'authors_default')->isSelected());
    $this->assertSession()->checkboxChecked('edit-language-configuration-language-alterable');
>>>>>>> dev

  }

  /**
   * Tests that the language_get_default_langcode() returns the correct values.
   */
  public function testDefaultLangcode() {
    // Add some custom languages.
    foreach (['aa', 'bb', 'cc'] as $language_code) {
      ConfigurableLanguage::create([
        'id' => $language_code,
        'label' => $this->randomMachineName(),
      ])->save();
    }

    // Fixed language.
    ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'custom_bundle')
      ->setLanguageAlterable(TRUE)
      ->setDefaultLangcode('bb')
      ->save();

    $langcode = language_get_default_langcode('entity_test', 'custom_bundle');
<<<<<<< HEAD
    $this->assertEqual($langcode, 'bb');
=======
    $this->assertEquals('bb', $langcode);
>>>>>>> dev

    // Current interface.
    ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'custom_bundle')
      ->setLanguageAlterable(TRUE)
      ->setDefaultLangcode('current_interface')
      ->save();

    $langcode = language_get_default_langcode('entity_test', 'custom_bundle');
    $language_interface = \Drupal::languageManager()->getCurrentLanguage();
<<<<<<< HEAD
    $this->assertEqual($langcode, $language_interface->getId());
=======
    $this->assertEquals($langcode, $language_interface->getId());
>>>>>>> dev

    // Site's default.
    $old_default = \Drupal::languageManager()->getDefaultLanguage();
    // Ensure the language entity default value is correct.
    $configurable_language = ConfigurableLanguage::load($old_default->getId());
    $this->assertTrue($configurable_language->isDefault(), 'The en language entity is flagged as the default language.');

    $this->config('system.site')->set('default_langcode', 'cc')->save();
    ContentLanguageSettings::loadByEntityTypeBundle('entity_test', 'custom_bundle')
      ->setLanguageAlterable(TRUE)
      ->setDefaultLangcode(LanguageInterface::LANGCODE_SITE_DEFAULT)
      ->save();
    $langcode = language_get_default_langcode('entity_test', 'custom_bundle');
<<<<<<< HEAD
    $this->assertEqual($langcode, 'cc');
=======
    $this->assertEquals('cc', $langcode);
>>>>>>> dev

    // Ensure the language entity default value is correct.
    $configurable_language = ConfigurableLanguage::load($old_default->getId());
    $this->assertFalse($configurable_language->isDefault(), 'The en language entity is not flagged as the default language.');
    $configurable_language = ConfigurableLanguage::load('cc');
    // Check calling the
    // \Drupal\language\ConfigurableLanguageInterface::isDefault() method
    // directly.
    $this->assertTrue($configurable_language->isDefault(), 'The cc language entity is flagged as the default language.');

    // Check the default value of a language field when authors preferred option
    // is selected.
<<<<<<< HEAD
    // Create first an user and assign a preferred langcode.
=======
    // First create a user, then assign a langcode.
>>>>>>> dev
    $some_user = $this->drupalCreateUser();
    $some_user->preferred_langcode = 'bb';
    $some_user->save();
    $this->drupalLogin($some_user);
    ContentLanguageSettings::create([
      'target_entity_type_id' => 'entity_test',
      'target_bundle' => 'some_bundle',
    ])->setLanguageAlterable(TRUE)
      ->setDefaultLangcode('authors_default')
      ->save();

    $this->drupalGet('language-tests/language_configuration_element_test');
<<<<<<< HEAD
    $this->assertOptionSelected('edit-langcode', 'bb');
=======
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode', 'bb')->isSelected());
>>>>>>> dev
  }

  /**
   * Tests that the configuration is retained when the node type is updated.
   */
  public function testNodeTypeUpdate() {
    // Create the article content type first if the profile used is not the
    // standard one.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType(['type' => 'article', 'name' => 'Article']);
    }
    $admin_user = $this->drupalCreateUser(['administer content types']);
    $this->drupalLogin($admin_user);
    $edit = [
      'language_configuration[langcode]' => 'current_interface',
      'language_configuration[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/article', $edit, t('Save content type'));
    // Check the language default configuration for the articles.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('node', 'article');
    $uuid = $configuration->uuid();
    $this->assertEqual($configuration->getDefaultLangcode(), 'current_interface', 'The default language configuration has been saved on the Article content type.');
=======
    $this->drupalGet('admin/structure/types/manage/article');
    $this->submitForm($edit, 'Save content type');
    // Check the language default configuration for the articles.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('node', 'article');
    $uuid = $configuration->uuid();
    $this->assertEquals('current_interface', $configuration->getDefaultLangcode(), 'The default language configuration has been saved on the Article content type.');
>>>>>>> dev
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been saved on the Article content type.');
    // Update the article content type by changing the title label.
    $edit = [
      'title_label' => 'Name',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/article', $edit, t('Save content type'));
    // Check that we still have the settings for the updated node type.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('node', 'article');
    $this->assertEqual($configuration->getDefaultLangcode(), 'current_interface', 'The default language configuration has been kept on the updated Article content type.');
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been kept on the updated Article content type.');
    $this->assertEqual($configuration->uuid(), $uuid, 'The language configuration uuid has been kept on the updated Article content type.');
=======
    $this->drupalGet('admin/structure/types/manage/article');
    $this->submitForm($edit, 'Save content type');
    // Check that we still have the settings for the updated node type.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('node', 'article');
    $this->assertEquals('current_interface', $configuration->getDefaultLangcode(), 'The default language configuration has been kept on the updated Article content type.');
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been kept on the updated Article content type.');
    $this->assertEquals($uuid, $configuration->uuid(), 'The language configuration uuid has been kept on the updated Article content type.');
>>>>>>> dev
  }

  /**
   * Tests the language settings are deleted on bundle delete.
   */
  public function testNodeTypeDelete() {
    // Create the article content type first if the profile used is not the
    // standard one.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType([
        'type' => 'article',
        'name' => 'Article',
      ]);
    }
    $admin_user = $this->drupalCreateUser(['administer content types']);
    $this->drupalLogin($admin_user);

    // Create language configuration for the articles.
    $edit = [
      'language_configuration[langcode]' => 'authors_default',
      'language_configuration[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/article', $edit, t('Save content type'));
=======
    $this->drupalGet('admin/structure/types/manage/article');
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev

    // Check the language default configuration for articles is present.
    $configuration = \Drupal::entityTypeManager()->getStorage('language_content_settings')->load('node.article');
    $this->assertNotEmpty($configuration, 'The language configuration is present.');

    // Delete 'article' bundle.
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/article/delete', [], t('Delete'));
=======
    $this->drupalGet('admin/structure/types/manage/article/delete');
    $this->submitForm([], 'Delete');
>>>>>>> dev

    // Check that the language configuration has been deleted.
    \Drupal::entityTypeManager()->getStorage('language_content_settings')->resetCache();
    $configuration = \Drupal::entityTypeManager()->getStorage('language_content_settings')->load('node.article');
    $this->assertNull($configuration, 'The language configuration was deleted after bundle was deleted.');
  }

  /**
   * Tests that the configuration is retained when a vocabulary is updated.
   */
  public function testTaxonomyVocabularyUpdate() {
    $vocabulary = Vocabulary::create([
      'name' => 'Country',
      'vid' => 'country',
    ]);
    $vocabulary->save();

    $admin_user = $this->drupalCreateUser(['administer taxonomy']);
    $this->drupalLogin($admin_user);
    $edit = [
      'default_language[langcode]' => 'current_interface',
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/country', $edit, t('Save'));
=======
    $this->drupalGet('admin/structure/taxonomy/manage/country');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Check the language default configuration.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', 'country');
    $uuid = $configuration->uuid();
<<<<<<< HEAD
    $this->assertEqual($configuration->getDefaultLangcode(), 'current_interface', 'The default language configuration has been saved on the Country vocabulary.');
=======
    $this->assertEquals('current_interface', $configuration->getDefaultLangcode(), 'The default language configuration has been saved on the Country vocabulary.');
>>>>>>> dev
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been saved on the Country vocabulary.');
    // Update the vocabulary.
    $edit = [
      'name' => 'Nation',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/country', $edit, t('Save'));
    // Check that we still have the settings for the updated vocabulary.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', 'country');
    $this->assertEqual($configuration->getDefaultLangcode(), 'current_interface', 'The default language configuration has been kept on the updated Country vocabulary.');
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been kept on the updated Country vocabulary.');
    $this->assertEqual($configuration->uuid(), $uuid, 'The language configuration uuid has been kept on the updated Country vocabulary.');
=======
    $this->drupalGet('admin/structure/taxonomy/manage/country');
    $this->submitForm($edit, 'Save');
    // Check that we still have the settings for the updated vocabulary.
    $configuration = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', 'country');
    $this->assertEquals('current_interface', $configuration->getDefaultLangcode(), 'The default language configuration has been kept on the updated Country vocabulary.');
    $this->assertTrue($configuration->isLanguageAlterable(), 'The alterable language configuration has been kept on the updated Country vocabulary.');
    $this->assertEquals($uuid, $configuration->uuid(), 'The language configuration uuid has been kept on the updated Country vocabulary.');
>>>>>>> dev
  }

}
