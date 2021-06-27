<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/DependentPluginInterface.php-1624732867',
   'data' => 
  array (
    '392dff6b3911cdb660eedae95175cb77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for a plugin that has dependencies.
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
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
    'f4df09d4205b4d9f7983226513615340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates dependencies for the configured plugin.
   *
   * Dependencies are saved in the plugin\'s configuration entity and are used to
   * determine configuration synchronization order. For example, if the plugin
   * integrates with specific user roles, this method should return an array of
   * dependencies listing the specified roles.
   *
   * @return array
   *   An array of dependencies grouped by type (config, content, module,
   *   theme). For example:
   *   @code
   *   array(
   *     \'config\' => array(\'user.role.anonymous\', \'user.role.authenticated\'),
   *     \'content\' => array(\'node:article:f0a189e6-55fb-47fb-8005-5bef81c44d6d\'),
   *     \'module\' => array(\'node\', \'user\'),
   *     \'theme\' => array(\'seven\'),
   *   );
   *   @endcode
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   * @see \\Drupal\\Core\\Entity\\EntityInterface::getConfigDependencyName()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
         'functionName' => 'calculateDependencies',
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