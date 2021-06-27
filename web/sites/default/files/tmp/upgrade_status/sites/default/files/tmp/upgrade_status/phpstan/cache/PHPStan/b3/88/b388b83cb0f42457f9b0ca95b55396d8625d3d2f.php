<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/filter/InOperator.php-1624732869',
   'data' => 
  array (
    'a959f89858316f22b6ce5643f26a9d5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Simple filter to handle matching of multiple options selectable via checkboxes
 *
 * Definition items:
 * - options callback: The function to call in order to generate the value options. If omitted, the options \'Yes\' and \'No\' will be used.
 * - options arguments: An array of arguments to pass to the options callback.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("in_operator")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
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
    'd9c4580b7463fd8cd8d68027d1203479' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var array
   * Stores all operations which are available on the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
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
    'bde09bc2457c5325777bfa23eee82aa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The filter title.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
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
    '86fe0d6df67e96012c41308e12be469e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'init',
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
    '427a57779fa536a242c478374b63f42f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Child classes should be used to override this function and set the
   * \'value options\', unless \'options callback\' is defined as a valid function
   * or static public method to generate these values.
   *
   * This can use a guard to be used to reduce database hits as much as
   * possible.
   *
   * @return array|null
   *   The stored values from $this->valueOptions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'getValueOptions',
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
    'fd142706c34bf54aaa3b1ae67a11c7ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * This kind of construct makes it relatively easy for a child class
   * to add or remove functionality by overriding this function and
   * adding/removing items from this array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'operators',
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
    '6638e3382d6fdfc939239d9748110fe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build strings from the operators() for \'select\' options
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'operatorOptions',
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
    '4c8f0d3064c58a380e033c4483711a57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * When using exposed filters, we may be required to reduce the set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'reduceValueOptions',
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
    '7daa0876beff86c13c893e3fe409a8cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'optgroup' => 'Drupal\\Core\\Form\\OptGroup',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\InOperator',
         'functionName' => 'acceptExposedInput',
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