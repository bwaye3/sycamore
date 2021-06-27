<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/ContextAwarePluginInterface.php-1624732867',
   'data' => 
  array (
    '5ed42289bd2d2ec1490b0febeecfebfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An override of ContextAwarePluginInterface for documentation purposes.
 *
 * @see \\Drupal\\Component\\Plugin\\ContextAwarePluginInterface
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'componentcontextawareplugininterface' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
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
    'eca52a4bf6c95d9dde7bf95c410fa964' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the context definitions of the plugin.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextDefinitionInterface[]
   *   The array of context definitions, keyed by context name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'componentcontextawareplugininterface' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextDefinitions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '43631492192b71f242fce6f2e96ec0e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific context definition of the plugin.
   *
   * @param string $name
   *   The name of the context in the plugin definition.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextDefinitionInterface
   *   The definition against which the context value must validate.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the requested context is not defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'componentcontextawareplugininterface' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextDefinition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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