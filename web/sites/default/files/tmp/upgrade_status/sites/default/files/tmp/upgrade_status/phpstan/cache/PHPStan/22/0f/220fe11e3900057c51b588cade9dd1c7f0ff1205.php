<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/CurrentCountry.php-1624732871',
   'data' => 
  array (
    'ce88b579879f1de17cafe0fd6cca57b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Holds a reference to the current country, resolved on demand.
 *
 * The ChainCountryResolver runs the registered country resolvers one by one
 * until one of them returns the country.
 * The DefaultCountryResolver runs last, and will select the site\'s default
 * country. Custom resolvers can choose based on the user profile, GeoIP, etc.
 *
 * @see \\Drupal\\commerce\\Resolver\\ChainCountryResolver
 * @see \\Drupal\\commerce\\Resolver\\DefaultCountryResolver
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
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
    '68e99434be3eb0c563c10f1c62d62c77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
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
    'a864c06b558c59f5ec299acc87ea2642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain resolver.
   *
   * @var \\Drupal\\commerce\\Resolver\\ChainCountryResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
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
    '8e5763228a38769ba696761b2f15e211' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache of resolved countries. One per request.
   *
   * @var \\SplObjectStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
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
    '0121c1017eac34fcf461b9c069f2ee03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CurrentCountry object.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   * @param \\Drupal\\commerce\\Resolver\\ChainCountryResolverInterface $chain_resolver
   *   The chain resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
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
    '6aa703a119cd82b2d9424f2ecd30df02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'chaincountryresolverinterface' => 'Drupal\\commerce\\Resolver\\ChainCountryResolverInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce\\CurrentCountry',
         'functionName' => 'getCountry',
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