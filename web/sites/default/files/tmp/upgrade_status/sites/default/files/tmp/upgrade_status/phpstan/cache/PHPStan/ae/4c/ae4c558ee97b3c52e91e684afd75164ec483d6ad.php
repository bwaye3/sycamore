<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Plugin/views/filter/StoreDate.php-1624732871',
   'data' => 
  array (
    'aebd1d30d870d0c1de930e26af882756' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Store date/time views filter.
 *
 * Used for filtering date/time values that are going to be used in
 * the store timezone, as opposed to the user\'s timezone.
 *
 * The "datetime" filter performs timezone conversion, assuming
 * that the entered value is in the user\'s timezone, and converting it to
 * UTC on storage. This filter ensures there is no conversion.
 *
 * @ViewsFilter("commerce_store_datetime")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\views\\filter',
         'uses' => 
        array (
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'date' => 'Drupal\\datetime\\Plugin\\views\\filter\\Date',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\views\\filter\\StoreDate',
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
    'f348ca55a8b5ba5849a0bf4036ef6332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new StoreDate handler.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter
   *   The date formatter service.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack used to determine the current time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\views\\filter',
         'uses' => 
        array (
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'date' => 'Drupal\\datetime\\Plugin\\views\\filter\\Date',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\views\\filter\\StoreDate',
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
    'c20e1e68368408654df70b7908cca201' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\views\\filter',
         'uses' => 
        array (
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'date' => 'Drupal\\datetime\\Plugin\\views\\filter\\Date',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\views\\filter\\StoreDate',
         'functionName' => 'getTimezone',
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
    '6675bba61a327c1d3343ad15b297ffb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Plugin\\views\\filter',
         'uses' => 
        array (
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'date' => 'Drupal\\datetime\\Plugin\\views\\filter\\Date',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_store\\Plugin\\views\\filter\\StoreDate',
         'functionName' => 'getOffset',
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