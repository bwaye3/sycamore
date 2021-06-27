<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:33:"Defines the product entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:2407:"(
  id = "commerce_product",
  label = @Translation("Product"),
  label_collection = @Translation("Products"),
  label_singular = @Translation("product"),
  label_plural = @Translation("products"),
  label_count = @PluralTranslation(
    singular = "@count product",
    plural = "@count products",
  ),
  bundle_label = @Translation("Product type"),
  handlers = {
    "event" = "Drupal\\commerce_product\\Event\\ProductEvent",
    "storage" = "Drupal\\commerce\\CommerceContentEntityStorage",
    "access" = "Drupal\\entity\\EntityAccessControlHandler",
    "query_access" = "Drupal\\entity\\QueryAccess\\QueryAccessHandler",
    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
    "view_builder" = "Drupal\\commerce_product\\ProductViewBuilder",
    "list_builder" = "Drupal\\commerce_product\\ProductListBuilder",
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "form" = {
      "default" = "Drupal\\commerce_product\\Form\\ProductForm",
      "add" = "Drupal\\commerce_product\\Form\\ProductForm",
      "edit" = "Drupal\\commerce_product\\Form\\ProductForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\AdminHtmlRouteProvider",
      "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
    "translation" = "Drupal\\commerce_product\\ProductTranslationHandler"
  },
  admin_permission = "administer commerce_product",
  permission_granularity = "bundle",
  translatable = TRUE,
  base_table = "commerce_product",
  data_table = "commerce_product_field_data",
  entity_keys = {
    "id" = "product_id",
    "bundle" = "type",
    "label" = "title",
    "langcode" = "langcode",
    "uuid" = "uuid",
    "published" = "status",
    "owner" = "uid",
    "uid" = "uid",
  },
  links = {
    "canonical" = "/product/{commerce_product}",
    "add-page" = "/product/add",
    "add-form" = "/product/add/{commerce_product_type}",
    "edit-form" = "/product/{commerce_product}/edit",
    "delete-form" = "/product/{commerce_product}/delete",
    "delete-multiple-form" = "/admin/commerce/products/delete",
    "collection" = "/admin/commerce/products"
  },
  bundle_entity_type = "commerce_product_type",
  field_ui_base_route = "entity.commerce_product_type.edit_form",
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));