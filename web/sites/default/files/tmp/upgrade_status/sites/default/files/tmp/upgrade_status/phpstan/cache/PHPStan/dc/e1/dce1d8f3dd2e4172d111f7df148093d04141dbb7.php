<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/PriceCalculatorResult.php-1624732871',
   'data' => 
  array (
    'c6d7e5828041088100f0ce290e088986' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents the result of a price calculation.
 *
 * @see \\Drupal\\commerce_order\\PriceCalculatorInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
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
    '4254a7e9d6413cd1474e46a5aeb843ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The calculated price.
   *
   * @var \\Drupal\\commerce_price\\Price
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
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
    'bf0cf34cd18938dd38e644bfa681eafd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The base price.
   *
   * @var \\Drupal\\commerce_price\\Price
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
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
    '825b61c288ff318f87b7b920b89e82cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The adjustments.
   *
   * @var \\Drupal\\commerce_order\\Adjustment[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
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
    'b0cb86e8b0ab977cf500ffd1943c31ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PriceCalculatorResult object.
   *
   * @param \\Drupal\\commerce_price\\Price $calculated_price
   *   The calculated price.
   * @param \\Drupal\\commerce_price\\Price $base_price
   *   The base price.
   * @param \\Drupal\\commerce_order\\Adjustment[] $adjustments
   *   The adjustments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
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
    '0f2862dd7621d761e27a1f7007066ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the calculated price.
   *
   * This is the resolved unit price with adjustments applied.
   *
   * @return \\Drupal\\commerce_price\\Price
   *   The calculated price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
         'functionName' => 'getCalculatedPrice',
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
    'c591899a0689a243eb1ce626536c98dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the base price.
   *
   * This is the resolved unit price without any adjustments.
   *
   * @return \\Drupal\\commerce_price\\Price
   *   The base price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
         'functionName' => 'getBasePrice',
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
    '80a9db7739aa2129624f253c5bb420f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the adjustments.
   *
   * @return \\Drupal\\commerce_order\\Adjustment[]
   *   The adjustments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorResult',
         'functionName' => 'getAdjustments',
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