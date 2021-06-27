<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/field/EntityField.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/FieldAPIHandlerTrait.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginDependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/DependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1624732867',
   'data' => 
  array (
    '7e60b13ef9efa95b5fe14c278bd5d118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A field that displays entity field data.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("field")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '931fb0541ba23404003646548b2369d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait containing helper methods for field definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'c5ad59a772334844272a8804ac7e0b78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field definition.
   *
   * @var \\Drupal\\Core\\Field\\FieldDefinitionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'ec8a3428a8596d9f51a20f1c7905a42b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field storage definition.
   *
   * @var \\Drupal\\field\\FieldStorageConfigInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'fb9d42bbb04d41893704005db0a5dfec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'e71f05bce0e819e4b1ed09eee52e5df5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field definition.
   *
   * A View works on an entity type across bundles, and thus only has access to
   * field storage definitions. In order to be able to use widgets and
   * formatters, we create a generic field definition out of that storage
   * definition.
   *
   * @see BaseFieldDefinition::createFromFieldStorageDefinition()
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface
   *   The field definition used by this handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getFieldDefinition',
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
    'a0bd91b5b93f12f0f73aa96c02a480fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field storage configuration.
   *
   * @return \\Drupal\\field\\FieldStorageConfigInterface
   *   The field storage definition used by this handler
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getFieldStorageDefinition',
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
    'f578e5125fc7374b60378312fbe00d92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityManagerInterface
   *   The entity manager service.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\views\\FieldAPIHandlerTrait::getEntityFieldManager() instead.
   *
   * @see https://www.drupal.org/node/2549139
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getEntityManager',
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
    'e70358fb9f34ccf9fd7624759dfad59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity field manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityManagerInterface
   *   The entity field manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getEntityFieldManager',
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
    '44557ef045ce36782aa07bcfd9fa5f3e' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'a347625087945f69393c6595b27f17c4' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '71192e495ad20aa79365952deea61778' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '7937b519535df74032e5f628540f5c2a' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'a8835469907ef2bea72a840d120a5e47' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '689d2e4727c1de50c9b147abde06fe4f' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '801ca3bebaae732e52385b26f406c783' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'fa6140cd8d984d31611702e069876658' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '42bf0db16ef8d693d95373841ef1e26b' => 
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
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'aaae38620376204e332be0f4c83b3bac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '63ba5b990384f1abd03437eda4b653c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => '__get',
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
    '81b4baadbd2edd95d2942f243c7a638c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '08c64bba0e95b5d9c0c74cb5cc7cf933' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array to store field renderable arrays for use by renderItems().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '0c72a3688510aaec797b196720c5c710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Does the field supports multiple field values.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '7277d32612c0919cb026df4ae82d6f9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Does the rendered fields get limited.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '8fb36ceaa8afd5ec4dc4646b80f8b5b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A shortcut for $view->base_table.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '81dcccae355af24767ddf1bd120a0a00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of formatter options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    'cb5cb7c6d36eb47c7d77f5b67069ac9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity typemanager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '1a23161a897321f437cc8ffccda205e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '0807079324c4ce59f112df74b1f6966e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field formatter plugin manager.
   *
   * @var \\Drupal\\Core\\Field\\FormatterPluginManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '3994c431c728df54c0f4fd12c33a97a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '334c2ecc380b31f1635282611ccde48c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '528d67489af9068bc0f5006a477d048a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field type plugin manager.
   *
   * @var \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '9c9a93970e5dbfa9671aa0e82a8c2cd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache for ::getEntityFieldRenderer().
   *
   * @var \\Drupal\\views\\Entity\\Render\\EntityFieldRenderer
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '76e05e0461c4746d33789a6b028727ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a \\Drupal\\field\\Plugin\\views\\field\\Field object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Field\\FormatterPluginManager $formatter_plugin_manager
   *   The field formatter plugin manager.
   * @param \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface $field_type_plugin_manager
   *   The field plugin type manager.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '0f916edd25bf5e44a61a4bd05a883be8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'create',
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
    'afaaf4dbd5927a191d99d72cb19c1302' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'init',
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
    '4ddac86718c23c8952b688903f30e6aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'access',
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
    'a9f7d4b01e4789a6046f29bc37cf5a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Called to add the field to a query.
   *
   * By default, all needed data is taken from entities loaded by the query
   * plugin. Columns are added only if they are used in groupings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'query',
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
    '68f8d4a1dddbeb2795ea616565cce166' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the field table should be added to the query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'add_field_table',
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
    'c2d5e5019fdbc5edfa1cdd4d6ea1458b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'clickSortable',
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
    '01cb0da2ae8139f67fbb2d4e2eb1717f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Called to determine what to tell the clicksorter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'clickSort',
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
    '6414a27d165faa9bb4cadc40ad7abd9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field storage definition.
   *
   * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface
   *   The field storage definition used by this handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getFieldStorageDefinition',
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
    'f0569769eff324e93016bb85d0b6dcca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'defineOptions',
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
    '00bb4c5595be928f89901f23254e17a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'buildOptionsForm',
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
    '84dbbdae2966529e754e5e1381e19b63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'submitFormCalculateOptions',
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
    '04c359234f2b1d5bf372f4f25e2cc074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide options for multiple value fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'multiple_options_form',
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
    'ce6c709b286f5471654840f82093105e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extend the groupby form with group columns.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'buildGroupByForm',
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
    '40b16ba41de7e8926b549d77074c5a18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render all items in this field together.
   *
   * When using advanced render, each possible item in the list is rendered
   * individually. Then the items are all pasted together.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'renderItems',
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
    '712f40093cb25f230fc785b43154baf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adapts the $items according to the delta configuration.
   *
   * This selects displayed deltas, reorders items, and takes offsets into
   * account.
   *
   * @param array $all_values
   *   The items for individual rendering.
   *
   * @return array
   *   The manipulated items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'prepareItemsByDelta',
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
    '9cf68fe5f4f140f34ecb1875e83e5639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'preRender',
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
    'ed9d3cea233a93cd603dec796301c743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity field renderer.
   *
   * @return \\Drupal\\views\\Entity\\Render\\EntityFieldRenderer
   *   The entity field renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getEntityFieldRenderer',
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
    'e2cd14bf336f7f953e77271f5fe8ed46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of items for the field.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   The result row object containing the values.
   *
   * @return array
   *   An array of items for the field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getItems',
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
    'ba9f8dc27461366439987305e9846d6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a fake entity with grouped field values.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to be processed.
   * @param \\Drupal\\views\\ResultRow $row
   *   The result row object containing the values.
   *
   * @return bool|\\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   Returns a new entity object containing the grouped field values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'createEntityForGroupBy',
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
    '9f07d38c2f67881067aaf67fcb077d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the field formatter instance.
   *
   * @return \\Drupal\\Core\\Field\\FormatterInterface|null
   *   The field formatter instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getFormatterInstance',
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
    '04c4f31e6c0ababc9388a6108c4c3ba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
    '7d0f105d776e667c9498a1558d45ad78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getCacheMaxAge',
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
    'c8685b7e68e040c7952016f194c63370' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getCacheContexts',
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
    '8235c25ca978b67f66664c5033fce756' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getCacheTags',
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
    '56936dc36bde384f6da53585a2279706' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the table mapping for the entity type of the field.
   *
   * @return \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping
   *   The table mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getTableMapping',
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
    '3fe88388f67514cb414c88f6fee49daa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getValue',
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
    '906b52e3f691b318af0dde24c2bf4163' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldItemListInterface $field_item_list */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getValue',
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
    'e6fb0fc312209104e8868c84e7ce207d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldItemInterface $field_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
         'functionName' => 'getValue',
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
    '8e78d491da0e4423158653f89e476847' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'fieldtypepluginmanagerinterface' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'plugindependencytrait' => 'Drupal\\Core\\Plugin\\PluginDependencyTrait',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'element' => 'Drupal\\Core\\Render\\Element',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
          'fieldapihandlertrait' => 'Drupal\\views\\FieldAPIHandlerTrait',
          'entityfieldrenderer' => 'Drupal\\views\\Entity\\Render\\EntityFieldRenderer',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
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
  ),
));