<?php

namespace Drupal\Tests\views_ui\Functional;

/**
 * Tests the views analyze system.
 *
 * @group views_ui
 */
class AnalyzeTest extends UITestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['views_ui'];
=======
  protected static $modules = ['views_ui'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_view'];

  /**
   * Tests that analyze works in general.
   */
  public function testAnalyzeBasic() {
    $this->drupalLogin($this->adminUser);

    $this->drupalGet('admin/structure/views/view/test_view/edit');
<<<<<<< HEAD
    $this->assertSession()->linkExists(t('Analyze view'));
=======
    $this->assertSession()->linkExists('Analyze view');
>>>>>>> dev

    // This redirects the user to the analyze form.
    $this->clickLink(t('Analyze view'));
    $this->assertSession()->titleEquals('View analysis | Drupal');

    foreach (['ok', 'warning', 'error'] as $type) {
      // Check that analyse messages with the expected type found.
      $this->assertSession()->elementExists('css', 'div.' . $type);
    }

    // This redirects the user back to the main views edit page.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Ok'));
=======
    $this->submitForm([], 'Ok');
>>>>>>> dev
  }

}
