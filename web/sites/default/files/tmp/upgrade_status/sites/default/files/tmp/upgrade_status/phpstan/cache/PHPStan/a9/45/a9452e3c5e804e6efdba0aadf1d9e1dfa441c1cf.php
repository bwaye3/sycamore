<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:30:"Defines the node entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:2201:"(
  id = "node",
  label = @Translation("Content"),
  label_collection = @Translation("Content"),
  label_singular = @Translation("content item"),
  label_plural = @Translation("content items"),
  label_count = @PluralTranslation(
    singular = "@count content item",
    plural = "@count content items"
  ),
  bundle_label = @Translation("Content type"),
  handlers = {
    "storage" = "Drupal\\node\\NodeStorage",
    "storage_schema" = "Drupal\\node\\NodeStorageSchema",
    "view_builder" = "Drupal\\node\\NodeViewBuilder",
    "access" = "Drupal\\node\\NodeAccessControlHandler",
    "views_data" = "Drupal\\node\\NodeViewsData",
    "form" = {
      "default" = "Drupal\\node\\NodeForm",
      "delete" = "Drupal\\node\\Form\\NodeDeleteForm",
      "edit" = "Drupal\\node\\NodeForm",
      "delete-multiple-confirm" = "Drupal\\node\\Form\\DeleteMultiple"
    },
    "route_provider" = {
      "html" = "Drupal\\node\\Entity\\NodeRouteProvider",
    },
    "list_builder" = "Drupal\\node\\NodeListBuilder",
    "translation" = "Drupal\\node\\NodeTranslationHandler"
  },
  base_table = "node",
  data_table = "node_field_data",
  revision_table = "node_revision",
  revision_data_table = "node_field_revision",
  show_revision_ui = TRUE,
  translatable = TRUE,
  list_cache_contexts = { "user.node_grants:view" },
  entity_keys = {
    "id" = "nid",
    "revision" = "vid",
    "bundle" = "type",
    "label" = "title",
    "langcode" = "langcode",
    "uuid" = "uuid",
    "status" = "status",
    "published" = "status",
    "uid" = "uid",
    "owner" = "uid",
  },
  revision_metadata_keys = {
    "revision_user" = "revision_uid",
    "revision_created" = "revision_timestamp",
    "revision_log_message" = "revision_log"
  },
  bundle_entity_type = "node_type",
  field_ui_base_route = "entity.node_type.edit_form",
  common_reference_target = TRUE,
  permission_granularity = "bundle",
  links = {
    "canonical" = "/node/{node}",
    "delete-form" = "/node/{node}/delete",
    "delete-multiple-form" = "/admin/content/node/delete",
    "edit-form" = "/node/{node}/edit",
    "version-history" = "/node/{node}/revisions",
    "revision" = "/node/{node}/revisions/{node_revision}/view",
    "create" = "/node",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));