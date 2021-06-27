<?php

namespace Drupal\Tests\user\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Migrates user mail configuration.
 *
 * @group user
 */
class MigrateUserMailTest extends MigrateDrupal7TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installConfig(['user']);
    $this->executeMigration('d7_user_mail');
  }

  /**
   * Tests the migration.
   */
  public function testMigration() {
    $config = $this->config('user.mail');
<<<<<<< HEAD
    $this->assertIdentical('Your account is approved!', $config->get('status_activated.subject'));
    $this->assertIdentical('Your account was activated, and there was much rejoicing.', $config->get('status_activated.body'));
    $this->assertIdentical('Fix your password', $config->get('password_reset.subject'));
    $this->assertIdentical("Nope! You're locked out forever.", $config->get('password_reset.body'));
    $this->assertIdentical('So long, bub', $config->get('cancel_confirm.subject'));
    $this->assertIdentical('The gates of Drupal are closed to you. Now you will work in the salt mines.', $config->get('cancel_confirm.body'));
    $this->assertIdentical('Gawd made you an account', $config->get('register_admin_created.subject'));
    $this->assertIdentical('...and it could be taken away.', $config->get('register_admin_created.body'));
    $this->assertIdentical('Welcome!', $config->get('register_no_approval_required.subject'));
    $this->assertIdentical('You can now log in if you can figure out how to use Drupal!', $config->get('register_no_approval_required.body'));
    $this->assertIdentical('Soon...', $config->get('register_pending_approval.subject'));
    $this->assertIdentical('...you will join our Circle. Let the Drupal flow through you.', $config->get('register_pending_approval.body'));
    $this->assertIdentical('BEGONE!', $config->get('status_blocked.subject'));
    $this->assertIdentical('You no longer please the robot overlords. Go to your room and chill out.', $config->get('status_blocked.body'));
=======
    $this->assertSame('Your account is approved!', $config->get('status_activated.subject'));
    $this->assertSame('Your account was activated, and there was much rejoicing.', $config->get('status_activated.body'));
    $this->assertSame('Fix your password', $config->get('password_reset.subject'));
    $this->assertSame("Nope! You're locked out forever.", $config->get('password_reset.body'));
    $this->assertSame('So long, bub', $config->get('cancel_confirm.subject'));
    $this->assertSame('The gates of Drupal are closed to you. Now you will work in the salt mines.', $config->get('cancel_confirm.body'));
    $this->assertSame('Gawd made you an account', $config->get('register_admin_created.subject'));
    $this->assertSame('...and it could be taken away.', $config->get('register_admin_created.body'));
    $this->assertSame('Welcome!', $config->get('register_no_approval_required.subject'));
    $this->assertSame('You can now log in if you can figure out how to use Drupal!', $config->get('register_no_approval_required.body'));
    $this->assertSame('Soon...', $config->get('register_pending_approval.subject'));
    $this->assertSame('...you will join our Circle. Let the Drupal flow through you.', $config->get('register_pending_approval.body'));
    $this->assertSame('BEGONE!', $config->get('status_blocked.subject'));
    $this->assertSame('You no longer please the robot overlords. Go to your room and chill out.', $config->get('status_blocked.body'));
>>>>>>> dev
  }

}
