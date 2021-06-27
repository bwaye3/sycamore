<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate_drupal/src/Plugin/MigrateCckFieldInterface.php-1624732868',
   'data' => 
  array (
    'c0efba27b6362c2d76741bcb79210f6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for all CCK field type plugins.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\migrate_drupal\\Annotation\\MigrateField instead.
 *
 * @see https://www.drupal.org/node/2751897
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\MigrateCckFieldInterface',
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
    'ef8f676f3fb23d708d0e0493da88c2f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Apply any custom processing to the cck bundle migrations.
   *
   * @param \\Drupal\\migrate\\Plugin\\MigrationInterface $migration
   *   The migration entity.
   * @param string $field_name
   *   The field name we\'re processing the value for.
   * @param array $data
   *   The array of field data from CckFieldValues::fieldData().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\MigrateCckFieldInterface',
         'functionName' => 'processCckFieldValues',
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