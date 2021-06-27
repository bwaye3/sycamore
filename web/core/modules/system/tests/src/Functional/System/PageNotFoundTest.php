<?php

namespace Drupal\Tests\system\Functional\System;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\system\Functional\Cache\AssertPageCacheContextsAndTagsTrait;
use Drupal\user\RoleInterface;

/**
 * Tests page not found functionality, including custom 404 pages.
 *
 * @group system
 */
class PageNotFoundTest extends BrowserTestBase {

  use AssertPageCacheContextsAndTagsTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system_test'];
=======
  protected static $modules = ['system_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  protected $adminUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create an administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'administer site configuration',
      'link to any page',
    ]);
    $this->adminUser->roles[] = 'administrator';
    $this->adminUser->save();

    user_role_grant_permissions(RoleInterface::ANONYMOUS_ID, ['access user profiles']);
    user_role_grant_permissions(RoleInterface::AUTHENTICATED_ID, ['access user profiles']);
  }

  public function testPageNotFound() {
    $this->drupalLogin($this->adminUser);
    $this->drupalGet($this->randomMachineName(10));
<<<<<<< HEAD
    $this->assertText(t('Page not found'), 'Found the default 404 page');
=======
    $this->assertSession()->pageTextContains('Page not found');
>>>>>>> dev

    // Set a custom 404 page without a starting slash.
    $edit = [
      'site_404' => 'user/' . $this->adminUser->id(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev
    $this->assertRaw(new FormattableMarkup("The path '%path' has to start with a slash.", ['%path' => $edit['site_404']]));

    // Use a custom 404 page.
    $edit = [
      'site_404' => '/user/' . $this->adminUser->id(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));

    $this->drupalGet($this->randomMachineName(10));
    $this->assertText($this->adminUser->getAccountName(), 'Found the custom 404 page');
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');

    $this->drupalGet($this->randomMachineName(10));
    $this->assertSession()->pageTextContains($this->adminUser->getAccountName());
>>>>>>> dev
  }

  /**
   * Tests that an inaccessible custom 404 page falls back to the default.
   */
  public function testPageNotFoundCustomPageWithAccessDenied() {
    // Sets up a 404 page not accessible by the anonymous user.
    $this->config('system.site')->set('page.404', '/system-test/custom-4xx')->save();

    $this->drupalGet('/this-path-does-not-exist');
    $this->assertNoText('Admin-only 4xx response');
<<<<<<< HEAD
    $this->assertText('The requested page could not be found.');
=======
    $this->assertSession()->pageTextContains('The requested page could not be found.');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(404);
    // Verify the access cacheability metadata for custom 404 is bubbled.
    $this->assertCacheContext('user.roles');

    $this->drupalLogin($this->adminUser);
    $this->drupalGet('/this-path-does-not-exist');
<<<<<<< HEAD
    $this->assertText('Admin-only 4xx response');
=======
    $this->assertSession()->pageTextContains('Admin-only 4xx response');
>>>>>>> dev
    $this->assertNoText('The requested page could not be found.');
    $this->assertSession()->statusCodeEquals(404);
    // Verify the access cacheability metadata for custom 404 is bubbled.
    $this->assertCacheContext('user.roles');
  }

}
