<?php

namespace Drupal\Tests\Core\Test;

use Drupal\Tests\UnitTestCase;

/**
 * Tests that classes are correctly loaded during PHPUnit initialization.
 *
 * @group Test
 */
class PhpUnitAutoloaderTest extends UnitTestCase {

  /**
<<<<<<< HEAD
   * Test loading of classes provided by test sub modules.
=======
   * Tests loading of classes provided by test sub modules.
>>>>>>> dev
   */
  public function testPhpUnitTestClassesLoading() {
    $this->assertTrue(class_exists('\Drupal\phpunit_test\PhpUnitTestDummyClass'), 'Class provided by test module was not autoloaded.');
  }

}
