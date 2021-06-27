<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/Commerce/Condition/OrderItemQuantity.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Plugin/Commerce/Condition/ParentEntityAwareTrait.php-1624732871',
   'data' => 
  array (
    '89eb2ecac87bd1ca31f682b4f88ccf4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the total discounted product quantity condition.
 *
 * Implemented as an order condition to be able to count products across
 * non-combined order items.
 *
 * @CommerceCondition(
 *   id = "order_item_quantity",
 *   label = @Translation("Total discounted product quantity"),
 *   category = @Translation("Products"),
 *   entity_type = "commerce_order",
 *   parent_entity_type = "commerce_promotion",
 *   weight = 10,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    'f6f1c1414328365cd990ef65c4aaf1ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for implementing ParentEntityAwareInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    '1de85a5b67ab1ed68827fa5893805767' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The parent entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    '0593deaa17316718e02512a4b011f6a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
         'functionName' => 'setParentEntity',
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
    '55f39f466003337c442e9403e8d635a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    'f43b9370f597a7ed9e9153884d62ed0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    'd12dfe464c354b717aa8ae1c644e4af0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
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
    'a6bfa8cfd9e03ecee38c37cb23eeb962' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
         'functionName' => 'evaluate',
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
    '85035c24aaa9351c3e431f4345bdfee5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
         'functionName' => 'evaluate',
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
    'd5085bddde512baac8b84673ab314735' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionbase' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionBase',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'parententityawaretrait' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareTrait',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\Condition\\OrderItemQuantity',
         'functionName' => 'evaluate',
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