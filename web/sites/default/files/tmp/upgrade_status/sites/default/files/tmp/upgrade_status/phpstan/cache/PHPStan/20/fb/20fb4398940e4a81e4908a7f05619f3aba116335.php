<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate/src/Plugin/migrate/source/SourcePluginBase.php-1624732868',
   'data' => 
  array (
    '5d72d58ad0c8d74c8302df26c0b29b28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The base class for source plugins.
 *
 * Available configuration keys:
 * - cache_counts: (optional) If set, cache the source count.
 * - cache_key: (optional) Uniquely named cache key used for cache_counts.
 * - skip_count: (optional) If set, do not attempt to count the source.
 * - track_changes: (optional) If set, track changes to incoming data.
 * - high_water_property: (optional) It is an array of name & alias values
 *   (optional table alias). This high_water_property is typically a timestamp
 *   or serial id showing what was the last imported record. Only content with a
 *   higher value will be imported.
 *
 * The high_water_property and track_changes are mutually exclusive.
 *
 * Example:
 *
 * @code
 * source:
 *   plugin: some_source_plugin_name
 *   cache_counts: true
 *   track_changes: true
 * @endcode
 *
 * This example uses the plugin "some_source_plugin_name" and caches the count
 * of available source records to save calculating it every time count() is
 * called. Changes to incoming data are watched (because track_changes is true),
 * which can affect the result of prepareRow().
 *
 * Example:
 *
 * @code
 * source:
 *   plugin: some_source_plugin_name
 *   skip_count: true
 *   high_water_property:
 *     name: changed
 *     alias: n
 * @endcode
 *
 * In this example, skip_count is true which means count() will not attempt to
 * count the available source records, but just always return -1 instead. The
 * high_water_property defines which field marks the last imported row of the
 * migration. This will get converted into a SQL condition that looks like
 * \'n.changed\' or \'changed\' if no alias.
 *
 * @see \\Drupal\\migrate\\Plugin\\MigratePluginManager
 * @see \\Drupal\\migrate\\Annotation\\MigrateSource
 * @see \\Drupal\\migrate\\Plugin\\MigrateSourceInterface
 * @see plugin_api
 *
 * @ingroup migration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    'bd98084001e435072d61527d89094ea7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler service.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '6fecded8255d4619ad66e83e620d5360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity migration object.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    'dc664f17b313e520ab46539ff174c646' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current row from the query.
   *
   * @var \\Drupal\\migrate\\Row
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '5642e03393514720ad07c2202794aeff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The primary key of the current row.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    'b767c86af197d1019ffbd91fdb5a69ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Information on the property used as the high-water mark.
   *
   * Array of \'name\' and (optional) db \'alias\' properties used for high-water
   * mark.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '5d203a5d2e6fc5d561dd99a5f801c6df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key-value storage for the high-water value.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '49c38fcac464d896889af39fdd2b751b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The high water mark at the beginning of the import operation.
   *
   * If the source has a property for tracking changes (like Drupal has
   * node.changed) then this is the highest value of those imported so far.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '01040c4f50da8543747d21b4131cea4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this instance should cache the source count.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    'b0d99133f9737a0a3e4896b2fcc4a33a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Key to use for caching counts.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '49d14e491667fc6bc4bea816d86c8fca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this instance should not attempt to count the source.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '29fe0177ff065815b632c8a7a5c3aa03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags whether to track changes to incoming data.
   *
   * If TRUE, we will maintain hashed source rows to determine whether incoming
   * data has changed.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '3ea35eae0fde8389a08a8b766aff4b21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags whether source plugin will read the map row and add to data row.
   *
   * By default, next() will directly read the map row and add it to the data
   * row. A source plugin implementation may do this itself (in particular, the
   * SQL source can incorporate the map table into the query) - if so, it should
   * set this TRUE so we don\'t duplicate the effort.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    'ab95c94b90a45c3c02c2fee24897ef83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The backend cache.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '68f189d773cdf018a0d68aac0b4ef547' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The migration ID map.
   *
   * @var \\Drupal\\migrate\\Plugin\\MigrateIdMapInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '148bf107782cf5483564b89b9d2351b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The iterator to iterate over the source rows.
   *
   * @var \\Iterator
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '2612a4ceb7650a8c97277345e067395e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '41656cd02c3c5e4854d2370a483cdb44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the iterator with the source data.
   *
   * @return \\Iterator
   *   Returns an iteratable object of data for this source.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'initializeIterator',
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
    '4a706a79e2e403cece68f816472447bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the module handler.
   *
   * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   *   The module handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getModuleHandler',
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
    'a5aff1997d6fbaf937b1262ba141130e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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
    '894bfc68f2e1fd191e37e8dc334d69f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the iterator that will yield the row arrays to be processed.
   *
   * @return \\Iterator
   *   The iterator that will yield the row arrays to be processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getIterator',
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
    '74c733351537b38b83d4ebb6964c6bc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'current',
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
    '876829f231ca1f7404b84f52b3253759' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the iterator key.
   *
   * Implementation of \\Iterator::key() - called when entering a loop iteration,
   * returning the key of the current row. It must be a scalar - we will
   * serialize to fulfill the requirement, but using getCurrentIds() is
   * preferable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'key',
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
    'd26249703194eb44d11e18cb7e96b332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the iterator is currently valid.
   *
   * Implementation of \\Iterator::valid() - called at the top of the loop,
   * returning TRUE to process the loop and FALSE to terminate it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'valid',
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
    'c6db1b5b2a04fc0ac103186a0de916b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rewinds the iterator.
   *
   * Implementation of \\Iterator::rewind() - subclasses of SourcePluginBase
   * should implement initializeIterator() to do any class-specific setup for
   * iterating source records.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'rewind',
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
    'c67c1ca7d28780201281b2cd23c85ed0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * The migration iterates over rows returned by the source plugin. This
   * method determines the next row which will be processed and imported into
   * the system.
   *
   * The method tracks the source and destination IDs using the ID map plugin.
   *
   * This also takes care about highwater support. Highwater allows to reimport
   * rows from a previous migration run, which got changed in the meantime.
   * This is done by specifying a highwater field, which is compared with the
   * last time, the migration got executed (originalHighWater).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'next',
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
    '8f2b8000473f4e86b592410699ccc999' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Position the iterator to the following row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'fetchNextRow',
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
    'ddf71fe0ae9aa63816043b4031580198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if the incoming data is newer than what we\'ve previously imported.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row we\'re importing.
   *
   * @return bool
   *   TRUE if the highwater value in the row is greater than our current value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'aboveHighwater',
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
    'abdcc801bc13a5e546668c869ce52b14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the incoming row has changed since our last import.
   *
   * @param \\Drupal\\migrate\\Row $row
   *   The row we\'re importing.
   *
   * @return bool
   *   TRUE if the row has changed otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'rowChanged',
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
    'd6727fc70db0e9e894c1eafc7edc8e1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the currentSourceIds data member.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getCurrentIds',
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
    '055423b353bc26dc83450d3cea5b163b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the source count.
   *
   * Return a count of available source records, from the cache if appropriate.
   * Returns -1 if the source is not countable.
   *
   * @param bool $refresh
   *   (optional) Whether or not to refresh the count. Defaults to FALSE. Not
   *   all implementations support the reset flag. In such instances this
   *   parameter is ignored and the result of calling the method will always be
   *   up to date.
   *
   * @return int
   *   The count.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'count',
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
    'f60808aaf655d26611b51df6e85b9e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cache object.
   *
   * @return \\Drupal\\Core\\Cache\\CacheBackendInterface
   *   The cache object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getCache',
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
    'd0f5b7b411f29244a808fd62aea9a5f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the source count checking if the source is countable or using the
   * iterator_count function.
   *
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'doCount',
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
    '5e91dbd69009e2bafecdc807d906f667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the high water storage object.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   *   The storage object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getHighWaterStorage',
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
    '92b5317bc68a38391c49af7825b7f7ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current value of the high water mark.
   *
   * The high water mark defines a timestamp stating the time the import was last
   * run. If the mark is set, only content with a higher timestamp will be
   * imported.
   *
   * @return int|null
   *   A Unix timestamp representing the high water mark, or NULL if no high
   *   water mark has been stored.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getHighWater',
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
    '764ef4a159472fbddafd1af0f185b0c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Save the new high water mark.
   *
   * @param int $high_water
   *   The high water timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'saveHighWater',
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
    '4e9da647ee1b2aec013927ec1b39385e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get information on the property used as the high watermark.
   *
   * Array of \'name\' & (optional) db \'alias\' properties used for high watermark.
   *
   * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase::initializeIterator()
   *
   * @return array
   *   The property used as the high watermark.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getHighWaterProperty',
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
    '9a5a036d648bc671803961f6062ad4e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the name of the field used as the high watermark.
   *
   * The name of the field qualified with an alias if available.
   *
   * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase::initializeIterator()
   *
   * @return string|null
   *   The name of the field for the high water mark, or NULL if not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'getHighWaterField',
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
    '33ad8003eb883f686a04c82529860525' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'preRollback',
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
    'e606f64789bfaae75208537d30d04f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
         'functionName' => 'postRollback',
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
    'a42795744a14049ad76683613a73190e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'migraterollbackevent' => 'Drupal\\migrate\\Event\\MigrateRollbackEvent',
          'rollbackawareinterface' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'migrateexception' => 'Drupal\\migrate\\MigrateException',
          'migrateskiprowexception' => 'Drupal\\migrate\\MigrateSkipRowException',
          'migrateidmapinterface' => 'Drupal\\migrate\\Plugin\\MigrateIdMapInterface',
          'migratesourceinterface' => 'Drupal\\migrate\\Plugin\\MigrateSourceInterface',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase',
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