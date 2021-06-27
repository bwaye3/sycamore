<?php

namespace Drupal\Tests\system\Functional\Module;

/**
 * Attempts enabling a module that fails hook_requirements('install').
 *
 * @group Module
 */
class HookRequirementsTest extends ModuleTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Assert that a module cannot be installed if it fails hook_requirements().
   */
  public function testHookRequirementsFailure() {
    $this->assertModules(['requirements1_test'], FALSE);

    // Attempt to install the requirements1_test module.
    $edit = [];
    $edit['modules[requirements1_test][enable]'] = 'requirements1_test';
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));

    // Makes sure the module was NOT installed.
    $this->assertText(t('Requirements 1 Test failed requirements'), 'Modules status has been updated.');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');

    // Makes sure the module was NOT installed.
    $this->assertSession()->pageTextContains('Requirements 1 Test failed requirements');
>>>>>>> dev
    $this->assertModules(['requirements1_test'], FALSE);
  }

}
