<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/EntityUuidMapperInterface.php-1624732871',
   'data' => 
  array (
    '89215d452d5d2f5a3667e04ef78cec83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Maps entity UUIDs to entity IDs, and vice-versa.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\EntityUuidMapperInterface',
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
    '7f95198b8233cf7ac153bf8810992949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps the given entity UUIDs to entity IDs.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   * @param array $uuids
   *   THe entity UUIDs.
   *
   * @return array
   *   The entity IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\EntityUuidMapperInterface',
         'functionName' => 'mapToIds',
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
    '7de272c7e06eed04b213fceb1e1ce35e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps the given entity IDs to entity UUIDs.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   * @param array $ids
   *   THe entity IDs.
   *
   * @return array
   *   The entity UUIDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\EntityUuidMapperInterface',
         'functionName' => 'mapFromIds',
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