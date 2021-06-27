<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/Entity/LayoutEntityDisplayInterface.php-1624732868',
   'data' => 
  array (
    '80bf2e01cb0854e6b688179217263fcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for entity displays that have layout.
 *
 * @todo Refactor this interface in https://www.drupal.org/node/2985362.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'layoutbuilderenabledinterface' => 'Drupal\\layout_builder\\LayoutBuilderEnabledInterface',
          'sectionlistinterface' => 'Drupal\\layout_builder\\SectionListInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
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
    '66482cb38e0b30b9b92df2fd49ee8e1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the display allows custom overrides.
   *
   * @return bool
   *   TRUE if custom overrides are allowed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'layoutbuilderenabledinterface' => 'Drupal\\layout_builder\\LayoutBuilderEnabledInterface',
          'sectionlistinterface' => 'Drupal\\layout_builder\\SectionListInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
         'functionName' => 'isOverridable',
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
    '93e064f0b8cbf4066b4d28f667e46830' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the display to allow or disallow overrides.
   *
   * @param bool $overridable
   *   TRUE if the display should allow overrides, FALSE otherwise.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'layoutbuilderenabledinterface' => 'Drupal\\layout_builder\\LayoutBuilderEnabledInterface',
          'sectionlistinterface' => 'Drupal\\layout_builder\\SectionListInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
         'functionName' => 'setOverridable',
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