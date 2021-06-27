<?php

namespace Drupal\Tests\taxonomy\Functional;

use Drupal\Core\Language\LanguageInterface;
use Drupal\language\Entity\ConfigurableLanguage;

/**
 * Tests the language functionality for the taxonomy terms.
 *
 * @group taxonomy
 */
class TermLanguageTest extends TaxonomyTestBase {

<<<<<<< HEAD
  public static $modules = ['language'];
=======
  protected static $modules = ['language'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Vocabulary for testing.
   *
   * @var \Drupal\taxonomy\VocabularyInterface
   */
  protected $vocabulary;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create an administrative user.
    $this->drupalLogin($this->drupalCreateUser(['administer taxonomy']));

    // Create a vocabulary to which the terms will be assigned.
    $this->vocabulary = $this->createVocabulary();

    // Add some custom languages.
    foreach (['aa', 'bb', 'cc'] as $language_code) {
      ConfigurableLanguage::create([
        'id' => $language_code,
        'label' => $this->randomMachineName(),
      ])->save();
    }
  }

  public function testTermLanguage() {
    // Configure the vocabulary to not hide the language selector.
    $edit = [
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $this->vocabulary->id(), $edit, t('Save'));
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id());
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Add a term.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    // Check that we have the language selector.
<<<<<<< HEAD
    $this->assertField('edit-langcode-0-value', t('The language selector field was found on the page.'));
=======
    $this->assertSession()->fieldExists('edit-langcode-0-value');
>>>>>>> dev
    // Submit the term.
    $edit = [
      'name[0][value]' => $this->randomMachineName(),
      'langcode[0][value]' => 'aa',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $terms = taxonomy_term_load_multiple_by_name($edit['name[0][value]']);
    $term = reset($terms);
    $this->assertEqual($term->language()->getId(), $edit['langcode[0][value]'], 'The term contains the correct langcode.');

    // Check if on the edit page the language is correct.
    $this->drupalGet('taxonomy/term/' . $term->id() . '/edit');
    $this->assertOptionSelected('edit-langcode-0-value', $edit['langcode[0][value]'], 'The term language was correctly selected.');

    // Change the language of the term.
    $edit['langcode[0][value]'] = 'bb';
    $this->drupalPostForm('taxonomy/term/' . $term->id() . '/edit', $edit, t('Save'));

    // Check again that on the edit page the language is correct.
    $this->drupalGet('taxonomy/term/' . $term->id() . '/edit');
    $this->assertOptionSelected('edit-langcode-0-value', $edit['langcode[0][value]'], 'The term language was correctly selected.');
=======
    $this->submitForm($edit, 'Save');
    $terms = taxonomy_term_load_multiple_by_name($edit['name[0][value]']);
    $term = reset($terms);
    $this->assertEquals($edit['langcode[0][value]'], $term->language()->getId(), 'The term contains the correct langcode.');

    // Check if on the edit page the language is correct.
    $this->drupalGet('taxonomy/term/' . $term->id() . '/edit');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', $edit['langcode[0][value]'])->isSelected());

    // Change the language of the term.
    $edit['langcode[0][value]'] = 'bb';
    $this->drupalGet('taxonomy/term/' . $term->id() . '/edit');
    $this->submitForm($edit, 'Save');

    // Check again that on the edit page the language is correct.
    $this->drupalGet('taxonomy/term/' . $term->id() . '/edit');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', $edit['langcode[0][value]'])->isSelected());
>>>>>>> dev
  }

  public function testDefaultTermLanguage() {
    // Configure the vocabulary to not hide the language selector, and make the
    // default language of the terms fixed.
    $edit = [
      'default_language[langcode]' => 'bb',
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $this->vocabulary->id(), $edit, t('Save'));
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertOptionSelected('edit-langcode-0-value', 'bb', 'The expected langcode was selected.');
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id());
    $this->submitForm($edit, 'Save');
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', 'bb')->isSelected());
>>>>>>> dev

    // Make the default language of the terms to be the current interface.
    $edit = [
      'default_language[langcode]' => 'current_interface',
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $this->vocabulary->id(), $edit, t('Save'));
    $this->drupalGet('aa/admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertOptionSelected('edit-langcode-0-value', 'aa', "The expected langcode, 'aa', was selected.");
    $this->drupalGet('bb/admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertOptionSelected('edit-langcode-0-value', 'bb', "The expected langcode, 'bb', was selected.");
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id());
    $this->submitForm($edit, 'Save');
    $this->drupalGet('aa/admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', 'aa')->isSelected());
    $this->drupalGet('bb/admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', 'bb')->isSelected());
>>>>>>> dev

    // Change the default language of the site and check if the default terms
    // language is still correctly selected.
    $this->config('system.site')->set('default_langcode', 'cc')->save();
    $edit = [
      'default_language[langcode]' => LanguageInterface::LANGCODE_SITE_DEFAULT,
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $this->vocabulary->id(), $edit, t('Save'));
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertOptionSelected('edit-langcode-0-value', 'cc', "The expected langcode, 'cc', was selected.");
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id());
    $this->submitForm($edit, 'Save');
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    $this->assertTrue($this->assertSession()->optionExists('edit-langcode-0-value', 'cc')->isSelected());
>>>>>>> dev
  }

  /**
   * Tests that translated terms are displayed correctly on the term overview.
   */
  public function testTermTranslatedOnOverviewPage() {
    // Configure the vocabulary to not hide the language selector.
    $edit = [
      'default_language[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $this->vocabulary->id(), $edit, t('Save'));
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id());
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Add a term.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/add');
    // Submit the term.
    $edit = [
      'name[0][value]' => $this->randomMachineName(),
      'langcode[0][value]' => 'aa',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $terms = taxonomy_term_load_multiple_by_name($edit['name[0][value]']);
    $term = reset($terms);

    // Add a translation for that term.
    $translated_title = $this->randomMachineName();
    $term->addTranslation('bb', [
      'name' => $translated_title,
    ]);
    $term->save();

    // Overview page in the other language shows the translated term
    $this->drupalGet('bb/admin/structure/taxonomy/manage/' . $this->vocabulary->id() . '/overview');
<<<<<<< HEAD
    $this->assertPattern('|<a[^>]*>' . $translated_title . '</a>|');
=======
    $this->assertSession()->responseMatches('|<a[^>]*>' . $translated_title . '</a>|');
>>>>>>> dev
  }

}
