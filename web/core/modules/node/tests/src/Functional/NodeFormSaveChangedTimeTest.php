<?php

namespace Drupal\Tests\node\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests updating the changed time after API and FORM entity save.
 *
 * @group node
 */
class NodeFormSaveChangedTimeTest extends BrowserTestBase {

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
    'node',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
<<<<<<< HEAD
   * An user with permissions to create and edit articles.
=======
   * A user with permissions to create and edit articles.
>>>>>>> dev
   *
   * @var \Drupal\user\UserInterface
   */
  protected $authorUser;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a node type.
    $this->drupalCreateContentType([
      'type' => 'article',
      'name' => 'Article',
    ]);

    $this->authorUser = $this->drupalCreateUser([
      'access content',
      'create article content',
      'edit any article content',
    ], 'author');
    $this->drupalLogin($this->authorUser);

    // Create one node of the above node type .
    $this->drupalCreateNode([
      'type' => 'article',
    ]);
  }

  /**
<<<<<<< HEAD
   * Test the changed time after API and FORM save without changes.
=======
   * Tests the changed time after API and FORM save without changes.
>>>>>>> dev
   */
  public function testChangedTimeAfterSaveWithoutChanges() {
    $storage = $this->container->get('entity_type.manager')->getStorage('node');
    $storage->resetCache([1]);
    $node = $storage->load(1);
    $changed_timestamp = $node->getChangedTime();
    $node->save();
    $storage->resetCache([1]);
    $node = $storage->load(1);
<<<<<<< HEAD
    $this->assertEqual($changed_timestamp, $node->getChangedTime(), "The entity's changed time wasn't updated after API save without changes.");
=======
    $this->assertEquals($changed_timestamp, $node->getChangedTime(), "The entity's changed time wasn't updated after API save without changes.");
>>>>>>> dev

    // Ensure different save timestamps.
    sleep(1);

    // Save the node on the regular node edit form.
<<<<<<< HEAD
    $this->drupalPostForm('node/1/edit', [], t('Save'));

    $storage->resetCache([1]);
    $node = $storage->load(1);
    $this->assertNotEqual($changed_timestamp, $node->getChangedTime(), "The entity's changed time was updated after form save without changes.");
=======
    $this->drupalGet('node/1/edit');
    $this->submitForm([], 'Save');

    $storage->resetCache([1]);
    $node = $storage->load(1);
    $this->assertNotEquals($node->getChangedTime(), $changed_timestamp, "The entity's changed time was updated after form save without changes.");
>>>>>>> dev
  }

}
