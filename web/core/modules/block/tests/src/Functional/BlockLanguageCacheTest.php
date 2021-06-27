<?php

namespace Drupal\Tests\block\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests display of menu blocks with multiple languages.
 *
 * @group block
 */
class BlockLanguageCacheTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'language', 'menu_ui'];
=======
  protected static $modules = ['block', 'language', 'menu_ui'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * List of langcodes.
   *
   * @var array
   */
  protected $langcodes = [];

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create test languages.
    $this->langcodes = [ConfigurableLanguage::load('en')];
    for ($i = 1; $i < 3; ++$i) {
      $language = ConfigurableLanguage::create([
        'id' => 'l' . $i,
        'label' => $this->randomString(),
      ]);
      $language->save();
      $this->langcodes[$i] = $language;
    }
  }

  /**
   * Creates a block in a language, check blocks page in all languages.
   */
  public function testBlockLinks() {
    // Create admin user to be able to access block admin.
    $admin_user = $this->drupalCreateUser([
      'administer blocks',
      'access administration pages',
      'administer menu',
    ]);
    $this->drupalLogin($admin_user);

    // Create the block cache for all languages.
    foreach ($this->langcodes as $langcode) {
      $this->drupalGet('admin/structure/block', ['language' => $langcode]);
      $this->clickLink('Place block');
    }

    // Create a menu in the default language.
    $edit['label'] = $this->randomMachineName();
    $edit['id'] = mb_strtolower($edit['label']);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/menu/add', $edit, t('Save'));
    $this->assertText(t('Menu @label has been added.', ['@label' => $edit['label']]));
=======
    $this->drupalGet('admin/structure/menu/add');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains('Menu ' . $edit['label'] . ' has been added.');
>>>>>>> dev

    // Check that the block is listed for all languages.
    foreach ($this->langcodes as $langcode) {
      $this->drupalGet('admin/structure/block', ['language' => $langcode]);
      $this->clickLink('Place block');
<<<<<<< HEAD
      $this->assertText($edit['label']);
=======
      $this->assertSession()->pageTextContains($edit['label']);
>>>>>>> dev
    }
  }

}
