<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/SupportsRefundsInterface.php-1624732871',
   'data' => 
  array (
    'ce45d5bbad6b95aa7ab5585427365519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for gateways which support refunds.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsRefundsInterface',
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
    '29b4c8733e579b7bb350fdca0d2b4465' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the given payment can be refunded.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment to refund.
   *
   * @return bool
   *   TRUE if the payment can be refunded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsRefundsInterface',
         'functionName' => 'canRefundPayment',
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
    'f1b948ed4c1fc246e84e63bf5796d4cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refunds the given payment.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment to refund.
   * @param \\Drupal\\commerce_price\\Price $amount
   *   The amount to refund. If NULL, defaults to the entire payment amount.
   *
   * @throws \\Drupal\\commerce_payment\\Exception\\PaymentGatewayException
   *   Thrown when the transaction fails for any reason.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsRefundsInterface',
         'functionName' => 'refundPayment',
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