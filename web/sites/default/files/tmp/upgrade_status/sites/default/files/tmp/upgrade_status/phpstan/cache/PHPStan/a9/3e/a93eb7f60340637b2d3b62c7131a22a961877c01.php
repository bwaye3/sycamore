<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Query/ConditionInterface.php-1624732867',
   'data' => 
  array (
    '02fa8c9241c4aea7cde1fbc61c0c9a6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for a conditional clause in a query.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
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
    'ae82757d204afac1976ae5e7145cb13a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function: builds the most common conditional clauses.
   *
   * This method takes 1 to 3 parameters.
   *
   * If called with 1 parameter, it should be a ConditionInterface that in
   * itself forms a valid where clause. Use e.g. to build clauses with nested
   * AND\'s and OR\'s.
   *
   * If called with 2 parameters, they are taken as $field and $value with
   * $operator having a value of =.
   *
   * Do not use this method to test for NULL values. Instead, use
   * QueryConditionInterface::isNull() or QueryConditionInterface::isNotNull().
   *
   * To improve readability, the operators EXISTS and NOT EXISTS have their own
   * utility method defined.
   *
   * Drupal considers LIKE case insensitive and the following is often used
   * to tell the database that case insensitive equivalence is desired:
   * @code
   * \\Drupal::database()->select(\'users\')
   *  ->condition(\'name\', $injected_connection->escapeLike($name), \'LIKE\')
   * @endcode
   * Use \'LIKE BINARY\' instead of \'LIKE\' for case sensitive queries.
   *
   * Note: When using MySQL, the exact behavior also depends on the used
   * collation. if the field is set to binary, then a LIKE condition will also
   * be case sensitive and when a case insensitive collation is used, the =
   * operator will also be case insensitive.
   *
   * @param string|\\Drupal\\Core\\Database\\Query\\ConditionInterface $field
   *   The name of the field to check. This can also be QueryConditionInterface
   *   in itself. Use where(), if you would like to add a more complex condition
   *   involving operators or functions, or an already compiled condition.
   * @param string|array|\\Drupal\\Core\\Database\\Query\\SelectInterface|null $value
   *   The value to test the field against. In most cases, and depending on the
   *   operator, this will be a scalar or an array. As SQL accepts select
   *   queries on any place where a scalar value or set is expected, $value may
   *   also be a(n array of) SelectInterface(s). If $operator is a unary
   *   operator, e.g. IS NULL, $value will be ignored and should be null. If
   *   the operator requires a subquery, e.g. EXISTS, the $field will be ignored
   *   and $value should be a SelectInterface object.
   * @param string|null $operator
   *   The operator to use. Supported for all supported databases are at least:
   *   - The comparison operators =, <>, <, <=, >, >=.
   *   - The operators (NOT) BETWEEN, (NOT) IN, (NOT) EXISTS, (NOT) LIKE.
   *   Other operators (e.g. LIKE, BINARY) may or may not work. Defaults to =.
   *
   * @return $this
   *   The called object.
   *
   * @throws \\Drupal\\Core\\Database\\InvalidQueryException
   *   If passed invalid arguments, such as an empty array as $value.
   *
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::isNull()
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::isNotNull()
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::exists()
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::notExist()
   * @see \\Drupal\\Core\\Database\\Query\\ConditionInterface::where()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'condition',
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
    '1f688bbeb7a45947b188f4d3b5e52d47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an arbitrary WHERE clause to the query.
   *
   * @param string $snippet
   *   A portion of a WHERE clause as a prepared statement. It must use named
   *   placeholders, not ? placeholders. The caller is responsible for providing
   *   unique placeholders that do not interfere with the placeholders generated
   *   by this QueryConditionInterface object.
   * @param array $args
   *   An associative array of arguments keyed by the named placeholders.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'where',
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
    'd8177a1a92eb1ac815e9047c09067421' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition that the specified field be NULL.
   *
   * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $field
   *   The name of the field or a subquery to check.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'isNull',
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
    '3d0c72e6198f95bc3a5c3725d449c8d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition that the specified field be NOT NULL.
   *
   * @param string|\\Drupal\\Core\\Database\\Query\\SelectInterface $field
   *   The name of the field or a subquery to check.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'isNotNull',
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
    'c2447c66045dc51c51a5a0c090fa69b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition that the specified subquery returns values.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
   *   The subquery that must contain results.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'exists',
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
    '5ebc79b9e035488b5414e4215c9ba049' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition that the specified subquery returns no values.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $select
   *   The subquery that must not contain results.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'notExists',
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
    '84920f1805f12ab189dbbd9e5b1cab3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a condition that is always false.
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
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'alwaysFalse',
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
    'ef129046713add50623e72bf46a657b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the, possibly nested, list of conditions in this conditional clause.
   *
   * This method returns by reference. That allows alter hooks to access the
   * data structure directly and manipulate it before it gets compiled.
   *
   * The data structure that is returned is an indexed array of entries, where
   * each entry looks like the following:
   * @code
   * array(
   *   \'field\' => $field,
   *   \'value\' => $value,
   *   \'operator\' => $operator,
   * );
   * @endcode
   *
   * In the special case that $operator is NULL, the $field is taken as a raw
   * SQL snippet (possibly containing a function) and $value is an associative
   * array of placeholders for the snippet.
   *
   * There will also be a single array entry of #conjunction, which is the
   * conjunction that will be applied to the array, such as AND.
   *
   * @return array
   *   The, possibly nested, list of all conditions (by reference).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'conditions',
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
    '45de269189a2b8a42c5c8795360e928d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a complete list of all values to insert into the prepared statement.
   *
   * @return
   *   An associative array of placeholders and values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'arguments',
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
    'a9f4cae2139c2a9e10a6bfe8f08164f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compiles the saved conditions for later retrieval.
   *
   * This method does not return anything, but simply prepares data to be
   * retrieved via __toString() and arguments().
   *
   * @param $connection
   *   The database connection for which to compile the conditionals.
   * @param $queryPlaceholder
   *   The query this condition belongs to. If not given, the current query is
   *   used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'compile',
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
    '495cbeab0d4d5606d6d471b254b1196a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check whether a condition has been previously compiled.
   *
   * @return
   *   TRUE if the condition has been previously compiled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'compiled',
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
    'e0d94413345406c4fcd710e0a2494cca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an object holding a group of conditions.
   *
   * See andConditionGroup() and orConditionGroup() for more.
   *
   * @param $conjunction
   *   - AND (default): this is the equivalent of andConditionGroup().
   *   - OR: this is the equivalent of orConditionGroup().
   *
   * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
   *   An object holding a group of conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'conditionGroupFactory',
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
    'f5871513ae4a482ad644e219259717cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new group of conditions ANDed together.
   *
   * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'andConditionGroup',
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
    'c1f12f0d33d1d7dbcbfb5112df167942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new group of conditions ORed together.
   *
   * @return \\Drupal\\Core\\Database\\Query\\ConditionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ConditionInterface',
         'functionName' => 'orConditionGroup',
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