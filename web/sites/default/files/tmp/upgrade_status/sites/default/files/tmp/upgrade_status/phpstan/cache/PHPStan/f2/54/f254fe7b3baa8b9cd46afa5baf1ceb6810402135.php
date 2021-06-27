<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/OrderItemType.php-1624732871',
   'data' => 
  array (
    'f1889c3e93a813378af12ad9e2461551' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the order item type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_order_item_type",
 *   label = @Translation("Order item type"),
 *   label_collection = @Translation("Order item types"),
 *   label_singular = @Translation("order item type"),
 *   label_plural = @Translation("order item types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count order item type",
 *     plural = "@count order item types",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
 *       "edit" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
 *       "duplicate" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
 *       "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *     "list_builder" = "Drupal\\commerce_order\\OrderItemTypeListBuilder",
 *   },
 *   admin_permission = "administer commerce_order_type",
 *   config_prefix = "commerce_order_item_type",
 *   bundle_of = "commerce_order_item",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "label",
 *     "id",
 *     "purchasableEntityType",
 *     "orderType",
 *     "traits",
 *     "locked",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/order-item-types/add",
 *     "edit-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/edit",
 *     "duplicate-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/duplicate",
 *     "delete-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/delete",
 *     "collection" = "/admin/commerce/config/order-item-types"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
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
    '9b77d753b021f6ffafd626bfb69ec834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The purchasable entity type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
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
    'f6022648aa2326f5bbc599fbe4940819' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
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
    '1f884e4dfbe5ca6a02e99706be401acb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
         'functionName' => 'getPurchasableEntityTypeId',
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
    '6036432de6df1a3f369d09fe30b77b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
         'functionName' => 'setPurchasableEntityTypeId',
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
    'dbe8fe4e20408d91363dae4d63d43f13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
         'functionName' => 'getOrderTypeId',
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
    '0c2612418eff2f7032cc3f9f6e149564' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItemType',
         'functionName' => 'setOrderTypeId',
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