<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Component\Serialization\Json;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the form API Response element.
 *
 * @group Form
 */
class ResponseTest extends BrowserTestBase {

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
   * Tests that enforced responses propagate through subscribers and middleware.
   */
  public function testFormResponse() {
    $edit = [
      'content' => $this->randomString(),
      'status' => 200,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('form-test/response', $edit, 'Submit');
    $content = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertSession()->statusCodeEquals(200);
    $this->assertIdentical($edit['content'], $content, 'Response content matches');
    $this->assertIdentical('invoked', $this->drupalGetHeader('X-Form-Test-Response-Event'), 'Response handled by kernel response subscriber');
    $this->assertIdentical('invoked', $this->drupalGetHeader('X-Form-Test-Stack-Middleware'), 'Response handled by kernel middleware');
=======
    $this->drupalGet('form-test/response');
    $this->submitForm($edit, 'Submit');
    $content = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSame($edit['content'], $content, 'Response content matches');
    // Verify that response was handled by kernel response subscriber.
    $this->assertSession()->responseHeaderEquals('X-Form-Test-Response-Event', 'invoked');
    // Verify that response was handled by kernel middleware.
    $this->assertSession()->responseHeaderEquals('X-Form-Test-Stack-Middleware', 'invoked');
>>>>>>> dev

    $edit = [
      'content' => $this->randomString(),
      'status' => 418,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('form-test/response', $edit, 'Submit');
    $content = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertSession()->statusCodeEquals(418);
    $this->assertIdentical($edit['content'], $content, 'Response content matches');
    $this->assertIdentical('invoked', $this->drupalGetHeader('X-Form-Test-Response-Event'), 'Response handled by kernel response subscriber');
    $this->assertIdentical('invoked', $this->drupalGetHeader('X-Form-Test-Stack-Middleware'), 'Response handled by kernel middleware');
=======
    $this->drupalGet('form-test/response');
    $this->submitForm($edit, 'Submit');
    $content = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertSession()->statusCodeEquals(418);
    $this->assertSame($edit['content'], $content, 'Response content matches');
    // Verify that response was handled by kernel response subscriber.
    $this->assertSession()->responseHeaderEquals('X-Form-Test-Response-Event', 'invoked');
    // Verify that response was handled by kernel middleware.
    $this->assertSession()->responseHeaderEquals('X-Form-Test-Stack-Middleware', 'invoked');
>>>>>>> dev
  }

}
