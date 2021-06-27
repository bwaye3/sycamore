<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/modules/commerce_order_test/src/EventSubscriber/OrderPaidSubscriber.php-1624732871',
   'data' => 
  array (
    '0bda14a266c108feb9cfdf62577327e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order_test\\EventSubscriber',
         'uses' => 
        array (
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order_test\\EventSubscriber\\OrderPaidSubscriber',
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
    '9ca390f48daed0830e07861250f0472c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Increments an order flag each time the paid event gets dispatched.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order_test\\EventSubscriber',
         'uses' => 
        array (
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order_test\\EventSubscriber\\OrderPaidSubscriber',
         'functionName' => 'onPaid',
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