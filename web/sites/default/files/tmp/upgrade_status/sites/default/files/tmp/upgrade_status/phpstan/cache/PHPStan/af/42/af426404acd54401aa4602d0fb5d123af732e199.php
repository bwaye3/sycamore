<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Element/Address.php-1624732871',
   'data' => 
  array (
    '236e6081d24f7a1b49c4e92d7815114c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an address form element.
 *
 * Use #field_overrides to override the country-specific address format,
 * forcing specific properties to be hidden, optional, or required.
 *
 * Usage example:
 * @code
 * $form[\'address\'] = [
 *   \'#type\' => \'address\',
 *   \'#default_value\' => [
 *     \'given_name\' => \'John\',
 *     \'family_name\' => \'Smith\',
 *     \'organization\' => \'Google Inc.\',
 *     \'address_line1\' => \'1098 Alta Ave\',
 *     \'postal_code\' => \'94043\',
 *     \'locality\' => \'Mountain View\',
 *     \'administrative_area\' => \'CA\',
 *     \'country_code\' => \'US\',
 *     \'langcode\' => \'en\',
 *   ],
 *   \'#field_overrides\' => [
 *     AddressField::ORGANIZATION => FieldOverride::REQUIRED,
 *     AddressField::ADDRESS_LINE2 => FieldOverride::HIDDEN,
 *     AddressField::POSTAL_CODE => FieldOverride::OPTIONAL,
 *   ],
 *   \'#available_countries\' => [\'DE\', \'FR\'],
 * ];
 * @endcode
 *
 * @FormElement("address")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
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
    '1cad5d45192e7351fed0a60f14165bd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'getInfo',
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
    '50e09b6716cea29fee2d48675ebcc063' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures all keys are set on the provided value.
   *
   * @param array $value
   *   The value.
   *
   * @return array
   *   The modified value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'applyDefaults',
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
    'a909dc261dc8117924db7d15bd1693d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'valueCallback',
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
    '4dc4851a27678adba6aed142cb51daf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the address form element.
   *
   * @param array $element
   *   The form element to process.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when #used_fields is malformed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'processAddress',
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
    '79fc4c16f7e68a0b94c0a9906e398747' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the format-specific address elements.
   *
   * @param array $element
   *   The existing form element array.
   * @param array $value
   *   The address value, in $property_name => $value format.
   *
   * @return array
   *   The modified form element array containing the format specific elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'addressElements',
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
    'afbb81efbdeaa304e0d74aa134cb71bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormat $address_format */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'addressElements',
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
    'da4026bd7c676066a1ae6d17a41cc557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the subdivision elements, adding predefined values where found.
   *
   * @param array $element
   *   The existing form element array.
   * @param array $value
   *   The address value, in $property_name => $value format.
   * @param \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormat $address_format
   *   The address format.
   *
   * @return array
   *   The processed form element array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'processSubdivisionElements',
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
    '1f663a239bce82edcc4771a4d51d6a1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Groups elements with the same #group so that they can be inlined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'groupElements',
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
    '64c15a208b9fea0435ff2cd18d6e1cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'ajaxRefresh',
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
    '10cf85e9091aaf4aac8afd8a72f7d23d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears dependent form values when the country or subdivision changes.
   *
   * Implemented as an #after_build callback because #after_build runs before
   * validation, allowing the values to be cleared early enough to prevent the
   * "Illegal choice" error.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Element',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformathelper' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
          'fieldoverride' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverride',
          'fieldoverrides' => 'CommerceGuys\\Addressing\\AddressFormat\\FieldOverrides',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'labelhelper' => 'Drupal\\address\\LabelHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'formelement' => 'Drupal\\Core\\Render\\Element\\FormElement',
        ),
         'className' => 'Drupal\\address\\Element\\Address',
         'functionName' => 'clearValues',
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