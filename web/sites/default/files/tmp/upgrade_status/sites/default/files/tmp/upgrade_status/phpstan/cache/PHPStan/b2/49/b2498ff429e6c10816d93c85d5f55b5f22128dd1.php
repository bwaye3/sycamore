<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/DefaultPluginManager.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryCachedTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/UseCacheBackendTrait.php-1624732867',
   'data' => 
  array (
    '332f0d3dadc571f590bc6e05e814f27e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for plugin managers.
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '10f5de41bbd5d67bf5aef45a238c9e6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @see Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '88062eb7d70b34679c6e126068ed6d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '05a9ec562d9307764f7f466148f1a6c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd895c5c2bb586e58463684e00f85b01c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific plugin definition.
   *
   * @param array $definitions
   *   An array of the available plugin definitions.
   * @param string $plugin_id
   *   A plugin id.
   * @param bool $exception_on_invalid
   *   If TRUE, an invalid plugin ID will cause an exception to be thrown; if
   *   FALSE, NULL will be returned.
   *
   * @return array|null
   *   A plugin definition, or NULL if the plugin ID is invalid and
   *   $exception_on_invalid is TRUE.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   *   Thrown if $plugin_id is invalid and $exception_on_invalid is TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'doGetDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0e03af4521e1887743657a3a51cee592' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'hasDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '52ec20c4b1d4efd516378dad043e7351' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cached definitions array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'bddf10f967c0450ae90eead8297c060c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '32ea928519f542c132877ee060014df0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to use a cache backend while respecting a \'use caches\' flag.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '2b38bcaa65204a9478e612d7e473acf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache backend instance.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '9d2f3e8b14aa1366f139168f3ebdf588' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag whether caches should be used or skipped.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '8463416c5e7e0274d9539095db45d628' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches from the cache backend, respecting the use caches flag.
   *
   * @param string $cid
   *   The cache ID of the data to retrieve.
   *
   * @return object|false
   *   The cache item or FALSE on failure.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::get()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'cacheGet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c1a30acb740be4d806f3f70313334191' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores data in the persistent cache, respecting the use caches flag.
   *
   * @param string $cid
   *   The cache ID of the data to store.
   * @param mixed $data
   *   The data to store in the cache.
   *   Some storage engines only allow objects up to a maximum of 1MB in size to
   *   be stored by default. When caching large arrays or similar, take care to
   *   ensure $data does not exceed this size.
   * @param int $expire
   *   One of the following values:
   *   - CacheBackendInterface::CACHE_PERMANENT: Indicates that the item should
   *     not be removed unless it is deleted explicitly.
   *   - A Unix timestamp: Indicates that the item will be considered invalid
   *     after this time, i.e. it will not be returned by get() unless
   *     $allow_invalid has been set to TRUE. When the item has expired, it may
   *     be permanently deleted by the garbage collector at any time.
   * @param array $tags
   *   An array of tags to be stored with the cache item. These should normally
   *   identify objects used to build the cache item, which should trigger
   *   cache invalidation when updated. For example if a cached item represents
   *   a node, both the node ID and the author\'s user ID might be passed in as
   *   tags. For example array(\'node\' => array(123), \'user\' => array(92)).
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::set()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'cacheSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fad1a8ece8037c1ccb4005e8c32886c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '610858ddb6f4318f3ceb48fbdad3ee62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of cache tags to use for the cached definitions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'b6dc8844828ed16044cdd7622efa477e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the alter hook if one should be invoked.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'f026d21f228469b8b78ff95186621eea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The subdirectory within a namespace to look for plugins, or FALSE if the
   * plugins are in the top level of the namespace.
   *
   * @var string|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '7b51dc3da723d4cc58152be93aae7256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler to invoke the alter hook.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '9ba73d9d9fe2c8161b6377d4ad369a7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A set of defaults to be referenced by $this->processDefinition() if
   * additional processing of plugins is necessary or helpful for development
   * purposes.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '4910ac10146303bcca1bffc16733762e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the annotation that contains the plugin definition.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '85d368d45fdd4e01ce56e214d4656966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The interface each plugin should implement.
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'b55e33e3810c8c6296838a28e422ea0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An object that implements \\Traversable which contains the root paths
   * keyed by the corresponding namespace to look for plugin implementations.
   *
   * @var \\Traversable
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '780794b3b40b03cb1e28b0d2e8775b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Additional namespaces the annotation discovery mechanism should scan for
   * annotation definitions.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'e26afa283bb8b8faf81ce41f06488c70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the discovery object.
   *
   * @param string|bool $subdir
   *   The plugin\'s subdirectory, for example Plugin/views/filter.
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param string|null $plugin_interface
   *   (optional) The interface each plugin should implement.
   * @param string $plugin_definition_annotation_name
   *   (optional) The name of the annotation that contains the plugin definition.
   *   Defaults to \'Drupal\\Component\\Annotation\\Plugin\'.
   * @param string[] $additional_annotation_namespaces
   *   (optional) Additional namespaces to scan for annotation definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    'ed39725417a34a58b1b4ef5683a0195b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize the cache backend.
   *
   * Plugin definitions are cached using the provided cache backend.
   *
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param string $cache_key
   *   Cache key prefix to use.
   * @param array $cache_tags
   *   (optional) When providing a list of cache tags, the cached plugin
   *   definitions are tagged with the provided cache tags. These cache tags can
   *   then be used to clear the corresponding cached plugin definitions. Note
   *   that this should be used with care! For clearing all cached plugin
   *   definitions of a plugin manager, call that plugin manager\'s
   *   clearCachedDefinitions() method. Only use cache tags when cached plugin
   *   definitions should be cleared along with other, related cache entries.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'setCacheBackend',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b148c1cf77245a06770f9153ca6b6c5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the alter hook name.
   *
   * @param string $alter_hook
   *   Name of the alter hook; for example, to invoke
   *   hook_mymodule_data_alter() pass in "mymodule_data".
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'alterInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b97f495c6888ef971525503a693a437f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '752a3b4e2b91030310120a706bb1089b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '9b61c13cccad5e533ddba0522f701ab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the cached plugin definitions of the decorated discovery class.
   *
   * @return array|null
   *   On success this will return an array of plugin definitions. On failure
   *   this should return NULL, indicating to other methods that this has not
   *   yet been defined. Success with no values should return as an empty array
   *   and would actually be returned by the getDefinitions() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getCachedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd2eaa6b54bd8cfad452300582b8e4e85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a cache of plugin definitions for the decorated discovery class.
   *
   * @param array $definitions
   *   List of definitions to store in cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'setCachedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cd5c98b87bab811e3e15be9b42cc928d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'useCaches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fa68c0be8620a236860883d9b41dc291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs extra processing on plugin definitions.
   *
   * By default we add defaults for the type to the definition. If a type has
   * additional processing logic they can do that by replacing or extending the
   * method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'processDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'da8ffa4e3f7ca14efa6772cc2cfab65e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getDiscovery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6014d7002dc3c2502e89c5946e37ac15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'getFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4cc338c9b752a6cbf2d3d24057111bff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds plugin definitions.
   *
   * @return array
   *   List of definitions to store in cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'findDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77ee84ed400ec7e39097a5b1f4c1dc2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fix the definitions of context-aware plugins.
   *
   * @param array $definitions
   *   The array of plugin definitions.
   *
   * @todo Remove before Drupal 9.0.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'fixContextAwareDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '21e5db723dec2b6562baed6048df3165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts the provider from a plugin definition.
   *
   * @param mixed $plugin_definition
   *   The plugin definition. Usually either an array or an instance of
   *   \\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface
   *
   * @return string|null
   *   The provider string, if it exists. NULL otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'extractProviderFromDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ee7525a3744a63c5fa81e28f8b0ed602' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes the hook to alter the definitions if the alter hook is set.
   *
   * @param $definitions
   *   The discovered plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'alterDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bde0f2360ae5850d8533657e6be3809e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the provider of a definition exists.
   *
   * @return bool
   *   TRUE if provider exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
         'functionName' => 'providerExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1f47d3aba231538c6246d92f8fbf15f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '5572f512457ef724695e96b95fa5ccf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
    '691c289d8eac9d5b990531bfdc1427b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'usecachebackendtrait' => 'Drupal\\Core\\Cache\\UseCacheBackendTrait',
          'discoverycachedtrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryCachedTrait',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'pluginmanagerbase' => 'Drupal\\Component\\Plugin\\PluginManagerBase',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
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
  ),
));