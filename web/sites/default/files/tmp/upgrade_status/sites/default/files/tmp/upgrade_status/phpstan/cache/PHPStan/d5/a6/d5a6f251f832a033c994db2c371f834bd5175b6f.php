<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/MenuLinkManager.php-1624732867',
   'data' => 
  array (
    'ec796f23be355ea7811958e085a01d88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages discovery, instantiation, and tree building of menu link plugins.
 *
 * This manager finds plugins that are rendered as menu links.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '83acc1648dac364f3ed6f7b78e013275' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides some default values for the definition of all menu link plugins.
   *
   * @todo Decide how to keep these field definitions in sync.
   *   https://www.drupal.org/node/2302085
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '08dd7fcc1fd97020de8b03c5577a57db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object that discovers plugins managed by this manager.
   *
   * @var \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '37c1310b2e36b5e1596687a040250d53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object that instantiates plugins managed by this manager.
   *
   * @var \\Drupal\\Component\\Plugin\\Factory\\FactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '647c12150f412f04656741cf1b5db839' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The menu link tree storage.
   *
   * @var \\Drupal\\Core\\Menu\\MenuTreeStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '91e7f20402bfb1e29f32b7c44492fb61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Service providing overrides for static links.
   *
   * @var \\Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    'b358ec28505a4b891589cf816caa1659' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '8438840a6333984ac38f92c619c9c2b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a \\Drupal\\Core\\Menu\\MenuLinkManager object.
   *
   * @param \\Drupal\\Core\\Menu\\MenuTreeStorageInterface $tree_storage
   *   The menu link tree storage.
   * @param \\Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface $overrides
   *   The service providing overrides for static links.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '35b2b8e6ce29b8cb9fab973087384103' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs extra processing on plugin definitions.
   *
   * By default we add defaults for the type to the definition. If a type has
   * additional processing logic, the logic can be added by replacing or
   * extending this method.
   *
   * @param array $definition
   *   The definition to be processed and modified by reference.
   * @param $plugin_id
   *   The ID of the plugin this definition is being used for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '833d54075033342762c374dbf243d164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin discovery.
   *
   * @return \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '7b6f984f8d8b323f30a92d77cad3fdc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin factory.
   *
   * @return \\Drupal\\Component\\Plugin\\Factory\\FactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '9fbf4c818218fea93f5e51d46340950d' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '49450b134a7ad317bd42a7ed2b333daf' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'rebuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c3e9b1c727dc89d8ed9c2a61ce1d648e' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    'f9fb691d2874e46aebe619b9d3d6a2fc' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    'cd175c246010d2e01cb7d7c77cb0d089' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a pre-configured menu link plugin instance.
   *
   * @param string $plugin_id
   *   The ID of the plugin being instantiated.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instance.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface
   *   A menu link instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the instance cannot be created, such as if the ID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
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
    '78b754496446cd3c3d709b98c43eb185' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'getInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b60fce0fac2b8fdd01137eb164b77874' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'deleteLinksInMenu',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2cb822d40384220f0fa540c1ea294e63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a specific instance.
   *
   * @param \\Drupal\\Core\\Menu\\MenuLinkInterface $instance
   *   The plugin instance to be deleted.
   * @param bool $persist
   *   If TRUE, calls MenuLinkInterface::deleteLink() on the instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the plugin instance does not support deletion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'deleteInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '311a6dd4106d78606e5673f6426d04cb' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'removeDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b6cf103155174865ac92bacb7a44c078' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'menuNameInUse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '57638d2d511c25da1aadd4290eebfbd8' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'countMenuLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7ea42cc0a69d055ee67edeb1bbcae1ec' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'getParentIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd381bde0cf2f1331208f6636bdaf266a' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'getChildIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a2c5eccbb02efc43f8106b5fc683737' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'loadLinksByRoute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b73b8636f84c906055152f4052eca918' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'addDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2410da7a0f1e038b6fe68fc6dfd0a044' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'updateDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd71875547929f5d853a5b9c84daba726' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'resetLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cd2d6ef1ce7e4fad40eb2ac9c5030a95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the menu link to its default settings.
   *
   * @param \\Drupal\\Core\\Menu\\MenuLinkInterface $instance
   *   The menu link which should be reset.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface
   *   The reset menu link.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown when the menu link is not resettable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'resetInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4c901a0d52ce53ab6d28f60ba634b69a' => 
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
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManager',
         'functionName' => 'resetDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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