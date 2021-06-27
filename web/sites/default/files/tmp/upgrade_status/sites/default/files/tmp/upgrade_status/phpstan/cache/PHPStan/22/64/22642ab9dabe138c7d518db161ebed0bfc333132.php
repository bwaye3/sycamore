<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/config_translation/src/ConfigMapperManager.php-1624732867',
   'data' => 
  array (
    '9bc5c2da4a8b5587c1c7a882450ba803' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages plugins for configuration translation mappers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'b39d627539e2cc50300df90cc70b3bf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The typed config manager.
   *
   * @var \\Drupal\\Core\\Config\\TypedConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'f3f54398eed12a4a8f36a04d8423d3fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme handler.
   *
   * @var \\Drupal\\Core\\Extension\\ThemeHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    '94b3bbe70c47a8383bef560cd62d06af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'ca238b98c0285470d1bf0ce67bbc6ede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ConfigMapperManager.
   *
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config_manager
   *   The typed config manager.
   * @param \\Drupal\\Core\\Extension\\ThemeHandlerInterface $theme_handler
   *   The theme handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'f48ec593fe621922edd0da30849bab67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'f08c46754f88fa59a796b9171092b619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
         'functionName' => 'getMappers',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1fd76947d387511279ddbda34c0d69a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'f0053a83a8063b7a6c161921f1baf0bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
         'functionName' => 'buildDataDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'aea519197cec83028f91a88f24ca374c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
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
    'd2c6399eb067528d10ac03be73738e64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
         'functionName' => 'hasTranslatable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f9f3cb0de4a0c09cd6c81960ef9f9c8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if at least one translatable element is found.
   *
   * @param \\Drupal\\Core\\TypedData\\TypedDataInterface $element
   *   Configuration schema element.
   *
   * @return bool
   *   A boolean indicating if there is at least one translatable element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'infohookdecorator' => 'Drupal\\Core\\Plugin\\Discovery\\InfoHookDecorator',
          'yamldiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
          'containerderivativediscoverydecorator' => 'Drupal\\Core\\Plugin\\Discovery\\ContainerDerivativeDiscoveryDecorator',
          'containerfactory' => 'Drupal\\Core\\Plugin\\Factory\\ContainerFactory',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManager',
         'functionName' => 'findTranslatable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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