<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/filter/BooleanOperator.php-1624732869',
   'data' => 
  array (
    'a8e29f274b273dd520baab92a981f77f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Simple filter to handle matching of boolean values
 *
 * Definition items:
 * - label: (REQUIRED) The label for the checkbox.
 * - type: For basic \'true false\' types, an item can specify the following:
 *    - true-false: True/false (this is the default)
 *    - yes-no: Yes/No
 *    - on-off: On/Off
 *    - enabled-disabled: Enabled/Disabled
 * - accept null: Treat a NULL value as false.
 * - use_equal: If you use this flag the query will use = 1 instead of <> 0.
 *   This might be helpful for performance reasons.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("boolean")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    'ac3f3608bebaa44b6d4b12fe86bb37a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The equal query operator.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    '89c9b354e632151ffe7a62310c5237eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The non equal query operator.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    '7212d7b472a73a8ad651f09837c0d4ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    '8588a482c760045e9543d611a559a84c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of operator information.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    '198d098e182746b7b89572a79b69d44b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    'd72ac92f7ff885a0fc35193cbaacc36f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return the possible options for this filter.
   *
   * Child classes should override this function to set the possible values
   * for the filter.  Since this is a boolean filter, the array should have
   * two possible keys: 1 for "True" and 0 for "False", although the labels
   * can be whatever makes sense for the filter.  These values are used for
   * configuring the filter, when the filter is exposed, and in the admin
   * summary of the filter.  Normally, this should be static data, but if it\'s
   * dynamic for some reason, child classes should use a guard to reduce
   * database hits as much as possible.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
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
    '91afcc1756f447b66a5d563b800813cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
         'functionName' => 'query',
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
    '84e2c18c0fa21b16bcc78635aa781853' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a where condition to the query for a boolean value.
   *
   * @param string $field
   *   The field name to add the where condition for.
   * @param string $query_operator
   *   (optional) Either self::EQUAL or self::NOT_EQUAL. Defaults to
   *   self::EQUAL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'condition' => 'Drupal\\Core\\Database\\Query\\Condition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\BooleanOperator',
         'functionName' => 'queryOpBoolean',
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