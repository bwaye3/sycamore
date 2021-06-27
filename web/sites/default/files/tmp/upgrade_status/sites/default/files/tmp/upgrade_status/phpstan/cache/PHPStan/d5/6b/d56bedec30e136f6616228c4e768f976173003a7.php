<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate/src/ProcessPluginBase.php-1624732868',
   'data' => 
  array (
    'd15bae13df954adfd6738597186679ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The base class for all migrate process plugins.
 *
 * Migrate process plugins are taking a value and transform them. For example,
 * transform a human provided name into a machine name, look up an identifier
 * in a previous migration and so on.
 *
 * Process plugins extending this class can use any number of methods, thus
 * offering different alternative ways of processing. In this case, the
 * transform() method should not be implemented, and the plugin configuration
 * must provide the name of the method to be called via the "method" key. Each
 * method must have the same signature as transform().
 *
 * @see https://www.drupal.org/node/2129651
 * @see \\Drupal\\migrate\\Plugin\\MigratePluginManager
 * @see \\Drupal\\migrate\\Plugin\\MigrateProcessInterface
 * @see \\Drupal\\migrate\\Annotation\\MigrateProcessPlugin
 * @see \\Drupal\\migrate\\Plugin\\migrate\\process\\SkipOnEmpty
 * @see d7_field_formatter_settings.yml
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
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
    'a2217b034df0121d6a66275f0f9151cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
         'functionName' => 'transform',
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
    'e70e404c4db568cdf16217cf948df0c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migrateprocessinterface' => 'Drupal\\migrate\\Plugin\\MigrateProcessInterface',
        ),
         'className' => 'Drupal\\migrate\\ProcessPluginBase',
         'functionName' => 'multiple',
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