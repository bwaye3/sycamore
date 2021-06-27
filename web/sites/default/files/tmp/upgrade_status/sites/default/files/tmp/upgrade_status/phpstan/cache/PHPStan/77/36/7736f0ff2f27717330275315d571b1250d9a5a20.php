<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductVariationStorageInterface.php-1624732871',
   'data' => 
  array (
    '4f86f0890bbe37b979464b90cfadac37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for product variation storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationStorageInterface',
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
    'd5eb25cbca2d8c6edc41c7e8566b486b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the product variation for the given SKU.
   *
   * @param string $sku
   *   The SKU.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface|null
   *   The product variation, or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationStorageInterface',
         'functionName' => 'loadBySku',
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
    'b6aff7b3c9606d085efebad63cded5dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the product variation from context.
   *
   * Uses the variation specified in the URL (?v=) if it\'s active and
   * belongs to the current product.
   *
   * Note: The returned variation is not guaranteed to be enabled, the caller
   * needs to check it against the list from loadEnabled().
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductInterface $product
   *   The current product.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   *   The product variation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationStorageInterface',
         'functionName' => 'loadFromContext',
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
    'fd5fd04dc73103f219b9a0bdeb159b89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the enabled product variations for the given product.
   *
   * Enabled variations are active variations that have been filtered through
   * the FILTER_VARIATIONS event.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductInterface $product
   *   The product.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[]
   *   The enabled product variations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationStorageInterface',
         'functionName' => 'loadEnabled',
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