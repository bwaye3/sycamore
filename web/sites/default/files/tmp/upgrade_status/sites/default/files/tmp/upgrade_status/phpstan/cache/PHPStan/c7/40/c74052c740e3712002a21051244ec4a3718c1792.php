<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Form/FormValidatorInterface.php-1624732867',
   'data' => 
  array (
    'ee782cd5a7f83f9bed062c581aaaf8e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for validating form submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormValidatorInterface',
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
    'b708445963f44cf69a5baadaa31ba69d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes custom validation handlers for a given form.
   *
   * Button-specific handlers are checked first. If none exist, the function
   * falls back to form-level handlers.
   *
   * @param $form
   *   An associative array containing the structure of the form.
   * @param $form_state
   *   The current state of the form. If the user submitted the form by clicking
   *   a button with custom handler functions defined, those handlers will be
   *   stored here.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormValidatorInterface',
         'functionName' => 'executeValidateHandlers',
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
    'bb559a54d5c41f9486b8cbba724bb922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates user-submitted form data in the $form_state.
   *
   * @param $form_id
   *   A unique string identifying the form for validation, submission,
   *   theming, and hook_form_alter functions.
   * @param $form
   *   An associative array containing the structure of the form, which is
   *   passed by reference. Form validation handlers are able to alter the form
   *   structure (like #process and #after_build callbacks during form building)
   *   in case of a validation error. If a validation handler alters the form
   *   structure, it is responsible for validating the values of changed form
   *   elements in $form_state->getValues() to prevent form submit handlers from
   *   receiving unvalidated values.
   * @param $form_state
   *   The current state of the form. The current user-submitted data is stored
   *   in $form_state->getValues(), though form validation functions are passed
   *   an explicit copy of the values for the sake of simplicity. Validation
   *   handlers can also use $form_state to pass information on to submit
   *   handlers. For example:
   *     $form_state->set(\'data_for_submission\', $data);
   *   This technique is useful when validation requires file parsing,
   *   web service requests, or other expensive requests that should
   *   not be repeated in the submission step.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormValidatorInterface',
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
    'b0486725139209d3d40cb6a02f23305c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a form_token error on the given form state.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormValidatorInterface',
         'functionName' => 'setInvalidTokenError',
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