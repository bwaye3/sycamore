<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:31:"Defines the store entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:2566:"(
  id = "commerce_store",
  label = @Translation("Store", context = "Commerce"),
  label_collection = @Translation("Stores", context = "Commerce"),
  label_singular = @Translation("store", context = "Commerce"),
  label_plural = @Translation("stores", context = "Commerce"),
  label_count = @PluralTranslation(
    singular = "@count store",
    plural = "@count stores",
    context = "Commerce",
  ),
  bundle_label = @Translation("Store type", context = "Commerce"),
  handlers = {
    "event" = "Drupal\\commerce_store\\Event\\StoreEvent",
    "storage" = "Drupal\\commerce_store\\StoreStorage",
    "access" = "Drupal\\entity\\EntityAccessControlHandler",
    "query_access" = "Drupal\\entity\\QueryAccess\\QueryAccessHandler",
    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
    "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
    "list_builder" = "Drupal\\commerce_store\\StoreListBuilder",
    "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
    "form" = {
      "default" = "Drupal\\commerce_store\\Form\\StoreForm",
      "add" = "Drupal\\commerce_store\\Form\\StoreForm",
      "edit" = "Drupal\\commerce_store\\Form\\StoreForm",
      "duplicate" = "Drupal\\commerce_store\\Form\\StoreForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\AdminHtmlRouteProvider",
      "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
    "translation" = "Drupal\\content_translation\\ContentTranslationHandler"
  },
  base_table = "commerce_store",
  data_table = "commerce_store_field_data",
  admin_permission = "administer commerce_store",
  permission_granularity = "bundle",
  translatable = TRUE,
  entity_keys = {
    "id" = "store_id",
    "uuid" = "uuid",
    "bundle" = "type",
    "label" = "name",
    "langcode" = "langcode",
    "owner" = "uid",
    "uid" = "uid",
  },
  links = {
    "canonical" = "/store/{commerce_store}",
    "add-page" = "/store/add",
    "add-form" = "/store/add/{commerce_store_type}",
    "edit-form" = "/store/{commerce_store}/edit",
    "duplicate-form" = "/store/{commerce_store}/duplicate",
    "delete-form" = "/store/{commerce_store}/delete",
    "delete-multiple-form" = "/admin/commerce/config/stores/delete",
    "collection" = "/admin/commerce/config/stores",
  },
  bundle_entity_type = "commerce_store_type",
  field_ui_base_route = "entity.commerce_store_type.edit_form",
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));