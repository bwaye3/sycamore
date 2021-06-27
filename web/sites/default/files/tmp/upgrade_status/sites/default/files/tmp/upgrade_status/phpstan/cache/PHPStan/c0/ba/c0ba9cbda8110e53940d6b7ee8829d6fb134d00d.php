<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:44:"Defines an image style configuration entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1214:"(
  id = "image_style",
  label = @Translation("Image style"),
  label_collection = @Translation("Image styles"),
  label_singular = @Translation("image style"),
  label_plural = @Translation("image styles"),
  label_count = @PluralTranslation(
    singular = "@count image style",
    plural = "@count image styles",
  ),
  handlers = {
    "form" = {
      "add" = "Drupal\\image\\Form\\ImageStyleAddForm",
      "edit" = "Drupal\\image\\Form\\ImageStyleEditForm",
      "delete" = "Drupal\\image\\Form\\ImageStyleDeleteForm",
      "flush" = "Drupal\\image\\Form\\ImageStyleFlushForm"
    },
    "list_builder" = "Drupal\\image\\ImageStyleListBuilder",
    "storage" = "Drupal\\image\\ImageStyleStorage",
  },
  admin_permission = "administer image styles",
  config_prefix = "style",
  entity_keys = {
    "id" = "name",
    "label" = "label"
  },
  links = {
    "flush-form" = "/admin/config/media/image-styles/manage/{image_style}/flush",
    "edit-form" = "/admin/config/media/image-styles/manage/{image_style}",
    "delete-form" = "/admin/config/media/image-styles/manage/{image_style}/delete",
    "collection" = "/admin/config/media/image-styles",
  },
  config_export = {
    "name",
    "label",
    "effects",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));