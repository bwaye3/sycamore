<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/CommerceEntityViewsData.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/EntityManagerBridgeTrait.php-1624732871',
   'data' => 
  array (
    'ff305d99e7ec0e9d48662e888232fb6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides improvements to core\'s generic views integration for entities.
 *
 * Contains special handling for the following base field types:
 * - address, address_country
 * - commerce_price
 * - datetime
 * - list_float, list_integer, list_string
 * - state
 * Workaround for core issue #2337515.
 *
 * Provides views data for bundle plugin fields,
 * as a workaround for core issue #2898635.
 *
 * Provides the missing delta field for multi-value fields,
 * as a workaround for core issue #3097568.
 *
 * Fixes handling of fields with multiple properties,
 * as a workaround for core issue #3097636.
 *
 * Provides reverse relationships for base entity_reference fields,
 * as a workaround for core issue #2706431.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
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
    '629333495baa1a554d44e7c58bf135a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides getters for former entity manager services.
 *
 * This allows classes to work with Drupal 8.7 and 8.8+ simultaneously.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
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
    '77cdd2b0b2546f64deda6d3cfc4aebb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity field manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   *   The entity field manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
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
    '9d9e91df97642406f05b0a00154b4830' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type bundle info.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface
   *   The entity type bundle info.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'getEntityTypeBundleInfo',
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
    '3c4f28b56f41744f030706ddd90b2de5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'getEntityTypeManager',
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
    '33d624420c78cc5b0c2438bcc17350cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table mapping.
   *
   * @var \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
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
    'adea6a7036d2f15b72588ce95d33721d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'getViewsData',
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
    '221d2af9f24758bba719328649cabe98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds views data for the given bundle field.
   *
   * Based on views_field_default_views_data(), which is only invoked
   * for configurable fields.
   *
   * Assumes that the bundle field is not shared between bundles, since
   * the bundle plugin API doesn\'t support that.
   *
   * @param array $data
   *   The views data.
   * @param \\Drupal\\entity\\BundleFieldDefinition $bundle_field
   *   The bundle field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'addBundleFieldData',
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
    'a8bf04d8461a97f84376dc73ef09d847' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'mapFieldDefinition',
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
    'e06ae4473b8467d968e7cd4bd041d43b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for address base fields.
   *
   * Based on address_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForAddress',
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
    '62f04331fbe163144183a00599dd39af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for address_country base fields.
   *
   * Based on address_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForAddressCountry',
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
    'daa282deaef29071a15b60c9dc3bfd89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for commerce_price base fields.
   *
   * Based on commerce_price_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForCommercePrice',
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
    '090b884d522e77ffc36fb4c6ccfce649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for datetime base fields.
   *
   * Based on datetime_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForDatetime',
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
    '59f5c54ad98c4ea39d9ec7b7879866b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for list_float base fields.
   *
   * Based on options_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForListFloat',
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
    '52aa3750118ebdef71d5f0a1ecf873f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for list_integer base fields.
   *
   * Based on options_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForListInteger',
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
    '5255a187782c62d0864d8f1168f07919' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for list_string base fields.
   *
   * Based on options_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForListString',
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
    '9ed3dd3c09329784b8834cdb4b8fc1ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Corrects the views data for state base fields.
   *
   * Based on state_machine_field_views_data().
   *
   * @param string $table
   *   The table name.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition.
   * @param array $views_field
   *   The views field data.
   * @param string $field_column_name
   *   The field column being processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'processViewsDataForState',
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
    '10635c4502d6c39deaf91e0882f4f6ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds reverse relationships for the base entity reference fields.
   *
   * @param array $data
   *   The views data.
   * @param \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields
   *   The entity reference fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'contententitytype' => 'Drupal\\Core\\Entity\\ContentEntityType',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'tablemappinginterface' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'bundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
          'entityviewsdata' => 'Drupal\\views\\EntityViewsData',
        ),
         'className' => 'Drupal\\commerce\\CommerceEntityViewsData',
         'functionName' => 'addReverseRelationships',
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