<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Field/FieldType/TaxNumberItemInterface.php-1624732871',
   'data' => 
  array (
    '37733fdc165bfc3a614a375f6ac4d9c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for tax number field items.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
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
    'af404ab1b4019a28a48c6f1375987dd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies the given verification result.
   *
   * Ensures each portion of the result is stored in the field.
   *
   * @param \\Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult $result
   *   The verification result.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
         'functionName' => 'applyVerificationResult',
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
    '6acb08294aa06f197e930c76751fa8bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the current value can be used for tax calculation.
   *
   * Confirms that:
   * - The type is correct.
   * - The number is not empty.
   * - The number has been verified, or that unverified numbers are
   *   allowed when hen the verification web service is unavailable.
   *   This check is skipped if the type does not support verification.
   *
   * @param string $expected_type
   *   The expected tax number type.
   *
   * @return bool
   *   TRUE if the current value can be used, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
         'functionName' => 'checkValue',
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
    '03a3c8ce9a03037311299b9c03ef592f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed countries.
   *
   * Tax numbers will be collected only for these countries.
   *
   * @return string[]
   *   A list of country codes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
         'functionName' => 'getAllowedCountries',
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
    '93484223db356ee06930177e5c04dea4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed tax number types.
   *
   * Determined based on the allowed countries.
   *
   * @return string[]
   *   A list of plugin IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
         'functionName' => 'getAllowedTypes',
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
    'b6f46f08319ec871fb510e1f33462490' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the tax number type plugin.
   *
   * @return \\Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\TaxNumberTypeInterface
   *   The tax number type plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'verificationresult' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\VerificationResult',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Field\\FieldType\\TaxNumberItemInterface',
         'functionName' => 'getTypePlugin',
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