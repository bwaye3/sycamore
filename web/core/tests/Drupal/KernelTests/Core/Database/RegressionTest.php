<?php

namespace Drupal\KernelTests\Core\Database;

/**
 * Regression tests cases for the database layer.
 *
 * @group Database
 */
class RegressionTest extends DatabaseTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'user'];
=======
  protected static $modules = ['node', 'user'];
>>>>>>> dev

  /**
   * Ensures that non-ASCII UTF-8 data is stored in the database properly.
   */
  public function testRegression_310447() {
    // That's a 255 character UTF-8 string.
    $job = str_repeat("é", 255);
    $this->connection
      ->insert('test')
      ->fields([
        'name' => $this->randomMachineName(),
        'age' => 20,
        'job' => $job,
      ])->execute();

<<<<<<< HEAD
    $from_database = $this->connection->query('SELECT job FROM {test} WHERE job = :job', [':job' => $job])->fetchField();
=======
    $from_database = $this->connection->query('SELECT [job] FROM {test} WHERE [job] = :job', [':job' => $job])->fetchField();
>>>>>>> dev
    $this->assertSame($job, $from_database, 'The database handles UTF-8 characters cleanly.');
  }

  /**
   * Tests the Schema::tableExists() method.
   */
  public function testDBTableExists() {
<<<<<<< HEAD
    $this->assertSame(TRUE, $this->connection->schema()->tableExists('test'), 'Returns true for existent table.');
    $this->assertSame(FALSE, $this->connection->schema()->tableExists('nosuchtable'), 'Returns false for nonexistent table.');
=======
    $this->assertTrue($this->connection->schema()->tableExists('test'), 'Returns true for existent table.');
    $this->assertFalse($this->connection->schema()->tableExists('no_such_table'), 'Returns false for nonexistent table.');
>>>>>>> dev
  }

  /**
   * Tests the \Drupal\Core\Database\Schema::fieldExists() method.
   */
  public function testDBFieldExists() {
    $schema = $this->connection->schema();
<<<<<<< HEAD
    $this->assertSame(TRUE, $schema->fieldExists('test', 'name'), 'Returns true for existent column.');
    $this->assertSame(FALSE, $schema->fieldExists('test', 'nosuchcolumn'), 'Returns false for nonexistent column.');
=======
    $this->assertTrue($schema->fieldExists('test', 'name'), 'Returns true for existent column.');
    $this->assertFalse($schema->fieldExists('test', 'no_such_column'), 'Returns false for nonexistent column.');
>>>>>>> dev
  }

  /**
   * Tests the Schema::indexExists() method.
   */
  public function testDBIndexExists() {
<<<<<<< HEAD
    $this->assertSame(TRUE, $this->connection->schema()->indexExists('test', 'ages'), 'Returns true for existent index.');
    $this->assertSame(FALSE, $this->connection->schema()->indexExists('test', 'nosuchindex'), 'Returns false for nonexistent index.');
=======
    $this->assertTrue($this->connection->schema()->indexExists('test', 'ages'), 'Returns true for existent index.');
    $this->assertFalse($this->connection->schema()->indexExists('test', 'no_such_index'), 'Returns false for nonexistent index.');
>>>>>>> dev
  }

}
