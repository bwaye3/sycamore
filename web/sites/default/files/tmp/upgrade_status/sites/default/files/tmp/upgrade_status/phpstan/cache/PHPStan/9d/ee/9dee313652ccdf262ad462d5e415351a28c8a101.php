<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:43:"Defines the Node type configuration entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1129:"(
  id = "node_type",
  label = @Translation("Content type"),
  label_collection = @Translation("Content types"),
  label_singular = @Translation("content type"),
  label_plural = @Translation("content types"),
  label_count = @PluralTranslation(
    singular = "@count content type",
    plural = "@count content types",
  ),
  handlers = {
    "access" = "Drupal\\node\\NodeTypeAccessControlHandler",
    "form" = {
      "add" = "Drupal\\node\\NodeTypeForm",
      "edit" = "Drupal\\node\\NodeTypeForm",
      "delete" = "Drupal\\node\\Form\\NodeTypeDeleteConfirm"
    },
    "list_builder" = "Drupal\\node\\NodeTypeListBuilder",
  },
  admin_permission = "administer content types",
  config_prefix = "type",
  bundle_of = "node",
  entity_keys = {
    "id" = "type",
    "label" = "name"
  },
  links = {
    "edit-form" = "/admin/structure/types/manage/{node_type}",
    "delete-form" = "/admin/structure/types/manage/{node_type}/delete",
    "collection" = "/admin/structure/types",
  },
  config_export = {
    "name",
    "type",
    "description",
    "help",
    "new_revision",
    "preview_mode",
    "display_submitted",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));