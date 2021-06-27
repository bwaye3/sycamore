<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests form redirection functionality.
 *
 * @group Form
 */
class RedirectTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['form_test', 'block'];
=======
  protected static $modules = ['form_test', 'block'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests form redirection.
   */
  public function testRedirect() {
    $path = 'form-test/redirect';
    $options = ['query' => ['foo' => 'bar']];
    $options['absolute'] = TRUE;

    // Test basic redirection.
    $edit = [
      'redirection' => TRUE,
      'destination' => $this->randomMachineName(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'));
    $this->assertUrl($edit['destination'], [], 'Basic redirection works.');
=======
    $this->drupalGet($path);
    $this->submitForm($edit, 'Submit');
    $this->assertSession()->addressEquals($edit['destination']);
>>>>>>> dev

    // Test without redirection.
    $edit = [
      'redirection' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'));
    $this->assertUrl($path, [], 'When redirect is set to FALSE, there should be no redirection.');
=======
    $this->drupalGet($path);
    $this->submitForm($edit, 'Submit');
    $this->assertSession()->addressEquals($path);
>>>>>>> dev

    // Test redirection with query parameters.
    $edit = [
      'redirection' => TRUE,
      'destination' => $this->randomMachineName(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'), $options);
    $this->assertUrl($edit['destination'], [], 'Redirection with query parameters works.');
=======
    $this->drupalGet($path, $options);
    $this->submitForm($edit, 'Submit');
    $this->assertSession()->addressEquals($edit['destination']);
>>>>>>> dev

    // Test without redirection but with query parameters.
    $edit = [
      'redirection' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'), $options);
    $this->assertUrl($path, $options, 'When redirect is set to FALSE, there should be no redirection, and the query parameters should be passed along.');
=======
    $this->drupalGet($path, $options);
    $this->submitForm($edit, 'Submit');
    // When redirect is set to FALSE, there should be no redirection, and the
    // query parameters should be passed along.
    $this->assertSession()->addressEquals($path . '?foo=bar');
>>>>>>> dev

    // Test redirection back to the original path.
    $edit = [
      'redirection' => TRUE,
      'destination' => '',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'));
    $this->assertUrl($path, [], 'When using an empty redirection string, there should be no redirection.');
=======
    $this->drupalGet($path);
    $this->submitForm($edit, 'Submit');
    $this->assertSession()->addressEquals($path);
>>>>>>> dev

    // Test redirection back to the original path with query parameters.
    $edit = [
      'redirection' => TRUE,
      'destination' => '',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Submit'), $options);
    $this->assertUrl($path, $options, 'When using an empty redirection string, there should be no redirection, and the query parameters should be passed along.');
=======
    $this->drupalGet($path, $options);
    $this->submitForm($edit, 'Submit');
    // When using an empty redirection string, there should be no redirection,
    // and the query parameters should be passed along.
    $this->assertSession()->addressEquals($path . '?foo=bar');
>>>>>>> dev
  }

  /**
   * Tests form redirection from 404/403 pages with the Block form.
   */
  public function testRedirectFromErrorPages() {
    // Make sure the block containing the redirect form is placed.
    $this->drupalPlaceBlock('redirect_form_block');

    // Create a user that does not have permission to administer blocks.
    $user = $this->drupalCreateUser(['administer themes']);
    $this->drupalLogin($user);

    // Visit page 'foo' (404 page) and submit the form. Verify it ends up
    // at the right URL.
    $expected = Url::fromRoute('form_test.route1', [], ['query' => ['test1' => 'test2'], 'absolute' => TRUE])->toString();
    $this->drupalGet('foo');
    $this->assertSession()->statusCodeEquals(404);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Submit'));
    $this->assertSession()->statusCodeEquals(200);
    $this->assertUrl($expected, [], 'Redirected to correct URL/query.');
=======
    $this->submitForm([], 'Submit');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->addressEquals($expected);
>>>>>>> dev

    // Visit the block admin page (403 page) and submit the form. Verify it
    // ends up at the right URL.
    $this->drupalGet('admin/structure/block');
    $this->assertSession()->statusCodeEquals(403);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Submit'));
    $this->assertSession()->statusCodeEquals(200);
    $this->assertUrl($expected, [], 'Redirected to correct URL/query.');
=======
    $this->submitForm([], 'Submit');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->addressEquals($expected);
>>>>>>> dev
  }

}
