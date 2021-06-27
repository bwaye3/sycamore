<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RouteMatchInterface.php-1624732867',
   'data' => 
  array (
    '5e15d8b5ede0751b14d397dd7c01c6f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for classes representing the result of routing.
 *
 * Routing is the process of selecting the best matching candidate from a
 * collection of routes for an incoming request. The relevant properties of a
 * request include the path as well as a list of raw parameter values derived
 * from the URL. If an appropriate route is found, raw parameter values will be
 * upcast automatically if possible.
 *
 * The route match object contains useful information about the selected route
 * as well as the raw and upcast parameters derived from the incoming
 * request.
 *
 * @ingroup routing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
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
    'ad52aebd30283f33a43496dd38928c3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the route name.
   *
   * @return string|null
   *   The route name. NULL if no route is matched.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getRouteName',
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
    '15637c1b59410769ef0bc671bb5a422a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the route object.
   *
   * @return \\Symfony\\Component\\Routing\\Route|null
   *   The route object. NULL if no route is matched.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getRouteObject',
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
    '6baab0518123641defca12932366fd7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the processed value of a named route parameter.
   *
   * Raw URL parameters are processed by the parameter conversion system, which
   * does operations such as converting entity ID parameters to fully-loaded
   * entities. For example, the path node/12345 would have a raw node ID
   * parameter value of 12345, while the processed parameter value would be the
   * corresponding loaded node object.
   *
   * @param string $parameter_name
   *   The parameter name.
   *
   * @return mixed|null
   *   The parameter value. NULL if the route doesn\'t define the parameter or
   *   if the parameter value can\'t be determined from the request.
   *
   * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getRawParameter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getParameter',
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
    'e02f6c4eed416c4b06cdc5873b863d0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the bag of all processed route parameters.
   *
   * Raw URL parameters are processed by the parameter conversion system, which
   * does operations such as converting entity ID parameters to fully-loaded
   * entities. For example, the path node/12345 would have a raw node ID
   * parameter value of 12345, while the processed parameter value would be the
   * corresponding loaded node object.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag
   *   The parameter bag.
   *
   * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getRawParameters()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getParameters',
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
    'e3e4072186e41c4640fc00d9ec735347' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the raw value of a named route parameter.
   *
   * @param string $parameter_name
   *   The parameter name.
   *
   * @return string|null
   *   The raw (non-upcast) parameter value. NULL if the route doesn\'t define
   *   the parameter or if the raw parameter value can\'t be determined from the
   *   request.
   *
   * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getParameter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getRawParameter',
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
    '5ef6a43606236d7af3e03f3537bd8e29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the bag of all raw route parameters.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\ParameterBag
   *   The parameter bag.
   *
   * @see \\Drupal\\Core\\Routing\\RouteMatchInterface::getParameters()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
         'functionName' => 'getRawParameters',
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