<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/EntityPermissionProvider.php-1624732871',
   'data' => 
  array (
    '12533efb47bff00bdf46f80f39f763c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides generic entity permissions.
 *
 * Intended for content entity types, since config entity types usually rely
 * on a single "administer" permission.
 *
 * Provided permissions:
 * - The declared "admin_permission" of the entity type (or
 *   "administer $entity_type" if the entity type does not declare an
 *   administrative permission)
 * - access $entity_type overview
 * - view own unpublished $entity_type
 * - view ($bundle) $entity_type
 * - update (own|any) ($bundle) $entity_type
 * - duplicate (own|any) ($bundle) $entity_type
 * - delete (own|any) ($bundle) $entity_type
 * - create $bundle $entity_type
 *
 * Does not provide "view own ($bundle) $entity_type" permissions, because
 * they require caching pages per user. Please use
 * \\Drupal\\entity\\UncacheableEntityPermissionProvider if those permissions
 * are necessary.
 *
 * Example annotation:
 * @code
 *  handlers = {
 *    "access" = "Drupal\\entity\\EntityAccessControlHandler",
 *    "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
 *  }
 * @endcode
 *
 * @see \\Drupal\\entity\\EntityAccessControlHandler
 * @see \\Drupal\\entity\\EntityPermissions
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\entity\\EntityPermissionProvider',
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
    'e7378484f256d869275442e21a1993d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds permissions for the entity_type granularity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   The permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\entity\\EntityPermissionProvider',
         'functionName' => 'buildEntityTypePermissions',
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
    '5065f230ac56b1edb4c838c62ebf8f3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds permissions for the bundle granularity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type.
   *
   * @return array
   *   The permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\entity\\EntityPermissionProvider',
         'functionName' => 'buildBundlePermissions',
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