<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/WidgetBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/AllowedTagsXssTrait.php-1624732867',
   'data' => 
  array (
    'a9f4998ea6327452d0d0d9ac53b535ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for \'Field widget\' plugin implementations.
 *
 * @ingroup field_widget
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    'f4e95c2ed76edb0d2956d4f209c2bca4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Useful methods when dealing with displaying allowed tags.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Field\\FieldFilteredMarkup instead.
 *
 * @see \\Drupal\\Core\\Field\\FieldFilteredMarkup
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '5b6cd16e005fc5fac9d6916bf312a7b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters an HTML string to prevent XSS vulnerabilities.
   *
   * Like \\Drupal\\Component\\Utility\\Xss::filterAdmin(), but with a shorter list
   * of allowed tags.
   *
   * Used for items entered by administrators, like field descriptions, allowed
   * values, where some (mainly inline) mark-up may be desired (so
   * \\Drupal\\Component\\Utility\\Html::escape() is not acceptable).
   *
   * @param string $string
   *   The string with raw HTML in it.
   *
   * @return \\Drupal\\Core\\Field\\FieldFilteredMarkup
   *   An XSS safe version of $string, or an empty string if $string is not
   *   valid UTF-8.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'fieldFilterXss',
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
    'edbcbf2a60b13a6a564715f4e4b0aee6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of tags allowed by AllowedTagsXssTrait::fieldFilterXss().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'allowedTags',
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
    'd8ae19c3274f09c46794725ad93a0655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a human-readable list of allowed tags for display in help texts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'displayAllowedTags',
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
    'f4ebbea119cf6432260b3ac264197bda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field definition.
   *
   * @var \\Drupal\\Core\\Field\\FieldDefinitionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '1bfe6d558127dcd13d2111cd743e1251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The widget settings.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    'f26b77ba90e3caaada938968e4281332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a WidgetBase object.
   *
   * @param string $plugin_id
   *   The plugin_id for the widget.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the widget is associated.
   * @param array $settings
   *   The widget settings.
   * @param array $third_party_settings
   *   Any third party settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => '__construct',
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
    '3eac46d7b033e100f07c3f3bca042b2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'create',
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
    '62056f10579567ed426ffbce04ff05fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '1432805f0811810fd03e9dc210148102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Special handling to create form elements for multiple values.
   *
   * Handles generic features for multiple fields:
   * - number of widgets
   * - AHAH-\'add more\' button
   * - table display and drag-n-drop value reordering
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'formMultipleElements',
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
    '50a6966cd4356ac07d350389aa56afcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * After-build handler for field elements in a form.
   *
   * This stores the final location of the field within the form structure so
   * that flagErrors() can assign validation errors to the right form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'afterBuild',
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
    'c93b104753fa197b4bdd1621f3e24349' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submission handler for the "Add another item" button.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'addMoreSubmit',
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
    '36a19d30289554965a513b0829f8514a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback for the "Add another item" button.
   *
   * This returns the new page content to replace the page content made obsolete
   * by the form submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'addMoreAjax',
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
    '6249a7d70cd18b69b7c39aedab289f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the form element for a single copy of the widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'formSingleElement',
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
    '34196cbd4682b26a8f5b61167bccea43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '2a425f0dd01412e9451c94eed8ddee82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    'cbec4d91ddc0e3b9ecf175ba857a576d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\Validator\\ConstraintViolationInterface[] $delta_violations */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '20554740394301a320ddcaeee775a8b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\Validator\\ConstraintViolationInterface[] $item_list_violations */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '55f07e036c52261554eed5587e6314bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '195797411249df50c4c319420e0151a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
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
    '2a1d86d2f36acfa11d9f1e7815ef6afe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the location of processing information within $form_state.
   *
   * @param array $parents
   *   The array of #parents where the widget lives in the form.
   * @param string $field_name
   *   The field name.
   *
   * @return array
   *   The location of processing information within $form_state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'getWidgetStateParents',
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
    '4fdd1243434374694527e3c65170ff4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'settingsForm',
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
    'bd2a125e81fb76622d7a9f80a3d92d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'settingsSummary',
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
    '5243f1f8d67cba6c37f7abf2c07cc575' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'errorElement',
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
    '298da87bed922f322a520fa23661f84f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'massageFormValues',
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
    '129824adbdbab42c3f76f10a115bf1e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the array of field settings.
   *
   * @return array
   *   The array of settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'getFieldSettings',
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
    'bd22417af9f3c925ac09fc3466274611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a field setting.
   *
   * @param string $setting_name
   *   The setting name.
   *
   * @return mixed
   *   The setting value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'getFieldSetting',
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
    '78361b73eeaefef6d16245bf9a5a3cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the widget handles multiple values.
   *
   * @return bool
   *   TRUE if a single copy of formElement() can handle multiple field values,
   *   FALSE if multiple values require separate copies of formElement().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'handlesMultipleValues',
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
    '436cc9fab0e959dddb88f299a993b815' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'isApplicable',
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
    '1650b2c1128c6dd49341028670843c25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the widget used for default value form.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return bool
   *   TRUE if a widget used to input default value, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'isDefaultValueWidget',
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
    'cbbfa698d7094c4df85828a8726abf7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the filtered field description.
   *
   * @return \\Drupal\\Core\\Field\\FieldFilteredMarkup
   *   The filtered field description, with tokens replaced.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraintviolationinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\WidgetBase',
         'functionName' => 'getFilteredDescription',
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