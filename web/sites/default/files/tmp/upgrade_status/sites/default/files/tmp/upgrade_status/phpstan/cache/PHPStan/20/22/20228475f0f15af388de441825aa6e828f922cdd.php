<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Controller/PaymentNotificationController.php-1624732871',
   'data' => 
  array (
    '58266827f1f0eb475e1f51f806349e30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the endpoint for payment notifications.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'supportsnotificationsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsNotificationsInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentNotificationController',
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
    '7e7167523937af532f3191dee0331cce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the "notify" page.
   *
   * Also called the "IPN", "status", "webhook" page by payment providers.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $commerce_payment_gateway
   *   The payment gateway.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response
   *   The response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'supportsnotificationsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsNotificationsInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentNotificationController',
         'functionName' => 'notifyPage',
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