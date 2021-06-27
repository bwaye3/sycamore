<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityTypeRepositoryInterface.php-1624732867',
   'data' => 
  array (
    'dcbad5c6577eb2a54e85abb57b246d14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for helper methods for loading entity types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeRepositoryInterface',
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
    'c808710f2f05ae5b602a0fc8931da8ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a list of entity type labels suitable for a Form API options list.
   *
   * @param bool $group
   *   (optional) Whether to group entity types by plugin group (e.g. \'content\',
   *   \'config\'). Defaults to FALSE.
   *
   * @return array
   *   An array of entity type labels, keyed by entity type name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeRepositoryInterface',
         'functionName' => 'getEntityTypeLabels',
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
    '263b0c2b263d51d6fd7928e83d1a4a6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type ID based on the class that is called on.
   *
   * Compares the class this is called on against the known entity classes
   * and returns the entity type ID of a direct match or a subclass as fallback,
   * to support entity type definitions that were altered.
   *
   * @param string $class_name
   *   Class name to use for searching the entity type ID.
   *
   * @return string
   *   The entity type ID.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\AmbiguousEntityClassException
   *   Thrown when multiple subclasses correspond to the called class.
   * @throws \\Drupal\\Core\\Entity\\Exception\\NoCorrespondingEntityClassException
   *   Thrown when no entity class corresponds to the called class.
   *
   * @see \\Drupal\\Core\\Entity\\Entity::load()
   * @see \\Drupal\\Core\\Entity\\Entity::loadMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeRepositoryInterface',
         'functionName' => 'getEntityTypeFromClass',
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
    '4e806eaa390593524f189c1f8b5e356d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clear the static cache.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeRepositoryInterface',
         'functionName' => 'clearCachedDefinitions',
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