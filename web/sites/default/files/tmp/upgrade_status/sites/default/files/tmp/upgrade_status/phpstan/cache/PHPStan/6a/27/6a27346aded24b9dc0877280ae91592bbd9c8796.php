<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginFormFactoryInterface.php-1624732867',
   'data' => 
  array (
    'a54d0c2ecd5eebdcadc97ff430cffeda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for retrieving form objects for plugins.
 *
 * This allows a plugin to define multiple forms, in addition to the plugin
 * itself providing a form. All forms, decoupled or self-contained, must
 * implement \\Drupal\\Core\\Plugin\\PluginFormInterface. Decoupled forms can
 * implement \\Drupal\\Component\\Plugin\\PluginAwareInterface in order to gain
 * access to the plugin.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
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
    '5f5643d3e63accb3feffa10586174068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new form instance.
   *
   * @param \\Drupal\\Core\\Plugin\\PluginWithFormsInterface $plugin
   *   The plugin the form is for.
   * @param string $operation
   *   The name of the operation to use, e.g., \'add\' or \'edit\'.
   * @param string $fallback_operation
   *   (optional) The name of the fallback operation to use.
   *
   * @return \\Drupal\\Core\\Plugin\\PluginFormInterface
   *   A plugin form instance.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
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
  ),
));