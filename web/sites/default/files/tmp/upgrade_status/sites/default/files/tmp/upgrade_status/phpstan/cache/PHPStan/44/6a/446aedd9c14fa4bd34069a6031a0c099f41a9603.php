<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Controller/CartController.php-1624732871',
   'data' => 
  array (
    '2bd04c35c9036581d7f17e2cd08d6ffe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the cart page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
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
    '73c35b5a8990bba7672cbbfae346645e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart provider.
   *
   * @var \\Drupal\\commerce_cart\\CartProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
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
    '6ac81ae12d823fe9261203bd8655aa04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CartController object.
   *
   * @param \\Drupal\\commerce_cart\\CartProviderInterface $cart_provider
   *   The cart provider.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
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
    'e2e62f9ac9fca7662fa91fa6732a0a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'create',
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
    'a6226f48f73bdf1f5564c374701b0263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Outputs a cart view for each non-empty cart belonging to the current user.
   *
   * @return array
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'cartPage',
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
    '1f6afdeb3c5636c4f5894156aebf3bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $cart */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'cartPage',
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
    '35d16f61b4195d5d50a444e55b8c1f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cart views for each cart.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface[] $carts
   *   The cart orders.
   *
   * @return array
   *   An array of view ids keyed by cart order ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'getCartViews',
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
    '4ffcdcfe321979995ba9709a1c74de1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $cart */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'getCartViews',
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
    '2f3a99db9fb95f6ff8e4b6625f593bdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Controller',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerbase' => 'Drupal\\Core\\Controller\\ControllerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Controller\\CartController',
         'functionName' => 'getCartViews',
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