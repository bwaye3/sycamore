<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PaymentStorageInterface.php-1624732871',
   'data' => 
  array (
    '2d6b47d39a66e4fb815d6330e49f0ee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for payment storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentStorageInterface',
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
    'd251a2dc2a7e0006ae7cbab89038d16d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the payment for the given remote ID.
   *
   * @param string $remote_id
   *   The remote ID.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentInterface|null
   *   The payment, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentStorageInterface',
         'functionName' => 'loadByRemoteId',
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
    'ec188c18b55ffcbbb64d81355af65fab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all payments for the given order.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentInterface[]
   *   The payments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentStorageInterface',
         'functionName' => 'loadMultipleByOrder',
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