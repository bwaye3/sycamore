<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/SqlContentEntityStorageSchema.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/SqlFieldableEntityTypeListenerTrait.php-1624732867',
   'data' => 
  array (
    'f2c40fbdf52f4768c8f40f01826a774d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a schema handler that supports revisionable, translatable entities.
 *
 * Entity types may extend this class and optimize the generated schema for all
 * entity base tables by overriding getEntitySchema() for cross-field
 * optimizations and getSharedTableFieldSchema() for optimizations applying to
 * a single field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '2a4c8ea88bec3a074258f4e23dc19ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides dependency injection friendly methods for serialization.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'b60e752e1f09f4a20ff644978a2c0bc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of service IDs keyed by property name used for serialization.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '4929b14ec3cc1305cd4365a19fbd20fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of entity type IDs keyed by the property name of their storages.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'c3865a6459d862cc4b46ee7499e35f81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => '__sleep',
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
    '918e73815274a02d57c29a5d1a031e74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => '__wakeup',
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
    '3f9893eb56af54e265e8c86603452486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => '__wakeup',
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
    '5bf21b19c2f91215e3400fb69caeafaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '21d2ce8af24e96b353023d8a8c84d618' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => '__get',
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
    '666cd888a2169e0c20bcec9294242d9b' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '1858191d40a60b0cd8544f8c6d49df0e' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '47e4dcbeb342aefd22eb1951df2dca5f' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'a2bd29e1b8d868d596799c1a79cd8cee' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '58002c95dd19b0158689386e7f4d4334' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '97d420f1714e64c823d0e626a2864e96' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '87da38c1df0128cb6293a78206a4a6c6' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '276b4e71fa4a8a149129fa6b05e61d0d' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '6ac78d860d9346d2557deaf5faae7535' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '84d1106e47bc114fc179576e0e9de01c' => 
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
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'd3ea293e15a5ec4eaa17597a835991ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'd162f32c51f5ae48e3eef03c0fe84154' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'f14a8386c1e9b6ddefb95eaae0ada558' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '4d2d7c51b01ed88c1c9982994d82315e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type this schema builder is responsible for.
   *
   * @var \\Drupal\\Core\\Entity\\ContentEntityTypeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'd86215954d1032ccfd897b531979fdc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The storage field definitions for this entity type.
   *
   * @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'c4926369ce3c937450d6d09c85053282' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The storage object for the given entity type.
   *
   * @var \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '6b47c3fcd7090fa196b04b2838550c04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A static cache of the generated schema array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '3280487b75238349d7a235e8b38efee5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection to be used.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '04262ded713809877655b1eafc5b775b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key-value collection for tracking installed storage schema.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '7437541e4068a20158ea4c8a70d4a97d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key-value collection for tracking entity update backup repository.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '8997dcd2ecca57a10c1d0e0efb985e0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The deleted fields repository.
   *
   * @var \\Drupal\\Core\\Field\\DeletedFieldsRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '52fa1fd55e90dff0ad51ebeca6862aa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a SqlContentEntityStorageSchema.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage $storage
   *   The storage of the entity type. This must be an SQL-based storage.
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database connection to be used.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '8b5f663078f032bd94c2437cc2d8aff6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the keyvalue collection for tracking the installed schema.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   *
   * @todo Inject this dependency in the constructor once this class can be
   *   instantiated as a regular entity handler:
   *   https://www.drupal.org/node/2332857.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'installedStorageSchema',
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
    '5ff960b2b6251827b72a5e4cda0e0a06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the deleted fields repository.
   *
   * @return \\Drupal\\Core\\Field\\DeletedFieldsRepositoryInterface
   *   The deleted fields repository.
   *
   * @todo Inject this dependency in the constructor once this class can be
   *   instantiated as a regular entity handler:
   *   https://www.drupal.org/node/2332857.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deletedFieldsRepository',
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
    '442665d85fddd4c5b91da75ef55bff85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the key/value collection for tracking the entity update backups.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   *   A key/value collection.
   *
   * @todo Inject this dependency in the constructor once this class can be
   *   instantiated as a regular entity handler.
   *   @see https://www.drupal.org/node/2332857
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'updateBackupRepository',
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
    '642e5a63861dc7255a4de8dfea78eb4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refreshes the table mapping with updated definitions.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   An entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]|null $storage_definitions
   *   (optional) An array of field storage definitions. Defaults to the last
   *   installed field storage definition.
   *
   * @return \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping
   *   A table mapping object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '91790a8a192ffe745c603764c684daff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'requiresEntityStorageSchemaChanges',
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
    '646c4a94b4663b99f74bb6a2bd53aacf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Detects whether there is a change in the shared table structure.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The new entity type.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The origin entity type.
   *
   * @return bool
   *   Returns TRUE if either the revisionable or translatable flag changes or
   *   a table has been renamed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'hasSharedTableStructureChange',
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
    '478c6ebce2122ebba01973ad0498bcb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Detects whether any table name got renamed in an entity type update.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The new entity type.
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $original
   *   The origin entity type.
   *
   * @return bool
   *   Returns TRUE if there have been changes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'hasSharedTableNameChanges',
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
    '30711612135143b1495ca008b79cb249' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'requiresFieldStorageSchemaChanges',
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
    '2982f6c6803b78ff5c592d0f6e0ad53b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the schema data for the given field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition. The field that must not have custom
   *   storage, i.e. the storage must take care of storing the field.
   *
   * @return array
   *   The schema data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getSchemaFromStorageDefinition',
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
    'ff0728b1fe6c202965a52675ce5da912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'requiresEntityDataMigration',
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
    '08dc87cd6b3c6ee25d6672bae8ea5179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'requiresFieldDataMigration',
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
    '551b99d58e35720921876cb01a892953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onEntityTypeCreate',
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
    'c7673c4c477fd14f6c1f773756e2f5d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onEntityTypeUpdate',
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
    '4e335bbbf46ce971974f117d55040ba5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onEntityTypeDelete',
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
    'de42b118c50d4b5653f33d72501bf829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onFieldableEntityTypeCreate',
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
    '01a67f1b2d4e7b9812edea177c2301b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '8d252560c50db446c5d6bba7a8307aa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '99a4067950b8b9b195cd3be32c1985bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'd8ecb49ca182539c7d4137f3f633e940' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $original_table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '6c557e8cfff891c9b8b71206c98c0379' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $new_table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '1d7c99fabc341e85fb174b96c68cb1ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $backup_table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    'b068cbf3770fd6e277ba0d66f636f88a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of table names for this entity type, field storage and mapping.
   *
   * The default table mapping does not return dedicated revision table names
   * for non-revisionable fields attached to revisionable entity types. Since
   * both the storage and the storage handlers expect them to be existing, the
   * missing table names need to be manually restored.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   An entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   An array of field storage definitions.
   * @param \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $table_mapping
   *   A table mapping.
   *
   * @return string[]
   *   An array of field table names.
   *
   * @todo Remove this once the behavior of the default table mapping, the
   *    storage handler, and the storage schema handler are reconciled in
   *    https://www.drupal.org/node/3113639.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getTableNames',
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
    '9fb19a717029b8dbf3763189ec294a6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
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
    '4bf4889e4a2e26550f0e2c302881adea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a string to be used as a prefix for a temporary table mapping object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   An entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   An array of field storage definitions.
   * @param string $first_prefix_part
   *   (optional) The first part of the prefix. Defaults to \'tmp_\'.
   *
   * @return string
   *   A temporary table mapping prefix.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getTemporaryTableMappingPrefix',
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
    '01828189a1c03f33aba8df041a5563a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onFieldStorageDefinitionCreate',
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
    '16efec439df28bca6b074bbb13c280d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onFieldStorageDefinitionUpdate',
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
    '4e4319efbd5529bafef709b81f49f638' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'onFieldStorageDefinitionDelete',
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
    '04d60f8fd284078bf90697b9901e186b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'finalizePurge',
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
    'a82beb9a22d66c0971bb274f9ec53586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a SELECT query suitable for inserting data into a dedicated table.
   *
   * @param string $table_name
   *   The entity table name to select from.
   * @param array $shared_table_field_columns
   *   An array of field column names for a shared table schema.
   * @param array $dedicated_table_field_columns
   *   An array of field column names for a dedicated table schema.
   * @param string $base_table
   *   (optional) The name of the base entity table. Defaults to NULL.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   A database select query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getSelectQueryForFieldStorageDeletion',
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
    '675dd3dcc205bd6349e228d307cab684' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that we are dealing with the correct entity type.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to be checked.
   *
   * @return bool
   *   TRUE if the entity type matches the current one.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'checkEntityType',
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
    '5ca537534dbb594400eb0f239a5086eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity schema for the specified entity type.
   *
   * Entity types may override this method in order to optimize the generated
   * schema of the entity tables. However, only cross-field optimizations should
   * be added here; e.g., an index spanning multiple fields. Optimizations that
   * apply to a single field have to be added via
   * SqlContentEntityStorageSchema::getSharedTableFieldSchema() instead.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type definition.
   * @param bool $reset
   *   (optional) If set to TRUE static cache will be ignored and a new schema
   *   array generation will be performed. Defaults to FALSE.
   *
   * @return array
   *   A Schema API array describing the entity schema, excluding dedicated
   *   field tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntitySchema',
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
    '2b47607d969091fbd6d8e2d968ea783a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping $table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntitySchema',
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
    '4260d83294cc4c63a6023e547ff0908a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of entity type tables.
   *
   * @param \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $table_mapping
   *   A table mapping object.
   *
   * @return array
   *   A list of entity type tables, keyed by table key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntitySchemaTables',
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
    'c013a6c1b169b7475786e0349326379b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping $table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntitySchemaTables',
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
    '8fe1dbf540644c45a5f27dd8c0b23b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets entity schema definitions for index and key definitions.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type definition.
   * @param array $schema
   *   The entity schema array.
   *
   * @return array
   *   A stripped down version of the $schema Schema API array containing, for
   *   each table, only the key and index definitions not derived from field
   *   storage definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntitySchemaData',
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
    '5a5d056f16a9c8649b1c3c850dad8fe3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an index schema array for a given field.
   *
   * @param string $field_name
   *   The name of the field.
   * @param array $field_schema
   *   The schema of the field.
   * @param string[] $column_mapping
   *   A mapping of field column names to database column names.
   *
   * @return array
   *   The schema definition for the indexes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldIndexes',
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
    'd09ebb88581adeb732472f7ffacf2a94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a unique key schema array for a given field.
   *
   * @param string $field_name
   *   The name of the field.
   * @param array $field_schema
   *   The schema of the field.
   * @param string[] $column_mapping
   *   A mapping of field column names to database column names.
   *
   * @return array
   *   The schema definition for the unique keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldUniqueKeys',
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
    '908ade612c68265a8234af605172986d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets field schema data for the given key.
   *
   * @param string $field_name
   *   The name of the field.
   * @param array $field_schema
   *   The schema of the field.
   * @param string[] $column_mapping
   *   A mapping of field column names to database column names.
   * @param string $schema_key
   *   The type of schema data. Either \'indexes\' or \'unique keys\'.
   *
   * @return array
   *   The schema definition for the specified key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldSchemaData',
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
    'eb36078b790f54bfbfd5e7457735273c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a safe schema identifier (name of an index, column name etc.).
   *
   * @param string $entity_type_id
   *   The ID of the entity type.
   * @param string $field_name
   *   The name of the field.
   * @param string|null $key
   *   (optional) A further key to append to the name.
   *
   * @return string
   *   The field identifier name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldSchemaIdentifierName',
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
    '9171f052d39c4344b51da5597a707ca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets field foreign keys.
   *
   * @param string $field_name
   *   The name of the field.
   * @param array $field_schema
   *   The schema of the field.
   * @param string[] $column_mapping
   *   A mapping of field column names to database column names.
   *
   * @return array
   *   The schema definition for the foreign keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldForeignKeys',
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
    '8d711de4e952e8a7f8ca66bc19ba0e1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads stored schema data for the given entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   *
   * @return array
   *   The entity schema data array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'loadEntitySchemaData',
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
    '899bc9bf81617f3bae9c59585efbdee7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores schema data for the given entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param array $schema
   *   The entity schema data array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'saveEntitySchemaData',
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
    '716561bf0f8c8efaf2e33f6838abc7a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes schema data for the given entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deleteEntitySchemaData',
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
    'd7b59a54e13305aa01c33e41732bd45c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads stored schema data for the given field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   *
   * @return array
   *   The field schema data array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'loadFieldSchemaData',
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
    '4610dbfa4dba65b235a0637a4a19b54d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores schema data for the given field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   * @param array $schema
   *   The field schema data array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'saveFieldSchemaData',
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
    '3c8811dbda377a5dc37842370ebe0ab5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes schema data for the given field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deleteFieldSchemaData',
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
    'ea9c591598ea27d76d37aae4196d6189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes common information for a base table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   A partial schema array for the base table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'initializeBaseTable',
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
    'f5fad9705936fccc46f10f74a8d94c73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes common information for a revision table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   A partial schema array for the revision table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'initializeRevisionTable',
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
    '0bee17daae0dacb05a8a51ea4ca8a48b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes common information for a data table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   A partial schema array for the data table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'initializeDataTable',
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
    '96b25d4979c725ef08aecf4328464d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes common information for a revision data table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   A partial schema array for the revision data table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'initializeRevisionDataTable',
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
    'dc374a72f22ada79d77feebea5cd8a32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds defaults to a table schema definition.
   *
   * @param $schema
   *   The schema definition array for a single table, passed by reference.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addTableDefaults',
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
    '4a4e959c8553d963c11684b040c0975c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the gathered schema for a base table.
   *
   * This function will be removed in Drupal 9.0.x.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param array $schema
   *   The table schema, passed by reference.
   *
   * @see https://www.drupal.org/node/3111613
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processBaseTable',
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
    '7314fafd6bd750debe83c10848a59443' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the gathered schema for a base table.
   *
   * This function will be removed in Drupal 9.0.x.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param array $schema
   *   The table schema, passed by reference.
   *
   * @see https://www.drupal.org/node/3111613
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processRevisionTable',
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
    'abc8fc659d033840d4d0882a7d6cdfa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the gathered schema for a base table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param array $schema
   *   The table schema, passed by reference.
   *
   * @return array
   *   A partial schema array for the base table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processDataTable',
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
    'ad23b75ba020df2fe5e62ef78e5928fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the gathered schema for a base table.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param array $schema
   *   The table schema, passed by reference.
   *
   * @return array
   *   A partial schema array for the base table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processRevisionDataTable',
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
    '98ccb9f16e816fb04532c88268943a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the specified entity key.
   *
   * @param array $schema
   *   The table schema, passed by reference.
   * @param string $key
   *   The entity key name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processIdentifierSchema',
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
    'edfc1bff6876737802741f6cea0ac87e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the schema for a field storage definition.
   *
   * @param array &$field_storage_schema
   *   An array that contains the schema data for a field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'processFieldStorageSchema',
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
    'ac0b4746aac34e852a29dc4b1c47da44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs the specified operation on a field.
   *
   * This figures out whether the field is stored in a dedicated or shared table
   * and forwards the call to the proper handler.
   *
   * @param string $operation
   *   The name of the operation to be performed.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
   *   (optional) The original field storage definition. This is relevant (and
   *   required) only for updates. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'performFieldSchemaOperation',
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
    '0bccf1471640580b4f1a4354b16ee4ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the schema for a field stored in a dedicated table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being created.
   * @param bool $only_save
   *   (optional) Whether to skip modification of database tables and only save
   *   the schema data for future comparison. For internal use only. This is
   *   used by postUpdateEntityTypeSchema() after it has already fully created
   *   the dedicated tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'createDedicatedTableSchema',
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
    '6c8dffb38fb82f56626de53cd9738e62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the schema for a field stored in a shared table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being created.
   * @param bool $only_save
   *   (optional) Whether to skip modification of database tables and only save
   *   the schema data for future comparison. For internal use only. This is
   *   used by onEntityTypeCreate() after it has already fully created the
   *   shared tables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'createSharedTableSchema',
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
    '260cb1eb2ff03b0f9db49155702e8ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the schema for a field stored in a dedicated table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deleteDedicatedTableSchema',
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
    '39c3ae377875a2a20152579cb6c11f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the schema for a field stored in a shared table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deleteSharedTableSchema',
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
    '84af4ecbc9c6788646051d57b0b2fa86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the schema for a field stored in a shared table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being updated.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
   *   The original storage definition; i.e., the definition before the update.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException
   *   Thrown when the update to the field is forbidden.
   * @throws \\Exception
   *   Rethrown exception if the table recreation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'updateDedicatedTableSchema',
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
    '0487a28309df8af4b462c019f94b9c5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the schema for a field stored in a shared table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field being updated.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
   *   The original storage definition; i.e., the definition before the update.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException
   *   Thrown when the update to the field is forbidden.
   * @throws \\Exception
   *   Rethrown exception if the table recreation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'updateSharedTableSchema',
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
    '03deea90beffe9572c97038c9f2cae86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the specified entity schema indexes and keys.
   *
   * @param array $entity_schema
   *   The entity schema definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface|null $storage_definition
   *   (optional) If a field storage definition is specified, only indexes and
   *   keys involving its columns will be processed. Otherwise all defined
   *   entity indexes and keys will be processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'createEntitySchemaIndexes',
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
    '40ca3e6d69cea3e437179c1306c2085f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the specified entity schema indexes and keys.
   *
   * @param array $entity_schema_data
   *   The entity schema data definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface|null $storage_definition
   *   (optional) If a field storage definition is specified, only indexes and
   *   keys involving its columns will be processed. Otherwise all defined
   *   entity indexes and keys will be processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'deleteEntitySchemaIndexes',
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
    '627b1ba8732308fd19cb533656bc9b06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a field property has NULL values.
   *
   * @param string $table_name
   *   The name of the table to inspect.
   * @param string $column_name
   *   The name of the column holding the field property data.
   *
   * @return bool
   *   TRUE if NULL data is found, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'hasNullFieldPropertyData',
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
    '3c7ab120260e853ec887f7a6a39f7144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the schema for a single field definition.
   *
   * Entity types may override this method in order to optimize the generated
   * schema for given field. While all optimizations that apply to a single
   * field have to be added here, all cross-field optimizations should be via
   * SqlContentEntityStorageSchema::getEntitySchema() instead; e.g.,
   * an index spanning multiple fields.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field whose schema has to be returned.
   * @param string $table_name
   *   The name of the table columns will be added to.
   * @param string[] $column_mapping
   *   A mapping of field column names to database column names.
   *
   * @return array
   *   The schema definition for the table with the following keys:
   *   - fields: The schema definition for the each field columns.
   *   - indexes: The schema definition for the indexes.
   *   - unique keys: The schema definition for the unique keys.
   *   - foreign keys: The schema definition for the foreign keys.
   *
   * @throws \\Drupal\\Core\\Field\\FieldException
   *   Exception thrown if the schema contains reserved column names or if the
   *   initial values definition is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getSharedTableFieldSchema',
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
    'f0bf307c3637781001324f967d63ce61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an index for the specified field to the given schema definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field for which an index should be added.
   * @param array $schema
   *   A reference to the schema array to be updated.
   * @param bool $not_null
   *   (optional) Whether to also add a \'not null\' constraint to the column
   *   being indexed. Doing so improves index performance. Defaults to FALSE,
   *   in case the field needs to support NULL values.
   * @param int $size
   *   (optional) The index size. Defaults to no limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addSharedTableFieldIndex',
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
    'e04f862f397570c9d03a8b83a7a7ee49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a unique key for the specified field to the given schema definition.
   *
   * Also adds a \'not null\' constraint, because many databases do not reliably
   * support unique keys on null columns.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field to which to add a unique key.
   * @param array $schema
   *   A reference to the schema array to be updated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addSharedTableFieldUniqueKey',
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
    '5882f3f0e368419ced79f05a5d98364b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a foreign key for the specified field to the given schema definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The storage definition of the field to which to add a foreign key.
   * @param array $schema
   *   A reference to the schema array to be updated.
   * @param string $foreign_table
   *   The foreign table.
   * @param string $foreign_column
   *   The foreign column.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addSharedTableFieldForeignKey',
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
    '9d3a2d0196a52a928b3d77468fba91c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the SQL schema for a dedicated table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   (optional) The entity type definition. Defaults to the one provided by
   *   the entity storage.
   *
   * @return array
   *   The schema definition for the table with the following keys:
   *   - fields: The schema definition for the each field columns.
   *   - indexes: The schema definition for the indexes.
   *   - unique keys: The schema definition for the unique keys.
   *   - foreign keys: The schema definition for the foreign keys.
   *
   * @throws \\Drupal\\Core\\Field\\FieldException
   *   Exception thrown if the schema contains reserved column names.
   *
   * @see hook_schema()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getDedicatedTableSchema',
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
    '847d1b3080de0da44433b6b3a00691a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name to be used for the given entity index.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   The entity type.
   * @param string $index
   *   The index column name.
   *
   * @return string
   *   The index name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getEntityIndexName',
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
    '2279fff99b4f9faaa8af61156605d165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates an index name for a field data table.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   * @param string $index
   *   The name of the index.
   *
   * @return string
   *   A string containing a generated index name for a field data table that is
   *   unique among all other fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getFieldIndexName',
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
    'c5e570a45a7bf185dd9319a92b56d633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a database table is non-existent or empty.
   *
   * Empty tables can be dropped and recreated without data loss.
   *
   * @param string $table_name
   *   The database table to check.
   *
   * @return bool
   *   TRUE if the table is empty, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'isTableEmpty',
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
    '0101c018c4fd60caa84c1419e3dc1aa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares schemas to check for changes in the column definitions.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   Current field storage definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
   *   The original field storage definition.
   *
   * @return bool
   *   Returns TRUE if there are schema changes in the column definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'hasColumnChanges',
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
    '6d4e003cf460add641736cad8a980c2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of column schema keys affecting data storage.
   *
   * When comparing schema definitions, only changes in certain properties
   * actually affect how data is stored and thus, if applied, may imply data
   * manipulation.
   *
   * @return string[]
   *   An array of key names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'getColumnSchemaRelevantKeys',
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
    'aeff96b76a127f852e1b0d697fac058b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an index, dropping it if already existing.
   *
   * @param string $table
   *   The table name.
   * @param string $name
   *   The index name.
   * @param array $specifier
   *   The fields to index.
   * @param array $schema
   *   The table specification.
   *
   * @see \\Drupal\\Core\\Database\\Schema::addIndex()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addIndex',
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
    'ecfc7cf405a63b0ce9feb39974124a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a unique key, dropping it if already existing.
   *
   * @param string $table
   *   The table name.
   * @param string $name
   *   The index name.
   * @param array $specifier
   *   The unique fields.
   *
   * @see \\Drupal\\Core\\Database\\Schema::addUniqueKey()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'addUniqueKey',
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
    '94eaa26ce29adf50e8af4b45535db141' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Typecasts values to proper datatypes.
   *
   * MySQL PDO silently casts, e.g. FALSE and \'\' to 0, when inserting the value
   * into an integer column, but PostgreSQL PDO does not. Use the schema
   * information to correctly typecast the value.
   *
   * @param array $info
   *   An array describing the schema field info. See hook_schema() and
   *   https://www.drupal.org/node/146843 for details.
   * @param mixed $value
   *   The value to be converted.
   *
   * @return mixed
   *   The converted value.
   *
   * @internal
   *
   * @see hook_schema()
   * @see https://www.drupal.org/node/146843
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'fieldstoragedefinitionupdateforbiddenexception' => 'Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema',
         'functionName' => 'castValue',
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