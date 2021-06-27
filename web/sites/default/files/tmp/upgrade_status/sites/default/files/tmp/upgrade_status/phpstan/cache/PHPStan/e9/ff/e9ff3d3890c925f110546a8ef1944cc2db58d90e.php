<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/Element/FormElement.php-1624732867',
   'data' => 
  array (
    'bd207f1b1f3734edf5239c970e743204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for form element plugins.
 *
 * Form elements are a subset of render elements, representing elements for
 * HTML forms, which can be referenced in form arrays. See the
 * @link theme_render Render API topic @endlink for an overview of render
 * arrays and render elements, and the @link form_api Form API topic @endlink
 * for an overview of forms and form arrays.
 *
 * The elements of form arrays are divided up into properties (whose keys
 * start with #) and children (whose keys do not start with #). The properties
 * provide data or settings that are used in rendering and form processing.
 * Some properties are specific to a particular type of form/render element,
 * some are available for any render element, and some are available for any
 * form input element. A list of the properties that are available for all form
 * elements follows; see \\Drupal\\Core\\Render\\Element\\RenderElement for some
 * additional information, as well as a list of properties that are common to
 * all render elements (including form elements). Properties specific to a
 * particular element are documented on that element\'s class.
 *
 * Here is a list of properties that are used during the rendering and form
 * processing of form elements:
 * - #after_build: (array) Array of callables or function names, which are
 *   called after the element is built. Arguments: $element, $form_state.
 * - #ajax: (array) Array of elements to specify Ajax behavior. See
 *   the @link ajax Ajax API topic @endlink for more information.
 * - #array_parents: (string[], read-only) Array of names of all the element\'s
 *   parents (including itself) in the render array. See also #parents, #tree.
 * - #default_value: Default value for the element. See also #value.
 * - #description: (string) Help or description text for the element. In an
 *   ideal user interface, the #title should be enough to describe the element,
 *   so most elements should not have a description; if you do need one, make
 *   sure it is translated. If it is not already wrapped in a safe markup
 *   object, it will be filtered for XSS safety.
 * - #disabled: (bool) If TRUE, the element is shown but does not accept
 *   user input.
 * - #element_validate: (array) Array of callables or function names, which
 *   are called to validate the input. Arguments: $element, $form_state, $form.
 * - #field_prefix: (string) Prefix to display before the HTML input element.
 *   Should be translated, normally. If it is not already wrapped in a safe
 *   markup object, will be filtered for XSS safety.
 * - #field_suffix: (string) Suffix to display after the HTML input element.
 *   Should be translated, normally. If it is not already wrapped in a safe
 *   markup object, will be filtered for XSS safety.
 * - #input: (bool, internal) Whether or not the element accepts input.
 * - #parents: (string[], read-only) Array of names of the element\'s parents
 *   for purposes of getting values out of $form_state. See also
 *   #array_parents, #tree.
 * - #process: (array) Array of callables or function names, which are
 *   called during form building. Arguments: $element, $form_state, $form.
 * - #processed: (bool, internal) Set to TRUE when the element is processed.
 * - #required: (bool) Whether or not input is required on the element.
 * - #states: (array) Information about JavaScript states, such as when to
 *   hide or show the element based on input on other elements.
 *   See \\Drupal\\Core\\Form\\FormHelper::processStates() for documentation.
 * - #title: (string) Title of the form element. Should be translated.
 * - #title_display: (string) Where and how to display the #title. Possible
 *   values:
 *   - before: Label goes before the element (default for most elements).
 *   - after: Label goes after the element (default for radio elements).
 *   - invisible: Label is there but is made invisible using CSS.
 *   - attribute: Make it the title attribute (hover tooltip).
 * - #tree: (bool) TRUE if the values of this element and its children should
 *   be hierarchical in $form_state; FALSE if the values should be flat.
 *   See also #parents, #array_parents.
 * - #value_callback: (callable) Callable or function name, which is called
 *   to transform the raw user input to the element\'s value. Arguments:
 *   $element, $input, $form_state.
 *
 * @see \\Drupal\\Core\\Render\\Annotation\\FormElement
 * @see \\Drupal\\Core\\Render\\Element\\FormElementInterface
 * @see \\Drupal\\Core\\Render\\ElementInfoManager
 * @see plugin_api
 *
 * @ingroup theme_render
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
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
    'e92c6b41f2b9a7f73688b78267cfd349' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
         'functionName' => 'valueCallback',
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
    '15085e84670af2ff2b4c6502b7db4011' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #process callback for #pattern form element property.
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   generic input element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
         'functionName' => 'processPattern',
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
    '911ef9c9da21ea2f0d4611ed1004edb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #element_validate callback for #pattern form element property.
   *
   * @param $element
   *   An associative array containing the properties and children of the
   *   generic form element.
   * @param $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
         'functionName' => 'validatePattern',
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
    '5d42a52079cf731439dcd9ae2e2b4bfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds autocomplete functionality to elements.
   *
   * This sets up autocomplete functionality for elements with an
   * #autocomplete_route_name property, using the #autocomplete_route_parameters
   * property if present.
   *
   * For example, suppose your autocomplete route name is
   * \'mymodule.autocomplete\' and its path is
   * \'/mymodule/autocomplete/{a}/{b}\'. In a form array, you would create a text
   * field with properties:
   * @code
   * \'#autocomplete_route_name\' => \'mymodule.autocomplete\',
   * \'#autocomplete_route_parameters\' => array(\'a\' => $some_key, \'b\' => $some_id),
   * @endcode
   * If the user types "keywords" in that field, the full path called would be:
   * \'mymodule_autocomplete/$some_key/$some_id?q=keywords\'
   *
   * @param array $element
   *   The form element to process. Properties used:
   *   - #autocomplete_route_name: A route to be used as callback URL by the
   *     autocomplete JavaScript library.
   *   - #autocomplete_route_parameters: The parameters to be used in
   *     conjunction with the route name.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
         'functionName' => 'processAutocomplete',
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
    '08677b325713e4fb8ca300a6b11e5eaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessManagerInterface $access_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\FormElement',
         'functionName' => 'processAutocomplete',
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