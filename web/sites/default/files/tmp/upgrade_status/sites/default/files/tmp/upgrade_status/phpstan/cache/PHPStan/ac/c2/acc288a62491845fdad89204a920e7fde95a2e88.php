<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Entity/EntityViewDisplay.php-1624732867',
   'data' => 
  array (
    '44ab456f45ecd4bac7e48a0b5270803a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Configuration entity that contains display options for all components of a
 * rendered entity in a given view mode.
 *
 * @ConfigEntityType(
 *   id = "entity_view_display",
 *   label = @Translation("Entity view display"),
 *   entity_keys = {
 *     "id" = "id",
 *     "status" = "status"
 *   },
 *   handlers = {
 *     "access" = "\\Drupal\\Core\\Entity\\Entity\\Access\\EntityViewDisplayAccessControlHandler",
 *   },
 *   config_export = {
 *     "id",
 *     "targetEntityType",
 *     "bundle",
 *     "mode",
 *     "content",
 *     "hidden",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
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
    'e7da323faae64af0b0e0727ea2177eb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
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
    '8c249a0d060bde72e58ecb4b77eb2804' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the display objects used to render a set of entities.
   *
   * Depending on the configuration of the view mode for each bundle, this can
   * be either the display object associated with the view mode, or the
   * \'default\' display.
   *
   * This method should only be used internally when rendering an entity. When
   * assigning suggested display options for a component in a given view mode,
   * EntityDisplayRepositoryInterface::getViewDisplay() should be used instead,
   * in order to avoid inadvertently modifying the output of other view modes
   * that might happen to use the \'default\' display too. Those options will then
   * be effectively applied only if the view mode is configured to use them.
   *
   * hook_entity_view_display_alter() is invoked on each display, allowing 3rd
   * party code to alter the display options held in the display before they are
   * used to generate render arrays.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface[] $entities
   *   The entities being rendered. They should all be of the same entity type.
   * @param string $view_mode
   *   The view mode being rendered.
   *
   * @return \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface[]
   *   The display objects to use to render the entities, keyed by entity
   *   bundle.
   *
   * @see \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface::getViewDisplay()
   * @see hook_entity_view_display_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'collectRenderDisplays',
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
    '501aab12ece7346b4ff2218da2ac0e37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the display object used to render an entity.
   *
   * See the collectRenderDisplays() method for details.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity being rendered.
   * @param string $view_mode
   *   The view mode.
   *
   * @return \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface
   *   The display object that should be used to render the entity.
   *
   * @see \\Drupal\\Core\\Entity\\Entity\\EntityViewDisplay::collectRenderDisplays()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'collectRenderDisplay',
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
    'e2615a0f7f96596bb5bc8a3a8ac6054e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => '__construct',
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
    '9027b969b96d1646998c584ab7e5e3a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
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
    '0badd20d8043bdbb5dd42b4cd7fb3d02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'getRenderer',
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
    '97324d25b580b18131e99b1ef0938d7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'build',
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
    '75655b25aff85220ee869f34c59fc3c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'buildMultiple',
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
    '849d6bd10ece986c9dd530041d340688' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResultInterface $field_access */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'buildMultiple',
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
    '4038283aa83a99bf2238630d34577236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayplugincollection' => 'Drupal\\Core\\Entity\\EntityDisplayPluginCollection',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'entitydisplaybase' => 'Drupal\\Core\\Entity\\EntityDisplayBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatabledatainterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
         'functionName' => 'getPluginCollections',
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