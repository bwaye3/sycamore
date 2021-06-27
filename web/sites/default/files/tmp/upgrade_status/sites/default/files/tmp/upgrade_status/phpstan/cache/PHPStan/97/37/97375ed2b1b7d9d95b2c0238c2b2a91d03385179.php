<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductVariationFieldRendererLayoutBuilder.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/LayoutEntityHelperTrait.php-1624732868',
   'data' => 
  array (
    'ad2f7bd9b9a82f08ecad34a2db22803d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Methods to help with entities using the layout builder.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
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
    '8129006de6f7e2e4f2e7ff3ae3cad2f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The section storage manager.
   *
   * @var \\Drupal\\layout_builder\\SectionStorage\\SectionStorageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
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
    'ef1ade39eea16f5c004182202a32bd77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an entity can have a layout.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to check.
   *
   * @return bool
   *   TRUE if the entity can have a layout otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'isLayoutCompatibleEntity',
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
    '976e45e342ac4bc56953015de699e60d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets revision IDs for layout sections.
   *
   * @param \\Drupal\\layout_builder\\Section[] $sections
   *   The layout sections.
   *
   * @return int[]
   *   The revision IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'getInlineBlockRevisionIdsInSections',
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
    '51eb532cf0b46f625a5063c145f69251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the sections for an entity if any.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   *
   * @return \\Drupal\\layout_builder\\Section[]
   *   The entity layout sections if available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'getEntitySections',
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
    'a537cddf71db172b75541f74647c057a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets components that have Inline Block plugins.
   *
   * @param \\Drupal\\layout_builder\\Section[] $sections
   *   The layout sections.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent[]
   *   The components that contain Inline Block plugins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'getInlineBlockComponents',
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
    '86befa7e4f1f58519f2731a317447cd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the section storage for an entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   *
   * @return \\Drupal\\layout_builder\\SectionStorageInterface|null
   *   The section storage if found otherwise NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'getSectionStorageForEntity',
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
    '15d1b0a4e58aea9264d2f80356696813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an entity is using a field for the layout override.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   *
   * @return bool
   *   TRUE if the entity is using a field for a layout override.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0.
   *   To determine if an entity has a layout override, use
   *   \\Drupal\\layout_builder\\LayoutEntityHelperTrait::getSectionStorageForEntity()
   *   and check whether the result is an instance of
   *   \\Drupal\\layout_builder\\DefaultsSectionStorageInterface.
   *
   * @see https://www.drupal.org/node/3030609
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'isEntityUsingFieldOverride',
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
    'ce2fb4c1ed3d49d9facdf31f76631f6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the original entity used the default section storage.
   *
   * This method can be used during the entity save process to determine whether
   * $entity->original is set and used the default section storage plugin as
   * determined by ::getSectionStorageForEntity().
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   *
   * @return bool
   *   TRUE if the original entity used the default storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'originalEntityUsesDefaultStorage',
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
    '787e76ad6b676c8829b72761782e681c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the section storage manager.
   *
   * @return \\Drupal\\layout_builder\\SectionStorage\\SectionStorageManagerInterface
   *   The section storage manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'sectionStorageManager',
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
    '99eeeda89d3a4ec65e89f1c16ca4002b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'variationfieldblock' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'layoutbuilderentityviewdisplay' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
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
    'f41f633119e4ff881e1b1151768863f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductVariationFieldRendererLayoutBuilder object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'variationfieldblock' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'layoutbuilderentityviewdisplay' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
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
    '4555256fc637131729b281dedf3524fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'variationfieldblock' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'layoutbuilderentityviewdisplay' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'renderFields',
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
    '7f76d105f5f71856cc184176a77fa921' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Render fields from LayoutBuilder sections.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $variation
   *   The product variation.
   * @param \\Drupal\\layout_builder\\Section[] $sections
   *   The layout sections.
   *
   * @return array
   *   Return array of rendered fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'variationfieldblock' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'layoutbuilderentityviewdisplay' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererLayoutBuilder',
         'functionName' => 'renderLayoutBuilderFields',
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