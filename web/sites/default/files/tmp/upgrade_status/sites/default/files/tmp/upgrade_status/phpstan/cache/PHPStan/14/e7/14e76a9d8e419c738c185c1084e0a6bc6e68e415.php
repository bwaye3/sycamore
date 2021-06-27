<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Commerce/TaxType/LocalTaxTypeInterface.php-1624732871',
   'data' => 
  array (
    '4ee52172ae2d8bc47fed1482c313dbb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for local tax type plugins.
 *
 * Local tax types store one or more tax zones with their
 * corresponding tax rates.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeInterface',
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
    '3f81121777eafc3f82cdb744b4548435' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether tax should be rounded at the order item level.
   *
   * @return bool
   *   TRUE if tax should be rounded at the order item level, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeInterface',
         'functionName' => 'shouldRound',
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
    '05e354cf76eee59dca62a720f1294e5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the tax zones.
   *
   * @return \\Drupal\\commerce_tax\\TaxZone[]
   *   The tax zones, keyed by ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeInterface',
         'functionName' => 'getZones',
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
    '2ec66b1d7fc7e005dcb1479ac62e2c68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the tax zones which match the given address.
   *
   * @param \\CommerceGuys\\Addressing\\AddressInterface $address
   *   The address.
   *
   * @return \\Drupal\\commerce_tax\\TaxZone[]
   *   The tax zones, keyed by ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeInterface',
         'functionName' => 'getMatchingZones',
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