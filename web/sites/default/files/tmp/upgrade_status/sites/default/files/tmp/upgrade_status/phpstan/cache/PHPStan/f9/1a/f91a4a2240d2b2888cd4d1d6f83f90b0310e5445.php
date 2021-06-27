<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/LocalTaskManagerInterface.php-1624732867',
   'data' => 
  array (
    '609fe137b7160b8c4fdb379ec06407f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages discovery and instantiation of menu local task plugins.
 *
 * This manager finds plugins that are rendered as local tasks (usually tabs).
 * Derivatives are supported for modules that wish to generate multiple tabs on
 * behalf of something else.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalTaskManagerInterface',
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
    'e342c1d4833b076d1bf7b08738d96d8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the title for a local task.
   *
   * @param \\Drupal\\Core\\Menu\\LocalTaskInterface $local_task
   *   A local task plugin instance to get the title for.
   *
   * @return string
   *   The localized title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalTaskManagerInterface',
         'functionName' => 'getTitle',
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
    'a30f43157845e19ab37c364fba071c4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find all local tasks that appear on a named route.
   *
   * @param string $route_name
   *   The route for which to find local tasks.
   *
   * @return array
   *   Returns an array of task levels. Each task level contains instances
   *   of local tasks (LocalTaskInterface) which appear on the tab route.
   *   The array keys are the depths and the values are arrays of plugin
   *   instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalTaskManagerInterface',
         'functionName' => 'getLocalTasksForRoute',
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
    '0ae256f7bcfdfba2743d63bc126a4f25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the render array for all local tasks.
   *
   * @param string $current_route_name
   *   The route for which to make renderable local tasks.
   * @param \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface $cacheability
   *   The cacheability metadata for the local tasks.
   *
   * @return array
   *   A render array as expected by menu-local-tasks.html.twig.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalTaskManagerInterface',
         'functionName' => 'getTasksBuild',
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
    '20ec3ebaa613be3673234ed6906e7eec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the local tasks (tabs) for the given route.
   *
   * @param string $route_name
   *   The route for which to make renderable local tasks.
   * @param int $level
   *   The level of tasks you ask for. Primary tasks are 0, secondary are 1.
   *
   * @return array
   *   An array containing
   *   - tabs: Local tasks render array for the requested level.
   *   - route_name: The route name for the current page used to collect the
   *     local tasks.
   *
   * @see hook_menu_local_tasks_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\LocalTaskManagerInterface',
         'functionName' => 'getLocalTasks',
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