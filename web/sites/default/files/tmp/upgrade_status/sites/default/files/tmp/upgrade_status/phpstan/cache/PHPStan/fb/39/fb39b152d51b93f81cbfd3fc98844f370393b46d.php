<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityTypeInterface.php-1624732867',
   'data' => 
  array (
    '920ae5c3d855773b158434da409db2cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for an entity type and its metadata.
 *
 * Entity type classes can provide docblock annotations. The entity type manager
 * will use these annotations to populate the entity type object with
 * properties.
 *
 * Additional properties can be defined by module implementations of
 * hook_entity_type_build(). Existing data can be altered in implementations of
 * hook_entity_type_alter(), which can also be used to fill in defaults.
 * Module-specific properties should be documented in the hook implementations
 * defining them.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
 * @see hook_entity_type_build()
 * @see hook_entity_type_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
    '41a90b9a6895e1646691d860975b0e62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum length of ID, in characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
    '2ba6b0dcf41b28a45d675b498198d81b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum length of bundle name, in characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
    '2fda48972391b881c349762bada96073' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets any arbitrary property.
   *
   * @param string $property
   *   The property to retrieve.
   *
   * @return mixed
   *   The value for that property, or NULL if the property does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'get',
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
    'f2af34ea45792366677a888ae287b51e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a value to an arbitrary property.
   *
   * @param string $property
   *   The property to use for the value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'set',
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
    '04a9f0a9698cdd5ffe44379ec86338e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the original entity type class.
   *
   * In case the class name was changed with setClass(), this will return
   * the initial value. Useful when trying to identify the entity type ID based
   * on the class.
   *
   * @return string
   *   The name of the original entity type class.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getOriginalClass',
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
    '8d7485a99decce2bfb5b336e9f0a6787' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of entity keys.
   *
   * @return array
   *   An array describing how the Field API can extract certain information
   *   from objects of this entity type:
   *   - id: The name of the property that contains the primary ID of the
   *     entity. Every entity object passed to the Field API must have this
   *     property and its value must be numeric.
   *   - revision: (optional) The name of the property that contains the
   *     revision ID of the entity. The Field API assumes that all revision IDs
   *     are unique across all entities of a type. If this entry is omitted
   *     the entities of this type are not revisionable.
   *   - bundle: (optional) The name of the property that contains the bundle
   *     name for the entity. The bundle name defines which set of fields are
   *     attached to the entity (e.g. what nodes call "content type"). This
   *     entry can be omitted if this entity type exposes a single bundle (such
   *     that all entities have the same collection of fields). The name of this
   *     single bundle will be the same as the entity type.
   *   - label: (optional) The name of the property that contains the entity
   *     label. For example, if the entity\'s label is located in
   *     $entity->subject, then \'subject\' should be specified here. If complex
   *     logic is required to build the label,
   *     \\Drupal\\Core\\Entity\\EntityInterface::label() should be used.
   *   - langcode: (optional) The name of the property that contains the
   *     language code. For instance, if the entity\'s language is located in
   *     $entity->langcode, then \'langcode\' should be specified here.
   *   - uuid: (optional) The name of the property that contains the universally
   *     unique identifier of the entity, which is used to distinctly identify
   *     an entity across different systems.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getKeys',
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
    'da23e49a7c14c73e558661bbe0f9147a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific entity key.
   *
   * @param string $key
   *   The name of the entity key to return.
   *
   * @return string|bool
   *   The entity key, or FALSE if it does not exist.
   *
   * @see self::getKeys()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getKey',
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
    '8bd5abc92668c49fd9673769acca7f03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if a given entity key exists.
   *
   * @param string $key
   *   The name of the entity key to check.
   *
   * @return bool
   *   TRUE if a given entity key exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasKey',
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
    '17d34eedfd280f98141748592533c796' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether entities should be statically cached.
   *
   * @return bool
   *   TRUE if static caching should be used; FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isStaticallyCacheable',
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
    'f8129eced81074ccf8c1799b92444553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the rendered output of entities should be cached.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isRenderCacheable',
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
    '4308e069e79493c4dabf99882e46200f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if the persistent cache of field data should be used.
   *
   * @todo Used by ContentEntityStorageBase only.
   *
   * The persistent cache should usually only be disabled if a higher level
   * persistent cache is available for the entity type.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isPersistentlyCacheable',
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
    '530a62d2fc77fe663ff2e51efe96a40a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if there is a handler for a given type.
   *
   * @param string $handler_type
   *   The type of handler to check.
   * @param string|false $nested
   *   (optional) The nested handler definition key, or FALSE if the handler
   *   does not have a nested definition. Defaults to FALSE.
   *
   * @return bool
   *   TRUE if a handler of this type exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasHandlerClass',
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
    '5940c9c3094f23c5ffe983e2511b8860' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param string $handler_type
   *   The handler type to get.
   * @param string|false $nested
   *   (optional) The nested handler definition key, or FALSE if the handler
   *   does not have a nested definition. Defaults to FALSE.
   *
   * @return array|string|null
   *   The handlers for a given type, or NULL if none exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getHandlerClass',
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
    'a94f0c051784a2f8bb532b2436eaca9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of handlers.
   *
   * @return array
   *   An associative array where the keys are the names of different handler
   *   types (listed below) and the values are the names of the classes that
   *   implement that handler:
   *   - storage: The name of the class used to load the objects. The class must
   *     implement \\Drupal\\Core\\Entity\\EntityStorageInterface.
   *   - form: An associative array where the keys are the names of the
   *     different form operations (such as \'create\', \'edit\', or \'delete\') and
   *     the values are the names of the handler classes for those
   *     operations. The name of the operation is passed also to the form
   *     handler\'s constructor, so that one class can be used for multiple
   *     entity forms when the forms are similar. The classes must implement
   *     \\Drupal\\Core\\Entity\\EntityFormInterface.
   *   - list: The name of the class that provides listings of the entities. The
   *     class must implement \\Drupal\\Core\\Entity\\EntityListBuilderInterface.
   *   - render: The name of the class that is used to render the entities. The
   *     class must implement \\Drupal\\Core\\Entity\\EntityViewBuilderInterface.
   *   - access: The name of the class that is used for access checks. The class
   *     must implement \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface.
   *     Defaults to \\Drupal\\Core\\Entity\\EntityAccessControlHandler.
   *   - route_provider: (optional) A list of class names, keyed by a group
   *     string, which will be used to define routes related to this entity
   *     type. These classes must implement
   *     \\Drupal\\Core\\Entity\\Routing\\EntityRouteProviderInterface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getHandlerClasses',
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
    'b1397dbf7c424e6034a0cb6a5034bfce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the storage class.
   *
   * @return string
   *   The class for this entity type\'s storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getStorageClass',
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
    '229d7414288a5cfbbd9dae7ae200a016' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the storage class.
   *
   * @param string $class
   *   The class for this entity type\'s storage.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setStorageClass',
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
    'f4c643b31664e5f41f212120150f6dbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the form class for a specific operation.
   *
   * @param string $operation
   *   The name of the operation to use, e.g., \'default\'.
   *
   * @return string|null
   *   The class for this operation\'s form for this entity type or NULL if the
   *   entity type does not have a form class for this operation.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getFormClass',
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
    '772724584de2ed5f6f2c0781a787c7f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a form class for a specific operation.
   *
   * @param string $operation
   *   The operation to use this form class for.
   * @param string $class
   *   The form class implementing
   *   \\Drupal\\Core\\Entity\\EntityFormInterface.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setFormClass',
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
    'b8d736c280e1cfc28e5b9a603128a145' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this entity type has any forms.
   *
   * @return bool
   *   TRUE if there are any forms for this entity type, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasFormClasses',
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
    '91df57158dcdda3655d90cd935fb3a05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this entity type has any route provider.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasRouteProviders',
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
    '273a91453bc96995e5ff604ea2964663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all the route provide handlers.
   *
   * Much like forms you can define multiple route provider handlers.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getRouteProviderClasses',
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
    '99730d568360f7587f9f04acae61fd4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the list class.
   *
   * @return string
   *   The class for this entity type\'s list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getListBuilderClass',
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
    'f2979d6e9105ff5fa95cdd930f1fc125' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the list class.
   *
   * @param string $class
   *   The list class to use for the operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setListBuilderClass',
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
    '9132b0891cc694d4ac8b21cbd066730e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this entity type has a list class.
   *
   * @return bool
   *   TRUE if there is a list for this entity type, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasListBuilderClass',
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
    'e46515d93d5186269486105c220ee48b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the view builder class.
   *
   * @return string
   *   The class for this entity type\'s view builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getViewBuilderClass',
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
    '0f17ffa65974ad8f6fef7844f6a0fe33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the view builder class.
   *
   * @param string $class
   *   The class for this entity type\'s view builder.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setViewBuilderClass',
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
    '6a735a0027b3bae762e4d7cfd5767b7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this entity type has a view builder.
   *
   * @return bool
   *   TRUE if there is a view builder for this entity type, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasViewBuilderClass',
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
    'f815648b45fbf49d2d159d03dc1d6298' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the access control class.
   *
   * @return string
   *   The class for this entity type\'s access control.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getAccessControlClass',
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
    '235492ac23216f11ca047cbc372201be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the access control handler class.
   *
   * @param string $class
   *   The class for this entity type\'s access control handler.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setAccessClass',
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
    '23ee02e9abc28bbe52919dbb30725452' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if the entity type class implements the given interface.
   *
   * @param string $interface
   *   The class or interface to check.
   *
   * @return bool
   *   TRUE if the entity type class implements the given interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'entityClassImplements',
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
    '38b68d05e45dd5dc07fcef252427f0e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if the entity type is a subclass of the given class or interface.
   *
   * @param string $class
   *   The class or interface to check.
   *
   * @return bool
   *   TRUE if the entity type is a subclass of the class or interface.
   *
   * @deprecated in drupal:8.3.0 and is removed from drupal:10.0.0.
   *   Use Drupal\\Core\\Entity\\EntityTypeInterface::entityClassImplements()
   *   instead.
   *
   * @see https://www.drupal.org/node/2842808
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isSubclassOf',
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
    '95acbf1039ac149d08cee64ec2763e01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the handlers for a given type.
   *
   * @param string $handler_type
   *   The type of handler to set.
   * @param array|string $value
   *   The value for a handler type.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setHandlerClass',
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
    '207b5030653405317f648d086d68887e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the default administrative permission.
   *
   * The default \\Drupal\\Core\\Entity\\EntityAccessControlHandler class checks this
   * permission for all operations in its checkAccess() method. Entities with
   * more complex permissions can extend this class to do their own access
   * checks.
   *
   * @return string|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getAdminPermission',
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
    'f4913ffd752f4ea61c7c974a26d40c7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the permission granularity level.
   *
   * The allowed values are respectively "entity_type" or "bundle".
   *
   * @return string
   *   Whether a module exposing permissions for the current entity type
   *   should use entity-type level granularity or bundle level granularity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getPermissionGranularity',
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
    'ca821f78732812ea6483221db38bcdd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the link templates using the URI template syntax.
   *
   * Links are an array of standard link relations to the URI template that
   * should be used for them. Where possible, link relationships should use
   * established IANA relationships rather than custom relationships.
   *
   * Every entity type should, at minimum, define "canonical", which is the
   * pattern for URIs to that entity. Even if the entity will have no HTML page
   * exposed to users it should still have a canonical URI in order to be
   * compatible with web services. Entities that will be user-editable via an
   * HTML page must also define an "edit-form" relationship.
   *
   * By default, the following placeholders are supported:
   * - [entityType]: The entity type itself will also be a valid token for the
   *   ID of the entity. For instance, a placeholder of {node} used on the Node
   *   class.
   * - [bundleEntityType]: The bundle machine name itself. For instance, a
   *   placeholder of {node_type} used on the Node class.
   *
   * Specific entity types may also expand upon this list by overriding the
   * Entity::urlRouteParameters() method.
   *
   * @link http://www.iana.org/assignments/link-relations/link-relations.xml @endlink
   * @link http://tools.ietf.org/html/rfc6570 @endlink
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getLinkTemplates',
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
    '33d7219bf56262c82ebad73ccf4fbfb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the link template for a given key.
   *
   * @param string $key
   *   The link type.
   *
   * @return string|bool
   *   The path for this link, or FALSE if it doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getLinkTemplate',
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
    '290db31b20a98b83655e087555aa22ae' => 
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
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
    'fc8ef9c3051c8a5be799ee11facd63df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a single link template.
   *
   * @param string $key
   *   The name of a link.
   * @param string $path
   *   The route path to use for the link.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the path does not start with a leading slash.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setLinkTemplate',
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
    '26c6e4179dbff4bc72503ee47df0ca34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the callback for the label of the entity.
   *
   * The function takes an entity and returns the label of the entity. Use
   * language() on the entity to get information on the requested language. The
   * entity label is the main string associated with an entity; for example, the
   * title of a node or the subject of a comment. If there is an entity object
   * property that defines the label, use the \'label\' element of the
   * \'entity_keys\' return value component to provide this information. If more
   * complex logic is needed to determine the label of an entity, you can
   * instead specify a callback function here, which will be called to determine
   * the entity label.
   *
   * @return callable|null
   *   The callback, or NULL if none exists.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Override the
   *   EntityInterface::label() method instead for dynamic labels.
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::label()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::setLabelCallback()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::hasLabelCallback()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getLabelCallback',
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
    'a1cbabad05488556589291a2df2debdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the label callback.
   *
   * @param callable $callback
   *   A callable that returns the label of the entity.
   *
   * @return $this
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Override the
   *   EntityInterface::label() method instead for dynamic labels.
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::label()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getLabelCallback()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::hasLabelCallback()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setLabelCallback',
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
    'fb215518332696d549924cddeb8ee166' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if a label callback exists.
   *
   * @return bool
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Override the
   *   EntityInterface::label() method instead for dynamic labels.
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::label()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getLabelCallback()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::setLabelCallback()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'hasLabelCallback',
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
    'abf3b4c742bf0c1f2f84ada84af233ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the entity type which provides bundles.
   *
   * @return string|null
   *   The name of the entity type which provides bundles, or NULL if the entity
   *   type does not have a bundle entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getBundleEntityType',
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
    '9c8e9c1b46e59f62035a9c4cba8655c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity type for which this entity provides bundles.
   *
   * It can be used by other modules to act accordingly; for example,
   * the Field UI module uses it to add operation links to manage fields and
   * displays.
   *
   * @return string|null
   *   The entity type for which this entity provides bundles, or NULL if does
   *   not provide bundles for another entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getBundleOf',
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
    '1a5f766987429293348129085eff8e48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label for the bundle.
   *
   * @return string
   *   The bundle label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getBundleLabel',
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
    'bff1a10c6b397c7851e3635e4c1485b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the entity\'s base table.
   *
   * @todo Used by SqlContentEntityStorage only.
   *
   * @return string|null
   *   The name of the entity\'s base table, or NULL if none exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getBaseTable',
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
    '2fdc3a72e2e93dba6ff9f8ae1232d0f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the entity data is internal.
   *
   * This can be used in a scenario when it is not desirable to expose data of
   * this entity type to an external system.
   *
   * The implications of this method are left to the discretion of the caller.
   * For example, a module providing an HTTP API may not expose entities of
   * this type or a custom entity reference field settings form may deprioritize
   * entities of this type in a select list.
   *
   * @return bool
   *   TRUE if the entity data is internal, FALSE otherwise.
   *
   * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface::isInternal()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isInternal',
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
    '681573021257547d6058bd602c16298b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether entities of this type have multilingual support.
   *
   * At an entity level, this indicates language support and at a bundle level
   * this indicates translation support.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isTranslatable',
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
    'df4e1ff3e195d0342b6f78c3a27cd29e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the revision form fields should be added to the form.
   *
   * @return bool
   *   TRUE if the form field should be added, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'showRevisionUi',
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
    '25c9f0794d162a447c5de10327be154a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether entities of this type have revision support.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isRevisionable',
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
    '45a8596d433b2c1f8b674b491681447f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the entity\'s revision data table.
   *
   * @todo Used by SqlContentEntityStorage only.
   *
   * @return string|null
   *   The name of the entity type\'s revision data table, or NULL if none
   *   exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getRevisionDataTable',
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
    '109339cd172810801dc4f01797823a39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the entity\'s revision table.
   *
   * @todo Used by SqlContentEntityStorage only.
   *
   * @return string|null
   *   The name of the entity type\'s revision table, or NULL if none exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getRevisionTable',
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
    '7b9c68e833f7a7969db35523213a6a52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the entity\'s data table.
   *
   * @todo Used by SqlContentEntityStorage only.
   *
   * @return string|null
   *   The name of the entity type\'s data table, or NULL if none exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getDataTable',
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
    'cfdde185b2ceebbb15b556c36a9f4f23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the human-readable name of the entity type.
   *
   * This label should be used to present a human-readable name of the
   * entity type.
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The human-readable name of the entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getLabel',
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
    '9c1f5f93dc84abd0dc8f93b00de44daf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the lowercase form of the human-readable entity type name.
   *
   * @return string
   *   The lowercase form of the human-readable entity type name.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Instead, you should call getSingularLabel().
   *   See https://www.drupal.org/node/3075567
   *
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getLabel()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getLowercaseLabel',
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
    '127b9b2e2e0782103eeb69aff055f553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the uppercase plural form of the name of the entity type.
   *
   * This should return a human-readable version of the name that can refer
   * to all the entities of the given type, collectively. An example usage of
   * this is the page title of a page devoted to a collection of entities such
   * as "Workflows" (instead of "Workflow entities").
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The collection label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getCollectionLabel',
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
    '134baf1e444b9253016304444c6ec5dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the indefinite singular form of the name of the entity type.
   *
   * This should return the human-readable name for a single instance of
   * the entity type. For example: "opportunity" (with the plural as
   * "opportunities"), "child" (with the plural as "children"), or "content
   * item" (with the plural as "content items").
   *
   * Think of it as an "in a full sentence, this is what we call this" label. As
   * a consequence, the English version is lowercase.
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The singular label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getSingularLabel',
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
    '593288c824d8e653527288ee7aec30ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the indefinite plural form of the name of the entity type.
   *
   * This should return the human-readable name for more than one instance of
   * the entity type. For example: "opportunities" (with the singular as
   * "opportunity"), "children" (with the singular as "child"), or "content
   * items" (with the singular as "content item").
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The plural label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getPluralLabel',
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
    'f70e1bdbea6df931ad315c89496ad26a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label\'s definite article form for use with a count of entities.
   *
   * This label should be used when the quantity of entities is provided. The
   * name should be returned in a form usable with a count of the
   * entities. For example: "1 opportunity", "5 opportunities", "1 child",
   * "6 children", "1 content item", "25 content items".
   *
   * @param int $count
   *   The item count to display if the plural form was requested.
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The count label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getCountLabel',
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
    '874cd855dc003216a940535c1b5ab092' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a callable that can be used to provide the entity URI.
   *
   * This is only called if there is no matching link template for the link
   * relationship type, and there is no bundle-specific callback provided.
   *
   * @return callable|null
   *   A valid callback that is passed the entity or NULL if none is specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getUriCallback',
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
    '523393578b2677a786a8247f64bca3a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a callable to use to provide the entity URI.
   *
   * @param callable $callback
   *   A callback to use to provide a URI for the entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setUriCallback',
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
    '707f46cf86d8f6ad383363b3d1bc82d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the machine name of the entity type group.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getGroup',
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
    '3d9de42f9490eaa715a4fe85237a9494' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the human-readable name of the entity type group.
   *
   * @return string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The group label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getGroupLabel',
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
    '1d46a3bfcab1c1ae0884fa11af8a4c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The list cache contexts associated with this entity type.
   *
   * Enables code listing entities of this type to ensure that rendered listings
   * are varied as necessary, typically to ensure users of role A see other
   * entities listed than users of role B.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getListCacheContexts',
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
    'e19474c515bb9357e927c568de0aba8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The list cache tags associated with this entity type.
   *
   * Enables code listing entities of this type to ensure that newly created
   * entities show up immediately.
   *
   * @return string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getListCacheTags',
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
    'ffea5a2164d5013ab9d925d1704f7723' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the key that is used to store configuration dependencies.
   *
   * @return string
   *   The key to be used in configuration dependencies when storing
   *   dependencies on entities of this type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
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
    '99f0a1de9570a47c21bb882b25023b64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether this entity type is commonly used as a reference target.
   *
   * @return bool
   *   TRUE if the entity type is a common reference; FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'isCommonReferenceTarget',
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
    '338481661fc3b32c4b2ae8372daac225' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of validation constraints.
   *
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details on how constraints are defined.
   *
   * @return array[]
   *   An array of validation constraint definitions, keyed by constraint name.
   *   Each constraint definition can be used for instantiating
   *   \\Symfony\\Component\\Validator\\Constraint objects.
   *
   * @see \\Symfony\\Component\\Validator\\Constraint
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getConstraints',
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
    '570af0ca5972520828cba27fc32cb93d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the array of validation constraints for the FieldItemList.
   *
   * NOTE: This will overwrite any previously set constraints. In most cases
   * ContentEntityTypeInterface::addConstraint() should be used instead.
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details on how constraints are defined.
   *
   * @param array $constraints
   *   An array of validation constraint definitions, keyed by constraint name.
   *   Each constraint definition can be used for instantiating
   *   \\Symfony\\Component\\Validator\\Constraint objects.
   *
   * @return $this
   *
   * @see \\Symfony\\Component\\Validator\\Constraint
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'setConstraints',
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
    '7907a6d5215f7ff3aaa948a653540a0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a validation constraint.
   *
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details on how constraints are defined.
   *
   * @param string $constraint_name
   *   The name of the constraint to add, i.e. its plugin id.
   * @param array|null $options
   *   The constraint options as required by the constraint plugin, or NULL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'addConstraint',
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
    '21acca7c96370bc7de071268b145487f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the config dependency info for this entity, if any exists.
   *
   * @param string $bundle
   *   The bundle name.
   *
   * @return array
   *   An associative array containing the following keys:
   *   - \'type\': The config dependency type (e.g. \'module\', \'config\').
   *   - \'name\': The name of the config dependency.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'plugindefinitioninterface' => 'Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
         'functionName' => 'getBundleConfigDependency',
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