<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/Entity/LayoutBuilderEntityViewDisplay.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/SectionStorage/SectionStorageTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/LayoutEntityHelperTrait.php-1624732868',
   'data' => 
  array (
    'e92fd157f321729c6016d2029e73ccc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an entity view display entity that has a layout.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '4f0ffcab68849f8b213ae1b09ec019af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for storing sections on an object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'cf86ea997cb8d0bf6dc4f45d69b584bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the information for all sections.
   *
   * Implementations of this method are expected to call array_values() to rekey
   * the list of sections.
   *
   * @param \\Drupal\\layout_builder\\Section[] $sections
   *   An array of section objects.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'setSections',
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
    '33b1b086c6f5e701cd460fa00b994ced' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'count',
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
    'f45cfde3d5df01cb4d0899a2f8787121' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getSection',
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
    '41e78ca5e253d92f6018036969a4fc55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the section for the given delta on the display.
   *
   * @param int $delta
   *   The delta of the section.
   * @param \\Drupal\\layout_builder\\Section $section
   *   The layout section.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'setSection',
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
    '82b0bce815072fd3a9c99eb4e0c72f2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'appendSection',
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
    '0eccd25d6f43f6de888294d083f60df4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'insertSection',
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
    '59bbfb1fe501c4523549cfdff89e965d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a blank section to the list.
   *
   * @return $this
   *
   * @see \\Drupal\\layout_builder\\Plugin\\Layout\\BlankLayout
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'addBlankSection',
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
    '642535417cb44d45959ee8435a14e97e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this section list contains a blank section.
   *
   * A blank section is used to differentiate the difference between a layout
   * that has never been instantiated and one that has purposefully had all
   * sections removed.
   *
   * @return bool
   *   TRUE if the section list contains a blank section, FALSE otherwise.
   *
   * @see \\Drupal\\layout_builder\\Plugin\\Layout\\BlankLayout
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'hasBlankSection',
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
    '1ba9819f03a3650e484ba1f515bc1bd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'removeSection',
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
    '1a3434d1230fc291a6ab6cb82f07719b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'removeAllSections',
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
    'eaea7eff8ce2b1b71300318f2c9c18ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if there is a section at the specified delta.
   *
   * @param int $delta
   *   The delta of the section.
   *
   * @return bool
   *   TRUE if there is a section for this delta, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'hasSection',
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
    '3c87e41cec13916b8fbb15f430b18dc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Implements a deep clone.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\SectionStorage',
         'uses' => 
        array (
          'section' => 'Drupal\\layout_builder\\Section',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => '__clone',
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
    '5a81dab0435e1dd79b4cc6fd08daf26f' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '0b33a34f6ba0dd978a7334982e6854c1' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '7229f5caeb720727dbe06e3831ec51d9' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'c76ecbbb5d852d6ecd7e878bd8698c7e' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'fb7dfb39122ffbe8540bba7ab82cad1e' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '3a67866558f3a2281d1ea2739abf8a2a' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'fcfce527cca4c019462e7edd20f7cd09' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'a6be97a4ee4505f9e5a653117dca5b03' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'b760d80c19b6ee4a18a8027e90cf6a64' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'a2fb1f7887035fafb88714aed2dfc1c1' => 
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
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '0322ce5320a3675b995b6afceae46373' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity field manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '38e6c13b8bcfbe6eb715c702f8514929' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'b0e9154a5a826fa004ae6f7a39218759' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'isOverridable',
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
    '24ad0817a71e84a987757f1cd12d27ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'setOverridable',
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
    '6b5408bdfdef4003cb98177e7e5ee6c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'isLayoutBuilderEnabled',
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
    '70baf44f58e7b5d847055be267d0eae1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'enableLayoutBuilder',
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
    '4a1b2a17cd65198db24ffb2a6d63284f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'disableLayoutBuilder',
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
    '6036104bdbbcff4d31211c79e4b7c01b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getSections',
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
    'f206a597560e36ee79d78686110f8f24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'setSections',
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
    '693911a04438504406ecfabe5c59d02b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'a7dcaca5207d53e34ee91de884f42816' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a layout section field if it is no longer needed.
   *
   * Because the field is shared across all view modes, the field will only be
   * removed if no other view modes are using it.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   * @param string $bundle
   *   The bundle.
   * @param string $field_name
   *   The name for the layout section field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'removeSectionField',
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
    '435ee501148652c8294d99f66224fb2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a layout section field to a given bundle.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   * @param string $bundle
   *   The bundle.
   * @param string $field_name
   *   The name for the layout section field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'addSectionField',
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
    '55a98a6ac91c84c08190f049aa8e9e26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'createCopy',
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
    'b5137b96f60d74ba119f1d32b7bc5fb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getDefaultRegion',
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
    '3fdbb0558eebe67177b63dfba5f1153a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the context repository service.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface
   *   The context repository service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'contextRepository',
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
    'ed2c40fdc37bb44b23def646b7bf21e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this display is using the \'_custom\' view mode.
   *
   * @return bool
   *   TRUE if this display is using the \'_custom\' view mode, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'isCustomMode',
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
    '7c051bf5a81bb966ba8531acc6de689a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '817dab253f4e2d01280f1d892acb733e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the render array for the sections of a given entity.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   *
   * @return array
   *   The render array representing the sections of the entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'buildSections',
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
    'df63ce46e4726cd1629a2e7ef8313bcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the available contexts for a given entity.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   An array of context objects for a given entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getContextsForEntity',
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
    '053e9663a7051b31bbe314083a1fbf99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the runtime sections for a given entity.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity.
   *
   * @return \\Drupal\\layout_builder\\Section[]
   *   The sections.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0.
   *   \\Drupal\\layout_builder\\SectionStorage\\SectionStorageManagerInterface::findByContext()
   *   should be used instead. See https://www.drupal.org/node/3022574.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getRuntimeSections',
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
    '2b562ac772c0324664706f537e026676' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @todo Move this upstream in https://www.drupal.org/node/2939931.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    '2033e4d475b9d7da426317e9321be0c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'calculateDependencies',
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
    '9d35147fcbe333e944f6eeaafecf42b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'onDependencyRemoval',
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
    '8eb704f22ec8ed9356f68267f899c068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'setComponent',
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
    'ad67655afe514b2a6b63e776330d52b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a default section.
   *
   * @return \\Drupal\\layout_builder\\Section
   *   The default section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getDefaultSection',
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
    'a3bf155c076ac64b5e744ad94a3a78ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the section storage manager.
   *
   * @return \\Drupal\\layout_builder\\SectionStorage\\SectionStorageManagerInterface
   *   The section storage manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
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
    'b6925c1698d415fbcb7931fdee5624e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getComponent',
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
    '857f25d67bff7a1a7dcccaa70bfcd6a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Quick Edit formatter settings.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent|null
   *   The section component if it is available.
   *
   * @see \\Drupal\\layout_builder\\QuickEditIntegration::entityViewAlter()
   * @see \\Drupal\\quickedit\\MetadataGenerator::generateFieldMetadata()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getQuickEditSectionComponent',
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
    'ebef5b26cd3c20d510977cb5f1e468c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the component for a given field name if any.
   *
   * @param string $field_name
   *   The field name.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent|null
   *   The section component if it is available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder\\Entity',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'pluginbase' => 'Drupal\\Component\\Plugin\\PluginBase',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'baseentityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextdefinition' => 'Drupal\\Core\\Plugin\\Context\\ContextDefinition',
          'entitycontext' => 'Drupal\\Core\\Plugin\\Context\\EntityContext',
          'element' => 'Drupal\\Core\\Render\\Element',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'layoutentityhelpertrait' => 'Drupal\\layout_builder\\LayoutEntityHelperTrait',
          'overridessectionstorage' => 'Drupal\\layout_builder\\Plugin\\SectionStorage\\OverridesSectionStorage',
          'quickeditintegration' => 'Drupal\\layout_builder\\QuickEditIntegration',
          'section' => 'Drupal\\layout_builder\\Section',
          'sectioncomponent' => 'Drupal\\layout_builder\\SectionComponent',
          'sectionstoragetrait' => 'Drupal\\layout_builder\\SectionStorage\\SectionStorageTrait',
        ),
         'className' => 'Drupal\\layout_builder\\Entity\\LayoutBuilderEntityViewDisplay',
         'functionName' => 'getSectionComponentForFieldName',
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