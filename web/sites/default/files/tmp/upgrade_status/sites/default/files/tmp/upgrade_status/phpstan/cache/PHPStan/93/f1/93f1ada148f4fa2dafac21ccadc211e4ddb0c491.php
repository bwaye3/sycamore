<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/StatementInterface.php-1624732867',
   'data' => 
  array (
    '1f540f5ff77cfe487c3c66fda2f6af15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a prepared statement.
 *
 * Child implementations should either extend PDOStatement:
 * @code
 * class Drupal\\Core\\Database\\Driver\\oracle\\Statement extends PDOStatement implements Drupal\\Core\\Database\\StatementInterface {}
 * @endcode
 * or define their own class. If defining their own class, they will also have
 * to implement either the Iterator or IteratorAggregate interface before
 * Drupal\\Core\\Database\\StatementInterface:
 * @code
 * class Drupal\\Core\\Database\\Driver\\oracle\\Statement implements Iterator, Drupal\\Core\\Database\\StatementInterface {}
 * @endcode
 *
 * @ingroup database
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
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
    '929abc33e4c92860bade800b08cf35be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes a prepared statement
   *
   * @param $args
   *   An array of values with as many elements as there are bound parameters in
   *   the SQL statement being executed. This can be NULL.
   * @param $options
   *   An array of options for this query.
   *
   * @return
   *   TRUE on success, or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'execute',
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
    '05fd19771fdea0180fa3f97cdc07fb35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the query string of this statement.
   *
   * @return
   *   The query string, in its form with placeholders.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'getQueryString',
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
    '5b00b4cbce8fdb0f1ee10e359a54ed56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of rows affected by the last SQL statement.
   *
   * @return
   *   The number of rows affected by the last DELETE, INSERT, or UPDATE
   *   statement executed or throws \\Drupal\\Core\\Database\\RowCountException
   *   if the last executed statement was SELECT.
   *
   * @throws \\Drupal\\Core\\Database\\RowCountException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'rowCount',
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
    '429f72e7867b1b76c29a637bd3a6b45e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the default fetch mode for this statement.
   *
   * See http://php.net/manual/pdo.constants.php for the definition of the
   * constants used.
   *
   * @param $mode
   *   One of the PDO::FETCH_* constants.
   * @param $a1
   *   An option depending of the fetch mode specified by $mode:
   *   - for PDO::FETCH_COLUMN, the index of the column to fetch
   *   - for PDO::FETCH_CLASS, the name of the class to create
   *   - for PDO::FETCH_INTO, the object to add the data to
   * @param $a2
   *   If $mode is PDO::FETCH_CLASS, the optional arguments to pass to the
   *   constructor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'setFetchMode',
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
    'f594d87dc6e92d44cf6b84237debbeea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches the next row from a result set.
   *
   * See http://php.net/manual/pdo.constants.php for the definition of the
   * constants used.
   *
   * @param $mode
   *   One of the PDO::FETCH_* constants.
   *   Default to what was specified by setFetchMode().
   * @param $cursor_orientation
   *   Not implemented in all database drivers, don\'t use.
   * @param $cursor_offset
   *   Not implemented in all database drivers, don\'t use.
   *
   * @return
   *   A result, formatted according to $mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetch',
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
    'a8b215bd4a67d1201944f1909ee084cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a single field from the next record of a result set.
   *
   * @param $index
   *   The numeric index of the field to return. Defaults to the first field.
   *
   * @return
   *   A single field from the next record, or FALSE if there is no next record.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchField',
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
    '03ef41c0a5078b90af377db76903be54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches the next row and returns it as an object.
   *
   * The object will be of the class specified by StatementInterface::setFetchMode()
   * or stdClass if not specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchObject',
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
    '3c96046c14391752acd3748288c211d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fetches the next row and returns it as an associative array.
   *
   * This method corresponds to PDOStatement::fetchObject(), but for associative
   * arrays. For some reason PDOStatement does not have a corresponding array
   * helper method, so one is added.
   *
   * @return
   *   An associative array, or FALSE if there is no next row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchAssoc',
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
    '77fdc21e2816aafa01e7d0cd0aa108c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array containing all of the result set rows.
   *
   * @param $mode
   *   One of the PDO::FETCH_* constants.
   * @param $column_index
   *   If $mode is PDO::FETCH_COLUMN, the index of the column to fetch.
   * @param $constructor_arguments
   *   If $mode is PDO::FETCH_CLASS, the arguments to pass to the constructor.
   *
   * @return
   *   An array of results.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchAll',
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
    '85f21671e40d5701d316ba9576bd6f94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an entire single column of a result set as an indexed array.
   *
   * Note that this method will run the result set to the end.
   *
   * @param $index
   *   The index of the column number to fetch.
   *
   * @return
   *   An indexed array, or an empty array if there is no result set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchCol',
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
    'aebcdbf0841b9140520e8625f674f095' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entire result set as a single associative array.
   *
   * This method is only useful for two-column result sets. It will return an
   * associative array where the key is one column from the result set and the
   * value is another field. In most cases, the default of the first two columns
   * is appropriate.
   *
   * Note that this method will run the result set to the end.
   *
   * @param $key_index
   *   The numeric index of the field to use as the array key.
   * @param $value_index
   *   The numeric index of the field to use as the array value.
   *
   * @return
   *   An associative array, or an empty array if there is no result set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchAllKeyed',
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
    'a213da05addb19ca0e593a02da52ebdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the result set as an associative array keyed by the given field.
   *
   * If the given key appears multiple times, later records will overwrite
   * earlier ones.
   *
   * @param $key
   *   The name of the field on which to index the array.
   * @param $fetch
   *   The fetchmode to use. If set to PDO::FETCH_ASSOC, PDO::FETCH_NUM, or
   *   PDO::FETCH_BOTH the returned value with be an array of arrays. For any
   *   other value it will be an array of objects. By default, the fetch mode
   *   set for the query will be used.
   *
   * @return
   *   An associative array, or an empty array if there is no result set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\StatementInterface',
         'functionName' => 'fetchAllAssoc',
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