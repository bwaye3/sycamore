<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Form/CustomerFormTrait.php-1624732871',
   'data' => 
  array (
    '0a8da9729bc76eb2aa78a676bfd5c649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form for selecting the order\'s customer (uid and mail fields).
 *
 * Used when adding a new order or reassigning an existing one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\CustomerFormTrait',
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
    '644f2e785388dfc20eb51a3249847e7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the customer form.
   *
   * @param array $form
   *   The parent form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The current order, if known.
   *
   * @return array
   *   The parent form with the customer form elements added.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\CustomerFormTrait',
         'functionName' => 'buildCustomerForm',
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
    '3ece7cff3b73e5460a32b2c311fd2c3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\CustomerFormTrait',
         'functionName' => 'customerFormAjax',
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
    '5263cbb23659fb3d2034fb84ff60bf89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit handler for the customer select form.
   *
   * @param array $form
   *   The parent form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\CustomerFormTrait',
         'functionName' => 'submitCustomerForm',
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