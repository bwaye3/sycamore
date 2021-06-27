<?php

namespace Drupal\Tests\views\Functional\Plugin;

use Drupal\Tests\views\Functional\ViewTestBase;

/**
 * Tests views bulk operation selection.
 *
 * @group views
 */
class ViewsBulkTest extends ViewTestBase {

  /**
<<<<<<< HEAD
   * An admin user
=======
   * An admin user.
>>>>>>> dev
   *
   * @var \Drupal\user\UserInterface
   */
  protected $admin_user;

  /**
   * Modules to enable.
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

<<<<<<< HEAD
  public function setUp($import_test_views = TRUE) {
=======
  public function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $this->drupalCreateContentType(['type' => 'page']);
    $this->admin_user = $this->createUser(['bypass node access', 'administer nodes', 'access content overview']);
  }

  /**
   * Tests bulk selection.
   */
  public function testBulkSelection() {

    // Create first node, set updated time to the past.
    $node_1 = $this->drupalCreateNode([
      'type' => 'page',
      'title' => 'The first node',
      'changed' => \Drupal::time()->getRequestTime() - 180,
    ]);

    // Login as administrator and go to admin/content.
    $this->drupalLogin($this->admin_user);
    $this->drupalGet('admin/content');
<<<<<<< HEAD
    $this->assertText($node_1->getTitle());
=======
    $this->assertSession()->pageTextContains($node_1->getTitle());
>>>>>>> dev

    // Create second node now that the admin overview has been rendered.
    $node_2 = $this->drupalCreateNode([
      'type' => 'page',
      'title' => 'The second node',
      'changed' => \Drupal::time()->getRequestTime() - 120,
    ]);

    // Now click 'Apply to selected items' and assert the first node is selected
    // on the confirm form.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, ['node_bulk_form[0]' => TRUE], 'Apply to selected items');
    $this->assertText($node_1->getTitle());
=======
    $this->submitForm(['node_bulk_form[0]' => TRUE], 'Apply to selected items');
    $this->assertSession()->pageTextContains($node_1->getTitle());
>>>>>>> dev
    $this->assertNoText($node_2->getTitle());

    // Change the pager limit to 2.
    $this->config('views.view.content')->set('display.default.display_options.pager.options.items_per_page', 2)->save();

    // Render the overview page again.
    $this->drupalGet('admin/content');

    // Create third node now that the admin overview has been rendered.
    $node_3 = $this->drupalCreateNode([
      'type' => 'page',
      'title' => 'The third node',
    ]);

    // Now click 'Apply to selected items' and assert the second node is
    // selected on the confirm form.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, ['node_bulk_form[1]' => TRUE], 'Apply to selected items');
    $this->assertText($node_1->getTitle());
=======
    $this->submitForm(['node_bulk_form[1]' => TRUE], 'Apply to selected items');
    $this->assertSession()->pageTextContains($node_1->getTitle());
>>>>>>> dev
    $this->assertNoText($node_3->getTitle());
  }

}
