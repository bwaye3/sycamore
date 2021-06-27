<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/ContextAwarePluginBase.php-1624732867',
   'data' => 
  array (
    'a5ff5e7db37ada318e34cd7d0b8690f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for plugins that are context aware.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    'cc890bdb3c1af8ca1bef288ede877f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The data objects representing the context of this plugin.
   *
   * @var \\Drupal\\Component\\Plugin\\Context\\ContextInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    'c97a1c725e03fb6e14ced099100364c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data objects representing the contexts passed in the plugin configuration.
   *
   * @var \\Drupal\\Component\\Plugin\\Context\\ContextInterface[]
   *
   * @deprecated
   *   in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Component\\Plugin\\ContextAwarePluginInterface instead.
   *
   * @see https://www.drupal.org/project/drupal/issues/3080631
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '6d4c0064aa9842041b7a081a337d3194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Component\\Plugin\\PluginBase::__construct().
   *
   * Overrides the construction of context aware plugins to allow for
   * unvalidated constructor based injection of contexts.
   *
   * @param array $configuration
   *   The plugin configuration, i.e. an array with configuration values keyed
   *   by configuration option name. The special key \'context\' may be used to
   *   initialize the defined contexts by setting it to an array of context
   *   values keyed by context names.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    'a625c87f5bed6a4e63302489f0f20d5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements magic __get() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
         'functionName' => '__get',
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
    '253f5d4e175a4bcb2eb325309dc6a53c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates context objects from any context mappings in configuration.
   *
   * @param array $context_configuration
   *   An associative array of context names and values.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextInterface[]
   *   An array of context objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
         'functionName' => 'createContextFromConfiguration',
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
    'a87f156e05fb8297559272afed42c8ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '3cad36f3fc33e843424cac7ff2e27b52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '06332ddcf9bc5c167b0b9e6d660e37ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '65ed2f69a02de244065515bcbb9580f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '5eb2bf1df525cbab5438ec68bfefc705' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    'ca61843743520283e63fb24356f2fee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '0d20ccd2625c22894be198d944266dbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '2eef3eecce7321f7c47b1031763afd97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
    '4d70744faedb87596fc9402483a6646f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'contextinterface' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
          'contextawareplugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\ContextAwarePluginDefinitionInterface',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'context' => 'Drupal\\Component\\Plugin\\Context\\Context',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
        ),
         'className' => 'Drupal\\Component\\Plugin\\ContextAwarePluginBase',
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
  ),
));