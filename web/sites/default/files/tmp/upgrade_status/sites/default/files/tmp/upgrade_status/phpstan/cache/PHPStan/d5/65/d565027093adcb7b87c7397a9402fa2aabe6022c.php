<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:39:"Defines the checkout flow entity class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:17:"@ConfigEntityType";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:1456:"(
  id = "commerce_checkout_flow",
  label = @Translation("Checkout flow"),
  label_collection = @Translation("Checkout flows"),
  label_singular = @Translation("checkout flow"),
  label_plural = @Translation("checkout flows"),
  label_count = @PluralTranslation(
    singular = "@count checkout flow",
    plural = "@count checkout flows",
  ),
  handlers = {
    "list_builder" = "Drupal\\commerce_checkout\\CheckoutFlowListBuilder",
    "form" = {
      "add" = "Drupal\\commerce_checkout\\Form\\CheckoutFlowForm",
      "edit" = "Drupal\\commerce_checkout\\Form\\CheckoutFlowForm",
      "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
    },
    "local_task_provider" = {
      "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
    },
    "route_provider" = {
      "default" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
    },
  },
  config_prefix = "commerce_checkout_flow",
  admin_permission = "administer commerce_checkout_flow",
  entity_keys = {
    "id" = "id",
    "label" = "label",
    "uuid" = "uuid"
  },
  config_export = {
    "id",
    "label",
    "plugin",
    "configuration",
  },
  links = {
    "add-form" = "/admin/commerce/config/checkout-flows/add",
    "edit-form" = "/admin/commerce/config/checkout-flows/manage/{commerce_checkout_flow}",
    "delete-form" = "/admin/commerce/config/checkout-flows/manage/{commerce_checkout_flow}/delete",
    "collection" =  "/admin/commerce/config/checkout-flows"
  }
)";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));