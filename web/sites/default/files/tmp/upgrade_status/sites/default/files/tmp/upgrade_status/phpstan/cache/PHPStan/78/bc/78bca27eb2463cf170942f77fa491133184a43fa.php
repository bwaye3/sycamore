<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Query/Merge.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Query/QueryConditionTrait.php-1624732867',
   'data' => 
  array (
    '1928068a4dee98aebe00be1a057d14cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * General class for an abstracted MERGE query operation.
 *
 * An ANSI SQL:2003 compatible database would run the following query:
 *
 * @code
 * MERGE INTO table_name_1 USING table_name_2 ON (condition)
 *   WHEN MATCHED THEN
 *   UPDATE SET column1 = value1 [, column2 = value2 ...]
 *   WHEN NOT MATCHED THEN
 *   INSERT (column1 [, column2 ...]) VALUES (value1 [, value2 ...
 * @endcode
 *
 * Other databases (most notably MySQL, PostgreSQL and SQLite) will emulate
 * this statement by running a SELECT and then INSERT or UPDATE.
 *
 * By default, the two table names are identical and they are passed into the
 * the constructor. table_name_2 can be specified by the
 * MergeQuery::conditionTable() method. It can be either a string or a
 * subquery.
 *
 * The condition is built exactly like SelectQuery or UpdateQuery conditions,
 * the UPDATE query part is built similarly like an UpdateQuery and finally the
 * INSERT query part is built similarly like an InsertQuery. However, both
 * UpdateQuery and InsertQuery has a fields method so
 * MergeQuery::updateFields() and MergeQuery::insertFields() needs to be called
 * instead. MergeQuery::fields() can also be called which calls both of these
 * methods as the common case is to use the same column-value pairs for both
 * INSERT and UPDATE. However, this is not mandatory. Another convenient
 * wrapper is MergeQuery::key() which adds the same column-value pairs to the
 * condition and the INSERT query part.
 *
 * Several methods (key(), fields(), insertFields()) can be called to set a
 * key-value pair for the INSERT query part. Subsequent calls for the same
 * fields override the earlier ones. The same is true for UPDATE and key(),
 * fields() and updateFields().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '8c273003f22e5783251ee6febee14584' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an implementation of ConditionInterface.
 *
 * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'dbc8e8cb57af4a6f42fed3e2e1f389d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The condition object for this query.
   *
   * Condition handling is handled via composition.
   *
   * @var \\Drupal\\Core\\Database\\Query\\Condition
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '09d7d2931a8109fdb51595b5a579ccb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '4d47ebac01c94f973c5a05ff37836fd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'isNull',
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
    '019fe178c6abf8d0c8eee552f5d98f38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'isNotNull',
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
    'ea7dd3f16670bdeeecd731dd222e3730' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'exists',
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
    'e0dec6ef0c3dcafecf76f76068f477f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'notExists',
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
    'e7b7a2fdf4299e27cda58918ca76a3a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'alwaysFalse',
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
    '438eb1a981090a8fd1a87f77b51a3939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'conditions',
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
    '962ee52800175cf80537e7dc4ccf325f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'arguments',
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
    '5b833f01e22caf74717a8181ff5c3d80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'where',
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
    '3762861f8aa1a25e48839110e141687f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'compile',
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
    'b710a3efcfb2c3b223e36638d4638338' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'compiled',
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
    '0f3fc3273b823537c190c71233642bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'conditionGroupFactory',
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
    '70d29edcece8cf331e99c79a47993e31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'andConditionGroup',
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
    '895a61d3af5216ebb10924173e39be8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'orConditionGroup',
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
    '86118aee1f13da278c13a15eea50ae5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returned by execute() if an INSERT query has been executed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'c90418f707017f8e354e5a05dc8f839e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returned by execute() if an UPDATE query has been executed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'c7694df288776b3103b627863f981a56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table to be used for INSERT and UPDATE.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'b953a0d08e2c41cf225ac84c8f9a6e41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table or subquery to be used for the condition.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'b7e7606bbb969716c6d2c5f1c4987d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of fields on which to insert.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '5729c89e71126500bb4d76f1a0ea7354' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of fields which should be set to their database-defined defaults.
   *
   * Used on INSERT.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'c0f02e30ab76f0582e918cac65a25e5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of values to be inserted.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '710304fbaded1d85e7b41b3851dc8ee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of fields that will be updated.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '922f6d3308487c4e6f4eb97ccecd4671' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Array of fields to update to an expression in case of a duplicate record.
   *
   * This variable is a nested array in the following format:
   * @code
   * <some field> => array(
   *  \'condition\' => <condition to execute, as a string>,
   *  \'arguments\' => <array of arguments for condition, or NULL for none>,
   * );
   * @endcode
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'f635dbdd1181a948d3243ce0f57068f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether an UPDATE is necessary.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    'bdfba86888c17f57020f45e164a0902f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a Merge object.
   *
   * @param \\Drupal\\Core\\Database\\Connection $connection
   *   A Connection object.
   * @param string $table
   *   Name of the table to associate with this query.
   * @param array $options
   *   Array of database options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
    '1716afe580854ee801eea74175d67a1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the table or subquery to be used for the condition.
   *
   * @param $table
   *   The table name or the subquery to be used. Use a Select query object to
   *   pass in a subquery.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'conditionTable',
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
    'd3f96706d7b146b0086e3b1437b23679' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a set of field->value pairs to be updated.
   *
   * @param $fields
   *   An associative array of fields to write into the database. The array keys
   *   are the field names and the values are the values to which to set them.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'updateFields',
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
    '78a38f5a8f972704418d7ce323a084d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies fields to be updated as an expression.
   *
   * Expression fields are cases such as counter = counter + 1. This method
   * takes precedence over MergeQuery::updateFields() and its wrappers,
   * MergeQuery::key() and MergeQuery::fields().
   *
   * @param $field
   *   The field to set.
   * @param $expression
   *   The field will be set to the value of this expression. This parameter
   *   may include named placeholders.
   * @param $arguments
   *   If specified, this is an array of key/value pairs for named placeholders
   *   corresponding to the expression.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'expression',
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
    '35f726cf05ddd7dba19ae70875c22d9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a set of field->value pairs to be inserted.
   *
   * @param $fields
   *   An array of fields on which to insert. This array may be indexed or
   *   associative. If indexed, the array is taken to be the list of fields.
   *   If associative, the keys of the array are taken to be the fields and
   *   the values are taken to be corresponding values to insert. If a
   *   $values argument is provided, $fields must be indexed.
   * @param $values
   *   An array of fields to insert into the database. The values must be
   *   specified in the same order as the $fields array.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'insertFields',
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
    '89c7ef71b8b002d75471ba65bbe2b160' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies fields for which the database-defaults should be used.
   *
   * If you want to force a given field to use the database-defined default,
   * not NULL or undefined, use this method to instruct the database to use
   * default values explicitly. In most cases this will not be necessary
   * unless you are inserting a row that is all default values, as you cannot
   * specify no values in an INSERT query.
   *
   * Specifying a field both in fields() and in useDefaults() is an error
   * and will not execute.
   *
   * @param $fields
   *   An array of values for which to use the default values
   *   specified in the table definition.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'useDefaults',
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
    '206d65631e5cefe4cfefdaf9143d593f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets common field-value pairs in the INSERT and UPDATE query parts.
   *
   * This method should only be called once. It may be called either
   * with a single associative array or two indexed arrays. If called
   * with an associative array, the keys are taken to be the fields
   * and the values are taken to be the corresponding values to set.
   * If called with two arrays, the first array is taken as the fields
   * and the second array is taken as the corresponding values.
   *
   * @param $fields
   *   An array of fields to insert, or an associative array of fields and
   *   values. The keys of the array are taken to be the fields and the values
   *   are taken to be corresponding values to insert.
   * @param $values
   *   An array of values to set into the database. The values must be
   *   specified in the same order as the $fields array.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'fields',
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
    '9361ee5fb321fddf3887cc54e1c7ee5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the key fields to be used as conditions for this query.
   *
   * This method should only be called once. It may be called either
   * with a single associative array or two indexed arrays. If called
   * with an associative array, the keys are taken to be the fields
   * and the values are taken to be the corresponding values to set.
   * If called with two arrays, the first array is taken as the fields
   * and the second array is taken as the corresponding values.
   *
   * The fields are copied to the condition of the query and the INSERT part.
   * If no other method is called, the UPDATE will become a no-op.
   *
   * @param $fields
   *   An array of fields to set, or an associative array of fields and values.
   * @param $values
   *   An array of values to set into the database. The values must be
   *   specified in the same order as the $fields array.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'keys',
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
    '23e09c51eebe307662a29f435f5b54db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a single key field to be used as condition for this query.
   *
   * Same as \\Drupal\\Core\\Database\\Query\\Merge::keys() but offering a signature
   * that is more natural for the case of a single key.
   *
   * @param string $field
   *   The name of the field to set.
   * @param mixed $value
   *   The value to set into the database.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Database\\Query\\Merge::keys()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
         'functionName' => 'key',
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
    'deb2a941c14299b088d5ca66cd5953f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements PHP magic __toString method to convert the query to a string.
   *
   * In the degenerate case, there is no string-able query as this operation
   * is potentially two queries.
   *
   * @return string
   *   The prepared query statement.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'integrityconstraintviolationexception' => 'Drupal\\Core\\Database\\IntegrityConstraintViolationException',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\Merge',
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
  ),
));