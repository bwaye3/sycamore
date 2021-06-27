<?php

namespace Drupal\Tests\language\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Adds a new language with translations and tests language list order.
 *
 * @group language
 */
class LanguageLocaleListTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['language', 'locale'];
=======
  protected static $modules = ['language', 'locale'];
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
    // Add a default locale storage for all these tests.
    $this->storage = $this->container->get('locale.storage');
  }

  /**
   * Tests adding, editing, and deleting languages.
   */
  public function testLanguageLocaleList() {
    // User to add and remove language.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'access administration pages',
    ]);
    $this->drupalLogin($admin_user);

    // Add predefined language.
    $edit = [
      'predefined_langcode' => 'fr',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
    $this->assertText('The language French has been created and can now be used');
    $this->assertUrl(Url::fromRoute('entity.configurable_language.collection', [], ['absolute' => TRUE])->toString());
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
    $this->assertSession()->pageTextContains('The language French has been created and can now be used');
    $this->assertSession()->addressEquals(Url::fromRoute('entity.configurable_language.collection'));
>>>>>>> dev
    $this->rebuildContainer();

    // Translate Spanish language to French (Espagnol).
    $source = $this->storage->createString([
      'source' => 'Spanish',
      'context' => '',
    ])->save();
    $this->storage->createTranslation([
      'lid' => $source->lid,
      'language' => 'fr',
      'translation' => 'Espagnol',
    ])->save();

    // Get language list displayed in select list.
    $this->drupalGet('fr/admin/config/regional/language/add');
<<<<<<< HEAD
    $option_elements = $this->xpath('//select[@id="edit-predefined-langcode/option"]');
    $options = [];
    foreach ($option_elements as $option_element) {
      $options[] = $option_element->getText();
    }
=======
    $options = $this->assertSession()->selectExists('edit-predefined-langcode')->findAll('css', 'option');
    $options = array_map(function ($item) {
      return $item->getText();
    }, $options);
>>>>>>> dev
    // Remove the 'Custom language...' option form the end.
    array_pop($options);
    // Order language list.
    $options_ordered = $options;
    natcasesort($options_ordered);

    // Check the language list displayed is ordered.
<<<<<<< HEAD
    $this->assertTrue($options === $options_ordered, 'Language list is ordered.');
=======
    $this->assertSame($options, $options_ordered, 'Language list is ordered.');
>>>>>>> dev
  }

}
