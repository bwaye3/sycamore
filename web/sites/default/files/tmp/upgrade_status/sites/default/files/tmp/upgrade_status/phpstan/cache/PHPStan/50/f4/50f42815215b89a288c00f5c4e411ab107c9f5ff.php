<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/MainContent/MainContentRendererInterface.php-1624732867',
   'data' => 
  array (
    'e2af0ca4b038a33aa16d9e8cba20d862' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The interface for "main content" (@code _controller @endcode) renderers.
 *
 * Classes implementing this interface are able to render the main content (as
 * received from controllers) into a response of  a certain format
 * (HTML, JSON …) and/or in a certain decorated manner (e.g. in the case of the
 * default HTML main content renderer: with a page display variant applied).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\MainContent',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface',
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
    '25b84362a1c7b6e5cd29fd5e896a9e5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the main content render array into a response.
   *
   * @param array $main_content
   *   The render array representing the main content.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request object, for context.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match, for context.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response
   *   The Response in the format that this implementation supports.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\MainContent',
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface',
         'functionName' => 'renderResponse',
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