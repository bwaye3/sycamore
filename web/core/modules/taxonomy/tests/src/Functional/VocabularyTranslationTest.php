<?php

namespace Drupal\Tests\taxonomy\Functional;

/**
 * Tests content translation for vocabularies.
 *
 * @group taxonomy
 */
class VocabularyTranslationTest extends TaxonomyTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['content_translation', 'language'];
=======
  protected static $modules = ['content_translation', 'language'];
>>>>>>> dev

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

    // Create an administrative user.
    $this->drupalLogin($this->drupalCreateUser([
      'administer taxonomy',
      'administer content translation',
    ]));
  }

  /**
   * Tests language settings for vocabularies.
   */
  public function testVocabularyLanguage() {
    $this->drupalGet('admin/structure/taxonomy/add');

    // Check that the field to enable content translation is available.
<<<<<<< HEAD
    $this->assertField('edit-default-language-content-translation', 'The content translation checkbox is present on the page.');
=======
    $this->assertSession()->fieldExists('edit-default-language-content-translation');
>>>>>>> dev

    // Create the vocabulary.
    $vid = mb_strtolower($this->randomMachineName());
    $edit['name'] = $this->randomMachineName();
    $edit['description'] = $this->randomMachineName();
    $edit['langcode'] = 'en';
    $edit['vid'] = $vid;
    $edit['default_language[content_translation]'] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));

    // Check if content translation is enabled on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertFieldChecked('edit-default-language-content-translation', 'The content translation was correctly selected.');
=======
    $this->submitForm($edit, 'Save');

    // Check if content translation is enabled on the edit page.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vid);
    $this->assertSession()->checkboxChecked('edit-default-language-content-translation');
>>>>>>> dev
  }

}
