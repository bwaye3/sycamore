<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Form/AddToCartFormInterface.php-1624732871',
   'data' => 
  array (
    'ad4e648f8a9b22a3a234be07aca90a84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the add to cart form interface.
 *
 * Extends the regular interface to allow the form ID to be overriden.
 * By default the form ID is suffixed with the order item\'s purchasable
 * entity ID, to achieve uniqueness. Callers can replace that form ID with
 * a more stable one, or to handle the case where the order item has no
 * purchasable entity, but multiple form instances are still desired.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'contententityforminterface' => 'Drupal\\Core\\Entity\\ContentEntityFormInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartFormInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2de53f757434a4f7ab2fb327a539f76a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form ID.
   *
   * @param string $form_id
   *   The form ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'contententityforminterface' => 'Drupal\\Core\\Entity\\ContentEntityFormInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartFormInterface',
         'functionName' => 'setFormId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));