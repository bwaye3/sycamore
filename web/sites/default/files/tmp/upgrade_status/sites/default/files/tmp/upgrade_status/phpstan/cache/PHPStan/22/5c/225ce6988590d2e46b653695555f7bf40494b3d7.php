<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:26:"Defines the Coupon entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1666:"(
  id = "commerce_promotion_coupon",
  label = @Translation("Coupon"),
  label_singular = @Translation("coupon"),
  label_plural = @Translation("coupons"),
  label_count = @PluralTranslation(
    singular = "@count coupon",
    plural = "@count coupons",
  ),
  handlers = {
    "event" = "Drupal\\commerce_promotion\\Event\\CouponEvent",
    "list_builder" = "Drupal\\commerce_promotion\\CouponListBuilder",
    "storage" = "Drupal\\commerce_promotion\\CouponStorage",
    "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
    "access" = "Drupal\\commerce_promotion\\CouponAccessControlHandler",
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "form" = {
      "add" = "Drupal\\commerce_promotion\\Form\\CouponForm",
      "edit" = "Drupal\\commerce_promotion\\Form\\CouponForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
    },
   "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_promotion\\CouponRouteProvider",
    },
  },
  base_table = "commerce_promotion_coupon",
  admin_permission = "administer commerce_promotion",
  field_indexes = {
    "code"
  },
  entity_keys = {
    "id" = "id",
    "label" = "code",
    "uuid" = "uuid",
    "status" = "status",
  },
  links = {
    "add-form" = "/promotion/{commerce_promotion}/coupons/add",
    "edit-form" = "/promotion/{commerce_promotion}/coupons/{commerce_promotion_coupon}/edit",
    "delete-form" = "/promotion/{commerce_promotion}/coupons/{commerce_promotion_coupon}/delete",
    "collection" = "/promotion/{commerce_promotion}/coupons",
  },
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));