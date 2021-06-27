<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Resolver/ChainOrderTypeResolverInterface.php-1624732871',
   'data' => 
  array (
    '33e380899642dd8bc4da7893bcdf5f34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added resolvers one by one until one of them returns the order type.
 *
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the order type resolver one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Resolver\\ChainOrderTypeResolverInterface',
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
    'a0dd88570c84c38abc54e0ab031b450b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a resolver.
   *
   * @param \\Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface $resolver
   *   The resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Resolver\\ChainOrderTypeResolverInterface',
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
    '249bebc2a6cd9f726b5fceb5b3b2d332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added resolvers.
   *
   * @return \\Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface[]
   *   The resolvers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Resolver\\ChainOrderTypeResolverInterface',
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