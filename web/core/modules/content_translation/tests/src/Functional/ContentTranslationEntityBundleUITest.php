<?php

namespace Drupal\Tests\content_translation\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the content translation behaviors on entity bundle UI.
 *
 * @group content_translation
 */
class ContentTranslationEntityBundleUITest extends BrowserTestBase {

<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'language',
    'content_translation',
    'node',
    'comment',
    'field_ui',
  ];

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
    $user = $this->drupalCreateUser([
      'access administration pages',
      'administer languages',
      'administer content translation',
      'administer content types',
    ]);
    $this->drupalLogin($user);
  }

  /**
   * Tests content types default translation behavior.
   */
  public function testContentTypeUI() {
    // Create first content type.
    $this->drupalCreateContentType(['type' => 'article']);
    // Enable content translation.
    $edit = ['language_configuration[content_translation]' => TRUE];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/article', $edit, 'Save content type');
=======
    $this->drupalGet('admin/structure/types/manage/article');
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev

    // Make sure add page does not inherit translation configuration from first
    // content type.
    $this->drupalGet('admin/structure/types/add');
<<<<<<< HEAD
    $this->assertNoFieldChecked('edit-language-configuration-content-translation');
=======
    $this->assertSession()->checkboxNotChecked('edit-language-configuration-content-translation');
>>>>>>> dev

    // Create second content type and set content translation.
    $edit = [
      'name' => 'Page',
      'type' => 'page',
      'language_configuration[content_translation]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/add', $edit, 'Save and manage fields');

    // Make sure the settings are saved when creating the content type.
    $this->drupalGet('admin/structure/types/manage/page');
    $this->assertFieldChecked('edit-language-configuration-content-translation');
=======
    $this->drupalGet('admin/structure/types/add');
    $this->submitForm($edit, 'Save and manage fields');

    // Make sure the settings are saved when creating the content type.
    $this->drupalGet('admin/structure/types/manage/page');
    $this->assertSession()->checkboxChecked('edit-language-configuration-content-translation');
>>>>>>> dev

  }

}
