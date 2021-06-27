<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/includes/form.inc-1624732867',
   'data' => 
  array (
    '544e78df02595a7a96a790940d4703b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Functions for form and batch generation and processing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    '2507463575759ff290c2ffd3611a770b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for select element templates.
 *
 * Default template: select.html.twig.
 *
 * It is possible to group options together; to do this, change the format of
 * the #options property to an associative array in which the keys are group
 * labels, and the values are associative arrays in the normal #options format.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #value, #options, #description, #extra,
 *     #multiple, #required, #name, #attributes, #size, #sort_options,
 *     #sort_start.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_select',
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
    'cabe96a5acfa68f7d2560b817f17c734' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts the options in a select element into a structured array for output.
 *
 * This function calls itself recursively to obtain the values for each optgroup
 * within the list of options and when the function encounters an object with
 * an \'options\' property inside $element[\'#options\'].
 *
 * @param array $element
 *   An associative array containing properties of the select element. See
 *   \\Drupal\\Core\\Render\\Element\\Select for details, but note that the
 *   #empty_option and #empty_value properties are processed, and the
 *   #value property is set, before reaching this function.
 * @param array|null $choices
 *   (optional) Either an associative array of options in the same format as
 *   $element[\'#options\'] above, or NULL. This parameter is only used internally
 *   and is not intended to be passed in to the initial function call.
 *
 * @return mixed[]
 *   A structured, possibly nested, array of options and optgroups for use in a
 *   select form element.
 *   - label: A translated string whose value is the text of a single HTML
 *     option element, or the label attribute for an optgroup.
 *   - options: Optional, array of options for an optgroup.
 *   - selected: A boolean that indicates whether the option is selected when
 *     rendered.
 *   - type: A string that defines the element type. The value can be \'option\'
 *     or \'optgroup\'.
 *   - value: A string that contains the value attribute for the option.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'form_select_options',
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
    '0e4344285fc7c4174a0d314c69be3096' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the indexes of a select element\'s options matching a given key.
 *
 * This function is useful if you need to modify the options that are
 * already in a form element; for example, to remove choices which are
 * not valid because of additional filters imposed by another module.
 * One example might be altering the choices in a taxonomy selector.
 * To correctly handle the case of a multiple hierarchy taxonomy,
 * #options arrays can now hold an array of objects, instead of a
 * direct mapping of keys to labels, so that multiple choices in the
 * selector can have the same key (and label). This makes it difficult
 * to manipulate directly, which is why this helper function exists.
 *
 * This function does not support optgroups (when the elements of the
 * #options array are themselves arrays), and will return FALSE if
 * arrays are found. The caller must either flatten/restore or
 * manually do their manipulations in this case, since returning the
 * index is not sufficient, and supporting this would make the
 * "helper" too complicated and cumbersome to be of any help.
 *
 * As usual with functions that can return array() or FALSE, do not
 * forget to use === and !== if needed.
 *
 * @param $element
 *   The select element to search.
 * @param $key
 *   The key to look for.
 *
 * @return
 *   An array of indexes that match the given $key. Array will be
 *   empty if no elements were found. FALSE if optgroups were found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'form_get_options',
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
    'ef18c20c7fe47b9cded6f92643835fd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for fieldset element templates.
 *
 * Default template: fieldset.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #attributes, #children, #description, #id, #title,
 *     #value.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_fieldset',
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
    '8cf2e5deb1f2b0347df34b8ad7999123' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for details element templates.
 *
 * Default template: details.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #attributes, #children, #description, #required,
 *     #summary_attributes, #title, #value.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_details',
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
    'a969b77ee7e04f6cd076e6a029320dcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for radios templates.
 *
 * Default template: radios.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #value, #options, #description, #required,
 *     #attributes, #children.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_radios',
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
    'ab6718fa2a976380becbf9de03f96720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for checkboxes templates.
 *
 * Default template: checkboxes.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #children, #attributes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_checkboxes',
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
    '6179b849e11c4bfd637187a4b81145fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for vertical tabs templates.
 *
 * Default template: vertical-tabs.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties and children of
 *     the details element. Properties used: #children.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_vertical_tabs',
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
    '2ebe8339246d6473510cd556acd8a4b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for input templates.
 *
 * Default template: input.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #attributes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_input',
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
    '22f59b7bd722d8f1802f76ad2a4b183a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for form templates.
 *
 * Default template: form.html.twig.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #action, #method, #attributes, #children
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_form',
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
    '8c4cd37aafda7ee8025f16e76b625465' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for textarea templates.
 *
 * Default template: textarea.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #value, #description, #rows, #cols, #maxlength,
 *     #placeholder, #required, #attributes, #resizable.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_textarea',
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
    'c2f874191b17ba28c8935a7c8656c4b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns HTML for a form element.
 * Prepares variables for form element templates.
 *
 * Default template: form-element.html.twig.
 *
 * In addition to the element itself, the DIV contains a label for the element
 * based on the optional #title_display property, and an optional #description.
 *
 * The optional #title_display property can have these values:
 * - before: The label is output before the element. This is the default.
 *   The label includes the #title and the required marker, if #required.
 * - after: The label is output after the element. For example, this is used
 *   for radio and checkbox #type elements. If the #title is empty but the field
 *   is #required, the label will contain only the required marker.
 * - invisible: Labels are critical for screen readers to enable them to
 *   properly navigate through forms but can be visually distracting. This
 *   property hides the label for everyone except screen readers.
 * - attribute: Set the title attribute on the element to create a tooltip
 *   but output no label element. This is supported only for checkboxes
 *   and radios in
 *   \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *   It is used where a visual label is not needed, such as a table of
 *   checkboxes where the row and column provide the context. The tooltip will
 *   include the title and required marker.
 *
 * If the #title property is not set, then the label and any required marker
 * will not be output, regardless of the #title_display or #required values.
 * This can be useful in cases such as the password_confirm element, which
 * creates children elements that have their own labels and required markers,
 * but the parent element should have neither. Use this carefully because a
 * field without an associated label can cause accessibility challenges.
 *
 * To associate the label with a different field, set the #label_for property
 * to the ID of the desired field.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #title, #title_display, #description, #id, #required,
 *     #children, #type, #name, #label_for.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_form_element',
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
    '3973101dd9f87d1e50f0754a70664390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for form label templates.
 *
 * Form element labels include the #title and a #required marker. The label is
 * associated with the element itself by the element #id. Labels may appear
 * before or after elements, depending on form-element.html.twig and
 * #title_display.
 *
 * This function will not be called for elements with no labels, depending on
 * #title_display. For elements that have an empty #title and are not required,
 * this function will output no label (\'\'). For required elements that have an
 * empty #title, this will output the required marker alone within the label.
 * The label will use the #id to associate the marker with the field that is
 * required. That is especially important for screenreader users to know
 * which field is required.
 *
 * To associate the label with a different field, set the #for property to the
 * ID of the desired field.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #required, #title, #id, #value, #description, #for.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_form_element_label',
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
    '12d0282d60016bc7721f155431418787' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a new batch.
 *
 * Batch operations are added as new batch sets. Batch sets are used to spread
 * processing (primarily, but not exclusively, forms processing) over several
 * page requests. This helps to ensure that the processing is not interrupted
 * due to PHP timeouts, while users are still able to receive feedback on the
 * progress of the ongoing operations. Combining related operations into
 * distinct batch sets provides clean code independence for each batch set,
 * ensuring that two or more batches, submitted independently, can be processed
 * without mutual interference. Each batch set may specify its own set of
 * operations and results, produce its own UI messages, and trigger its own
 * \'finished\' callback. Batch sets are processed sequentially, with the progress
 * bar starting afresh for each new set.
 *
 * @param $batch_definition
 *   An associative array defining the batch, with the following elements (all
 *   are optional except as noted):
 *   - operations: (required) Array of operations to be performed, where each
 *     item is an array consisting of the name of an implementation of
 *     callback_batch_operation() and an array of parameter.
 *     Example:
 *     @code
 *     array(
 *       array(\'callback_batch_operation_1\', array($arg1)),
 *       array(\'callback_batch_operation_2\', array($arg2_1, $arg2_2)),
 *     )
 *     @endcode
 *   - title: A safe, translated string to use as the title for the progress
 *     page. Defaults to t(\'Processing\').
 *   - init_message: Message displayed while the processing is initialized.
 *     Defaults to t(\'Initializing.\').
 *   - progress_message: Message displayed while processing the batch. Available
 *     placeholders are @current, @remaining, @total, @percentage, @estimate and
 *     @elapsed. Defaults to t(\'Completed @current of @total.\').
 *   - error_message: Message displayed if an error occurred while processing
 *     the batch. Defaults to t(\'An error has occurred.\').
 *   - finished: Name of an implementation of callback_batch_finished(). This is
 *     executed after the batch has completed. This should be used to perform
 *     any result massaging that may be needed, and possibly save data in
 *     $_SESSION for display after final page redirection.
 *   - file: Path to the file containing the definitions of the \'operations\' and
 *     \'finished\' functions, for instance if they don\'t reside in the main
 *     .module file. The path should be relative to base_path(), and thus should
 *     be built using drupal_get_path().
 *   - library: An array of batch-specific CSS and JS libraries.
 *   - url_options: options passed to the \\Drupal\\Core\\Url object when
 *     constructing redirect URLs for the batch.
 *   - progressive: A Boolean that indicates whether or not the batch needs to
 *     run progressively. TRUE indicates that the batch will run in more than
 *     one run. FALSE (default) indicates that the batch will finish in a single
 *     run.
 *   - queue: An override of the default queue (with name and class fields
 *     optional). An array containing two elements:
 *     - name: Unique identifier for the queue.
 *     - class: The name of a class that implements
 *       \\Drupal\\Core\\Queue\\QueueInterface, including the full namespace but not
 *       starting with a backslash. It must have a constructor with two
 *       arguments: $name and a \\Drupal\\Core\\Database\\Connection object.
 *       Typically, the class will either be \\Drupal\\Core\\Queue\\Batch or
 *       \\Drupal\\Core\\Queue\\BatchMemory. Defaults to Batch if progressive is
 *       TRUE, or to BatchMemory if progressive is FALSE.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'batch_set',
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
    '8f86d8a542773cab0b48491caa99dca9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Appends a batch set to a running batch.
 *
 * Inserts the new set right after the current one to ensure execution order,
 * and stores its operations in a queue. If the current batch has already
 * inserted a new set, additional sets will be inserted after the last inserted
 * set.
 *
 * @param &$batch
 *   The batch array.
 * @param $batch_set
 *   The batch set.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => '_batch_append_set',
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
    'b046d66358d9176b55c3d578353c69d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Processes the batch.
 *
 * This function is generally not needed in form submit handlers;
 * Form API takes care of batches that were set during form submission.
 *
 * @param \\Drupal\\Core\\Url|string $redirect
 *   (optional) Either a path or Url object to redirect to when the batch has
 *   finished processing. For example, to redirect users to the home page, use
 *   \'<front>\'. If you wish to allow standard form API batch handling to occur
 *   and force the user to be redirected to a custom location after the batch
 *   has finished processing, you do not need to use batch_process() and this
 *   parameter. Instead, make the batch \'finished\' callback return an instance
 *   of \\Symfony\\Component\\HttpFoundation\\RedirectResponse, which will be used
 *   automatically by the standard batch processing pipeline (and which takes
 *   precedence over this parameter). If this parameter is omitted and no
 *   redirect response was returned by the \'finished\' callback, the user will
 *   be redirected to the page that started the batch. Any query arguments will
 *   be automatically persisted.
 * @param \\Drupal\\Core\\Url $url
 *   (optional) URL of the batch processing page. Should only be used for
 *   separate scripts like update.php.
 * @param $redirect_callback
 *   (optional) Specify a function to be called to redirect to the progressive
 *   processing page.
 *
 * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse|null
 *   A redirect response if the batch is progressive. No return value otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'batch_process',
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
    '478b32f6dc8bdef17039890023374b83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Url $batch_url */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'batch_process',
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
    'a9c2c5e09f5373a6cc1b26f17e4b1910' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Url $error_url */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'batch_process',
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
    'dcd96a21fda29809674b4ca17989d01e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves the current batch.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => 'batch_get',
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
    '66280fa9802af794f8c0972e080f845f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Populates a job queue with the operations of a batch set.
 *
 * Depending on whether the batch is progressive or not, the
 * Drupal\\Core\\Queue\\Batch or Drupal\\Core\\Queue\\BatchMemory handler classes will
 * be used. The name and class of the queue are added by reference to the
 * batch set.
 *
 * @param $batch
 *   The batch array.
 * @param $set_id
 *   The id of the set to process.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => '_batch_populate_queue',
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
    'b9494992ba513758b3739cb957e04fad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a queue object for a batch set.
 *
 * @param $batch_set
 *   The batch set.
 *
 * @return
 *   The queue object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
         'functionName' => '_batch_queue',
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
    '6bf2789e1d0528fa7cb95da6e0b6fa15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @} End of "defgroup batch".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'renderelement' => 'Drupal\\Core\\Render\\Element\\RenderElement',
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'url' => 'Drupal\\Core\\Url',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => NULL,
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
  ),
));