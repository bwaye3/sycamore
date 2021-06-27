<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/QueryAccess/QueryAccessHandlerInterface.php-1624732871',
   'data' => 
  array (
    'b0dd41dc81f77eb815eeb56d5e5a3f91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Query access handlers control access to entities in queries.
 *
 * An entity defines a query access handler in its annotation:
 * @code
 *   query_access = "\\Drupal\\entity\\QueryAccess\\QueryAccessHandler"
 * @code
 * The handler builds a set of conditions which are then applied to a query
 * to filter it. For example, if the user #22 only has access to view
 * their own entities, a uid = \'22\' condition will be built and applied.
 *
 * The following query types are supported:
 * - Entity queries with the $entity_type_id . \'_access\' tag.
 * - Views queries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\QueryAccessHandlerInterface',
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
    'eae4b9aaae5e7cf929bb499af6a0271b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the conditions for the given operation and user.
   *
   * The "entity.query_access.$entity_type_id" event is fired to allow
   * modules to alter the conditions.
   *
   * @param string $operation
   *   The access operation. Usually one of "view", "update", "duplicate",
   *   or "delete".
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user for which to restrict access, or NULL
   *   to assume the current user. Defaults to NULL.
   *
   * @return \\Drupal\\entity\\QueryAccess\\ConditionGroup
   *   The conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\QueryAccessHandlerInterface',
         'functionName' => 'getConditions',
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