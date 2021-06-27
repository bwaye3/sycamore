<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Resolver/CheckoutFlowResolverInterface.php-1624732871',
   'data' => 
  array (
    'b3016d7201d64b89947c7452ef7ff95f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for checkout flow resolvers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Resolver',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Resolver\\CheckoutFlowResolverInterface',
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
    '787c13a97cea3ee17584a800b98f80f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the checkout flow.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order that is being checked out.
   *
   * @return \\Drupal\\commerce_checkout\\Entity\\CheckoutFlowInterface
   *   The checkout flow, if resolved. Otherwise NULL, indicating that
   *   the next resolver in the chain should be called.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Resolver',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Resolver\\CheckoutFlowResolverInterface',
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