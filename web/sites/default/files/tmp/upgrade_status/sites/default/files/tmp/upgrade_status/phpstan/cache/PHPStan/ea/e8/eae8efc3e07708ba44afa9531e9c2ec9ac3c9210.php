<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Entity/PromotionInterface.php-1624732871',
   'data' => 
  array (
    'd1d774f5b14784536b7f13a5d35f99fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for promotions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
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
    '862beba1a54e9e68e874f0244322368f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion name.
   *
   * This name is admin-facing.
   *
   * @return string
   *   The promotion name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
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
    'be58e25277a98b170ce12a17a9d79ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion name.
   *
   * @param string $name
   *   The promotion name.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setName',
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
    '7eeefc66492798d42aa0014523c1958e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion display name.
   *
   * This name is user-facing.
   * Shown in the order total summary.
   *
   * @return string
   *   The promotion display name. If empty, use t(\'Discount\').
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getDisplayName',
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
    '22eb283c7bd50495d9f97118eee81238' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion display name.
   *
   * @param string $display_name
   *   The promotion display name.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setDisplayName',
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
    '543a5573ab320e8bb9caec458aae660a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion description.
   *
   * @return string
   *   The promotion description.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getDescription',
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
    'aced2d8fb51e3e86f782de3cb0b0ea31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion description.
   *
   * @param string $description
   *   The promotion description.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setDescription',
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
    'b3671381e4d663c2a520001d8e495ca3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion order types.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderTypeInterface[]
   *   The promotion order types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getOrderTypes',
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
    'c5ac67d9e73652f580a1e8301dfc7ef2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion order types.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderTypeInterface[] $order_types
   *   The promotion order types.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setOrderTypes',
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
    'b714ab27602ad20e0a2f7ae516155e7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion order type IDs.
   *
   * @return int[]
   *   The promotion order type IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getOrderTypeIds',
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
    '54e8e0e0ff1b0b66d2c10da74d9fe674' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion order type IDs.
   *
   * @param int[] $order_type_ids
   *   The promotion order type IDs.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setOrderTypeIds',
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
    '098c926e1d5178813fc7e688617b2642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the offer.
   *
   * @return \\Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface|null
   *   The offer, or NULL if not yet available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getOffer',
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
    'b076e0e536d383729746a11f7aa5e578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the offer.
   *
   * @param \\Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface $offer
   *   The offer.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setOffer',
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
    '4b6c4de8d77a7cf4c624855298e0351d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the conditions.
   *
   * @return \\Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface[]
   *   The conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getConditions',
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
    '86145c773d20acafe438d60be00927d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the conditions.
   *
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface[] $conditions
   *   The conditions.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setConditions',
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
    'e7e5695be3b940e4819bbb9221497ca3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the condition operator.
   *
   * @return string
   *   The condition operator. Possible values: AND, OR.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getConditionOperator',
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
    'add26e612d910e10289bc78b29c9b9b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the condition operator.
   *
   * @param string $condition_operator
   *   The condition operator.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setConditionOperator',
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
    '834899646e1f48211b24dd17cdf81a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the coupon IDs.
   *
   * @return int[]
   *   The coupon IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getCouponIds',
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
    'fe9ea09a29c60a312cd9866b663657b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the coupons.
   *
   * @return \\Drupal\\commerce_promotion\\Entity\\CouponInterface[]
   *   The coupons.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getCoupons',
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
    '1f9be336c4daf3d4d2159296432d6fff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the coupons.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface[] $coupons
   *   The coupons.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setCoupons',
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
    'd9a9982858a219a775d502454e918a4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the promotion has coupons.
   *
   * @return bool
   *   TRUE if the promotion has coupons, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'hasCoupons',
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
    'd3d8a78613a342c9276b1901e4977a3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a coupon.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   The coupon.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'addCoupon',
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
    '8a59f8901bc76887288788006e1036a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a coupon.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   The coupon.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'removeCoupon',
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
    'b2e098f356e3fc1ff5bc76e6f4161975' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the promotion has a given coupon.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   The coupon.
   *
   * @return bool
   *   TRUE if the coupon was found, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'hasCoupon',
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
    'df620b7009c13d289b7a6340de22acc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion usage limit.
   *
   * Represents the maximum number of times the promotion can be used.
   * 0 for unlimited.
   *
   * @return int
   *   The promotion usage limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getUsageLimit',
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
    'eab43da97240d9e3dd07aea916e73f23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion usage limit.
   *
   * @param int $usage_limit
   *   The promotion usage limit.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setUsageLimit',
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
    'cbe7864cd457b8b7b025a753b844baa1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the per customer promotion usage limit.
   *
   * Represents the maximum number of times the promotion can be used by a customer.
   * 0 for unlimited.
   *
   * @return int
   *   The per customer promotion usage limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getCustomerUsageLimit',
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
    'dbd691d02de9be952adb1ff95c44ff4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the per customer promotion usage limit.
   *
   * @param int $usage_limit_customer
   *   The per customer promotion usage limit.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setCustomerUsageLimit',
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
    'f78a439b1b9ae16eb04937e5863ee06f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion start date/time.
   *
   * The start date/time should always be used in the store timezone.
   * Since the promotion can belong to multiple stores, the timezone
   * isn\'t known at load/save time, and is provided by the caller instead.
   *
   * Note that the returned date/time value is the same in any timezone,
   * the "2019-10-17 10:00" stored value is returned as "2019-10-17 10:00 CET"
   * for "Europe/Berlin" and "2019-10-17 10:00 ET" for "America/New_York".
   *
   * @param string $store_timezone
   *   The store timezone. E.g. "Europe/Berlin".
   *
   * @return \\Drupal\\Core\\Datetime\\DrupalDateTime
   *   The promotion start date/time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getStartDate',
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
    '583f1c03e981ae462065b5bdba91f201' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion start date/time.
   *
   * @param \\Drupal\\Core\\Datetime\\DrupalDateTime $start_date
   *   The promotion start date/time.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setStartDate',
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
    '8ee8506e8479ba5593c72190c6fb892b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion end date/time.
   *
   * The end date/time should always be used in the store timezone.
   * Since the promotion can belong to multiple stores, the timezone
   * isn\'t known at load/save time, and is provided by the caller instead.
   *
   * Note that the returned date/time value is the same in any timezone,
   * the "2019-10-17 11:00" stored value is returned as "2019-10-17 11:00 CET"
   * for "Europe/Berlin" and "2019-10-17 11:00 ET" for "America/New_York".
   *
   * @param string $store_timezone
   *   The store timezone. E.g. "Europe/Berlin".
   *
   * @return \\Drupal\\Core\\Datetime\\DrupalDateTime
   *   The promotion end date/time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getEndDate',
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
    'b19affe7a7892bd1f3fd164dab3a8967' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion end date/time.
   *
   * @param \\Drupal\\Core\\Datetime\\DrupalDateTime $end_date
   *   The promotion end date/time.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setEndDate',
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
    '0d8975f72122a1e8b9ff75fe47ff2f74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the promotion compatibility.
   *
   * @return string
   *   The compatibility.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getCompatibility',
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
    '90e942bc7e14514f4cbc4d94254fee64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the promotion compatibility.
   *
   * @param string $compatibility
   *   The compatibility.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setCompatibility',
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
    'b3e5afcdabcb898ac2aba1f39fde50c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get whether the promotion is enabled.
   *
   * @return bool
   *   TRUE if the promotion is enabled, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'isEnabled',
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
    '6d7cbbd8e8133154a15c89e008e20a73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the promotion is enabled.
   *
   * @param bool $enabled
   *   Whether the promotion is enabled.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setEnabled',
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
    'e8d19f561475c54a03b893418cfc306d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the weight.
   *
   * @return int
   *   The weight.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'getWeight',
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
    '6a997abad5404fcdfad6530faf904c4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the weight.
   *
   * @param int $weight
   *   The weight.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'setWeight',
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
    'b408628978a1a215367e9c7903f8e2e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the promotion is available for the given order.
   *
   * Ensures that the order type and store match the promotion\'s,
   * that the promotion is enabled, the current date matches the
   * start and end dates, and the usage limits are respected.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return bool
   *   TRUE if promotion is available, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'available',
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
    '3c7a406bcee3f3cd754bd61d0ba3695f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the promotion can be applied to the given order.
   *
   * Ensures that the promotion is compatible with other
   * promotions on the order, and that the conditions pass.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return bool
   *   TRUE if promotion can be applied, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'applies',
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
    '39fb8930db0d06761577afb0a3b425c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies the promotion to the given order.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'apply',
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
    'ef7d646c0f9a8ad831b0bee8e797a341' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows a promotion to clean up any modifications done to the given order.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystoresinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoresInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
         'functionName' => 'clear',
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