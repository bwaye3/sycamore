<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityReferenceSelection/SelectionWithAutocreateInterface.php-1624732867',
   'data' => 
  array (
    '77ab83ff46a011c04e01757687c9e68a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for Selection plugins that support newly created entities.
 *
 * @see \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManager
 * @see \\Drupal\\Core\\Entity\\Annotation\\EntityReferenceSelection
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
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
    'c0624e0cb68abe3881632544de09b8a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new entity object that can be used as a valid reference.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   * @param string $bundle
   *   The bundle name.
   * @param string $label
   *   The entity label.
   * @param int $uid
   *   The entity owner ID, if the entity type supports it.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   An unsaved entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
         'functionName' => 'createNewEntity',
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
    '6def1064b21127d1fcc35448eb6618b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates which newly created entities can be referenced.
   *
   * This method should replicate the logic implemented by
   * \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface::validateReferenceableEntities(),
   * but applied to newly created entities that have not been saved yet.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   An array of entities to check.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   The incoming $entities parameter, filtered for valid entities. Array keys
   *   are preserved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionWithAutocreateInterface',
         'functionName' => 'validateReferenceableNewEntities',
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