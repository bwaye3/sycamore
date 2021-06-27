<?php

namespace Drupal\FunctionalTests\Core\Config;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\Traits\Core\Config\SchemaConfigListenerTestTrait;

/**
 * Tests the functionality of ConfigSchemaChecker in KernelTestBase tests.
 *
 * @group config
 */
class SchemaConfigListenerTest extends BrowserTestBase {

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
  protected $defaultTheme = 'stark';

}
