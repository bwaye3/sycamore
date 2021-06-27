<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/AddressItem.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldType/AvailableCountriesTrait.php-1624732871',
   'data' => 
  array (
    'e530a7d2913dae5eceb111c38df9f9f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'address\' field type.
 *
 * @FieldType(
 *   id = "address",
 *   label = @Translation("Address"),
 *   description = @Translation("An entity field containing a postal address"),
 *   category = @Translation("Address"),
 *   default_widget = "address_default",
 *   default_formatter = "address_default",
 *   list_class = "\\Drupal\\address\\Plugin\\Field\\FieldType\\AddressFieldItemList"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '69873d2414b46ba823ad44576a8dddfc' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    'a3f7df7923afa3dce80279294ffc48a1' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    'a00a888602a8c1ddcf3b28a5aee46d8d' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '0e5386e1ee75c48b750494c256c027ae' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '49081c6e660cb426be3bd479033cd1ac' => 
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
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    'e4fa40bf87803c7b16fae4063eb43d6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '09559d1091f11a0a6a50a286e33a7d15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '1f3fd4952da9c2ae420b9eaf041084bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '4ae9982dfc2a113044c95d8612780f38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '6b9611ebf5e3e94a250b51ae57496b02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '11dac19b4de0853e1dbb6ac0efadf66e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form element validation handler: Removes empty field overrides.
   *
   * @param array $element
   *   The field overrides form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the entire form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'fieldOverridesValidate',
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
    '42e315b56edd351ea80676a854c2f795' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field overrides for the current field.
   *
   * @return array
   *   FieldOverride constants keyed by AddressField constants.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getFieldOverrides',
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
    '432bcaf94a05739393c9490cfd1af3ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes and returns the langcode property for the current field.
   *
   * Some countries use separate address formats for the local language VS
   * other languages. For example, China uses major-to-minor ordering
   * when the address is entered in Chinese, and minor-to-major when the
   * address is entered in other languages.
   * This means that the address must remember which language it was
   * entered in, to ensure consistent formatting later on.
   *
   * - For translatable entities this information comes from the field langcode.
   * - Non-translatable entities have no way to provide this information, since
   *   the field langcode never changes. In this case the field must store
   *   the interface language at the time of address creation.
   * - It is also possible to override the used language via field settings,
   *   in case the language is always known (e.g. a field storing the "english
   *   address" on a chinese article).
   *
   * The langcode property is intepreted by getLocale(), and in case it\'s NULL,
   * the field langcode is returned instead (indicating a non-multilingual site
   * or a translatable parent entity).
   *
   * @return string|null
   *   The langcode, or NULL if the field langcode should be used instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'initializeLangcode',
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
    'f75ed9f61c411ec3435c2814e7bbdf15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    'eb3ea81cfb30023fc549565bbb25f635' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
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
    '74546dd3519c13fe71014b8399b49458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getLocale',
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
    'c224f7cee8bf1e9075b32fcfd1eae16f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getCountryCode',
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
    '0f23e66a7154f86486409bb3acb8dbc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getAdministrativeArea',
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
    '6ff46e0bca40b1685089e4bcf3c4c12b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getLocality',
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
    '68041e009a3d8a76e29ada37dad074c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getDependentLocality',
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
    '3bd16e146654a3f50459338d7c98c429' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getPostalCode',
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
    '1f87402a85242e6f7d3e719441b98171' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getSortingCode',
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
    'f2addf556091dcd3eb801b31fe6f4b26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getAddressLine1',
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
    '3ba64dafcbcaf1ceea72652346d42366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getAddressLine2',
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
    'b2ba13ecffda44f86a77ecdfcaf1043d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getOrganization',
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
    'f9941e9abb79b0c6fe8c86add5383da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getGivenName',
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
    '7cbceeb57fa11161d2f4aba6132f62c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getAdditionalName',
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
    '8e93c1e73b36eddd58ff2c1cca3cf355' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'fielditembase' => 'Drupal\\Core\\Field\\FieldItemBase',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'datadefinition' => 'Drupal\\Core\\TypedData\\DataDefinition',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem',
         'functionName' => 'getFamilyName',
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