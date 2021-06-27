<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:38:"Defines the profile type entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1636:"(
  id = "profile_type",
  label = @Translation("Profile type"),
  label_collection = @Translation("Profile types"),
  label_singular = @Translation("profile type"),
  label_plural = @Translation("profile types"),
  label_count = @PluralTranslation(
    singular = "@count profile type",
    plural = "@count profile types",
  ),
  handlers = {
    "list_builder" = "Drupal\\profile\\ProfileTypeListBuilder",
    "form" = {
      "default" = "Drupal\\profile\\Form\\ProfileTypeForm",
      "add" = "Drupal\\profile\\Form\\ProfileTypeForm",
      "edit" = "Drupal\\profile\\Form\\ProfileTypeForm",
      "duplicate" = "Drupal\\profile\\Form\\ProfileTypeForm",
      "delete" = "Drupal\\profile\\Form\\ProfileTypeDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "html" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  admin_permission = "administer profile types",
  config_prefix = "type",
  bundle_of = "profile",
  entity_keys = {
    "id" = "id",
    "label" = "label"
  },
  config_export = {
    "id",
    "label",
    "display_label",
    "multiple",
    "registration",
    "roles",
    "allow_revisions",
    "new_revision",
  },
  links = {
    "add-form" = "/admin/config/people/profile-types/add",
    "edit-form" = "/admin/config/people/profile-types/manage/{profile_type}",
    "duplicate-form" = "/admin/config/people/profile-types/manage/{profile_type}/duplicate",
    "delete-form" = "/admin/config/people/profile-types/manage/{profile_type}/delete",
    "collection" = "/admin/config/people/profile-types"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));