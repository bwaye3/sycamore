<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/LayoutEntityHelperTrait.php-1624732868',
   'data' => 
  array (
    '454701d4b284bfa200000af51854be46' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    'fda5c18308191a2e68a72497fce7f3dd' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '45270dbb9f8247850cefedbca617a02e' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '309a48f2acf9c48f2752f5e3ef91de15' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    'ed0b614d753e143b453758287a86fa2d' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '02b411a2e2cd5953c52ee6f71153a894' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '8a5f25a076ed3a439ad30da06e09b3d8' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '26b391b43d95e1eb8290b91db4af1691' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '2eaa7d3e5322b59adcfec202b5ef368c' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
    '995ad2b0b9a23c4b2cc565f3acfab282' => 
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
         'className' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
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
  ),
));