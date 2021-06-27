<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/WidgetBaseInterface.php-1624732867',
   'data' => 
  array (
    '93607162a1e01559bfb5156e9712945d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base interface definition for "Field widget" plugins.
 *
 * This interface details base wrapping methods that most widget implementations
 * will want to directly inherit from Drupal\\Core\\Field\\WidgetBase. See
 * Drupal\\Core\\Field\\WidgetInterface for methods that will more likely be
 * overridden in actual widget implementations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
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
    '7afc169f0daf18469f543721c05d23a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a form element for a field.
   *
   * If the entity associated with the form is new (i.e., $entity->isNew() is
   * TRUE), the \'default value\', if any, is pre-populated. Also allows other
   * modules to alter the form element by implementing their own hooks.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   An array of the field values. When creating a new entity this may be NULL
   *   or an empty array to use default values.
   * @param array $form
   *   An array representing the form that the editing element will be attached
   *   to.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param int $get_delta
   *   Used to get only a specific delta value of a multiple value field.
   *
   * @return array
   *   The form element array created for this field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
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
    'f7c6f71dd802cf76f380ee2add67e94f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts field values from submitted form values.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   The field values. This parameter is altered by reference to receive the
   *   incoming form values.
   * @param array $form
   *   The form structure where field elements are attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
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
    '964b36f4b61dad36b100a690e945db52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reports field-level validation errors against actual form elements.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   The field values.
   * @param \\Symfony\\Component\\Validator\\ConstraintViolationListInterface $violations
   *   A list of constraint violations to flag.
   * @param array $form
   *   The form structure where field elements are attached to. This might be a
   *   full form structure, or a sub-element of a larger form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
         'functionName' => 'flagErrors',
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
    '50c7eb33fb18fbfb9d6c3d26f2207ae9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves processing information about the widget from $form_state.
   *
   * This method is static so that it can be used in static Form API callbacks.
   *
   * @param array $parents
   *   The array of #parents where the field lives in the form.
   * @param string $field_name
   *   The field name.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return array
   *   An array with the following key/value pairs:
   *   - items_count: The number of widgets to display for the field.
   *   - array_parents: The location of the field\'s widgets within the $form
   *     structure. This entry is populated at \'#after_build\' time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
         'functionName' => 'getWidgetState',
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
    'ab268c0df319e18ace4c171dc0535ca3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores processing information about the widget in $form_state.
   *
   * This method is static so that it can be used in static Form API #callbacks.
   *
   * @param array $parents
   *   The array of #parents where the widget lives in the form.
   * @param string $field_name
   *   The field name.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   * @param array $field_state
   *   The array of data to store. See getWidgetState() for the structure and
   *   content of the array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBaseInterface',
         'functionName' => 'setWidgetState',
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