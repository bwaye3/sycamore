<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/commerce_tax.module-1624732871',
   'data' => 
  array (
    'c93850ec4348b59252dab7ce0a23c0f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Provides tax functionality.
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
    '223614c2dccd96055534eba2f38e3912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_theme',
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
    '74e9861f8d9b800178c6784308ad2b6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_base_field_info().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_entity_base_field_info',
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
    '6cc251b224ca734062b4c2315749f116' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_access().
 *
 * Forbids the profile "tax_number" field from being deletable.
 * This is an alternative to locking the field which still leaves
 * the field editable.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_field_storage_config_access',
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
    '66db505c583fdb975dd547f01801e08b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_BASE_FORM_ID_alter() for \'commerce_store_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_form_commerce_store_form_alter',
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
    '1dc757f557b56c69c210d30673f2f416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter() for \'commerce_order_item_type_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_form_commerce_order_item_type_form_alter',
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
    '05f58f4e79c72b3d02f0e472982ed454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_item_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_form_commerce_order_item_type_form_alter',
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
    'b526948b583f265907f7de7197401c53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Submission handler for commerce_tax_form_commerce_order_item_type_form_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_order_item_type_form_submit',
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
    '7d30e45b1ed07d2e04f10d42e7516934' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_item_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_order_item_type_form_submit',
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
    'c2711b156d4123ed29a13122d6cca215' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_field_formatter_info_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_field_formatter_info_alter',
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
    'db8b18343f7e0af6d801e3f6c38d121e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_field_widget_info_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'taxabletype' => 'Drupal\\commerce_tax\\TaxableType',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_tax_field_widget_info_alter',
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