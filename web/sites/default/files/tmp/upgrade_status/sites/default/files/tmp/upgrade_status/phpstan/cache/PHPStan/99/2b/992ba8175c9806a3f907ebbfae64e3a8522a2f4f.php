<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/ContextualLinkManagerInterface.php-1624732867',
   'data' => 
  array (
    '61cb74b2153bdc410211e3b93f0073ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an object which returns the available contextual links.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManagerInterface',
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
    '821d1e02ff45467d2fa51a16d0496212' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the contextual link plugins by contextual link group.
   *
   * @param string $group_name
   *   The group name.
   *
   * @return array
   *   A list of contextual links plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManagerInterface',
         'functionName' => 'getContextualLinkPluginsByGroup',
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
    '40490a095c655cf331802bba5734878f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the contextual links prepared as expected by links.html.twig.
   *
   * @param string $group_name
   *   The group name.
   * @param array $route_parameters
   *   The incoming route parameters. The route parameters need to have the same
   *   name on all contextual link routes, e.g. you cannot use \'node\' and
   *   \'entity\' in parallel.
   * @param array $metadata
   *   Additional metadata of contextual links, like the position (optional).
   *
   * @return array
   *   An array of link information, keyed by the plugin ID. Each entry is an
   *   associative array with the following keys:
   *     - route_name: The route name to link to.
   *     - route_parameters: The route parameters for the contextual link.
   *     - title: The title of the contextual link.
   *     - weight: The weight of the contextual link.
   *     - localized_options: The options of the link, which will be passed
   *       to the link generator.
   *     - metadata: The array of additional metadata that was passed in.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\ContextualLinkManagerInterface',
         'functionName' => 'getContextualLinksArrayByGroup',
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