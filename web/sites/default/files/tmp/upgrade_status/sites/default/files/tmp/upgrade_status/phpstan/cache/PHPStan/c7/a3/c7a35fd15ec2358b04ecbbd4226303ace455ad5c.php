<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/Kernel/OrderRefreshTest.php-1624732871',
   'data' => 
  array (
    '0d05a1df7e7909184c63887735c91220' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the order refresh process.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '749923f380bd60947c4e90dce06880bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample user.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '2c5dd9baa7ac2a35014b13d1883afd66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '55c9bf0224e044b0807ccbe22f40ed9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample variation.
   *
   * Has a SKU which will flag availability service removal.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    'a5c22cbddd2a5e3bb3bcbca787a1e99d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '5f0b6a0f37cd9b65886b33796ff6f555' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order item storage.
   *
   * @var \\Drupal\\commerce_order\\OrderItemStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '152c384a8707f1ce8be461fe9692b0ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '15b15c399ec882c79e56230d46441c1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    'b224864ecb2452447a5d7bf7066aa291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\Order $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
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
    '5734cc8ff30bbaa46b8f18ea9bbbb304' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the shouldRefresh() logic.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testShouldRefresh',
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
    '1307f76b07e38d13cfcb73891f4b1c31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the needsRefresh() logic.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testNeedsRefresh',
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
    '343a3609c3501c51bd906d1be463b8dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that the order item title and unit price are kept up to date.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testOrderItemRefresh',
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
    'a2c967977b62fa857180acbdf9befef8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testOrderItemRefresh',
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
    'c9907ec68d62fa32f4718ed1ddecd512' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the order refresh, with the availability processor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testAvailabilityOrderRefresh',
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
    '00b1a25d4e9059b72ca7df0ddd70be60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the order refresh invoking by the order storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'testStorage',
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
    '273867ab11244a84df4b9cbe52f4d57b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an OrderRefresh instance with the given current time.
   *
   * @param int $current_time
   *   The current time as a UNIX timestamp. Defaults to time().
   *
   * @return \\Drupal\\commerce_order\\OrderRefreshInterface
   *   The order refresh.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'orderrefresh' => 'Drupal\\commerce_order\\OrderRefresh',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderRefreshTest',
         'functionName' => 'createOrderRefresh',
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