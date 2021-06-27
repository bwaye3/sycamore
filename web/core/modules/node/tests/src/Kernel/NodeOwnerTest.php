<?php

namespace Drupal\Tests\node\Kernel;

use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;
use Drupal\user\Entity\User;

/**
 * Tests node owner functionality.
 *
 * @group Entity
 */
class NodeOwnerTest extends EntityKernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'language'];

  protected function setUp() {
=======
  protected static $modules = ['node', 'language'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create the node bundles required for testing.
    $type = NodeType::create([
      'type' => 'page',
      'name' => 'page',
    ]);
    $type->save();

    // Enable two additional languages.
    ConfigurableLanguage::createFromLangcode('de')->save();
    ConfigurableLanguage::createFromLangcode('it')->save();

    $this->installSchema('node', 'node_access');
  }

  /**
   * Tests node owner functionality.
   */
  public function testOwner() {
    $user = $this->createUser();

    $container = \Drupal::getContainer();
    $container->get('current_user')->setAccount($user);

    // Create a test node.
    $english = Node::create([
      'type' => 'page',
      'title' => $this->randomMachineName(),
      'language' => 'en',
    ]);
    $english->save();

<<<<<<< HEAD
    $this->assertEqual($user->id(), $english->getOwnerId());
=======
    $this->assertEquals($user->id(), $english->getOwnerId());
>>>>>>> dev

    $german = $english->addTranslation('de');
    $german->title = $this->randomString();
    $italian = $english->addTranslation('it');
    $italian->title = $this->randomString();

    // Node::preSave() sets owner to anonymous user if owner is nor set.
    $english->set('uid', ['target_id' => NULL]);
    $german->set('uid', ['target_id' => NULL]);
    $italian->set('uid', ['target_id' => NULL]);

    // Entity::save() saves all translations!
    $italian->save();

<<<<<<< HEAD
    $this->assertEqual(0, $english->getOwnerId());
    $this->assertEqual(0, $german->getOwnerId());
    $this->assertEqual(0, $italian->getOwnerId());
  }

  /**
   * Test an unsaved node owner.
=======
    $this->assertEquals(0, $english->getOwnerId());
    $this->assertEquals(0, $german->getOwnerId());
    $this->assertEquals(0, $italian->getOwnerId());
  }

  /**
   * Tests an unsaved node owner.
>>>>>>> dev
   */
  public function testUnsavedNodeOwner() {
    $user = User::create([
      'name' => 'foo',
    ]);
    $node = Node::create([
      'type' => 'page',
      'title' => $this->randomMachineName(),
    ]);
    // Set the node owner while the user is unsaved and then immediately save
    // the user and node.
    $node->setOwner($user);
    $user->save();
    $node->save();

    // The ID assigned to the newly saved user will now be the owner ID of the
    // node.
    $this->assertEquals($user->id(), $node->getOwnerId());
  }

<<<<<<< HEAD
  /**
   * Tests the legacy method used as the default entity owner.
   *
   * @group legacy
   * @expectedDeprecation The ::getCurrentUserId method is deprecated in 8.6.x and will be removed before 9.0.0.
   */
  public function testGetCurrentUserId() {
    $this->assertEquals(['0'], Node::getCurrentUserId());
  }

=======
>>>>>>> dev
}
