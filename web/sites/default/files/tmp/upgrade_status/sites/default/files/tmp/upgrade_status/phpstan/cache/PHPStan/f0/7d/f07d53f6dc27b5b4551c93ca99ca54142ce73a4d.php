<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/Commerce/PromotionOffer/OrderFixedAmountOff.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/Commerce/PromotionOffer/FixedAmountOffTrait.php-1624732871',
   'data' => 
  array (
    '2dae108ed26e942db6030682143a8e52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the fixed amount off offer for orders.
 *
 * The discount is split between order items, to simplify VAT taxes and refunds.
 *
 * @CommercePromotionOffer(
 *   id = "order_fixed_amount_off",
 *   label = @Translation("Fixed amount off the order subtotal"),
 *   entity_type = "commerce_order",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
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
    '0cb8042780e8817c4bb328b2985443b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common configuration for fixed amount off offers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
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
    '70d48ab503c7aa0f677aae5b165dcce6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
         'functionName' => 'defaultConfiguration',
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
    '965a4f0e56101d06a8a10b4c63cf474d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
         'functionName' => 'buildConfigurationForm',
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
    'd45e02a13685f9fcbfafe18f74407696' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
         'functionName' => 'submitConfigurationForm',
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
    'c9cae04c0ab3b685c6446156d5f82ecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the offer amount.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The amount, or NULL if unknown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
         'functionName' => 'getAmount',
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
    '739329f187d5d6d5d9fc6dc5c886462f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
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
    'fa0d219962c7e3ffb237dc53b01ece9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderFixedAmountOff',
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
  ),
));