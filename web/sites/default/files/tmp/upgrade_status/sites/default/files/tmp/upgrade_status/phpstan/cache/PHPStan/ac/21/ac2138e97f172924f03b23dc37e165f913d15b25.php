<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Resolver/StoreCountryResolver.php-1624732871',
   'data' => 
  array (
    'eaa53540bc0f0c5cf3a207f6455325da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the store\'s billing country.
 *
 * A precise default country is important for currency formatting,
 * and the store\'s billing country is usually more precise than the
 * site\'s default country returned in DefaultCountryResolver.
 *
 * Note that this resolver sets the convention of the current store
 * being resolved before the current country. Custom resolvers can
 * reverse that convention if needed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
          'country' => 'Drupal\\commerce\\Country',
          'countryresolverinterface' => 'Drupal\\commerce\\Resolver\\CountryResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\StoreCountryResolver',
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
    '13a21df1afdaf309394bec836bb2fe2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current store.
   *
   * @var \\Drupal\\commerce_store\\CurrentStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
          'country' => 'Drupal\\commerce\\Country',
          'countryresolverinterface' => 'Drupal\\commerce\\Resolver\\CountryResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\StoreCountryResolver',
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
    '3d85ec5f5003bd3da2f4e5199cbb3e49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new StoreCountryResolver object.
   *
   * @param \\Drupal\\commerce_store\\CurrentStoreInterface $current_store
   *   The current store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
          'country' => 'Drupal\\commerce\\Country',
          'countryresolverinterface' => 'Drupal\\commerce\\Resolver\\CountryResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\StoreCountryResolver',
         'functionName' => '__construct',
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
    '9e9a2646dbd24ff764a6e855cddd8c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Resolver',
         'uses' => 
        array (
          'country' => 'Drupal\\commerce\\Country',
          'countryresolverinterface' => 'Drupal\\commerce\\Resolver\\CountryResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Resolver\\StoreCountryResolver',
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