<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/DataDefinitionInterface.php-1624732867',
   'data' => 
  array (
    '930d042ad21cca8f76323cd22fa3fdc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for data definitions.
 *
 * Data definitions are used to describe data based upon available data types.
 * For example, a plugin could describe its parameters using data definitions
 * in order to specify what kind of data is required for it.
 *
 * Definitions that describe lists or complex data have to implement the
 * respective interfaces, such that the metadata about contained list items or
 * properties can be retrieved from the definition.
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinition
 * @see \\Drupal\\Core\\TypedData\\ListDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\DataReferenceDefinitionInterface
 * @see \\Drupal\\Core\\TypedData\\TypedDataInterface
 *
 * @ingroup typed_data
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
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
    '51f57ac4fb43f695b26799e9250a1a25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new data definition object.
   *
   * This method is typically used by
   * \\Drupal\\Core\\TypedData\\TypedDataManager::createDataDefinition() to build a
   * definition object for an arbitrary data type. When the definition class is
   * known, it is recommended to directly use the static create() method on that
   * class instead; e.g.:
   * @code
   *   $map_definition = \\Drupal\\Core\\TypedData\\MapDataDefinition::create();
   * @endcode
   *
   * @param string $data_type
   *   The data type, for which a data definition should be created.
   *
   * @return static
   *
   * @throws \\InvalidArgumentException
   *   If an unsupported data type gets passed to the class; e.g., \'string\' to a
   *   definition class handling \'entity:* data types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'createFromDataType',
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
    'c7a115cb01e221a8bd12b7b477dc5419' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the data type of the data.
   *
   * @return string
   *   The data type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getDataType',
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
    '83f5cc89309855bfbf4e4c856c434935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a human readable label.
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The label. A string or an instance of TranslatableMarkup will be returned
   *   based on the way the label translation is handled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getLabel',
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
    '253a275b54eeb96625e9eb60ac802bb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a human readable description.
   *
   * Descriptions are usually used on user interfaces where the data is edited
   * or displayed.
   *
   * @return string|null
   *   The description, or NULL if no description is available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getDescription',
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
    'f56e9cdc51faae9a20c5e320ba6080af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the data is multi-valued, i.e. a list of data items.
   *
   * This is equivalent to checking whether the data definition implements the
   * \\Drupal\\Core\\TypedData\\ListDefinitionInterface interface.
   *
   * @return bool
   *   Whether the data is multi-valued.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'isList',
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
    '304985edf957df8a00edf896893ac566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the data is read-only.
   *
   * @return bool
   *   Whether the data is read-only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'isReadOnly',
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
    '2bef31d237107c833eeedae045cc8984' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the data value is computed.
   *
   * For example, data could be computed depending on some other values.
   *
   * @return bool
   *   Whether the data value is computed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'isComputed',
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
    '11fffa11798128fb3f0d772b63e640f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a data value is required.
   *
   * For required data a non-NULL value is mandatory.
   *
   * @return bool
   *   Whether a data value is required.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'isRequired',
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
    '9b0574bc7d7219fcc04f109c509645c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the class used for creating the typed data object.
   *
   * If not specified, the default class of the data type will be returned.
   *
   * @return string
   *   The class used for creating the typed data object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getClass',
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
    '8b801fff87bbb48d07b85b747668eb5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the array of settings, as required by the used class.
   *
   * See the documentation of the class for supported or required settings.
   *
   * @return array
   *   The array of settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getSettings',
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
    '67897749ed6e26e9c4e1795a3d95c0de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a given setting.
   *
   * @param string $setting_name
   *   The setting name.
   *
   * @return mixed
   *   The setting value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getSetting',
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
    '283238d7cb897896c7b41b1f0835958b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of validation constraints.
   *
   * The validation constraints of a definition consist of any for it defined
   * constraints and default constraints, which are generated based on the
   * definition and its data type. See
   * \\Drupal\\Core\\TypedData\\TypedDataManager::getDefaultConstraints().
   *
   * Constraints are defined via an array, having constraint plugin IDs as key
   * and constraint options as values, e.g.
   * @code
   * $constraints = array(
   *   \'Range\' => array(\'min\' => 5, \'max\' => 10),
   *   \'NotBlank\' => array(),
   * );
   * @endcode
   * Options have to be specified using another array if the constraint has more
   * than one or zero options. If it has exactly one option, the value should be
   * specified without nesting it into another array:
   * @code
   * $constraints = array(
   *   \'EntityType\' => \'node\',
   *   \'Bundle\' => \'article\',
   * );
   * @endcode
   *
   * Note that the specified constraints must be compatible with the data type,
   * e.g. for data of type \'entity\' the \'EntityType\' and \'Bundle\' constraints
   * may be specified.
   *
   * @see \\Drupal\\Core\\Validation\\ConstraintManager
   *
   * @return array[]
   *   An array of validation constraint definitions, keyed by constraint name.
   *   Each constraint definition can be used for instantiating
   *   \\Symfony\\Component\\Validator\\Constraint objects.
   *
   * @see \\Symfony\\Component\\Validator\\Constraint
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getConstraints',
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
    'a008b9d273ec0fda545677f1485f9ba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a validation constraint.
   *
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details.
   *
   * @param string $constraint_name
   *   The name of the constraint, i.e. its plugin id.
   *
   * @return array
   *   A validation constraint definition which can be used for instantiating a
   *   \\Symfony\\Component\\Validator\\Constraint object.
   *
   * @see \\Symfony\\Component\\Validator\\Constraint
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'getConstraint',
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
    'cca610819419e5ba5eae2b73f624d93b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a validation constraint.
   *
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details.
   *
   * @param string $constraint_name
   *   The name of the constraint to add, i.e. its plugin id.
   * @param array|null $options
   *   The constraint options as required by the constraint plugin, or NULL.
   *
   * @return static
   *   The object itself for chaining.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'addConstraint',
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
    '0629c1123d1638b2fe21ccfcd7e5d5ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the data value is internal.
   *
   * This can be used in a scenario when it is not desirable to expose this data
   * value to an external system.
   *
   * @return bool
   *   Whether the data value is internal.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\DataDefinitionInterface',
         'functionName' => 'isInternal',
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