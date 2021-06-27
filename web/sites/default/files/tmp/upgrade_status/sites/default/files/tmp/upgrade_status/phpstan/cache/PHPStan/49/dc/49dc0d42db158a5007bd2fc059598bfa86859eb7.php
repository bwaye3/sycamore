<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/ContentEntityTypeInterface.php-1624732867',
   'data' => 
  array (
    'df854ad056352e8281932fce19e665d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for a content entity type and its metadata.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
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
    '3227e42612672f79077580c90ed20611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of entity revision metadata keys.
   *
   * @param bool $include_backwards_compatibility_field_names
   *   (optional and deprecated) Whether to provide the revision keys on a
   *   best-effort basis by looking at the base fields defined by the entity
   *   type. Note that this parameter will be removed in Drupal 9.0.0. Defaults
   *   to TRUE.
   *
   * @return array
   *   An array describing how the Field API can extract revision metadata
   *   information of this entity type:
   *   - revision_log_message: The name of the property that contains description
   *     of the changes that were made in the current revision.
   *   - revision_user: The name of the property that contains the user ID of
   *     the author of the current revision.
   *   - revision_created: The name of the property that contains the timestamp
   *     of the current revision.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
         'functionName' => 'getRevisionMetadataKeys',
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
    '1e7019bdac3da43a6481c2ef70bc75bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific entity revision metadata key.
   *
   * @param string $key
   *   The name of the entity revision metadata key to return.
   *
   * @return string|bool
   *   The entity revision metadata key, or FALSE if it does not exist.
   *
   * @see self::getRevisionMetadataKeys()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
         'functionName' => 'getRevisionMetadataKey',
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
    'c9cd907362bb526c88b6b2866089650b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if a given entity revision metadata key exists.
   *
   * @param string $key
   *   The name of the entity revision metadata key to check.
   *
   * @return bool
   *   TRUE if a given entity revision metadata key exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
         'functionName' => 'hasRevisionMetadataKey',
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
    '11f3e8905baf962b9823f9242d4da488' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a revision metadata key.
   *
   * @param string $key
   *   The name of the entity revision metadata key to set.
   * @param string|null $field_name
   *   The name of the entity field key to use for the revision metadata key. If
   *   NULL is passed, the value of the revision metadata key is unset.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
         'functionName' => 'setRevisionMetadataKey',
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