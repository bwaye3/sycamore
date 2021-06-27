<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/datetime/src/Plugin/Field/FieldWidget/DateTimeWidgetBase.php-1624732868',
   'data' => 
  array (
    'fd5d6d1786e000ff6ea242851518992a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for the \'datetime_*\' widgets.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget\\DateTimeWidgetBase',
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
    'cf5ec174dc1f0639a58c6e0b0e0946ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget\\DateTimeWidgetBase',
         'functionName' => 'formElement',
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
    'f81ff3503941cf12bb7735c4ef21d9d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget\\DateTimeWidgetBase',
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
    'fc525d49f1aea28a8c65728f8ac301d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Datetime\\DrupalDateTime $date */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget\\DateTimeWidgetBase',
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
    '68f2d6b130c02a706341c3f047462206' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object for use as a default value.
   *
   * This will take a default value, apply the proper timezone for display in
   * a widget, and set the default time for date-only fields.
   *
   * @param \\Drupal\\Core\\Datetime\\DrupalDateTime $date
   *   The UTC default date.
   * @param string $timezone
   *   The timezone to apply.
   *
   * @return \\Drupal\\Core\\Datetime\\DrupalDateTime
   *   A date object for use as a default value in a field widget.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\datetime\\Plugin\\Field\\FieldWidget\\DateTimeWidgetBase',
         'functionName' => 'createDefaultValue',
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