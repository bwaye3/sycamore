<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/ZoneItem.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/AvailableCountriesTrait.php-1624732871',
   'data' => 
  array (
    '42e473a887b349744ee4e2082130ddde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'zone\' field type.
 *
 * @FieldType(
 *   id = "address_zone",
 *   label = @Translation("Zone"),
 *   description = @Translation("An entity field containing a zone"),
 *   category = @Translation("Address"),
 *   list_class = "\\Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItemList",
 *   default_widget = "address_zone_default",
 *   default_formatter = "address_zone_default",
 *   cardinality = 1,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    '54d494f4aededa56fca97f5f01e0e0be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows field types to limit the available countries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'availablecountriesevent' => 'Drupal\\address\\Event\\AvailableCountriesEvent',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    'bfc76c87e05ea8a92a74aa6bcd784ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An altered list of available countries.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'availablecountriesevent' => 'Drupal\\address\\Event\\AvailableCountriesEvent',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    '6c9b903a3fc60de1180e5fa944dce5c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the default field-level settings.
   *
   * @return array
   *   A list of default settings, keyed by the setting name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'availablecountriesevent' => 'Drupal\\address\\Event\\AvailableCountriesEvent',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
         'functionName' => 'defaultCountrySettings',
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
    '8db0669222cada7dfa8f85d2585c571a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the field settings form.
   *
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   *
   * @return array
   *   The modified form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'availablecountriesevent' => 'Drupal\\address\\Event\\AvailableCountriesEvent',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
         'functionName' => 'countrySettingsForm',
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
    '7af786243aedef57905d27358ba96373' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the available countries for the current field.
   *
   * @return array
   *   A list of country codes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'availablecountriesevent' => 'Drupal\\address\\Event\\AvailableCountriesEvent',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
         'functionName' => 'getAvailableCountries',
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
    '10d85f8947aa07e6992b2b32a6ec008a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    '65d97f88ec680a2443843d34d0d41246' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    '7748387474daaa102c317f8b6a1828d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    '26dcdc5d350dcb7b0bdeb7153abf2c1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
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
    'a85c3df317370257e2f7fed812953114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
         'functionName' => 'isEmpty',
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
    'e05b44ae7f68c1bf2eca30c0204abb36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'zone' => 'CommerceGuys\\Addressing\\Zone\\Zone',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\ZoneItem',
         'functionName' => 'setValue',
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