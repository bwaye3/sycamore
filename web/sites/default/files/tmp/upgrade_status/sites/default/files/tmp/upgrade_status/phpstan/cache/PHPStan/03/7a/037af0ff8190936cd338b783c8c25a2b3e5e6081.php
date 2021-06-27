<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:30:"Defines the user entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:127:"The base table name here is plural, despite Drupal table naming standards,
because "user" is a reserved word in many databases.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:18:"@ContentEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1326:"(
  id = "user",
  label = @Translation("User"),
  label_collection = @Translation("Users"),
  label_singular = @Translation("user"),
  label_plural = @Translation("users"),
  label_count = @PluralTranslation(
    singular = "@count user",
    plural = "@count users",
  ),
  handlers = {
    "storage" = "Drupal\\user\\UserStorage",
    "storage_schema" = "Drupal\\user\\UserStorageSchema",
    "access" = "Drupal\\user\\UserAccessControlHandler",
    "list_builder" = "Drupal\\user\\UserListBuilder",
    "views_data" = "Drupal\\user\\UserViewsData",
    "route_provider" = {
      "html" = "Drupal\\user\\Entity\\UserRouteProvider",
    },
    "form" = {
      "default" = "Drupal\\user\\ProfileForm",
      "cancel" = "Drupal\\user\\Form\\UserCancelForm",
      "register" = "Drupal\\user\\RegisterForm"
    },
    "translation" = "Drupal\\user\\ProfileTranslationHandler"
  },
  admin_permission = "administer users",
  base_table = "users",
  data_table = "users_field_data",
  translatable = TRUE,
  entity_keys = {
    "id" = "uid",
    "langcode" = "langcode",
    "uuid" = "uuid"
  },
  links = {
    "canonical" = "/user/{user}",
    "edit-form" = "/user/{user}/edit",
    "cancel-form" = "/user/{user}/cancel",
    "collection" = "/admin/people",
  },
  field_ui_base_route = "entity.user.admin_form",
  common_reference_target = TRUE
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));