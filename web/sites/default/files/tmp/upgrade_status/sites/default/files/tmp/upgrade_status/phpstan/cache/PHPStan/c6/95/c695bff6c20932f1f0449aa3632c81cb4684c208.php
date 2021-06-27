<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Plugin/Block/CheckoutProgressBlock.php-1624732871',
   'data' => 
  array (
    '968133cac84411e4fa41705061610639' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a checkout progress block.
 *
 * @Block(
 *   id = "commerce_checkout_progress",
 *   admin_label = @Translation("Checkout progress"),
 *   category = @Translation("Commerce")
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
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
    'b313e3aa798f8ab5f4a991542bfb506a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The checkout order manager.
   *
   * @var \\Drupal\\commerce_checkout\\CheckoutOrderManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
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
    'ad3784ddc88462c3f0b75e5dd30a237d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
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
    '8cf0cd994fb8931dd653f0436f3d74f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CheckoutProgressBlock.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_checkout\\CheckoutOrderManagerInterface $checkout_order_manager
   *   The checkout order manager.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The current route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
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
    '216bb4f6e62aad252342d228dd1b3a38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
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
    '4d7ed9345fcf0abe15d054e6bec27da5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the checkout progress block.
   *
   * @return array
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
         'functionName' => 'build',
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
    '00f9cb836f2eef80967f410895e854ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Block',
         'uses' => 
        array (
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Block\\CheckoutProgressBlock',
         'functionName' => 'getCacheMaxAge',
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