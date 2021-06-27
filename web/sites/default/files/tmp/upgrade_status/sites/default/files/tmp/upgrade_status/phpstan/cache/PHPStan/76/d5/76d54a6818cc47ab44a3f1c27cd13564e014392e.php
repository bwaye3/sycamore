<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:43:"Defines the product attribute entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1676:"(
  id = "commerce_product_attribute",
  label = @Translation("Product attribute"),
  label_collection = @Translation("Product attributes"),
  label_singular = @Translation("product attribute"),
  label_plural = @Translation("product attributes"),
  label_count = @PluralTranslation(
    singular = "@count product attribute",
    plural = "@count product attributes",
  ),
  handlers = {
    "access" = "Drupal\\entity\\EntityAccessControlHandler",
    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
    "list_builder" = "Drupal\\commerce_product\\ProductAttributeListBuilder",
    "form" = {
      "add" = "Drupal\\commerce_product\\Form\\ProductAttributeForm",
      "edit" = "Drupal\\commerce_product\\Form\\ProductAttributeForm",
      "delete" = "Drupal\\commerce_product\\Form\\ProductAttributeDeleteForm",
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  config_prefix = "commerce_product_attribute",
  admin_permission = "administer commerce_product_attribute",
  bundle_of = "commerce_product_attribute_value",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "id",
    "label",
    "elementType"
  },
  links = {
    "add-form" = "/admin/commerce/product-attributes/add",
    "edit-form" = "/admin/commerce/product-attributes/manage/{commerce_product_attribute}",
    "delete-form" = "/admin/commerce/product-attributes/manage/{commerce_product_attribute}/delete",
    "collection" =  "/admin/commerce/product-attributes",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));