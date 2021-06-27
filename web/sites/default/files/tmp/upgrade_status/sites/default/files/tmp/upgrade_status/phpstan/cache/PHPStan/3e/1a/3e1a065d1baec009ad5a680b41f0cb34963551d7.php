<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Access/OrderUserViewAccessCheck.php-1624732871',
   'data' => 
  array (
    'e29dd3d79da0f693c48e514c44fb17d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access to an order\'s user view mode.
   *
   * Draft orders are always denied as they have not yet been placed. Otherwise
   * access is delegated to entity access checks.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The currently logged in account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Access',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accessinterface' => 'Drupal\\Core\\Routing\\Access\\AccessInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Access\\OrderUserViewAccessCheck',
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