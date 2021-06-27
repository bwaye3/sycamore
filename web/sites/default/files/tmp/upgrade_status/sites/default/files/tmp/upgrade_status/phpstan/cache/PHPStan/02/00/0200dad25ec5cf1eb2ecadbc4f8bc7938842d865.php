<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Plugin/Commerce/InlineForm/InlineFormInterface.php-1624732871',
   'data' => 
  array (
    '4e7d3ac395442fa230e050d11b55cdc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for inline forms.
 *
 * Inline forms are embeddable and reusable.
 * They are used as an alternative to building complex custom form elements,
 * which have problems with rebuilding on #ajax due to being processed too
 * early. Unlike form elements, inline forms support dependency injection
 * and allow swapping out the implementing class through an alter hook.
 *
 * Just like form elements, inline forms are automatically validated and
 * submitted when the complete form is validated/submitted.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
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
    '7192b511721dd65864662c19d6fc904d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the inline form label.
   *
   * @return string
   *   The inline form label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
         'functionName' => 'getLabel',
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
    '5e5ad66e7883aa970cc495b76f951f65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the inline form.
   *
   * @param array $inline_form
   *   The inline form, containing the following basic properties:
   *   - #parents: Identifies the location of the field values in $form_state.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   *
   * @return array
   *   The built inline form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
         'functionName' => 'buildInlineForm',
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
    '3b819c574f4fa1938aa3b0b8938cc9f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the inline form.
   *
   * @param array $inline_form
   *   The inline form, containing the following basic properties:
   *   - #parents: Identifies the location of the field values in $form_state.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
         'functionName' => 'validateInlineForm',
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
    'c3a2cac26dd2bdd70ae8a4f55264dc5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits the inline form.
   *
   * @param array $inline_form
   *   The inline form, containing the following basic properties:
   *   - #parents: Identifies the location of the field values in $form_state.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface',
         'functionName' => 'submitInlineForm',
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