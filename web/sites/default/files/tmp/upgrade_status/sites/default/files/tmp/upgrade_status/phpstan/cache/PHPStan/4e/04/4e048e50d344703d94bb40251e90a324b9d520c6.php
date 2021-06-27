<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Executable/ExecutablePluginBase.php-1624732867',
   'data' => 
  array (
    'a91bc5c81caf4c8a0448932a47e8964e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the basic architecture for executable plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Executable',
         'uses' => 
        array (
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
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
    'd9acd4ba299c5fb9512795227d1dc0a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of definitions of available configuration options.
   *
   * @todo: This needs to go into an interface.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
   *   An array of typed data definitions describing available configuration
   *   options, keyed by option name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Executable',
         'uses' => 
        array (
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
         'functionName' => 'getConfigDefinitions',
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
    'c0365c26c2307cbf66d52dbca35ece70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of a configuration option.
   *
   * @param string $key
   *   The key of the configuration option to get.
   *
   * @todo: This needs to go into an interface.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface|false
   *   The typed data definition describing the configuration option, or FALSE
   *   if the option does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Executable',
         'uses' => 
        array (
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
         'functionName' => 'getConfigDefinition',
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
    'fee4cd0319f14158efb133fe470c140f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all configuration values.
   *
   * @todo: This needs to go into an interface.
   *
   * @return array
   *   The array of all configuration values, keyed by configuration option
   *   name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Executable',
         'uses' => 
        array (
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
         'functionName' => 'getConfig',
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
    'be004f2c768c2ed2f86b8e464c0abf98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of a particular configuration option.
   *
   * @param string $key
   *   The key of the configuration option to set.
   * @param mixed $value
   *   The value to set.
   *
   * @todo This doesn\'t belong here. Move this into a new base class in
   *   https://www.drupal.org/node/1764380.
   * @todo This does not set a value in \\Drupal::config(), so the name is confusing.
   *
   * @return $this
   *   The executable object for chaining.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the provided configuration value does not pass validation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Executable',
         'uses' => 
        array (
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
         'functionName' => 'setConfig',
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