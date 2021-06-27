<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/ContextualLinkManager.php-1624732867',
   'data' => 
  array (
    '7a2ccefb12ab47b6481e570ff6dbaf29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a contextual link plugin manager to deal with contextual links.
 *
 * @see \\Drupal\\Core\\Menu\\ContextualLinkInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    '1bcb8bbc92920b78fd8fb8353b47ccb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides default values for a contextual link definition.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    '3326526932c62466b25c8fe4e049b9ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A controller resolver object.
   *
   * @var \\Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    '247e2901dea0c91d1023c4a44ec4a896' => 
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
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'c451f50e4ccb613a989df080b522e241' => 
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
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'd801bf013efe2f9037e778bedb050112' => 
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
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'a309db97d89379310bcdbcdb0d150572' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A static cache of all the contextual link plugins by group name.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'd04578e01e4c3d9bf8ad0025a811d3ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ContextualLinkManager instance.
   *
   * @param \\Drupal\\Core\\Controller\\ControllerResolverInterface $controller_resolver
   *   The controller resolver.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Access\\AccessManagerInterface $access_manager
   *   The access manager.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'e0352c06334fae0d0f6b3dfe73738d8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    'fb99f5f43f705d818009a5369294b0ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
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
    '9b1363fdd6146d292dbf0171ba65a2d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
         'functionName' => 'getContextualLinkPluginsByGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b9c701b268287ed0aa6f17b98ff3c729' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
         'functionName' => 'getContextualLinksArrayByGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f90f5306e57eaf8d57e1d6e515bc8df6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var $plugin \\Drupal\\Core\\Menu\\ContextualLinkInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManager',
         'functionName' => 'getContextualLinksArrayByGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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