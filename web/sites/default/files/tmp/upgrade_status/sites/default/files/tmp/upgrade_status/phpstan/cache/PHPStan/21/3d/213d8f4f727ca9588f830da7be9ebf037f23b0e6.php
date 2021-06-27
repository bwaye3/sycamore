<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Connection.php-1624732867',
   'data' => 
  array (
    '90b78a5b7db9fc435f749ce5459e84bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base Database API class.
 *
 * This class provides a Drupal-specific extension of the PDO database
 * abstraction class in PHP. Every database driver implementation must provide a
 * concrete implementation of it to support special handling required by that
 * database.
 *
 * @see http://php.net/manual/book.pdo.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '63d8b4563228a12438d3d701da056bbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database target this connection is for.
   *
   * We need this information for later auditing and logging.
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '65b3402ba155ef87ba95a48605eab810' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key representing this connection.
   *
   * The key is a unique string which identifies a database connection. A
   * connection can be a single server or a cluster of primary and replicas
   * (use target to pick between primary and replica).
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7086e3d014727ad8c57588872fd46e5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current database logging object for this connection.
   *
   * @var \\Drupal\\Core\\Database\\Log|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6086182734f7a3c82a12519e555871ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tracks the number of "layers" of transactions currently active.
   *
   * On many databases transactions cannot nest.  Instead, we track
   * nested calls to transactions and collapse them into a single
   * transaction.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cd0bad8c339f6353b8bfea0b32df4249' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Index of what driver-specific class to use for various operations.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6e3fefe13281788b35cbdf17296cfc4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the Statement class for this connection.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8852b87503a6ad56fe585f6b65fd42c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this database connection supports transactions.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5e0fa382756ae1a44ee62f7fbf7721b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this database connection supports transactional DDL.
   *
   * Set to FALSE by default because few databases support this feature.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '37bdcb7d1af34ccb4bad71706a796633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An index used to generate unique temporary table names.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2d85ac7d0ce66f8e84bbcdcf0f3ed895' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The actual PDO connection.
   *
   * @var \\PDO
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '529250f3f50a66df971979fa4194af14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The connection information for this connection object.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f96e87fc65069cdcc1e36999fb2fada1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The schema object for this connection.
   *
   * Set to NULL when the schema is destroyed.
   *
   * @var \\Drupal\\Core\\Database\\Schema|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7bebc057999ea28e32366c437fbbb732' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The prefixes used by this database connection.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e1308ef0ff8e835bc6700e65d8d94290' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of search values for use in prefixTables().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '037a04a5e8574070a8cbb97b23636e9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of replacement values for use in prefixTables().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0a821de4e215fd110be83a95f2fd48e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of un-prefixed table names, keyed by prefixed table names.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f1fecb9202a709a94a88ed130977b811' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of escaped database, table, and field names, keyed by unescaped names.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30d65a5c861b78c6474aa26f1c27d5d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of escaped aliases names, keyed by unescaped aliases.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7f29c96cab85a4043185f30f983c24c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Post-root (non-nested) transaction commit callbacks.
   *
   * @var callable[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '48c86d7f14c44809c3868bb9eea5e427' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a Connection object.
   *
   * @param \\PDO $connection
   *   An object of the PDO class representing a database connection.
   * @param array $connection_options
   *   An array of options for the connection. May include the following:
   *   - prefix
   *   - namespace
   *   - Other driver-specific options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e39453f5c8d4cdbcc60617afa301fdff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Opens a PDO connection.
   *
   * @param array $connection_options
   *   The database connection settings array.
   *
   * @return \\PDO
   *   A \\PDO object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'open',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '606200faf9153939978a2eeb92b0263f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Destroys this Connection object.
   *
   * PHP does not destruct an object if it is still referenced in other
   * variables. In case of PDO database connection objects, PHP only closes the
   * connection when the PDO object is destructed, so any references to this
   * object may cause the number of maximum allowed connections to be exceeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'destroy',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b0a5a54101bd08afadcfc8cb9d4f4107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default query options for any given query.
   *
   * A given query can be customized with a number of option flags in an
   * associative array:
   * - fetch: This element controls how rows from a result set will be
   *   returned. Legal values include PDO::FETCH_ASSOC, PDO::FETCH_BOTH,
   *   PDO::FETCH_OBJ, PDO::FETCH_NUM, or a string representing the name of a
   *   class. If a string is specified, each record will be fetched into a new
   *   object of that class. The behavior of all other values is defined by PDO.
   *   See http://php.net/manual/pdostatement.fetch.php
   * - return: Depending on the type of query, different return values may be
   *   meaningful. This directive instructs the system which type of return
   *   value is desired. The system will generally set the correct value
   *   automatically, so it is extremely rare that a module developer will ever
   *   need to specify this value. Setting it incorrectly will likely lead to
   *   unpredictable results or fatal errors. Legal values include:
   *   - Database::RETURN_STATEMENT: Return the prepared statement object for
   *     the query. This is usually only meaningful for SELECT queries, where
   *     the statement object is how one accesses the result set returned by the
   *     query.
   *   - Database::RETURN_AFFECTED: Return the number of rows affected by an
   *     UPDATE or DELETE query. Be aware that means the number of rows actually
   *     changed, not the number of rows matched by the WHERE clause.
   *   - Database::RETURN_INSERT_ID: Return the sequence ID (primary key)
   *     created by an INSERT statement on a table that contains a serial
   *     column.
   *   - Database::RETURN_NULL: Do not return anything, as there is no
   *     meaningful value to return. That is the case for INSERT queries on
   *     tables that do not contain a serial column.
   * - throw_exception: By default, the database system will catch any errors
   *   on a query as an Exception, log it, and then rethrow it so that code
   *   further up the call chain can take an appropriate action. To suppress
   *   that behavior and simply return NULL on failure, set this option to
   *   FALSE.
   * - allow_delimiter_in_query: By default, queries which have the ; delimiter
   *   any place in them will cause an exception. This reduces the chance of SQL
   *   injection attacks that terminate the original query and add one or more
   *   additional queries (such as inserting new user accounts). In rare cases,
   *   such as creating an SQL function, a ; is needed and can be allowed by
   *   changing this option to TRUE.
   *
   * @return array
   *   An array of default query options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'defaultOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0d0a951feed5c4f7f4ae307385a9341c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the connection information for this connection object.
   *
   * Note that Database::getConnectionInfo() is for requesting information
   * about an arbitrary database connection that is defined. This method
   * is for requesting the connection information of this specific
   * open connection object.
   *
   * @return array
   *   An array of the connection information. The exact list of
   *   properties is driver-dependent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getConnectionOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9455f205d265e69e6d35c852ae4ef578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the list of prefixes used by this database connection.
   *
   * @param array|string $prefix
   *   Either a single prefix, or an array of prefixes, in any of the multiple
   *   forms documented in default.settings.php.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'setPrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '95f4d4f6c51c3927bb2d7fbfdca9c632' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a database prefix to all tables in a query.
   *
   * Queries sent to Drupal should wrap all table names in curly brackets. This
   * function searches for this syntax and adds Drupal\'s table prefix to all
   * tables, allowing Drupal to coexist with other systems in the same database
   * and/or schema if necessary.
   *
   * @param string $sql
   *   A string containing a partial or entire SQL query.
   *
   * @return string
   *   The properly-prefixed string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'prefixTables',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c0111df102c3f7c298c4223cc764274e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find the prefix for a table.
   *
   * This function is for when you want to know the prefix of a table. This
   * is not used in prefixTables due to performance reasons.
   *
   * @param string $table
   *   (optional) The table to find the prefix for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'tablePrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b72e6d2df27e30a254ed4c63bcb2b649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of individually prefixed table names.
   *
   * @return array
   *   An array of un-prefixed table names, keyed by their fully qualified table
   *   names (i.e. prefix + table_name).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getUnprefixedTablesMap',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4c00af5aab763dd5dac2e334399dc1ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a fully qualified table name.
   *
   * @param string $table
   *   The name of the table in question.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getFullQualifiedTableName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '65bd0b8b3205595cb967159f818ddaf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a query string and returns the prepared statement.
   *
   * This method caches prepared statements, reusing them when
   * possible. It also prefixes tables names enclosed in curly-braces.
   *
   * @param $query
   *   The query string as SQL, with curly-braces surrounding the
   *   table names.
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface
   *   A PDO prepared statement ready for its execute() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'prepareQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c9750117125c8543acd8ac8cb69f4f74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tells this connection object what its target value is.
   *
   * This is needed for logging and auditing. It\'s sloppy to do in the
   * constructor because the constructor for child classes has a different
   * signature. We therefore also ensure that this function is only ever
   * called once.
   *
   * @param string $target
   *   (optional) The target this connection is for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'setTarget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '96b9729ac37614db9a112cbf281dd82e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the target this connection is associated with.
   *
   * @return string|null
   *   The target string of this connection, or NULL if no target is set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getTarget',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd167c91ac4f233db750e062ca19d904d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tells this connection object what its key is.
   *
   * @param string $key
   *   The key this connection is for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'setKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ea75fcac2e00790b28e0df7a5ed32de3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the key this connection is associated with.
   *
   * @return string|null
   *   The key of this connection, or NULL if no key is set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'efc3f80ba88f8b0c7401f6f248b46763' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Associates a logging object with this connection.
   *
   * @param \\Drupal\\Core\\Database\\Log $logger
   *   The logging object we want to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'setLogger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30a72c46cce9fdb6c1e5a4c492395d45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current logging object for this connection.
   *
   * @return \\Drupal\\Core\\Database\\Log|null
   *   The current logging object for this connection. If there isn\'t one,
   *   NULL is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getLogger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd2f1701377493a2317f9e649795c755f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the appropriate sequence name for a given table and serial field.
   *
   * This information is exposed to all database drivers, although it is only
   * useful on some of them. This method is table prefix-aware.
   *
   * Note that if a sequence was generated automatically by the database, its
   * name might not match the one returned by this function. Therefore, in those
   * cases, it is generally advised to use a database-specific way of retrieving
   * the name of an auto-created sequence. For example, PostgreSQL provides a
   * dedicated function for this purpose: pg_get_serial_sequence().
   *
   * @param string $table
   *   The table name to use for the sequence.
   * @param string $field
   *   The field name to use for the sequence.
   *
   * @return string
   *   A table prefix-parsed string for the sequence name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'makeSequenceName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1845ef92e53ba7209615e2b289cf399f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flatten an array of query comments into a single comment string.
   *
   * The comment string will be sanitized to avoid SQL injection attacks.
   *
   * @param string[] $comments
   *   An array of query comment strings.
   *
   * @return string
   *   A sanitized comment string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'makeComment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6c396700862634fdc3e9d5ef28446c5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sanitize a query comment string.
   *
   * Ensure a query comment does not include strings such as "* /" that might
   * terminate the comment early. This avoids SQL injection attacks via the
   * query comment. The comment strings in this example are separated by a
   * space to avoid PHP parse errors.
   *
   * For example, the comment:
   * @code
   * \\Drupal::database()->update(\'example\')
   *  ->condition(\'id\', $id)
   *  ->fields(array(\'field2\' => 10))
   *  ->comment(\'Exploit * / DROP TABLE node; --\')
   *  ->execute()
   * @endcode
   *
   * Would result in the following SQL statement being generated:
   * @code
   * "/ * Exploit * / DROP TABLE node. -- * / UPDATE example SET field2=..."
   * @endcode
   *
   * Unless the comment is sanitized first, the SQL server would drop the
   * node table and ignore the rest of the SQL statement.
   *
   * @param string $comment
   *   A query comment string.
   *
   * @return string
   *   A sanitized version of the query comment string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'filterComment',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0974bdc099cc1e09b05b37a1c440c708' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes a query string against the database.
   *
   * This method provides a central handler for the actual execution of every
   * query. All queries executed by Drupal are executed as PDO prepared
   * statements.
   *
   * @param string|\\Drupal\\Core\\Database\\StatementInterface $query
   *   The query to execute. In most cases this will be a string containing
   *   an SQL query with placeholders. An already-prepared instance of
   *   StatementInterface may also be passed in order to allow calling
   *   code to manually bind variables to a query. If a
   *   StatementInterface is passed, the $args array will be ignored.
   *   It is extremely rare that module code will need to pass a statement
   *   object to this method. It is used primarily for database drivers for
   *   databases that require special LOB field handling.
   * @param array $args
   *   An array of arguments for the prepared statement. If the prepared
   *   statement uses ? placeholders, this array must be an indexed array.
   *   If it contains named placeholders, it must be an associative array.
   * @param array $options
   *   An associative array of options to control how the query is run. The
   *   given options will be merged with self::defaultOptions(). See the
   *   documentation for self::defaultOptions() for details.
   *   Typically, $options[\'return\'] will be set by a default or by a query
   *   builder, and should not be set by a user.
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface|int|string|null
   *   This method will return one of the following:
   *   - If either $options[\'return\'] === self::RETURN_STATEMENT, or
   *     $options[\'return\'] is not set (due to self::defaultOptions()),
   *     returns the executed statement.
   *   - If $options[\'return\'] === self::RETURN_AFFECTED,
   *     returns the number of rows affected by the query
   *     (not the number matched).
   *   - If $options[\'return\'] === self::RETURN_INSERT_ID,
   *     returns the generated insert ID of the last query as a string.
   *   - If either $options[\'return\'] === self::RETURN_NULL, or
   *     an exception occurs and $options[\'throw_exception\'] evaluates to FALSE,
   *     returns NULL.
   *
   * @throws \\Drupal\\Core\\Database\\DatabaseExceptionWrapper
   * @throws \\Drupal\\Core\\Database\\IntegrityConstraintViolationException
   * @throws \\InvalidArgumentException
   *
   * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'query',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3940e82a05fe45670b101757dffa2136' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps and re-throws any PDO exception thrown by static::query().
   *
   * @param \\PDOException $e
   *   The exception thrown by static::query().
   * @param $query
   *   The query executed by static::query().
   * @param array $args
   *   An array of arguments for the prepared statement.
   * @param array $options
   *   An associative array of options to control how the query is run.
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface|int|null
   *   Most database drivers will return NULL when a PDO exception is thrown for
   *   a query, but some of them may need to re-run the query, so they can also
   *   return a \\Drupal\\Core\\Database\\StatementInterface object or an integer.
   *
   * @throws \\Drupal\\Core\\Database\\DatabaseExceptionWrapper
   * @throws \\Drupal\\Core\\Database\\IntegrityConstraintViolationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'handleQueryException',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3928998a79885fcf2955227aa283d717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Expands out shorthand placeholders.
   *
   * Drupal supports an alternate syntax for doing arrays of values. We
   * therefore need to expand them out into a full, executable query string.
   *
   * @param string $query
   *   The query string to modify.
   * @param array $args
   *   The arguments for the query.
   *
   * @return bool
   *   TRUE if the query was modified, FALSE otherwise.
   *
   * @throws \\InvalidArgumentException
   *   This exception is thrown when:
   *   - A placeholder that ends in [] is supplied, and the supplied value is
   *     not an array.
   *   - A placeholder that does not end in [] is supplied, and the supplied
   *     value is an array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'expandArguments',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e03744b4bd8c36aa6fd283bf047947d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the driver-specific override class if any for the specified class.
   *
   * @param string $class
   *   The class for which we want the potentially driver-specific class.
   *
   * @return string
   *   The name of the class that should be used for this driver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getDriverClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9d63e37b534b8b77d970708da15bf442' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns a SELECT query object.
   *
   * @param string $table
   *   The base table for this query, that is, the first table in the FROM
   *   clause. This table will also be used as the "base" table for query_alter
   *   hook implementations.
   * @param string $alias
   *   (optional) The alias of the base table of this query.
   * @param $options
   *   An array of options on the query.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   An appropriate SelectQuery object for this database connection. Note that
   *   it may be a driver-specific subclass of SelectQuery, depending on the
   *   driver.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Select
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'select',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '911b28fba0e83efaf24feb42082b71a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns an INSERT query object.
   *
   * @param string $table
   *   The table to use for the insert statement.
   * @param array $options
   *   (optional) An associative array of options to control how the query is
   *   run. The given options will be merged with
   *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
   *
   * @return \\Drupal\\Core\\Database\\Query\\Insert
   *   A new Insert query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Insert
   * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'insert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6f9dcb0f2e897a0365f8f509e1a54f53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns a MERGE query object.
   *
   * @param string $table
   *   The table to use for the merge statement.
   * @param array $options
   *   (optional) An array of options on the query.
   *
   * @return \\Drupal\\Core\\Database\\Query\\Merge
   *   A new Merge query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Merge
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd00ff6ce7fedcb176af58caff8603207' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns an UPSERT query object.
   *
   * @param string $table
   *   The table to use for the upsert query.
   * @param array $options
   *   (optional) An array of options on the query.
   *
   * @return \\Drupal\\Core\\Database\\Query\\Upsert
   *   A new Upsert query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Upsert
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'upsert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6d61a9bddf687c7de8f9bf41afb6e7a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns an UPDATE query object.
   *
   * @param string $table
   *   The table to use for the update statement.
   * @param array $options
   *   (optional) An associative array of options to control how the query is
   *   run. The given options will be merged with
   *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
   *
   * @return \\Drupal\\Core\\Database\\Query\\Update
   *   A new Update query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Update
   * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'update',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '801c5e01ff1f6d8f35a7063c406140eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns a DELETE query object.
   *
   * @param string $table
   *   The table to use for the delete statement.
   * @param array $options
   *   (optional) An associative array of options to control how the query is
   *   run. The given options will be merged with
   *   \\Drupal\\Core\\Database\\Connection::defaultOptions().
   *
   * @return \\Drupal\\Core\\Database\\Query\\Delete
   *   A new Delete query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Delete
   * @see \\Drupal\\Core\\Database\\Connection::defaultOptions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd0d311d4dc9e6ba75fcbeeafc6eb1eb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns a TRUNCATE query object.
   *
   * @param string $table
   *   The table to use for the truncate statement.
   * @param array $options
   *   (optional) An array of options on the query.
   *
   * @return \\Drupal\\Core\\Database\\Query\\Truncate
   *   A new Truncate query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Truncate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'truncate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8dfcff88aece3ea32506c324a603f638' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a DatabaseSchema object for manipulating the schema.
   *
   * This method will lazy-load the appropriate schema library file.
   *
   * @return \\Drupal\\Core\\Database\\Schema
   *   The database Schema object for this connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'schema',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6503a82976be60a9725ebe733157ff45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares and returns a CONDITION query object.
   *
   * @param string $conjunction
   *   The operator to use to combine conditions: \'AND\' or \'OR\'.
   *
   * @return \\Drupal\\Core\\Database\\Query\\Condition
   *   A new Condition query object.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Condition
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'condition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0f6a95643869de183cc63f2e46b41477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes a database name string.
   *
   * Force all database names to be strictly alphanumeric-plus-underscore.
   * For some database drivers, it may also wrap the database name in
   * database-specific escape characters.
   *
   * @param string $database
   *   An unsanitized database name.
   *
   * @return string
   *   The sanitized database name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'escapeDatabase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '17878c3f3a84856d530fcad1c62bd0f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes a table name string.
   *
   * Force all table names to be strictly alphanumeric-plus-underscore.
   * For some database drivers, it may also wrap the table name in
   * database-specific escape characters.
   *
   * @param string $table
   *   An unsanitized table name.
   *
   * @return string
   *   The sanitized table name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'escapeTable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f3a42d5165892bcfaf13421e3fc5a074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes a field name string.
   *
   * Force all field names to be strictly alphanumeric-plus-underscore.
   * For some database drivers, it may also wrap the field name in
   * database-specific escape characters.
   *
   * @param string $field
   *   An unsanitized field name.
   *
   * @return string
   *   The sanitized field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'escapeField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f75aa492cff12ab4051c41cb5f818ef5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes an alias name string.
   *
   * Force all alias names to be strictly alphanumeric-plus-underscore. In
   * contrast to DatabaseConnection::escapeField() /
   * DatabaseConnection::escapeTable(), this doesn\'t allow the period (".")
   * because that is not allowed in aliases.
   *
   * @param string $field
   *   An unsanitized alias name.
   *
   * @return string
   *   The sanitized alias name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'escapeAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '34c003ed2159522219c20621ac8fbde7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes characters that work as wildcard characters in a LIKE pattern.
   *
   * The wildcard characters "%" and "_" as well as backslash are prefixed with
   * a backslash. Use this to do a search for a verbatim string without any
   * wildcard behavior.
   *
   * For example, the following does a case-insensitive query for all rows whose
   * name starts with $prefix:
   * @code
   * $result = $injected_connection->query(
   *   \'SELECT * FROM person WHERE name LIKE :pattern\',
   *   array(\':pattern\' => $injected_connection->escapeLike($prefix) . \'%\')
   * );
   * @endcode
   *
   * Backslash is defined as escape character for LIKE patterns in
   * Drupal\\Core\\Database\\Query\\Condition::mapConditionOperator().
   *
   * @param string $string
   *   The string to escape.
   *
   * @return string
   *   The escaped string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'escapeLike',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '245f948bfc394fd2a410aba9cb680aa1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if there is an active transaction open.
   *
   * @return bool
   *   TRUE if we\'re currently in a transaction, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'inTransaction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '01e9f07bbdd3a670b867e2ab90f4bfcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the current transaction depth.
   *
   * @return int
   *   The current transaction depth.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'transactionDepth',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c93e04664260ac7b795a686d7c57805e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a new DatabaseTransaction object on this connection.
   *
   * @param string $name
   *   (optional) The name of the savepoint.
   *
   * @return \\Drupal\\Core\\Database\\Transaction
   *   A Transaction object.
   *
   * @see \\Drupal\\Core\\Database\\Transaction
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'startTransaction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '26a38a32403576c39eb1e73178ecb79a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rolls back the transaction entirely or to a named savepoint.
   *
   * This method throws an exception if no transaction is active.
   *
   * @param string $savepoint_name
   *   (optional) The name of the savepoint. The default, \'drupal_transaction\',
   *    will roll the entire transaction back.
   *
   * @throws \\Drupal\\Core\\Database\\TransactionOutOfOrderException
   * @throws \\Drupal\\Core\\Database\\TransactionNoActiveException
   *
   * @see \\Drupal\\Core\\Database\\Transaction::rollBack()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'rollBack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5b54be085fb3499e62da4f7a4f6a9b79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Increases the depth of transaction nesting.
   *
   * If no transaction is already active, we begin a new transaction.
   *
   * @param string $name
   *   The name of the transaction.
   *
   * @throws \\Drupal\\Core\\Database\\TransactionNameNonUniqueException
   *
   * @see \\Drupal\\Core\\Database\\Transaction
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'pushTransaction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7ae3ffa6f97523301fbef19cec494de0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Decreases the depth of transaction nesting.
   *
   * If we pop off the last transaction layer, then we either commit or roll
   * back the transaction as necessary. If no transaction is active, we return
   * because the transaction may have manually been rolled back.
   *
   * @param string $name
   *   The name of the savepoint.
   *
   * @throws \\Drupal\\Core\\Database\\TransactionNoActiveException
   * @throws \\Drupal\\Core\\Database\\TransactionCommitFailedException
   *
   * @see \\Drupal\\Core\\Database\\Transaction
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'popTransaction',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9d7128313ad01071312fc1a2427efb1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a root transaction end callback.
   *
   * These callbacks are invoked immediately after the transaction has been
   * committed.
   *
   * It can for example be used to avoid deadlocks on write-heavy tables that
   * do not need to be part of the transaction, like cache tag invalidations.
   *
   * Another use case is that services using alternative backends like Redis and
   * Memcache cache implementations can replicate the transaction-behavior of
   * the database cache backend and avoid race conditions.
   *
   * An argument is passed to the callbacks that indicates whether the
   * transaction was successful or not.
   *
   * @param callable $callback
   *   The callback to invoke.
   *
   * @see \\Drupal\\Core\\Database\\Connection::doCommit()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'addRootTransactionEndCallback',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '90f153cd4d547349fc80fad355f8e22d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Commit all the transaction layers that can commit.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'popCommittableTransactions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '07f0dd363d39a4afef80d40a8e557d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Do the actual commit, invoke post-commit callbacks.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'doCommit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '27821ffa7d436caa26d3e7f2c34af07a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs a limited-range query on this database object.
   *
   * Use this as a substitute for ->query() when a subset of the query is to be
   * returned. User-supplied arguments to the query should be passed in as
   * separate parameters so that they can be properly escaped to avoid SQL
   * injection attacks.
   *
   * @param string $query
   *   A string containing an SQL query.
   * @param int $from
   *   The first result row to return.
   * @param int $count
   *   The maximum number of result rows to return.
   * @param array $args
   *   (optional) An array of values to substitute into the query at placeholder
   *    markers.
   * @param array $options
   *   (optional) An array of options on the query.
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface
   *   A database query result resource, or NULL if the query was not executed
   *   correctly.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'queryRange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a84eb8bef309965ab2e77f28a49f3718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a temporary table name.
   *
   * @return string
   *   A table name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'generateTemporaryTableName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '91592152ab83808a263520747072d35e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs a SELECT query and stores its results in a temporary table.
   *
   * Use this as a substitute for ->query() when the results need to stored
   * in a temporary table. Temporary tables exist for the duration of the page
   * request. User-supplied arguments to the query should be passed in as
   * separate parameters so that they can be properly escaped to avoid SQL
   * injection attacks.
   *
   * Note that if you need to know how many results were returned, you should do
   * a SELECT COUNT(*) on the temporary table afterwards.
   *
   * @param string $query
   *   A string containing a normal SELECT SQL query.
   * @param array $args
   *   (optional) An array of values to substitute into the query at placeholder
   *   markers.
   * @param array $options
   *   (optional) An associative array of options to control how the query is
   *   run. See the documentation for DatabaseConnection::defaultOptions() for
   *   details.
   *
   * @return string
   *   The name of the temporary table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'queryTemporary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '61a38b418898a661c500cd9c16259764' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the type of database driver.
   *
   * This is not necessarily the same as the type of the database itself. For
   * instance, there could be two MySQL drivers, mysql and mysqlMock. This
   * function would return different values for each, but both would return
   * "mysql" for databaseType().
   *
   * @return string
   *   The type of database driver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'driver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1c67b80f2ec73aa3f9e877a3ae11ad09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the version of the database server.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'version',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bc372d8fa29a705368e413311fed70b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the version of the database client.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'clientVersion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '97956135c4556e6847818b3fbb0900e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this driver supports transactions.
   *
   * @return bool
   *   TRUE if this connection supports transactions, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'supportsTransactions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b1e05b8cef987552890e1ddd7a2f715e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this driver supports transactional DDL.
   *
   * DDL queries are those that change the schema, such as ALTER queries.
   *
   * @return bool
   *   TRUE if this connection supports transactions for DDL queries, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'supportsTransactionalDDL',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '76ae2aded8fdab0f5791d45d814f819b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the PDO driver for this connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'databaseType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '24fb472ee2ec619f035056f15e3b471a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a database.
   *
   * In order to use this method, you must be connected without a database
   * specified.
   *
   * @param string $database
   *   The name of the database to create.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'createDatabase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c6b58083816dc4fcb0f549e24d98cc3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets any special processing requirements for the condition operator.
   *
   * Some condition types require special processing, such as IN, because
   * the value data they pass in is not a simple value. This is a simple
   * overridable lookup function. Database connections should define only
   * those operators they wish to be handled differently than the default.
   *
   * @param string $operator
   *   The condition operator, such as "IN", "BETWEEN", etc. Case-sensitive.
   *
   * @return
   *   The extra handling directives for the specified operator, or NULL.
   *
   * @see \\Drupal\\Core\\Database\\Query\\Condition::compile()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'mapConditionOperator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e6ea5f54e92756d3489f84e4b9e33f35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Throws an exception to deny direct access to transaction commits.
   *
   * We do not want to allow users to commit transactions at any time, only
   * by destroying the transaction object or allowing it to go out of scope.
   * A direct commit bypasses all of the safety checks we\'ve built on top of
   * PDO\'s transaction routines.
   *
   * @throws \\Drupal\\Core\\Database\\TransactionExplicitCommitNotAllowedException
   *
   * @see \\Drupal\\Core\\Database\\Transaction
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'commit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '711a5ac6ff7161661d50eb7499e07202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves an unique ID from a given sequence.
   *
   * Use this function if for some reason you can\'t use a serial field. For
   * example, MySQL has no ways of reading of the current value of a sequence
   * and PostgreSQL can not advance the sequence to be larger than a given
   * value. Or sometimes you just need a unique integer.
   *
   * @param $existing_id
   *   (optional) After a database import, it might be that the sequences table
   *   is behind, so by passing in the maximum existing ID, it can be assured
   *   that we never issue the same ID.
   *
   * @return
   *   An integer number larger than any number returned by earlier calls and
   *   also larger than the $existing_id if one was passed in.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'nextId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '58038f7caefce24226b5b4d48055dfc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a statement for execution and returns a statement object
   *
   * Emulated prepared statements do not communicate with the database server so
   * this method does not check the statement.
   *
   * @param string $statement
   *   This must be a valid SQL statement for the target database server.
   * @param array $driver_options
   *   (optional) This array holds one or more key=>value pairs to set
   *   attribute values for the PDOStatement object that this method returns.
   *   You would most commonly use this to set the \\PDO::ATTR_CURSOR value to
   *   \\PDO::CURSOR_SCROLL to request a scrollable cursor. Some drivers have
   *   driver specific options that may be set at prepare-time. Defaults to an
   *   empty array.
   *
   * @return \\PDOStatement|false
   *   If the database server successfully prepares the statement, returns a
   *   \\PDOStatement object.
   *   If the database server cannot successfully prepare the statement  returns
   *   FALSE or emits \\PDOException (depending on error handling).
   *
   * @throws \\PDOException
   *
   * @see \\PDO::prepare()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'prepare',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '68f430c1ca37958bc60fc322c14c89ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Quotes a string for use in a query.
   *
   * @param string $string
   *   The string to be quoted.
   * @param int $parameter_type
   *   (optional) Provides a data type hint for drivers that have alternate
   *   quoting styles. Defaults to \\PDO::PARAM_STR.
   *
   * @return string|bool
   *   A quoted string that is theoretically safe to pass into an SQL statement.
   *   Returns FALSE if the driver does not support quoting in this way.
   *
   * @see \\PDO::quote()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'quote',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a4498ca0ec7664358d81bba27d6b3f9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts the SQLSTATE error from the PDOException.
   *
   * @param \\Exception $e
   *   The exception
   *
   * @return string
   *   The five character error code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'getSQLState',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cadf79bb70998a6b335f6f91a31b1ef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents the database connection from being serialized.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd10947abd8768f35faa134e8f993c320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an array of database connection options from a URL.
   *
   * @param string $url
   *   The URL.
   * @param string $root
   *   The root directory of the Drupal installation. Some database drivers,
   *   like for example SQLite, need this information.
   *
   * @return array
   *   The connection options.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when the provided URL does not meet the minimum
   *   requirements.
   *
   * @internal
   *   This method should only be called from
   *   \\Drupal\\Core\\Database\\Database::convertDbUrlToConnectionInfo().
   *
   * @see \\Drupal\\Core\\Database\\Database::convertDbUrlToConnectionInfo()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'createConnectionOptionsFromUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7d5893d3bd8df9428d70a3f2d41a4fc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a URL from an array of database connection options.
   *
   * @param array $connection_options
   *   The array of connection options for a database connection. An additional
   *   key of \'module\' is added by Database::getConnectionInfoAsUrl() for
   *   drivers provided my contributed or custom modules for convenience.
   *
   * @return string
   *   The connection info as a URL.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when the provided array of connection options does not
   *   meet the minimum requirements.
   *
   * @internal
   *   This method should only be called from
   *   \\Drupal\\Core\\Database\\Database::getConnectionInfoAsUrl().
   *
   * @see \\Drupal\\Core\\Database\\Database::getConnectionInfoAsUrl()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
        ),
         'className' => 'Drupal\\Core\\Database\\Connection',
         'functionName' => 'createUrlFromConnectionOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));