<?php

namespace Drupal\Tests\content_translation\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\Tests\node\Functional\NodeTestBase;
use Drupal\Tests\TestFileCreationTrait;

/**
 * Tests the content translation language that is set.
 *
 * @group content_translation
 */
class ContentTranslationLanguageChangeTest extends NodeTestBase {

  use TestFileCreationTrait {
    getTestFiles as drupalGetTestFiles;
  }

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
    'language',
    'content_translation',
    'content_translation_test',
    'node',
    'block',
    'field_ui',
    'image',
  ];

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
    $langcodes = ['de', 'fr'];
    foreach ($langcodes as $langcode) {
      ConfigurableLanguage::createFromLangcode($langcode)->save();
    }
    $this->drupalPlaceBlock('local_tasks_block');
    $user = $this->drupalCreateUser([
      'administer site configuration',
      'administer nodes',
      'create article content',
      'edit any article content',
      'delete any article content',
      'administer content translation',
      'translate any entity',
      'create content translations',
      'administer languages',
      'administer content types',
      'administer node fields',
    ]);
    $this->drupalLogin($user);

    // Enable translation for article.
    $edit = [
      'entity_types[node]' => TRUE,
      'settings[node][article][translatable]' => TRUE,
      'settings[node][article][settings][language][language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/content-language', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/content-language');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Add an image field.
    $this->drupalGet('admin/structure/types/manage/article/fields/add-field');
    $edit = [
      'new_storage_type' => 'image',
      'field_name' => 'image_field',
      'label' => 'image_field',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save and continue'));
    $this->drupalPostForm(NULL, [], t('Save field settings'));
    $this->drupalPostForm(NULL, [], t('Save settings'));
  }

  /**
   * Test that the source language is properly set when changing.
=======
    $this->submitForm($edit, 'Save and continue');
    $this->submitForm([], 'Save field settings');
    $this->submitForm([], 'Save settings');
  }

  /**
   * Tests that the source language is properly set when changing.
>>>>>>> dev
   */
  public function testLanguageChange() {
    // Create a node in English.
    $this->drupalGet('node/add/article');
    $edit = [
      'title[0][value]' => 'english_title',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Create a translation in French.
    $this->clickLink('Translate');
    $this->clickLink('Add');
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save (this translation)'));
=======
    $this->submitForm([], 'Save (this translation)');
>>>>>>> dev
    $this->clickLink('Translate');

    // Edit English translation.
    $this->clickLink('Edit');
    // Upload and image after changing the node language.
    $images = $this->drupalGetTestFiles('image')[1];
    $edit = [
      'langcode[0][value]' => 'de',
      'files[field_image_field_0]' => $images->uri,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Upload'));
    $this->drupalPostForm(NULL, ['field_image_field[0][alt]' => 'alternative_text'], t('Save (this translation)'));
=======
    $this->submitForm($edit, 'Upload');
    $this->submitForm(['field_image_field[0][alt]' => 'alternative_text'], 'Save (this translation)');
>>>>>>> dev

    // Check that the translation languages are correct.
    $node = $this->getNodeByTitle('english_title');
    $translation_languages = $node->getTranslationLanguages();
    $this->assertArrayHasKey('fr', $translation_languages);
    $this->assertArrayHasKey('de', $translation_languages);
  }

  /**
<<<<<<< HEAD
   * Test that title does not change on ajax call with new language value.
=======
   * Tests that title does not change on ajax call with new language value.
>>>>>>> dev
   */
  public function testTitleDoesNotChangesOnChangingLanguageWidgetAndTriggeringAjaxCall() {
    // Create a node in English.
    $this->drupalGet('node/add/article', ['query' => ['test_field_only_en_fr' => 1]]);
    $edit = [
      'title[0][value]' => 'english_title',
      'test_field_only_en_fr' => 'node created',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $this->assertEqual('node created', \Drupal::state()->get('test_field_only_en_fr'));
=======
    $this->submitForm($edit, 'Save');
    $this->assertEquals('node created', \Drupal::state()->get('test_field_only_en_fr'));
>>>>>>> dev

    // Create a translation in French.
    $this->clickLink('Translate');
    $this->clickLink('Add');
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save (this translation)'));
=======
    $this->submitForm([], 'Save (this translation)');
>>>>>>> dev
    $this->clickLink('Translate');

    // Edit English translation.
    $node = $this->getNodeByTitle('english_title');
    $this->drupalGet('node/' . $node->id() . '/edit');
    // Test the expected title when loading the form.
    $this->assertRaw('<title>Edit Article english_title | Drupal</title>');
    // Upload and image after changing the node language.
    $images = $this->drupalGetTestFiles('image')[1];
    $edit = [
      'langcode[0][value]' => 'de',
      'files[field_image_field_0]' => $images->uri,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Upload'));
=======
    $this->submitForm($edit, 'Upload');
>>>>>>> dev
    // Test the expected title after triggering an ajax call with a new
    // language selected.
    $this->assertRaw('<title>Edit Article english_title | Drupal</title>');
    $edit = [
      'langcode[0][value]' => 'en',
      'field_image_field[0][alt]' => 'alternative_text',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save (this translation)'));
=======
    $this->submitForm($edit, 'Save (this translation)');
>>>>>>> dev

    // Check that the translation languages are correct.
    $node = $this->getNodeByTitle('english_title');
    $translation_languages = $node->getTranslationLanguages();
    $this->assertArrayHasKey('fr', $translation_languages);
    $this->assertArrayNotHasKey('de', $translation_languages);
  }

}
