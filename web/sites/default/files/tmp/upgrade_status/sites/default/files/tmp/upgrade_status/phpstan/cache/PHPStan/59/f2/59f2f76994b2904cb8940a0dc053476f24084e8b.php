<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Event/FilterPaymentGatewaysEvent.php-1624732871',
   'data' => 
  array (
    '003b62856520d0e3b1113b432b7e9ec0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the event for filtering the available payment gateways.
 *
 * @see \\Drupal\\commerce_payment\\Event\\PaymentEvents
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
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
    '92a2866a3ef2b4596459bfa8b09ff868' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment gateways.
   *
   * @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
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
    '210ee4934ede003dd032d602969608eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
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
    '39593def7f78e619c6655f618a737962' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new FilterPaymentGatewaysEvent object.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $payment_gateways
   *   The payment gateways.
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
         'functionName' => '__construct',
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
    '715b65fbc41d6dd7da52e45f3cdd5a80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment gateways.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[]
   *   The payment gateways.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
         'functionName' => 'getPaymentGateways',
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
    '490887682a48c1c830eb490a6204ee3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment gateways.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $payment_gateways
   *   The payment gateways.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
         'functionName' => 'setPaymentGateways',
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
    'e38017832d9b0d4c1f015b8108c2da2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   The order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
         'functionName' => 'getOrder',
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