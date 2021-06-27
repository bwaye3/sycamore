<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:40:"Defines the number pattern entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1980:"(
  id = "commerce_number_pattern",
  label = @Translation("Number pattern"),
  label_collection = @Translation("Number patterns"),
  label_singular = @Translation("number pattern"),
  label_plural = @Translation("number patterns"),
  label_count = @PluralTranslation(
    singular = "@count number pattern",
    plural = "@count number patterns",
  ),
  handlers = {
    "access" = "Drupal\\commerce_number_pattern\\NumberPatternAccessControlHandler",
    "form" = {
      "add" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
      "duplicate" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
      "edit" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
      "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm",
      "reset-sequence" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternResetSequenceForm",
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_number_pattern\\NumberPatternRouteProvider",
    },
    "list_builder" = "Drupal\\commerce_number_pattern\\NumberPatternListBuilder",
  },
  admin_permission = "administer commerce_number_pattern",
  config_prefix = "commerce_number_pattern",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "id",
    "label",
    "targetEntityType",
    "plugin",
    "configuration",
  },
  links = {
    "add-form" = "/admin/commerce/config/number-patterns/add",
    "edit-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/edit",
    "duplicate-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/duplicate",
    "delete-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/delete",
    "reset-sequence-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/reset-sequence",
    "collection" = "/admin/commerce/config/number-patterns"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));