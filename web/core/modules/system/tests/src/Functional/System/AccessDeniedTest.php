<?php

namespace Drupal\Tests\system\Functional\System;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\system\Functional\Cache\AssertPageCacheContextsAndTagsTrait;
use Drupal\user\RoleInterface;

/**
 * Tests page access denied functionality, including custom 403 pages.
 *
 * @group system
 */
class AccessDeniedTest extends BrowserTestBase {

  use AssertPageCacheContextsAndTagsTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'node', 'system_test'];
=======
  protected static $modules = ['block', 'node', 'system_test'];
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

    $this->drupalPlaceBlock('page_title_block');

    // Create an administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
      'administer site configuration',
      'link to any page',
      'administer blocks',
    ]);
    $this->adminUser->roles[] = 'administrator';
    $this->adminUser->save();

    user_role_grant_permissions(RoleInterface::ANONYMOUS_ID, ['access user profiles']);
    user_role_grant_permissions(RoleInterface::AUTHENTICATED_ID, ['access user profiles']);
  }

  public function testAccessDenied() {
    $this->drupalGet('admin');
<<<<<<< HEAD
    $this->assertText(t('Access denied'), 'Found the default 403 page');
=======
    $this->assertSession()->pageTextContains('Access denied');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(403);

    // Ensure that users without permission are denied access and have the
    // correct path information in drupalSettings.
    $this->drupalLogin($this->createUser([]));
    $this->drupalGet('admin', ['query' => ['foo' => 'bar']]);

    $settings = $this->getDrupalSettings();
<<<<<<< HEAD
    $this->assertEqual($settings['path']['currentPath'], 'admin');
    $this->assertEqual($settings['path']['currentPathIsAdmin'], TRUE);
    $this->assertEqual($settings['path']['currentQuery'], ['foo' => 'bar']);
=======
    $this->assertEquals('admin', $settings['path']['currentPath']);
    $this->assertTrue($settings['path']['currentPathIsAdmin']);
    $this->assertEquals(['foo' => 'bar'], $settings['path']['currentQuery']);
>>>>>>> dev

    $this->drupalLogin($this->adminUser);

    // Set a custom 404 page without a starting slash.
    $edit = [
      'site_403' => 'user/' . $this->adminUser->id(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev
    $this->assertRaw(new FormattableMarkup("The path '%path' has to start with a slash.", ['%path' => $edit['site_403']]));

    // Use a custom 403 page.
    $edit = [
      'site_403' => '/user/' . $this->adminUser->id(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Enable the user login block.
    $block = $this->drupalPlaceBlock('user_login_block', ['id' => 'login']);

    // Log out and check that the user login block is shown on custom 403 pages.
    $this->drupalLogout();
    $this->drupalGet('admin');
<<<<<<< HEAD
    $this->assertText($this->adminUser->getAccountName(), 'Found the custom 403 page');
    $this->assertText(t('Username'), 'Blocks are shown on the custom 403 page');
=======
    $this->assertSession()->pageTextContains($this->adminUser->getAccountName());
    $this->assertSession()->pageTextContains('Username');
>>>>>>> dev

    // Log back in and remove the custom 403 page.
    $this->drupalLogin($this->adminUser);
    $edit = [
      'site_403' => '',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Logout and check that the user login block is shown on default 403 pages.
    $this->drupalLogout();
    $this->drupalGet('admin');
<<<<<<< HEAD
    $this->assertText(t('Access denied'), 'Found the default 403 page');
    $this->assertSession()->statusCodeEquals(403);
    $this->assertText(t('Username'), 'Blocks are shown on the default 403 page');
=======
    $this->assertSession()->pageTextContains('Access denied');
    $this->assertSession()->statusCodeEquals(403);
    $this->assertSession()->pageTextContains('Username');
>>>>>>> dev

    // Log back in, set the custom 403 page to /user/login and remove the block
    $this->drupalLogin($this->adminUser);
    $this->config('system.site')->set('page.403', '/user/login')->save();
    $block->disable()->save();

    // Check that we can log in from the 403 page.
    $this->drupalLogout();
    $edit = [
      'name' => $this->adminUser->getAccountName(),
      'pass' => $this->adminUser->pass_raw,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/system/site-information', $edit, t('Log in'));

    // Check that we're still on the same page.
    $this->assertText(t('Basic site settings'));
=======
    $this->drupalGet('admin/config/system/site-information');
    $this->submitForm($edit, 'Log in');

    // Check that we're still on the same page.
    $this->assertSession()->pageTextContains('Basic site settings');
>>>>>>> dev
  }

  /**
   * Tests that an inaccessible custom 403 page falls back to the default.
   */
  public function testAccessDeniedCustomPageWithAccessDenied() {
    // Sets up a 403 page not accessible by the anonymous user.
    $this->config('system.site')->set('page.403', '/system-test/custom-4xx')->save();

    $this->drupalGet('/system-test/always-denied');
    $this->assertNoText('Admin-only 4xx response');
<<<<<<< HEAD
    $this->assertText('You are not authorized to access this page.');
=======
    $this->assertSession()->pageTextContains('You are not authorized to access this page.');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(403);
    // Verify the access cacheability metadata for custom 403 is bubbled.
    $this->assertCacheContext('user.roles');

    $this->drupalLogin($this->adminUser);
    $this->drupalGet('/system-test/always-denied');
<<<<<<< HEAD
    $this->assertText('Admin-only 4xx response');
=======
    $this->assertSession()->pageTextContains('Admin-only 4xx response');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(403);
    // Verify the access cacheability metadata for custom 403 is bubbled.
    $this->assertCacheContext('user.roles');
  }

}
