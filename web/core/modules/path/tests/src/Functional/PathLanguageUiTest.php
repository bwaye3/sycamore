<?php

namespace Drupal\Tests\path\Functional;

use Drupal\Core\Language\LanguageInterface;

/**
 * Confirm that the Path module user interface works with languages.
 *
 * @group path
 */
class PathLanguageUiTest extends PathTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['path', 'locale', 'locale_test'];
=======
  protected static $modules = ['path', 'locale', 'locale_test'];
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
      'edit any page content',
      'create page content',
      'administer url aliases',
      'create url aliases',
      'administer languages',
      'access administration pages',
    ]);
    $this->drupalLogin($web_user);

    // Enable French language.
    $edit = [];
    $edit['predefined_langcode'] = 'fr';

<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));

    // Enable URL language detection and selection.
    $edit = ['language_interface[enabled][language-url]' => 1];
    $this->drupalPostForm('admin/config/regional/language/detection', $edit, t('Save settings'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');

    // Enable URL language detection and selection.
    $edit = ['language_interface[enabled][language-url]' => 1];
    $this->drupalGet('admin/config/regional/language/detection');
    $this->submitForm($edit, 'Save settings');
>>>>>>> dev
  }

  /**
   * Tests that a language-neutral URL alias works.
   */
  public function testLanguageNeutralUrl() {
    $name = $this->randomMachineName(8);
    $edit = [];
    $edit['path[0][value]'] = '/admin/config/search/path';
    $edit['alias[0][value]'] = '/' . $name;
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));

    $this->drupalGet($name);
    $this->assertText(t('Filter aliases'), 'Language-neutral URL alias works');
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');

    $this->drupalGet($name);
    $this->assertSession()->pageTextContains('Filter aliases');
>>>>>>> dev
  }

  /**
   * Tests that a default language URL alias works.
   */
  public function testDefaultLanguageUrl() {
    $name = $this->randomMachineName(8);
    $edit = [];
    $edit['path[0][value]'] = '/admin/config/search/path';
    $edit['alias[0][value]'] = '/' . $name;
    $edit['langcode[0][value]'] = 'en';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));

    $this->drupalGet($name);
    $this->assertText(t('Filter aliases'), 'English URL alias works');
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');

    $this->drupalGet($name);
    $this->assertSession()->pageTextContains('Filter aliases');
>>>>>>> dev
  }

  /**
   * Tests that a non-default language URL alias works.
   */
  public function testNonDefaultUrl() {
    $name = $this->randomMachineName(8);
    $edit = [];
    $edit['path[0][value]'] = '/admin/config/search/path';
    $edit['alias[0][value]'] = '/' . $name;
    $edit['langcode[0][value]'] = 'fr';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));

    $this->drupalGet('fr/' . $name);
    $this->assertText(t('Filter aliases'), 'Foreign URL alias works');
  }

  /**
   * Test that language unspecific aliases are shown and saved in the node form.
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');

    $this->drupalGet('fr/' . $name);
    $this->assertSession()->pageTextContains('Filter aliases');
  }

  /**
   * Tests language unspecific aliases are shown and saved in the node form.
>>>>>>> dev
   */
  public function testNotSpecifiedNode() {
    // Create test node.
    $node = $this->drupalCreateNode();

    // Create a language-unspecific alias in the admin UI, ensure that is
    // displayed and the langcode is not changed when saving.
    $edit = [
      'path[0][value]' => '/node/' . $node->id(),
      'alias[0][value]' => '/' . $this->getRandomGenerator()->word(8),
      'langcode[0][value]' => LanguageInterface::LANGCODE_NOT_SPECIFIED,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));

    $this->drupalGet($node->toUrl('edit-form'));
    $this->assertSession()->fieldValueEquals('path[0][alias]', $edit['alias[0][value]']);
    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');

    $this->drupalGet($node->toUrl('edit-form'));
    $this->assertSession()->fieldValueEquals('path[0][alias]', $edit['alias[0][value]']);
    $this->submitForm([], 'Save');
>>>>>>> dev

    $this->drupalGet('admin/config/search/path');
    $this->assertSession()->pageTextContains('None');
    $this->assertSession()->pageTextNotContains('English');

    // Create another node, with no alias, to ensure non-language specific
    // aliases are loaded correctly.
    $node = $this->drupalCreateNode();
    $this->drupalget($node->toUrl('edit-form'));
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save'));
=======
    $this->submitForm([], 'Save');
>>>>>>> dev
    $this->assertSession()->pageTextNotContains(t('The alias is already in use.'));
  }

}
