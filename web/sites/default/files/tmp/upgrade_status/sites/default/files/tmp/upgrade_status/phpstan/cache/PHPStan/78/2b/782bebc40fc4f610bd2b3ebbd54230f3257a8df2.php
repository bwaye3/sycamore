<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/EventSubscriber/CartEventSubscriber.php-1624732871',
   'data' => 
  array (
    '48132ed5e6af59e81c4f5ac02b97fffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\EventSubscriber',
         'uses' => 
        array (
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\EventSubscriber\\CartEventSubscriber',
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
    '42c755e8cf76b54b33beaac9ac6b2a55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes coupons when the cart has been emptied.
   *
   * @param \\Drupal\\commerce_cart\\Event\\CartEmptyEvent $event
   *   The cart event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\EventSubscriber',
         'uses' => 
        array (
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\EventSubscriber\\CartEventSubscriber',
         'functionName' => 'onCartEmpty',
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