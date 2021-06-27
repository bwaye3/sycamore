<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:15:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:47:"Provides a base class for form element plugins.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:132:"Form elements are a subset of render elements, representing elements for
HTML forms, which can be referenced in form arrays. See the";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:181:"theme_render Render API topic @endlink for an overview of render
arrays and render elements, and the @link form_api Form API topic @endlink
for an overview of forms and form arrays.";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:723:"The elements of form arrays are divided up into properties (whose keys
start with #) and children (whose keys do not start with #). The properties
provide data or settings that are used in rendering and form processing.
Some properties are specific to a particular type of form/render element,
some are available for any render element, and some are available for any
form input element. A list of the properties that are available for all form
elements follows; see \\Drupal\\Core\\Render\\Element\\RenderElement for some
additional information, as well as a list of properties that are common to
all render elements (including form elements). Properties specific to a
particular element are documented on that element\'s class.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:3050:"Here is a list of properties that are used during the rendering and form
processing of form elements:
- #after_build: (array) Array of callables or function names, which are
  called after the element is built. Arguments: $element, $form_state.
- #ajax: (array) Array of elements to specify Ajax behavior. See
  the @link ajax Ajax API topic @endlink for more information.
- #array_parents: (string[], read-only) Array of names of all the element\'s
  parents (including itself) in the render array. See also #parents, #tree.
- #default_value: Default value for the element. See also #value.
- #description: (string) Help or description text for the element. In an
  ideal user interface, the #title should be enough to describe the element,
  so most elements should not have a description; if you do need one, make
  sure it is translated. If it is not already wrapped in a safe markup
  object, it will be filtered for XSS safety.
- #disabled: (bool) If TRUE, the element is shown but does not accept
  user input.
- #element_validate: (array) Array of callables or function names, which
  are called to validate the input. Arguments: $element, $form_state, $form.
- #field_prefix: (string) Prefix to display before the HTML input element.
  Should be translated, normally. If it is not already wrapped in a safe
  markup object, will be filtered for XSS safety.
- #field_suffix: (string) Suffix to display after the HTML input element.
  Should be translated, normally. If it is not already wrapped in a safe
  markup object, will be filtered for XSS safety.
- #input: (bool, internal) Whether or not the element accepts input.
- #parents: (string[], read-only) Array of names of the element\'s parents
  for purposes of getting values out of $form_state. See also
  #array_parents, #tree.
- #process: (array) Array of callables or function names, which are
  called during form building. Arguments: $element, $form_state, $form.
- #processed: (bool, internal) Set to TRUE when the element is processed.
- #required: (bool) Whether or not input is required on the element.
- #states: (array) Information about JavaScript states, such as when to
  hide or show the element based on input on other elements.
  See \\Drupal\\Core\\Form\\FormHelper::processStates() for documentation.
- #title: (string) Title of the form element. Should be translated.
- #title_display: (string) Where and how to display the #title. Possible
  values:
  - before: Label goes before the element (default for most elements).
  - after: Label goes after the element (default for radio elements).
  - invisible: Label is there but is made invisible using CSS.
  - attribute: Make it the title attribute (hover tooltip).
- #tree: (bool) TRUE if the values of this element and its children should
  be hierarchical in $form_state; FALSE if the values should be flat.
  See also #parents, #array_parents.
- #value_callback: (callable) Callable or function name, which is called
  to transform the raw user input to the element\'s value. Arguments:
  $element, $input, $form_state.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:42:"\\Drupal\\Core\\Render\\Annotation\\FormElement";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:48:"\\Drupal\\Core\\Render\\Element\\FormElementInterface";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:38:"\\Drupal\\Core\\Render\\ElementInfoManager";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:10:"plugin_api";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:14;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:8:"@ingroup";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:12:"theme_render";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));