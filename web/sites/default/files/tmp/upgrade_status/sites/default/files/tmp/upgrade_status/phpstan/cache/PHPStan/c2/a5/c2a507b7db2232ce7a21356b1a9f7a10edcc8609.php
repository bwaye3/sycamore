<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/modules/commerce_payment_test/src/EventSubscriber/FilterPaymentGatewaysSubscriber.php-1624732871',
   'data' => 
  array (
    '94a30bb1755a65e1993c7ef234923841' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_test\\EventSubscriber',
         'uses' => 
        array (
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment_test\\EventSubscriber\\FilterPaymentGatewaysSubscriber',
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
    '3482697360776afda211adaa4e6d3de3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters out payment gateways listed in an order\'s data attribute.
   *
   * @param \\Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_test\\EventSubscriber',
         'uses' => 
        array (
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment_test\\EventSubscriber\\FilterPaymentGatewaysSubscriber',
         'functionName' => 'onFilter',
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