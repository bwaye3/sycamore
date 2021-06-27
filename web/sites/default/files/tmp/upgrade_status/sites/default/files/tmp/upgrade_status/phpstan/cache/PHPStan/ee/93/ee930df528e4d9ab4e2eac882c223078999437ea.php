<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/state_machine/src/Plugin/Workflow/WorkflowInterface.php-1624732872',
   'data' => 
  array (
    '252bda488fba01a2a1debfe7b42b0a04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for workflows.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
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
    'b5c86000ed592cbb7beb26a78f43f111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow ID.
   *
   * @return string
   *   The workflow ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getId',
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
    '8673a18402278d3353aacc6737838e43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the translated label.
   *
   * @return string
   *   The translated label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getLabel',
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
    '35f439c3cc98d0c3a84bb5711b857918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow group.
   *
   * @return string
   *   The workflow group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getGroup',
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
    '520dadcb5fd026142b05e13fce0ff79f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow states.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowState[]
   *   The states, keyed by state ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getStates',
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
    'ba7c1a53d80577cc5b8dc971b3f06395' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a workflow state with the given ID.
   *
   * @param string $id
   *   The state ID.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowState|null
   *   The requested state, or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getState',
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
    '118450312d9d4ee9a2ae37e5239ef007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow transitions.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition[]
   *   The transitions, keyed by transition ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getTransitions',
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
    '8ec6fa83561e907ce28f08bd96372f3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a workflow transition with the given ID.
   *
   * @param string $id
   *   The transition ID.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition|null
   *   The requested transition, or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getTransition',
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
    '54d6002413d1f7fbdf7c3835f8efd330' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the possible workflow transitions for the given state ID.
   *
   * Note that a possible transition might not be allowed (because of a guard
   * returning false).
   *
   * @param string $state_id
   *   The state ID.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition[]
   *   The possible transitions, keyed by transition ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getPossibleTransitions',
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
    '8f2611d93d57fc1fa5d12feb9d1c8f15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed workflow transitions for the given state ID.
   *
   * @param string $state_id
   *   The state ID.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The parent entity.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition[]
   *   The allowed transitions, keyed by transition ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'getAllowedTransitions',
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
    '557291ba4c6662cb8b0afbdc821eb67f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the workflow transition for moving between two given states.
   *
   * @param string $from_state_id
   *   The ID of the "from" state.
   * @param string $to_state_id
   *   The ID of the "to" state.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition|null
   *   The transition, or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Workflow',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface',
         'functionName' => 'findTransition',
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