<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:33:"Defines the payment entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1575:"(
  id = "commerce_payment",
  label = @Translation("Payment"),
  label_collection = @Translation("Payments"),
  label_singular = @Translation("payment"),
  label_plural = @Translation("payments"),
  label_count = @PluralTranslation(
    singular = "@count payment",
    plural = "@count payments",
  ),
  bundle_label = @Translation("Payment type"),
  bundle_plugin_type = "commerce_payment_type",
  handlers = {
    "access" = "Drupal\\commerce_payment\\PaymentAccessControlHandler",
    "event" = "Drupal\\commerce_payment\\Event\\PaymentEvent",
    "list_builder" = "Drupal\\commerce_payment\\PaymentListBuilder",
    "storage" = "Drupal\\commerce_payment\\PaymentStorage",
    "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
    "form" = {
      "operation" = "Drupal\\commerce_payment\\Form\\PaymentOperationForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
    },
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "route_provider" = {
      "default" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  base_table = "commerce_payment",
  admin_permission = "administer commerce_payment",
  field_indexes = {
    "remote_id"
  },
  entity_keys = {
    "id" = "payment_id",
    "bundle" = "type",
    "uuid" = "uuid",
  },
  links = {
    "collection" = "/admin/commerce/orders/{commerce_order}/payments",
    "edit-form" = "/admin/commerce/orders/{commerce_order}/payments/commerce_payment/edit",
    "delete-form" = "/admin/commerce/orders/{commerce_order}/payments/{commerce_payment}/delete",
  },
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));