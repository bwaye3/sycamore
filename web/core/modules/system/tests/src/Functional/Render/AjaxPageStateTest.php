<?php

namespace Drupal\Tests\system\Functional\Render;

use Drupal\Tests\BrowserTestBase;

/**
 * Performs tests for the effects of the ajax_page_state query parameter.
 *
 * @group Render
 */
class AjaxPageStateTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'views'];
=======
  protected static $modules = ['node', 'views'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
<<<<<<< HEAD
   * User account with all available permissions
=======
   * User account with all available permissions.
>>>>>>> dev
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $adminUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    // Create an administrator with all permissions.
    $this->adminUser = $this->drupalCreateUser(array_keys(\Drupal::service('user.permissions')
      ->getPermissions()));

<<<<<<< HEAD
    // Log in so there are more libraries to test with otherwise only html5shiv
    // is the only one in the source we can easily test for.
=======
    // Log in so there are more libraries to test for.
>>>>>>> dev
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Default functionality without the param ajax_page_state[libraries].
   *
<<<<<<< HEAD
   * The libraries html5shiv and drupalSettings are loaded default from core
=======
   * The libraries active-link and drupalSettings are loaded default from core
>>>>>>> dev
   * and available in code as scripts. Do this as the base test.
   */
  public function testLibrariesAvailable() {
    $this->drupalGet('node', []);
<<<<<<< HEAD
    $this->assertRaw(
      '/core/assets/vendor/html5shiv/html5shiv.min.js',
      'The html5shiv library from core should be loaded.'
    );
    $this->assertRaw(
      '/core/misc/drupalSettingsLoader.js',
      'The drupalSettings library from core should be loaded.'
    );
  }

  /**
   * Give ajax_page_state[libraries]=core/html5shiv to exclude the library.
   *
   * When called with ajax_page_state[libraries]=core/html5shiv the library
   * should be excluded as it is already loaded. This should not affect other
   * libraries so test if drupalSettings is still available.
   */
  public function testHtml5ShivIsNotLoaded() {
=======
    // The active link library from core should be loaded.
    $this->assertSession()->responseContains('/core/misc/active-link.js');
    // The drupalSettings library from core should be loaded.
    $this->assertSession()->responseContains('/core/misc/drupalSettingsLoader.js');
  }

  /**
   * Give ajax_page_state[libraries]=core/drupalSettings to exclude the library.
   *
   * When called with ajax_page_state[libraries]=core/drupalSettings the library
   * should be excluded as it is already loaded. This should not affect other
   * libraries so test if active-link is still available.
   */
  public function testDrupalSettingsIsNotLoaded() {
>>>>>>> dev
    $this->drupalGet('node',
      [
        "query" =>
          [
            'ajax_page_state' => [
<<<<<<< HEAD
              'libraries' => 'core/html5shiv',
=======
              'libraries' => 'core/drupalSettings',
>>>>>>> dev
            ],
          ],
      ]
    );
<<<<<<< HEAD
    $this->assertNoRaw(
      '/core/assets/vendor/html5shiv/html5shiv.min.js',
      'The html5shiv library from core should be excluded from loading'
    );

    $this->assertRaw(
      '/core/misc/drupalSettingsLoader.js',
      'The drupalSettings library from core should be loaded.'
    );
  }

  /**
   * Test if multiple libraries can be excluded.
=======
    // The drupalSettings library from core should be excluded from loading.
    $this->assertSession()->responseNotContains('/core/misc/drupalSettingsLoader.js');

    // The active-link library from core should be loaded.
    $this->assertSession()->responseContains('/core/misc/active-link.js');
  }

  /**
   * Tests if multiple libraries can be excluded.
>>>>>>> dev
   *
   * The ajax_page_state[libraries] should be able to support multiple libraries
   * comma separated.
   */
  public function testMultipleLibrariesAreNotLoaded() {
    $this->drupalGet('node',
<<<<<<< HEAD
      ['query' => ['ajax_page_state' => ['libraries' => 'core/html5shiv,core/drupalSettings']]]
    );
    $this->assertResponse(200);
    $this->assertNoRaw(
      '/core/assets/vendor/html5shiv/html5shiv.min.js',
      'The html5shiv library from core should be excluded from loading.'
    );

    $this->assertNoRaw(
      '/core/misc/drupalSettingsLoader.js',
      'The drupalSettings library from core should be excluded from loading.'
    );

    $this->drupalGet('node');
    $this->assertRaw(
      '/core/assets/vendor/html5shiv/html5shiv.min.js',
      'The html5shiv library from core should be included in loading.'
    );

    $this->assertRaw(
      '/core/misc/drupalSettingsLoader.js',
      'The drupalSettings library from core should be included in loading.'
    );
=======
      ['query' => ['ajax_page_state' => ['libraries' => 'core/drupal,core/drupalSettings']]]
    );
    $this->assertSession()->statusCodeEquals(200);
    // The drupal library from core should be excluded from loading.
    $this->assertSession()->responseNotContains('/core/misc/drupal.js');

    // The drupalSettings library from core should be excluded from loading.
    $this->assertSession()->responseNotContains('/core/misc/drupalSettingsLoader.js');

    $this->drupalGet('node');
    // The drupal library from core should be included in loading.
    $this->assertSession()->responseContains('/core/misc/drupal.js');

    // The drupalSettings library from core should be included in loading.
    $this->assertSession()->responseContains('/core/misc/drupalSettingsLoader.js');
>>>>>>> dev
  }

}
