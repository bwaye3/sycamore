<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/GroupEvaluator.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Condition/ConditionAccessResolverTrait.php-1624732867',
   'data' => 
  array (
    'd249fa0fb48823c814cbaf4c301b7d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class ConditionEvaluator.
 *
 * @package Drupal\\block_visibility_groups
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    'ced799f14a944f30760968424744de8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Resolves a set of conditions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    '37711b9d8881753958327dff82c0e418' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the given conditions based on the condition logic (\'and\'/\'or\').
   *
   * @param \\Drupal\\Core\\Condition\\ConditionInterface[] $conditions
   *   A set of conditions.
   * @param string $condition_logic
   *   The logic used to compute access, either \'and\' or \'or\'.
   *
   * @return bool
   *   Whether these conditions grant or deny access.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Condition',
         'uses' => 
        array (
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
         'functionName' => 'resolveConditions',
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
    '3002a4fc70f99812c014edf6e6c8183f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin context handler.
   *
   * @var \\Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    'd7b10ae6de551cea632d5196747a4388' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The context manager service.
   *
   * @var \\Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    'cfd9aeaf55a5e95175fd9afd1d930350' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of group evaluations.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    '159c024552405b2eacaaafdacc745022' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
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
    '0f36070b4a2784d5513fa3d18c572739' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
         'functionName' => 'evaluateGroup',
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
    'a6003f082999428181151b9b88d61d95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Condition\\ConditionPluginCollection $conditions */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
         'functionName' => 'evaluateGroup',
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
    'd52f588ac196456423f949c84e633b80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Apply contexts.
   *
   * @param \\Drupal\\Core\\Condition\\ConditionPluginCollection $conditions
   *   A collection of condition plugins.
   * @param string $logic
   *   The logical operator.
   *
   * @return bool
   *   Whether the conditions have been applied or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'contextexception' => 'Drupal\\Component\\Plugin\\Exception\\ContextException',
          'conditionaccessresolvertrait' => 'Drupal\\Core\\Condition\\ConditionAccessResolverTrait',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'contexthandlerinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface',
          'contextrepositoryinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\GroupEvaluator',
         'functionName' => 'applyContexts',
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