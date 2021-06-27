<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Resolver/ChainStoreResolverInterface.php-1624732871',
   'data' => 
  array (
    '3ad974514a28478809c80296b2d6755f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added resolvers one by one until one of them returns the store.
 *
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the store resolver one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\ChainStoreResolverInterface',
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
    'aab148d1d52877afbb8add3ec28654bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a resolver.
   *
   * @param \\Drupal\\commerce_store\\Resolver\\StoreResolverInterface $resolver
   *   The resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\ChainStoreResolverInterface',
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
    '5d171f2b2a5503e9863f9cc791b9354c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added resolvers.
   *
   * @return \\Drupal\\commerce_store\\Resolver\\StoreResolverInterface[]
   *   The resolvers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\ChainStoreResolverInterface',
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