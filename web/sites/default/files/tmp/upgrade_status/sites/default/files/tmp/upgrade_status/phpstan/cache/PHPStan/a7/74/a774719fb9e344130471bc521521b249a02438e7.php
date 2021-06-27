<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldDefinitionInterface.php-1624732867',
   'data' => 
  array (
    '21cd40a51048b4fa0544e60b364e97aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for entity field definitions.
 *
 * An entity field is a data object that holds the values of a particular field
 * for a particular entity (see \\Drupal\\Core\\Field\\FieldItemListInterface). For
 * example, $node_1->body and $node_2->body contain different data and therefore
 * are different field objects.
 *
 * In contrast, an entity field *definition* is an object that returns
 * information *about* a field (e.g., its type and settings) rather than its
 * values. As such, if all the information about $node_1->body and $node_2->body
 * is the same, then the same field definition object can be used to describe
 * both.
 *
 * It is up to the class implementing this interface to manage where the
 * information comes from. For example, field.module provides an implementation
 * based on two levels of configuration. It allows the site administrator to add
 * custom fields to any entity type and bundle via the "field_storage_config"
 * and "field_config" configuration entities. The former for storing
 * configuration that is independent of which entity type and bundle the field
 * is added to, and the latter for storing configuration that is specific to the
 * entity type and bundle. The class that implements "field_config"
 * configuration entities also implements this interface, returning information
 * from either itself, or from the corresponding "field_storage_config"
 * configuration, as appropriate.
 *
 * However, entity base fields, such as $node->title, are not managed by
 * field.module and its "field_storage_config"/"field_config"
 * configuration entities. Therefore, their definitions are provided by
 * different objects based on the class \\Drupal\\Core\\Field\\BaseFieldDefinition,
 * which implements this interface as well.
 *
 * Field definitions may fully define a concrete data object (e.g.,
 * $node_1->body), or may provide a best-guess definition for a data object that
 * might come into existence later. For example, $node_1->body and $node_2->body
 * may have different definitions (e.g., if the node types are different). When
 * adding the "body" field to a View that can return nodes of different types,
 * the View can get a field definition that represents the "body" field
 * abstractly, and present Views configuration options to the administrator
 * based on that abstract definition, even though that abstract definition can
 * differ from the concrete definition of any particular node\'s body field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
    '7220f77715a13e6c9f217e2e2a07f005' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the machine name of the field.
   *
   * This defines how the field data is accessed from the entity. For example,
   * if the field name is "foo", then $entity->foo returns its data.
   *
   * @return string
   *   The field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getName',
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
    'd90689d93a525606ecaf6919eaf55c64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the field type.
   *
   * @return string
   *   The field type, i.e. the id of a field type plugin. For example \'text\'.
   *
   * @see \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getType',
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
    '3fd14149d419215c2886cfb3533e76a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the ID of the entity type the field is attached to.
   *
   * This method should not be confused with EntityInterface::getEntityTypeId()
   * (configurable fields are config entities, and thus implement both
   * interfaces):
   *   - FieldDefinitionInterface::getTargetEntityTypeId() answers "as a field,
   *     which entity type are you attached to?".
   *   - EntityInterface::getEntityTypeId() answers "as a (config) entity, what
   *     is your own entity type?".
   *
   * @return string
   *   The entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getTargetEntityTypeId',
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
    '82242e7cf5e07e516ba9aae9ac64d563' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the bundle the field is attached to.
   *
   * This method should not be confused with EntityInterface::bundle()
   * (configurable fields are config entities, and thus implement both
   * interfaces):
   *   - FieldDefinitionInterface::getTargetBundle() answers "as a field,
   *     which bundle are you attached to?".
   *   - EntityInterface::bundle() answers "as a (config) entity, what
   *     is your own bundle?" (not relevant in our case, the config entity types
   *     used to store the definitions of configurable fields do not have
   *     bundles).
   *
   * @return string|null
   *   The bundle the field is defined for, or NULL if it is a base field; i.e.,
   *   it is not bundle-specific.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getTargetBundle',
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
    'd3879f0b8e6039c61379be3beb1956d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the display for the field can be configured.
   *
   * @param string $display_context
   *   The display context. Either \'view\' or \'form\'.
   *
   * @return bool
   *   TRUE if the display for this field is configurable in the given context.
   *   If TRUE, the display options returned by getDisplayOptions() may be
   *   overridden via the respective entity display.
   *
   * @see \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'isDisplayConfigurable',
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
    'f5d5c3a0ee3e79f9b4fab4e0d182c20c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default display options for the field.
   *
   * If the field\'s display is configurable, the returned display options act
   * as default values and may be overridden via the respective entity display.
   * Otherwise, the display options will be applied to entity displays as is.
   *
   * @param string $display_context
   *   The display context. Either \'view\' or \'form\'.
   *
   * @return array|null
   *   The array of display options for the field, or NULL if the field is not
   *   displayed. The following key/value pairs may be present:
   *   - label: (string) Position of the field label. The default \'field\' theme
   *     implementation supports the values \'inline\', \'above\' and \'hidden\'.
   *     Defaults to \'above\'. Only applies to \'view\' context.
   *   - region: (string) The region the field is in, or \'hidden\'. If not
   *     specified, the default region will be used.
   *   - type: (string) The plugin (widget or formatter depending on
   *     $display_context) to use. If not specified or if the requested plugin
   *     is unknown, the \'default_widget\' / \'default_formatter\' for the field
   *     type will be used. Previously \'hidden\' was a valid value, it is now
   *     deprecated in favor of specifying \'region\' => \'hidden\'.
   *   - settings: (array) Settings for the plugin specified above. The default
   *     settings for the plugin will be used for settings left unspecified.
   *   - third_party_settings: (array) Settings provided by other extensions
   *     through hook_field_formatter_third_party_settings_form().
   *   - weight: (float) The weight of the element. Not needed if \'type\' is
   *     \'hidden\'.
   *   The defaults of the various display options above get applied by the used
   *   entity display.
   *
   * @see \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getDisplayOptions',
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
    '3c826193f8e849be071c71223b454ec0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the field can be empty.
   *
   * If a field is required, an entity needs to have at least a valid,
   * non-empty item in that field\'s FieldItemList in order to pass validation.
   *
   * An item is considered empty if its isEmpty() method returns TRUE.
   * Typically, that is if at least one of its required properties is empty.
   *
   * @return bool
   *   TRUE if the field is required.
   *
   * @see \\Drupal\\Core\\TypedData\\Plugin\\DataType\\ItemList::isEmpty()
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::isEmpty()
   * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface:isRequired()
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::getDefaultConstraints()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
    '31e4fd35ced6a09b1254c108167b7611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default value literal for the field.
   *
   * This method retrieves the raw property assigned to the field definition.
   * When computing the runtime default value for a field in a given entity,
   * ::getDefaultValue() should be used instead.
   *
   * @return array
   *   The default value for the field, as a numerically indexed array of items,
   *   each item being a property/value array (array() for no default value).
   *
   * @see FieldDefinitionInterface::getDefaultValue()
   * @see FieldDefinitionInterface::getDefaultValueCallback()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getDefaultValueLiteral',
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
    '620f665f5c4e02e7489637c1ff67421e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default value callback for the field.
   *
   * This method retrieves the raw property assigned to the field definition.
   * When computing the runtime default value for a field in a given entity,
   * ::getDefaultValue() should be used instead.
   *
   * @return string|null
   *   The default value callback for the field.
   *
   * @see FieldDefinitionInterface::getDefaultValue()
   * @see FieldDefinitionInterface::getDefaultValueLiteral()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getDefaultValueCallback',
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
    'd24dd7099d4a948ff9f461fe1587ec4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default value for the field in a newly created entity.
   *
   * This method computes the runtime default value for a field in a given
   * entity. To access the raw properties assigned to the field definition,
   * ::getDefaultValueLiteral() or ::getDefaultValueCallback() should be used
   * instead.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity for which the default value is generated.
   *
   * @return array
   *   The default value for the field, as a numerically indexed array of items,
   *   each item being a property/value array (array() for no default value).
   *
   * @see FieldDefinitionInterface::getDefaultValueLiteral()
   * @see FieldDefinitionInterface::getDefaultValueCallback()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getDefaultValue',
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
    'b0fa10d40b736f8013e06e87b1e13118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the field is translatable.
   *
   * @return bool
   *   TRUE if the field is translatable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'isTranslatable',
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
    '8ab61e4be02c77033ebd5e5288d035d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the field storage definition.
   *
   * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
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
    'ca465233c7dc901991a3e67f53acaecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an object that can be saved in configuration.
   *
   * Base fields are defined in code. In order to configure field definition
   * properties per bundle use this method to create an override that can be
   * saved in configuration.
   *
   * @see \\Drupal\\Core\\Field\\Entity\\BaseFieldBundleOverride
   *
   * @param string $bundle
   *   The bundle to get the configurable field for.
   *
   * @return \\Drupal\\Core\\Field\\FieldConfigInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getConfig',
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
    '1752ca453093a1bbda1fa5ccfa53ed7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a unique identifier for the field.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'listdatadefinitioninterface' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
         'functionName' => 'getUniqueIdentifier',
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