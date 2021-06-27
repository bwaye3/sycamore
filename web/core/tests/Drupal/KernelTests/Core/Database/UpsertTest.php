<?php

namespace Drupal\KernelTests\Core\Database;

use Drupal\Core\Database\Database;

/**
 * Tests the Upsert query builder.
 *
 * @group Database
 */
class UpsertTest extends DatabaseTestBase {

  /**
   * Confirms that we can upsert (update-or-insert) records successfully.
   */
  public function testUpsert() {
    $connection = Database::getConnection();
    $num_records_before = $connection->query('SELECT COUNT(*) FROM {test_people}')->fetchField();

    $upsert = $connection->upsert('test_people')
      ->key('job')
      ->fields(['job', 'age', 'name']);

    // Add a new row.
    $upsert->values([
      'job' => 'Presenter',
      'age' => 31,
      'name' => 'Tiffany',
    ]);

    // Update an existing row.
    $upsert->values([
      'job' => 'Speaker',
      // The initial age was 30.
      'age' => 32,
      'name' => 'Meredith',
    ]);

<<<<<<< HEAD
    $upsert->execute();

    $num_records_after = $connection->query('SELECT COUNT(*) FROM {test_people}')->fetchField();
    $this->assertEqual($num_records_before + 1, $num_records_after, 'Rows were inserted and updated properly.');

    $person = $connection->query('SELECT * FROM {test_people} WHERE job = :job', [':job' => 'Presenter'])->fetch();
    $this->assertEqual($person->job, 'Presenter', 'Job set correctly.');
    $this->assertEqual($person->age, 31, 'Age set correctly.');
    $this->assertEqual($person->name, 'Tiffany', 'Name set correctly.');

    $person = $connection->query('SELECT * FROM {test_people} WHERE job = :job', [':job' => 'Speaker'])->fetch();
    $this->assertEqual($person->job, 'Speaker', 'Job was not changed.');
    $this->assertEqual($person->age, 32, 'Age updated correctly.');
    $this->assertEqual($person->name, 'Meredith', 'Name was not changed.');
  }

  /**
   * Tests that we can upsert records with a special named column.
   */
  public function testSpecialColumnUpsert() {
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {test_special_columns}')->fetchField();
    $upsert = $this->connection->upsert('test_special_columns')
      ->key('id')
      ->fields(['id', 'offset', 'function']);
=======
    $result = $upsert->execute();
    $this->assertIsInt($result);
    $this->assertGreaterThanOrEqual(2, $result, 'The result of the upsert operation should report that at least two rows were affected.');

    $num_records_after = $connection->query('SELECT COUNT(*) FROM {test_people}')->fetchField();
    $this->assertEquals($num_records_before + 1, $num_records_after, 'Rows were inserted and updated properly.');

    $person = $connection->query('SELECT * FROM {test_people} WHERE [job] = :job', [':job' => 'Presenter'])->fetch();
    $this->assertEquals('Presenter', $person->job, 'Job set correctly.');
    $this->assertEquals(31, $person->age, 'Age set correctly.');
    $this->assertEquals('Tiffany', $person->name, 'Name set correctly.');

    $person = $connection->query('SELECT * FROM {test_people} WHERE [job] = :job', [':job' => 'Speaker'])->fetch();
    $this->assertEquals('Speaker', $person->job, 'Job was not changed.');
    $this->assertEquals(32, $person->age, 'Age updated correctly.');
    $this->assertEquals('Meredith', $person->name, 'Name was not changed.');
  }

  /**
   * Confirms that we can upsert records with keywords successfully.
   */
  public function testUpsertWithKeywords() {
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {select}')->fetchField();

    $upsert = $this->connection->upsert('select')
      ->key('id')
      ->fields(['id', 'update']);
>>>>>>> dev

    // Add a new row.
    $upsert->values([
      'id' => 2,
<<<<<<< HEAD
      'offset' => 'Offset 2',
      'function' => 'Function 2',
=======
      'update' => 'Update value 2',
>>>>>>> dev
    ]);

    // Update an existing row.
    $upsert->values([
      'id' => 1,
<<<<<<< HEAD
      'offset' => 'Offset 1 updated',
      'function' => 'Function 1 updated',
    ]);

    $upsert->execute();
    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test_special_columns}')->fetchField();
    $this->assertEquals($num_records_before + 1, $num_records_after, 'Rows were inserted and updated properly.');

    $record = $this->connection->query('SELECT * FROM {test_special_columns} WHERE id = :id', [':id' => 1])->fetch();
    $this->assertEquals($record->offset, 'Offset 1 updated');
    $this->assertEquals($record->function, 'Function 1 updated');

    $record = $this->connection->query('SELECT * FROM {test_special_columns} WHERE id = :id', [':id' => 2])->fetch();
    $this->assertEquals($record->offset, 'Offset 2');
    $this->assertEquals($record->function, 'Function 2');
=======
      'update' => 'Update value 1 updated',
    ]);

    $result = $upsert->execute();
    $this->assertIsInt($result);
    $this->assertGreaterThanOrEqual(2, $result, 'The result of the upsert operation should report that at least two rows were affected.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {select}')->fetchField();
    $this->assertEquals($num_records_before + 1, $num_records_after, 'Rows were inserted and updated properly.');

    $record = $this->connection->query('SELECT * FROM {select} WHERE [id] = :id', [':id' => 1])->fetch();
    $this->assertEquals('Update value 1 updated', $record->update);

    $record = $this->connection->query('SELECT * FROM {select} WHERE [id] = :id', [':id' => 2])->fetch();
    $this->assertEquals('Update value 2', $record->update);
>>>>>>> dev
  }

}
