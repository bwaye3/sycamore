<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/InlineFormManager.php-1624732871',
   'data' => 
  array (
    'eec2071db0760fccaf72d39ce7666278' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages discovery and instantiation of inline form plugins.
 *
 * @see \\Drupal\\commerce\\Annotation\\CommerceInlineForm
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'commerceinlineform' => 'Drupal\\commerce\\Annotation\\CommerceInlineForm',
          'entityinlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface',
          'inlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\commerce\\InlineFormManager',
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
    '1a98f6493a305089e107ca13f1791085' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new InlineFormManager object.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'commerceinlineform' => 'Drupal\\commerce\\Annotation\\CommerceInlineForm',
          'entityinlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface',
          'inlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\commerce\\InlineFormManager',
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
    '61946cea9f3bda4ad63198736403e62c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @return \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface
   *   The inline form plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'commerceinlineform' => 'Drupal\\commerce\\Annotation\\CommerceInlineForm',
          'entityinlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface',
          'inlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\commerce\\InlineFormManager',
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
    '26fcd5d4a309c2e937066fc5c7e89764' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'commerceinlineform' => 'Drupal\\commerce\\Annotation\\CommerceInlineForm',
          'entityinlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface',
          'inlineforminterface' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
        ),
         'className' => 'Drupal\\commerce\\InlineFormManager',
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
  ),
));