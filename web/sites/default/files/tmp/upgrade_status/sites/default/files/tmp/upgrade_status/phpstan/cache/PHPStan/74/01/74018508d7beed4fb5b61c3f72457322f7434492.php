<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityInterface.php-1624732867',
   'data' => 
  array (
    'bcbee3c8a73db07a72a77a94cb4240eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a common interface for all entity objects.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
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
    '80ed5fcc11cce54797d9a436ec8b5b2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity UUID (Universally Unique Identifier).
   *
   * The UUID is guaranteed to be unique and can be used to identify an entity
   * across multiple systems.
   *
   * @return string|null
   *   The UUID of the entity, or NULL if the entity does not have one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'uuid',
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
    'bf90f64549b82ad460e9d2f7ec3a831a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the identifier.
   *
   * @return string|int|null
   *   The entity identifier, or NULL if the object does not yet have an
   *   identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'id',
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
    '57d59b8a23a1a6491b603bfddb325714' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the language of the entity.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface
   *   The language object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'language',
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
    'acc323c158d6b0e2af77bb8b6eb2a0eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the entity is new.
   *
   * Usually an entity is new if no ID exists for it yet. However, entities may
   * be enforced to be new with existing IDs too.
   *
   * @return bool
   *   TRUE if the entity is new, or FALSE if the entity has already been saved.
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::enforceIsNew()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'isNew',
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
    'ecf330701cfd66b6b581b4ee5df9a253' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enforces an entity to be new.
   *
   * Allows migrations to create entities with pre-defined IDs by forcing the
   * entity to be new before saving.
   *
   * @param bool $value
   *   (optional) Whether the entity should be forced to be new. Defaults to
   *   TRUE.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::isNew()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'enforceIsNew',
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
    'a6f40b1b6a17df403c4a38e977d7cac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the ID of the type of the entity.
   *
   * @return string
   *   The entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
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
    '83f5a4e3b5c7aef472f3ba442fa56923' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the bundle of the entity.
   *
   * @return string
   *   The bundle of the entity. Defaults to the entity type ID if the entity
   *   type does not make use of different bundles.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'bundle',
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
    'bdb542a3969005542a7ead12bf26bb45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label of the entity.
   *
   * @return string|null
   *   The label of the entity, or NULL if there is no label defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'label',
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
    '3e3233d86ed2d8f8c469797c743490e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URL object for the entity.
   *
   * @param string $rel
   *   The link relationship type, for example: canonical or edit-form.
   * @param array $options
   *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
   *   the available options.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL object.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Core\\Entity\\EntityInterface::toUrl() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Entity\\EntityInterface::toUrl
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'urlInfo',
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
    'cee91a568b63f2ab16fb8e9150e4e624' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URL object for the entity.
   *
   * The entity must have an id already. Content entities usually get their IDs
   * by saving them.
   *
   * URI templates might be set in the links array in an annotation, for
   * example:
   * @code
   * links = {
   *   "canonical" = "/node/{node}",
   *   "edit-form" = "/node/{node}/edit",
   *   "version-history" = "/node/{node}/revisions"
   * }
   * @endcode
   * or specified in a callback function set like:
   * @code
   * uri_callback = "comment_uri",
   * @endcode
   * If the path is not set in the links array, the uri_callback function is
   * used for setting the path. If this does not exist and the link relationship
   * type is canonical, the path is set using the default template:
   * entity/entityType/id.
   *
   * @param string $rel
   *   The link relationship type, for example: canonical or edit-form.
   * @param array $options
   *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
   *   the available options.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL object.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
   * @throws \\Drupal\\Core\\Entity\\Exception\\UndefinedLinkTemplateException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'toUrl',
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
    'e5ce4b08843cd13151060e9314b72030' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the public URL for this entity.
   *
   * @param string $rel
   *   The link relationship type, for example: canonical or edit-form.
   * @param array $options
   *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
   *   the available options.
   *
   * @return string
   *   The URL for this entity.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Please use toUrl() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Entity\\EntityInterface::toUrl
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'url',
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
    'd6fb0566210575e61b37d96d9828a5db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deprecated way of generating a link to the entity. See toLink().
   *
   * @param string|null $text
   *   (optional) The link text for the anchor tag as a translated string.
   *   If NULL, it will use the entity\'s label. Defaults to NULL.
   * @param string $rel
   *   (optional) The link relationship type. Defaults to \'canonical\'.
   * @param array $options
   *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
   *   the available options.
   *
   * @return string
   *   An HTML string containing a link to the entity.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Core\\EntityInterface::toLink()->toString() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Entity\\EntityInterface::toLink()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'link',
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
    'c14d1307c3ef10297db31d092273487d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the HTML for a link to this entity.
   *
   * @param string|null $text
   *   (optional) The link text for the anchor tag as a translated string.
   *   If NULL, it will use the entity\'s label. Defaults to NULL.
   * @param string $rel
   *   (optional) The link relationship type. Defaults to \'canonical\'.
   * @param array $options
   *   See \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute() for
   *   the available options.
   *
   * @return \\Drupal\\Core\\Link
   *   A Link to the entity.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityMalformedException
   * @throws \\Drupal\\Core\\Entity\\Exception\\UndefinedLinkTemplateException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'toLink',
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
    'ce9f3b6f737b97ec997b686889442098' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if a link template exists for a given key.
   *
   * @param string $key
   *   The link type.
   *
   * @return bool
   *   TRUE if the link template exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'hasLinkTemplate',
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
    'a8c7aacecc6f64a8ada3a848c72625c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of URI relationships supported by this entity.
   *
   * @return string[]
   *   An array of link relationships supported by this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'uriRelationships',
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
    '715d3f5abfa18adfa914605f2f482d9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads an entity.
   *
   * @param mixed $id
   *   The id of the entity to load.
   *
   * @return static|null
   *   The entity object or NULL if there is no entity with the given ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'load',
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
    '3e7ee972c5fce3dd7d264e6aaf09248b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads one or more entities.
   *
   * @param array $ids
   *   An array of entity IDs, or NULL to load all entities.
   *
   * @return static[]
   *   An array of entity objects indexed by their IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'loadMultiple',
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
    'cf38f1446911eb1b489d118f200f5482' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new entity object, without permanently saving it.
   *
   * @param array $values
   *   (optional) An array of values to set, keyed by property name. If the
   *   entity type has bundles, the bundle key has to be specified.
   *
   * @return static
   *   The entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'create',
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
    'b57b0ee319de91a7e41e3eef7dd4d81a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves an entity permanently.
   *
   * When saving existing entities, the entity is assumed to be complete,
   * partial updates of entities are not supported.
   *
   * @return int
   *   Either SAVED_NEW or SAVED_UPDATED, depending on the operation performed.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   In case of failures an exception is thrown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'save',
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
    '634ab2eec353d39dea47e9bba160d080' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes an entity permanently.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   In case of failures an exception is thrown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'delete',
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
    '0aede65e33b4dbc63c92d2aa0f928793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on an entity before the presave hook is invoked.
   *
   * Used before the entity is saved and before invoking the presave hook. Note
   * that in case of translatable content entities this callback is only fired
   * on their current translation. It is up to the developer to iterate
   * over all translations if needed. This is different from its counterpart in
   * the Field API, FieldItemListInterface::preSave(), which is fired on all
   * field translations automatically.
   * @todo Adjust existing implementations and the documentation according to
   *   https://www.drupal.org/node/2577609 to have a consistent API.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemListInterface::preSave()
   *
   * @throws \\Exception
   *   When there is a problem that should prevent saving the entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'preSave',
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
    '2ecc3eaf58af727e0ff0aa9775142f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on a saved entity before the insert or update hook is invoked.
   *
   * Used after the entity is saved, but before invoking the insert or update
   * hook. Note that in case of translatable content entities this callback is
   * only fired on their current translation. It is up to the developer to
   * iterate over all translations if needed.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   * @param bool $update
   *   TRUE if the entity has been updated, or FALSE if it has been inserted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'postSave',
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
    'b099a178759bff644490c28075338fa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes the values of an entity before it is created.
   *
   * Load defaults for example.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   * @param mixed[] $values
   *   An array of values to set, keyed by property name. If the entity type has
   *   bundles the bundle key has to be specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'preCreate',
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
    '5341c71dadf97d40a87a2201e1016bd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on a created entity before hooks are invoked.
   *
   * Used after the entity is created, but before saving the entity and before
   * any of the presave hooks are invoked.
   *
   * See the @link entity_crud Entity CRUD topic @endlink for more information.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::create()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'postCreate',
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
    '983eab618a75a4f9d5bc6adbf90e2308' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on entities before they are deleted and before hooks are invoked.
   *
   * Used before the entities are deleted and before invoking the delete hook.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   An array of entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'preDelete',
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
    'e49055e3030cf4708891d6a8300b03f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on deleted entities before the delete hook is invoked.
   *
   * Used after the entities are deleted but before invoking the delete hook.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   An array of entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'postDelete',
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
    '39e30290bba7230d85d6ad4de1c65340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acts on loaded entities.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage object.
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   An array of entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'postLoad',
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
    'e709b94d27b32a044b1a76cc6237b135' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a duplicate of the entity.
   *
   * @return static
   *   A clone of $this with all identifiers unset, so saving it inserts a new
   *   entity into the storage system.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'createDuplicate',
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
    '15a676d4b9b3dfac53f544321488d761' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type definition.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getEntityType',
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
    'b50cf753cb093a98dd7838756ba41d8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of entities referenced by this entity.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   An array of entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'referencedEntities',
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
    '99fba6fb931a7c8190013257ab1e1fb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the original ID.
   *
   * @return int|string|null
   *   The original ID, or NULL if no ID was set or for entity types that do not
   *   support renames.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getOriginalId',
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
    'aea804bf4da1de25f812090b72845b06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the cache tags that should be used to invalidate caches.
   *
   * This will not return additional cache tags added through addCacheTags().
   *
   * @return string[]
   *   Set of cache tags.
   *
   * @see \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface::addCacheTags()
   * @see \\Drupal\\Core\\Cache\\CacheableDependencyInterface::getCacheTags()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getCacheTagsToInvalidate',
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
    '782089f413aacbaecffe66198c79d106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the original ID.
   *
   * @param int|string|null $id
   *   The new ID to set as original ID. If the entity supports renames, setting
   *   NULL will prevent an update from being considered a rename.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'setOriginalId',
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
    '7c616170155701d7ad7d9cc618ee57b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of all property values.
   *
   * @return mixed[]
   *   An array of property values, keyed by property name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'toArray',
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
    'b0fc92779ebb4634e00c4534673a7846' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a typed data object for this entity object.
   *
   * The returned typed data object wraps this entity and allows dealing with
   * entities based on the generic typed data API.
   *
   * @return \\Drupal\\Core\\TypedData\\ComplexDataInterface
   *   The typed data object for this entity.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getTypedData',
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
    '187abfe17242276daec374cb59a71b9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the key that is used to store configuration dependencies.
   *
   * @return string
   *   The key to be used in configuration dependencies when storing
   *   dependencies on entities of this type.
   *
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getConfigDependencyKey()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getConfigDependencyKey',
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
    '903794584c85abde5e71c6bc9dd07820' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configuration dependency name.
   *
   * Configuration entities can depend on content and configuration entities.
   * They store an array of content and config dependency names in their
   * "dependencies" key.
   *
   * @return string
   *   The configuration dependency name.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getConfigDependencyName',
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
    '813d8557c3e73e841692312848dc009e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configuration target identifier for the entity.
   *
   * Used to supply the correct format for storing a reference targeting this
   * entity in configuration.
   *
   * @return string
   *   The configuration target identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityInterface',
         'functionName' => 'getConfigTarget',
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