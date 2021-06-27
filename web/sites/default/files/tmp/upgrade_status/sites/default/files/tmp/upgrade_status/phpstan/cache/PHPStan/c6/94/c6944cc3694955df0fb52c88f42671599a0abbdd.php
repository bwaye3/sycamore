<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Lock/DatabaseLockBackend.php-1624732867',
   'data' => 
  array (
    '07fa47508f01fae44d33a4f1e231130c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the database lock backend. This is the default backend in Drupal.
 *
 * @ingroup lock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
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
    '92bb7275fd86e7b2644d47adbcd1bc13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database table name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
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
    '7659342ab9e5651f1cdaadca9189a366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
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
    '86a3dc78195ef222feb58a455d1ce9ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new DatabaseLockBackend.
   *
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
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
    '6ca1356bc9635209e7b95b9b00ceb4a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'acquire',
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
    '7aa7dea72458f2c10a7645b1f687d45b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'lockMayBeAvailable',
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
    'e7431eb94ad0ad15915c30685cdcc6e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'release',
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
    '17fb503269c47b3d27f3f782f1b1d45b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'releaseAll',
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
    'cf2c421d423e1d8773563284a7182a95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if the semaphore table exists and create it if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'ensureTableExists',
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
    '41a020644914271025587135503f2dc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Act on an exception when semaphore might be stale.
   *
   * If the table does not yet exist, that\'s fine, but if the table exists and
   * yet the query failed, then the semaphore is stale and the exception needs
   * to propagate.
   *
   * @param $e
   *   The exception.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'catchException',
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
    '04708ec5f0a85580e798cb69710c21fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Normalizes a lock name in order to comply with database limitations.
   *
   * @param string $name
   *   The passed in lock name.
   *
   * @return string
   *   An ASCII-encoded lock name that is at most 255 characters long.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'normalizeName',
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
    '035da8380bb5c11bc2d7b882ae540bf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the schema for the semaphore table.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Lock\\DatabaseLockBackend',
         'functionName' => 'schemaDefinition',
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