<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Sql/TableMappingInterface.php-1624732867',
   'data' => 
  array (
    '2f05cdaab88d07c16e107d91c62f8347' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common interface for mapping field columns to SQL tables.
 *
 * Warning: using methods provided here should be done only when writing code
 * that is explicitly targeting a SQL-based entity storage. Typically this API
 * is used by SQL storage classes, or other SQL-specific code like the Views
 * integration code for the Entity SQL storage. Another example of legal usage
 * of this API is when needing to write a query that \\Drupal::entityQuery() does
 * not support. Always retrieve entity identifiers and use them to load entities
 * instead of accessing data stored in the database directly. Any other usage
 * circumvents the entity system and is strongly discouraged, at least when
 * writing contributed code.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
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
    'c51c2968c14fc1a66b281849f06ca858' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A property that represents delta used in entity query conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
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
    '6cafdae3fa5719bca09effbda05a7bc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of table names for this mapping.
   *
   * @return string[]
   *   An array of table names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getTableNames',
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
    'a0f59b723ac522f9d80dc5425bcedf0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of all database columns for a given table.
   *
   * @param string $table_name
   *   The name of the table to return the columns for.
   *
   * @return string[]
   *   An array of database column names for this table. Both field columns and
   *   extra columns are returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getAllColumns',
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
    '503fefc96c7f7bdd97aa2b0e49780360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of names for entity fields stored in the specified table.
   *
   * The return list is contains the entity field names, not database field
   * (i.e. column) names. To get the mapping of specific entity field to
   * database columns use ::getColumnNames().
   *
   * @param string $table_name
   *   The name of the table to return the field names for.
   *
   * @return string[]
   *   An array of field names for the given table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getFieldNames',
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
    '6237682bc8a7ece51e7909b1840c5f51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a mapping of field columns to database columns for a given field.
   *
   * @param string $field_name
   *   The name of the entity field to return the column mapping for.
   *
   * @return string[]
   *   The keys of this array are the keys of the array returned by
   *   FieldStorageDefinitionInterface::getColumns() while the respective values
   *   are the names of the database columns for this table mapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getColumnNames',
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
    '441d30dcd39132224c65e4cdf455e578' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of extra database columns, which store denormalized data.
   *
   * These database columns do not belong to any entity fields. Any normalized
   * data that is stored should be associated with an entity field.
   *
   * @param string $table_name
   *   The name of the table to return the columns for.
   *
   * @return string[]
   *   An array of column names for the given table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getExtraColumns',
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
    '143c00aded9aca60372c48fe7d8a2f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the list of columns that can not be used as field type columns.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getReservedColumns',
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
    '2f73f459d1244af66f3bfc2f53809e61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a column name for a field property.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   * @param string $property_name
   *   The name of the property.
   *
   * @return string
   *   A string containing a generated column name for a field data table that is
   *   unique among all other fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getFieldColumnName',
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
    '7295076b6f47d37218cf77978618f645' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the table name for a given column.
   *
   * @param string $field_name
   *   The name of the entity field to return the column mapping for.
   *
   * @return string
   *   Table name for the given field.
   *
   * @throws \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorageException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Sql',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Sql\\TableMappingInterface',
         'functionName' => 'getFieldTableName',
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