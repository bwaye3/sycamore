<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:35:"Defines the promotion entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:3088:"(
  id = "commerce_promotion",
  label = @Translation("Promotion", context = "Commerce"),
  label_collection = @Translation("Promotions", context = "Commerce"),
  label_singular = @Translation("promotion", context = "Commerce"),
  label_plural = @Translation("promotions", context = "Commerce"),
  label_count = @PluralTranslation(
    singular = "@count promotion",
    plural = "@count promotions",
    context = "Commerce",
  ),
  handlers = {
    "event" = "Drupal\\commerce_promotion\\Event\\PromotionEvent",
    "storage" = "Drupal\\commerce_promotion\\PromotionStorage",
    "access" = "Drupal\\entity\\EntityAccessControlHandler",
    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
    "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
    "list_builder" = "Drupal\\commerce_promotion\\PromotionListBuilder",
    "views_data" = "Drupal\\commerce_promotion\\PromotionViewsData",
    "form" = {
      "default" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
      "add" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
      "enable" = "Drupal\\commerce_promotion\\Form\\PromotionEnableForm",
      "disable" = "Drupal\\commerce_promotion\\Form\\PromotionDisableForm",
      "edit" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
      "duplicate" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
      "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_promotion\\PromotionRouteProvider",
      "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
    },
    "translation" = "Drupal\\commerce_promotion\\PromotionTranslationHandler",
  },
  base_table = "commerce_promotion",
  data_table = "commerce_promotion_field_data",
  admin_permission = "administer commerce_promotion",
  translatable = TRUE,
  translation = {
    "content_translation" = {
      "access_callback" = "content_translation_translate_access"
    },
  },
  entity_keys = {
    "id" = "promotion_id",
    "label" = "name",
    "langcode" = "langcode",
    "uuid" = "uuid",
    "status" = "status",
  },
  links = {
    "add-form" = "/promotion/add",
    "edit-form" = "/promotion/{commerce_promotion}/edit",
    "enable-form" = "/promotion/{commerce_promotion}/enable",
    "disable-form" = "/promotion/{commerce_promotion}/disable",
    "duplicate-form" = "/promotion/{commerce_promotion}/duplicate",
    "delete-form" = "/promotion/{commerce_promotion}/delete",
    "delete-multiple-form" = "/admin/commerce/promotions/delete",
    "collection" = "/admin/commerce/promotions",
    "drupal:content-translation-overview" = "/promotion/{commerce_promotion}/translations",
    "drupal:content-translation-add" = "/promotion/{commerce_promotion}/translations/add/{source}/{target}",
    "drupal:content-translation-edit" = "/promotion/{commerce_promotion}/translations/edit/{language}",
    "drupal:content-translation-delete" = "/promotion/{commerce_promotion}/translations/delete/{language}",
  },
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));