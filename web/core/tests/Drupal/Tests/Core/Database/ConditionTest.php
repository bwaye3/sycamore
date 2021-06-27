<?php

namespace Drupal\Tests\Core\Database;

use Drupal\Core\Database\Connection;
use Drupal\Core\Database\Query\Condition;
use Drupal\Core\Database\Query\PlaceholderInterface;
<<<<<<< HEAD
use Drupal\Tests\Core\Database\Stub\StubPDO;
use Drupal\Tests\UnitTestCase;
use Prophecy\Argument;
use PHPUnit\Framework\Error\Error;
=======
use Drupal\Tests\Core\Database\Stub\StubConnection;
use Drupal\Tests\Core\Database\Stub\StubPDO;
use Drupal\Tests\UnitTestCase;
use Prophecy\Argument;
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\Core\Database\Query\Condition
 *
 * @group Database
 */
class ConditionTest extends UnitTestCase {

  /**
   * Provides a list of known operations and the expected output.
   *
   * @return array
   *   - Expected result for the string version of the condition.
   *   - The field name to input in the condition.
   */
  public function providerSimpleCondition() {
    return [
      ['name = :db_condition_placeholder_0', 'name'],
      ['name123 = :db_condition_placeholder_0', 'name-123'],
    ];
  }

  /**
   * @covers ::compile
   * @dataProvider providerSimpleCondition()
   */
  public function testSimpleCondition($expected, $field_name) {
    $connection = $this->prophesize(Connection::class);
    $connection->escapeField($field_name)->will(function ($args) {
      return preg_replace('/[^A-Za-z0-9_.]+/', '', $args[0]);
    });
    $connection->mapConditionOperator('=')->willReturn(['operator' => '=']);
<<<<<<< HEAD
=======
    $connection->condition('AND')->willReturn(new Condition('AND', FALSE));
>>>>>>> dev
    $connection = $connection->reveal();

    $query_placeholder = $this->prophesize(PlaceholderInterface::class);

    $counter = 0;
    $query_placeholder->nextPlaceholder()->will(function () use (&$counter) {
      return $counter++;
    });
    $query_placeholder->uniqueIdentifier()->willReturn(4);
    $query_placeholder = $query_placeholder->reveal();

<<<<<<< HEAD
    $condition = new Condition('AND');
=======
    $condition = $connection->condition('AND');
>>>>>>> dev
    $condition->condition($field_name, ['value']);
    $condition->compile($connection, $query_placeholder);

    $this->assertEquals($expected, $condition->__toString());
    $this->assertEquals([':db_condition_placeholder_0' => 'value'], $condition->arguments());
  }

  /**
   * @covers ::compile
   *
   * @dataProvider dataProviderTestCompileWithKnownOperators()
   *
   * @param string $expected
   *   The expected generated SQL condition.
   * @param string $field
   *   The field to pass into the condition() method.
   * @param mixed $value
   *   The value to pass into the condition() method.
   * @param string $operator
   *   The operator to pass into the condition() method.
   * @param mixed $expected_arguments
   *   (optional) The expected set arguments.
   */
  public function testCompileWithKnownOperators($expected, $field, $value, $operator, $expected_arguments = NULL) {
    $connection = $this->prophesize(Connection::class);
    $connection->escapeField(Argument::any())->will(function ($args) {
      return preg_replace('/[^A-Za-z0-9_.]+/', '', $args[0]);
    });
    $connection->mapConditionOperator(Argument::any())->willReturn(NULL);
<<<<<<< HEAD
=======
    $connection->condition('AND')->willReturn(new Condition('AND', FALSE));
>>>>>>> dev
    $connection = $connection->reveal();

    $query_placeholder = $this->prophesize(PlaceholderInterface::class);

    $counter = 0;
    $query_placeholder->nextPlaceholder()->will(function () use (&$counter) {
      return $counter++;
    });
    $query_placeholder->uniqueIdentifier()->willReturn(4);
    $query_placeholder = $query_placeholder->reveal();

<<<<<<< HEAD
    $condition = new Condition('AND');
=======
    $condition = $connection->condition('AND');
>>>>>>> dev
    $condition->condition($field, $value, $operator);
    $condition->compile($connection, $query_placeholder);

    $this->assertEquals($expected, $condition->__toString());
    if (isset($expected_arguments)) {
      $this->assertEquals($expected_arguments, $condition->arguments());
    }
  }

