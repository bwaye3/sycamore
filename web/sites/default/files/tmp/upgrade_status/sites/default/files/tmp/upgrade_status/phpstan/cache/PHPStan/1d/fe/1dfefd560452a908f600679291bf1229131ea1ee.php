<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/Context/ContextHandlerInterface.php-1624732867',
   'data' => 
  array (
    '31041a072e3e70234ebeff8d3cf48e99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for handling sets of contexts.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
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
    'bca003bf00480989ce3d44d8e2a18c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines plugins whose constraints are satisfied by a set of contexts.
   *
   * @todo Use context definition objects after
   *   https://www.drupal.org/node/2281635.
   *
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   * @param array $definitions
   *   An array of plugin definitions.
   *
   * @return array
   *   An array of plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
         'functionName' => 'filterPluginDefinitionsByContexts',
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
    '8bffa7c955f8959b4e4a23e9b48d2071' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks a set of requirements against a set of contexts.
   *
   * @todo Use context definition objects after
   *   https://www.drupal.org/node/2281635.
   *
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of available contexts.
   * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface[] $requirements
   *   An array of requirements.
   *
   * @return bool
   *   TRUE if all of the requirements are satisfied by the context, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
         'functionName' => 'checkRequirements',
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
    '3317bb0ff57084abef5a7eea8ea11153' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines which contexts satisfy the constraints of a given definition.
   *
   * @todo Use context definition objects after
   *   https://www.drupal.org/node/2281635.
   *
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   * @param \\Drupal\\Core\\Plugin\\Context\\ContextDefinitionInterface $definition
   *   The definition to satisfy.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextInterface[]
   *   An array of matching contexts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
         'functionName' => 'getMatchingContexts',
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
    'c87cb3d54b8c7e9392b83cb725ef01ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a plugin for evaluation.
   *
   * @param \\Drupal\\Core\\Plugin\\ContextAwarePluginInterface $plugin
   *   A plugin about to be evaluated.
   * @param \\Drupal\\Core\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts to set on the plugin. They will only be set if they
   *   match the plugin\'s context definitions.
   * @param array $mappings
   *   (optional) A mapping of the expected assignment names to their context
   *   names. For example, if one of the $contexts is named \'current_user\', but the
   *   plugin expects a context named \'user\', then this map would contain
   *   \'user\' => \'current_user\'.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\ContextException
   *   Thrown when a context assignment was not satisfied.
   * @throws \\Drupal\\Component\\Plugin\\Exception\\MissingValueContextException
   *   Thrown when a context is provided but has no value. Only thrown if
   *   no contexts are missing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
         'functionName' => 'applyContextMapping',
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