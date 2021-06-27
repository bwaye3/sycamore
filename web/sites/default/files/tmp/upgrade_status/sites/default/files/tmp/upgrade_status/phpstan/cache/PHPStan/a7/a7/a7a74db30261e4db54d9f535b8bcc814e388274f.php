<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginDependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/DependencyTrait.php-1624732867',
   'data' => 
  array (
    '3f4d9a651d0e2b41c6c3f8ee028cf4c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for calculating the dependencies of a plugin.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'dependentplugindefinitioninterface' => 'Drupal\\Core\\Plugin\\Definition\\DependentPluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
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
    '8d5b35fc476d15cb672a8519274f064d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for managing an object\'s dependencies.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
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
    'fc3e3418592cdd304aea33046c107c65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object\'s dependencies.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
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
    'f336e340a8b626019e8072f6aabcfd03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a dependency.
   *
   * @param string $type
   *   Type of dependency being added: \'module\', \'theme\', \'config\', \'content\'.
   * @param string $name
   *   If $type is \'module\' or \'theme\', the name of the module or theme. If
   *   $type is \'config\' or \'content\', the result of
   *   EntityInterface::getConfigDependencyName().
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::getConfigDependencyName()
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'addDependency',
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
    '7083646d7e8ad9cdf1cf7ef5c86f5af3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds multiple dependencies.
   *
   * @param array $dependencies
   *   An array of dependencies keyed by the type of dependency. One example:
   *   @code
   *   array(
   *     \'module\' => array(
   *       \'node\',
   *       \'field\',
   *       \'image\',
   *     ),
   *   );
   *   @endcode
   *
   * @see \\Drupal\\Core\\Entity\\DependencyTrait::addDependency
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'addDependencies',
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
    '271132a26be03c1f9f4e2e29eabb1565' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates and returns dependencies of a specific plugin instance.
   *
   * Dependencies are added for the module that provides the plugin, as well
   * as any dependencies declared by the instance\'s calculateDependencies()
   * method, if it implements
   * \\Drupal\\Component\\Plugin\\DependentPluginInterface.
   *
   * @param \\Drupal\\Component\\Plugin\\PluginInspectionInterface $instance
   *   The plugin instance.
   *
   * @return array
   *   An array of dependencies keyed by the type of dependency.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'dependentplugindefinitioninterface' => 'Drupal\\Core\\Plugin\\Definition\\DependentPluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'getPluginDependencies',
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
    '0498d0cc62c3c476979c485ad1167fe0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates and adds dependencies of a specific plugin instance.
   *
   * Dependencies are added for the module that provides the plugin, as well
   * as any dependencies declared by the instance\'s calculateDependencies()
   * method, if it implements
   * \\Drupal\\Component\\Plugin\\DependentPluginInterface.
   *
   * @param \\Drupal\\Component\\Plugin\\PluginInspectionInterface $instance
   *   The plugin instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'dependentplugindefinitioninterface' => 'Drupal\\Core\\Plugin\\Definition\\DependentPluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'calculatePluginDependencies',
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
    'f7f7af5f09666208a47a705e1c7c6ce1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the module handler.
   *
   * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'dependentplugindefinitioninterface' => 'Drupal\\Core\\Plugin\\Definition\\DependentPluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'moduleHandler',
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
    '48a46d6fdf7eed91ca43d16002ae1ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the theme handler.
   *
   * @return \\Drupal\\Core\\Extension\\ThemeHandlerInterface
   *   The theme handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'dependentplugindefinitioninterface' => 'Drupal\\Core\\Plugin\\Definition\\DependentPluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
         'functionName' => 'themeHandler',
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