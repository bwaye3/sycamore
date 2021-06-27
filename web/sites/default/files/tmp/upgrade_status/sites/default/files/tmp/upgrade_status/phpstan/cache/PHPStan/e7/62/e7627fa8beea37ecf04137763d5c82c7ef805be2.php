<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/TwigExtension/PriceTwigExtension.php-1624732871',
   'data' => 
  array (
    'c450cfe30d12986c1c8ee2d1a4bd1538' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides Price-specific Twig extensions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\TwigExtension',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_price\\TwigExtension\\PriceTwigExtension',
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
    '76902b8c565a36263cd3fb281595c72c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritdoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\TwigExtension',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_price\\TwigExtension\\PriceTwigExtension',
         'functionName' => 'getFilters',
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
    '5059ece9cb3d7493e43240e18340e55c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @inheritdoc
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\TwigExtension',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_price\\TwigExtension\\PriceTwigExtension',
         'functionName' => 'getName',
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
    'a38e7ee561015116edbfbb1ec3f15a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a price object/array.
   *
   * Examples:
   * {{ order.getTotalPrice|commerce_price_format }}
   * {{ order.getTotalPrice|commerce_price_format|default(\'N/A\') }}
   * {{ order.getTotalPrice|commerce_price_format({\'minimum_fraction_digits\': 0}) }}
   * {{ order.getTotalPrice|commerce_price_format({\'currency_display\': \'code\'\'}) }}
   *
   * @param mixed $price
   *   Either a Price object, or an array with number and currency_code keys.
   * @param array $options
   *   (optional) An array of options to pass to the currency formatter.
   *
   * @return mixed
   *   A formatted price, suitable for rendering in a twig template.
   *
   * @throws \\InvalidArgumentException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\TwigExtension',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_price\\TwigExtension\\PriceTwigExtension',
         'functionName' => 'formatPrice',
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