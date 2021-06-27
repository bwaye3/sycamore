<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ConfigEntityBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginDependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/DependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/SynchronizableEntityTrait.php-1624732867',
   'data' => 
  array (
    '01ddfdf614910ce126479f7b1d30cb85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a base configuration entity class.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '59c0ffe628b025e4f97943cd74ed5f0e' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '6cdd3247a8c7f4fdba44690cdac5acc5' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '3fd6abe7ac46a332536856aae91393e8' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '40f1dcdce95f3f6acb8c5a7cdef52e30' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    'aedeaa163a52943304c3f9287069d8f9' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '6c20cc2b72cfb2a13496ddeb2c6c2073' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '310770a1ed4ed7128f697f47e7832f69' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '0071a966036340feab8892892dc104f7' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '9b14277ad30a9f44a9237abc820b63e6' => 
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
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '279abd0dd33da7bddafa3defc69e5e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing synchronization information.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '484dfb8274772e82bf0187c4934d3012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this entity is being created, updated or deleted through a
   * synchronization process.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    'd45aa663ac302d72181b6b682b5c3e9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'setSyncing',
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
    'f01ae533cbe377e440bbb0b5e4480cbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'isSyncing',
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
    '91057742048199c9d327fc9fb928bebb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original ID of the configuration entity.
   *
   * The ID of a configuration entity is a unique string (machine name). When a
   * configuration entity is updated and its machine name is renamed, the
   * original ID needs to be known.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '4aeb69ed3aa1c4aade24b41d34a90543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The enabled/disabled status of the configuration entity.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '3017d29a62ab1e66b8ee893273e73f01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The UUID for this entity.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    'd3e31e087e08817e0b1d9daf1c951bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the config is being deleted by the uninstall process.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    'f0eacb4558d154814af89989aaae9164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language code of the entity\'s default language.
   *
   * Assumed to be English by default. ConfigEntityStorage will set an
   * appropriate language when creating new entities. This default applies to
   * imported default configuration where the language code is missing. Those
   * should be assumed to be English. All configuration entities support third
   * party settings, so even configuration entities that do not directly
   * store settings involving text in a human language may have such third
   * party settings attached. This means configuration entities should be in one
   * of the configured languages or the built-in English.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '302eb49e5c5129ab9b05442cc6dbc8af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Third party entity settings.
   *
   * An array of key/value pairs keyed by provider.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '5fe5f808ef60f27f1990cc23f939f4f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Information maintained by Drupal core about configuration.
   *
   * Keys:
   * - default_config_hash: A hash calculated by the config.installer service
   *   and added during installation.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '36d354f50c15958dff8ec7d314d2786e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Trust supplied data and not use configuration schema on save.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '6ef83d38b6121e34e4ddf4cc830045e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    'c6982da32729b014033926e05f3c331c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getOriginalId',
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
    'c85bf77c958876c4dc1c64efda045b72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'setOriginalId',
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
    '025e3582ce8b6e7619beffae8e89c65f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides Entity::isNew().
   *
   * EntityInterface::enforceIsNew() is only supported for newly created
   * configuration entities but has no effect after saving, since each
   * configuration entity is unique.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'isNew',
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
    '5ab4a11f0ec8574c5df4043c33ed51da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'get',
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
    '34d5f44dda1eb8d846c9c0bb450310dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'set',
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
    '1346cc39af39f1d3f5e27990064782e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'enable',
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
    '2788749e77dd3490bf5a875ffaca0f50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'disable',
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
    'fe91c2e050962f94c7599b9ebd8800dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'setStatus',
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
    '4185cae9124485b47c43679746e69f8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'status',
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
    '30d38a8d1d89562bc9a38b4a691128b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'setUninstalling',
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
    '7c2b1761650db30b7bb2ee98268bfe79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'isUninstalling',
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
    '3c96a723a73fdd9bbf6f3b2048f4f0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'createDuplicate',
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
    'e491f1cb6d4d714435b8c246077d7ac5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper callback for uasort() to sort configuration entities by weight and label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'sort',
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
    'c41ea9678fc89f6c193f415c94e441dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'toArray',
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
    'd77e673b607fd98675583dabc9f73416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\Entity\\ConfigEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'toArray',
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
    '6d24764d203dcefbe61ef5b3ab635494' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the typed config manager.
   *
   * @return \\Drupal\\Core\\Config\\TypedConfigManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getTypedConfig',
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
    'ee42d1f99129b90fc161ad35e5b7981d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'preSave',
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
    'a70fc9b1b1f6cf959353b2a5333b73aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => '__sleep',
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
    '09c7605f192e285572f7b588d9e6f55d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'calculateDependencies',
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
    'a000dd1dcd13112384f8286a3349cf65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'urlInfo',
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
    'ead69a52ee22ed8366dbc584403837c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'url',
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
    '5d7e9f28edca9b6af821470435d75101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'link',
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
    '610e7e92eb2a2108239011f29ee94a5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'toUrl',
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
    '913490d8e53818444562d96ecc328478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getCacheTagsToInvalidate',
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
    'a5419548442ed66ac8beaec73584c0a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Core\\Entity\\DependencyTrait:addDependency().
   *
   * Note that this function should only be called from implementations of
   * \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::calculateDependencies(),
   * as dependencies are recalculated during every entity save.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityDependency::hasDependency()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
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
    '485e73d97893dc11978d2693b0eeb32e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getDependencies',
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
    'b465cc11a67bfb7fccdaea97281d7535' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getConfigDependencyName',
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
    '74c182b736c123e18b8ec6a7deb999ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getConfigTarget',
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
    '4064e773bc60a34b99bc776e6187b69d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'onDependencyRemoval',
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
    'e6728d475b6d781acc5183a5c2f4497c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Override to never invalidate the entity\'s cache tag; the config system
   * already invalidates it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'invalidateTagsOnSave',
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
    '3c5588ccf8c5b0887f801ef3845edc12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Override to never invalidate the individual entities\' cache tags; the
   * config system already invalidates them.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'invalidateTagsOnDelete',
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
    '13b293ae39de264711f034404dfd91f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'setThirdPartySetting',
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
    '4a0f0bb61b3db4f9e58c30ffc438bfea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getThirdPartySetting',
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
    'f17752a87877611f23545fec5f8d01e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getThirdPartySettings',
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
    '7c230606caa1eacde55d8801c753d73f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'unsetThirdPartySetting',
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
    '3a5bcc583b5896caf475c89dee966a00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getThirdPartyProviders',
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
    '7bac2764806c7d3585cc212901fb3084' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'preDelete',
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
    '0aab7772dc3a523ec3e3f1752dbb59de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface $dependent_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'preDelete',
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
    '60d5a9c7703fd005821ce8dc99f284d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configuration manager.
   *
   * @return \\Drupal\\Core\\Config\\ConfigManager
   *   The configuration manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'getConfigManager',
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
    '6c783ff02236171b9b69d3592e6646e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'isInstallable',
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
    '8a78dc5f3c0944966ffc07948638de5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'trustData',
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
    'f35269ef2ecaf6c9303ff0bf03546cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'hasTrustedData',
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
    '741a688bb4ce7fe7e823ffdfa0e5089e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'schemaincompleteexception' => 'Drupal\\Core\\Config\\Schema\\SchemaIncompleteException',
          'entitybase' => 'Drupal\\Core\\Entity\\EntityBase',
          'configduplicateuuidexception' => 'Drupal\\Core\\Config\\ConfigDuplicateUUIDException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'synchronizableentitytrait' => 'Drupal\\Core\\Entity\\SynchronizableEntityTrait',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
         'functionName' => 'save',
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