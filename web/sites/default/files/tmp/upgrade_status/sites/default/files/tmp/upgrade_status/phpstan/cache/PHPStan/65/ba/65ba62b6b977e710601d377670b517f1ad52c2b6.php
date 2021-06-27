<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:36:"Defines the order item entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1154:"(
  id = "commerce_order_item",
  label = @Translation("Order item"),
  label_singular = @Translation("order item"),
  label_plural = @Translation("order items"),
  label_count = @PluralTranslation(
    singular = "@count order item",
    plural = "@count order items",
  ),
  bundle_label = @Translation("Order item type"),
  handlers = {
    "event" = "Drupal\\commerce_order\\Event\\OrderItemEvent",
    "storage" = "Drupal\\commerce_order\\OrderItemStorage",
    "access" = "Drupal\\commerce_order\\OrderItemAccessControlHandler",
    "permission_provider" = "Drupal\\commerce_order\\OrderItemPermissionProvider",
    "views_data" = "Drupal\\commerce_order\\OrderItemViewsData",
    "form" = {
      "default" = "Drupal\\Core\\Entity\\ContentEntityForm",
    },
    "inline_form" = "Drupal\\commerce_order\\Form\\OrderItemInlineForm",
  },
  base_table = "commerce_order_item",
  admin_permission = "administer commerce_order",
  entity_keys = {
    "id" = "order_item_id",
    "uuid" = "uuid",
    "bundle" = "type",
    "label" = "title",
  },
  bundle_entity_type = "commerce_order_item_type",
  field_ui_base_route = "entity.commerce_order_item_type.edit_form",
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));