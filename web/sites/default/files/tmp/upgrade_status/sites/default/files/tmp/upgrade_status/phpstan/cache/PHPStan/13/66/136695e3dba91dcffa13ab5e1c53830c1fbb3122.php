<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/views.views.inc-1624732869',
   'data' => 
  array (
    '9b7a654f2f9f0a923982d24435c47b83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Provide views data that isn\'t tied to any other module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    '520811234c8b4e86d4c139060c55fc34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_views_data().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_views_data',
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
    'b5d3235574b231d091584b70eae47c0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\EntityViewsDataInterface $views_data */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_views_data',
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
    'dc00c296298c9ba1d9642e9f7f691e3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface $field_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_views_data',
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
    '6b5d1cf29af61277c36b1b84ca93fd71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_views_data_alter().
 *
 * Field modules can implement hook_field_views_data_views_data_alter() to
 * alter the views data on a per field basis. This is weirdly named so as
 * not to conflict with the \\Drupal::moduleHandler()->alter(\'field_views_data\')
 * in views_views_data().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_views_data_alter',
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
    'cb50ea721f592ba8afa6f8893d98f0c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface $field_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_views_data_alter',
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
    '83f9117e3827dd3f6ce7791fe1711ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determines whether the entity type the field appears in is SQL based.
 *
 * @param \\Drupal\\field\\FieldStorageConfigInterface $field_storage
 *   The field storage definition.
 *
 * @return \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage
 *   Returns the entity type storage if supported.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => '_views_field_get_entity_type_storage',
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
    'cb607cc30e02f7a7151fe2e477ac8ae3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the label of a certain field.
 *
 * Therefore it looks up in all bundles to find the most used field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_entity_field_label',
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
    'fb07790360ccbd5c273185abe332fe7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default views data implementation for a field.
 *
 * @param \\Drupal\\field\\FieldStorageConfigInterface $field_storage
 *   The field definition.
 *
 * @return array
 *   The default views data for the field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'views_field_default_views_data',
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
    '8cfb87577c87e586c85d6278d7d41107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_field_views_data().
 *
 * The function implements the hook in behalf of \'core\' because it adds a
 * relationship and a reverse relationship to entity_reference field type, which
 * is provided by core.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'core_field_views_data',
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
    '41ad4ffd04ef4071020347d6e6b46a86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Sql\\DefaultTableMapping $table_mapping */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'sqlcontententitystorage' => 'Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'actionconfigentityinterface' => 'Drupal\\system\\ActionConfigEntityInterface',
        ),
         'className' => NULL,
         'functionName' => 'core_field_views_data',
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