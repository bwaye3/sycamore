<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/LocalActionManager.php-1624732867',
   'data' => 
  array (
    '3ace7fae049f9d009a4718ccd07fc22c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the default local action manager using YML as primary definition.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '2605352203c6810eea3cd2b57bed173f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides some default values for all local action plugins.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '7276c4d27c8ba50f86311f29878ea518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An argument resolver object.
   *
   * @var \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    'a716f18d3203a1f883bcfc2e41dcde73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A controller resolver object.
   *
   * @var \\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface
   *
   * @deprecated
   *   Using the \'controller_resolver\' service as the first argument is
   *   deprecated, use the \'http_kernel.controller.argument_resolver\' instead.
   *   If your subclass requires the \'controller_resolver\' service add it as an
   *   additional argument.
   *
   * @see https://www.drupal.org/node/2959408
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    'f4b7ad6993869ee61e5f15df343ef3d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '743248a46a31c34183276031c31fe1e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '360c2be68da86d641642905c6bfdcd28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The route provider to load routes by name.
   *
   * @var \\Drupal\\Core\\Routing\\RouteProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '0b6635d643f03786a146f6054558e3ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The access manager.
   *
   * @var \\Drupal\\Core\\Access\\AccessManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '9fa93e0a6a3d8fa53cd012720eb4f2ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    'c449e41d4b5adf15740076f79f45649d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin instances.
   *
   * @var \\Drupal\\Core\\Menu\\LocalActionInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    'a986007b9f4f93a4554ba51cffd5c1e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a LocalActionManager object.
   *
   * @param \\Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface $argument_resolver
   *   An object to use in resolving route arguments.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   * @param \\Drupal\\Core\\Routing\\RouteProviderInterface $route_provider
   *   The route provider.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Access\\AccessManagerInterface $access_manager
   *   The access manager.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    '12804b8869e6346682afb74128df4b99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
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
    'be2b5f8a8d220a2682b9e814bb84da76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
         'functionName' => 'getTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8195c0a46e794459acc4735252a5ea47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
         'functionName' => 'getActionsForRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6d36340913d764fa33fe1bf90ab20aa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var $plugin \\Drupal\\Core\\Menu\\LocalActionInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'routeproviderinterface' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
          'url' => 'Drupal\\Core\\Url',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
          'argumentresolverinterface' => 'Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolverInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalActionManager',
         'functionName' => 'getActionsForRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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