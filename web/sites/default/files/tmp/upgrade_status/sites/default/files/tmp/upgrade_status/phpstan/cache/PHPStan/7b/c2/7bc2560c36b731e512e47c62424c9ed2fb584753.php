<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/OrderItemInterface.php-1624732871',
   'data' => 
  array (
    '93afdccf1c3749b552eb18f6252a00b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for order items.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
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
    'd5380b9abc6927652b526e1aa8700b4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface|null
   *   The order, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getOrder',
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
    '6634a4f6d9cbbf4e84ef22d2e8da20e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent order ID.
   *
   * @return int|null
   *   The order ID, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getOrderId',
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
    'e93a42a73e53d8816708d611123f9773' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order item has a purchased entity.
   *
   * @return bool
   *   TRUE if the order item has a purchased entity, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'hasPurchasedEntity',
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
    '824903a553396610166a2ca492f898f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the purchased entity.
   *
   * @return \\Drupal\\commerce\\PurchasableEntityInterface|null
   *   The purchased entity, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getPurchasedEntity',
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
    '4a2c8ce5ef442436758552c7d79a3fc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the purchased entity ID.
   *
   * @return int
   *   The purchased entity ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getPurchasedEntityId',
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
    'fcef41c788aeabbe4d6e584428d17557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order item title.
   *
   * @return string
   *   The order item title
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getTitle',
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
    'e1bd9a651705f3715c6a00f1006f1b71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order item title.
   *
   * @param string $title
   *   The order item title.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'setTitle',
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
    '3f0d72d689d9afb78a8ab591db82a735' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order item quantity.
   *
   * @return string
   *   The order item quantity
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getQuantity',
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
    'f14beb893528ae8c69943c6406af67ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order item quantity.
   *
   * @param string $quantity
   *   The order item quantity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'setQuantity',
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
    'c951548c6fef9ab5ad9a4801164a16af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order item unit price.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The order item unit price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getUnitPrice',
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
    'b5d8ffa35189822c48f5d11895dd0666' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order item unit price.
   *
   * @param \\Drupal\\commerce_price\\Price $unit_price
   *   The order item unit price.
   * @param bool $override
   *   Whether the unit price should be overridden.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'setUnitPrice',
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
    '555db82760b55447ed676595367950da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order item unit price is overridden.
   *
   * Overridden unit prices are not updated when the order is refreshed.
   *
   * @return bool
   *   TRUE if the unit price is overridden, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'isUnitPriceOverridden',
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
    '6a371cbada7ac20aaf0c97cb5d32e4c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order item total price.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The order item total price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getTotalPrice',
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
    '235259a5d1c68ae24b2f345876f5994b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order item uses legacy adjustments.
   *
   * Indicates that the adjustments were calculated based on the unit price,
   * which was the default logic prior to Commerce 2.8, changed in #2980713.
   *
   * @return bool
   *   TRUE if the order item uses legacy adjustments, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'usesLegacyAdjustments',
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
    '2ffd38da3d857362eb992c693591ec10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the adjusted order item total price.
   *
   * The adjusted total price is calculated by applying the order item\'s
   * adjustments to the total price. This can include promotions, taxes, etc.
   *
   * @param string[] $adjustment_types
   *   The adjustment types to include in the adjusted price.
   *   Examples: fee, promotion, tax. Defaults to all adjustment types.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The adjusted order item total price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getAdjustedTotalPrice',
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
    '8b5384443620ccf9990a04d25f81aaaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the adjusted order item unit price.
   *
   * Calculated by dividing the adjusted total price by quantity.
   *
   * Useful for refunds and other purposes where there\'s a need to know
   * how much a single unit contributed to the order total.
   *
   * @param string[] $adjustment_types
   *   The adjustment types to include in the adjusted price.
   *   Examples: fee, promotion, tax. Defaults to all adjustment types.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The adjusted order item unit price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getAdjustedUnitPrice',
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
    '31df240a971934ec585c49cbfe840a91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an order item data value with the given key.
   *
   * Used to store temporary data during order processing (i.e. checkout).
   *
   * @param string $key
   *   The key.
   * @param mixed $default
   *   The default value.
   *
   * @return mixed
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getData',
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
    'c8edabaf2e2cb434b8e2e4578f7dc453' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an order item data value with the given key.
   *
   * @param string $key
   *   The key.
   * @param mixed $value
   *   The value.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'setData',
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
    'ff04e7a1a7fe3d9a2304c805f4986e01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets an order item data value with the given key.
   *
   * @param string $key
   *   The key.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'unsetData',
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
    'dabc5a0c8424ca4ec35c188295e8d99a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order item is locked.
   *
   * @return bool
   *   TRUE if the order item is locked, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'isLocked',
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
    '6fd79ef86b90375359e222e3fdc38f94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Locks the order item.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'lock',
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
    '1dcbbb396191d5219b721f5c2fd0011e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unlocks the order item.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'unlock',
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
    'a4ff4836c4555363042e62fdfb4c7cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order item creation timestamp.
   *
   * @return int
   *   The order item creation timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'getCreatedTime',
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
    'd3e5d5e45dab3a7028361cb16610c3c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order item creation timestamp.
   *
   * @param int $timestamp
   *   The order item creation timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
         'functionName' => 'setCreatedTime',
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