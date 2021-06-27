<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/RounderInterface.php-1624732871',
   'data' => 
  array (
    'bf0bccd64c8951b1a381e6a2236f7ae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Rounds prices.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\RounderInterface',
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
    '189e3fac8360b40db293024b1fe439ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rounds the given price to its currency precision.
   *
   * For example, USD prices will be rounded to 2 decimals.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   * @param int $mode
   *   The rounding mode. One of the following constants: PHP_ROUND_HALF_UP,
   *   PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_EVEN, PHP_ROUND_HALF_ODD.
   *
   * @return \\Drupal\\commerce_price\\Price
   *   The rounded price.
   *
   * @throws \\InvalidArgumentException
   *   When given a price with an unknown currency.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\RounderInterface',
         'functionName' => 'round',
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