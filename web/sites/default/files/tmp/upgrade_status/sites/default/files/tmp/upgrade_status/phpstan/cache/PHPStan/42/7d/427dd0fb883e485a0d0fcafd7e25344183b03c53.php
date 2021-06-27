<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/SqlEntityStorageInterface.php-1624732867',
   'data' => 
  array (
    'a8f8be3d87bcea052efaf421aff303f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A common interface for SQL-based entity storage implementations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
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
    '630a250395cf3410c3d6419fa930d47a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a table mapping for the entity\'s SQL tables.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $storage_definitions
   *   (optional) An array of field storage definitions to be used to compute
   *   the table mapping. Defaults to the ones provided by the entity manager.
   *
   * @return \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
   *   A table mapping object for the entity\'s tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlEntityStorageInterface',
         'functionName' => 'getTableMapping',
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