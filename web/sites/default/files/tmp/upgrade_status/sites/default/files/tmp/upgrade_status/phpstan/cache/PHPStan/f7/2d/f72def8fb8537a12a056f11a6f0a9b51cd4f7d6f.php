<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Commerce/TaxNumberType/EuropeanUnionVat.php-1624732871',
   'data' => 
  array (
    '468f698ffa6fd6ac0725310ab2193d6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the European Union VAT tax number type.
 *
 * Note that in addition to EU members, the country list also includes
 * Isle of Man (IM), which uses GB VAT, and Monaco (MC), which uses FR VAT.
 *
 * @CommerceTaxNumberType(
 *   id = "european_union_vat",
 *   label = "European Union VAT",
 *   countries = {
 *     "EU",
 *     "AT", "BE", "BG", "CY", "CZ", "DE", "DK", "EE", "ES", "FI",
 *     "FR", "GB", "GR", "HR", "HU", "IE", "IM", "IT", "LT", "LU",
 *     "LV", "MC", "MT", "NL", "PL", "PT", "RO", "SE", "SI", "SK",
 *   },
 *   examples = {"DE123456789", "HU12345678"}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
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
    '6ecb1d63d4de4fa33fd2359f7b9a2d81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The SOAP client for VIES (VAT Information Exchange System).
   *
   * @var \\SoapClient
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
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
    '54624bfc22c464bc57097bc959d6afdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
         'functionName' => 'validate',
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
    '40939d762c935392760400c5743fc4ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
         'functionName' => 'doVerify',
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
    '8eadf97764c7a473c5020314995845aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
         'functionName' => 'renderVerificationResult',
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
    '12fc411b8a9b7c1f1362c1b707771cf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the validation patterns.
   *
   * Source: http://ec.europa.eu/taxation_customs/vies/faq.html#item_11
   *
   * @return array
   *   The validation patterns, keyed by prefix.
   *   The prefix is an ISO country code, except for Greece (EL instead of GR).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
         'functionName' => 'getValidationPatterns',
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
    'a3bab104dc504ec46e2b1ec977b5371f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the SOAP client for VIES.
   *
   * @return \\SoapClient
   *   The SOAP client.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\EuropeanUnionVat',
         'functionName' => 'getSoapClient',
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