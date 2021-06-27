<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/src/Kernel/OrderPaidSubscriberTest.php-1624732871',
   'data' => 
  array (
    'fad473bb6005b6fa539435f16613a506' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the OrderPaidSubscriber.
 *
 * @coversDefaultClass \\Drupal\\commerce_payment\\EventSubscriber\\OrderPaidSubscriber
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
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
    '78bb8b02e476d7d72e10399d71fadcb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The sample order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
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
    '7bb2efdc774a80e251a97ccb06c3f3dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
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
    '2b054a2be0cabb645b10ed8e9a3dbb4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
         'functionName' => 'setUp',
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
    'c8ff37a1ec75374a8a77c6af3d0a96bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Confirms that on-site payments do not affect the order status.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
         'functionName' => 'testOnsiteGateway',
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
    '088af0de77213663d481711cc41e3c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $onsite_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
         'functionName' => 'testOnsiteGateway',
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
    'a1416a78538257c732240ef1f343177e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Confirms that off-site payments result in the order getting placed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
         'functionName' => 'testOffsiteGateway',
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
    'd8402d1805d0b2157af5bc67e02bc634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $offsite_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'payment' => 'Drupal\\commerce_payment\\Entity\\Payment',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\OrderPaidSubscriberTest',
         'functionName' => 'testOffsiteGateway',
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