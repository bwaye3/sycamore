<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/Plugin/Field/FieldFormatter/EntityReferenceFormatterBase.php-1624732867',
   'data' => 
  array (
    'b95610d457de5ae2eb1dd90b57e20c47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parent plugin for entity reference formatters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
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
    '00f61d4aa5c47f79d95b436f46eef20a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the referenced entities for display.
   *
   * The method takes care of:
   * - checking entity access,
   * - placing the entities in the language expected for display.
   * It is thus strongly recommended that formatters use it in their
   * implementation of viewElements($items) rather than dealing with $items
   * directly.
   *
   * For each entity, the EntityReferenceItem by which the entity is referenced
   * is available in $entity->_referringItem. This is useful for field types
   * that store additional values next to the reference itself.
   *
   * @param \\Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface $items
   *   The item list.
   * @param string $langcode
   *   The language code of the referenced entities to display.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   The array of referenced entities to display, keyed by delta.
   *
   * @see ::prepareView()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
         'functionName' => 'getEntitiesToView',
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
    '16b95d15c3178b36d6f90cb5f627fa31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see ::prepareView()
   * @see ::getEntitiestoView()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
         'functionName' => 'view',
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
    'eff1a5bfe4e57af0b165d95d8011d78b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Loads the entities referenced in that field across all the entities being
   * viewed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
         'functionName' => 'prepareView',
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
    'de2b628b6ad00f389d19ab1a765d31be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the entity referenced by an item needs to be loaded.
   *
   * @param \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem $item
   *   The item to check.
   *
   * @return bool
   *   TRUE if the entity needs to be loaded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
         'functionName' => 'needsEntityLoad',
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
    '8c7aead5b40b6f5b2ab5c59a049d04ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access to the given entity.
   *
   * By default, entity \'view\' access is checked. However, a subclass can choose
   * to exclude certain items from entity access checking by immediately
   * granting access.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to check.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   A cacheable access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'entityreferenceitem' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\Plugin\\Field\\FieldFormatter\\EntityReferenceFormatterBase',
         'functionName' => 'checkAccess',
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