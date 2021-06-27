<?php

namespace Drupal\KernelTests\Core\Database;

/**
 * Tests delete and truncate queries.
 *
 * The DELETE tests are not as extensive, as all of the interesting code for
 * DELETE queries is in the conditional which is identical to the UPDATE and
 * SELECT conditional handling.
 *
 * The TRUNCATE tests are not extensive either, because the behavior of
 * TRUNCATE queries is not consistent across database engines. We only test
 * that a TRUNCATE query actually deletes all rows from the target table.
 *
 * @group Database
 */
class DeleteTruncateTest extends DatabaseTestBase {

  /**
   * Confirms that we can use a subselect in a delete successfully.
   */
  public function testSubselectDelete() {
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {test_task}')->fetchField();
<<<<<<< HEAD
    $pid_to_delete = $this->connection->query("SELECT * FROM {test_task} WHERE task = 'sleep' ORDER BY tid")->fetchField();
=======
    $pid_to_delete = $this->connection->query("SELECT * FROM {test_task} WHERE [task] = 'sleep' ORDER BY [tid]")->fetchField();
>>>>>>> dev

    $subquery = $this->connection->select('test', 't')
      ->fields('t', ['id'])
      ->condition('t.id', [$pid_to_delete], 'IN');
    $delete = $this->connection->delete('test_task')
      ->condition('task', 'sleep')
      ->condition('pid', $subquery, 'IN');

    $num_deleted = $delete->execute();
<<<<<<< HEAD
    $this->assertEqual($num_deleted, 1, 'Deleted 1 record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test_task}')->fetchField();
    $this->assertEqual($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
=======
    $this->assertEquals(1, $num_deleted, 'Deleted 1 record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test_task}')->fetchField();
    $this->assertEquals($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
>>>>>>> dev
  }

  /**
   * Confirms that we can delete a single record successfully.
   */
  public function testSimpleDelete() {
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {test}')->fetchField();

    $num_deleted = $this->connection->delete('test')
      ->condition('id', 1)
      ->execute();
<<<<<<< HEAD
    $this->assertIdentical($num_deleted, 1, 'Deleted 1 record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test}')->fetchField();
    $this->assertEqual($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
=======
    $this->assertSame(1, $num_deleted, 'Deleted 1 record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test}')->fetchField();
    $this->assertEquals($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
>>>>>>> dev
  }

  /**
   * Confirms that we can truncate a whole table successfully.
   */
  public function testTruncate() {
    $num_records_before = $this->connection->query("SELECT COUNT(*) FROM {test}")->fetchField();
<<<<<<< HEAD
    $this->assertTrue($num_records_before > 0, 'The table is not empty.');
=======
    $this->assertNotEmpty($num_records_before);
>>>>>>> dev

    $this->connection->truncate('test')->execute();

    $num_records_after = $this->connection->query("SELECT COUNT(*) FROM {test}")->fetchField();
<<<<<<< HEAD
    $this->assertEqual(0, $num_records_after, 'Truncate really deletes everything.');
=======
    $this->assertEquals(0, $num_records_after, 'Truncate really deletes everything.');
>>>>>>> dev
  }

  /**
   * Confirms that we can truncate a whole table while in transaction.
   */
  public function testTruncateInTransaction() {
<<<<<<< HEAD
    // This test won't work right if transactions are not supported.
    if (!$this->connection->supportsTransactions()) {
      $this->markTestSkipped('The database driver does not support transactions.');
    }

=======
>>>>>>> dev
    $num_records_before = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertGreaterThan(0, $num_records_before, 'The table is not empty.');

    $transaction = $this->connection->startTransaction('test_truncate_in_transaction');
    $this->connection->insert('test')
      ->fields([
        'name' => 'Freddie',
        'age' => 45,
        'job' => 'Great singer',
      ])
      ->execute();
    $num_records_after_insert = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals($num_records_before + 1, $num_records_after_insert);

    $this->connection->truncate('test')->execute();

    // Checks that there are no records left in the table, and transaction is
    // still active.
    $this->assertTrue($this->connection->inTransaction());
    $num_records_after = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals(0, $num_records_after);

    // Close the transaction, and check that there are still no records in the
    // table.
    $transaction = NULL;
    $this->assertFalse($this->connection->inTransaction());
    $num_records_after = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals(0, $num_records_after);
  }

  /**
   * Confirms that transaction rollback voids a truncate operation.
   */
  public function testTruncateTransactionRollback() {
<<<<<<< HEAD
    // This test won't work right if transactions are not supported.
    if (!$this->connection->supportsTransactions()) {
      $this->markTestSkipped('The database driver does not support transactions.');
    }

=======
>>>>>>> dev
    $num_records_before = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertGreaterThan(0, $num_records_before, 'The table is not empty.');

    $transaction = $this->connection->startTransaction('test_truncate_in_transaction');
    $this->connection->insert('test')
      ->fields([
        'name' => 'Freddie',
        'age' => 45,
        'job' => 'Great singer',
      ])
      ->execute();
    $num_records_after_insert = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals($num_records_before + 1, $num_records_after_insert);

    $this->connection->truncate('test')->execute();

    // Checks that there are no records left in the table, and transaction is
    // still active.
    $this->assertTrue($this->connection->inTransaction());
    $num_records_after = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals(0, $num_records_after);

    // Roll back the transaction, and check that we are back to status before
    // insert and truncate.
    $this->connection->rollBack();
    $this->assertFalse($this->connection->inTransaction());
    $num_records_after = $this->connection->select('test')->countQuery()->execute()->fetchField();
    $this->assertEquals($num_records_before, $num_records_after);
  }

  /**
   * Confirms that we can delete a single special column name record successfully.
   */
  public function testSpecialColumnDelete() {
<<<<<<< HEAD
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {test_special_columns}')->fetchField();

    $num_deleted = $this->connection->delete('test_special_columns')
      ->condition('id', 1)
      ->execute();
    $this->assertIdentical($num_deleted, 1, 'Deleted 1 special column record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {test_special_columns}')->fetchField();
    $this->assertEqual($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
=======
    $num_records_before = $this->connection->query('SELECT COUNT(*) FROM {select}')->fetchField();

    $num_deleted = $this->connection->delete('select')
      ->condition('update', 'Update value 1')
      ->execute();
    $this->assertEquals(1, $num_deleted, 'Deleted 1 special column record.');

    $num_records_after = $this->connection->query('SELECT COUNT(*) FROM {select}')->fetchField();
    $this->assertEquals($num_records_before, $num_records_after + $num_deleted, 'Deletion adds up.');
>>>>>>> dev
  }

}
