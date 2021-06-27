<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PaymentOptionsBuilderInterface.php-1624732871',
   'data' => 
  array (
    '657167f257f0264e4a6ed5dd0e1d994e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds payment options for an order.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
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
    '7dcef154d004d2c341f6a818a045b394' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the payment options for the given order\'s payment gateways.
   *
   * The payment options will be derived from the given payment gateways
   * in the following order:
   * 1) The customer\'s stored payment methods.
   * 2) The order\'s payment method (if not added in the previous step).
   * 3) Options to create new payment methods of valid types.
   * 4) Options for the remaining gateways (off-site, manual, etc).
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $payment_gateways
   *   The payment gateways. When empty, defaults to all available gateways.
   *
   * @return \\Drupal\\commerce_payment\\PaymentOption[]
   *   The payment options, keyed by option ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
         'functionName' => 'buildOptions',
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
    'eca310167dede849064cbcdb188e9524' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects the default payment option for the given order.
   *
   * Priority:
   * 1) The order\'s payment method
   * 2) The order\'s payment gateway (if it does not support payment methods)
   * 3) First defined option.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param array $options
   *   The options.
   *
   * @return \\Drupal\\commerce_payment\\PaymentOption
   *   The selected option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
         'functionName' => 'selectDefaultOption',
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