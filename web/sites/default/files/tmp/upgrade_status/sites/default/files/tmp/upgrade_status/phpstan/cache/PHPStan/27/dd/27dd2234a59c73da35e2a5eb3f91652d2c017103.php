<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorage.php-1624732867',
   'data' => 
  array (
    '497507c83f5d0f0d57c68719a04d88fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the storage class for configuration entities.
 *
 * Configuration object names of configuration entities are comprised of two
 * parts, separated by a dot:
 * - config_prefix: A string denoting the owner (module/extension) of the
 *   configuration object, followed by arbitrary other namespace identifiers
 *   that are declared by the owning extension; e.g., \'node.type\'. The
 *   config_prefix does NOT contain a trailing dot. It is defined by the entity
 *   type\'s annotation.
 * - ID: A string denoting the entity ID within the entity type namespace; e.g.,
 *   \'article\'. Entity IDs may contain dots/periods. The entire remaining string
 *   after the config_prefix in a config name forms the entity ID. Additional or
 *   custom suffixes are not possible.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '77e7de801d48d9120a7b4e747ee7d333' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Length limit of the configuration entity ID.
   *
   * Most file systems limit a file name\'s length to 255 characters, so
   * ConfigBase::MAX_NAME_LENGTH restricts the full configuration object name
   * to 250 characters (leaving 5 for the file extension). The config prefix
   * is limited by ConfigEntityType::PREFIX_LENGTH to 83 characters, so this
   * leaves 166 remaining characters for the configuration entity ID, with 1
   * additional character needed for the joining dot.
   *
   * @see \\Drupal\\Core\\Config\\ConfigBase::MAX_NAME_LENGTH
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityType::PREFIX_LENGTH
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '1d38bbe19d83e9d2d3e43d1c636e74e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '1a92c71ebf408eff6460825673d75650' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config factory service.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    'f76b183140e08cc7ff3592f14da14109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config storage service.
   *
   * @var \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '3f23eb3745ecf0e1e2376fecee5f0a16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    'f3b70c7d30fd8f6cb07c388d390429af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache of entities, keyed first by entity ID, then by an extra key.
   *
   * The additional cache key is to maintain separate caches for different
   * states of config overrides.
   *
   * @var array
   * @see \\Drupal\\Core\\Config\\ConfigFactoryInterface::getCacheKeys().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '62fa2e7e7d540df640ba76148758c587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the underlying configuration is retrieved override free.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '8441189e822b32a3d98d37b9bd565a58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ConfigEntityStorage object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The config factory service.
   * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid_service
   *   The UUID service.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface|null $memory_cache
   *   The memory cache backend.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '90f7848e21d98ec7bf146f1784ebe4d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '2d80cd4c897afc1e7916edaebe122b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'loadRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '92d37a0444bb427b37e83f7b85a4ccbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'deleteRevision',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '92dc7a33a39c2557ef3842b0ac56ddb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the prefix used to create the configuration name.
   *
   * The prefix consists of the config prefix from the entity type plus a dot
   * for separating from the ID.
   *
   * @return string
   *   The full configuration prefix, for example \'views.view.\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'getPrefix',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e880c9d96c3130adc5c0abcfa2267b2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'getIDFromConfigName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a5cd9fb23503fd57dae88451a9538f16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '23b712e51f40ac244c7681d26c2b8f8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\Config[] $configs */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    'f2f3f753d911d71b7b257d04e3fd824b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'doCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1c2092d99548e4d0cae1896426a7ead9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'doDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f9765579e6a064a687156279969c7e3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements Drupal\\Core\\Entity\\EntityStorageInterface::save().
   *
   * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
   *   When attempting to save a configuration entity that has no ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '356383fd614224df70fddabcfeb1ef0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'doSave',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'be7a564f1ed1a7865dbeff2fe9d18287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Maps from an entity object to the storage record.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity object.
   *
   * @return array
   *   The record to store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    'b6ba828b1f788f3deb7e9694f5284f60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    'ea89ae657a5bd25b269e24054689d44e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'hasData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9d5f8a7777a069e295272eae75cad7ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'buildCacheId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cacbb3c09c84f7a1128b788c894d7585' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes a hook on behalf of the entity.
   *
   * @param $hook
   *   One of \'presave\', \'insert\', \'update\', \'predelete\', or \'delete\'.
   * @param $entity
   *   The entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'invokeHook',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c2c2f1725e71a3d4f5559dcb9e3d5cf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
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
    '65ffa6f7bab780f2dddc3a6527a387f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'importCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7c8f89361560b00282b9e73f8e8a9f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'importUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '713c68bca7d0d4e832d50bdd542edd24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'importDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9164d53d47bc7323046eb8a7fd41e895' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'importRename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a698eb524a6b1a07d07e8553bdcedade' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'createFromStorageRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd8cc670cf254e54bc91b44e1586adfed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helps create a configuration entity from storage values.
   *
   * Allows the configuration entity storage to massage storage values before
   * creating an entity.
   *
   * @param array $values
   *   The array of values from the configuration storage.
   * @param bool $is_syncing
   *   Is the configuration entity being created as part of a config sync.
   *
   * @return \\Drupal\\Core\\Config\\ConfigEntityInterface
   *   The configuration entity.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface::createFromStorageRecord()
   * @see \\Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface::importCreate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => '_doCreateFromStorageRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '04f13fe168cfdd822fa6ac60e6c66bae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'updateFromStorageRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '39c20ea002994edf88740d7caaa87c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'updateFromStorageRecord',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd800aa90a283127fb002e41972d3ec1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'loadOverrideFree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5df5bf2dd07762ce12a4d3655b1047df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configimporterexception' => 'Drupal\\Core\\Config\\ConfigImporterException',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystoragebase' => 'Drupal\\Core\\Entity\\EntityStorageBase',
          'config' => 'Drupal\\Core\\Config\\Config',
          'configentityidlengthexception' => 'Drupal\\Core\\Config\\Entity\\Exception\\ConfigEntityIdLengthException',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
         'functionName' => 'loadMultipleOverrideFree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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