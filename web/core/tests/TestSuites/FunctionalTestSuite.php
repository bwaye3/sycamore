<?php

namespace Drupal\Tests\TestSuites;

require_once __DIR__ . '/TestSuiteBase.php';

/**
 * Discovers tests for the functional test suite.
 */
class FunctionalTestSuite extends TestSuiteBase {

  /**
   * Factory method which loads up a suite with all functional tests.
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

    $suite = new static('functional');
    $suite->addTestsBySuiteNamespace($root, 'Functional');

    return $suite;
  }

}
