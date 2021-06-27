<?php

namespace Drupal\Tests\TestSuites;

require_once __DIR__ . '/TestSuiteBase.php';

/**
 * Discovers tests for the functional-javascript test suite.
 */
class FunctionalJavascriptTestSuite extends TestSuiteBase {

  /**
   * Factory method which loads up a suite with all functional javascript tests.
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

    $suite = new static('functional-javascript');
    $suite->addTestsBySuiteNamespace($root, 'FunctionalJavascript');

    return $suite;
  }

}
