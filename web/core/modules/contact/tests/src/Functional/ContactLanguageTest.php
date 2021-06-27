<?php

namespace Drupal\Tests\contact\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests contact messages with language module.
 *
 * This is to ensure that a contact form by default does not show the language
 * select, but it does so when it's enabled from the content language settings
 * page.
 *
 * @group contact
 */
class ContactLanguageTest extends BrowserTestBase {

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
    'contact',
    'language',
    'contact_test',
  ];

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

    // Create and log in administrative user.
    $admin_user = $this->drupalCreateUser([
      'access site-wide contact form',
      'administer languages',
    ]);
    $this->drupalLogin($admin_user);
  }

  /**
   * Tests configuration options with language enabled.
   */
  public function testContactLanguage() {
    // Ensure that contact form by default does not show the language select.
    $this->drupalGet('contact');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertNoField('edit-langcode-0-value');
=======
    $this->assertSession()->fieldNotExists('edit-langcode-0-value');
>>>>>>> dev

    // Enable language select from content language settings page.
    $settings_path = 'admin/config/regional/content-language';
    $edit['entity_types[contact_message]'] = TRUE;
    $edit['settings[contact_message][feedback][settings][language][language_alterable]'] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm($settings_path, $edit, t('Save configuration'));
=======
    $this->drupalGet($settings_path);
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Ensure that contact form now shows the language select.
    $this->drupalGet('contact');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertField('edit-langcode-0-value');
=======
    $this->assertSession()->fieldExists('edit-langcode-0-value');
>>>>>>> dev
  }

}
