<?php

namespace Drupal\Tests\user\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\user\Entity\Role;

/**
 * @group user
 */
class UserRoleEntityTest extends KernelTestBase {

<<<<<<< HEAD
  public static $modules = ['system', 'user'];
=======
  protected static $modules = ['system', 'user'];
>>>>>>> dev

  public function testOrderOfPermissions() {
    $role = Role::create(['id' => 'test_role']);
    $role->grantPermission('b')
      ->grantPermission('a')
      ->grantPermission('c')
      ->save();
    $this->assertEquals($role->getPermissions(), ['a', 'b', 'c']);

    $role->revokePermission('b')->save();
    $this->assertEquals($role->getPermissions(), ['a', 'c']);

    $role->grantPermission('b')->save();
    $this->assertEquals($role->getPermissions(), ['a', 'b', 'c']);
  }

}
