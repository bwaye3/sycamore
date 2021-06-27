<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/Kernel/PurchasedEntityConstraintValidatorTest.php-1624732871',
   'data' => 
  array (
    '8a1f3620bf5abce044aadccf3e6c185a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the purchased entity constraint on order items.
 *
 * @group commerce_order
 * @coversDefaultClass \\Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
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
    'cc28c05c51bedf1cb5854ac60d0ed95e' => 
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
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
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
    'f2150d5db7ff880d03e3947a98ae39ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the availability constraint.
   *
   * @param string $sku
   *   The SKU. SKUs prefixed with TEST_* will fail availability checks.
   * @param string $order_state
   *   The order state.
   * @param \\Drupal\\commerce_order\\AvailabilityResult $expected_check_result
   *   The expected availability result.
   * @param bool $expected_constraint
   *   The expected constraint count.
   *
   * @dataProvider dataProviderCheckerData
   * @covers ::validate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'testAvailabilityConstraint',
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
    '895b9505a06b9831e8f8519e1d4737b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the constraint does not affect non-purchasable entity order items.
   *
   * @covers ::validate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'testValidateOrderItemWithoutPurchasedEntity',
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
    'cd71a893600a243147d6505d3446538e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the constraint when the purchased entity no longer exists.
   *
   * @covers ::validate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'testPurchasedEntityNoLongerExists',
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
    '68d1126c45ce5189fff2ac6919ca59cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the constraint when there is a problem selecting the store.
   *
   * @covers ::validate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'testSelectStoresViolations',
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
    'd97f7aaa64aa9f9797804f60d0f63a06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for test.
   *
   * @return \\Generator
   *   The test data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'dataProviderCheckerData',
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
    '61e8b0588061811e2b622136007b8bb0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a test product variation.
   *
   * @param array $variation_data
   *   Additional variation data.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariation
   *   The test product variation.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'createTestProductVariation',
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
    'c00d9d682b27d1601c60d02c9c1463dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\Product $product */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'createTestProductVariation',
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
    'f669ab0cdc5e3ca65eb0fb69467ccb84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductVariation $product_variation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'availabilityresult' => 'Drupal\\commerce_order\\AvailabilityResult',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\PurchasedEntityConstraintValidatorTest',
         'functionName' => 'createTestProductVariation',
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