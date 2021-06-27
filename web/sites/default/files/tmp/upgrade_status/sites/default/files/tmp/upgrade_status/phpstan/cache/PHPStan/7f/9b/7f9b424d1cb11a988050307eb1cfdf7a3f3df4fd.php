<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Display/EntityFormDisplayInterface.php-1624732867',
   'data' => 
  array (
    '8e1cf335bbd6cff9452888df9fdeb741' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common interface for entity form displays.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
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
    '03d4568409d932632e874a80e9d52a72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds field widgets to an entity form.
   *
   * The form elements for the entity\'s fields are added by reference as direct
   * children in the $form parameter. This parameter can be a full form
   * structure (most common case for entity edit forms), or a sub-element of a
   * larger form.
   *
   * By default, submitted field values appear at the top-level of
   * $form_state->getValues(). A different location within
   * $form_state->getValues() can be specified by setting the \'#parents\'
   * property on the incoming $form parameter. Because of name clashes, two
   * instances of the same field cannot appear within the same $form element, or
   * within the same \'#parents\' space.
   *
   * Sample resulting structure in $form:
   * @code
   *   \'#parents\' => The location of field values in $form_state->getValues(),
   *   \'#entity_type\' => The name of the entity type,
   *   \'#bundle\' => The name of the bundle,
   *   // One sub-array per field appearing in the entity, keyed by field name.
   *   // The structure of the array differs slightly depending on whether the
   *   // widget is \'single-value\' (provides the input for one field value,
   *   // most common case), and will therefore be repeated as many times as
   *   // needed, or \'multiple-values\' (one single widget allows the input of
   *   // several values; e.g., checkboxes, select box, etc.).
   *   \'field_foo\' => array(
   *     \'#access\' => TRUE if the current user has \'edit\' grants for the field,
   *       FALSE if not.
   *     \'widget\' => array(
   *       \'#field_name\' => The name of the field,
   *       \'#title\' => The label of the field,
   *       \'#description\' => The description text for the field,
   *       \'#required\' => Whether or not the field is required,
   *       \'#field_parents\' => The \'parents\' space for the field in the form,
   *          equal to the #parents property of the $form parameter received by
   *          this method,
   *
   *       // For \'multiple-value\' widgets, the remaining elements in the
   *       // sub-array depend on the widget.
   *
   *       // For \'single-value\' widgets:
   *       \'#theme\' => \'field_multiple_value_form\',
   *       \'#cardinality\' => The field cardinality,
   *       \'#cardinality_multiple\' => TRUE if the field can contain multiple
   *         items, FALSE otherwise.
   *       // One sub-array per copy of the widget, keyed by delta.
   *       0 => array(
   *         \'#title\' => The title to be displayed by the widget,
   *         \'#description\' => The description text for the field,
   *         \'#required\' => Whether the widget should be marked required,
   *         \'#delta\' => 0,
   *         \'#weight\' => 0,
   *         \'#field_parents\' => Same as above,
   *         // The remaining elements in the sub-array depend on the widget.
   *         ...
   *       ),
   *       1 => array(
   *         ...
   *       ),
   *       ...
   *     ),
   *     ...
   *   ),
   * )
   * @endcode
   *
   * Additionally, some processing data is placed in $form_state, and can be
   * accessed by \\Drupal\\Core\\Field\\WidgetBaseInterface::getWidgetState() and
   * \\Drupal\\Core\\Field\\WidgetBaseInterface::setWidgetState().
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   * @param array $form
   *   The form structure to fill in. This can be a full form structure, or a
   *   sub-element of a larger form. The #parents property can be set to
   *   control the location of submitted field values within
   *   $form_state->getValues(). If not specified, $form[\'#parents\'] is set to
   *   an empty array, which results in field values located at the top-level of
   *   $form_state->getValues().
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
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
    'a056eb434bb478a1c887190e69d70515' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts field values from the submitted widget values into the entity.
   *
   * This accounts for drag-and-drop reordering of field values, and filtering
   * of empty values.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   * @param array $form
   *   The form structure where field elements are attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return array
   *   An array whose keys and values are the keys of the top-level entries in
   *   $form_state->getValues() that have been processed. The remaining entries,
   *   if any, do not correspond to widgets and should be extracted manually by
   *   the caller if needed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
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
    '09b4bb4426273900c1d6e184e2de5c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates submitted widget values and sets the corresponding form errors.
   *
   * This method invokes entity validation and takes care of flagging them on
   * the form. This is particularly useful when all elements on the form are
   * managed by the form display.
   *
   * As an alternative, entity validation can be invoked separately such that
   * some violations can be flagged manually. In that case
   * \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface::flagViolations()
   * must be used for flagging violations related to the form display.
   *
   * Note that there are two levels of validation for fields in forms: widget
   * validation and field validation:
   * - Widget validation steps are specific to a given widget\'s own form
   *   structure and UI metaphors. They are executed during normal form
   *   validation, usually through Form API\'s #element_validate property.
   *   Errors reported at this level are typically those that prevent the
   *   extraction of proper field values from the submitted form input.
   * - If no form / widget errors were reported for the field, field validation
   *   steps are performed according to the "constraints" specified by the
   *   field definition as part of the entity validation. That validation is
   *   independent of the specific widget being used in a given form, and is
   *   also performed on REST entity submissions.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   * @param array $form
   *   The form structure where field elements are attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
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
    '3c0d8df59092a27b07516ec9339e2c72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags entity validation violations as form errors.
   *
   * This method processes all violations passed, thus any violations not
   * related to fields of the form display must be processed before this method
   * is invoked.
   *
   * The method flags constraint violations related to fields shown on the
   * form as form errors on the correct form elements. Possibly pre-existing
   * violations of hidden fields (so fields not appearing in the display) are
   * ignored. Other, non-field related violations are passed through and set as
   * form errors according to the property path of the violations.
   *
   * @param \\Drupal\\Core\\Entity\\EntityConstraintViolationListInterface $violations
   *   The violations to flag.
   * @param array $form
   *   The form structure where field elements are attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'entityconstraintviolationlistinterface' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
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
  ),
));