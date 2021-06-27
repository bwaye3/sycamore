<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/LabelHelper.php-1624732871',
   'data' => 
  array (
    'fc17567d6df8084647d8ce7385cd2139' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides translated labels for the library enums.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
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
    '86b87026e82489f76675a8366144ccc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the generic field labels.
   *
   * Intended primarily for backend settings screens.
   *
   * @return string[]
   *   The field labels, keyed by field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getGenericFieldLabels',
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
    '72e9e3678ccc03bb7e133e601ce712e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field labels suitable for the given address format.
   *
   * Intended to be shown to the end user, they sometimes use a more familiar
   * term than the field name (Company instead of Organization, Contact name
   * instead of Recipient, etc).
   *
   * @param \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormat $address_format
   *   The address format.
   *
   * @return string[]
   *   An array of labels, keyed by field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getFieldLabels',
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
    '81c04fa92a3179f95a598004a62d0b99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the administrative area label for the given type.
   *
   * @param string $administrative_area_type
   *   The administrative area type.
   *
   * @return string
   *   The administrative area label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getAdministrativeAreaLabel',
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
    '3dd6f4028f8893e8275f0442ea75e6a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all administrative area labels.
   *
   * @return string[]
   *   The administrative area labels, keyed by type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getAdministrativeAreaLabels',
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
    '1e93edc5a950b1a80886d54abec2499d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the locality label for the given type.
   *
   * @param string $locality_type
   *   The locality type.
   *
   * @return string
   *   The locality label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getLocalityLabel',
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
    'b1777b464e1a59a63a74bf8af447ad22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all locality labels.
   *
   * @return string[]
   *   The locality labels, keyed by type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getLocalityLabels',
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
    'a896a4a1c966c504f7adac486d1defd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the dependent locality label for the given type.
   *
   * @param string $dependent_locality_type
   *   The dependent locality type.
   *
   * @return string
   *   The dependent locality label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getDependentLocalityLabel',
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
    '50b74fb29b8298e940eb0308c03c95fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all dependent locality labels.
   *
   * @return string[]
   *   The dependent locality labels, keyed by type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getDependentLocalityLabels',
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
    'b0c94860eedd42acad84c0a8f1363346' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the postal code label for the given type.
   *
   * @param string $postal_code_type
   *   The postal code type.
   *
   * @return string
   *   The postal code label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getPostalCodeLabel',
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
    '371caf6c3d93ab26290cc9300b693232' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all postal code labels.
   *
   * @return string[]
   *   The postal code labels, keyed by type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'dependentlocalitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\DependentLocalityType',
          'localitytype' => 'CommerceGuys\\Addressing\\AddressFormat\\LocalityType',
          'postalcodetype' => 'CommerceGuys\\Addressing\\AddressFormat\\PostalCodeType',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
        ),
         'className' => 'Drupal\\address\\LabelHelper',
         'functionName' => 'getPostalCodeLabels',
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