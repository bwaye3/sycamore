<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Condition/ConditionPluginBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/ContextAwarePluginAssignmentTrait.php-1624732867',
   'data' => 
  array (
    'f5cbbc99951ae38d03c788247fb9f59a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a basis for fulfilling contexts for condition plugins.
 *
 * @see \\Drupal\\Core\\Condition\\Annotation\\Condition
 * @see \\Drupal\\Core\\Condition\\ConditionInterface
 * @see \\Drupal\\Core\\Condition\\ConditionManager
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
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
    'e67f589c780e02b63e255ddd1aa51137' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Handles context assignments for context-aware plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
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
    'bc98dd46c0c71ffb5ea136df4e66cc5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures the t() method is available.
   *
   * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 't',
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
    '0903cb6338bdc5e6d30e4c57fdf0a761' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the context handler.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'contextHandler',
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
    '94ee9e845040cdffcdf812d7d8ebef0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a form element for assigning a context to a given slot.
   *
   * @param \\Drupal\\Core\\Plugin\\ContextAwarePluginInterface $plugin
   *   The context-aware plugin.
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   *
   * @return array
   *   A form element for assigning context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'addContextAssignmentElement',
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
    '80d4d6661c1fd376f90b4e679a8e75e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The condition manager to proxy execute calls through.
   *
   * @var \\Drupal\\Core\\Executable\\ExecutableManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
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
    '45ef25af95f1db525e4f034bcb183990' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
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
    'b9152f6c8c4b3ace2d65d0bd3f24b6ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'isNegated',
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
    '091a6a844d0af85e4d125ab5a28fa8a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'buildConfigurationForm',
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
    'ba8dfe0945578c530fdb964aab8f61a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'validateConfigurationForm',
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
    '9754b24434acd3c1f48b2256784ba247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'submitConfigurationForm',
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
    '33ffaa65e27b85324ff8363496ea291b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'execute',
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
    '9eda18823d2d20ba6ffcb5dd0275191d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'getConfiguration',
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
    '1fc1db3f50ee9f295b2d5713c0d276f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'setConfiguration',
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
    '9c5c13c92f3a44c534d81a01f7299c70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'defaultConfiguration',
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
    'a90a3876b8a7d2b17d18e8348f09e347' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
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
    'd8667013da8e844c2553cf2cecb5bf43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'executablemanagerinterface' => 'Drupal\\Core\\Executable\\ExecutableManagerInterface',
          'executablepluginbase' => 'Drupal\\Core\\Executable\\ExecutablePluginBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'subformstateinterface' => 'Drupal\\Core\\Form\\SubformStateInterface',
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
        ),
         'className' => 'Drupal\\Core\\Condition\\ConditionPluginBase',
         'functionName' => 'setExecutableManager',
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