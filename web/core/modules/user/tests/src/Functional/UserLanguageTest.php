<?php

namespace Drupal\Tests\user\Functional;

use Drupal\Core\Language\LanguageInterface;
use Drupal\Tests\BrowserTestBase;

/**
 * Functional tests for a user's ability to change their default language.
 *
 * @group user
 */
class UserLanguageTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['user', 'language'];
=======
  protected static $modules = ['user', 'language'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
<<<<<<< HEAD
   * Test if user can change their default language.
=======
   * Tests if user can change their default language.
>>>>>>> dev
   */
  public function testUserLanguageConfiguration() {
    // User to add and remove language.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'access administration pages',
    ]);
    // User to change their default language.
    $web_user = $this->drupalCreateUser();

    // Add custom language.
    $this->drupalLogin($admin_user);
    // Code for the language.
    $langcode = 'xx';
    // The English name for the language.
    $name = $this->randomMachineName(16);
    $edit = [
      'predefined_langcode' => 'custom',
      'langcode' => $langcode,
      'label' => $name,
      'direction' => LanguageInterface::DIRECTION_LTR,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add custom language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add custom language');
>>>>>>> dev
    $this->drupalLogout();

    // Log in as normal user and edit account settings.
    $this->drupalLogin($web_user);
    $path = 'user/' . $web_user->id() . '/edit';
    $this->drupalGet($path);
    // Ensure language settings widget is available.
<<<<<<< HEAD
    $this->assertText(t('Language'), 'Language selector available.');
    // Ensure custom language is present.
    $this->assertText($name, 'Language present on form.');
=======
    $this->assertSession()->pageTextContains('Language');
    // Ensure custom language is present.
    $this->assertSession()->pageTextContains($name);
>>>>>>> dev
    // Switch to our custom language.
    $edit = [
      'preferred_langcode' => $langcode,
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Save'));
    // Ensure form was submitted successfully.
    $this->assertText(t('The changes have been saved.'), 'Changes were saved.');
    // Check if language was changed.
    $this->assertOptionSelected('edit-preferred-langcode', $langcode, 'Default language successfully updated.');
=======
    $this->drupalGet($path);
    $this->submitForm($edit, 'Save');
    // Ensure form was submitted successfully.
    $this->assertSession()->pageTextContains('The changes have been saved.');
    // Check if language was changed.
    $this->assertTrue($this->assertSession()->optionExists('edit-preferred-langcode', $langcode)->isSelected());
>>>>>>> dev

    $this->drupalLogout();
  }

}
