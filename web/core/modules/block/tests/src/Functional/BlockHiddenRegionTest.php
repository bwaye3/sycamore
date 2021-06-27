<?php

namespace Drupal\Tests\block\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests that a newly installed theme does not inherit blocks to its hidden
 * regions.
 *
 * @group block
 */
class BlockHiddenRegionTest extends BrowserTestBase {

  /**
   * An administrative user to configure the test environment.
   */
  protected $adminUser;

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'block_test', 'search'];
=======
  protected static $modules = ['block', 'block_test', 'search'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'administer blocks',
      'administer themes',
      'search content',
      ]
    );

    $this->drupalLogin($this->adminUser);
    $this->drupalPlaceBlock('search_form_block');
    $this->drupalPlaceBlock('local_tasks_block');
  }

  /**
   * Tests that hidden regions do not inherit blocks when a theme is installed.
   */
  public function testBlockNotInHiddenRegion() {

    // Ensure that the search form block is displayed.
    $this->drupalGet('');
<<<<<<< HEAD
    $this->assertText('Search', 'Block was displayed on the front page.');
=======
    $this->assertSession()->pageTextContains('Search');
>>>>>>> dev

    // Install "block_test_theme" and set it as the default theme.
    $theme = 'block_test_theme';
    // We need to install a non-hidden theme so that there is more than one
    // local task.
    \Drupal::service('theme_installer')->install([$theme, 'stark']);
    $this->config('system.theme')
      ->set('default', $theme)
      ->save();
    // Installing a theme will cause the kernel terminate event to rebuild the
    // router. Simulate that here.
    \Drupal::service('router.builder')->rebuildIfNeeded();

    // Ensure that "block_test_theme" is set as the default theme.
    $this->drupalGet('admin/structure/block');
<<<<<<< HEAD
    $this->assertText('Block test theme(' . t('active tab') . ')', 'Default local task on blocks admin page is the block test theme.');

    // Ensure that the search form block is displayed.
    $this->drupalGet('');
    $this->assertText('Search', 'Block was displayed on the front page.');
=======
    $this->assertSession()->pageTextContains('Block test theme(active tab)');

    // Ensure that the search form block is displayed.
    $this->drupalGet('');
    $this->assertSession()->pageTextContains('Search');
>>>>>>> dev
  }

}
