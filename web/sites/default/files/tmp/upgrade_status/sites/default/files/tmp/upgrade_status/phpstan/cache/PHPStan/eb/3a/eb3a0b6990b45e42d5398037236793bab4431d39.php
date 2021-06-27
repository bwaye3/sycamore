<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Element/ProfileSelect.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Element/CommerceElementTrait.php-1624732871',
   'data' => 
  array (
    '3a2b6347c48d97c3f36d44cb03455da0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form element for selecting a customer profile.
 *
 * @deprecated Use the customer_profile or content_entity inline forms instead.
 * @see https://www.drupal.org/node/3015309
 *
 * Usage example:
 * @code
 * $form[\'billing_profile\'] = [
 *   \'#type\' => \'commerce_profile_select\',
 *   \'#default_value\' => $profile,
 *   \'#available_countries\' => [\'US\', \'FR\'],
 * ];
 * @endcode
 * To access the profile in validation or submission callbacks, use
 * $form[\'billing_profile\'][\'#profile\']. Due to Drupal core limitations the
 * profile can\'t be accessed via $form_state->getValue(\'billing_profile\').
 *
 * @RenderElement("commerce_profile_select")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
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
    'f94b46d860d0eb2a5a51028980a93856' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows form elements to use #commerce_element_submit.
 *
 * This is a substitute for the #element_submit that\'s missing from Drupal core.
 *
 * Each form element using this trait should add the attachElementSubmit and
 * validateElementSubmit callbacks to their getInfo() methods.
 *
 * If the parent form has multiple submit buttons, the element submit
 * callbacks will only be invoked when the form is submitted through a
 * submit button with a #button_type of \'primary\' or \'secondary\'.
 * This prevents irreversible changes from being applied for submit buttons
 * which only rebuild the form (e.g. "Upload file" or "Add another item").
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
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
    '81e0464bd4079602f40a8d76e18f19bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attaches the #commerce_element_submit functionality.
   *
   * @param array $element
   *   The form element being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'attachElementSubmit',
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
    'b82b2136fbcb8607fd23087c4b67746d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Confirms that #commerce_element_submit handlers can be run.
   *
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @throws \\Exception
   *   Thrown if button-level #validate handlers are detected on the parent
   *   form, as a protection against buggy behavior.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'validateElementSubmit',
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
    'ee7be73c684c1f39498f4ee891caa111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits elements by calling their #commerce_element_submit callbacks.
   *
   * Form API has no #element_submit, requiring us to simulate it by running
   * the #commerce_element_submit handlers either in the last step of
   * validation, or the first step of submission. In this case it\'s the last
   * step of validation, allowing thrown exceptions to be converted into form
   * errors.
   *
   * @param array &$form
   *   The form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'executeElementSubmitHandlers',
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
    '59644721df03abfacf7d32c81b3c6087' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether #commerce_element_submit callbacks should be executed.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return bool
   *   TRUE if the callbacks can be executed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'shouldExecuteElementSubmit',
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
    '6e7cb689179d980b47198716613a9aee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calls the #commerce_element_submit callbacks recursively.
   *
   * @param array &$element
   *   The current element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'doExecuteSubmitHandlers',
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
    'b3c4d7707d56170ba44fa24a303b4834' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'getInfo',
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
    'f89ae930c8920e6d77036600fa3bc466' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the element form.
   *
   * @param array $element
   *   The form element being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when #default_value is empty or not an entity, or when
   *   #available_countries is not an array of country codes.
   *
   * @return array
   *   The processed form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
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
    '0cfa9dc2019b4ff562630a1f57f0393b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\InlineFormManager $inline_form_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
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
    '689073a9536a2b105ed35966423cbe96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates $element[\'#profile\'] with the inline form\'s entity.
   *
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'updateProfile',
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
    'a687cfc8bd7fd9f072af0bb5210535d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface $inline_form */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Element',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Element\\ProfileSelect',
         'functionName' => 'updateProfile',
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