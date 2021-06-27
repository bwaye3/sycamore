<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment_example/src/Plugin/Commerce/PaymentGateway/OnsiteInterface.php-1624732871',
   'data' => 
  array (
    '1ddf15505e70308653c3eef877723449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the interface for the example_onsite payment gateway.
 *
 * The OnsitePaymentGatewayInterface is the base interface which all on-site
 * gateways implement. The other interfaces signal which additional capabilities
 * the gateway has. The gateway plugin is free to expose additional methods,
 * which would be defined below.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'onsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayInterface',
          'supportsauthorizationsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsAuthorizationsInterface',
          'supportsrefundsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsRefundsInterface',
          'supportsupdatingstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsUpdatingStoredPaymentMethodsInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OnsiteInterface',
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
  ),
));