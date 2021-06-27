<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Factory/DefaultFactory.php-1624732867',
   'data' => 
  array (
    '7efc83f80cf59b7f8f329a07d5fa5f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default plugin factory.
 *
 * Instantiates plugin instances by passing the full configuration array as a
 * single constructor argument. Plugin types wanting to support plugin classes
 * with more flexible constructor signatures can do so by using an alternate
 * factory such as Drupal\\Component\\Plugin\\Factory\\ReflectionFactory.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
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
    '46cb0fb22bf8214a6c606d88f7f042e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object that retrieves the definitions of the plugins that this factory instantiates.
   *
   * The plugin definition includes the plugin class and possibly other
   * information necessary for proper instantiation.
   *
   * @var \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
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
    '87ec7292e67155c973dcf08c6c458fd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines an interface each plugin should implement.
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
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
    'f35999cd1b0db9144eb0ab56acfa923d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a Drupal\\Component\\Plugin\\Factory\\DefaultFactory object.
   *
   * @param \\Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface $discovery
   *   The plugin discovery.
   * @param string|null $plugin_interface
   *   (optional) The interface each plugin should implement.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
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
    'd19be8c9914967a6c0a23592f493dc4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
         'functionName' => 'createInstance',
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
    'c28ac0efd1f0884e781826d661b127d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the class relevant for a given plugin.
   *
   * @param string $plugin_id
   *   The id of a plugin.
   * @param \\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface|mixed[] $plugin_definition
   *   The plugin definition associated with the plugin ID.
   * @param string $required_interface
   *   (optional) The required plugin interface.
   *
   * @return string
   *   The appropriate class name.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown when there is no class specified, the class doesn\'t exist, or
   *   the class does not implement the specified required interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Factory',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'pluginexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginException',
        ),
         'className' => 'Drupal\\Component\\Plugin\\Factory\\DefaultFactory',
         'functionName' => 'getPluginClass',
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