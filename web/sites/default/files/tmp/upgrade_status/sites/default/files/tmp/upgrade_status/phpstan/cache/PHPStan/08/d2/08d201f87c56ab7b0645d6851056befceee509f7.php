<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Entity/EntityFormDisplay.php-1624732867',
   'data' => 
  array (
    '361ba0dbb07194c1c8a266fdd10e42f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Configuration entity that contains widget options for all components of a
 * entity form in a given form mode.
 *
 * @ConfigEntityType(
 *   id = "entity_form_display",
 *   label = @Translation("Entity form display"),
 *   entity_keys = {
 *     "id" = "id",
 *     "status" = "status"
 *   },
 *   handlers = {
 *     "access" = "\\Drupal\\Core\\Entity\\Entity\\Access\\EntityFormDisplayAccessControlHandler",
 *   },
 *   config_export = {
 *     "id",
 *     "targetEntityType",
 *     "bundle",
 *     "mode",
 *     "content",
 *     "hidden",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
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
    '935b30282e4a865778c72c922e7e7eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
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
    '2cb39e6ce100010fef289a0402facab7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity_form_display object used to build an entity form.
   *
   * Depending on the configuration of the form mode for the entity bundle, this
   * can be either the display object associated with the form mode, or the
   * \'default\' display.
   *
   * This method should only be used internally when rendering an entity form.
   * When assigning suggested display options for a component in a given form
   * mode, EntityDisplayRepositoryInterface::getFormDisplay() should be used
   * instead, in order to avoid inadvertently modifying the output of other form
   * modes that might happen to use the \'default\' display too. Those options
   * will then be effectively applied only if the form mode is configured to use
   * them.
   *
   * hook_entity_form_display_alter() is invoked on each display, allowing 3rd
   * party code to alter the display options held in the display before they are
   * used to generate render arrays.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity for which the form is being built.
   * @param string $form_mode
   *   The form mode.
   * @param bool $default_fallback
   *   (optional) Whether the default display should be used to initialize the
   *   form display in case the specified display does not exist. Defaults to
   *   TRUE.
   *
   * @return \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface
   *   The display object that should be used to build the entity form.
   *
   * @see \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface::getFormDisplay()
   * @see hook_entity_form_display_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'collectRenderDisplay',
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
    '01bcce75bf8ef19a9925f878e1ae2521' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
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
    'df440fd1e8083066318b649348cb219e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'getRenderer',
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
    '53061d5be88431ad4c757c6dbd8d535a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'buildForm',
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
    'a14eaff9afb2ba9df65a12239b5bbeae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process callback: assigns weights and hides extra fields.
   *
   * @see \\Drupal\\Core\\Entity\\Entity\\EntityFormDisplay::buildForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'processForm',
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
    '691f5eff8233f146cadb67ea171d1b4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'extractFormValues',
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
    'b1a0bf2ab5cfe67af3c8fde0108c7617' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'validateFormValues',
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
    '43148eb89b210714564792a404386c69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\Validator\\ConstraintViolationInterface $violation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'validateFormValues',
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
    '14ba2d55173dc8395ccda1b708f4ddb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'flagWidgetsErrorsFromViolations',
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
    'dfe4bd57882ab8144508cd6b13a23c6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Moves the property path to be relative to field level.
   *
   * @param string $field_name
   *   The field name.
   * @param \\Symfony\\Component\\Validator\\ConstraintViolationListInterface $violations
   *   The violations.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationList
   *   A new constraint violation list with the changed property path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'movePropertyPathViolationsRelativeToField',
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
    '79f703edb3c6eca9a8a896f7a6c57ff2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\Validator\\ConstraintViolationInterface $violation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'movePropertyPathViolationsRelativeToField',
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
    '5e712f4365ef80cb4ec0de5f9fe4b9a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolation' => 'Symfony\\Component\\Validator\\ConstraintViolation',
          'constraintviolationlist' => 'Symfony\\Component\\Validator\\ConstraintViolationList',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
         'functionName' => 'getPluginCollections',
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