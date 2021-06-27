<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/StoreTaxInterface.php-1624732871',
   'data' => 
  array (
    '487707c611c1e4afd0e584fe737f1c01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default tax type for the given store.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   *
   * @return \\Drupal\\commerce_tax\\Entity\\TaxTypeInterface|null
   *   The default tax type, or NULL if none apply.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\StoreTaxInterface',
         'functionName' => 'getDefaultTaxType',
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
    'c786bcd4ae5678045a4072aa9bf9534b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default tax zones for the given store.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   *
   * @return \\Drupal\\commerce_tax\\TaxZone[]
   *   The tax zones.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\StoreTaxInterface',
         'functionName' => 'getDefaultZones',
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
    '501564658ca459cfaf109cf78415bd8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default tax rates for the given store and order item.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return \\Drupal\\commerce_tax\\TaxRate[]
   *   The tax rates, keyed by tax zone ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\StoreTaxInterface',
         'functionName' => 'getDefaultRates',
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
    'bca20fc1fb843dc8ed31651c44cd03ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears the static caches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\StoreTaxInterface',
         'functionName' => 'clearCaches',
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