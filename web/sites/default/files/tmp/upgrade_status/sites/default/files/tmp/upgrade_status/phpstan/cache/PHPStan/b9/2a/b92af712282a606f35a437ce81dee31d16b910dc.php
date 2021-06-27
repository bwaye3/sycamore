<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Query/SelectInterface.php-1624732867',
   'data' => 
  array (
    '3cb647307dc0df56822cd5790ae10e4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface definition for a Select Query object.
 *
 * @ingroup database
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
    '226c8b0af944584344dbf157be39f229' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the fields array for this query.
   *
   * Because this method returns by reference, alter hooks may edit the fields
   * array directly to make their changes. If just adding fields, however, the
   * use of addField() is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $fields =& $query->getFields();
   * @endcode
   *
   * @return
   *   A reference to the fields array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getFields',
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
    'd6ed0bf5dffbff9a78de51c59673dc6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the expressions array for this query.
   *
   * Because this method returns by reference, alter hooks may edit the expressions
   * array directly to make their changes. If just adding expressions, however, the
   * use of addExpression() is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $fields =& $query->getExpressions();
   * @endcode
   *
   * @return
   *   A reference to the expression array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getExpressions',
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
    '2ab1138dc74378471c331dbb9cb8e1f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the order by array for this query.
   *
   * Because this method returns by reference, alter hooks may edit the order-by
   * array directly to make their changes. If just adding additional ordering
   * fields, however, the use of orderBy() is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $fields =& $query->getOrderBy();
   * @endcode
   *
   * @return
   *   A reference to the expression array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getOrderBy',
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
    '66d6cc708d1b35417e90fede0f5d4554' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the group-by array for this query.
   *
   * Because this method returns by reference, alter hooks may edit the group-by
   * array directly to make their changes. If just adding additional grouping
   * fields, however, the use of groupBy() is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $fields =& $query->getGroupBy();
   * @endcode
   *
   * @return
   *   A reference to the group-by array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getGroupBy',
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
    'b12701442717d42c2b6f15a1fe889700' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the tables array for this query.
   *
   * Because this method returns by reference, alter hooks may edit the tables
   * array directly to make their changes. If just adding tables, however, the
   * use of the join() methods is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $tables =& $query->getTables();
   * @endcode
   *
   * @return
   *   A reference to the tables array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getTables',
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
    'c33a379820ed7b326cc0c1f2c74e2a78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the union queries for this query. This include
   * queries for UNION, UNION ALL, and UNION DISTINCT.
   *
   * Because this method returns by reference, alter hooks may edit the tables
   * array directly to make their changes. If just adding union queries,
   * however, the use of the union() method is preferred.
   *
   * Note that this method must be called by reference as well:
   *
   * @code
   * $fields =& $query->getUnion();
   * @endcode
   *
   * @return
   *   A reference to the union query array structure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getUnion',
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
    '76b0d07552b2adfca703cd51fe685883' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes characters that work as wildcard characters in a LIKE pattern.
   *
   * @param $string
   *   The string to escape.
   *
   * @return string
   *   The escaped string.
   *
   * @see \\Drupal\\Core\\Database\\Connection::escapeLike()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'escapeLike',
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
    'a52d119fb5a0c3edab27a7ff980daaf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes a field name string.
   *
   * Force all field names to be strictly alphanumeric-plus-underscore.
   * For some database drivers, it may also wrap the field name in
   * database-specific escape characters.
   *
   * @param string $string
   *   An unsanitized field name.
   *
   * @return
   *   The sanitized field name string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'escapeField',
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
    'a89810a300c1068c8793e8fe1196e15c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compiles and returns an associative array of the arguments for this prepared statement.
   *
   * @param $queryPlaceholder
   *   When collecting the arguments of a subquery, the main placeholder
   *   object should be passed as this parameter.
   *
   * @return
   *   An associative array of all placeholder arguments for this query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'getArguments',
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
    'b35d0742c6311bdb09c107a8f944a634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets this query to be DISTINCT.
   *
   * @param $distinct
   *   TRUE to flag this query DISTINCT, FALSE to disable it.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'distinct',
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
    '05e6f69d9d65b7959bb76ca9dd2e416f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a field to the list to be SELECTed.
   *
   * @param $table_alias
   *   The name of the table from which the field comes, as an alias. Generally
   *   you will want to use the return value of join() here to ensure that it is
   *   valid.
   * @param $field
   *   The name of the field.
   * @param $alias
   *   The alias for this field. If not specified, one will be generated
   *   automatically based on the $table_alias and $field. The alias will be
   *   checked for uniqueness, so the requested alias may not be the alias
   *   that is assigned in all cases.
   *
   * @return
   *   The unique alias that was assigned for this field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'addField',
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
    'a03451540b5b645d3e6990305e3e82b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add multiple fields from the same table to be SELECTed.
   *
   * This method does not return the aliases set for the passed fields. In the
   * majority of cases that is not a problem, as the alias will be the field
   * name. However, if you do need to know the alias you can call getFields()
   * and examine the result to determine what alias was created. Alternatively,
   * simply use addField() for the few fields you care about and this method for
   * the rest.
   *
   * @param $table_alias
   *   The name of the table from which the field comes, as an alias. Generally
   *   you will want to use the return value of join() here to ensure that it is
   *   valid.
   * @param $fields
   *   An indexed array of fields present in the specified table that should be
   *   included in this query. If not specified, $table_alias.* will be generated
   *   without any aliases.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
    '0d09940970db9928910fd91e9383399f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an expression to the list of "fields" to be SELECTed.
   *
   * An expression can be any arbitrary string that is valid SQL. That includes
   * various functions, which may in some cases be database-dependent. This
   * method makes no effort to correct for database-specific functions.
   *
   * @param $expression
   *   The expression string. May contain placeholders.
   * @param $alias
   *   The alias for this expression. If not specified, one will be generated
   *   automatically in the form "expression_#". The alias will be checked for
   *   uniqueness, so the requested alias may not be the alias that is assigned
   *   in all cases.
   * @param $arguments
   *   Any placeholder arguments needed for this expression.
   *
   * @return
   *   The unique alias that was assigned for this expression.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'addExpression',
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
    'ca1f9c56c894fc525660c8f69bf7625d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default Join against another table in the database.
   *
   * This method is a convenience method for innerJoin().
   *
   * @param $table
   *   The table against which to join. May be a string or another SelectQuery
   *   object. If a query object is passed, it will be used as a subselect.
   *   Unless the table name starts with the database / schema name and a dot
   *   it will be prefixed.
   * @param $alias
   *   The alias for the table. In most cases this should be the first letter
   *   of the table, or the first letter of each "word" in the table.
   * @param $condition
   *   The condition on which to join this table. If the join requires values,
   *   this clause should use a named placeholder and the value or values to
   *   insert should be passed in the 4th parameter. For the first table joined
   *   on a query, this value is ignored as the first table is taken as the base
   *   table. The token %alias can be used in this string to be replaced with
   *   the actual alias. This is useful when $alias is modified by the database
   *   system, for example, when joining the same table more than once.
   * @param $arguments
   *   An array of arguments to replace into the $condition of this join.
   *
   * @return
   *   The unique alias that was assigned for this table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'join',
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
    'e6d5a8cb85105f191343c9f06dd377b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inner Join against another table in the database.
   *
   * @param $table
   *   The table against which to join. May be a string or another SelectQuery
   *   object. If a query object is passed, it will be used as a subselect.
   *   Unless the table name starts with the database / schema name and a dot
   *   it will be prefixed.
   * @param $alias
   *   The alias for the table. In most cases this should be the first letter
   *   of the table, or the first letter of each "word" in the table.
   * @param $condition
   *   The condition on which to join this table. If the join requires values,
   *   this clause should use a named placeholder and the value or values to
   *   insert should be passed in the 4th parameter. For the first table joined
   *   on a query, this value is ignored as the first table is taken as the base
   *   table. The token %alias can be used in this string to be replaced with
   *   the actual alias. This is useful when $alias is modified by the database
   *   system, for example, when joining the same table more than once.
   * @param $arguments
   *   An array of arguments to replace into the $condition of this join.
   *
   * @return
   *   The unique alias that was assigned for this table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'innerJoin',
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
    '28d79f079bd60435319709dfcdd321d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Left Outer Join against another table in the database.
   *
   * @param $table
   *   The table against which to join. May be a string or another SelectQuery
   *   object. If a query object is passed, it will be used as a subselect.
   *   Unless the table name starts with the database / schema name and a dot
   *   it will be prefixed.
   * @param $alias
   *   The alias for the table. In most cases this should be the first letter
   *   of the table, or the first letter of each "word" in the table.
   * @param $condition
   *   The condition on which to join this table. If the join requires values,
   *   this clause should use a named placeholder and the value or values to
   *   insert should be passed in the 4th parameter. For the first table joined
   *   on a query, this value is ignored as the first table is taken as the base
   *   table. The token %alias can be used in this string to be replaced with
   *   the actual alias. This is useful when $alias is modified by the database
   *   system, for example, when joining the same table more than once.
   * @param $arguments
   *   An array of arguments to replace into the $condition of this join.
   *
   * @return
   *   The unique alias that was assigned for this table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'leftJoin',
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
    '7929aac9a1fdd85c6ecc740e1987e11c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Right Outer Join against another table in the database.
   *
   * @param $table
   *   The table against which to join. May be a string or another SelectQuery
   *   object. If a query object is passed, it will be used as a subselect.
   *   Unless the table name starts with the database / schema name and a dot
   *   it will be prefixed.
   * @param $alias
   *   The alias for the table. In most cases this should be the first letter
   *   of the table, or the first letter of each "word" in the table.
   * @param $condition
   *   The condition on which to join this table. If the join requires values,
   *   this clause should use a named placeholder and the value or values to
   *   insert should be passed in the 4th parameter. For the first table joined
   *   on a query, this value is ignored as the first table is taken as the base
   *   table. The token %alias can be used in this string to be replaced with
   *   the actual alias. This is useful when $alias is modified by the database
   *   system, for example, when joining the same table more than once.
   * @param $arguments
   *   An array of arguments to replace into the $condition of this join.
   *
   * @return
   *   The unique alias that was assigned for this table.
   *
   * @deprecated in drupal:8.1.0 and is removed from drupal:9.0.0. Instead,
   *   change the query to use leftJoin(). For instance:
   *   $injected_connection->query(\'A\')->rightJoin(\'B\') is identical to
   *   $injected_connection->query(\'B\')->leftJoin(\'A\'). This functionality has
   *   been deprecated because SQLite does not support it.
   *
   * @see https://www.drupal.org/node/2765249
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'rightJoin',
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
    '703e34410e3302efe0aa22b980a2c2d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Join against another table in the database.
   *
   * This method does the "hard" work of queuing up a table to be joined against.
   * In some cases, that may include dipping into the Schema API to find the necessary
   * fields on which to join.
   *
   * @param $type
   *   The type of join. Typically one one of INNER, LEFT OUTER, and RIGHT OUTER.
   * @param $table
   *   The table against which to join. May be a string or another SelectQuery
   *   object. If a query object is passed, it will be used as a subselect.
   *   Unless the table name starts with the database / schema name and a dot
   *   it will be prefixed.
   * @param $alias
   *   The alias for the table. In most cases this should be the first letter
   *   of the table, or the first letter of each "word" in the table. If omitted,
   *   one will be dynamically generated.
   * @param $condition
   *   The condition on which to join this table. If the join requires values,
   *   this clause should use a named placeholder and the value or values to
   *   insert should be passed in the 4th parameter. For the first table joined
   *   on a query, this value is ignored as the first table is taken as the base
   *   table. The token %alias can be used in this string to be replaced with
   *   the actual alias. This is useful when $alias is modified by the database
   *   system, for example, when joining the same table more than once.
   * @param $arguments
   *   An array of arguments to replace into the $condition of this join.
   *
   * @return
   *   The unique alias that was assigned for this table.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'addJoin',
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
    'e5d6f5141cdd2cf2a202f49bb0b1d9c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Orders the result set by a given field.
   *
   * If called multiple times, the query will order by each specified field in the
   * order this method is called.
   *
   * If the query uses DISTINCT or GROUP BY conditions, fields or expressions
   * that are used for the order must be selected to be compatible with some
   * databases like PostgreSQL. The PostgreSQL driver can handle simple cases
   * automatically but it is suggested to explicitly specify them. Additionally,
   * when ordering on an alias, the alias must be added before orderBy() is
   * called.
   *
   * @param $field
   *   The field on which to order. The field is escaped for security so only
   *   valid field and alias names are possible. To order by an expression, add
   *   the expression with addExpression() first and then use the alias to order
   *   on.
   *
   *   Example:
   *   @code
   *   $query->addExpression(\'SUBSTRING(thread, 1, (LENGTH(thread) - 1))\', \'order_field\');
   *   $query->orderBy(\'order_field\', \'ASC\');
   *   @endcode
   * @param $direction
   *   The direction to sort. Legal values are "ASC" and "DESC". Any other value
   *   will be converted to "ASC".
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'orderBy',
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
    '7085a3211734b2bd89073187a77fcd78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Orders the result set by a random value.
   *
   * This may be stacked with other orderBy() calls. If so, the query will order
   * by each specified field, including this one, in the order called. Although
   * this method may be called multiple times on the same query, doing so
   * is not particularly useful.
   *
   * Note: The method used by most drivers may not scale to very large result
   * sets. If you need to work with extremely large data sets, you may create
   * your own database driver by subclassing off of an existing driver and
   * implementing your own randomization mechanism. See
   *
   * http://jan.kneschke.de/projects/mysql/order-by-rand/
   *
   * for an example of such an alternate sorting mechanism.
   *
   * @return $this
   *   The called object
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'orderRandom',
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
    'ffa1a22f8669d083684fe19b80f05ea5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Restricts a query to a given range in the result set.
   *
   * If this method is called with no parameters, will remove any range
   * directives that have been set.
   *
   * @param $start
   *   The first record from the result set to return. If NULL, removes any
   *   range directives that are set.
   * @param $length
   *   The number of records to return from the result set.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'range',
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
    '020024cfd9c071f18d6fb737d1cd1d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add another Select query to UNION to this one.
   *
   * Union queries consist of two or more queries whose
   * results are effectively concatenated together. Queries
   * will be UNIONed in the order they are specified, with
   * this object\'s query coming first. Duplicate columns will
   * be discarded. All forms of UNION are supported, using
   * the second \'$type\' argument.
   *
   * Note: All queries UNIONed together must have the same
   * field structure, in the same order. It is up to the
   * caller to ensure that they match properly. If they do
   * not, an SQL syntax error will result.
   *
   * @param $query
   *   The query to UNION to this query.
   * @param $type
   *   The type of UNION to add to the query. Defaults to plain
   *   UNION.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'union',
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
    '094c2fec2f8a1794e9c60a671b1d5712' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Groups the result set by the specified field.
   *
   * @param $field
   *   The field on which to group. This should be the field as aliased.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'groupBy',
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
    '3605ded7e7494df6398918e142fdc0d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the equivalent COUNT query of this query as a new query object.
   *
   * @return \\Drupal\\Core\\Database\\Query\\SelectInterface
   *   A new SelectQuery object with no fields or expressions besides COUNT(*).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'countQuery',
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
    '14df4efe8e4977f0834ebaa0d3a0b557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if preExecute() has already been called on that object.
   *
   * @return
   *   TRUE is this query has already been prepared, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'isPrepared',
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
    'bbf42104405b8bab4cde3662f18e0b94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generic preparation and validation for a SELECT query.
   *
   * @return
   *   TRUE if the validation was successful, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'preExecute',
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
    'e9ad0d09770c8a2beed2c7b7c6e1752f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs the query against the database.
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface|null
   *   A prepared statement, or NULL if the query is not valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
    'bf828bc71b10bea6a482cfd8100f83ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to build most common HAVING conditional clauses.
   *
   * This method can take a variable number of parameters. If called with two
   * parameters, they are taken as $field and $value with $operator having a value
   * of IN if $value is an array and = otherwise.
   *
   * @param $field
   *   The name of the field to check. If you would like to add a more complex
   *   condition involving operators or functions, use having().
   * @param $value
   *   The value to test the field against. In most cases, this is a scalar. For more
   *   complex options, it is an array. The meaning of each element in the array is
   *   dependent on the $operator.
   * @param $operator
   *   The comparison operator, such as =, <, or >=. It also accepts more complex
   *   options such as IN, LIKE, or BETWEEN. Defaults to IN if $value is an array
   *   = otherwise.
   *
   * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingCondition',
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
    '93f3c9a9c99228b340045e1dfa0bc5aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of all conditions in the HAVING clause.
   *
   * This method returns by reference. That allows alter hooks to access the
   * data structure directly and manipulate it before it gets compiled.
   *
   * @return array
   *   An array of conditions.
   *
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::conditions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingConditions',
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
    'c9ad754b11aa3c3a2b31008e1e7b9d79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of all values to insert into the HAVING clause.
   *
   * @return array
   *   An associative array of placeholders and values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingArguments',
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
    'c9a1b239f1b5746b6eaea3a07aa51fe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an arbitrary HAVING clause to the query.
   *
   * @param $snippet
   *   A portion of a HAVING clause as a prepared statement. It must use named
   *   placeholders, not ? placeholders.
   * @param $args
   *   (optional) An associative array of arguments.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'having',
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
    '04d0569e159fcc1d62609a289025a5bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compiles the HAVING clause for later retrieval.
   *
   * @param $connection
   *   The database connection for which to compile the clause.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingCompile',
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
    '5cca4a77417831315c7a0b8a3fec94fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition in the HAVING clause that the specified field be NULL.
   *
   * @param $field
   *   The name of the field to check.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingIsNull',
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
    'd43943c84f8f680fecbad661a57c16bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition in the HAVING clause that the specified field be NOT NULL.
   *
   * @param $field
   *   The name of the field to check.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingIsNotNull',
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
    '2435ab9e1cf094948d13355177c682ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a HAVING condition that the specified subquery returns values.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
   *   The subquery that must contain results.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingExists',
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
    '5388fc01d60764f8fd7839b09fbb3980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a HAVING condition that the specified subquery returns no values.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
   *   The subquery that must contain results.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'havingNotExists',
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
    '13b6d8fca6be62ce7375fa71d74e1874' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clone magic method.
   *
   * Select queries have dependent objects that must be deep-cloned.  The
   * connection object itself, however, should not be cloned as that would
   * duplicate the connection itself.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => '__clone',
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
    '36519ca15accd676a2cee2af1e1f2205' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add FOR UPDATE to the query.
   *
   * FOR UPDATE prevents the rows retrieved by the SELECT statement from being
   * modified or deleted by other transactions until the current transaction
   * ends. Other transactions that attempt UPDATE, DELETE, or SELECT FOR UPDATE
   * of these rows will be blocked until the current transaction ends.
   *
   * @param $set
   *   IF TRUE, FOR UPDATE will be added to the query, if FALSE then it won\'t.
   *
   * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
         'functionName' => 'forUpdate',
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
    '567d656011099bafe82265531de47553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a string representation of how the query will be executed in SQL.
   *
   * @return string
   *   The Select Query object expressed as a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
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
  ),
));