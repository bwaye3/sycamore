<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/TranslatableRevisionableStorageInterface.php-1624732867',
   'data' => 
  array (
    '04b02b9b740a794c80dc2d911d6d948b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A storage that supports translatable and revisionable entity types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
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
    'e7d419a6191aca64e7e3c57c9f4c9658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new revision starting off from the specified entity object.
   *
   * When dealing with a translatable entity, this will merge the default
   * revision with the active translation of the passed entity.
   *
   * @param \\Drupal\\Core\\Entity\\RevisionableInterface $entity
   *   The revisionable entity object being modified.
   * @param bool $default
   *   (optional) Whether the new revision should be marked as default. Defaults
   *   to TRUE.
   * @param bool|null $keep_untranslatable_fields
   *   (optional) Whether untranslatable field values should be kept or copied
   *   from the default revision when generating a merged revision. Defaults to
   *   TRUE if the provided entity is the default translation and untranslatable
   *   fields should only affect the default translation, FALSE otherwise.
   *
   * @return \\Drupal\\Core\\Entity\\TranslatableRevisionableInterface
   *   A new translatable entity revision object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
         'functionName' => 'createRevision',
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
    'ed289a65924fe2e62f6e5d201bcecb3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the latest revision affecting the specified translation.
   *
   * @param int|string $entity_id
   *   The entity identifier.
   * @param string $langcode
   *   The language code of the translation.
   *
   * @return int|string|null
   *   A revision ID or NULL if no revision affecting the specified translation
   *   could be found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\TranslatableRevisionableStorageInterface',
         'functionName' => 'getLatestTranslationAffectedRevisionId',
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