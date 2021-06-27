<?php

namespace Drupal\Tests\views\FunctionalJavascript;

use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\node\Traits\ContentTypeCreationTrait;
use Drupal\Tests\node\Traits\NodeCreationTrait;

/**
 * Tests the basic AJAX functionality of Views exposed forms.
 *
 * @group views
 */
class ExposedFilterAJAXTest extends WebDriverTestBase {

  use ContentTypeCreationTrait;
  use NodeCreationTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['node', 'views', 'views_test_modal'];
=======
  protected static $modules = ['node', 'views', 'views_test_modal'];
>>>>>>> dev

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

    // Enable AJAX on the /admin/content View.
    \Drupal::configFactory()->getEditable('views.view.content')
      ->set('display.default.display_options.use_ajax', TRUE)
      ->save();

    // Create a Content type and two test nodes.
    $this->createContentType(['type' => 'page']);
    $this->createNode(['title' => 'Page One']);
    $this->createNode(['title' => 'Page Two']);

    // Create a user privileged enough to use exposed filters and view content.
    $user = $this->drupalCreateUser([
      'administer site configuration',
      'access content',
      'access content overview',
      'edit any page content',
    ]);
    $this->drupalLogin($user);
  }

  /**
   * Tests if exposed filtering via AJAX works for the "Content" View.
   */
  public function testExposedFiltering() {
    // Visit the View page.
    $this->drupalGet('admin/content');

    $session = $this->getSession();

    // Ensure that the Content we're testing for is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringContainsString('Page Two', $html);

    // Search for "Page One".
<<<<<<< HEAD
    $this->submitForm(['title' => 'Page One'], t('Filter'));
=======
    $this->submitForm(['title' => 'Page One'], 'Filter');
>>>>>>> dev
    $this->assertSession()->assertWaitOnAjaxRequest();

    // Verify that only the "Page One" Node is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringNotContainsString('Page Two', $html);

    // Search for "Page Two".
<<<<<<< HEAD
    $this->submitForm(['title' => 'Page Two'], t('Filter'));
=======
    $this->submitForm(['title' => 'Page Two'], 'Filter');
>>>>>>> dev
    $this->assertSession()->assertWaitOnAjaxRequest();

    // Verify that only the "Page Two" Node is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page Two', $html);
    $this->assertStringNotContainsString('Page One', $html);

    // Submit bulk actions form to ensure that the previous AJAX submit does not
    // break it.
    $this->submitForm([
      'action' => 'node_make_sticky_action',
      'node_bulk_form[0]' => TRUE,
<<<<<<< HEAD
    ], t('Apply to selected items'));
=======
    ], 'Apply to selected items');
>>>>>>> dev

    // Verify that the action was performed.
    $this->assertSession()->pageTextContains('Make content sticky was applied to 1 item.');

    // Reset the form.
<<<<<<< HEAD
    $this->submitForm([], t('Reset'));
=======
    $this->submitForm([], 'Reset');
>>>>>>> dev
    $this->assertSession()->assertWaitOnAjaxRequest();

    $this->assertSession()->pageTextContains('Page One');
    $this->assertSession()->pageTextContains('Page Two');
    $this->assertFalse($session->getPage()->hasButton('Reset'));
  }

  /**
   * Tests if exposed filtering via AJAX works in a modal.
   */
  public function testExposedFiltersInModal() {
    $this->drupalGet('views-test-modal/modal');

    $assert = $this->assertSession();

    $assert->elementExists('named', ['link', 'Administer content'])->click();
    $dialog = $assert->waitForElementVisible('css', '.views-test-modal');

    $session = $this->getSession();
    // Ensure that the Content we're testing for is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringContainsString('Page Two', $html);

    // Search for "Page One".
    $session->getPage()->fillField('title', 'Page One');
    $assert->elementExists('css', '.ui-dialog-buttonpane')->pressButton('Filter');
    $this->assertSession()->assertWaitOnAjaxRequest();

    // Verify that only the "Page One" Node is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringNotContainsString('Page Two', $html);

    // Close and re-open the modal.
    $assert->buttonExists('Close', $dialog)->press();
    $assert->elementExists('named', ['link', 'Administer content'])->click();
    $assert->waitForElementVisible('css', '.views-test-modal');

    // Ensure that the Content we're testing for is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringContainsString('Page Two', $html);

    // Search for "Page One".
    $session->getPage()->fillField('title', 'Page One');
    $assert->elementExists('css', '.ui-dialog-buttonpane')->pressButton('Filter');
    $this->assertSession()->assertWaitOnAjaxRequest();

    // Verify that only the "Page One" Node is present.
    $html = $session->getPage()->getHtml();
    $this->assertStringContainsString('Page One', $html);
    $this->assertStringNotContainsString('Page Two', $html);
  }

}
