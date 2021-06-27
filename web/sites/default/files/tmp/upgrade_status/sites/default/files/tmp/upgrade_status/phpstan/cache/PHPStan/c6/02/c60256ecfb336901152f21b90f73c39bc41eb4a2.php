<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/commerce_price.module-1624732871',
   'data' => 
  array (
    '396f911f3b1e8cf02d540254f7041a14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Defines the Currency entity and the Price field.
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
    'e13299f24140c0d993cb17efd487f3de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pricecalculatedformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => NULL,
         'functionName' => 'commerce_price_theme',
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
    'e8b5ea19570f7d3375a94a4bf15b7a06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_insert() for \'configurable_language\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pricecalculatedformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => NULL,
         'functionName' => 'commerce_price_configurable_language_insert',
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
    '2ea1ee929def3b3621818ad366ed4867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter().
 *
 * Removes the "Calculated price" formatter from views field options, if
 * it is not applicable. Since the formatter is product variation specific,
 * this prevents it from accidentally being used on other entity types.
 *
 * @todo Remove when https://www.drupal.org/node/2991660 gets fixed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pricecalculatedformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => NULL,
         'functionName' => 'commerce_price_form_views_ui_config_item_form_alter',
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
    '63c26be41abbefed51613a1efcf6d9f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\field\\EntityField $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pricecalculatedformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => NULL,
         'functionName' => 'commerce_price_form_views_ui_config_item_form_alter',
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
    '98974d31e867f68dc29dd0ba857580fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pricecalculatedformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'entityfield' => 'Drupal\\views\\Plugin\\views\\field\\EntityField',
        ),
         'className' => NULL,
         'functionName' => 'commerce_price_form_views_ui_config_item_form_alter',
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