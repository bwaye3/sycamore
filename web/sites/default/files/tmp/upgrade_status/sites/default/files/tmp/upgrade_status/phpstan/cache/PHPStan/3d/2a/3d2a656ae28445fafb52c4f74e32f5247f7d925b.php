<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/SqlContentEntityStorage.php-1624732867',
   'data' => 
  array (
    'cabce0c690f0bedc655597b422b02c72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A content entity database storage implementation.
 *
 * This class can be used as-is by most content entity types. Entity types
 * requiring special handling can extend the class.
 *
 * The class uses \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema
 * internally in order to automatically generate the database schema based on
 * the defined base fields. Entity types can override the schema handler to
 * customize the generated schema; e.g., to add additional indexes.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'ed07a2e44e1ab34694822b5a9af11585' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type\'s field storage definitions.
   *
   * @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '708ed963156d2ab8acffaee31cf50b96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The mapping of field columns to SQL tables.
   *
   * @var \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '6cb657e1de72890845a07478dfb7d98a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of entity\'s revision database table field, if it supports revisions.
   *
   * Has the value FALSE if this entity does not use revisions.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'e8bd3a5e003ee50fe71d94beead48784' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity langcode key.
   *
   * @var string|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'cd14db27fd3ebefbcde4cd9bf2310a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default language entity key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '8b9344660c461c0e4c69e4ca5ed55b46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The base table of the entity.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'ed7eb83fceab0b0f7e890f88274c309a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table that stores revisions, if the entity supports revisions.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '1785b39c36e5c43dcb111dfd3cb8589c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table that stores properties, if the entity has multilingual support.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '32f5fec957c9258ce80f31ef89680cdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table that stores revision field data if the entity supports revisions.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '2fdd989da3da43a398b34980b1c0f1d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Active database connection.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'd1ec6346f0679b4fcea0fcd1c9b1db81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type\'s storage schema object.
   *
   * @var \\Drupal\\Core\\Entity\\Schema\\EntityStorageSchemaInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '64e242a88a0bf07d9b656f0b8c1318d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '88938d019c960ec405b8816e6b877d17' => 
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
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'ab8e88526efd5150397122dcbd8c7b54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this storage should use the temporary table mapping.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'f18cbbc6510fdea75257c5a2eaff91c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'createInstance',
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
    '67977dfb75c46b436227fa78ec38e999' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the base field definitions for a content entity type.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
   *   The array of base field definitions for the entity type, keyed by field
   *   name.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getActiveFieldStorageDefinitions()
   *   instead.
   *
   * @see https://www.drupal.org/node/3040966
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getFieldStorageDefinitions',
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
    '84df99c062950c9e2525b93c1e68ea31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a SqlContentEntityStorage object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Database\\Connection $database
   *   The database connection to be used.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend to be used.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface|null $memory_cache
   *   The memory cache backend to be used.
   * @param \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity type bundle info.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '4783623031f9d8cb72a810ab32408619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes table name variables.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'initTableLayout',
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
    'b6f83f6d02b2ef9374f8540d150d89b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the base table name.
   *
   * @return string
   *   The table name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getBaseTable',
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
    '211b3ebe64b212f79cf143f56c9f9dbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the revision table name.
   *
   * @return string|false
   *   The table name or FALSE if it is not available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getRevisionTable',
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
    '9a94f23eb5f248eb9b662596dcae3e84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data table name.
   *
   * @return string|false
   *   The table name or FALSE if it is not available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getDataTable',
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
    '3b18853b9ab5b2f3013c131bf686252c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the revision data table name.
   *
   * @return string|false
   *   The table name or FALSE if it is not available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getRevisionDataTable',
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
    '6f837806959616be37fa87ad74a516b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type\'s storage schema object.
   *
   * @return \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema
   *   The schema object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getStorageSchema',
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
    '373022460fba8164879516cc70e9ad88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the wrapped entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The update entity type.
   *
   * @internal Only to be used internally by Entity API. Expected to be
   *   removed by https://www.drupal.org/node/2274017.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'setEntityType',
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
    '4c25dfe0824ac0263666e1a9bd3d005f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the internal list of field storage definitions.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   An array of field storage definitions.
   *
   * @internal Only to be used internally by Entity API.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'setFieldStorageDefinitions',
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
    '5affb00c412615f5929f87f56b801d6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the wrapped table mapping definition.
   *
   * @param \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface $table_mapping
   *   The table mapping.
   *
   * @internal Only to be used internally by Entity API. Expected to be removed
   *   by https://www.drupal.org/node/2554235.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'setTableMapping',
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
    '7f9d2545ad192adce73ba031ff9949e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes the temporary state of the storage.
   *
   * @param bool $temporary
   *   Whether to use a temporary table mapping or not.
   *
   * @internal Only to be used internally by Entity API.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'setTemporary',
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
    'b6dd4e3e613b3c84523667fe7e39ba78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'de1e6e7fcebf56f33f3d638095cda420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a table mapping for the specified entity type and storage definitions.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type
   *   An entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $storage_definitions
   *   An array of field storage definitions to be used to compute the table
   *   mapping.
   * @param string $prefix
   *   (optional) A prefix to be used by all the tables of this mapping.
   *   Defaults to an empty string.
   *
   * @return \\Drupal\\Core\\Entity\\Sql\\TableMappingInterface
   *   A table mapping object for the entity\'s tables.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getCustomTableMapping',
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
    '12337d730aa7a117a904cd8a87a76a41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doLoadMultiple',
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
    '45e82727adfdb8c7e64c7741214a1c24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets entities from the storage.
   *
   * @param array|null $ids
   *   If not empty, return entities that match these IDs. Return all entities
   *   when NULL.
   *
   * @return \\Drupal\\Core\\Entity\\ContentEntityInterface[]
   *   Array of entities from the storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getFromStorage',
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
    '2c9c167bcdc0f6aaf9682f4f942d3621' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps from storage records to entity objects, and attaches fields.
   *
   * @param array $records
   *   Associative array of query results, keyed on the entity ID or revision
   *   ID.
   * @param bool $load_from_revision
   *   (optional) Flag to indicate whether revisions should be loaded or not.
   *   Defaults to FALSE.
   *
   * @return array
   *   An array of entity objects implementing the EntityInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'mapFromStorageRecords',
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
    '333b2f0377cddcf8e380b73fbe878872' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads values for fields stored in the shared data tables.
   *
   * @param array &$values
   *   Associative array of entities values, keyed on the entity ID or the
   *   revision ID.
   * @param array &$translations
   *   List of translations, keyed on the entity ID.
   * @param bool $load_from_revision
   *   Flag to indicate whether revisions should be loaded or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'loadFromSharedTables',
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
    '8f8cdbce41681518df209b358028572e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doLoadRevisionFieldItems',
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
    '47daa91d1a9860acc0bab04eb16812b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doLoadMultipleRevisionsFieldItems',
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
    '63022254f242dd5e4476097b1ddd3f99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doDeleteRevisionFieldItems',
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
    'ec7b470f680cc580199829a5744d5318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'buildPropertyQuery',
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
    '85d150e430b33b8f1415354e1b4e7555' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the query to load the entity.
   *
   * This has full revision support. For entities requiring special queries,
   * the class can be extended, and the default query can be constructed by
   * calling parent::buildQuery(). This is usually necessary when the object
   * being loaded needs to be augmented with additional data from another
   * table, such as loading vocabulary machine name into terms, however it
   * can also support $conditions on different tables.
   *
   * @param array|null $ids
   *   An array of entity IDs, or NULL to load all entities.
   * @param array|bool $revision_ids
   *   The IDs of the revisions to load, or FALSE if this query is asking for
   *   the default revisions. Defaults to FALSE.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   A SelectQuery object for loading the entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'buildQuery',
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
    'f84c911b50f9c4fc09e5b950cbb59fb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'delete',
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
    '1609d7f36a041a0b555fc1aac4d4e203' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doDeleteFieldItems',
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
    '7a0d40fac133b98f45bbd69aaf63c140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'save',
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
    '9c4de0fb11646460a3181d21d79365f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'restore',
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
    '21abcd1155af75764ecec43a77ddc3c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'restore',
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
    'e43bbf6e68f7ebcd4e4707bec1b93351' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'doSaveFieldItems',
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
    'e8fcbacfefbc73025836bb1bb77578f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'has',
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
    'ae25fb5d8bddf99ae2332deeeac3320c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves fields that use the shared tables.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity object.
   * @param string $table_name
   *   (optional) The table name to save to. Defaults to the data table.
   * @param bool $new_revision
   *   (optional) Whether we are dealing with a new revision. By default fetches
   *   the information from the entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'saveToSharedTables',
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
    '6d27c0a6254fef9083e27c024a9938d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps from an entity object to the storage record.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity object.
   * @param string $table_name
   *   (optional) The table name to map records to. Defaults to the base table.
   *
   * @return object
   *   The record to store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'mapToStorageRecord',
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
    '24b6e7ef3dd6d875eb635beca6ac0b4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a field column should be treated as serial.
   *
   * @param $table_name
   *   The name of the table the field column belongs to.
   * @param $schema_name
   *   The schema name of the field column.
   *
   * @return bool
   *   TRUE if the column is serial, FALSE otherwise.
   *
   * @see \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema::processBaseTable()
   * @see \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageSchema::processRevisionTable()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'isColumnSerial',
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
    '359f37a1c684d86982c892a8b475179a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps from an entity object to the storage record of the field data.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity object.
   * @param string $table_name
   *   (optional) The table name to map records to. Defaults to the data table.
   *
   * @return object
   *   The record to store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'mapToDataStorageRecord',
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
    'c2d51922b7fa8a1a98871f195f70b360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves an entity revision.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity object.
   *
   * @return int
   *   The revision id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'saveRevision',
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
    'e83193c62de1966fe338ceb1ea544ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'getQueryServiceName',
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
    'bdc11017a6fe6e115c8ed9911ba452c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads values of fields stored in dedicated tables for a group of entities.
   *
   * @param array &$values
   *   An array of values keyed by entity ID.
   * @param bool $load_from_revision
   *   Flag to indicate whether revisions should be loaded or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'loadFromDedicatedTables',
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
    'd8795caac7e2dd4e9a54b82642bef068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves values of fields that use dedicated tables.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity.
   * @param bool $update
   *   TRUE if the entity is being updated, FALSE if it is being inserted.
   * @param string[] $names
   *   (optional) The names of the fields to be stored. Defaults to all the
   *   available fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'saveToDedicatedTables',
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
    'f4277eaac31f5256546c52277f4501cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes values of fields in dedicated tables for all revisions.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'deleteFromDedicatedTables',
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
    '0a0d4604a26e2f999d89959b580a49b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes values of fields in dedicated tables for all revisions.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   The entity. It must have a revision ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'deleteRevisionFromDedicatedTables',
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
    'c72130152c55cf548f53800a525cead8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'db947fff6d370096fc5a6616d001f87c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'e86a30ea3fc7e7f4361f85711eac58a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '551f60c82efe79b96da7c08aada5b802' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '255f7fa4ae014ab67811ec48bf79b488' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '1593a25a62668700bda5098f6ea033c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'f8c5e7605ea2dd1ce42a3e7b7c3d8c99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'a382e340769d9419f246897d518dfc0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '2c6013cab142dd92134a64c541c2970d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '16775dc1ed0a425e38a52a8ae7d8e842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'c431e8bf0411a93efbbdf608b6d72b44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    'c8732ecab6fcf92ce462e97693cde3fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '151363d26b2cc7ec108103cc1c8764b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps a database schema exception into an entity storage exception.
   *
   * @param callable $callback
   *   The callback to be executed.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   When a database schema exception is thrown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'wrapSchemaException',
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
    '2f754346242a38243ca36b71af1900d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'onFieldDefinitionDelete',
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
    '79bffdd62b5077ad11857c054e0518f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'onBundleCreate',
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
    'e47e4f47a9c273aa7e9ff2c753bfb771' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'onBundleDelete',
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
    'be82c2638baaf1df20e7f97bb1ceab0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'readFieldItemsToPurge',
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
    'c465675f2aa6c2d86353f8922b2a95a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'purgeFieldItems',
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
    'd812b5c767d7ec0a0ca20bdba70f1300' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
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
    '0c3e8f17bcca182feb08a41a90c4ac47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'countFieldData',
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
    'a9ed5d70bff6036d152230d293e1be73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the passed field has been already deleted.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   *
   * @return bool
   *   Whether the field has been already deleted.
   *
   * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::isDeleted() instead.
   *
   * @see https://www.drupal.org/node/2907785
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaexception' => 'Drupal\\Core\\Database\\SchemaException',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'contententitystoragebase' => 'Drupal\\Core\\Entity\\ContentEntityStorageBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitybundlelistenerinterface' => 'Drupal\\Core\\Entity\\EntityBundleListenerInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'queryinterface' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
          'dynamicallyfieldableentitystorageschemainterface' => 'Drupal\\Core\\Entity\\Schema\\DynamicallyFieldableEntityStorageSchemaInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
         'functionName' => 'storageDefinitionIsDeleted',
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