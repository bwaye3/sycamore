<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/OffsitePaymentGatewayInterface.php-1624732871',
   'data' => 
  array (
    'a8621e272676d296892384383614fe9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the base interface for off-site payment gateways.
 *
 * Off-site payment flow:
 * 1) Customer hits the "payment" checkout step.
 * 2) The PaymentProcess checkout pane shows the "offsite-payment" plugin form.
 * 3) The plugin form performs a redirect or shows an iFrame.
 * 4) The customer provides their payment details to the payment provider.
 * 5) The payment provider redirects the customer back to the return url.
 * 6) A payment is created in either onReturn() or onNotify().
 *
 * If the payment provider supports asynchronous notifications (IPNs), then
 * creating the payment in onNotify() is preferred, since it is guaranteed to
 * be called even if the customer does not return to the site.
 *
 * Note that onReturn() will be skipped if onNotify() was called before the
 * customer returned to the site, completing the payment process and
 * placing the order.
 *
 * If the customer declines to provide their payment details, and cancels
 * the payment at the payment provider, they will be redirected back to the
 * cancel url.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
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
    '5a5b96c3f6ebd6e515ace08c717afae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URL to the "notify" page.
   *
   * When supported, this page is called asynchronously to notify the site of
   * payment changes (new payment or capture/void/refund of an existing one).
   *
   * @return \\Drupal\\Core\\Url
   *   The "notify" page url.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
         'functionName' => 'getNotifyUrl',
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
    '3bdc5fc70fd7239223fd58ec9279f0a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the "return" request.
   *
   * This method should only be concerned with creating/completing payments,
   * the parent order does not need to be touched. The order state is updated
   * automatically when the order is paid in full, or manually by the
   * merchant (via the admin UI).
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   *
   * @throws \\Drupal\\commerce_payment\\Exception\\PaymentGatewayException
   *   Thrown when the request is invalid or the payment failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
         'functionName' => 'onReturn',
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
    '68a847c7346643a162ec13d9c2572152' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the "cancel" request.
   *
   * Allows the payment gateway to clean up any data added to the $order, set
   * a message for the customer.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
         'functionName' => 'onCancel',
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