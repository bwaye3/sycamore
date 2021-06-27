<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Tests\tour\Functional\TourTestBase;

/**
 * Tests the Translate Interface tour.
 *
 * @group locale
 */
class LocaleTranslateStringTourTest extends TourTestBase {

  /**
   * An admin user with administrative permissions to translate.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['locale', 'tour'];
=======
  protected static $modules = ['locale', 'tour'];
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
    $this->adminUser = $this->drupalCreateUser([
      'translate interface',
      'access tour',
      'administer languages',
    ]);
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests locale tour tip availability.
   */
  public function testTranslateStringTourTips() {
    // Add another language so there are no missing form items.
    $edit = [];
    $edit['predefined_langcode'] = 'es';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev

    $this->drupalGet('admin/config/regional/translate');
    $this->assertTourTips();
  }

}
