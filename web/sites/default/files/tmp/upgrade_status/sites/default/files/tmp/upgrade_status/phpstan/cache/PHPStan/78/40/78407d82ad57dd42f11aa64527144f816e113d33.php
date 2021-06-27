<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldItemInterface.php-1624732867',
   'data' => 
  array (
    'e8ecaa28d12168870fdf37073b427d0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for entity field items.
 *
 * Entity field items are typed data objects containing the field values, i.e.
 * implementing the ComplexDataInterface.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemListInterface
 * @see \\Drupal\\Core\\Field\\FieldItemBase
 * @ingroup field_types
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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
    '79e19633486f2d6f866f619f59324397' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines field item properties.
   *
   * Properties that are required to constitute a valid, non-empty item should
   * be denoted with \\Drupal\\Core\\TypedData\\DataDefinition::setRequired().
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
   *   An array of property definitions of contained properties, keyed by
   *   property name.
   *
   * @see \\Drupal\\Core\\Field\\BaseFieldDefinition
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'propertyDefinitions',
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
    'ccb9563d38a041ef411205b6348ca88b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the main property, if any.
   *
   * Some field items consist mainly of one main property, e.g. the value of a
   * text field or the target_id of an entity reference. If the field item has
   * no main property, the method returns NULL.
   *
   * @return string|null
   *   The name of the value property, or NULL if there is none.
   *
   * @see \\Drupal\\Core\\Field\\BaseFieldDefinition
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'mainPropertyName',
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
    '88fd4f5a5694419fa48fd86768e5571d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the schema for the field.
   *
   * This method is static because the field schema information is needed on
   * creation of the field. FieldItemInterface objects instantiated at that
   * time are not reliable as field settings might be missing.
   *
   * Computed fields having no schema should return an empty array.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $field_definition
   *   The field definition.
   *
   * @return array
   *   An empty array if there is no schema, or an associative array with the
   *   following key/value pairs:
   *   - columns: An array of Schema API column specifications, keyed by column
   *     name. The columns need to be a subset of the properties defined in
   *     propertyDefinitions(). The \'not null\' property is ignored if present,
   *     as it is determined automatically by the storage controller depending
   *     on the table layout and the property definitions. It is recommended to
   *     avoid having the column definitions depend on field settings when
   *     possible. No assumptions should be made on how storage engines
   *     internally use the original column name to structure their storage.
   *   - unique keys: (optional) An array of Schema API unique key definitions.
   *     Only columns that appear in the \'columns\' array are allowed.
   *   - indexes: (optional) An array of Schema API index definitions. Only
   *     columns that appear in the \'columns\' array are allowed. Those indexes
   *     will be used as default indexes. Field definitions can specify
   *     additional indexes or, at their own risk, modify the default indexes
   *     specified by the field-type module. Some storage engines might not
   *     support indexes.
   *   - foreign keys: (optional) An array of Schema API foreign key
   *     definitions. Note, however, that the field data is not necessarily
   *     stored in SQL. Also, the possible usage is limited, as you cannot
   *     specify another field as related, only existing SQL tables,
   *     such as {taxonomy_term_data}.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'schema',
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
    '09a750b7ade573c5b44843194b9adb0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity that field belongs to.
   *
   * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   The entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'getEntity',
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
    '8545a0a271705992a32f455f99a516d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the langcode of the field values held in the object.
   *
   * @return string
   *   The langcode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'getLangcode',
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
    '08ee9bd93bf635844d11c99245fdbd4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field definition.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface
   *   The field definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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
    '914819edc01bb15d2c2209ee44532f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Gets a property value.
   *
   * @param string $property_name
   *   The name of the property to get; e.g., \'title\' or \'name\'.
   *
   * @return mixed
   *   The property value.
   *
   * @throws \\InvalidArgumentException
   *   If a not existing property is accessed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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
    'b187e47be0417c3af994f73e59b4a54e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Sets a property value.
   *
   * @param string $property_name
   *   The name of the property to set; e.g., \'title\' or \'name\'.
   * @param mixed $value
   *   The value to set, or NULL to unset the property. Optionally, a typed
   *   data object implementing Drupal\\Core\\TypedData\\TypedDataInterface may be
   *   passed instead of a plain value.
   *
   * @throws \\InvalidArgumentException
   *   If a not existing property is set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => '__set',
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
    'b8f67be552f49284e91088ea24a01525' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Determines whether a property is set.
   *
   * @param string $property_name
   *   The name of the property to get; e.g., \'title\' or \'name\'.
   *
   * @return bool
   *   Returns TRUE if the property exists and is set, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => '__isset',
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
    '6f7ceb5b0dbedf68aafd47d233bd7147' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Unsets a property.
   *
   * @param string $property_name
   *   The name of the property to get; e.g., \'title\' or \'name\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => '__unset',
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
    '601ca1e48138a4754dcc69d8ef5c25b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a renderable array for a single field item.
   *
   * @param string|array $display_options
   *   Can be either the name of a view mode, or an array of display settings.
   *   See EntityViewBuilderInterface::viewField() for more information.
   *
   * @return array
   *   A renderable array for the field item.
   *
   * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewField()
   * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewFieldItem()
   * @see \\Drupal\\Core\\Field\\FieldItemListInterface::view()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'view',
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
    '9b1e5e591f0dad8d282916b1b23dfdce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom presave behavior for field values.
   *
   * This method is called during the process of saving an entity, just before
   * values are written into storage. When storing a new entity, its identifier
   * will not be available yet. This should be used to massage item property
   * values or perform any other operation that needs to happen before values
   * are stored. For instance this is the proper phase to auto-create a new
   * entity for an entity reference field item, because this way it will be
   * possible to store the referenced entity identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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
    '85798308f2a309944ffad14fb17cfe67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom post-save behavior for field values.
   *
   * This method is called during the process of saving an entity, just after
   * values are written into storage. This is useful mostly when the business
   * logic to be implemented always requires the entity identifier, even when
   * storing a new entity. For instance, when implementing circular entity
   * references, the referenced entity will be created on pre-save with a dummy
   * value for the referring entity identifier, which will be updated with the
   * actual one on post-save.
   *
   * In the rare cases where item properties depend on the entity identifier,
   * massaging logic will have to be implemented on post-save and returning TRUE
   * will allow them to be rewritten to the storage with the updated values.
   *
   * @param bool $update
   *   Specifies whether the entity is being updated or created.
   *
   * @return bool
   *   Whether field items should be rewritten to the storage as a consequence
   *   of the logic implemented by the custom behavior.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'postSave',
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
    'ca510d3582d1105a810c207c918269c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom delete behavior for field values.
   *
   * This method is called during the process of deleting an entity, just before
   * values are deleted from storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'delete',
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
    'dd37850fe0d0583f30331b952b7160f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom revision delete behavior for field values.
   *
   * This method is called from during the process of deleting an entity
   * revision, just before the field values are deleted from storage. It is only
   * called for entity types that support revisioning.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'deleteRevision',
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
    'a97edf47230f6400df4de1ecd40a04ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates placeholder field values.
   *
   * Useful when populating site with placeholder content during site building
   * or profiling.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   *
   * @return array
   *   An associative array of values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'generateSampleValue',
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
    '88c4cc57983a7a26ca3e8751333914a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the storage-level settings for this plugin.
   *
   * @return array
   *   A list of default settings, keyed by the setting name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'defaultStorageSettings',
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
    'fc21a4dfa972213b32af3f638335f093' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the field-level settings for this plugin.
   *
   * @return array
   *   A list of default settings, keyed by the setting name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'defaultFieldSettings',
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
    '2dd513c7882a4fc627052cd29ffbd58f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a settings array that can be stored as a configuration value.
   *
   * For all use cases where field settings are stored and managed as
   * configuration, this method is used to map from the field type\'s
   * representation of its settings to a representation compatible with
   * deployable configuration. This includes:
   * - Array keys at any depth must not contain a ".".
   * - Ideally, array keys at any depth are either numeric or can be enumerated
   *   as a "mapping" within the configuration schema. While not strictly
   *   required, this simplifies configuration translation UIs, configuration
   *   migrations between Drupal versions, and other use cases.
   * - To support configuration deployments, references to content entities
   *   must use UUIDs rather than local IDs.
   *
   * An example of a conversion between representations might be an
   * "allowed_values" setting that\'s structured by the field type as a
   * \\Drupal\\Core\\TypedData\\OptionsProviderInterface::getPossibleOptions()
   * result (i.e., values as keys and labels as values). For such a use case,
   * in order to comply with the above, this method could convert that
   * representation to a numerically indexed array whose values are sub-arrays
   * with the schema definable keys of "value" and "label".
   *
   * @param array $settings
   *   The field\'s settings in the field type\'s canonical representation.
   *
   * @return array
   *   An array (either the unmodified $settings or a modified representation)
   *   that is suitable for storing as a deployable configuration value.
   *
   * @see \\Drupal\\Core\\Config\\Config::set()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'storageSettingsToConfigData',
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
    '3972eace22caac3cc46f17164c3d9679' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a settings array in the field type\'s canonical representation.
   *
   * This function does the inverse of static::storageSettingsToConfigData(). It\'s
   * called when loading a field\'s settings from a configuration object.
   *
   * @param array $settings
   *   The field\'s settings, as it is stored within a configuration object.
   *
   * @return array
   *   The settings, in the representation expected by the field type and code
   *   that interacts with it.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::storageSettingsToConfigData()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'storageSettingsFromConfigData',
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
    'c1a5cdd87196f8b7bbac1b237393fde8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a settings array that can be stored as a configuration value.
   *
   * Same as static::storageSettingsToConfigData(), but for the field\'s settings.
   *
   * @param array $settings
   *   The field\'s settings in the field type\'s canonical representation.
   *
   * @return array
   *   An array (either the unmodified $settings or a modified representation)
   *   that is suitable for storing as a deployable configuration value.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::storageSettingsToConfigData()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'fieldSettingsToConfigData',
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
    '4d595d4d31536e1431e9ddc738a5269c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a settings array in the field type\'s canonical representation.
   *
   * This function does the inverse of static::fieldSettingsToConfigData().
   * It\'s called when loading a field\'s settings from a configuration
   * object.
   *
   * @param array $settings
   *   The field\'s settings, as it is stored within a configuration
   *   object.
   *
   * @return array
   *   The field settings, in the representation expected by the field type
   *   and code that interacts with it.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::fieldSettingsToConfigData()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'fieldSettingsFromConfigData',
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
    'c5abf249cf32b7f8d2535c0e23bb26a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a form for the storage-level settings.
   *
   * Invoked from \\Drupal\\field_ui\\Form\\FieldStorageConfigEditForm to allow
   * administrators to configure storage-level settings.
   *
   * Field storage might reject settings changes that affect the field
   * storage schema if the storage already has data. When the $has_data
   * parameter is TRUE, the form should not allow changing the settings that
   * take part in the schema() method. It is recommended to set #access to
   * FALSE on the corresponding elements.
   *
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   * @param bool $has_data
   *   TRUE if the field already has data, FALSE if not.
   *
   * @return array
   *   The form definition for the field settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'storageSettingsForm',
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
    '8276a4758ceca30e385048493e98cb8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a form for the field-level settings.
   *
   * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
   * administrators to configure field-level settings.
   *
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   *
   * @return array
   *   The form definition for the field settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'fieldSettingsForm',
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
    'ab9e7bfc4e3cf9f5fb053502baee1576' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates dependencies for field items.
   *
   * Dependencies are saved in the field configuration entity and are used to
   * determine configuration synchronization order. For example, if the field
   * type\'s default value is a content entity, this method should return an
   * array of dependencies listing the content entities.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   *
   * @return array
   *   An array of dependencies grouped by type (config, content, module,
   *   theme). For example:
   *   @code
   *   array(
   *     \'config\' => array(\'user.role.anonymous\', \'user.role.authenticated\'),
   *     \'content\' => array(\'node:article:f0a189e6-55fb-47fb-8005-5bef81c44d6d\'),
   *     \'module\' => array(\'node\', \'user\'),
   *     \'theme\' => array(\'seven\'),
   *   );
   *   @endcode
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::getConfigDependencyName()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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
    'eb0c3c81dc59f065ecdc8facb7ea6a95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates dependencies for field items on the storage level.
   *
   * Dependencies are saved in the field storage configuration entity and are
   * used to determine configuration synchronization order. For example, if the
   * field type storage depends on a particular entity type, this method should
   * return an array of dependencies listing the module that provides the entity
   * type.
   *
   * Dependencies returned from this method are stored in field storage
   * configuration and are always considered hard dependencies. If the
   * dependency is removed the field storage configuration must be deleted.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $field_storage_definition
   *   The field storage definition.
   *
   * @return array
   *   An array of dependencies grouped by type (config, content, module,
   *   theme). For example:
   *   @code
   *   [
   *     \'config\' => [\'user.role.anonymous\', \'user.role.authenticated\'],
   *     \'content\' => [\'node:article:f0a189e6-55fb-47fb-8005-5bef81c44d6d\'],
   *     \'module\' => [\'node\', \'user\'],
   *     \'theme\' => [\'seven\'],
   *   ];
   *   @endcode
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface::getConfigDependencyName()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
         'functionName' => 'calculateStorageDependencies',
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
    '552925429962c04e354850ff4cba84c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Informs the plugin that a dependency of the field will be deleted.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $dependencies
   *   An array of dependencies that will be deleted keyed by dependency type.
   *   Dependency types are, for example, entity, module and theme.
   *
   * @return bool
   *   TRUE if the field definition has been changed as a result, FALSE if not.
   *
   * @see \\Drupal\\Core\\Config\\ConfigEntityInterface::onDependencyRemoval()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'complexdatainterface' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemInterface',
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