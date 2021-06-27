<?php

namespace Drupal\Tests\system\Functional\Database;

use Drupal\KernelTests\Core\Database\DatabaseTestBase as DatabaseKernelTestBase;
use Drupal\Tests\BrowserTestBase;

/**
 * Base class for databases database tests.
 */
abstract class DatabaseTestBase extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['database_test'];
=======
  protected static $modules = ['database_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    DatabaseKernelTestBase::addSampleData();
  }

}
