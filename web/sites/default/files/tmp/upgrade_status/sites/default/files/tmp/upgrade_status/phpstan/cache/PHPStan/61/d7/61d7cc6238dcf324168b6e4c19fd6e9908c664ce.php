<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:31:"Defines the order entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:2737:"(
  id = "commerce_order",
  label = @Translation("Order", context = "Commerce"),
  label_collection = @Translation("Orders", context = "Commerce"),
  label_singular = @Translation("order", context = "Commerce"),
  label_plural = @Translation("orders", context = "Commerce"),
  label_count = @PluralTranslation(
    singular = "@count order",
    plural = "@count orders",
    context = "Commerce",
  ),
  bundle_label = @Translation("Order type", context = "Commerce"),
  handlers = {
    "event" = "Drupal\\commerce_order\\Event\\OrderEvent",
    "storage" = "Drupal\\commerce_order\\OrderStorage",
    "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
    "access" = "Drupal\\commerce_order\\OrderAccessControlHandler",
    "query_access" = "Drupal\\commerce_order\\OrderQueryAccessHandler",
    "permission_provider" = "Drupal\\commerce_order\\OrderPermissionProvider",
    "list_builder" = "Drupal\\commerce_order\\OrderListBuilder",
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "form" = {
      "default" = "Drupal\\commerce_order\\Form\\OrderForm",
      "add" = "Drupal\\commerce_order\\Form\\OrderForm",
      "edit" = "Drupal\\commerce_order\\Form\\OrderForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
      "unlock" = "Drupal\\commerce_order\\Form\\OrderUnlockForm",
      "resend-receipt" = "Drupal\\commerce_order\\Form\\OrderReceiptResendForm",
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_order\\OrderRouteProvider",
      "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
    "entity_print" = "Drupal\\commerce_order\\EntityPrint\\OrderRenderer"
  },
  base_table = "commerce_order",
  admin_permission = "administer commerce_order",
  permission_granularity = "bundle",
  field_indexes = {
    "order_number"
  },
  entity_keys = {
    "id" = "order_id",
    "label" = "order_number",
    "uuid" = "uuid",
    "bundle" = "type"
  },
  links = {
    "canonical" = "/admin/commerce/orders/{commerce_order}",
    "edit-form" = "/admin/commerce/orders/{commerce_order}/edit",
    "delete-form" = "/admin/commerce/orders/{commerce_order}/delete",
    "delete-multiple-form" = "/admin/commerce/orders/delete",
    "reassign-form" = "/admin/commerce/orders/{commerce_order}/reassign",
    "unlock-form" = "/admin/commerce/orders/{commerce_order}/unlock",
    "collection" = "/admin/commerce/orders",
    "resend-receipt-form" = "/admin/commerce/orders/{commerce_order}/resend-receipt"
  },
  bundle_entity_type = "commerce_order_type",
  field_ui_base_route = "entity.commerce_order_type.edit_form",
  allow_number_patterns = TRUE,
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));