<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/ElementInfoManagerInterface.php-1624732867',
   'data' => 
  array (
    '15d9e2b3f56a40fae2cc7e1ed86c9320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Collects available render array element types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
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
    '04ecfaf8de1d3907b72cf903f73ad377' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the default properties for the defined element type.
   *
   * Each of the element types defined by this hook is assumed to have a
   * matching theme hook, which should be registered with hook_theme() as
   * normal.
   *
   * For more information about custom element types see the explanation at
   * https://www.drupal.org/node/169815.
   *
   * @param string $type
   *   The machine name of an element type plugin.
   *
   * @return array
   *   An associative array describing the element types being defined. The
   *   array contains a sub-array for each element type, with the
   *   machine-readable type name as the key. Each sub-array has a number of
   *   possible attributes:
   *   - #input: boolean indicating whether or not this element carries a value
   *     (even if it\'s hidden).
   *   - #process: array of callback functions taking $element, $form_state,
   *     and $complete_form.
   *   - #after_build: array of callables taking $element and $form_state.
   *   - #validate: array of callback functions taking $form and $form_state.
   *   - #element_validate: array of callback functions taking $element and
   *     $form_state.
   *   - #pre_render: array of callables taking $element.
   *   - #post_render: array of callables taking $children and $element.
   *   - #submit: array of callback functions taking $form and $form_state.
   *   - #title_display: optional string indicating if and how #title should be
   *     displayed (see form-element.html.twig).
   *
   * @see \\Drupal\\Core\\Render\\Element\\ElementInterface
   * @see \\Drupal\\Core\\Render\\Element\\ElementInterface::getInfo()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
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
    'a28eeda063e145199d52bc9a8272aecf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a single property for the defined element type.
   *
   * @param string $type
   *   An element type as defined by an element plugin.
   * @param string $property_name
   *   The property within the element type that should be returned.
   * @param $default
   *   (Optional) The value to return if the element type does not specify a
   *   value for the property. Defaults to NULL.
   *
   * @return mixed
   *   The property value of the defined element type. Or the provided
   *   default value, which can be NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
         'functionName' => 'getInfoProperty',
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