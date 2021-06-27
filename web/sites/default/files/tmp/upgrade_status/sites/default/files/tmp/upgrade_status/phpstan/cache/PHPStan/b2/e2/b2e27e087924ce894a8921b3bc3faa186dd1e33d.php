<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RouteProviderInterface.php-1624732867',
   'data' => 
  array (
    'd16934b9ee0100bca893328174618714' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extends the router provider interface
 *
 * @see \\Symfony\\Cmf\\Component\\Routing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'routeproviderbaseinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteProviderInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
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
    'ec1af3dd898bac974df8a53f2912fcb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all routes which match a certain pattern.
   *
   * @param string $pattern
   *   The route pattern to search for (contains {} as placeholders).
   *
   * @return \\Symfony\\Component\\Routing\\RouteCollection
   *   Returns a route collection of matching routes. The collection may be
   *   empty and will be sorted from highest to lowest fit (match of path parts)
   *   and then in ascending order by route name for routes with the same fit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'routeproviderbaseinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteProviderInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
         'functionName' => 'getRoutesByPattern',
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
    '0b70fe9d7cb969abf5d58d0eb9753de2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all the routes on the system.
   *
   * Usage of this method is discouraged for performance reasons. If possible,
   * use RouteProviderInterface::getRoutesByNames() or
   * RouteProviderInterface::getRoutesByPattern() instead.
   *
   * @return \\Symfony\\Component\\Routing\\Route[]
   *   An iterator of routes keyed by route name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'routeproviderbaseinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteProviderInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
         'functionName' => 'getAllRoutes',
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
    '23d6ffb9cab4b7987624967d721a901f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the route provider object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'routeproviderbaseinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteProviderInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProviderInterface',
         'functionName' => 'reset',
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