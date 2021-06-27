<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate/src/Plugin/migrate/source/SqlBase.php-1624732868',
   'data' => 
  array (
    '21ac98a1ca126ef8410feef2aeabaebc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sources whose data may be fetched via a database connection.
 *
 * Available configuration keys:
 * - database_state_key: (optional) Name of the state key which contains an
 *   array with database connection information.
 * - key: (optional) The database key name. Defaults to \'migrate\'.
 * - target: (optional) The database target name. Defaults to \'default\'.
 * - batch_size: (optional) Number of records to fetch from the database during
 *   each batch. If omitted, all records are fetched in a single query.
 * - ignore_map: (optional) Source data is joined to the map table by default to
 *   improve migration performance. If set to TRUE, the map table will not be
 *   joined. Using expressions in the query may result in column aliases in the
 *   JOIN clause which would be invalid SQL. If you run into this, set
 *   ignore_map to TRUE.
 *
 * For other optional configuration keys inherited from the parent class, refer
 * to \\Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase.
 *
 * About the source database determination:
 * - If the source plugin configuration contains \'database_state_key\', its value
 *   is taken as the name of a state key which contains an array with the
 *   database configuration.
 * - Otherwise, if the source plugin configuration contains \'key\', the database
 *   configuration with that name is used.
 * - If both \'database_state_key\' and \'key\' are omitted in the source plugin
 *   configuration, the database connection named \'migrate\' is used by default.
 * - If all of the above steps fail, RequirementsException is thrown.
 *
 * Drupal Database API supports multiple database connections. The connection
 * parameters are defined in $databases array in settings.php or
 * settings.local.php. It is also possible to modify the $databases array in
 * runtime. For example, Migrate Drupal, which provides the migrations from
 * Drupal 6 / 7, asks for the source database connection parameters in the UI
 * and then adds the $databases[\'migrate\'] connection in runtime before the
 * migrations are executed.
 *
 * As described above, the default source database is $databases[\'migrate\']. If
 * the source plugin needs another source connection, the database connection
 * parameters should be added to the $databases array as, for instance,
 * $databases[\'foo\']. The source plugin can then use this connection by setting
 * \'key\' to \'foo\' in its configuration.
 *
 * For a complete example on migrating data from an SQL source, refer to
 * https://www.drupal.org/docs/8/api/migrate-api/migrating-data-from-sql-source
 *
 * @see https://www.drupal.org/docs/8/api/database-api
 * @see \\Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    'a618ca2a7964d2e2b08d20d780947285' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The query string.
   *
   * @var \\Drupal\\Core\\Database\\Query\\SelectInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '019a6649bd0094ac633a78c0b3e0e3a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database object.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '5a8caa5aba5e7ca15ee7b3c8422fd312' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * State service for retrieving database info.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    'dee6cac9d42945dd0afb5f30f36cfdce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The count of the number of batches run.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '3adf47e97e93eda4bff00c278e553818' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Number of records to fetch from the database during each batch.
   *
   * A value of zero indicates no batching is to be done.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    'd4aa3e2845ad264d60b620722930fbaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    'cbce1ace92bd94df78410a32cd857921' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'create',
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
    '7f536ada795629221a343b5e3b53b782' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prints the query string when the object is used as a string.
   *
   * @return string
   *   The query string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => '__toString',
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
    '6de0dc5b0cff4c72c58bf970ae2a6daf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the database connection object.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The database connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'getDatabase',
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
    'e88aa443345fc6ca84269eb9a68a0822' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a connection to the referenced database.
   *
   * This method will add the database connection if necessary.
   *
   * @param array $database_info
   *   Configuration for the source database connection. The keys are:
   *    \'key\' - The database connection key.
   *    \'target\' - The database connection target.
   *    \'database\' - Database configuration array as accepted by
   *      Database::addConnectionInfo.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The connection to use for this plugin\'s queries.
   *
   * @throws \\Drupal\\migrate\\Exception\\RequirementsException
   *   Thrown if no source database connection is configured.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'setUpDatabase',
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
    '60f8b52e1dcef07a83b5deddcfb16abf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'checkRequirements',
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
    'ea625fc9b0aab35a92df84379fb98f21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrapper for database select.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '01657ad9f9d4aeaf0fd19e34f4556479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds tags and metadata to the query.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   The query with additional tags and metadata.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '261cd682df0b3fb952ca88eeae78ae29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'initializeIterator',
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
    '88095fc1e19a73385480f89d53a8d493' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Position the iterator to the following row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'fetchNextRow',
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
    '862c73a246f79fbc46c1fe0eb8903c24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares query for the next set of data from the source database.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'fetchNextBatch',
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
    'c1c3b10fcc315cd8d153c842ac10f174' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
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
    '2c6ebac37991221d803ad842a4847e7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'count',
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
    '259ac502346bce56098255a2c6625f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if we can join against the map table.
   *
   * This function specifically catches issues when we\'re migrating with
   * unique sets of credentials for the source and destination database.
   *
   * @return bool
   *   TRUE if we can join against the map table otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'connectionnotdefinedexception' => 'Drupal\\Core\\Database\\ConnectionNotDefinedException',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'sql' => 'Drupal\\migrate\\Plugin\\migrate\\id_map\\Sql',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'requirementsinterface' => 'Drupal\\migrate\\Plugin\\RequirementsInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
         'functionName' => 'mapJoinable',
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