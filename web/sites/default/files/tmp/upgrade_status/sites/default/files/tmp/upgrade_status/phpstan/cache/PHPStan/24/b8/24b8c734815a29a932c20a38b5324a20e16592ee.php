<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/MenuActiveTrailInterface.php-1624732867',
   'data' => 
  array (
    '0d3879e40219ffdfb11a2b37878c3140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for the active menu trail service.
 *
 * The active trail of a given menu is the trail from the current page to the
 * root of that menu\'s tree.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuActiveTrailInterface',
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
    '32d97efd00b110e01dcf7e42ab5ae2c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the active trail IDs of the specified menu tree.
   *
   * @param string|null $menu_name
   *   (optional) The menu name of the requested tree. If omitted, all menu
   *   trees will be searched.
   *
   * @return array
   *   An array containing the active trail: a list of plugin IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuActiveTrailInterface',
         'functionName' => 'getActiveTrailIds',
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
    '7e234a0d77226ce3683b40f640c9dac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches a menu link which matches the route name, parameters and menu name.
   *
   * @param string|null $menu_name
   *   (optional) The menu within which to find the active link. If omitted, all
   *   menus will be searched.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface|null
   *   The menu link for the given route name, parameters and menu, or NULL if
   *   there is no matching menu link or the current user cannot access the
   *   current page (i.e. we have a 403 response).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuActiveTrailInterface',
         'functionName' => 'getActiveLink',
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