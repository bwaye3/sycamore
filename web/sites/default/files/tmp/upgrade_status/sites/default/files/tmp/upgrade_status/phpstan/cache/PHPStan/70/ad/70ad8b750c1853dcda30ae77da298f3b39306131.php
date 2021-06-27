<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Cache/Context/CartCacheContext.php-1624732871',
   'data' => 
  array (
    '020e5fa6c8334e984992168ba8abc33c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the CartCacheContext service, for "per cart" caching.
 *
 * Cache context ID: \'cart\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
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
    '8b4eeb50a34fa6421f3562685c7574fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
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
    '1afa27a11766259f12245f153ffc41f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart provider service.
   *
   * @var \\Drupal\\commerce_cart\\CartProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
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
    '6492d7e71d932b2037a6736db8913025' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CartCacheContext object.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user account.
   * @param \\Drupal\\commerce_cart\\CartProviderInterface $cart_provider
   *   The cart provider service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
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
    '87eab5ef0e3eec5c4adb0ba961bbec48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
         'functionName' => 'getLabel',
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
    'd113ed077bc492012e1535e085908357' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
         'functionName' => 'getContext',
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
    'f88d8d68d3bd9eba166b0c1a8c2f5757' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Cache\\Context',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'cachecontextinterface' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Cache\\Context\\CartCacheContext',
         'functionName' => 'getCacheableMetadata',
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