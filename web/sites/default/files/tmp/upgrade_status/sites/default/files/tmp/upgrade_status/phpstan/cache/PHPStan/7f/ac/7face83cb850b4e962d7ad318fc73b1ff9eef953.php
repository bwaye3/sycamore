<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/tests/src/Functional/CartBrowserTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/tests/src/Traits/CartBrowserTestTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/Traits/ProductAttributeTestTrait.php-1624732871',
   'data' => 
  array (
    '67a743f54f4a36cd60207bfc470a160c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for commerce_cart test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    '4fa0c2004a349ab7745c5972823d2ce0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a trait for commerce_cart functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    '95d756e8b189c30e64ddb90be93bc8eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Posts the add to cart form for a product.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductInterface $product
   *   The product.
   * @param array $edit
   *   The form array.
   *
   * @throws \\Exception
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'postAddToCart',
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
    '26c5c6c6008f51b09ce0f8e6fb83ccdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that an attribute option is selected.
   *
   * @param string $selector
   *   The element selector.
   * @param string $option
   *   The option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'assertAttributeSelected',
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
    '816f73f99514922856af65d4ae49c634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that an attribute option does exist.
   *
   * @param string $selector
   *   The element selector.
   * @param string $option
   *   The option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'assertAttributeExists',
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
    '84ef1e611a5f68269f18bcf8de192b4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that an attribute option does not exist.
   *
   * @param string $selector
   *   The element selector.
   * @param string $option
   *   The option.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'assertAttributeDoesNotExist',
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
    '06f9c2570caa4d16bfbccd24236b2bb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert the order item in the order is correct.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $variation
   *   The purchased product variation.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param string $quantity
   *   The quantity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Traits',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'assertOrderItemInOrder',
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
    'ee169dae2d5741ea8443cf9e239331c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a trait for attribute-related functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    'be192f7f07963d029f0276cc6f0b7dbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The attribute field manager.
   *
   * @var \\Drupal\\commerce_product\\ProductAttributeFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    '440c735a20cf80d07eba1a502df13c29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an attribute field and set of attribute values.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface $variation_type
   *   The variation type.
   * @param string $name
   *   The attribute field name.
   * @param array $options
   *   Associative array of key name values. [red => Red].
   * @param bool $test_field
   *   Flag to create a test field on the attribute.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface[]
   *   Array of attribute entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'createAttributeSet',
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
    '20f006a1ba6ac884e999eecad014307f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Entity\\EntityFormDisplay $attribute_view_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'createAttributeSet',
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
    '5954a97840380ea866584da86a5005f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an attribute value.
   *
   * @param string $attribute
   *   The attribute ID.
   * @param string $name
   *   The attribute value name.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface
   *   The attribute value entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'createAttributeValue',
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
    '7fcec8ad4b768a04129036f69c612aeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart order to test against.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    '4a29ffafd976a6b11ff933feeaa1aaf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart manager.
   *
   * @var \\Drupal\\commerce_cart\\CartManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    'e4105fc21754c7e5bab9c8fbd1cbc91e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
    '43592e30bd67cdf4fe44a875b2375c1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
         'functionName' => 'getAdministratorPermissions',
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
    '13eb009c9d4ecdef38693346f2c80416' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\Functional',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderbrowsertestbase' => 'Drupal\\Tests\\commerce_order\\Functional\\OrderBrowserTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\Functional\\CartBrowserTestBase',
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
  ),
));