<?php

namespace Drupal\Tests\language\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Confirm that paths are not changed on monolingual non-English sites.
 *
 * @group language
 */
class LanguagePathMonolingualTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'language', 'path'];
=======
  protected static $modules = ['block', 'language', 'path'];
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

    // Create and log in user.
    $web_user = $this->drupalCreateUser([
      'administer languages',
      'access administration pages',
      'administer site configuration',
    ]);
    $this->drupalLogin($web_user);

    // Enable French language.
    $edit = [];
    $edit['predefined_langcode'] = 'fr';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev

    // Make French the default language.
    $edit = [
      'site_default_language' => 'fr',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language', $edit, t('Save configuration'));

    // Delete English.
    $this->drupalPostForm('admin/config/regional/language/delete/en', [], t('Delete'));
=======
    $this->drupalGet('admin/config/regional/language');
    $this->submitForm($edit, 'Save configuration');

    // Delete English.
    $this->drupalGet('admin/config/regional/language/delete/en');
    $this->submitForm([], 'Delete');
>>>>>>> dev

    // Changing the default language causes a container rebuild. Therefore need
    // to rebuild the container in the test environment.
    $this->rebuildContainer();

    // Verify that French is the only language.
    $this->container->get('language_manager')->reset();
    $this->assertFalse(\Drupal::languageManager()->isMultilingual(), 'Site is mono-lingual');
<<<<<<< HEAD
    $this->assertEqual(\Drupal::languageManager()->getDefaultLanguage()->getId(), 'fr', 'French is the default language');

    // Set language detection to URL.
    $edit = ['language_interface[enabled][language-url]' => TRUE];
    $this->drupalPostForm('admin/config/regional/language/detection', $edit, t('Save settings'));
=======
    $this->assertEquals('fr', \Drupal::languageManager()->getDefaultLanguage()->getId(), 'French is the default language');

    // Set language detection to URL.
    $edit = ['language_interface[enabled][language-url]' => TRUE];
    $this->drupalGet('admin/config/regional/language/detection');
    $this->submitForm($edit, 'Save settings');
>>>>>>> dev
    $this->drupalPlaceBlock('local_actions_block');
  }

  /**
   * Verifies that links do not have language prefixes in them.
   */
  public function testPageLinks() {
    // Navigate to 'admin/config' path.
    $this->drupalGet('admin/config');

    // Verify that links in this page do not have a 'fr/' prefix.
<<<<<<< HEAD
    $this->assertNoLinkByHref('/fr/', 'Links do not contain language prefix');
=======
    $this->assertSession()->linkByHrefNotExists('/fr/', 'Links do not contain language prefix');
>>>>>>> dev

    // Verify that links in this page can be followed and work.
    $this->clickLink(t('Languages'));
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText(t('Add language'), 'Page contains the add language text');
=======
    $this->assertSession()->pageTextContains('Add language');
>>>>>>> dev
  }

}
