<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/SupportsNotificationsInterface.php-1624732871',
   'data' => 
  array (
    '49439ee0cd9f508849ef563af0ff4a3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for gateways which support notifications.
 *
 * Payment providers can use the notification URL (commerce_payment.notify)
 * to inform the site that a new pending/complete payment should be created
 * (if the payment happened off-site), or to provide information about an
 * existing payment (refunds, disputes, etc).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsNotificationsInterface',
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
    '53168f2ed4a79c736fae28dbf87c1454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the notification request.
   *
   * This method should only be concerned with creating/completing payments,
   * the parent order does not need to be touched. The order state is updated
   * automatically when the order is paid in full, or manually by the
   * merchant (via the admin UI).
   *
   * Note:
   * This method can\'t throw exceptions on failure because some payment
   * providers expect an error response to be returned in that case.
   * Therefore, the method can log the error itself and then choose which
   * response to return.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response|null
   *   The response, or NULL to return an empty HTTP 200 response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsNotificationsInterface',
         'functionName' => 'onNotify',
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