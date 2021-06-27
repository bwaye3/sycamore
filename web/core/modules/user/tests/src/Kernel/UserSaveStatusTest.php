<?php

namespace Drupal\Tests\user\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\user\Entity\User;

/**
 * Tests user saving status.
 *
 * @group user
 */
class UserSaveStatusTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system', 'user', 'field'];

  protected function setUp() {
=======
  protected static $modules = ['system', 'user', 'field'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('user');
  }

  /**
<<<<<<< HEAD
   * Test SAVED_NEW and SAVED_UPDATED statuses for user entity type.
=======
   * Tests SAVED_NEW and SAVED_UPDATED statuses for user entity type.
>>>>>>> dev
   */
  public function testUserSaveStatus() {
    // Create a new user.
    $values = [
      'uid' => 1,
      'name' => $this->randomMachineName(),
    ];
    $user = User::create($values);

    // Test SAVED_NEW.
    $return = $user->save();
<<<<<<< HEAD
    $this->assertEqual($return, SAVED_NEW, "User was saved with SAVED_NEW status.");
=======
    $this->assertEquals(SAVED_NEW, $return, "User was saved with SAVED_NEW status.");
>>>>>>> dev

    // Test SAVED_UPDATED.
    $user->name = $this->randomMachineName();
    $return = $user->save();
<<<<<<< HEAD
    $this->assertEqual($return, SAVED_UPDATED, "User was saved with SAVED_UPDATED status.");
=======
    $this->assertEquals(SAVED_UPDATED, $return, "User was saved with SAVED_UPDATED status.");
>>>>>>> dev
  }

}
