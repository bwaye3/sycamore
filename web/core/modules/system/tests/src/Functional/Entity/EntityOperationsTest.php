<?php

namespace Drupal\Tests\system\Functional\Entity;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests that operations can be injected from the hook.
 *
 * @group Entity
 */
class EntityOperationsTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['entity_test'];
=======
  protected static $modules = ['entity_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create and log in user.
    $this->drupalLogin($this->drupalCreateUser(['administer permissions']));
  }

  /**
   * Checks that hook_entity_operation_alter() can add an operation.
   *
   * @see entity_test_entity_operation_alter()
   */
  public function testEntityOperationAlter() {
    // Check that role listing contain our test_operation operation.
    $this->drupalGet('admin/people/roles');
    $roles = user_roles();
    foreach ($roles as $role) {
<<<<<<< HEAD
      $this->assertLinkByHref($role->toUrl()->toString() . '/test_operation');
=======
      $this->assertSession()->linkByHrefExists($role->toUrl()->toString() . '/test_operation');
>>>>>>> dev
      $this->assertSession()->linkExists(new FormattableMarkup('Test Operation: @label', ['@label' => $role->label()]));
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function createRole(array $permissions, $rid = NULL, $name = NULL, $weight = NULL) {
<<<<<<< HEAD
    // WebTestBase::drupalCreateRole() by default uses random strings which may
    // include HTML entities for the entity label. Since in this test the entity
    // label is used to generate a link, and AssertContentTrait::assertLink() is
    // not designed to deal with links potentially containing HTML entities this
=======
    // The parent method uses random strings by default, which may include HTML
    // entities for the entity label. Since in this test the entity label is
    // used to generate a link, and AssertContentTrait::assertLink() is not
    // designed to deal with links potentially containing HTML entities this
>>>>>>> dev
    // causes random failures. Use a random HTML safe string instead.
    $name = $name ?: $this->randomMachineName();
    return parent::createRole($permissions, $rid, $name, $weight);
  }

}
