<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Form/OrderTypeForm.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/Form/EntityDuplicateFormTrait.php-1624732871',
   'data' => 
  array (
    'a39c09bbb563eed0854625b9f3047da0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an order type form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
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
    '1a2ccc81bb5cf5418fd5aea7c08b5693' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows forms to implement EntityDuplicateFormInterface.
 *
 * Forms are expected to call $this->postSave() after the entity is saved.
 * This works around core issue #3040556.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
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
    '2a10f85d88850bbdb3c63716ffadaa72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
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
    '66528949d2a9352e2e1dfa0362248fe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'getSourceEntity',
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
    '3d499fff5b666681cbc41843edf6adda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'setSourceEntity',
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
    '3a0869a22cd10300f2baa3d39014ee0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes entity duplicate hooks after the entity has been duplicated.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The saved entity.
   * @param string $operation
   *   The form operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'postSave',
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
    'c3f80990b54a65bc6936ff5690351014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'postSave',
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
    '2fd6a1133bf033e9986f9f08fcac1775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The workflow manager.
   *
   * @var \\Drupal\\state_machine\\WorkflowManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
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
    '680449bcffd735eae23e311462be0262' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderTypeForm object.
   *
   * @param \\Drupal\\commerce\\EntityTraitManagerInterface $trait_manager
   *   The entity trait manager.
   * @param \\Drupal\\state_machine\\WorkflowManagerInterface $workflow_manager
   *   The workflow manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
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
    '32f05ea9dcc8d8dc3bc2f6d5ba911e19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'create',
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
    '1e71b1c15120ba2e72a5e1ec4b6d3125' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'form',
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
    'ecb0eb1d7601fb7305588075ddd0700c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'form',
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
    'c3aed9f0b06c2f63d8f6b482f3ef0d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'validateForm',
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
    '3017fa2e659d21cd05675b556a2354b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\state_machine\\Plugin\\Workflow\\WorkflowInterface $workflow */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'validateForm',
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
    'c26310a34cf4f5182803d19f9d6ff740' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entitytraitmanagerinterface' => 'Drupal\\commerce\\EntityTraitManagerInterface',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'commercebundleentityformbase' => 'Drupal\\commerce\\Form\\CommerceBundleEntityFormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
          'workflowmanagerinterface' => 'Drupal\\state_machine\\WorkflowManagerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderTypeForm',
         'functionName' => 'save',
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