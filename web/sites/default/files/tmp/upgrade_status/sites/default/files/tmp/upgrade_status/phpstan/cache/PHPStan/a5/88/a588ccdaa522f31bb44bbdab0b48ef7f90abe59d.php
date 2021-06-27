<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/TypedDataManagerInterface.php-1624732867',
   'data' => 
  array (
    '1a9d9bb29ff4eadadf8faefc3e9776aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for typed data manager.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
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
    '09ef91c74fda09cc4486854ddda6d9e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Instantiates a typed data object.
   *
   * @param string $data_type
   *   The data type, for which a typed object should be instantiated.
   * @param array $configuration
   *   The plugin configuration array, i.e. an array with the following keys:
   *   - data_definition: The data definition object, i.e. an instance of
   *     \\Drupal\\Core\\TypedData\\DataDefinitionInterface.
   *   - name: The name of the property or the delta of the list item if a
   *     property or list item is to be created. Otherwise, this should be set
   *     to NULL, but the key must be specified.
   *   - parent: The parent typed data object implementing either the
   *     ListInterface or the ComplexDataInterface if a property or list item is
   *     to be created. Otherwise, this should be set to NULL, but the key must
   *     be specified.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The instantiated typed data object.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
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
    '20e1af969797c14bde5cf63bc945bb37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new typed data object instance.
   *
   * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface $definition
   *   The data definition of the typed data object. For backwards-compatibility
   *   an array representation of the data definition may be passed also.
   * @param mixed $value
   *   (optional) The data value. If set, it has to match one of the supported
   *   data type format as documented for the data type classes.
   * @param string $name
   *   (optional) If a property or list item is to be created, the name of the
   *   property or the delta of the list item.
   * @param mixed $parent
   *   (optional) If a property or list item is to be created, the parent typed
   *   data object implementing either the ListInterface or the
   *   ComplexDataInterface.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The instantiated typed data object.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::getPropertyInstance()
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\BinaryData
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\BooleanData
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\Date
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\Duration
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\FloatData
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\IntegerData
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\StringData
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\Uri
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
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
    '6e3140130a105b4e80f10c8556183000' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new data definition object.
   *
   * While data definitions objects may be created directly if the definition
   * class used by a data type is known, this method allows the creation of data
   * definitions for any given data type.
   *
   * For example, if a definition for a map is to be created, the following code
   * could be used instead of calling this method with the argument \'map\':
   * @code
   *   $map_definition = \\Drupal\\Core\\TypedData\\MapDataDefinition::create();
   * @endcode
   *
   * @param string $data_type
   *   The data type plugin ID, for which a data definition object should be
   *   created.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
   *   A data definition object for the given data type. The class of this
   *   object is provided by the definition_class in the plugin annotation.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::createListDataDefinition()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'createDataDefinition',
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
    '3133bc61f0038df429f694269be4d35d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new list data definition for items of the given data type.
   *
   * @param string $item_type
   *   The item type, for which a list data definition should be created.
   *
   * @return \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface
   *   A list definition for items of the given data type.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::createDataDefinition()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'createListDataDefinition',
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
    '56e3b28cc8d953f0018ab8f9ae85cb93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @param array $options
   *   An array of options with the following keys:
   *   - object: The parent typed data object, implementing the
   *     TypedDataInterface and either the ListInterface or the
   *     ComplexDataInterface.
   *   - property: The name of the property to instantiate, or the delta of the
   *     the list item to instantiate.
   *   - value: The value to set. If set, it has to match one of the supported
   *     data type formats as documented by the data type classes.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The new property instance.
   *
   * @throws \\InvalidArgumentException
   *   If the given property is not known, or the passed object does not
   *   implement the ListInterface or the ComplexDataInterface.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::getPropertyInstance()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
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
    '4e02173f4fce90221e5803e23115f90d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a typed data instance for a property of a given typed data object.
   *
   * This method will use prototyping for fast and efficient instantiation of
   * many property objects with the same property path; for example,
   * when multiple comments are used comment_body.0.value needs to be
   * instantiated very often.
   *
   * Prototyping is done by the root object\'s data type and the given
   * property path, i.e. all property instances having the same property path
   * and inheriting from the same data type are prototyped.
   *
   * @param \\Drupal\\Core\\TypedData\\TypedDataInterface $object
   *   The parent typed data object, implementing the TypedDataInterface and
   *   either the ListInterface or the ComplexDataInterface.
   * @param string $property_name
   *   The name of the property to instantiate, or the delta of an list item.
   * @param mixed $value
   *   (optional) The data value. If set, it has to match one of the supported
   *   data type formats as documented by the data type classes.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The new property instance.
   *
   * @throws \\InvalidArgumentException
   *   If the given property is not known, or the passed object does not
   *   implement the ListInterface or the ComplexDataInterface.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'getPropertyInstance',
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
    '3e9b1cff7ed3e379c80612e0fc77103e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the validator for validating typed data.
   *
   * @return \\Symfony\\Component\\Validator\\Validator\\ValidatorInterface
   *   The validator object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'getValidator',
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
    '5fd6da22cb2b8f995754b23addf1830b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the validator for validating typed data.
   *
   * @param \\Symfony\\Component\\Validator\\Validator\\ValidatorInterface $validator
   *   The validator object to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'setValidator',
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
    '5d7c47e5e53dc20d71156dab9ffc4a0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the validation constraint manager.
   *
   * @return \\Drupal\\Core\\Validation\\ConstraintManager
   *   The constraint manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'getValidationConstraintManager',
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
    '7605536a93f1d27ea2d0c17038816364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the validation constraint manager.
   *
   * The validation constraint manager is used to instantiate validation
   * constraint plugins.
   *
   * @param \\Drupal\\Core\\Validation\\ConstraintManager $constraintManager
   *   The constraint manager to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'setValidationConstraintManager',
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
    '55e1afdc7ab77b65664f5809ac83340d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets default constraints for the given data definition.
   *
   * This generates default constraint definitions based on the data definition;
   * for example, a NotNull constraint is generated if the data is defined as
   * required. Besides that, any constraints defined for the data type (that is,
   * below the \'constraint\' key of the type\'s plugin definition) are taken into
   * account.
   *
   * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface $definition
   *   A data definition.
   *
   * @return array
   *   An array of validation constraint definitions, keyed by constraint name.
   *   Each constraint definition can be used for instantiating
   *   \\Symfony\\Component\\Validator\\Constraint objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'getDefaultConstraints',
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
    '2f03b3f9ee0d3320f41b61cba007b136' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the canonical representation of a TypedData object.
   *
   * The canonical representation is typically used when data is passed on to
   * other code components. In many use cases, the TypedData object is mostly
   * unified adapter wrapping a primary value (a string, an entity, etc.) which
   * is the canonical representation that consuming code like constraint
   * validators are really interested in. For some APIs, though, the domain
   * object (for example, Field API\'s FieldItem and FieldItemList) directly
   * implements TypedDataInterface, and the canonical representation is thus the
   * data object itself.
   *
   * When a TypedData object gets validated, for example, its canonical
   * representation is passed on to constraint validators, which thus receive
   * an Entity unwrapped, but a FieldItem as is.
   *
   * Data types specify whether their data objects need unwrapping by using the
   * \'unwrap_for_canonical_representation\' property in the data definition
   * (defaults to TRUE).
   *
   * @param \\Drupal\\Core\\TypedData\\TypedDataInterface $data
   *   The data.
   *
   * @return mixed
   *   The canonical representation of the passed data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'cacheddiscoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
          'constraintmanager' => 'Drupal\\Core\\Validation\\ConstraintManager',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
         'functionName' => 'getCanonicalRepresentation',
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