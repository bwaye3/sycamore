<?php

namespace Drupal\Tests\TestSuites;

require_once __DIR__ . '/TestSuiteBase.php';

/**
 * Discovers tests for the kernel test suite.
 */
class KernelTestSuite extends TestSuiteBase {

  /**
   * Factory method which loads up a suite with all kernel tests.
   *
   * @return static
   *   The test suite.
   */
  public static function suite() {
<<<<<<< HEAD
    $root = dirname(dirname(dirname(__DIR__)));
=======
    $root = dirname(__DIR__, 3);
>>>>>>> dev

    $suite = new static('kernel');
    $suite->addTestsBySuiteNamespace($root, 'Kernel');

    return $suite;
  }

}
