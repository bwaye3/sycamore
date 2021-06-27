<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/Commerce/PromotionOffer/PromotionOfferInterface.php-1624732871',
   'data' => 
  array (
    '5b0a604351f830b8a45b370da429170b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the base interface for offers.
 *
 * Offers can target the entire order, or individual order items.
 * Therefore, each offer plugin actually implements one of the child interfaces.
 *
 * @see \\Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderPromotionOfferInterface
 * @see \\Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
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
    'c70772dd1b4dee207f8cf88dd45b2ea1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the offer entity type ID.
   *
   * This is the entity type ID of the entity passed to apply().
   *
   * @return string
   *   The offer\'s entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
         'functionName' => 'getEntityTypeId',
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
    '79531f544711daf516a465060e4bc0da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies the offer to the given entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion
   *   THe parent promotion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
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
    '73352c6d7079bb5a28b8eab37181b554' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows an offer to clean up any modifications done to the given entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion
   *   THe parent promotion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
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