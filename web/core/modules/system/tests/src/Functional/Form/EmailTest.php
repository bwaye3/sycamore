<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Component\Serialization\Json;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the form API email element.
 *
 * @group Form
 */
class EmailTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['form_test'];
=======
  protected static $modules = ['form_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests that #type 'email' fields are properly validated.
   */
  public function testFormEmail() {
    $edit = [];
    $edit['email'] = 'invalid';
    $edit['email_required'] = ' ';
<<<<<<< HEAD
    $this->drupalPostForm('form-test/email', $edit, 'Submit');
=======
    $this->drupalGet('form-test/email');
    $this->submitForm($edit, 'Submit');
>>>>>>> dev
    $this->assertRaw(t('The email address %mail is not valid.', ['%mail' => 'invalid']));
    $this->assertRaw(t('@name field is required.', ['@name' => 'Address']));

    $edit = [];
    $edit['email_required'] = '  foo.bar@example.com ';
<<<<<<< HEAD
    $this->drupalPostForm('form-test/email', $edit, 'Submit');
    $values = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertIdentical($values['email'], '');
    $this->assertEqual($values['email_required'], 'foo.bar@example.com');
=======
    $this->drupalGet('form-test/email');
    $this->submitForm($edit, 'Submit');
    $values = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertSame('', $values['email']);
    $this->assertEquals('foo.bar@example.com', $values['email_required']);
>>>>>>> dev

    $edit = [];
    $edit['email'] = 'foo@example.com';
    $edit['email_required'] = 'example@drupal.org';
<<<<<<< HEAD
    $this->drupalPostForm('form-test/email', $edit, 'Submit');
    $values = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertEqual($values['email'], 'foo@example.com');
    $this->assertEqual($values['email_required'], 'example@drupal.org');
=======
    $this->drupalGet('form-test/email');
    $this->submitForm($edit, 'Submit');
    $values = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertEquals('foo@example.com', $values['email']);
    $this->assertEquals('example@drupal.org', $values['email_required']);
>>>>>>> dev
  }

}
