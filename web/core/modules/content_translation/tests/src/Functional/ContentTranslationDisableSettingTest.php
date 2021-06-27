<?php

namespace Drupal\Tests\content_translation\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test disabling content translation module.
 *
 * @group content_translation
 */
class ContentTranslationDisableSettingTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'content_translation',
    'menu_link_content',
    'language',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests that entity schemas are up-to-date after enabling translation.
   */
  public function testDisableSetting() {
    // Define selectors.
    $group_checkbox = 'entity_types[menu_link_content]';
    $translatable_checkbox = 'settings[menu_link_content][menu_link_content][translatable]';
    $language_alterable = 'settings[menu_link_content][menu_link_content][settings][language][language_alterable]';

    $user = $this->drupalCreateUser([
      'administer site configuration',
      'administer content translation',
      'create content translations',
      'administer languages',
    ]);
    $this->drupalLogin($user);

    $assert = $this->assertSession();

    $this->drupalGet('admin/config/regional/content-language');

    $assert->checkboxNotChecked('entity_types[menu_link_content]');

    $edit = [
      $group_checkbox => TRUE,
      $translatable_checkbox => TRUE,
      $language_alterable => TRUE,
    ];
<<<<<<< HEAD
    $this->submitForm($edit, t('Save configuration'));
=======
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    $assert->pageTextContains(t('Settings successfully updated.'));

    $assert->checkboxChecked($group_checkbox);

    $edit = [
      $group_checkbox => FALSE,
      $translatable_checkbox => TRUE,
      $language_alterable => TRUE,
    ];
<<<<<<< HEAD
    $this->submitForm($edit, t('Save configuration'));
=======
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    $assert->pageTextContains(t('Settings successfully updated.'));

    $assert->checkboxNotChecked($group_checkbox);
  }

}
