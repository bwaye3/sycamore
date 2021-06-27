<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/tests/src/Kernel/CheckoutAccessTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871',
   'data' => 
  array (
    'ee565ae62e8fc32fe9c2149873a8b71e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the checkout access for orders.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    '26ffa87b4b93fc832652cc7f3fcf2422' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create stores and set the default store.
 *
 * This trait is meant to be used only by test classes.
 *
 * @todo Move to \\Drupal\\Tests\\commerce_store post-SimpleTest.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    '63f49cb126b3f1053d6625faaf57a623' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a store for the test.
   *
   * @param string $name
   *   The store name.
   * @param string $mail
   *   The store email.
   * @param string $type
   *   The store type.
   * @param bool $default
   *   Whether the store should be the default store.
   * @param string $country
   *   The store country code.
   * @param string $currency
   *   The store currency code.
   *
   * @return \\Drupal\\commerce_store\\Entity\\StoreInterface
   *   The store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'createStore',
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
    '33201e22e0f6e90a349ed45bc9e31da9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The access manager.
   *
   * @var \\Drupal\\Core\\Access\\AccessManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    '5c6e8a8fcc9316b4b187670d370da694' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order item storage.
   *
   * @var \\Drupal\\commerce_order\\OrderItemStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    '8d9859d8cb94d1ff25582397e6638c96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The variation to test against.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariation
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    'ff6f4c6b256c7c405a39b8c9cd265a32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The store to test against.
   *
   * @var \\Drupal\\commerce_store\\Entity\\Store
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    '43ccd885ec554836c053b9f83c31c1ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    'e927394eeeb90424f734597824be6379' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
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
    'd1a3c50adb790303f4878239f9285384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that users need the `access checkout` permission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'testAccessCheckoutPermission',
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
    'd96392745334160ea8fab15e3787024f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that only the order\'s owner can view its checkout.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'testOwnerCheckoutAccess',
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
    'f4bafdc0bda83b83ee6a49bdd3c05c68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'testOwnerCheckoutAccess',
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
    '9370a61ed88d3e96da5ddbd0c0752464' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that canceled orders cannot enter checkout.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'testCanceledOrderCheckout',
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
    '70b6427b2c4fbfb3cb5faa6318ac65d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that an order must have items to enter checkout.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'testOrderMustHaveItems',
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
    '9b8a744890179ffc61042d4837c92618' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a request for the order\'s checkout form.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param string $step
   *   The step.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Request
   *   The request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'createRequest',
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
    '46befd8a162062c245d9ff041c362eed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a sample order with one order item for provided user.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   The user.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   The sample order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'createOrder',
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
    'cde6d88733d9849ed65942889cef7f6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_checkout\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'url' => 'Drupal\\Core\\Url',
          'cartkerneltestbase' => 'Drupal\\Tests\\commerce_cart\\Kernel\\CartKernelTestBase',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\commerce_checkout\\Kernel\\CheckoutAccessTest',
         'functionName' => 'createOrder',
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