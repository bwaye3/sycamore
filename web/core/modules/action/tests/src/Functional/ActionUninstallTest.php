<?php

namespace Drupal\Tests\action\Functional;

use Drupal\Tests\BrowserTestBase;

/**
<<<<<<< HEAD
 * Tests that uninstalling actions does not remove other module's actions.
=======
 * Tests that uninstalling Actions does not remove other modules' actions.
>>>>>>> dev
 *
 * @group action
 * @see \Drupal\views\Plugin\views\field\BulkForm
 * @see \Drupal\user\Plugin\Action\BlockUser
 */
class ActionUninstallTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['views', 'action'];
=======
  protected static $modules = ['views', 'action'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests Action uninstall.
   */
  public function testActionUninstall() {
    \Drupal::service('module_installer')->uninstall(['action']);

    $storage = $this->container->get('entity_type.manager')->getStorage('action');
    $storage->resetCache(['user_block_user_action']);
    $this->assertNotEmpty($storage->load('user_block_user_action'), 'Configuration entity \'user_block_user_action\' still exists after uninstalling action module.');

    $admin_user = $this->drupalCreateUser(['administer users']);
    $this->drupalLogin($admin_user);

    $this->drupalGet('admin/people');
    // Ensure we have the user_block_user_action listed.
    $this->assertRaw('<option value="user_block_user_action">Block the selected user(s)</option>');

  }

}
