<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:34:"Defines the currency entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1388:"(
  id = "commerce_currency",
  label = @Translation("Currency"),
  label_collection = @Translation("Currencies"),
  label_singular = @Translation("currency"),
  label_plural = @Translation("currencies"),
  label_count = @PluralTranslation(
    singular = "@count currency",
    plural = "@count currencies",
  ),
  handlers = {
    "form" = {
      "add" = "Drupal\\commerce_price\\Form\\CurrencyForm",
      "edit" = "Drupal\\commerce_price\\Form\\CurrencyForm",
      "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\commerce_price\\CurrencyRouteProvider",
    },
    "list_builder" = "Drupal\\commerce_price\\CurrencyListBuilder",
  },
  admin_permission = "administer commerce_currency",
  config_prefix = "commerce_currency",
  entity_keys = {
    "id" = "currencyCode",
    "label" = "name",
    "uuid" = "uuid"
  },
  config_export = {
    "currencyCode",
    "name",
    "numericCode",
    "symbol",
    "fractionDigits"
  },
  links = {
    "add-form" = "/admin/commerce/config/currencies/add-custom",
    "edit-form" = "/admin/commerce/config/currencies/{commerce_currency}",
    "delete-form" = "/admin/commerce/config/currencies/{commerce_currency}/delete",
    "collection" = "/admin/commerce/config/currencies"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));