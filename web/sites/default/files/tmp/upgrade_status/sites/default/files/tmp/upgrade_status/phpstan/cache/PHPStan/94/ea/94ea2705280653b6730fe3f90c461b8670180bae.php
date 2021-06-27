<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/Element/ElementInterface.php-1624732867',
   'data' => 
  array (
    'c7d67757fa17a10c03d58a3ffc66192a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for render element plugins.
 *
 * Render element plugins allow modules to declare their own Render API element
 * types and specify the default values for the properties. The values returned
 * by the getInfo() method of the element plugin will be merged with the
 * properties specified in render arrays. Thus, you can specify defaults for any
 * Render API keys, in addition to those explicitly documented by
 * \\Drupal\\Core\\Render\\ElementInfoManagerInterface::getInfo().
 *
 * Some render elements are specifically form input elements; see
 * \\Drupal\\Core\\Render\\Element\\FormElementInterface for more information.
 *
 * The public API of these objects must be designed with security in mind as
 * render elements process raw user input.
 *
 * @see \\Drupal\\Core\\Render\\ElementInfoManager
 * @see \\Drupal\\Core\\Render\\Annotation\\RenderElement
 * @see \\Drupal\\Core\\Render\\Element\\RenderElement
 * @see plugin_api
 *
 * @ingroup theme_render
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\ElementInterface',
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
    '6a481af66c74052a3846c68b622b0ebe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the element properties for this element.
   *
   * @return array
   *   An array of element properties. See
   *   \\Drupal\\Core\\Render\\ElementInfoManagerInterface::getInfo() for
   *   documentation of the standard properties of all elements, and the
   *   return value format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\ElementInterface',
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
    'd8a53201dfd6adbed79851c304f72bad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a form element\'s class attribute.
   *
   * Adds \'required\' and \'error\' classes as needed.
   *
   * @param array $element
   *   The form element.
   * @param array $class
   *   Array of new class names to be added.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\ElementInterface',
         'functionName' => 'setAttributes',
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