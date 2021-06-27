<?php

namespace Drupal\KernelTests\Core\Config;

use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\Traits\Core\Config\SchemaConfigListenerTestTrait;

/**
 * Tests the functionality of ConfigSchemaChecker in KernelTestBase tests.
 *
 * @group config
 */
class SchemaConfigListenerTest extends KernelTestBase {

  use SchemaConfigListenerTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
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
    // Install configuration provided by the module so that the order of the
    // config keys is the same as
    // \Drupal\FunctionalTests\Core\Config\SchemaConfigListenerTest.
    $this->installConfig(['config_test']);
  }

}
