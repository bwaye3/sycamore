<?php

namespace Drupal\Tests\views_ui\Functional;

/**
 * Tests covering Preview of unsaved Views.
 *
 * @group views_ui
 */
class UnsavedPreviewTest extends UITestBase {

  /**
<<<<<<< HEAD
    * Views used by this test.
    *
    * @var array
    */
=======
   * Views used by this test.
   *
   * @var array
   */
>>>>>>> dev
  public static $testViews = ['content'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * An admin user with the 'administer views' permission.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['node', 'views_ui'];
=======
  protected static $modules = ['node', 'views_ui'];
>>>>>>> dev

  /**
   * Sets up a Drupal site for running functional and integration tests.
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp(FALSE);

    $this->adminUser = $this->drupalCreateUser(['administer views']);
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests previews of unsaved new page displays.
   */
  public function testUnsavedPageDisplayPreview() {
    $this->drupalCreateContentType(['type' => 'page']);
    for ($i = 0; $i < 5; $i++) {
      $this->drupalCreateNode();
    }

    $this->drupalGet('admin/structure/views/view/content');
    $this->assertSession()->statusCodeEquals(200);

<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Add Page'));
=======
    $this->submitForm([], 'Add Page');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalGet('admin/structure/views/nojs/display/content/page_2/path');
    $this->assertSession()->statusCodeEquals(200);

<<<<<<< HEAD
    $this->drupalPostForm(NULL, ['path' => 'foobarbaz'], t('Apply'));
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalPostForm(NULL, [], t('Update preview'));
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText(t('This display has no path'));
=======
    $this->submitForm(['path' => 'foobarbaz'], 'Apply');
    $this->assertSession()->statusCodeEquals(200);

    $this->submitForm([], 'Update preview');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('This display has no path');
>>>>>>> dev

    $this->drupalGet('admin/structure/views/view/content/edit/page_2');
    $this->assertSession()->statusCodeEquals(200);

<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save'));
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalPostForm(NULL, [], t('Update preview'));
    $this->assertSession()->statusCodeEquals(200);
    $this->assertLinkByHref('foobarbaz');
=======
    $this->submitForm([], 'Save');
    $this->assertSession()->statusCodeEquals(200);

    $this->submitForm([], 'Update preview');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->linkByHrefExists('foobarbaz');
>>>>>>> dev
  }

}
