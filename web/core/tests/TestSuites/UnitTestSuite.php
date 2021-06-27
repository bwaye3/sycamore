<?php

namespace Drupal\Tests\TestSuites;

require_once __DIR__ . '/TestSuiteBase.php';

/**
 * Discovers tests for the unit test suite.
 */
class UnitTestSuite extends TestSuiteBase {

  /**
   * Factory method which loads up a suite with all unit tests.
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

    $suite = new static('unit');
    $suite->addTestsBySuiteNamespace($root, 'Unit');

    return $suite;
  }

}
