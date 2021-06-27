<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/state_machine/src/Plugin/Field/FieldType/StateItemInterface.php-1624732872',
   'data' => 
  array (
    'a1ecdcc9e7b9c82588491344c0c33b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for state field items.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
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
    '27ca20abd6fc51207248150010f747f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow used by the field.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface|false
   *   The workflow, or FALSE if unknown at this time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'getWorkflow',
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
    '72a204974046bee4172426dbbe35213e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the original state ID.
   *
   * If the state ID has been changed after the entity was constructed/loaded,
   * the original ID will hold the previous value.
   *
   * Use this as an alternative to getting the state ID from $entity->original.
   *
   * @return string
   *   The original state ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'getOriginalId',
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
    'bab07f1bf86d666b5ea3772163c0b6a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current state ID.
   *
   * @return string
   *   The current state ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
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
    'fa1590e62ec7a6fdc64e06941ee52cc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label of the current state.
   *
   * @return string
   *   The label of the current state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
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
    '7496be39533ed6226883b937b9ae00d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label of the original state.
   *
   * @return string
   *   The label of the original state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'getOriginalLabel',
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
    '1c918d550143e565054f9a338d6c0cd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed transitions for the current state.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition[]
   *   The allowed transitions, keyed by transition ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
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
    'd9e5e5341424a456b0bf1ba9771073b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the given transition is allowed.
   *
   * @param string $transition_id
   *   The transition ID.
   *
   * @return bool
   *   TRUE if the given transition is allowed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'isTransitionAllowed',
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
    '64c7a2b42653d14be0553a4ab04fb450' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies the given transition, changing the current state.
   *
   * @param \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition $transition
   *   The transition to apply.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the transition is not allowed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'applyTransition',
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
    '1e6a5c43d75f58be1919a3cffbbaf91c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies a transition with the given ID, changing the current state.
   *
   * @param string $transition_id
   *   The transition ID.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when no matching transition was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'applyTransitionById',
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
    '59990411329cc1e9968ed8ac5c02d8e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current state is valid.
   *
   * Drupal separates field validation into a separate step, allowing an
   * invalid state to be set before validation is invoked. At that point
   * validation has no access to the previous value, so it can\'t determine
   * if the transition is allowed. Thus, the field item must track the state
   * changes internally, and answer via this method if the current state is
   * valid.
   *
   * @see \\Drupal\\state_machine\\Plugin\\Validation\\Constraint\\StateConstraintValidator
   *
   * @return bool
   *   TRUE if the current state is valid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'workflowtransition' => 'Drupal\\state_machine\\Plugin\\Workflow\\WorkflowTransition',
        ),
         'className' => 'Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface',
         'functionName' => 'isValid',
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