<?php

namespace Drupal\driver_test\Driver\Database\DrivertestMysqlDeprecatedVersion;

use Drupal\Core\Database\Driver\mysql\Connection as CoreConnection;

/**
 * MySQL test implementation of \Drupal\Core\Database\Connection.
 */
class Connection extends CoreConnection {

  /**
<<<<<<< HEAD
   * Constructs a Connection object.
   */
  public function __construct(\PDO $connection, array $connection_options = []) {
    // Alias the MySQL classes to avoid having unnecessary copies.
    foreach (['Delete', 'Insert', 'Merge', 'Schema', 'Upsert', 'Select', 'Update'] as $class) {
      class_alias('Drupal\\Core\\Database\\Driver\\mysql\\' . $class, 'Drupal\\driver_test\\Driver\\Database\\DrivertestMysqlDeprecatedVersion\\' . $class);
    }
    parent::__construct($connection, $connection_options);
  }

  /**
=======
>>>>>>> dev
   * Hardcoded database server version.
   *
   * Faking that we are on a deprecated database.
   *
   * @var string
   */
<<<<<<< HEAD
  protected $databaseVersion = '5.5.2';
=======
  protected $databaseVersion = '10.2.31-MariaDB-1:10.2.31+maria~bionic-log';
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  public function driver() {
    return 'DrivertestMysqlDeprecatedVersion';
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
=======
  public function isMariaDb(): bool {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
>>>>>>> dev
  public function version() {
    return $this->databaseVersion;
  }

<<<<<<< HEAD
=======
  /**
   * {@inheritdoc}
   */
  protected function getServerVersion(): string {
    return $this->databaseVersion;
  }

>>>>>>> dev
}
