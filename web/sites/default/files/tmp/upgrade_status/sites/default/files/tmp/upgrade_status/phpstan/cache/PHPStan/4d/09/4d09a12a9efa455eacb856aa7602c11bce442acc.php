<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/EventSubscriber/OrderPaidSubscriber.php-1624732871',
   'data' => 
  array (
    'a919b6e28193f7ddf86c04b71829c277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderPaidSubscriber',
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
    'b3001214549717c8f3b73296291d5214' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Places the order after it has been fully paid through an off-site gateway.
   *
   * Off-site payments can only be made at checkout.
   * If the gateway supports notifications, these two scenarios are possible:
   *
   * 1) The onNotify() method is called before the customer returns to the
   *    site. A payment is created, the order is now considered fully paid,
   *    causing the "payment" step to no longer be visible, sending the
   *    customer back to the first checkout step.
   * 2) The customer never returns to the site. The onNotify() method completed
   *    the payment, but the order is still unplaced and stuck in checkout.
   *
   * To avoid both problems, this subscriber ensures that the order is placed,
   * which also ensures that the customer is sent to the checkout complete
   * page once they (eventually) return.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderPaidSubscriber',
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
    'de3cb0102656b209764c6bd892d1a020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderPaidSubscriber',
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