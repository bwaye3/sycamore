<?php

namespace Drupal\Tests\node\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests help functionality for nodes.
 *
 * @group node
 */
class NodeHelpTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'node', 'help'];
=======
  protected static $modules = ['block', 'node', 'help'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The name of the test node type to create.
   *
   * @var string
   */
  protected $testType;

  /**
   * The test 'node help' text to be checked.
   *
   * @var string
   */
  protected $testText;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create user.
    $admin_user = $this->drupalCreateUser([
      'administer content types',
      'administer nodes',
      'bypass node access',
    ]);

    $this->drupalLogin($admin_user);
    $this->drupalPlaceBlock('help_block');

    $this->testType = 'type';
<<<<<<< HEAD
    $this->testText = t('Help text to find on node forms.');
=======
    $this->testText = 'Help text to find on node forms.';
>>>>>>> dev

    // Create content type.
    $this->drupalCreateContentType([
      'type' => $this->testType,
      'help' => $this->testText,
    ]);
  }

  /**
   * Verifies that help text appears on node add/edit forms.
   */
  public function testNodeShowHelpText() {
    // Check the node add form.
    $this->drupalGet('node/add/' . $this->testType);
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText($this->testText);
=======
    $this->assertSession()->pageTextContains($this->testText);
>>>>>>> dev

    // Create node and check the node edit form.
    $node = $this->drupalCreateNode(['type' => $this->testType]);
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText($this->testText);
=======
    $this->assertSession()->pageTextContains($this->testText);
>>>>>>> dev
  }

}
