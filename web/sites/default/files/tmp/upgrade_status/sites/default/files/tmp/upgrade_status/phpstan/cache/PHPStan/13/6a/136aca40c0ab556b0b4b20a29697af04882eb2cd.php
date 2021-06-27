<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/ContextAwarePluginInterface.php-1624732867',
   'data' => 
  array (
    'f1ef04ae4bf321e0464c8a31373f7daa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for defining context aware plugins.
 *
 * Context aware plugins can specify an array of context definitions keyed by
 * context name at the plugin definition under the "context" key.
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
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
    'dbfcffacbfa8072e4a22322eaf71913c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the context definitions of the plugin.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextDefinitionInterface[]
   *   The array of context definitions, keyed by context name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextDefinitions',
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
    '3c6fcee87c4108283d2b6cde3cde8449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific context definition of the plugin.
   *
   * @param string $name
   *   The name of the context in the plugin definition.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextDefinitionInterface
   *   The definition against which the context value must validate.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the requested context is not defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextDefinition',
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
    '0bfe8fd907efee3f6eee725f9fd093cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the defined contexts.
   *
   * @return array
   *   The set context objects.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If contexts are defined but not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContexts',
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
    '02681e3719728d697ca1149130fa1829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a defined context.
   *
   * @param string $name
   *   The name of the context in the plugin definition.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextInterface
   *   The context object.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the requested context is not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContext',
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
    '6945d6356fa4a4785e71a0402424afa4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the values for all defined contexts.
   *
   * @return array
   *   An array of set context values, keyed by context name. If a context is
   *   unset its value is returned as NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextValues',
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
    '6e6d830e2244989a51503d84994888e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value for a defined context.
   *
   * @param string $name
   *   The name of the context in the plugin configuration.
   *
   * @return mixed
   *   The currently set context value.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the requested context is not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextValue',
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
    '7d8e47eb0e06d750fb5db8e8778f1e3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set a context on this plugin.
   *
   * @param string $name
   *   The name of the context in the plugin configuration.
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface $context
   *   The context object to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'setContext',
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
    '13823b9d1e0bd121296d94dd650ef202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value for a defined context.
   *
   * @param string $name
   *   The name of the context in the plugin definition.
   * @param mixed $value
   *   The value to set the context to. The value has to validate against the
   *   provided context definition.
   *
   * @return $this
   *   A context aware plugin object for chaining.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   If the value does not pass validation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'setContextValue',
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
    '317a2078bb2fd429e25a79fc8876d0e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the set values for the defined contexts.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
   *   A list of constraint violations. If the list is empty, validation
   *   succeeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'validateContexts',
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
    '21084f5145cddc8392d7681677664000' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a mapping of the expected assignment names to their context names.
   *
   * @return array
   *   A mapping of the expected assignment names to their context names. For
   *   example, if one of the $contexts is named \'user.current_user\', but the
   *   plugin expects a context named \'user\', then this map would contain
   *   \'user\' => \'user.current_user\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'getContextMapping',
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
    'f2a5307c0014d3f9966a25d26800390a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a mapping of the expected assignment names to their context names.
   *
   * @param array $context_mapping
   *   A mapping of the expected assignment names to their context names. For
   *   example, if one of the $contexts is named \'user.current_user\', but the
   *   plugin expects a context named \'user\', then this map would contain
   *   \'user\' => \'user.current_user\'.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginInterface',
         'functionName' => 'setContextMapping',
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