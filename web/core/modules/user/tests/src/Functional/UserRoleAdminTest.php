<?php

namespace Drupal\Tests\user\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\user\Entity\Role;
use Drupal\user\RoleInterface;

/**
 * Tests adding, editing and deleting user roles and changing role weights.
 *
 * @group user
 */
class UserRoleAdminTest extends BrowserTestBase {

  /**
   * User with admin privileges.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * Modules to enable.
   *
   * @var string[]
   */
<<<<<<< HEAD
  public static $modules = ['block'];
=======
  protected static $modules = ['block'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->adminUser = $this->drupalCreateUser([
      'administer permissions',
      'administer users',
    ]);
    $this->drupalPlaceBlock('local_tasks_block');
  }

  /**
<<<<<<< HEAD
   * Test adding, renaming and deleting roles.
=======
   * Tests adding, renaming and deleting roles.
>>>>>>> dev
   */
  public function testRoleAdministration() {
    $this->drupalLogin($this->adminUser);
    $default_langcode = \Drupal::languageManager()->getDefaultLanguage()->getId();
    // Test presence of tab.
    $this->drupalGet('admin/people/permissions');
    $tabs = $this->xpath('//ul[@class=:classes and //a[contains(., :text)]]', [
      ':classes' => 'tabs primary',
      ':text' => 'Roles',
    ]);
    $this->assertCount(1, $tabs, 'Found roles tab');

    // Test adding a role. (In doing so, we use a role name that happens to
    // correspond to an integer, to test that the role administration pages
    // correctly distinguish between role names and IDs.)
    $role_name = '123';
    $edit = ['label' => $role_name, 'id' => $role_name];
<<<<<<< HEAD
    $this->drupalPostForm('admin/people/roles/add', $edit, t('Save'));
=======
    $this->drupalGet('admin/people/roles/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $this->assertRaw(t('Role %label has been added.', ['%label' => 123]));
    $role = Role::load($role_name);
    $this->assertIsObject($role);

    // Check that the role was created in site default language.
<<<<<<< HEAD
    $this->assertEqual($role->language()->getId(), $default_langcode);

    // Try adding a duplicate role.
    $this->drupalPostForm('admin/people/roles/add', $edit, t('Save'));
    $this->assertRaw(t('The machine-readable name is already in use. It must be unique.'), 'Duplicate role warning displayed.');
=======
    $this->assertEquals($default_langcode, $role->language()->getId());

    // Try adding a duplicate role.
    $this->drupalGet('admin/people/roles/add');
    $this->submitForm($edit, 'Save');
    $this->assertRaw(t('The machine-readable name is already in use. It must be unique.'));
>>>>>>> dev

    // Test renaming a role.
    $role_name = '456';
    $edit = ['label' => $role_name];
<<<<<<< HEAD
    $this->drupalPostForm("admin/people/roles/manage/{$role->id()}", $edit, t('Save'));
    $this->assertRaw(t('Role %label has been updated.', ['%label' => $role_name]));
    \Drupal::entityTypeManager()->getStorage('user_role')->resetCache([$role->id()]);
    $new_role = Role::load($role->id());
    $this->assertEqual($new_role->label(), $role_name, 'The role name has been successfully changed.');
=======
    $this->drupalGet("admin/people/roles/manage/{$role->id()}");
    $this->submitForm($edit, 'Save');
    $this->assertRaw(t('Role %label has been updated.', ['%label' => $role_name]));
    \Drupal::entityTypeManager()->getStorage('user_role')->resetCache([$role->id()]);
    $new_role = Role::load($role->id());
    $this->assertEquals($role_name, $new_role->label(), 'The role name has been successfully changed.');
>>>>>>> dev

    // Test deleting a role.
    $this->drupalGet("admin/people/roles/manage/{$role->id()}");
    $this->clickLink(t('Delete'));
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Delete'));
    $this->assertRaw(t('The role %label has been deleted.', ['%label' => $role_name]));
    $this->assertNoLinkByHref("admin/people/roles/manage/{$role->id()}", 'Role edit link removed.');
=======
    $this->submitForm([], 'Delete');
    $this->assertRaw(t('The role %label has been deleted.', ['%label' => $role_name]));
    $this->assertSession()->linkByHrefNotExists("admin/people/roles/manage/{$role->id()}", 'Role edit link removed.');
>>>>>>> dev
    \Drupal::entityTypeManager()->getStorage('user_role')->resetCache([$role->id()]);
    $this->assertNull(Role::load($role->id()), 'A deleted role can no longer be loaded.');

    // Make sure that the system-defined roles can be edited via the user
    // interface.
    $this->drupalGet('admin/people/roles/manage/' . RoleInterface::ANONYMOUS_ID);
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertNoText(t('Delete role'), 'Delete button for the anonymous role is not present.');
    $this->drupalGet('admin/people/roles/manage/' . RoleInterface::AUTHENTICATED_ID);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoText(t('Delete role'), 'Delete button for the authenticated role is not present.');
  }

  /**
   * Test user role weight change operation and ordering.
=======
    $this->assertNoText('Delete role');
    $this->drupalGet('admin/people/roles/manage/' . RoleInterface::AUTHENTICATED_ID);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoText('Delete role');
  }

  /**
   * Tests user role weight change operation and ordering.
>>>>>>> dev
   */
  public function testRoleWeightOrdering() {
    $this->drupalLogin($this->adminUser);
    $roles = user_roles();
    $weight = count($roles);
    $new_role_weights = [];
    $saved_rids = [];

    // Change the role weights to make the roles in reverse order.
    $edit = [];
    foreach ($roles as $role) {
      $edit['entities[' . $role->id() . '][weight]'] = $weight;
      $new_role_weights[$role->id()] = $weight;
      $saved_rids[] = $role->id();
      $weight--;
    }
<<<<<<< HEAD
    $this->drupalPostForm('admin/people/roles', $edit, t('Save'));
    $this->assertText(t('The role settings have been updated.'), 'The role settings form submitted successfully.');
=======
    $this->drupalGet('admin/people/roles');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains('The role settings have been updated.');
>>>>>>> dev

    // Load up the user roles with the new weights.
    $roles = user_roles();
    $rids = [];
    // Test that the role weights have been correctly saved.
    foreach ($roles as $role) {
<<<<<<< HEAD
      $this->assertEqual($role->getWeight(), $new_role_weights[$role->id()]);
      $rids[] = $role->id();
    }
    // The order of the roles should be reversed.
    $this->assertIdentical($rids, array_reverse($saved_rids));
=======
      $this->assertEquals($role->getWeight(), $new_role_weights[$role->id()]);
      $rids[] = $role->id();
    }
    // The order of the roles should be reversed.
    $this->assertSame(array_reverse($saved_rids), $rids);
>>>>>>> dev
  }

}
