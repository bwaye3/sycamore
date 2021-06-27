<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Database.php-1624732867',
   'data' => 
  array (
    '6af66f0499e76ae27a4a0485be6380fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Primary front-controller for the database system.
 *
 * This class is uninstantiatable and un-extendable. It acts to encapsulate
 * all control and shepherding of database connections into a single location
 * without the use of globals.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    '323c410df1a38904ba9d6d9fa7effa19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate a query call should simply return NULL.
   *
   * This is used for queries that have no reasonable return value anyway, such
   * as INSERT statements to a table without a serial primary key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    'c586e01a39761085c734cdbebbd97f1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate a query call should return the prepared statement.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    'e278e1d71048fc12b20e7bc7e7612a78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate a query call should return the number of affected rows.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    '21637a8c42993b2e10ab750130dc6c8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to indicate a query call should return the "last insert id".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    'a91dcb7a1414cbcbec7fe41b77076e89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An nested array of all active connections. It is keyed by database name
   * and target.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    '73b4925a9938b571be125fe0c4a7849a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A processed copy of the database connection information from settings.php.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    'b2a833a045f11eae3fb728cc72db1dfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of key/target credentials to simply ignore.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    '717b044ec0508d220cfbe27a8c55a131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key of the currently active database connection.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    '26b7986f9d21036ca2ac69d6fd6cf841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of active query log objects.
   *
   * Every connection has one and only one logger object for all targets and
   * logging keys.
   *
   * array(
   *   \'$db_key\' => DatabaseLog object.
   * );
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
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
    'b6830ea9cddad944f6975205afd5acda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Starts logging a given logging key on the specified connection.
   *
   * @param string $logging_key
   *   The logging key to log.
   * @param string $key
   *   The database connection key for which we want to log.
   *
   * @return \\Drupal\\Core\\Database\\Log
   *   The query log object. Note that the log object does support richer
   *   methods than the few exposed through the Database class, so in some
   *   cases it may be desirable to access it directly.
   *
   * @see \\Drupal\\Core\\Database\\Log
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'startLog',
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
    '056843b67464674992cc8818d9e8e97b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the queries logged on for given logging key.
   *
   * This method also ends logging for the specified key. To get the query log
   * to date without ending the logger request the logging object by starting
   * it again (which does nothing to an open log key) and call methods on it as
   * desired.
   *
   * @param string $logging_key
   *   The logging key to log.
   * @param string $key
   *   The database connection key for which we want to log.
   *
   * @return array
   *   The query log for the specified logging key and connection.
   *
   * @see \\Drupal\\Core\\Database\\Log
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getLog',
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
    'add226f63b6450272376b1a92fd88be6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the connection object for the specified database key and target.
   *
   * @param string $target
   *   The database target name.
   * @param string $key
   *   The database connection key. Defaults to NULL which means the active key.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The corresponding connection object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getConnection',
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
    '9fd54dc6388263a22f555d9e174035a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if there is an active connection.
   *
   * Note that this method will return FALSE if no connection has been
   * established yet, even if one could be.
   *
   * @return bool
   *   TRUE if there is at least one database connection established, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'isActiveConnection',
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
    'cc4645f120277ca6e9d2ad2902f1ac3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the active connection to the specified key.
   *
   * @return string|null
   *   The previous database connection key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'setActiveConnection',
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
    'ed228cde9531b9199ef02bf06597790e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process the configuration file for database information.
   *
   * @param array $info
   *   The database connection information, as defined in settings.php. The
   *   structure of this array depends on the database driver it is connecting
   *   to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'parseConnectionInfo',
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
    'b07aec326fb295b4a2f51bd2783aa274' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds database connection information for a given key/target.
   *
   * This method allows to add new connections at runtime.
   *
   * Under normal circumstances the preferred way to specify database
   * credentials is via settings.php. However, this method allows them to be
   * added at arbitrary times, such as during unit tests, when connecting to
   * admin-defined third party databases, etc.
   *
   * If the given key/target pair already exists, this method will be ignored.
   *
   * @param string $key
   *   The database key.
   * @param string $target
   *   The database target name.
   * @param array $info
   *   The database connection information, as defined in settings.php. The
   *   structure of this array depends on the database driver it is connecting
   *   to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'addConnectionInfo',
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
    '683ca2293371ed9a1874761ba37212a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets information on the specified database connection.
   *
   * @param string $key
   *   (optional) The connection key for which to return information.
   *
   * @return array|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getConnectionInfo',
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
    'f8a9bac0c53f5d1a29e5c801cce5cacb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets connection information for all available databases.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getAllConnectionInfo',
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
    '06d06cb243bef32a056e4c17f689a6c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets connection information for multiple databases.
   *
   * @param array $databases
   *   A multi-dimensional array specifying database connection parameters, as
   *   defined in settings.php.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'setMultipleConnectionInfo',
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
    '1954bbc2fe559ed19eaa30ad2a729aec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rename a connection and its corresponding connection information.
   *
   * @param string $old_key
   *   The old connection key.
   * @param string $new_key
   *   The new connection key.
   *
   * @return bool
   *   TRUE in case of success, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'renameConnection',
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
    'c508de04c3c39fccdc8544fc5417aed1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove a connection and its corresponding connection information.
   *
   * @param string $key
   *   The connection key.
   *
   * @return bool
   *   TRUE in case of success, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'removeConnection',
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
    '6e7842e19d7e36ef1c3b05d60b734d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Opens a connection to the server specified by the given key and target.
   *
   * @param string $key
   *   The database connection key, as specified in settings.php. The default is
   *   "default".
   * @param string $target
   *   The database target to open.
   *
   * @throws \\Drupal\\Core\\Database\\ConnectionNotDefinedException
   * @throws \\Drupal\\Core\\Database\\DriverNotSpecifiedException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'openConnection',
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
    'cdcbca42837380e3e40132627922744f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Closes a connection to the server specified by the given key and target.
   *
   * @param string $target
   *   The database target name.  Defaults to NULL meaning that all target
   *   connections will be closed.
   * @param string $key
   *   The database connection key. Defaults to NULL which means the active key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'closeConnection',
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
    '70a86269a8ab5490a520277802b2ea2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Instructs the system to temporarily ignore a given key/target.
   *
   * At times we need to temporarily disable replica queries. To do so, call this
   * method with the database key and the target to disable. That database key
   * will then always fall back to \'default\' for that key, even if it\'s defined.
   *
   * @param string $key
   *   The database connection key.
   * @param string $target
   *   The target of the specified key to ignore.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'ignoreTarget',
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
    'f9bacc0c0db8cb9ee2540ed2e8e36d98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a URL to a database connection info array.
   *
   * @param string $url
   *   The URL.
   * @param string $root
   *   The root directory of the Drupal installation.
   *
   * @return array
   *   The database connection info.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when the provided URL does not meet the minimum
   *   requirements.
   * @throws \\RuntimeException
   *   Exception thrown when a module provided database driver does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'convertDbUrlToConnectionInfo',
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
    '61a623a696df4a1b8a7c462937bc89cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the directory to add to the autoloader for the driver\'s namespace.
   *
   * For Drupal sites that manage their codebase with Composer, the package
   * that provides the database driver should add the driver\'s namespace to
   * Composer\'s autoloader. However, to support sites that add Drupal modules
   * without Composer, and because the database connection must be established
   * before Drupal adds the module\'s entire namespace to the autoloader, the
   * database connection info array can include an "autoload" key containing
   * the autoload directory for the driver\'s namespace. For requests that
   * connect to the database via a connection info array, the value of the
   * "autoload" key is automatically added to the autoloader.
   *
   * This method can be called to find the default value of that key when the
   * database connection info array isn\'t available. This includes:
   * - Console commands and test runners that connect to a database specified
   *   by a database URL rather than a connection info array.
   * - During installation, prior to the connection info array being written to
   *   settings.php.
   *
   * This method returns the directory that must be added to the autoloader for
   * the given namespace.
   * - If the namespace is a sub-namespace of a Drupal module, then this method
   *   returns the autoload directory for that namespace, allowing Drupal
   *   modules containing database drivers to be added to a Drupal website
   *   without Composer.
   * - If the namespace is a sub-namespace of Drupal\\Core or Drupal\\Driver,
   *   then this method returns FALSE, because Drupal core\'s autoloader already
   *   includes these namespaces, so no additional autoload directory is
   *   required for any code within them.
   * - If the namespace is anything else, then this method returns FALSE,
   *   because neither drupal_get_database_types() nor
   *   static::convertDbUrlToConnectionInfo() support that anyway. One can
   *   manually edit the connection info array in settings.php to reference
   *   any arbitrary namespace, but requests using that would use the
   *   corresponding \'autoload\' key in that connection info rather than calling
   *   this method.
   *
   * @param string $namespace
   *   The database driver\'s namespace.
   * @param string $root
   *   The root directory of the Drupal installation.
   *
   * @return string|false
   *   The PSR-4 directory to add to the autoloader for the namespace if the
   *   namespace is a sub-namespace of a Drupal module. FALSE otherwise, as
   *   explained above.
   *
   * @throws \\RuntimeException
   *   Exception thrown when a module provided database driver does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'findDriverAutoloadDirectory',
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
    '7302bd90d4487e5babb37e12aaa02692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets database connection info as a URL.
   *
   * @param string $key
   *   (Optional) The database connection key.
   *
   * @return string
   *   The connection info as a URL.
   *
   * @throws \\RuntimeException
   *   When the database connection is not defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getConnectionInfoAsUrl',
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
    '5c7eb41e15cbb93b9ae0f467802d0a98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the PHP namespace of a database driver from the connection info.
   *
   * @param array $connection_info
   *   The database connection information, as defined in settings.php. The
   *   structure of this array depends on the database driver it is connecting
   *   to.
   *
   * @return string
   *   The PHP namespace of the driver\'s database.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'getDatabaseDriverNamespace',
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
    'c959e0e39785acc3f97bfa6a4750ed5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a namespace is within the namespace of a Drupal module.
   *
   * This can be used to determine if a database driver\'s namespace is provided
   * by a Drupal module.
   *
   * @param string $namespace
   *   The namespace (for example, of a database driver) to check.
   *
   * @return bool
   *   TRUE if the passed in namespace is a sub-namespace of a Drupal module\'s
   *   namespace.
   *
   * @todo https://www.drupal.org/project/drupal/issues/3125476 Remove if we
   *   add this to the extension API or if
   *   \\Drupal\\Core\\Database\\Database::getConnectionInfoAsUrl() is removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Database\\Database',
         'functionName' => 'isWithinModuleNamespace',
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