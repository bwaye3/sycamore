<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/FieldableEntityInterface.php-1624732867',
   'data' => 
  array (
    '09692242b72884afadab4f4b15aff2c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for entities having fields.
 *
 * This interface builds upon the general interfaces provided by the typed data
 * API, while extending them with entity-specific additions. I.e., fieldable
 * entities implement the ComplexDataInterface among others, thus it is complex
 * data containing fields as its data properties. The contained fields have to
 * implement \\Drupal\\Core\\Field\\FieldItemListInterface, which builds upon typed
 * data interfaces as well.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\TypedData\\TypedDataManager
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
    'cc1ae11a0adda0162928517fbed10d99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides base field definitions for an entity type.
   *
   * Implementations typically use the class
   * \\Drupal\\Core\\Field\\BaseFieldDefinition for creating the field definitions;
   * for example a \'name\' field could be defined as the following:
   * @code
   * $fields[\'name\'] = BaseFieldDefinition::create(\'string\')
   *   ->setLabel(t(\'Name\'));
   * @endcode
   *
   * By definition, base fields are fields that exist for every bundle. To
   * provide definitions for fields that should only exist on some bundles, use
   * \\Drupal\\Core\\Entity\\FieldableEntityInterface::bundleFieldDefinitions().
   *
   * The definitions returned by this function can be overridden for all
   * bundles by hook_entity_base_field_info_alter() or overridden on a
   * per-bundle basis via \'base_field_override\' configuration entities.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition. Useful when a single class is used for multiple,
   *   possibly dynamic entity types.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
   *   An array of base field definitions for the entity type, keyed by field
   *   name.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
   * @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::bundleFieldDefinitions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'baseFieldDefinitions',
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
    'f311d629c8a46876a1e40a53b567ce9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides field definitions for a specific bundle.
   *
   * This function can return definitions both for bundle fields (fields that
   * are not defined in $base_field_definitions, and therefore might not exist
   * on some bundles) as well as bundle-specific overrides of base fields
   * (fields that are defined in $base_field_definitions, and therefore exist
   * for all bundles). However, bundle-specific base field overrides can also
   * be provided by \'base_field_override\' configuration entities, and that is
   * the recommended approach except in cases where an entity type needs to
   * provide a bundle-specific base field override that is decoupled from
   * configuration. Note that for most entity types, the bundles themselves are
   * derived from configuration (e.g., \'node\' bundles are managed via
   * \'node_type\' configuration entities), so decoupling bundle-specific base
   * field overrides from configuration only makes sense for entity types that
   * also decouple their bundles from configuration. In cases where both this
   * function returns a bundle-specific override of a base field and a
   * \'base_field_override\' configuration entity exists, the latter takes
   * precedence.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition. Useful when a single class is used for multiple,
   *   possibly dynamic entity types.
   * @param string $bundle
   *   The bundle.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface[] $base_field_definitions
   *   The list of base field definitions.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
   *   An array of bundle field definitions, keyed by field name.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
   * @see \\Drupal\\Core\\Entity\\FieldableEntityInterface::baseFieldDefinitions()
   *
   * @todo WARNING: This method will be changed in
   *   https://www.drupal.org/node/2346347.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'bundleFieldDefinitions',
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
    'd1970762d640ec4a6c7645a9a24b2213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the entity has a field with the given name.
   *
   * @param string $field_name
   *   The field name.
   *
   * @return bool
   *   TRUE if the entity has a field with the given name. FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'hasField',
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
    '1a4881245e44e4ad7a4fb3d27bff324a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of a contained field.
   *
   * @param string $name
   *   The name of the field.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface|null
   *   The definition of the field or null if the field does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
    '2e13502979605d12a488e6f8542279e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of field definitions of all contained fields.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
   *   An array of field definitions, keyed by field name.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldDefinitions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'getFieldDefinitions',
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
    '1563da8e41bca00723e23cfc7354ce9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of all field values.
   *
   * Gets an array of plain field values, including only non-computed values.
   * Note that the structure varies by entity type and bundle.
   *
   * @return array
   *   An array of field values, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
    'f16f6884815e9e26ab0c350e8df06522' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a field item list.
   *
   * @param string $field_name
   *   The name of the field to get; e.g., \'title\' or \'name\'.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemListInterface
   *   The field item list, containing the field items.
   *
   * @throws \\InvalidArgumentException
   *   If an invalid field name is given.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
    '4a6dfc78c825273f7e77922c96b2173d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a field value.
   *
   * @param string $field_name
   *   The name of the field to set; e.g., \'title\' or \'name\'.
   * @param mixed $value
   *   The value to set, or NULL to unset the field.
   * @param bool $notify
   *   (optional) Whether to notify the entity of the change. Defaults to
   *   TRUE. If the update stems from the entity, set it to FALSE to avoid
   *   being notified again.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   If the specified field does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
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
    '32b7407a0338d44122a9466161fc3f2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of all field item lists.
   *
   * @param bool $include_computed
   *   If set to TRUE, computed fields are included. Defaults to TRUE.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemListInterface[]
   *   An array of field item lists implementing, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'getFields',
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
    '61f48d2c32fa4934716f79120c1d051d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of field item lists for translatable fields.
   *
   * @param bool $include_computed
   *   If set to TRUE, computed fields are included. Defaults to TRUE.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemListInterface[]
   *   An array of field item lists implementing, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'getTranslatableFields',
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
    'b813178f6b99763e128ef46fe15dd2c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to changes to a field.
   *
   * Note that this is invoked after any changes have been applied.
   *
   * @param string $field_name
   *   The name of the field which is changed.
   *
   * @throws \\InvalidArgumentException
   *   When trying to assign a value to the language field that matches an
   *   existing translation.
   * @throws \\LogicException
   *   When trying to change:
   *   - The language of a translation.
   *   - The value of the flag identifying the default translation object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'onChange',
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
    '04e4317d51d988c66b49f140a0c5a862' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the currently set values.
   *
   * @return \\Drupal\\Core\\Entity\\EntityConstraintViolationListInterface
   *   A list of constraint violations. If the list is empty, validation
   *   succeeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'validate',
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
    'eb5a672b113baab25352cc4bab7f4263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether entity validation is required before saving the entity.
   *
   * @return bool
   *   TRUE if validation is required, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'isValidationRequired',
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
    '0dea9394315c38f75736bd2f24a8beb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether entity validation is required before saving the entity.
   *
   * @param bool $required
   *   TRUE if validation is required, FALSE otherwise.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
         'functionName' => 'setValidationRequired',
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