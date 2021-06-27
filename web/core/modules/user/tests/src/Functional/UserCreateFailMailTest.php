<?php

namespace Drupal\Tests\user\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the create user administration page.
 *
 * @group user
 */
class UserCreateFailMailTest extends BrowserTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable
   *
   * @var array
   */
  public static $modules = ['system_mail_failure_test'];
=======
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['system_mail_failure_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the create user administration page.
   */
  public function testUserAdd() {
    $user = $this->drupalCreateUser(['administer users']);
    $this->drupalLogin($user);

    // Replace the mail functionality with a fake, malfunctioning service.
    $this->config('system.mail')->set('interface.default', 'test_php_mail_failure')->save();
    // Create a user, but fail to send an email.
    $name = $this->randomMachineName();
    $edit = [
      'name' => $name,
      'mail' => $this->randomMachineName() . '@example.com',
      'pass[pass1]' => $pass = $this->randomString(),
      'pass[pass2]' => $pass,
      'notify' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/people/create', $edit, t('Create new account'));

    $this->assertText(t('Unable to send email. Contact the site administrator if the problem persists.'));
    $this->assertNoText(t('A welcome message with further instructions has been emailed to the new user @name.', ['@name' => $edit['name']]));
=======
    $this->drupalGet('admin/people/create');
    $this->submitForm($edit, 'Create new account');

    $this->assertSession()->pageTextContains('Unable to send email. Contact the site administrator if the problem persists.');
    $this->assertNoText('A welcome message with further instructions has been emailed to the new user ' . $edit['name'] . '.');
>>>>>>> dev
  }

}
