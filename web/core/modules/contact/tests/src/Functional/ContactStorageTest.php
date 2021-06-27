<?php

namespace Drupal\Tests\contact\Functional;

use Drupal\contact\Entity\Message;
use Drupal\user\RoleInterface;

/**
 * Tests storing contact messages.
 *
 * Note that the various test methods in ContactSitewideTest are also run by
 * this test. This is by design to ensure that regular contact.module functions
 * continue to work when a storage handler other than ContentEntityNullStorage
 * is enabled for contact Message entities.
 *
 * @group contact
 */
class ContactStorageTest extends ContactSitewideTest {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'block',
    'text',
    'contact',
    'field_ui',
    'contact_storage_test',
    'contact_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Tests configuration options and the site-wide contact form.
   */
  public function testContactStorage() {
    // Create and log in administrative user.
    $admin_user = $this->drupalCreateUser([
      'access site-wide contact form',
      'administer contact forms',
      'administer users',
      'administer account settings',
      'administer contact_message fields',
    ]);
    $this->drupalLogin($admin_user);
    // Create first valid contact form.
    $mail = 'simpletest@example.com';
    $this->addContactForm($id = mb_strtolower($this->randomMachineName(16)), $label = $this->randomMachineName(16), implode(',', [$mail]), '', TRUE, 'Your message has been sent.', [
      'send_a_pony' => 1,
    ]);
<<<<<<< HEAD
    $this->assertText(t('Contact form @label has been added.', ['@label' => $label]));
=======
    $this->assertSession()->pageTextContains('Contact form ' . $label . ' has been added.');
>>>>>>> dev

    // Ensure that anonymous can submit site-wide contact form.
    user_role_grant_permissions(RoleInterface::ANONYMOUS_ID, ['access site-wide contact form']);
    $this->drupalLogout();
    $this->drupalGet('contact');
<<<<<<< HEAD
    $this->assertText(t('Your email address'));
    $this->assertNoText(t('Form'));
    $this->submitContact($name = $this->randomMachineName(16), $mail, $subject = $this->randomMachineName(16), $id, $message = $this->randomMachineName(64));
    $this->assertText(t('Your message has been sent.'));
=======
    $this->assertSession()->pageTextContains('Your email address');
    $this->assertNoText('Form');
    $this->submitContact($name = $this->randomMachineName(16), $mail, $subject = $this->randomMachineName(16), $id, $message = $this->randomMachineName(64));
    $this->assertSession()->pageTextContains('Your message has been sent.');
>>>>>>> dev

    $messages = Message::loadMultiple();
    /** @var \Drupal\contact\Entity\Message $message */
    $message = reset($messages);
<<<<<<< HEAD
    $this->assertEqual($message->getContactForm()->id(), $id);
    $this->assertTrue($message->getContactForm()->getThirdPartySetting('contact_storage_test', 'send_a_pony', FALSE));
    $this->assertEqual($message->getSenderName(), $name);
    $this->assertEqual($message->getSubject(), $subject);
    $this->assertEqual($message->getSenderMail(), $mail);

    $config = $this->config("contact.form.$id");
    $this->assertEqual($config->get('id'), $id);
=======
    $this->assertEquals($id, $message->getContactForm()->id());
    $this->assertTrue($message->getContactForm()->getThirdPartySetting('contact_storage_test', 'send_a_pony', FALSE));
    $this->assertEquals($name, $message->getSenderName());
    $this->assertEquals($subject, $message->getSubject());
    $this->assertEquals($mail, $message->getSenderMail());

    $config = $this->config("contact.form.$id");
    $this->assertEquals($id, $config->get('id'));
>>>>>>> dev
  }

}
