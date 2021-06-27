<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:43:"Defines the product variation entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:3416:"(
  id = "commerce_product_variation",
  label = @Translation("Product variation"),
  label_collection = @Translation("Product variations"),
  label_singular = @Translation("product variation"),
  label_plural = @Translation("product variations"),
  label_count = @PluralTranslation(
    singular = "@count product variation",
    plural = "@count product variations",
  ),
  bundle_label = @Translation("Product variation type"),
  handlers = {
    "event" = "Drupal\\commerce_product\\Event\\ProductVariationEvent",
    "storage" = "Drupal\\commerce_product\\ProductVariationStorage",
    "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
    "access" = "Drupal\\commerce_product\\ProductVariationAccessControlHandler",
    "permission_provider" = "Drupal\\commerce_product\\ProductVariationPermissionProvider",
    "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
    "list_builder" = "Drupal\\commerce_product\\ProductVariationListBuilder",
    "views_data" = "Drupal\\commerce_product\\ProductVariationViewsData",
    "form" = {
      "add" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
      "edit" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
      "duplicate" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
      "delete" = "Drupal\\commerce_product\\Form\\ProductVariationDeleteForm",
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_product\\ProductVariationRouteProvider",
    },
    "inline_form" = "Drupal\\commerce_product\\Form\\ProductVariationInlineForm",
    "translation" = "Drupal\\content_translation\\ContentTranslationHandler"
  },
  admin_permission = "administer commerce_product",
  fieldable = TRUE,
  field_indexes = {
    "sku"
  },
  translatable = TRUE,
  translation = {
    "content_translation" = {
      "access_callback" = "content_translation_translate_access"
    },
  },
  base_table = "commerce_product_variation",
  data_table = "commerce_product_variation_field_data",
  entity_keys = {
    "id" = "variation_id",
    "bundle" = "type",
    "langcode" = "langcode",
    "uuid" = "uuid",
    "label" = "title",
    "published" = "status",
    "owner" = "uid",
    "uid" = "uid",
  },
  links = {
    "add-form" = "/product/{commerce_product}/variations/add",
    "edit-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/edit",
    "duplicate-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/duplicate",
    "delete-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/delete",
    "collection" = "/product/{commerce_product}/variations",
    "drupal:content-translation-overview" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations",
    "drupal:content-translation-add" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/add/{source}/{target}",
    "drupal:content-translation-edit" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/edit/{language}",
    "drupal:content-translation-delete" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/delete/{language}",
  },
  bundle_entity_type = "commerce_product_variation_type",
  field_ui_base_route = "entity.commerce_product_variation_type.edit_form",
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));