<?php

namespace Drupal\Tests\user\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests whether proper language is stored for new users and access to language
 * selector.
 *
 * @group user
 */
class UserLanguageCreationTest extends BrowserTestBase {

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
   * Functional test for language handling during user creation.
   */
  public function testLocalUserCreation() {
    // User to add and remove language and create new users.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'access administration pages',
      'administer users',
    ]);
    $this->drupalLogin($admin_user);

    // Add predefined language.
    $langcode = 'fr';
    ConfigurableLanguage::createFromLangcode($langcode)->save();

    // Set language negotiation.
    $edit = [
      'language_interface[enabled][language-url]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/detection', $edit, t('Save settings'));
    $this->assertText(t('Language detection configuration saved.'), 'Set language negotiation.');
=======
    $this->drupalGet('admin/config/regional/language/detection');
    $this->submitForm($edit, 'Save settings');
    $this->assertSession()->pageTextContains('Language detection configuration saved.');
>>>>>>> dev

    // Check if the language selector is available on admin/people/create and
    // set to the currently active language.
    $this->drupalGet($langcode . '/admin/people/create');
<<<<<<< HEAD
    $this->assertOptionSelected("edit-preferred-langcode", $langcode, 'Global language set in the language selector.');
=======
    $this->assertTrue($this->assertSession()->optionExists("edit-preferred-langcode", $langcode)->isSelected());
>>>>>>> dev

    // Create a user with the admin/people/create form and check if the correct
    // language is set.
    $username = $this->randomMachineName(10);
    $edit = [
      'name' => $username,
      'mail' => $this->randomMachineName(4) . '@example.com',
      'pass[pass1]' => $username,
      'pass[pass2]' => $username,
    ];

<<<<<<< HEAD
    $this->drupalPostForm($langcode . '/admin/people/create', $edit, t('Create new account'));

    $user = user_load_by_name($username);
    $this->assertEqual($user->getPreferredLangcode(), $langcode, 'New user has correct preferred language set.');
    $this->assertEqual($user->language()->getId(), $langcode, 'New user has correct profile language set.');
=======
    $this->drupalGet($langcode . '/admin/people/create');
    $this->submitForm($edit, 'Create new account');

    $user = user_load_by_name($username);
    $this->assertEquals($langcode, $user->getPreferredLangcode(), 'New user has correct preferred language set.');
    $this->assertEquals($langcode, $user->language()->getId(), 'New user has correct profile language set.');
>>>>>>> dev

    // Register a new user and check if the language selector is hidden.
    $this->drupalLogout();

    $this->drupalGet($langcode . '/user/register');
<<<<<<< HEAD
    $this->assertNoFieldByName('language[fr]', 'Language selector is not accessible.');
=======
    $this->assertSession()->fieldNotExists('language[fr]');
>>>>>>> dev

    $username = $this->randomMachineName(10);
    $edit = [
      'name' => $username,
      'mail' => $this->randomMachineName(4) . '@example.com',
    ];

<<<<<<< HEAD
    $this->drupalPostForm($langcode . '/user/register', $edit, t('Create new account'));

    $user = user_load_by_name($username);
    $this->assertEqual($user->getPreferredLangcode(), $langcode, 'New user has correct preferred language set.');
    $this->assertEqual($user->language()->getId(), $langcode, 'New user has correct profile language set.');
=======
    $this->drupalGet($langcode . '/user/register');
    $this->submitForm($edit, 'Create new account');

    $user = user_load_by_name($username);
    $this->assertEquals($langcode, $user->getPreferredLangcode(), 'New user has correct preferred language set.');
    $this->assertEquals($langcode, $user->language()->getId(), 'New user has correct profile language set.');
>>>>>>> dev

    // Test that the admin can use the language selector and if the correct
    // language is saved.
    $user_edit = $langcode . '/user/' . $user->id() . '/edit';

    $this->drupalLogin($admin_user);
    $this->drupalGet($user_edit);
<<<<<<< HEAD
    $this->assertOptionSelected("edit-preferred-langcode", $langcode, 'Language selector is accessible and correct language is selected.');
=======
    $this->assertTrue($this->assertSession()->optionExists("edit-preferred-langcode", $langcode)->isSelected());
>>>>>>> dev

    // Set passRaw so we can log in the new user.
    $user->passRaw = $this->randomMachineName(10);
    $edit = [
      'pass[pass1]' => $user->passRaw,
      'pass[pass2]' => $user->passRaw,
    ];

<<<<<<< HEAD
    $this->drupalPostForm($user_edit, $edit, t('Save'));

    $this->drupalLogin($user);
    $this->drupalGet($user_edit);
    $this->assertOptionSelected("edit-preferred-langcode", $langcode, 'Language selector is accessible and correct language is selected.');
=======
    $this->drupalGet($user_edit);
    $this->submitForm($edit, 'Save');

    $this->drupalLogin($user);
    $this->drupalGet($user_edit);
    $this->assertTrue($this->assertSession()->optionExists("edit-preferred-langcode", $langcode)->isSelected());
>>>>>>> dev
  }

}
