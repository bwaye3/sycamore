<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Resolver/TaxRateResolverInterface.php-1624732871',
   'data' => 
  array (
    '8c7db43a0117cea8857f4c420d2b222c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for tax rate resolvers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Resolver',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Resolver\\TaxRateResolverInterface',
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
    '8fb263fedd5c6c518017661e1cbfb367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the tax rate for the given tax zone.
   *
   * @param \\Drupal\\commerce_tax\\TaxZone $zone
   *   The tax zone.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $customer_profile
   *   The customer profile. Contains the address and tax number.
   *
   * @return \\Drupal\\commerce_tax\\TaxRate|string|null
   *   The tax rate, NO_APPLICABLE_TAX_RATE, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Resolver',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Resolver\\TaxRateResolverInterface',
         'functionName' => 'resolve',
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