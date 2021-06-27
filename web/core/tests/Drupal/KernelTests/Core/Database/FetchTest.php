<?php

namespace Drupal\KernelTests\Core\Database;

use Drupal\Core\Database\RowCountException;
use Drupal\Core\Database\StatementInterface;
use Drupal\Tests\system\Functional\Database\FakeRecord;

/**
 * Tests the Database system's various fetch capabilities.
 *
 * We get timeout errors if we try to run too many tests at once.
 *
 * @group Database
 */
class FetchTest extends DatabaseTestBase {

  /**
   * Confirms that we can fetch a record properly in default object mode.
   */
  public function testQueryFetchDefault() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25]);
>>>>>>> dev
    $this->assertInstanceOf(StatementInterface::class, $result);
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertIsObject($record);
      $this->assertSame('John', $record->name);
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record to an object explicitly.
   */
  public function testQueryFetchObject() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25], ['fetch' => \PDO::FETCH_OBJ]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25], ['fetch' => \PDO::FETCH_OBJ]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertIsObject($record);
      $this->assertSame('John', $record->name);
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record to an associative array explicitly.
   */
  public function testQueryFetchArray() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25], ['fetch' => \PDO::FETCH_ASSOC]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25], ['fetch' => \PDO::FETCH_ASSOC]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertIsArray($record);
      $this->assertArrayHasKey('name', $record);
      $this->assertSame('John', $record['name']);
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record into a new instance of a custom class.
   *
   * @see \Drupal\system\Tests\Database\FakeRecord
   */
  public function testQueryFetchClass() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25], ['fetch' => FakeRecord::class]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25], ['fetch' => FakeRecord::class]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertInstanceOf(FakeRecord::class, $record);
      $this->assertSame('John', $record->name);
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record into a class using fetchObject.
   *
   * @see \Drupal\system\Tests\Database\FakeRecord
<<<<<<< HEAD
   * @see \Drupal\Core\Database\StatementPrefech::fetchObject
   */
  public function testQueryFetchObjectClass() {
    $records = 0;
    $query = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25]);
    while ($result = $query->fetchObject(FakeRecord::class)) {
      $records += 1;
      $this->assertInstanceOf(FakeRecord::class, $result);
      $this->assertSame('John', $result->name, '25 year old is John.');
=======
   * @see \Drupal\Core\Database\StatementPrefetch::fetchObject
   */
  public function testQueryFetchObjectClass() {
    $records = 0;
    $query = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25]);
    while ($result = $query->fetchObject(FakeRecord::class, [1])) {
      $records += 1;
      $this->assertInstanceOf(FakeRecord::class, $result);
      $this->assertSame('John', $result->name, '25 year old is John.');
      $this->assertSame(1, $result->fakeArg, 'The record has received an argument through its constructor.');
>>>>>>> dev
    }
    $this->assertSame(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record into a new instance of a custom class.
   * The name of the class is determined from a value of the first column.
   *
   * @see \Drupal\Tests\system\Functional\Database\FakeRecord
   */
  public function testQueryFetchClasstype() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT classname, name, job FROM {test_classtype} WHERE age = :age', [':age' => 26], ['fetch' => \PDO::FETCH_CLASS | \PDO::FETCH_CLASSTYPE]);
=======
    $result = $this->connection->query('SELECT [classname], [name], [job] FROM {test_classtype} WHERE [age] = :age', [':age' => 26], ['fetch' => \PDO::FETCH_CLASS | \PDO::FETCH_CLASSTYPE]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertInstanceOf(FakeRecord::class, $record);
      $this->assertSame('Kay', $record->name);
      $this->assertSame('Web Developer', $record->job);
      $this->assertFalse(isset($record->classname), 'Classname field not found, as intended.');
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch a record into an indexed array explicitly.
   */
  public function testQueryFetchNum() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25], ['fetch' => \PDO::FETCH_NUM]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25], ['fetch' => \PDO::FETCH_NUM]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertIsArray($record);
      $this->assertArrayHasKey(0, $record);
      $this->assertSame('John', $record[0]);
    }

    $this->assertCount(1, $records, 'There is only one record');
  }

  /**
   * Confirms that we can fetch a record into a doubly-keyed array explicitly.
   */
  public function testQueryFetchBoth() {
    $records = [];
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age = :age', [':age' => 25], ['fetch' => \PDO::FETCH_BOTH]);
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] = :age', [':age' => 25], ['fetch' => \PDO::FETCH_BOTH]);
>>>>>>> dev
    foreach ($result as $record) {
      $records[] = $record;
      $this->assertIsArray($record);
      $this->assertArrayHasKey(0, $record);
      $this->assertSame('John', $record[0]);
      $this->assertArrayHasKey('name', $record);
      $this->assertSame('John', $record['name']);
    }

    $this->assertCount(1, $records, 'There is only one record.');
  }

  /**
   * Confirms that we can fetch all records into an array explicitly.
   */
  public function testQueryFetchAllColumn() {
    $query = $this->connection->select('test');
    $query->addField('test', 'name');
    $query->orderBy('name');
    $query_result = $query->execute()->fetchAll(\PDO::FETCH_COLUMN);

    $expected_result = ['George', 'John', 'Paul', 'Ringo'];
<<<<<<< HEAD
    $this->assertEqual($query_result, $expected_result, 'Returned the correct result.');
=======
    $this->assertEquals($expected_result, $query_result, 'Returned the correct result.');
>>>>>>> dev
  }

  /**
   * Confirms that we can fetch an entire column of a result set at once.
   */
  public function testQueryFetchCol() {
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test} WHERE age > :age', [':age' => 25]);
    $column = $result->fetchCol();
    $this->assertCount(3, $column, 'fetchCol() returns the right number of records.');

    $result = $this->connection->query('SELECT name FROM {test} WHERE age > :age', [':age' => 25]);
    $i = 0;
    foreach ($result as $record) {
      $this->assertIdentical($record->name, $column[$i++], 'Column matches direct access.');
=======
    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] > :age', [':age' => 25]);
    $column = $result->fetchCol();
    $this->assertCount(3, $column, 'fetchCol() returns the right number of records.');

    $result = $this->connection->query('SELECT [name] FROM {test} WHERE [age] > :age', [':age' => 25]);
    $i = 0;
    foreach ($result as $record) {
      $this->assertSame($column[$i++], $record->name, 'Column matches direct access.');
>>>>>>> dev
    }
  }

  /**
   * Tests that rowCount() throws exception on SELECT query.
   */
  public function testRowCount() {
<<<<<<< HEAD
    $result = $this->connection->query('SELECT name FROM {test}');
=======
    $result = $this->connection->query('SELECT [name] FROM {test}');
>>>>>>> dev
    try {
      $result->rowCount();
      $exception = FALSE;
    }
    catch (RowCountException $e) {
      $exception = TRUE;
    }
    $this->assertTrue($exception, 'Exception was thrown');
  }

}
