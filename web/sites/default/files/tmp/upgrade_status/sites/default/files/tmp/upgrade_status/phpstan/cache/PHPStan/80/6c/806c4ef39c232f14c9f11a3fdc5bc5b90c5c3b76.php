<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/OrderAssignmentInterface.php-1624732871',
   'data' => 
  array (
    '42e96130b85b8b53a3ce04f10c0bdbcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Handles assigning orders to customers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
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
    '8a3147619dc5bf8873091efdd21038de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assigns the order to the given customer.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Drupal\\user\\UserInterface $customer
   *   The customer.
   * @param bool $save_order
   *   Whether the order should be saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
         'functionName' => 'assign',
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
    'e49c952fdfde2836bb2a0b3ffcf10e70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assigns multiple orders to the given customer.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface[] $orders
   *   The orders.
   * @param \\Drupal\\user\\UserInterface $customer
   *   The customer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
         'functionName' => 'assignMultiple',
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