  /**
   * Provides a list of known operations and the expected output.
   *
   * @return array
   */
  public function dataProviderTestCompileWithKnownOperators() {
    // Below are a list of commented out test cases, which should work but
    // aren't directly supported by core, but instead need manual handling with
    // prefix/suffix at the moment.
    $data = [];
    $data[] = ['name = :db_condition_placeholder_0', 'name', 'value', '='];
    $data[] = ['name != :db_condition_placeholder_0', 'name', 'value', '!='];
    $data[] = ['name <> :db_condition_placeholder_0', 'name', 'value', '<>'];
    $data[] = ['name >= :db_condition_placeholder_0', 'name', 'value', '>='];
    $data[] = ['name > :db_condition_placeholder_0', 'name', 'value', '>'];
    $data[] = ['name <= :db_condition_placeholder_0', 'name', 'value', '<='];
    $data[] = ['name < :db_condition_placeholder_0', 'name', 'value', '<'];
    // $data[] = ['GREATEST (1, 2, 3)', '', [1, 2, 3], 'GREATEST'];
    $data[] = ['name IN (:db_condition_placeholder_0, :db_condition_placeholder_1, :db_condition_placeholder_2)', 'name', ['1', '2', '3'], 'IN'];
    $data[] = ['name NOT IN (:db_condition_placeholder_0, :db_condition_placeholder_1, :db_condition_placeholder_2)', 'name', ['1', '2', '3'], 'NOT IN'];
    // $data[] = ['INTERVAL (1, 2, 3)', '', [1, 2, 3], 'INTERVAL'];
    $data[] = ['name IS NULL', 'name', NULL, 'IS NULL'];
    $data[] = ['name IS NOT NULL', 'name', NULL, 'IS NOT NULL'];
    $data[] = ['name IS :db_condition_placeholder_0', 'name', 'TRUE', 'IS'];
    // $data[] = ['LEAST (1, 2, 3)', '', [1, 2, 3], 'LEAST'];
    $data[] = ["name LIKE :db_condition_placeholder_0 ESCAPE '\\\\'", 'name', '%muh%', 'LIKE', [':db_condition_placeholder_0' => '%muh%']];
    $data[] = ["name NOT LIKE :db_condition_placeholder_0 ESCAPE '\\\\'", 'name', '%muh%', 'NOT LIKE', [':db_condition_placeholder_0' => '%muh%']];
    $data[] = ["name BETWEEN :db_condition_placeholder_0 AND :db_condition_placeholder_1", 'name', [1, 2], 'BETWEEN', [':db_condition_placeholder_0' => 1, ':db_condition_placeholder_1' => 2]];
    $data[] = ["name NOT BETWEEN :db_condition_placeholder_0 AND :db_condition_placeholder_1", 'name', [1, 2], 'NOT BETWEEN', [':db_condition_placeholder_0' => 1, ':db_condition_placeholder_1' => 2]];
    // $data[] = ['STRCMP (name, :db_condition_placeholder_0)', '', ['test-string'], 'STRCMP', [':db_condition_placeholder_0' => 'test-string']];
    // $data[] = ['EXISTS', '', NULL, 'EXISTS'];
    // $data[] = ['name NOT EXISTS', 'name', NULL, 'NOT EXISTS'];

    return $data;
  }

  /**
   * @covers ::compile
   *
   * @dataProvider providerTestCompileWithSqlInjectionForOperator
   */
  public function testCompileWithSqlInjectionForOperator($operator) {
    $connection = $this->prophesize(Connection::class);
    $connection->escapeField(Argument::any())->will(function ($args) {
      return preg_replace('/[^A-Za-z0-9_.]+/', '', $args[0]);
    });
    $connection->mapConditionOperator(Argument::any())->willReturn(NULL);
<<<<<<< HEAD
=======
    $connection->condition('AND')->willReturn(new Condition('AND', FALSE));
>>>>>>> dev
    $connection = $connection->reveal();

    $query_placeholder = $this->prophesize(PlaceholderInterface::class);

    $counter = 0;
    $query_placeholder->nextPlaceholder()->will(function () use (&$counter) {
      return $counter++;
    });
    $query_placeholder->uniqueIdentifier()->willReturn(4);
    $query_placeholder = $query_placeholder->reveal();

<<<<<<< HEAD
    $condition = new Condition('AND');
    $condition->condition('name', 'value', $operator);
    $this->expectException(Error::class);
=======
    $condition = $connection->condition('AND');
    $condition->condition('name', 'value', $operator);
    $this->expectError();
>>>>>>> dev
    $condition->compile($connection, $query_placeholder);
  }

  public function providerTestCompileWithSqlInjectionForOperator() {
    $data = [];
    $data[] = ["IS NOT NULL) ;INSERT INTO {test} (name) VALUES ('test12345678'); -- "];
    $data[] = ["IS NOT NULL) UNION ALL SELECT name, pass FROM {users_field_data} -- "];
    $data[] = ["IS NOT NULL) UNION ALL SELECT name FROM {TEST_UPPERCASE} -- "];
    $data[] = ["= 1 UNION ALL SELECT password FROM user WHERE uid ="];

    return $data;
  }

  /**
<<<<<<< HEAD
   * Test that the core Condition can be overridden.
=======
   * Tests that the core Condition can be overridden.
>>>>>>> dev
   */
  public function testContribCondition() {
    $mockCondition = $this->getMockBuilder(Condition::class)
      ->setMockClassName('MockCondition')
      ->setConstructorArgs([NULL])
      ->disableOriginalConstructor()
      ->getMock();
<<<<<<< HEAD
    $contrib_namespace = 'Drupal\Driver\Database\mock';
=======
    $contrib_namespace = 'Drupal\mock\Driver\Database\mock';
>>>>>>> dev
    $mocked_namespace = $contrib_namespace . '\\Condition';
    class_alias('MockCondition', $mocked_namespace);

    $options['namespace'] = $contrib_namespace;
    $options['prefix']['default'] = '';

    $mockPdo = $this->createMock(StubPDO::class);

<<<<<<< HEAD
    $connection = $this->getMockBuilder(Connection::class)
      ->setConstructorArgs([$mockPdo, $options])
      ->getMockForAbstractClass();

=======
    $connection = new StubConnection($mockPdo, $options);
>>>>>>> dev
    $condition = $connection->condition('AND');
    $this->assertSame('MockCondition', get_class($condition));
  }

<<<<<<< HEAD
=======
  /**
   * Tests the deprecation of the class Condition.
   *
   * @group legacy
   */
  public function testConditionClassDeprecation() {
    $this->expectDeprecation('Creating an instance of this class is deprecated in drupal:9.1.0 and is removed in drupal:10.0.0. Use Database::getConnection()->condition() instead. See https://www.drupal.org/node/3159568');
    $condition = new Condition('OR');
    $this->assertSame('Drupal\Core\Database\Query\Condition', get_class($condition));
  }

>>>>>>> dev
}
