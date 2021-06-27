<?php

namespace Drupal\Tests\Core\Test;

use Drupal\Core\Test\JUnitConverter;
use Drupal\Tests\UnitTestCase;
use org\bovigo\vfs\vfsStream;

/**
 * Tests Drupal\Core\Test\JUnitConverter.
 *
 * This test class has significant overlap with
 * Drupal\Tests\simpletest\Kernel\PhpUnitErrorTest.
 *
 * @coversDefaultClass \Drupal\Core\Test\JUnitConverter
 *
 * @group Test
 * @group simpletest
 *
 * @see \Drupal\Tests\simpletest\Kernel\PhpUnitErrorTest
 */
class JUnitConverterTest extends UnitTestCase {

  /**
<<<<<<< HEAD
   * Test errors reported.
=======
   * Tests errors reported.
>>>>>>> dev
   * @covers ::xmlToRows
   */
  public function testXmlToRowsWithErrors() {
    $phpunit_error_xml = __DIR__ . '/fixtures/phpunit_error.xml';

    $res = JUnitConverter::xmlToRows(1, $phpunit_error_xml);
    $this->assertCount(4, $res, 'All testcases got extracted');
    $this->assertNotEquals($res[0]['status'], 'pass');
    $this->assertEquals($res[0]['status'], 'fail');

    // Test nested testsuites, which appear when you use @dataProvider.
    for ($i = 0; $i < 3; $i++) {
      $this->assertNotEquals($res[$i + 1]['status'], 'pass');
      $this->assertEquals($res[$i + 1]['status'], 'fail');
    }

    // Make sure xmlToRows() does not balk if there are no test results.
    $this->assertSame([], JUnitConverter::xmlToRows(1, 'does_not_exist'));
  }

  /**
   * @covers ::xmlToRows
   */
  public function testXmlToRowsEmptyFile() {
    // File system with an empty XML file.
    vfsStream::setup('junit_test', NULL, ['empty.xml' => '']);
<<<<<<< HEAD
    $this->assertArrayEquals([], JUnitConverter::xmlToRows(23, vfsStream::url('junit_test/empty.xml')));
=======
    $this->assertSame([], JUnitConverter::xmlToRows(23, vfsStream::url('junit_test/empty.xml')));
>>>>>>> dev
  }

  /**
   * @covers ::xmlElementToRows
   */
  public function testXmlElementToRows() {
    $junit = <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="Drupal\Tests\simpletest\Unit\TestDiscoveryTest" file="/Users/paul/projects/drupal/core/modules/simpletest/tests/src/Unit/TestDiscoveryTest.php" tests="3" assertions="5" errors="0" failures="0" skipped="0" time="0.215539">
    <testcase name="testGetTestClasses" class="Drupal\Tests\simpletest\Unit\TestDiscoveryTest" classname="Drupal.Tests.simpletest.Unit.TestDiscoveryTest" file="/Users/paul/projects/drupal/core/modules/simpletest/tests/src/Unit/TestDiscoveryTest.php" line="108" assertions="2" time="0.100787"/>
  </testsuite>
</testsuites>
EOD;
    $simpletest = [
      [
        'test_id' => 23,
        'test_class' => 'Drupal\Tests\simpletest\Unit\TestDiscoveryTest',
        'status' => 'pass',
        'message' => '',
        'message_group' => 'Other',
        'function' => 'Drupal\Tests\simpletest\Unit\TestDiscoveryTest->testGetTestClasses()',
        'line' => 108,
        'file' => '/Users/paul/projects/drupal/core/modules/simpletest/tests/src/Unit/TestDiscoveryTest.php',
      ],
    ];
<<<<<<< HEAD
    $this->assertArrayEquals($simpletest, JUnitConverter::xmlElementToRows(23, new \SimpleXMLElement($junit)));
=======
    $this->assertEquals($simpletest, JUnitConverter::xmlElementToRows(23, new \SimpleXMLElement($junit)));
>>>>>>> dev
  }

  /**
   * @covers ::convertTestCaseToSimpletestRow
   */
  public function testConvertTestCaseToSimpletestRow() {
    $junit = <<<EOD
    <testcase name="testGetTestClasses" class="Drupal\Tests\simpletest\Unit\TestDiscoveryTest" classname="Drupal.Tests.simpletest.Unit.TestDiscoveryTest" file="/Users/paul/projects/drupal/core/modules/simpletest/tests/src/Unit/TestDiscoveryTest.php" line="108" assertions="2" time="0.100787"/>
EOD;
    $simpletest = [
      'test_id' => 23,
      'test_class' => 'Drupal\Tests\simpletest\Unit\TestDiscoveryTest',
      'status' => 'pass',
      'message' => '',
      'message_group' => 'Other',
      'function' => 'Drupal\Tests\simpletest\Unit\TestDiscoveryTest->testGetTestClasses()',
      'line' => 108,
      'file' => '/Users/paul/projects/drupal/core/modules/simpletest/tests/src/Unit/TestDiscoveryTest.php',
    ];
<<<<<<< HEAD
    $this->assertArrayEquals($simpletest, JUnitConverter::convertTestCaseToSimpletestRow(23, new \SimpleXMLElement($junit)));
=======
    $this->assertEquals($simpletest, JUnitConverter::convertTestCaseToSimpletestRow(23, new \SimpleXMLElement($junit)));
>>>>>>> dev
  }

}
