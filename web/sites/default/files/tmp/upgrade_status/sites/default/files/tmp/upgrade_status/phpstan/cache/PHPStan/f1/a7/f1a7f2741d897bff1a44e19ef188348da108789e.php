<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Condition/ConditionInterface.php-1624732867',
   'data' => 
  array (
    '1b19e1685aa8ed8ec45190819af1f35a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * An interface for condition plugins.
 *
 * Condition plugins are context-aware and configurable. They support the
 * following keys in their plugin definitions:
 * - context: An array of context definitions, keyed by context name. Each
 *   context definition is a typed data definition describing the context. Check
 *   the typed data definition docs for details.
 * - configuration: An array of configuration option definitions, keyed by
 *   option name. Each option definition is a typed data definition describing
 *   the configuration option. Check the typed data definition docs for details.
 *
 * @todo Replace the dependency on \\Drupal\\Core\\Form\\FormInterface with a new
 *   interface from https://www.drupal.org/node/2006248.
 * @todo WARNING: The condition API is going to receive some additions before release.
 * The following additions are likely to happen:
 *  - The way configuration is handled and configuration forms are built is
 *    likely to change in order for the plugin to be of use for Rules.
 *  - Conditions will receive a data processing API that allows for token
 *    replacements to happen outside of the plugin implementations,
 *    see https://www.drupal.org/node/2347023.
 *  - Conditions will have to implement access control for checking who is
 *    allowed to configure or perform the action at
 *    https://www.drupal.org/node/2172017.
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
 * @see \\Drupal\\Core\\Executable\\ExecutableInterface
 * @see \\Drupal\\Core\\Condition\\ConditionManager
 * @see \\Drupal\\Core\\Condition\\Annotation\\Condition
 * @see \\Drupal\\Core\\Condition\\ConditionPluginBase
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'executableinterface' => 'Drupal\\Core\\Executable\\ExecutableInterface',
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionInterface',
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
    '7876220d40aedc8d289c5267f26e64bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether condition result will be negated.
   *
   * @return bool
   *   Whether the condition result will be negated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'executableinterface' => 'Drupal\\Core\\Executable\\ExecutableInterface',
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionInterface',
         'functionName' => 'isNegated',
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
    'da06a0fd9629390fc21a875b41df8bbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Evaluates the condition and returns TRUE or FALSE accordingly.
   *
   * @return bool
   *   TRUE if the condition has been met, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'executableinterface' => 'Drupal\\Core\\Executable\\ExecutableInterface',
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionInterface',
         'functionName' => 'evaluate',
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
    'd9f1cc08a500bc676e3864a0d73efbde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a human readable summary of the condition\'s configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'executableinterface' => 'Drupal\\Core\\Executable\\ExecutableInterface',
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionInterface',
         'functionName' => 'summary',
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
    'ec6a226c3095a85202be82478a4e9032' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the executable manager class.
   *
   * @param \\Drupal\\Core\\Executable\\ExecutableManagerInterface $executableManager
   *   The executable manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'executableinterface' => 'Drupal\\Core\\Executable\\ExecutableInterface',
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionInterface',
         'functionName' => 'setExecutableManager',
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