<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:32:"Defines the CaptchaPoint entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:203:"The \'rendered\' tag for the List cache is necessary since captchas have to be
rerendered once they are modified. Invalidating the render cache ensures
we always display the correct captcha for every form.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1151:"(
  id = "captcha_point",
  label = @Translation("Captcha Point"),
  handlers = {
    "list_builder" = "Drupal\\captcha\\Entity\\Controller\\CaptchaPointListBuilder",
    "form" = {
      "add" = "Drupal\\captcha\\Form\\CaptchaPointForm",
      "edit" = "Drupal\\captcha\\Form\\CaptchaPointForm",
      "disable" = "Drupal\\captcha\\Form\\CaptchaPointDisableForm",
      "enable" = "Drupal\\captcha\\Form\\CaptchaPointEnableForm",
      "delete" = "Drupal\\captcha\\Form\\CaptchaPointDeleteForm"
    }
  },
  config_prefix = "captcha_point",
  admin_permission = "administer CAPTCHA settings",
  list_cache_tags = {
   "rendered"
  },
  entity_keys = {
    "id" = "formId",
    "label" = "label",
    "status" = "status",
  },
  config_export = {
    "formId",
    "captchaType",
    "label",
    "uuid",
  },
  links = {
    "edit-form" = "/admin/config/people/captcha/captcha-points/{captcha_point}",
    "disable" = "/admin/config/people/captcha/captcha-points/{captcha_point}/disable",
    "enable" = "/admin/config/people/captcha/captcha-points/{captcha_point}/enable",
    "delete-form" = "/admin/config/people/captcha/captcha-points/{captcha_point}/delete",
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));