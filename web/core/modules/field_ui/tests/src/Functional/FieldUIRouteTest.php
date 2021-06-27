<?php

namespace Drupal\Tests\field_ui\Functional;

use Drupal\Core\Entity\Entity\EntityFormMode;
use Drupal\Core\Entity\Entity\EntityViewMode;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the functionality of the Field UI route subscriber.
 *
 * @group field_ui
 */
class FieldUIRouteTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var string[]
   */
<<<<<<< HEAD
  public static $modules = ['block', 'entity_test', 'field_ui'];
=======
  protected static $modules = ['block', 'entity_test', 'field_ui'];
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

    $this->drupalLogin($this->rootUser);
    $this->drupalPlaceBlock('local_tasks_block');
  }

  /**
   * Ensures that entity types with bundles do not break following entity types.
   */
  public function testFieldUIRoutes() {
    $this->drupalGet('entity_test_no_id/structure/entity_test/fields');
<<<<<<< HEAD
    $this->assertText('No fields are present yet.');

    $this->drupalGet('admin/config/people/accounts/fields');
    $this->assertTitle('Manage fields | Drupal');
=======
    $this->assertSession()->pageTextContains('No fields are present yet.');

    $this->drupalGet('admin/config/people/accounts/fields');
    $this->assertSession()->titleEquals('Manage fields | Drupal');
>>>>>>> dev
    $this->assertLocalTasks();

    // Test manage display tabs and titles.
    $this->drupalGet('admin/config/people/accounts/display/compact');
    $this->assertSession()->statusCodeEquals(403);

    $this->drupalGet('admin/config/people/accounts/display');
<<<<<<< HEAD
    $this->assertTitle('Manage display | Drupal');
    $this->assertLocalTasks();

    $edit = ['display_modes_custom[compact]' => TRUE];
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $this->drupalGet('admin/config/people/accounts/display/compact');
    $this->assertTitle('Manage display | Drupal');
=======
    $this->assertSession()->titleEquals('Manage display | Drupal');
    $this->assertLocalTasks();

    $edit = ['display_modes_custom[compact]' => TRUE];
    $this->submitForm($edit, 'Save');
    $this->drupalGet('admin/config/people/accounts/display/compact');
    $this->assertSession()->titleEquals('Manage display | Drupal');
>>>>>>> dev
    $this->assertLocalTasks();

    // Test manage form display tabs and titles.
    $this->drupalGet('admin/config/people/accounts/form-display/register');
    $this->assertSession()->statusCodeEquals(403);

    $this->drupalGet('admin/config/people/accounts/form-display');
<<<<<<< HEAD
    $this->assertTitle('Manage form display | Drupal');
    $this->assertLocalTasks();

    $edit = ['display_modes_custom[register]' => TRUE];
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('admin/config/people/accounts/form-display/register');
    $this->assertTitle('Manage form display | Drupal');
=======
    $this->assertSession()->titleEquals('Manage form display | Drupal');
    $this->assertLocalTasks();

    $edit = ['display_modes_custom[register]' => TRUE];
    $this->submitForm($edit, 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('admin/config/people/accounts/form-display/register');
    $this->assertSession()->titleEquals('Manage form display | Drupal');
>>>>>>> dev
    $this->assertLocalTasks();
    $this->assertCount(1, $this->xpath('//ul/li[1]/a[contains(text(), :text)]', [':text' => 'Default']), 'Default secondary tab is in first position.');

    // Create new view mode and verify it's available on the Manage Display
    // screen after enabling it.
    EntityViewMode::create([
      'id' => 'user.test',
      'label' => 'Test',
      'targetEntityType' => 'user',
    ])->save();
    $this->container->get('router.builder')->rebuildIfNeeded();

    $edit = ['display_modes_custom[test]' => TRUE];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/people/accounts/display', $edit, t('Save'));
=======
    $this->drupalGet('admin/config/people/accounts/display');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $this->assertSession()->linkExists('Test');

    // Create new form mode and verify it's available on the Manage Form
    // Display screen after enabling it.
    EntityFormMode::create([
      'id' => 'user.test',
      'label' => 'Test',
      'targetEntityType' => 'user',
    ])->save();
    $this->container->get('router.builder')->rebuildIfNeeded();

    $edit = ['display_modes_custom[test]' => TRUE];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/people/accounts/form-display', $edit, t('Save'));
=======
    $this->drupalGet('admin/config/people/accounts/form-display');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $this->assertSession()->linkExists('Test');
  }

  /**
   * Asserts that local tasks exists.
   */
  public function assertLocalTasks() {
    $this->assertSession()->linkExists('Settings');
    $this->assertSession()->linkExists('Manage fields');
    $this->assertSession()->linkExists('Manage display');
    $this->assertSession()->linkExists('Manage form display');
  }

  /**
   * Asserts that admin routes are correctly marked as such.
   */
  public function testAdminRoute() {
    $route = \Drupal::service('router.route_provider')->getRouteByName('entity.entity_test.field_ui_fields');
    $is_admin = \Drupal::service('router.admin_context')->isAdminRoute($route);
    $this->assertTrue($is_admin, 'Admin route correctly marked for "Manage fields" page.');
  }

}
