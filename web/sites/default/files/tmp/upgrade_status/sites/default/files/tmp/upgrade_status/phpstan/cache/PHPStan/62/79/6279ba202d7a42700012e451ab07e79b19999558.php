<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/DependentWithRemovalPluginInterface.php-1624732869',
   'data' => 
  array (
    '625f3252deb8ed71c2e629f68bd317b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for a plugin that has dependencies that can be removed.
 *
 * @ingroup views_plugins
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
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
    '9ab38f6e5669c124c290fe3773771807' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows a plugin to define whether it should be removed.
   *
   * If this method returns TRUE then the plugin should be removed.
   *
   * @param array $dependencies
   *   An array of dependencies that will be deleted keyed by dependency type.
   *   Dependency types are, for example, entity, module and theme.
   *
   * @return bool
   *   TRUE if the plugin instance should be removed.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   * @see \\Drupal\\Core\\Config\\ConfigEntityBase::preDelete()
   * @see \\Drupal\\Core\\Config\\ConfigManager::uninstall()
   * @see \\Drupal\\Core\\Entity\\EntityDisplayBase::onDependencyRemoval()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
         'functionName' => 'onDependencyRemoval',
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