<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/EventSubscriber/QueryAccessSubscriber.php-1624732871',
   'data' => 
  array (
    '38a732ae689c58913671cf7bd57b9402' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart provider.
   *
   * @var \\Drupal\\commerce_cart\\CartProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\EventSubscriber',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'queryaccessevent' => 'Drupal\\entity\\QueryAccess\\QueryAccessEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\EventSubscriber\\QueryAccessSubscriber',
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
    '5c0eee8d753be16008ffb68765627200' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart session.
   *
   * @var \\Drupal\\commerce_cart\\CartSessionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\EventSubscriber',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'queryaccessevent' => 'Drupal\\entity\\QueryAccess\\QueryAccessEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\EventSubscriber\\QueryAccessSubscriber',
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
    'e6e551e34d593d5d2896699ce98b8b82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new QueryAccessSubscriber object.
   *
   * @param \\Drupal\\commerce_cart\\CartProviderInterface $cart_provider
   *   The cart provider.
   * @param \\Drupal\\commerce_cart\\CartSessionInterface $cart_session
   *   The cart session.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\EventSubscriber',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'queryaccessevent' => 'Drupal\\entity\\QueryAccess\\QueryAccessEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\EventSubscriber\\QueryAccessSubscriber',
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
    'd342eb989ecb24aca0158ee14a963c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\EventSubscriber',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'queryaccessevent' => 'Drupal\\entity\\QueryAccess\\QueryAccessEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\EventSubscriber\\QueryAccessSubscriber',
         'functionName' => 'getSubscribedEvents',
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
    '9b4b454a884b7a1d5b7c9bfd2d66700b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modifies the access conditions for cart orders.
   *
   * @param \\Drupal\\entity\\QueryAccess\\QueryAccessEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\EventSubscriber',
         'uses' => 
        array (
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'queryaccessevent' => 'Drupal\\entity\\QueryAccess\\QueryAccessEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\EventSubscriber\\QueryAccessSubscriber',
         'functionName' => 'onQueryAccess',
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