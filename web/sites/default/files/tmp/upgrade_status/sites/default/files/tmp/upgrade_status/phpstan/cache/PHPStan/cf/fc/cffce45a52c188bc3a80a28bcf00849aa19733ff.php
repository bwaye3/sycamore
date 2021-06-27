<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldTypePluginManagerInterface.php-1624732867',
   'data' => 
  array (
    '0587ec07823cb65673a582253ccbec3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for the field type plugin manager.
 *
 * @ingroup field_types
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
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
    '02da197dd957660dbb10650be1aecb11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new field item list.
   *
   * The provided entity is assigned as the parent of the created item list.
   * However, it is the responsibility of the caller (usually the parent entity
   * itself) to make the parent aware of the field as a new child.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity this field item list will be part of.
   * @param string $field_name
   *   The name of the field.
   * @param mixed $values
   *   (optional) The data value. If set, it has to match one of the supported
   *   data type format as documented for the data type classes.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemListInterface
   *   The instantiated object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'createFieldItemList',
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
    '6ca59fc300fbeb470519552308111909' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new field item as part of a field item list.
   *
   * The provided item list is assigned as the parent of the created item. It
   * However, it is the responsibility of the caller (usually the parent list
   * itself) to have the parent aware of the item as a new child.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   The field item list, for which to create a new item.
   * @param int $index
   *   The list index at which the item is created.
   * @param array|null $values
   *   (optional) The values to assign to the field item properties.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemInterface
   *   The instantiated object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'createFieldItem',
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
    'e257bdc01c48db1e7f5a9092abf658d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default field-level settings for a field type.
   *
   * @param string $type
   *   A field type name.
   *
   * @return array
   *   The field\'s default settings, as provided by the plugin definition, or
   *   an empty array if type or settings are undefined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'getDefaultFieldSettings',
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
    '0e8bf175e8a34722358fc6be24c59f4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default storage-level settings for a field type.
   *
   * @param string $type
   *   A field type name.
   *
   * @return array
   *   The type\'s default settings, as provided by the plugin definition, or an
   *   empty array if type or settings are undefined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'getDefaultStorageSettings',
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
    '9eab6d080f705b5944153476c3be135d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of all field types that can be added via UI.
   *
   * @return array
   *   An array of field type definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'getUiDefinitions',
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
    'c41a68e9c715175c2f58ff4052ea84ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns preconfigured field options for a field type.
   *
   * This is a wrapper around
   * \\Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface::getPreconfiguredOptions()
   * allowing modules to alter the result of this method by implementing
   * hook_field_ui_preconfigured_options_alter().
   *
   * @param string $field_type
   *   The field type plugin ID.
   *
   * @return array
   *   A multi-dimensional array as returned from
   *   \\Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface::getPreconfiguredOptions().
   *
   * @see \\Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface::getPreconfiguredOptions()
   * @see hook_field_ui_preconfigured_options_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'getPreconfiguredOptions',
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
    '33cd9722e9d16c0062c7dd60d89c50b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the PHP class that implements the field type plugin.
   *
   * @param string $type
   *   A field type name.
   *
   * @return string
   *   Field type plugin class name.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   *   Thrown if the field type plugin name is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldTypePluginManagerInterface',
         'functionName' => 'getPluginClass',
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