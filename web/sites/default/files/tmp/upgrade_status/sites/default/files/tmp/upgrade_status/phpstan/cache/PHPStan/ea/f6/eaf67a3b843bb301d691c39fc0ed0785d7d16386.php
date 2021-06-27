<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/CountryItem.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/AvailableCountriesTrait.php-1624732871',
   'data' => 
  array (
    '0e1a1755ee327e1cebbb5555c2f2009c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'address_country\' field type.
 *
 * @FieldType(
 *   id = "address_country",
 *   label = @Translation("Country"),
 *   description = @Translation("An entity field containing a country"),
 *   category = @Translation("Address"),
 *   default_widget = "address_country_default",
 *   default_formatter = "address_country_default"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '01b7cf58ffbba9b6bc629e7357187f71' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '7afd0361400637fe0999bff277509899' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    'e6847a44f88a1bb81b8b2b0dd4475d0a' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '131935ced50b9651555acb7a39d4009d' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '1c804550afda5025e0d84c391baeffb2' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    'd9e59bd0e9b256706b0281c6c7638840' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    'f5dbb8a38e43b1e8110cf333a81b8e35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '39bf10eff0fd1762e1d7a00e48208557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '34547151ab23725e9de57a97e8fad40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    '2e9a599897e2cb88e548ac6964f3c3fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
    'cbfea70888989301a67d7f609704b1a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\CountryItem',
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
  ),
));