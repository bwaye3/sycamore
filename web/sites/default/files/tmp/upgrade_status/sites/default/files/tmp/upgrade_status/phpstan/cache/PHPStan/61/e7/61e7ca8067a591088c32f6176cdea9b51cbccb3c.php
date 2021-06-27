<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/log/src/LogTemplateManager.php-1624732871',
   'data' => 
  array (
    '747abf733ffefe42ff211c497eb7c403' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages discovery and instantiation of commerce_log_template plugins.
 *
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    'eba05480d30facd1cbac08a83b14e7b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The log category manager.
   *
   * @var \\Drupal\\commerce_log\\LogCategoryManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    '684a4fa216b273846a1f3408809a79ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default values for each commerce_log_template plugin.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    '440a4290b9d5bbcccb3dcdc6d6c09e2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new LogTemplateManager object.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \\Drupal\\commerce_log\\LogCategoryManagerInterface $category_manager
   *   The log category manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    'bd9db8e74231c725b10c8ccf5063cd90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    'da1f96290b0e469e8edb13c710986415' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
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
    '62fa6fd9e43a944d339d8100e3dc5662' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
         'functionName' => 'getLabelsByCategory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bde7e944e883ed8546014861ea9c1b0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the sorted commerce_log_template plugin definitions.
   *
   * @return array
   *   The commerce_log_template plugin definitions, sorted by category and label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
         'functionName' => 'getSortedDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a8e583ab5f4c0e0454bfe05ad463b155' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of category labels for the given entity type ID.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   *
   * @return array
   *   A list of categories labels keyed by ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
         'functionName' => 'getCategoryLabels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b009ddd6939450095b42222559e1c09a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a string is safe for translation.
   *
   * A copy of locale_string_is_safe, made to avoid a dependency on Locale.
   *
   * @param string $string
   *   The string.
   *
   * @return bool
   *   TRUE if the string is safe, FALSE otherwise.
   *
   * @see locale_string_is_safe()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log',
         'uses' => 
        array (
          'logtemplate' => 'Drupal\\commerce_log\\Plugin\\LogTemplate\\LogTemplate',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
        ),
         'className' => 'Drupal\\commerce_log\\LogTemplateManager',
         'functionName' => 'isStringSafe',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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