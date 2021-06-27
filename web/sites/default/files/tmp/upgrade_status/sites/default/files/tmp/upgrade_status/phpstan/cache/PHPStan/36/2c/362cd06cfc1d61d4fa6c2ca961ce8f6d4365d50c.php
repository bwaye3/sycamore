<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Plugin/Field/FieldWidget/StoreDateTimeWidget.php-1624732871',
   'data' => 
  array (
    'c290ae058265a74097cd88708619617a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_store_datetime\' widget.
 *
 * Used for entering date/time values that are going to be used in
 * the store timezone, as opposed to the user\'s timezone.
 *
 * The store timezone is not known at entry time, since the parent entity
 * might belong to multiple stores. Instead, the store timezone is assigned
 * in the date/time getter, before the value is used.
 *
 * The "datetime_default" widget performs timezone conversion, assuming
 * that the entered value is in the user\'s timezone, and converting it to
 * UTC on storage. This widget ensures there is no conversion.
 * If the user enters "2019-10-31 23:59:00", the value is stored and loaded
 * as-is. Once the timezone is assigned, it becomes "2019-10-31 23:59:00 EST",
 * assuming that the current store\'s timezone is EST.
 *
 * @FieldWidget(
 *   id = "commerce_store_datetime",
 *   label = @Translation("Date and time (Store timezone)"),
 *   field_types = {
 *     "datetime"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget\\StoreDateTimeWidget',
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
    'f37d5c68888665fe63211a9858353bbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget\\StoreDateTimeWidget',
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
    '93b8e0d7f6692a7e821ebed3e89bf1b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget\\StoreDateTimeWidget',
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
    'a53682c7be60e2e98392d96f2e44ccf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Datetime\\DrupalDateTime $date */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'datetimeitem' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItem',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\Field\\FieldWidget\\StoreDateTimeWidget',
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
  ),
));