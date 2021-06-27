<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/ConfigBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/RefinableCacheableDependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/CacheableDependencyTrait.php-1624732867',
   'data' => 
  array (
    '31f7ff22e2e80faef4620fadb3622583' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for configuration objects with get/set support.
 *
 * Encapsulates all capabilities needed for runtime configuration handling for
 * a specific configuration object.
 *
 * Extend directly from this class for non-storable configuration where the
 * configuration API is desired but storage is not possible; for example, if
 * the data is derived at runtime. For storable configuration, extend
 * \\Drupal\\Core\\Config\\StorableConfigBase.
 *
 * @see \\Drupal\\Core\\Config\\StorableConfigBase
 * @see \\Drupal\\Core\\Config\\Config
 * @see \\Drupal\\Core\\Theme\\ThemeSettings
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '0deb0a3513fd577bcbbcf9beeae73afe' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'a29811d08b101bba0bf302c645aa6397' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'd52ab73d2b58ba1de486b4e5e03344f3' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'c247f57d9ca0fc15a276cd41d447c909' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'a2b8fa873a59511e2293c70f5bab9e46' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '7128e9e89210363cf7d0faa28988cdcb' => 
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
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '193938bad399236dd1a7463c159d9a96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '045711a3127449faebb56423f5f393cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\Core\\Cache\\CacheableDependencyInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '216d0cab3af3e847142ee662b90810f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache contexts.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '07b99e4ff5ac72b65777f76d6bb106f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache tags.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '9a75eceaebbd5066f3b10d8f7f11bdcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache max-age.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'cf49ad3f246cdec1f1a0bd4491a2bf68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets cacheability; useful for value object constructors.
   *
   * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface $cacheability
   *   The cacheability to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'setCacheability',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8d2b38402fa5081fcaebe9afe6c497e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2d5afb051af41777b7753baa03e3862f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5d80d250d7709aa2345a8ff8fd210e65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd18558129f5fefe61916f1cbd1c8daf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'addCacheableDependency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '91d9a5d97e3a859bab4e0d0f397932c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'addCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1628275f6811ef442a28113fdcc2abae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'addCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '139cedbd5f221e3686e5be395b51b167' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'mergeCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8d3b086cdd25c8a73fbde8f917d9bfa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the configuration object.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'debe27fed70297aeccb93a704b2a2c61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The data of the configuration object.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    '6588f4246aed1470609382bab4ac37fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum length of a configuration object name.
   *
   * Many filesystems (including HFS, NTFS, and ext4) have a maximum file name
   * length of 255 characters. To ensure that no configuration objects
   * incompatible with this limitation are created, we enforce a maximum name
   * length of 250 characters (leaving 5 characters for the file extension).
   *
   * @see http://wikipedia.org/wiki/Comparison_of_file_systems
   *
   * Configuration objects not stored on the filesystem should still be
   * restricted in name length so name can be used as a cache key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
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
    'e39f02992cf787c012be270dfba4481b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of this configuration object.
   *
   * @return string
   *   The name of the configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '585fab695ada7e3e72255b590d0057a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the name of this configuration object.
   *
   * @param string $name
   *   The name of the configuration object.
   *
   * @return $this
   *   The configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'setName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cd893cdd5a13868a00d957f5208cb03e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the configuration object name.
   *
   * @param string $name
   *   The name of the configuration object.
   *
   * @throws \\Drupal\\Core\\Config\\ConfigNameException
   *
   * @see Config::MAX_NAME_LENGTH
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'validateName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3c658cb90c7fa956c8eb771e3d8faf13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets data from this configuration object.
   *
   * @param string $key
   *   A string that maps to a key within the configuration data.
   *   For instance in the following configuration array:
   *   @code
   *   array(
   *     \'foo\' => array(
   *       \'bar\' => \'baz\',
   *     ),
   *   );
   *   @endcode
   *   A key of \'foo.bar\' would return the string \'baz\'. However, a key of \'foo\'
   *   would return array(\'bar\' => \'baz\').
   *   If no key is specified, then the entire data array is returned.
   *
   * @return mixed
   *   The data that was requested.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '41802dc844aef2b4af91aeae4b29b4d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces the data of this configuration object.
   *
   * @param array $data
   *   The new configuration data.
   *
   * @return $this
   *   The configuration object.
   *
   * @throws \\Drupal\\Core\\Config\\ConfigValueException
   *   If any key in $data in any depth contains a dot.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'setData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f5724ed1b65e4db2f54097f53057586b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a value in this configuration object.
   *
   * @param string $key
   *   Identifier to store value in configuration.
   * @param mixed $value
   *   Value to associate with identifier.
   *
   * @return $this
   *   The configuration object.
   *
   * @throws \\Drupal\\Core\\Config\\ConfigValueException
   *   If $value is an array and any of its keys in any depth contains a dot.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4632880e2d96eb7c79267e908486a164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates all keys in a passed in config array structure.
   *
   * @param array $data
   *   Configuration array structure.
   *
   * @return null
   *
   * @throws \\Drupal\\Core\\Config\\ConfigValueException
   *   If any key in $data in any depth contains a dot.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'validateKeys',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8cc10be3e183f6a749247e4f9a1203f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets a value in this configuration object.
   *
   * @param string $key
   *   Name of the key whose value should be unset.
   *
   * @return $this
   *   The configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'clear',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '91e06974db29f665e31de31f322a2958' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges data into a configuration object.
   *
   * @param array $data_to_merge
   *   An array containing data to merge.
   *
   * @return $this
   *   The configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '11e943957047c7225ec1d0743e4f567a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cb68f029ca273aafcc8c858633af65ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30c46036be385d922b10e9e9def04c30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'getCacheMaxAge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3aaf9dd3168a11f56594262455c3ca7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Casts any objects that implement MarkupInterface to string.
   *
   * @param mixed $data
   *   The configuration data.
   *
   * @return mixed
   *   The data with any safe strings cast to string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\ConfigBase',
         'functionName' => 'castSafeStrings',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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