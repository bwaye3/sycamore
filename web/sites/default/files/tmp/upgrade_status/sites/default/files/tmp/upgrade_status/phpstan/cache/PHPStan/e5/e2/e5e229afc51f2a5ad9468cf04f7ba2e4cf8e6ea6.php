<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Resolver/ChainCountryResolverInterface.php-1624732871',
   'data' => 
  array (
    '39b0e5904b56b5c781042bb96e6181cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added resolvers one by one until one of them returns the country.
 *
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the country resolver one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
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
    'f278105c4382597d5b9bef0e3140ce4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a resolver.
   *
   * @param \\Drupal\\commerce\\Resolver\\CountryResolverInterface $resolver
   *   The resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
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
    '9f39bc30bc51badb7e86d69e649e9550' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added resolvers.
   *
   * @return \\Drupal\\commerce\\Resolver\\CountryResolverInterface[]
   *   The resolvers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
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