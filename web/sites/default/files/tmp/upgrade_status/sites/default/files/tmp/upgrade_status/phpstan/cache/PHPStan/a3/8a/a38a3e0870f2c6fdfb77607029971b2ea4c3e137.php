<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:40:"Defines the payment method entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1610:"(
  id = "commerce_payment_method",
  label = @Translation("Payment method"),
  label_collection = @Translation("Payment methods"),
  label_singular = @Translation("payment method"),
  label_plural = @Translation("payment methods"),
  label_count = @PluralTranslation(
    singular = "@count payment method",
    plural = "@count payment methods",
  ),
  bundle_label = @Translation("Payment method type"),
  bundle_plugin_type = "commerce_payment_method_type",
  handlers = {
    "access" = "Drupal\\commerce_payment\\PaymentMethodAccessControlHandler",
    "list_builder" = "Drupal\\commerce_payment\\PaymentMethodListBuilder",
    "storage" = "Drupal\\commerce_payment\\PaymentMethodStorage",
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
    "form" = {
      "edit" = "Drupal\\commerce_payment\\Form\\PaymentMethodEditForm",
      "delete" = "Drupal\\commerce_payment\\Form\\PaymentMethodDeleteForm"
    },
    "route_provider" = {
      "default" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  base_table = "commerce_payment_method",
  admin_permission = "administer commerce_payment_method",
  field_indexes = {
    "remote_id"
  },
  entity_keys = {
    "id" = "method_id",
    "uuid" = "uuid",
    "bundle" = "type",
    "owner" = "uid",
    "uid" = "uid",
  },
  links = {
    "collection" = "/user/{user}/payment-methods",
    "edit-form" = "/user/{user}/payment-methods/{commerce_payment_method}/edit",
    "delete-form" = "/user/{user}/payment-methods/{commerce_payment_method}/delete",
  },
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));