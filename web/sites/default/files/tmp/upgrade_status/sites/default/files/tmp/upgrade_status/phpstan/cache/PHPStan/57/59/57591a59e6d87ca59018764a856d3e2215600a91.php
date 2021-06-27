<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/SqlFieldableEntityTypeListenerTrait.php-1624732867',
   'data' => 
  array (
    'aee981d3b508b763dcb8783d0b93f5e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper methods for EntityTypeListenerInterface.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeListenerInterface
 *
 * @property \\Drupal\\Core\\Entity\\EntityTypeManagerInterface entityTypeManager
 * @property \\Drupal\\Core\\Database\\Connection database
 *
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
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
    '49172cdffa61dff278bec29db571a92c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'onFieldableEntityTypeUpdate',
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
    'a2a181a8f7c263bbb44365e8e7437f8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityStorageInterface $original_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'onFieldableEntityTypeUpdate',
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
    'b144d9a3f3fda956c8d8a8b78aa8d093' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows subscribers to prepare their schema before data copying.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   The updated field storage definitions, including possibly new ones.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $original_field_storage_definitions
   *   The original field storage definitions.
   * @param array &$sandbox
   *   (optional) A sandbox array provided by a hook_update_N() implementation
   *   or a Batch API callback. If the entity schema update requires a data
   *   migration, this parameter is mandatory. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'preUpdateEntityTypeSchema',
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
    '994967c01d8e708a71547ad786174640' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows subscribers to do any cleanup necessary after data copying.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   The updated field storage definitions, including possibly new ones.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $original_field_storage_definitions
   *   The original field storage definitions.
   * @param array &$sandbox
   *   (optional) A sandbox array provided by a hook_update_N() implementation
   *   or a Batch API callback. If the entity schema update requires a data
   *   migration, this parameter is mandatory. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'postUpdateEntityTypeSchema',
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
    '0fadb9ccbf368bd711362c3f62c40b76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies entity data from the original storage to the temporary one.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   The updated field storage definitions, including possibly new ones.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $original_field_storage_definitions
   *   The original field storage definitions.
   * @param array &$sandbox
   *   The sandbox array from a hook_update_N() implementation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'copyData',
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
    '9210e40a6128f6e762c8f7a5cc0dc399' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'copyData',
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
    '51a7a2aff10e6f8f4cef19981ddc4bf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'copyData',
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
    '7fcef5370a8d0f7cff5769825f39c9be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage $temporary_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'copyData',
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
    '592e5f34171e5917c591073019e67272' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles the case when an error occurs during the data copying step.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The original entity type definition.
   * @param array &$sandbox
   *   The sandbox array from a hook_update_N() implementation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlFieldableEntityTypeListenerTrait',
         'functionName' => 'handleEntityTypeSchemaUpdateExceptionOnDataCopy',
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