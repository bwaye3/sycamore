<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:36:"Defines the store type entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1796:"(
  id = "commerce_store_type",
  label = @Translation("Store type", context = "Commerce"),
  label_collection = @Translation("Store types", context = "Commerce"),
  label_singular = @Translation("store type", context = "Commerce"),
  label_plural = @Translation("store types", context = "Commerce"),
  label_count = @PluralTranslation(
    singular = "@count store type",
    plural = "@count store types",
    context = "Commerce",
  ),
  handlers = {
    "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
    "list_builder" = "Drupal\\commerce_store\\StoreTypeListBuilder",
    "form" = {
      "add" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
      "edit" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
      "duplicate" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
      "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  admin_permission = "administer commerce_store_type",
  config_prefix = "commerce_store_type",
  bundle_of = "commerce_store",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid",
  },
  config_export = {
    "id",
    "label",
    "uuid",
    "description",
    "traits",
    "locked",
  },
  links = {
    "add-form" = "/admin/commerce/config/store-types/add",
    "edit-form" = "/admin/commerce/config/store-types/{commerce_store_type}/edit",
    "duplicate-form" = "/admin/commerce/config/store-types/{commerce_store_type}/duplicate",
    "delete-form" = "/admin/commerce/config/store-types/{commerce_store_type}/delete",
    "collection" = "/admin/commerce/config/store-types",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));