<?php

namespace Drupal\Tests\system\Functional\System;

use Drupal\Tests\BrowserTestBase;

/**
 * Test SimplePageVariant main content rendering fallback page display variant.
 *
 * @group system
 */
class MainContentFallbackTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'system_test'];
=======
  protected static $modules = ['block', 'system_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  protected $adminUser;
  protected $webUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create and log in admin user.
    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
      'administer site configuration',
      'administer modules',
    ]);
    $this->drupalLogin($this->adminUser);

    // Create a web user.
    $this->webUser = $this->drupalCreateUser(['access user profiles']);
  }

  /**
<<<<<<< HEAD
   * Test availability of main content: Drupal falls back to SimplePageVariant.
=======
   * Tests availability of main content: Drupal falls back to SimplePageVariant.
>>>>>>> dev
   */
  public function testMainContentFallback() {
    $edit = [];
    // Uninstall the block module.
    $edit['uninstall[block]'] = 'block';
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules/uninstall', $edit, t('Uninstall'));
    $this->drupalPostForm(NULL, NULL, t('Uninstall'));
    $this->assertText(t('The selected modules have been uninstalled.'), 'Modules status has been updated.');
=======
    $this->drupalGet('admin/modules/uninstall');
    $this->submitForm($edit, 'Uninstall');
    $this->submitForm([], 'Uninstall');
    $this->assertSession()->pageTextContains('The selected modules have been uninstalled.');
>>>>>>> dev
    $this->rebuildContainer();
    $this->assertFalse(\Drupal::moduleHandler()->moduleExists('block'), 'Block module uninstall.');

    // When Block module is not installed and BlockPageVariant is not available,
    // Drupal should fall back to SimplePageVariant. Both for the admin and the
    // front-end theme.
    $this->drupalGet('admin/config/system/site-information');
<<<<<<< HEAD
    $this->assertField('site_name', 'Fallback to SimplePageVariant works for admin theme.');
    $this->drupalGet('system-test/main-content-fallback');
    $this->assertText(t('Content to test main content fallback'), 'Fallback to SimplePageVariant works for front-end theme.');
    // Request a user* page and see if it is displayed.
    $this->drupalLogin($this->webUser);
    $this->drupalGet('user/' . $this->webUser->id() . '/edit');
    $this->assertField('mail', 'User interface still available.');
=======
    $this->assertSession()->fieldExists('site_name');
    $this->drupalGet('system-test/main-content-fallback');
    $this->assertSession()->pageTextContains('Content to test main content fallback');
    // Request a user* page and see if it is displayed.
    $this->drupalLogin($this->webUser);
    $this->drupalGet('user/' . $this->webUser->id() . '/edit');
    $this->assertSession()->fieldExists('mail');
>>>>>>> dev

    // Enable the block module again.
    $this->drupalLogin($this->adminUser);
    $edit = [];
    $edit['modules[block][enable]'] = 'block';
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));
    $this->assertText(t('Module Block has been enabled.'), 'Modules status has been updated.');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
    $this->assertSession()->pageTextContains('Module Block has been enabled.');
>>>>>>> dev
    $this->rebuildContainer();
    $this->assertTrue(\Drupal::moduleHandler()->moduleExists('block'), 'Block module re-enabled.');
  }

}
