<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate/src/Plugin/MigrateSourceInterface.php-1624732868',
   'data' => 
  array (
    '57860848fdd99195cc5f0a795a0020ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for migrate sources.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigratePluginManager
 * @see \\Drupal\\migrate\\Annotation\\MigrateSource
 * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
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
    'f6cbd6e9fbcb7387d4aa426d85627c33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns available fields on the source.
   *
   * @return array
   *   Available fields in the source, keys are the field machine names as used
   *   in field mappings, values are descriptions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
         'functionName' => 'fields',
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
    '225dc8ff470302709d13793616506d3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds additional data to the row.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row object.
   *
   * @return bool
   *   FALSE if this row needs to be skipped.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
         'functionName' => 'prepareRow',
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
    'df4a58276d0982661df981e436ea7513' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows class to decide how it will react when it is treated like a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
         'functionName' => '__toString',
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
    '985a0bef3ce978e46e059cb9a7963b02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines the source fields uniquely identifying a source row.
   *
   * None of these fields should contain a NULL value. If necessary, use
   * prepareRow() or hook_migrate_prepare_row() to rewrite NULL values to
   * appropriate empty values (such as \'\' or 0).
   *
   * @return array[]
   *   An associative array of field definitions keyed by field ID. Values are
   *   associative arrays with a structure that contains the field type (\'type\'
   *   key). The other keys are the field storage settings as they are returned
   *   by FieldStorageDefinitionInterface::getSettings().
   *
   *   Examples:
   *
   *   A composite source primary key that is defined by an integer and a string
   *   might look like this:
   *   @code
   *     return [
   *       \'id\' => [
   *         \'type\' => \'integer\',
   *         \'unsigned\' => FALSE,
   *         \'size\' => \'big\',
   *       ],
   *       \'version\' => [
   *         \'type\' => \'string\',
   *         \'max_length\' => 64,
   *         \'is_ascii\' => TRUE,
   *       ],
   *     ];
   *   @endcode
   *
   *   If \'type\' points to a field plugin with multiple columns and needs to
   *   refer to a column different than \'value\', the key of that column will be
   *   appended as a suffix to the plugin name, separated by dot (\'.\'). Example:
   *   @code
   *     return [
   *       \'format\' => [
   *         \'type\' => \'text.format\',
   *       ],
   *     ];
   *   @endcode
   *
   *   Additional custom keys/values that are not part of field storage
   *   definition can be added as shown below. The most common setting
   *   passed along to the ID definition is table \'alias\', used by the SqlBase
   *   source plugin in order to distinguish between ambiguous column names -
   *   for example, when a SQL source query joins two tables with the same
   *   column names.
   *   @code
   *     return [
   *       \'nid\' => [
   *         \'type\' => \'integer\',
   *         \'alias\' => \'n\',
   *       ],
   *     ];
   *   @endcode
   *
   * @see \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface::getSettings()
   * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\IntegerItem
   * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\StringItem
   * @see \\Drupal\\text\\Plugin\\Field\\FieldType\\TextItem
   * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
         'functionName' => 'getIds',
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
    'ec936fb515b5111af57b2c6f0007c4fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the source module providing the source data.
   *
   * @return string|null
   *   The source module or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
         'functionName' => 'getSourceModule',
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