<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:35:"Defines the user role entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1106:"(
  id = "user_role",
  label = @Translation("Role"),
  label_collection = @Translation("Roles"),
  label_singular = @Translation("role"),
  label_plural = @Translation("roles"),
  label_count = @PluralTranslation(
    singular = "@count role",
    plural = "@count roles",
  ),
  handlers = {
    "storage" = "Drupal\\user\\RoleStorage",
    "access" = "Drupal\\user\\RoleAccessControlHandler",
    "list_builder" = "Drupal\\user\\RoleListBuilder",
    "form" = {
      "default" = "Drupal\\user\\RoleForm",
      "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
    }
  },
  admin_permission = "administer permissions",
  config_prefix = "role",
  static_cache = TRUE,
  entity_keys = {
    "id" = "id",
    "weight" = "weight",
    "label" = "label"
  },
  links = {
    "delete-form" = "/admin/people/roles/manage/{user_role}/delete",
    "edit-form" = "/admin/people/roles/manage/{user_role}",
    "edit-permissions-form" = "/admin/people/permissions/{user_role}",
    "collection" = "/admin/people/roles",
  },
  config_export = {
    "id",
    "label",
    "weight",
    "is_admin",
    "permissions",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));