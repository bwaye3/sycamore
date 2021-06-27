<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Resolver/ChainCheckoutFlowResolverInterface.php-1624732871',
   'data' => 
  array (
    '4053cae9ec91f9451c10ee32e350e318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added resolvers one by one until one of them returns the checkout flow.
 *
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the checkout flow resolver one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_checkout\\Resolver\\ChainCheckoutFlowResolverInterface',
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
    'f273201027a596f1590877450c0954b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a resolver.
   *
   * @param \\Drupal\\commerce_checkout\\Resolver\\CheckoutFlowResolverInterface $resolver
   *   The resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_checkout\\Resolver\\ChainCheckoutFlowResolverInterface',
         'functionName' => 'addResolver',
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
    'fe0494eb8d110a60eb1913045681092b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added resolvers.
   *
   * @return \\Drupal\\commerce_checkout\\Resolver\\CheckoutFlowResolverInterface[]
   *   The resolvers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_checkout\\Resolver\\ChainCheckoutFlowResolverInterface',
         'functionName' => 'getResolvers',
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