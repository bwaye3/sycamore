<?php

namespace Drupal\Tests\views_ui\Functional;

use Drupal\language\Entity\ConfigurableLanguage;

/**
 * Tests that translated strings in views UI don't override original strings.
 *
 * @group views_ui
 */
class TranslatedViewTest extends UITestBase {

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
    'config_translation',
    'views_ui',
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
  protected $langcodes = [
    'fr',
  ];

  /**
   * Administrator user for tests.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $permissions = [
      'administer site configuration',
      'administer views',
      'translate configuration',
      'translate interface',
    ];

    // Create and log in user.
    $this->adminUser = $this->drupalCreateUser($permissions);
    $this->drupalLogin($this->adminUser);

    // Add languages.
    foreach ($this->langcodes as $langcode) {
      ConfigurableLanguage::createFromLangcode($langcode)->save();
    }
    $this->resetAll();
    $this->rebuildContainer();
  }

  public function testTranslatedStrings() {
    $translation_url = 'admin/structure/views/view/files/translate/fr/add';
    $edit_url = 'admin/structure/views/view/files';

    // Check the original string.
    $this->drupalGet($edit_url);
<<<<<<< HEAD
    $this->assertTitle('Files (File) | Drupal');
=======
    $this->assertSession()->titleEquals('Files (File) | Drupal');
>>>>>>> dev

    // Translate the label of the view.
    $this->drupalGet($translation_url);
    $edit = [
      'translation[config_names][views.view.files][label]' => 'Fichiers',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save translation'));

    // Check if the label is translated.
    $this->drupalGet($edit_url, ['language' => \Drupal::languageManager()->getLanguage('fr')]);
    $this->assertTitle('Files (File) | Drupal');
=======
    $this->submitForm($edit, 'Save translation');

    // Check if the label is translated.
    $this->drupalGet($edit_url, ['language' => \Drupal::languageManager()->getLanguage('fr')]);
    $this->assertSession()->titleEquals('Files (File) | Drupal');
>>>>>>> dev
    $this->assertNoText('Fichiers');
  }

}
