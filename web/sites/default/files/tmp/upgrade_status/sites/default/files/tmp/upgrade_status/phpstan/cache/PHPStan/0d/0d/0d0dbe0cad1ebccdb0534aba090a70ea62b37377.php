<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/tests/src/FunctionalJavascript/CartWebDriverTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/tests/src/Traits/CartBrowserTestTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/Traits/ProductAttributeTestTrait.php-1624732871',
   'data' => 
  array (
    'e3ec60bf088b21641acf6783b7d1a577' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for commerce_cart test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '4320317445d786b52d9dd71bd7060d7c' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '089e789e9722cbf7f34638115809fb78' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'cb00e15a46800c313d4801bc39de45c8' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '2c5254ffed493f59a369ee5533230581' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '75e225e8989343410c223686540061e7' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'b8b8de72a17a1df0f9c9661e665ae2c8' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '375deaaa1d019dd0c44a7b26d137882d' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '72d3e1f3d5c82afca4a65fdba108ed9f' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'd28b355f41d4493fe254a32fa01eee45' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '40c45b0a4e386d56724aa4272f84c1b9' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '7e5fb3cbbc51540421b80db71feee8f8' => 
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
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '969dbd48ce7750ffea6bff0589227caa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart order to test against.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'd55e508736cf1c4982827ffc16b5159b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart manager.
   *
   * @var \\Drupal\\commerce_cart\\CartManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    '8351ffb80a4028260327cdb11765a806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'abe48f9b2e3a58dd519ea3858810cff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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
    'e90f47c35692c38c110711704e58ede1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript',
         'uses' => 
        array (
          'cartbrowsertesttrait' => 'Drupal\\Tests\\commerce_cart\\Traits\\CartBrowserTestTrait',
          'orderwebdrivertestbase' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderWebDriverTestBase',
          'productattributetesttrait' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_cart\\FunctionalJavascript\\CartWebDriverTestBase',
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