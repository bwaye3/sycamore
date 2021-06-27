<?php

namespace Drupal\Tests\system\Functional\Module;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the installation of modules.
 *
 * @group Module
 */
class ExperimentalModuleTest extends BrowserTestBase {


  /**
   * The admin user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

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
    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
      'administer modules',
    ]);
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests installing experimental modules and dependencies in the UI.
   */
  public function testExperimentalConfirmForm() {

    // First, test installing a non-experimental module with no dependencies.
    // There should be no confirmation form and no experimental module warning.
    $edit = [];
    $edit["modules[test_page_test][enable]"] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, t('Install'));
    $this->assertText('Module Test page has been enabled.');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
    $this->assertSession()->pageTextContains('Module Test page has been enabled.');
>>>>>>> dev
    $this->assertNoText('Experimental modules are provided for testing purposes only.');

    // Uninstall the module.
    \Drupal::service('module_installer')->uninstall(['test_page_test']);

    // Next, test installing an experimental module with no dependencies.
    // There should be a confirmation form with an experimental warning, but no
    // list of dependencies.
    $edit = [];
    $edit["modules[experimental_module_test][enable]"] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, 'Install');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
>>>>>>> dev

    // The module should not be enabled and there should be a warning and a
    // list of the experimental modules with only this one.
    $this->assertNoText('Experimental Test has been enabled.');
<<<<<<< HEAD
    $this->assertText('Experimental modules are provided for testing purposes only.');
    $this->assertText('The following modules are experimental: Experimental Test');
=======
    $this->assertSession()->pageTextContains('Experimental modules are provided for testing purposes only.');
    $this->assertSession()->pageTextContains('The following modules are experimental: Experimental Test');
>>>>>>> dev

    // There should be no message about enabling dependencies.
    $this->assertNoText('You must enable');

    // Enable the module and confirm that it worked.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], 'Continue');
    $this->assertText('Experimental Test has been enabled.');
=======
    $this->submitForm([], 'Continue');
    $this->assertSession()->pageTextContains('Experimental Test has been enabled.');
>>>>>>> dev

    // Uninstall the module.
    \Drupal::service('module_installer')->uninstall(['experimental_module_test']);

    // Test enabling a module that is not itself experimental, but that depends
    // on an experimental module.
    $edit = [];
    $edit["modules[experimental_module_dependency_test][enable]"] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, 'Install');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
>>>>>>> dev

    // The module should not be enabled and there should be a warning and a
    // list of the experimental modules with only this one.
    $this->assertNoText('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
<<<<<<< HEAD
    $this->assertText('Experimental modules are provided for testing purposes only.');

    $this->assertText('The following modules are experimental: Experimental Test');
=======
    $this->assertSession()->pageTextContains('Experimental modules are provided for testing purposes only.');

    $this->assertSession()->pageTextContains('The following modules are experimental: Experimental Test');
>>>>>>> dev

    // Ensure the non-experimental module is not listed as experimental.
    $this->assertNoText('The following modules are experimental: Experimental Test, Experimental Dependency Test');
    $this->assertNoText('The following modules are experimental: Experimental Dependency Test');

    // There should be a message about enabling dependencies.
<<<<<<< HEAD
    $this->assertText('You must enable the Experimental Test module to install Experimental Dependency Test');

    // Enable the module and confirm that it worked.
    $this->drupalPostForm(NULL, [], 'Continue');
    $this->assertText('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
=======
    $this->assertSession()->pageTextContains('You must enable the Experimental Test module to install Experimental Dependency Test');

    // Enable the module and confirm that it worked.
    $this->submitForm([], 'Continue');
    $this->assertSession()->pageTextContains('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
>>>>>>> dev

    // Uninstall the modules.
    \Drupal::service('module_installer')->uninstall(['experimental_module_test', 'experimental_module_dependency_test']);

    // Finally, check both the module and its experimental dependency. There is
    // still a warning about experimental modules, but no message about
    // dependencies, since the user specifically enabled the dependency.
    $edit = [];
    $edit["modules[experimental_module_test][enable]"] = TRUE;
    $edit["modules[experimental_module_dependency_test][enable]"] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, 'Install');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
>>>>>>> dev

    // The module should not be enabled and there should be a warning and a
    // list of the experimental modules with only this one.
    $this->assertNoText('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
<<<<<<< HEAD
    $this->assertText('Experimental modules are provided for testing purposes only.');

    $this->assertText('The following modules are experimental: Experimental Test');
=======
    $this->assertSession()->pageTextContains('Experimental modules are provided for testing purposes only.');

    $this->assertSession()->pageTextContains('The following modules are experimental: Experimental Test');
>>>>>>> dev

    // Ensure the non-experimental module is not listed as experimental.
    $this->assertNoText('The following modules are experimental: Experimental Dependency Test, Experimental Test');
    $this->assertNoText('The following modules are experimental: Experimental Dependency Test');

    // There should be no message about enabling dependencies.
    $this->assertNoText('You must enable');

    // Enable the module and confirm that it worked.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], 'Continue');
    $this->assertText('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
=======
    $this->submitForm([], 'Continue');
    $this->assertSession()->pageTextContains('2 modules have been enabled: Experimental Dependency Test, Experimental Test');
>>>>>>> dev

    // Try to enable an experimental module that can not be due to
    // hook_requirements().
    \Drupal::state()->set('experimental_module_requirements_test_requirements', TRUE);
    $edit = [];
    $edit["modules[experimental_module_requirements_test][enable]"] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/modules', $edit, 'Install');
    $this->assertUrl('admin/modules', [], 'If the module can not be installed we are not taken to the confirm form.');
    $this->assertText('The Experimental Test Requirements module can not be installed.');
=======
    $this->drupalGet('admin/modules');
    $this->submitForm($edit, 'Install');
    // Verify that if the module can not be installed, we are not taken to the
    // confirm form.
    $this->assertSession()->addressEquals('admin/modules');
    $this->assertSession()->pageTextContains('The Experimental Test Requirements module can not be installed.');
>>>>>>> dev
  }

}
