<?php

namespace Drupal\Tests\menu_link_content\Kernel\Migrate;

use Drupal\Tests\migrate_drupal\Kernel\MigrateDrupalTestBase;
use Drupal\migrate_drupal\Tests\StubTestTrait;

/**
 * Test stub creation for menu link content entities.
 *
 * @group menu_link_content
 */
class MigrateMenuLinkContentStubTest extends MigrateDrupalTestBase {

  use StubTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['menu_link_content', 'link'];
=======
  protected static $modules = ['menu_link_content', 'link'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('menu_link_content');
  }

  /**
   * Tests creation of menu link content stubs.
   */
  public function testStub() {
    $this->performStubTest('menu_link_content');
  }

}
