<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Query/QueryInterface.php-1624732867',
   'data' => 
  array (
    '933bfb00922a4552fdf9f2c8dc1f28e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for entity queries.
 *
 * Never instantiate classes implementing this interface directly. Always use
 * the QueryFactory class.
 *
 * @ingroup database
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    'be9932e01255e008091750f83b408806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the ID of the entity type for this query.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'getEntityTypeId',
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
    'c2f7a766cbc551c9a3e796ad46be6581' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add a condition to the query or a condition group.
   *
   * For example, to find all entities containing both the Turkish \'merhaba\'
   * and the Polish \'siema\' within a \'greetings\' text field:
   * @code
   *   $entity_ids = \\Drupal::entityQuery($entity_type)
   *     ->condition(\'greetings\', \'merhaba\', \'=\', \'tr\')
   *     ->condition(\'greetings.value\', \'siema\', \'=\', \'pl\')
   *     ->execute();
   * @endcode
   *
   * @param $field
   *   Name of the field being queried. It must contain a field name, optionally
   *   followed by a column name. The column can be the reference property,
   *   usually "entity", for reference fields and that can be followed
   *   similarly by a field name and so on. Additionally, the target entity type
   *   can be specified by appending the ":target_entity_type_id" to "entity".
   *   Some examples:
   *   - nid
   *   - tags.value
   *   - tags
   *   - tags.entity.name
   *   - tags.entity:taxonomy_term.name
   *   - uid.entity.name
   *   - uid.entity:user.name
   *   "tags" "is the same as "tags.value" as value is the default column.
   *   If two or more conditions have the same field names they apply to the
   *   same delta within that field. In order to limit the condition to a
   *   specific item a numeric delta should be added between the field name and
   *   the column name.
   *   @code
   *   ->condition(\'tags.5.value\', \'news\')
   *   @endcode
   *   This will require condition to be satisfied on a specific delta of the
   *   field. The condition above will require the 6th value of the field to
   *   match the provided value. Further, it\'s possible to create a condition on
   *   the delta itself by using \'%delta\'. For example,
   *   @code
   *   ->condition(\'tags.%delta\', 5)
   *   @endcode
   *   will find only entities which have at least six tags. Finally, the
   *   condition on the delta itself accompanied with a condition on the value
   *   will require the value to appear in the specific delta range. For
   *   example,
   *   @code
   *   ->condition(\'tags.%delta\', 0, \'>\'))
   *   ->condition(\'tags.%delta.value\', \'news\'))
   *   @endcode
   *   will only find the "news" tag if it is not the first value. It should be
   *   noted that conditions on specific deltas and delta ranges are only
   *   supported when querying content entities.
   * @param $value
   *   The value for $field. In most cases, this is a scalar and it\'s treated as
   *   case-insensitive. For more complex operators, it is an array. The meaning
   *   of each element in the array is dependent on $operator.
   * @param $operator
   *   Possible values:
   *   - \'=\', \'<>\', \'>\', \'>=\', \'<\', \'<=\', \'STARTS_WITH\', \'CONTAINS\',
   *     \'ENDS_WITH\': These operators expect $value to be a literal of the
   *     same type as the column.
   *   - \'IN\', \'NOT IN\': These operators expect $value to be an array of
   *     literals of the same type as the column.
   *   - \'BETWEEN\': This operator expects $value to be an array of two literals
   *     of the same type as the column.
   * @param $langcode
   *   Language code (optional). If omitted, any translation satisfies the
   *   condition. However, if two or more conditions omit the langcode within
   *   one condition group then they are presumed to apply to the same
   *   translation. If within one condition group one condition has a langcode
   *   and another does not they are not presumed to apply to the same
   *   translation.
   *
   * @return $this
   * @see \\Drupal\\Core\\Entity\\Query\\andConditionGroup
   * @see \\Drupal\\Core\\Entity\\Query\\orConditionGroup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    '058f1786c8ab0a42eff8ac9cc11d88d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for a non-empty value on a field.
   *
   * @param $field
   *   Name of a field.
   * @param $langcode
   *   Language code (optional).
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    '70afa66dd200ffb91cfa9153cccfadd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for an empty field.
   *
   * @param $field
   *   Name of a field.
   * @param $langcode
   *   Language code (optional).
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    '43fdea006a9466f8f33d2bb8e060af5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables a pager for the query.
   *
   * @param $limit
   *   An integer specifying the number of elements per page.  If passed a false
   *   value (FALSE, 0, NULL), the pager is disabled.
   * @param $element
   *   An optional integer to distinguish between multiple pagers on one page.
   *   If not provided, one is automatically calculated.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'pager',
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
    'c13ee197e033320f9e38135578f7afb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param null $start
   * @param null $length
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    'b513beecbaab7c8bd55c41099d47c595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param $field
   *   Name of a field.
   * @param string $direction
   * @param $langcode
   *   Language code (optional).
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'sort',
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
    '87e9ca9c95575dbf3b40b81f18433f63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Makes this a count query.
   *
   * For count queries, execute() returns the number entities found.
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    '2a6e832ac5f4027ffd7c2c21f14f5641' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables sortable tables for this query.
   *
   * @param $headers
   *   An array of headers of the same structure as described in
   *   template_preprocess_table(). Use a \'specifier\' in place of a \'field\' to
   *   specify what to sort on. This can be an entity or a field as described
   *   in condition().
   *
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'tableSort',
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
    '0f4fda276f73d6fe692339f8d6284dd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @return $this
   *   The called object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'accessCheck',
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
    '187fd579ea2cf2579a45e29cef2ce7c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute the query.
   *
   * @return int|array
   *   Returns an integer for count queries or an array of ids. The values of
   *   the array are always entity ids. The keys will be revision ids if the
   *   entity supports revision and entity ids if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    'a222a6cdb57b144f4cdc4e20a4f030a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new group of conditions ANDed together.
   *
   * For example, consider a drawing entity type with a \'figures\' multi-value
   * field containing \'shape\' and \'color\' columns. To find all drawings
   * containing both a red triangle and a blue circle:
   * @code
   *   $query = \\Drupal::entityQuery(\'drawing\');
   *   $group = $query->andConditionGroup()
   *     ->condition(\'figures.color\', \'red\')
   *     ->condition(\'figures.shape\', \'triangle\');
   *   $query->condition($group);
   *   $group = $query->andConditionGroup()
   *     ->condition(\'figures.color\', \'blue\')
   *     ->condition(\'figures.shape\', \'circle\');
   *   $query->condition($group);
   *   $entity_ids = $query->execute();
   * @endcode
   *
   * @return \\Drupal\\Core\\Entity\\Query\\ConditionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    'ee31f6087f18f6178f793d3f6b48c8a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new group of conditions ORed together.
   *
   * For example, consider a map entity with an \'attributes\' field
   * containing \'building_type\' and \'color\' columns.  To find all green and
   * red bikesheds:
   * @code
   *   $query = \\Drupal::entityQuery(\'map\');
   *   $group = $query->orConditionGroup()
   *     ->condition(\'attributes.color\', \'red\')
   *     ->condition(\'attributes.color\', \'green\');
   *   $entity_ids = $query
   *     ->condition(\'attributes.building_type\', \'bikeshed\')
   *     ->condition($group)
   *     ->execute();
   * @endcode
   * Note that this particular example can be simplified:
   * @code
   *   $entity_ids = $query
   *     ->condition(\'attributes.color\', array(\'red\', \'green\'))
   *     ->condition(\'attributes.building_type\', \'bikeshed\')
   *     ->execute();
   * @endcode
   *
   * @return \\Drupal\\Core\\Entity\\Query\\ConditionInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
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
    '3f20d984fec315c368659da5485e3355' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries the current revision.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'currentRevision',
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
    '1f4c8f15a99aece79015bc90f1e88259' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries the latest revision.
   *
   * The latest revision is the most recent revision of an entity. This will be
   * either the default revision, or a pending revision if one exists and it is
   * newer than the default.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'latestRevision',
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
    'd10b42f99eca504a2c6228ecfcd49d89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries all the revisions.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
          'alterableinterface' => 'Drupal\\Core\\Database\\Query\\AlterableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\QueryInterface',
         'functionName' => 'allRevisions',
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