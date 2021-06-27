<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:41:"Defines the payment gateway entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1852:"(
  id = "commerce_payment_gateway",
  label = @Translation("Payment gateway"),
  label_collection = @Translation("Payment gateways"),
  label_singular = @Translation("payment gateway"),
  label_plural = @Translation("payment gateways"),
  label_count = @PluralTranslation(
    singular = "@count payment gateway",
    plural = "@count payment gateways",
  ),
  handlers = {
    "list_builder" = "Drupal\\commerce_payment\\PaymentGatewayListBuilder",
    "storage" = "Drupal\\commerce_payment\\PaymentGatewayStorage",
    "form" = {
      "add" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
      "edit" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
      "duplicate" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
      "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  admin_permission = "administer commerce_payment_gateway",
  config_prefix = "commerce_payment_gateway",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid",
    "weight" = "weight",
    "status" = "status",
  },
  config_export = {
    "id",
    "label",
    "weight",
    "status",
    "plugin",
    "configuration",
    "conditions",
    "conditionOperator",
  },
  links = {
    "add-form" = "/admin/commerce/config/payment-gateways/add",
    "edit-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}",
    "duplicate-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}/duplicate",
    "delete-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}/delete",
    "collection" =  "/admin/commerce/config/payment-gateways"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));