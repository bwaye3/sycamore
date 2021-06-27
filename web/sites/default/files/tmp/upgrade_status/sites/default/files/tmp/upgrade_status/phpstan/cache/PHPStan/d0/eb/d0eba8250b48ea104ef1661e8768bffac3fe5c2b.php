<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/src/Kernel/Entity/PaymentMethodTest.php-1624732871',
   'data' => 
  array (
    'e71413cfa8c7a326f4ac1d84432ea1f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the payment method entity.
 *
 * @coversDefaultClass \\Drupal\\commerce_payment\\Entity\\PaymentMethod
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
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
    '97f34e556b35c67d214b0e7a57589e63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample user.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
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
    'cd617f6b527527b0133263b5b5f5e4fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
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
    'ed2d49f8e8898574948771baf735e160' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
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
    'd9af738b3a752262737995b13fd9e3d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getType
   * @covers ::getPaymentGatewayId
   * @covers ::getPaymentGatewayMode
   * @covers ::getOwner
   * @covers ::setOwner
   * @covers ::getOwnerId
   * @covers ::setOwnerId
   * @covers ::getRemoteId
   * @covers ::setRemoteId
   * @covers ::getBillingProfile
   * @covers ::setBillingProfile
   * @covers ::isReusable
   * @covers ::setReusable
   * @covers ::isDefault
   * @covers ::setDefault
   * @covers ::isExpired
   * @covers ::getExpiresTime
   * @covers ::setExpiresTime
   * @covers ::getCreatedTime
   * @covers ::setCreatedTime
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPaymentMethod',
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
    '9999d4fe555096a50e414782e8ac8ae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPaymentMethod',
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
    'e0f060aea6884d10ff9769d48b431a0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPaymentMethod',
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
    '98b1fdda1ef52b30f9b19fa0978f862e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::preSave
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPreSave',
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
    '5926050ab73d291553e868fed2632269' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPreSave',
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
    '69f14c36c2c2add061d1049b6c766fbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity',
         'uses' => 
        array (
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'creditcard' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\CreditCard',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Kernel\\Entity\\PaymentMethodTest',
         'functionName' => 'testPreSave',
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