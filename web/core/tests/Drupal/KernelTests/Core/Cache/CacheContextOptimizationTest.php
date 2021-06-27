<?php

namespace Drupal\KernelTests\Core\Cache;

use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\user\Traits\UserCreationTrait;
use Drupal\user\Entity\Role;

/**
 * Tests the cache context optimization.
 *
 * @group Render
 */
class CacheContextOptimizationTest extends KernelTestBase {

  use UserCreationTrait;

  /**
   * Modules to enable.
   *
   * @var string[]
   */
<<<<<<< HEAD
  public static $modules = ['user', 'system'];
=======
  protected static $modules = ['user', 'system'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('user');
    $this->installConfig(['user']);
    $this->installSchema('system', ['sequences']);
  }

  /**
   * Ensures that 'user.permissions' cache context is able to define cache tags.
   */
  public function testUserPermissionCacheContextOptimization() {
    $user1 = $this->createUser();
<<<<<<< HEAD
    $this->assertEqual($user1->id(), 1);
=======
    $this->assertEquals(1, $user1->id());
>>>>>>> dev

    $authenticated_user = $this->createUser(['administer permissions']);
    $role = $authenticated_user->getRoles()[1];

    $test_element = [
      '#cache' => [
        'keys' => ['test'],
        'contexts' => ['user', 'user.permissions'],
      ],
    ];
    \Drupal::service('account_switcher')->switchTo($authenticated_user);
    $element = $test_element;
    $element['#markup'] = 'content for authenticated users';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'content for authenticated users');
=======
    $this->assertEquals('content for authenticated users', $output);
>>>>>>> dev

    // Verify that the render caching is working so that other tests can be
    // trusted.
    $element = $test_element;
    $element['#markup'] = 'this should not be visible';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'content for authenticated users');
=======
    $this->assertEquals('content for authenticated users', $output);
>>>>>>> dev

    // Even though the cache contexts have been optimized to only include 'user'
    // cache context, the element should have been changed because
    // 'user.permissions' cache context defined a cache tags for permission
    // changes, which should have bubbled up for the element when it was
    // optimized away.
    Role::load($role)
      ->revokePermission('administer permissions')
      ->save();
    $element = $test_element;
    $element['#markup'] = 'this should be visible';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'this should be visible');
=======
    $this->assertEquals('this should be visible', $output);
>>>>>>> dev
  }

  /**
   * Ensures that 'user.roles' still works when it is optimized away.
   */
  public function testUserRolesCacheContextOptimization() {
    $root_user = $this->createUser();
<<<<<<< HEAD
    $this->assertEqual($root_user->id(), 1);
=======
    $this->assertEquals(1, $root_user->id());
>>>>>>> dev

    $authenticated_user = $this->createUser(['administer permissions']);
    $role = $authenticated_user->getRoles()[1];

    $test_element = [
      '#cache' => [
        'keys' => ['test'],
        'contexts' => ['user', 'user.roles'],
      ],
    ];
    \Drupal::service('account_switcher')->switchTo($authenticated_user);
    $element = $test_element;
    $element['#markup'] = 'content for authenticated users';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'content for authenticated users');
=======
    $this->assertEquals('content for authenticated users', $output);
>>>>>>> dev

    // Verify that the render caching is working so that other tests can be
    // trusted.
    $element = $test_element;
    $element['#markup'] = 'this should not be visible';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'content for authenticated users');
=======
    $this->assertEquals('content for authenticated users', $output);
>>>>>>> dev

    // Even though the cache contexts have been optimized to only include 'user'
    // cache context, the element should have been changed because 'user.roles'
    // cache context defined a cache tag for user entity changes, which should
    // have bubbled up for the element when it was optimized away.
    $authenticated_user->removeRole($role);
    $authenticated_user->save();
    $element = $test_element;
    $element['#markup'] = 'this should be visible';
    $output = \Drupal::service('renderer')->renderRoot($element);
<<<<<<< HEAD
    $this->assertEqual($output, 'this should be visible');
=======
    $this->assertEquals('this should be visible', $output);
>>>>>>> dev
  }

}
