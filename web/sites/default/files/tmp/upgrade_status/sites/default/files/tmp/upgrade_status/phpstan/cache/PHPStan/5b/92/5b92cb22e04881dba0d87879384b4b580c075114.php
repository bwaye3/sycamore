<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:41:"Defines the order item type entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1796:"(
  id = "commerce_order_item_type",
  label = @Translation("Order item type"),
  label_collection = @Translation("Order item types"),
  label_singular = @Translation("order item type"),
  label_plural = @Translation("order item types"),
  label_count = @PluralTranslation(
    singular = "@count order item type",
    plural = "@count order item types",
  ),
  handlers = {
    "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
    "form" = {
      "add" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
      "edit" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
      "duplicate" = "Drupal\\commerce_order\\Form\\OrderItemTypeForm",
      "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
    "list_builder" = "Drupal\\commerce_order\\OrderItemTypeListBuilder",
  },
  admin_permission = "administer commerce_order_type",
  config_prefix = "commerce_order_item_type",
  bundle_of = "commerce_order_item",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "label",
    "id",
    "purchasableEntityType",
    "orderType",
    "traits",
    "locked",
  },
  links = {
    "add-form" = "/admin/commerce/config/order-item-types/add",
    "edit-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/edit",
    "duplicate-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/duplicate",
    "delete-form" = "/admin/commerce/config/order-item-types/{commerce_order_item_type}/delete",
    "collection" = "/admin/commerce/config/order-item-types"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));