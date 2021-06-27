<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:48:"Defines the product variation type entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1964:"(
  id = "commerce_product_variation_type",
  label = @Translation("Product variation type"),
  label_collection = @Translation("Product variation types"),
  label_singular = @Translation("product variation type"),
  label_plural = @Translation("product variation types"),
  label_count = @PluralTranslation(
    singular = "@count product variation type",
    plural = "@count product variation types",
  ),
  handlers = {
    "access" = "Drupal\\commerce_product\\ProductVariationTypeAccessControlHandler",
    "list_builder" = "Drupal\\commerce_product\\ProductVariationTypeListBuilder",
    "form" = {
      "add" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
      "edit" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
      "duplicate" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
      "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  config_prefix = "commerce_product_variation_type",
  admin_permission = "administer commerce_product_type",
  bundle_of = "commerce_product_variation",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "id",
    "label",
    "orderItemType",
    "generateTitle",
    "traits",
    "locked",
  },
  links = {
    "add-form" = "/admin/commerce/config/product-variation-types/add",
    "edit-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/edit",
    "duplicate-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/duplicate",
    "delete-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/delete",
    "collection" =  "/admin/commerce/config/product-variation-types"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));