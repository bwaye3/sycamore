<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:33:"Defines the taxonomy term entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1991:"(
  id = "taxonomy_term",
  label = @Translation("Taxonomy term"),
  label_collection = @Translation("Taxonomy terms"),
  label_singular = @Translation("taxonomy term"),
  label_plural = @Translation("taxonomy terms"),
  label_count = @PluralTranslation(
    singular = "@count taxonomy term",
    plural = "@count taxonomy terms",
  ),
  bundle_label = @Translation("Vocabulary"),
  handlers = {
    "storage" = "Drupal\\taxonomy\\TermStorage",
    "storage_schema" = "Drupal\\taxonomy\\TermStorageSchema",
    "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
    "list_builder" = "Drupal\\Core\\Entity\\EntityListBuilder",
    "access" = "Drupal\\taxonomy\\TermAccessControlHandler",
    "views_data" = "Drupal\\taxonomy\\TermViewsData",
    "form" = {
      "default" = "Drupal\\taxonomy\\TermForm",
      "delete" = "Drupal\\taxonomy\\Form\\TermDeleteForm"
    },
    "translation" = "Drupal\\taxonomy\\TermTranslationHandler"
  },
  base_table = "taxonomy_term_data",
  data_table = "taxonomy_term_field_data",
  revision_table = "taxonomy_term_revision",
  revision_data_table = "taxonomy_term_field_revision",
  uri_callback = "taxonomy_term_uri",
  translatable = TRUE,
  entity_keys = {
    "id" = "tid",
    "revision" = "revision_id",
    "bundle" = "vid",
    "label" = "name",
    "langcode" = "langcode",
    "uuid" = "uuid",
    "published" = "status",
  },
  revision_metadata_keys = {
    "revision_user" = "revision_user",
    "revision_created" = "revision_created",
    "revision_log_message" = "revision_log_message",
  },
  bundle_entity_type = "taxonomy_vocabulary",
  field_ui_base_route = "entity.taxonomy_vocabulary.overview_form",
  common_reference_target = TRUE,
  links = {
    "canonical" = "/taxonomy/term/{taxonomy_term}",
    "delete-form" = "/taxonomy/term/{taxonomy_term}/delete",
    "edit-form" = "/taxonomy/term/{taxonomy_term}/edit",
    "create" = "/taxonomy/term",
  },
  permission_granularity = "bundle",
  constraints = {
    "TaxonomyHierarchy" = {}
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));