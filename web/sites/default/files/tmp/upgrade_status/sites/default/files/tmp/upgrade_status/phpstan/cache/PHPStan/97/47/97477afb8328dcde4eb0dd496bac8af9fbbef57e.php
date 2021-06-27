<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/DerivativeDiscoveryDecorator.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryTrait.php-1624732867',
   'data' => 
  array (
    'b6912ed83b8f1c23bd98ca6707730ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class providing the tools for a plugin discovery to be derivative aware.
 *
 * Provides a decorator that allows the use of plugin derivatives for normal
 * implementations DiscoveryInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
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
    '2c5e5cf02c4d4298aab294830a03af94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @see Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
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
    'f08ec5d0f6960e65a1202007d1353b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDefinitions',
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
    '6a03f012f74bbe11b1e916e215f74d4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDefinition',
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
    'c5895a009d771c311dac27321e2f7901' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific plugin definition.
   *
   * @param array $definitions
   *   An array of the available plugin definitions.
   * @param string $plugin_id
   *   A plugin id.
   * @param bool $exception_on_invalid
   *   If TRUE, an invalid plugin ID will cause an exception to be thrown; if
   *   FALSE, NULL will be returned.
   *
   * @return array|null
   *   A plugin definition, or NULL if the plugin ID is invalid and
   *   $exception_on_invalid is TRUE.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   *   Thrown if $plugin_id is invalid and $exception_on_invalid is TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'doGetDefinition',
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
    '78bb1fa772533c1b6c3fbf6444a2fae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'hasDefinition',
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
    '8a36e35af940ee523926812a67995c9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Plugin derivers.
   *
   * @var \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface[]
   *   Keys are base plugin IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
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
    '7111b772e7563d9466fbdb6c033667be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The decorated plugin discovery.
   *
   * @var \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
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
    '2317eed9735e88da3e291cbbc276552c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new instance.
   *
   * @param \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface $decorated
   *   The parent object implementing DiscoveryInterface that is being
   *   decorated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => '__construct',
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
    '42beb7bd051b85ec13d23d67dff68507' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException
   *   Thrown if the \'deriver\' class specified in the plugin definition
   *   does not implement \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDefinition',
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
    '87fe30c56a13d1003f362cb5b13b6b44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException
   *   Thrown if the \'deriver\' class specified in the plugin definition
   *   does not implement \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDefinitions',
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
    'b02dd13175325058defba4affc09f392' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds derivatives to a list of plugin definitions.
   *
   * This should be called by the class extending this in
   * DiscoveryInterface::getDefinitions().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDerivatives',
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
    '29ffffba679954c455017481967d7559' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Decodes derivative id and plugin id from a string.
   *
   * @param string $plugin_id
   *   Plugin identifier that may point to a derivative plugin.
   *
   * @return array
   *   An array with the base plugin id as the first index and the derivative id
   *   as the second. If there is no derivative id it will be null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'decodePluginId',
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
    'cee8b61f53e0af4e32f6d9c81edc7d16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Encodes plugin and derivative id\'s into a string.
   *
   * @param string $base_plugin_id
   *   The base plugin identifier.
   * @param string $derivative_id
   *   The derivative identifier.
   *
   * @return string
   *   A uniquely encoded combination of the $base_plugin_id and $derivative_id.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'encodePluginId',
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
    '8d16c899184ba8411a4a7bbf1e35280b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a deriver for a base plugin.
   *
   * @param string $base_plugin_id
   *   The base plugin id of the plugin.
   * @param mixed $base_definition
   *   The base plugin definition to build derivatives.
   *
   * @return \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface|null
   *   A DerivativeInterface or NULL if none exists for the plugin.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException
   *   Thrown if the \'deriver\' class specified in the plugin definition
   *   does not implement \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDeriver',
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
    'da8145bd642c35974c2dd10b5c5a0b01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the deriver class name from the base plugin definition.
   *
   * @param array $base_definition
   *   The base plugin definition to build derivatives.
   *
   * @return string|null
   *   The name of a class implementing
   *   \\Drupal\\Component\\Plugin\\Derivative\\DeriverInterface.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException
   *   Thrown if the \'deriver\' class specified in the plugin definition
   *   does not implement
   *   \\Drupal\\Component\\Plugin\\Derivative\\DerivativeInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'getDeriverClass',
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
    'd6f4b42ca1461d3db1a6be56e2057a11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges a base and derivative definition, taking into account empty values.
   *
   * @param array $base_plugin_definition
   *   The base plugin definition.
   * @param array $derivative_definition
   *   The derivative plugin definition.
   *
   * @return array
   *   The merged definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => 'mergeDerivativeDefinition',
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
    'dabcab15ab995eda30460d0d226d2fd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes through all unknown calls onto the decorated object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'derivableplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\DerivablePluginDefinitionInterface',
          'invalidderiverexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidDeriverException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\DerivativeDiscoveryDecorator',
         'functionName' => '__call',
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