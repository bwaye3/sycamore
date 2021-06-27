<?php

namespace Drupal\Tests\taxonomy\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\language\Entity\ContentLanguageSettings;

/**
 * Tests the language functionality for vocabularies.
 *
 * @group taxonomy
 */
class VocabularyLanguageTest extends TaxonomyTestBase {

<<<<<<< HEAD
  public static $modules = ['language'];
=======
  protected static $modules = ['language'];
>>>>>>> dev

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

    // Create an administrative user.
    $this->drupalLogin($this->drupalCreateUser(['administer taxonomy']));

    // Add some custom languages.
    ConfigurableLanguage::create([
      'id' => 'aa',
      'label' => $this->randomMachineName(),
    ])->save();

    ConfigurableLanguage::create([
      'id' => 'bb',
      'label' => $this->randomMachineName(),
    ])->save();
  }

  /**
   * Tests language settings for vocabularies.
   */
  public function testVocabularyLanguage() {
    $this->drupalGet('admin/structure/taxonomy/add');

    // Check that we have the language selector available.
<<<<<<< HEAD
    $this->assertField('edit-langcode', 'The language selector field was found on the page.');
=======
    $this->assertSession()->fieldExists('edit-langcode');
>>>>>>> dev

    // Create the vocabulary.
    $vid = mb_strtolower($this->randomMachineName());
    $edit['name'] = $this->randomMachineName();
    $edit['description'] = $this->randomMachineName();
    $edit['langcode'] = 'aa';
    $edit['vid'] = $vid;
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));

    // Check the language on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertOptionSelected('edit-langcode', $edit['langcode'], 'The vocabulary language was correctly selected.');
=======
    $this->submitForm($edit, 'Save');

    // Check the language on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode', $edit['langcode'])->isSelected());
>>>>>>> dev

    // Change the language and save again.
    $edit['langcode'] = 'bb';
    unset($edit['vid']);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));

    // Check again the language on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertOptionSelected('edit-langcode', $edit['langcode'], 'The vocabulary language was correctly selected.');
=======
    $this->submitForm($edit, 'Save');

    // Check again the language on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode', $edit['langcode'])->isSelected());
>>>>>>> dev
  }

  /**
   * Tests term language settings for vocabulary terms are saved and updated.
   */
  public function testVocabularyDefaultLanguageForTerms() {
    // Add a new vocabulary and check that the default language settings are for
    // the terms are saved.
    $edit = [
      'name' => $this->randomMachineName(),
      'vid' => mb_strtolower($this->randomMachineName()),
      'default_language[langcode]' => 'bb',
      'default_language[language_alterable]' => TRUE,
    ];
    $vid = $edit['vid'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/add', $edit, t('Save'));
=======
    $this->drupalGet('admin/structure/taxonomy/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Check that the vocabulary was actually created.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $edit['vid']);
    $this->assertSession()->statusCodeEquals(200);

    // Check that the language settings were saved.
    $language_settings = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', $edit['vid']);
<<<<<<< HEAD
    $this->assertEqual($language_settings->getDefaultLangcode(), 'bb', 'The langcode was saved.');
    $this->assertTrue($language_settings->isLanguageAlterable(), 'The visibility setting was saved.');

    // Check that the correct options are selected in the interface.
    $this->assertOptionSelected('edit-default-language-langcode', 'bb', 'The correct default language for the terms of this vocabulary is selected.');
    $this->assertFieldChecked('edit-default-language-language-alterable', 'Show language selection option is checked.');
=======
    $this->assertEquals('bb', $language_settings->getDefaultLangcode(), 'The langcode was saved.');
    $this->assertTrue($language_settings->isLanguageAlterable(), 'The visibility setting was saved.');

    // Check that the correct options are selected in the interface.
    $this->assertTrue($this->assertSession()->optionExists('edit-default-language-langcode', 'bb')->isSelected());
    $this->assertSession()->checkboxChecked('edit-default-language-language-alterable');
>>>>>>> dev

    // Edit the vocabulary and check that the new settings are updated.
    $edit = [
      'default_language[langcode]' => 'aa',
      'default_language[language_alterable]' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $vid, $edit, t('Save'));

    // And check again the settings and also the interface.
    $language_settings = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', $vid);
    $this->assertEqual($language_settings->getDefaultLangcode(), 'aa', 'The langcode was saved.');
    $this->assertFalse($language_settings->isLanguageAlterable(), 'The visibility setting was saved.');

    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertOptionSelected('edit-default-language-langcode', 'aa', 'The correct default language for the terms of this vocabulary is selected.');
    $this->assertNoFieldChecked('edit-default-language-language-alterable', 'Show language selection option is not checked.');
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->submitForm($edit, 'Save');

    // And check again the settings and also the interface.
    $language_settings = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', $vid);
    $this->assertEquals('aa', $language_settings->getDefaultLangcode(), 'The langcode was saved.');
    $this->assertFalse($language_settings->isLanguageAlterable(), 'The visibility setting was saved.');

    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertTrue($this->assertSession()->optionExists('edit-default-language-langcode', 'aa')->isSelected());
    $this->assertSession()->checkboxNotChecked('edit-default-language-language-alterable');
>>>>>>> dev

    // Check that language settings are changed after editing vocabulary.
    $edit = [
      'name' => $this->randomMachineName(),
      'default_language[langcode]' => 'authors_default',
      'default_language[language_alterable]' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $vid, $edit, t('Save'));

    // Check that we have the new settings.
    $new_settings = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', $vid);
    $this->assertEqual($new_settings->getDefaultLangcode(), 'authors_default', 'The langcode was saved.');
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->submitForm($edit, 'Save');

    // Check that we have the new settings.
    $new_settings = ContentLanguageSettings::loadByEntityTypeBundle('taxonomy_term', $vid);
    $this->assertEquals('authors_default', $new_settings->getDefaultLangcode(), 'The langcode was saved.');
>>>>>>> dev
    $this->assertFalse($new_settings->isLanguageAlterable(), 'The new visibility setting was saved.');
  }

}
