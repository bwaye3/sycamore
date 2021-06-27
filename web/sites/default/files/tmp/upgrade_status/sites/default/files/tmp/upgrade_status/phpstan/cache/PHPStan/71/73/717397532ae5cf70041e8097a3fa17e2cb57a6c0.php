<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:39:"Defines the taxonomy vocabulary entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1611:"(
  id = "taxonomy_vocabulary",
  label = @Translation("Taxonomy vocabulary"),
  label_singular = @Translation("vocabulary"),
  label_plural = @Translation("vocabularies"),
  label_collection = @Translation("Taxonomy"),
  label_count = @PluralTranslation(
    singular = "@count vocabulary",
    plural = "@count vocabularies"
  ),
  handlers = {
    "storage" = "Drupal\\taxonomy\\VocabularyStorage",
    "list_builder" = "Drupal\\taxonomy\\VocabularyListBuilder",
    "access" = "Drupal\\taxonomy\\VocabularyAccessControlHandler",
    "form" = {
      "default" = "Drupal\\taxonomy\\VocabularyForm",
      "reset" = "Drupal\\taxonomy\\Form\\VocabularyResetForm",
      "delete" = "Drupal\\taxonomy\\Form\\VocabularyDeleteForm",
      "overview" = "Drupal\\taxonomy\\Form\\OverviewTerms"
    },
    "route_provider" = {
      "html" = "Drupal\\taxonomy\\Entity\\Routing\\VocabularyRouteProvider",
    }
  },
  admin_permission = "administer taxonomy",
  config_prefix = "vocabulary",
  bundle_of = "taxonomy_term",
  entity_keys = {
    "id" = "vid",
    "label" = "name",
    "weight" = "weight"
  },
  links = {
    "add-form" = "/admin/structure/taxonomy/add",
    "delete-form" = "/admin/structure/taxonomy/manage/{taxonomy_vocabulary}/delete",
    "reset-form" = "/admin/structure/taxonomy/manage/{taxonomy_vocabulary}/reset",
    "overview-form" = "/admin/structure/taxonomy/manage/{taxonomy_vocabulary}/overview",
    "edit-form" = "/admin/structure/taxonomy/manage/{taxonomy_vocabulary}",
    "collection" = "/admin/structure/taxonomy",
  },
  config_export = {
    "name",
    "vid",
    "description",
    "weight",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));