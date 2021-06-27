<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Access/PaymentMethodAccessCheck.php-1624732871',
   'data' => 
  array (
    '5dcdc46b72271530e46b09ef9025c323' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks access for payment method routes.
 *
 * @see \\Drupal\\Core\\Access\\CustomAccessCheck
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Access\\PaymentMethodAccessCheck',
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
    'fc35a410d412b08ace8d62c63ce8f5e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access.
   *
   * Confirms that the user either has the \'administer commerce_payment_method\'
   * permission, or the \'manage own commerce_payment_method\' permission while
   * visiting their own payment method pages.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current user account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Access',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Access\\PaymentMethodAccessCheck',
         'functionName' => 'checkAccess',
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