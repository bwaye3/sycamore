<?php

namespace Drupal\Tests\config\Functional;

<<<<<<< HEAD
=======
use Drupal\Component\Utility\Html;
>>>>>>> dev
use Drupal\Tests\BrowserTestBase;
use Drupal\user\Entity\Role;

/**
 * Tests draggable list builder.
 *
 * @group config
 */
class ConfigDraggableListBuilderTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
<<<<<<< HEAD
   * Test draggable lists.
=======
   * Tests draggable lists.
>>>>>>> dev
   */
  public function testDraggableList() {
    $this->drupalLogin($this->drupalCreateUser(['administer permissions']));

    // Create more than 50 roles.
    for ($i = 0; $i < 51; $i++) {
      $role = Role::create([
        'id' => 'role_' . $i,
        'label' => "Role $i",
      ]);
      $role->save();
    }

    // Navigate to Roles page
    $this->drupalGet('admin/people/roles');

    // Test for the page title.
    $this->assertSession()->titleEquals('Roles | Drupal');

    // Count the number of rows in table.
    $rows = $this->xpath('//form[@class="user-admin-roles-form"]/table/tbody/tr');
    $this->assertGreaterThan(50, count($rows));
    for ($i = 0; $i < 51; $i++) {
      $this->assertSession()->pageTextContains("Role $i");
    }
<<<<<<< HEAD
=======

    $role = Role::load('role_0');
    $role_name = 'Role <b>0</b>';
    $role->set('label', $role_name)->save();

    $this->drupalGet('admin/people/roles');
    $this->assertSession()->responseContains('<td>' . Html::escape($role_name));
>>>>>>> dev
  }

}
