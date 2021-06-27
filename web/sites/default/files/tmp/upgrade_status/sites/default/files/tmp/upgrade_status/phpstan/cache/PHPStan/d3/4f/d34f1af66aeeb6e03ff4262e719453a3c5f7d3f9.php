<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/taxonomy/src/Entity/Term.php-1624732869',
   'data' => 
  array (
    '1d984cc9d6603065f40eef5b445b8513' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the taxonomy term entity.
 *
 * @ContentEntityType(
 *   id = "taxonomy_term",
 *   label = @Translation("Taxonomy term"),
 *   label_collection = @Translation("Taxonomy terms"),
 *   label_singular = @Translation("taxonomy term"),
 *   label_plural = @Translation("taxonomy terms"),
 *   label_count = @PluralTranslation(
 *     singular = "@count taxonomy term",
 *     plural = "@count taxonomy terms",
 *   ),
 *   bundle_label = @Translation("Vocabulary"),
 *   handlers = {
 *     "storage" = "Drupal\\taxonomy\\TermStorage",
 *     "storage_schema" = "Drupal\\taxonomy\\TermStorageSchema",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\Core\\Entity\\EntityListBuilder",
 *     "access" = "Drupal\\taxonomy\\TermAccessControlHandler",
 *     "views_data" = "Drupal\\taxonomy\\TermViewsData",
 *     "form" = {
 *       "default" = "Drupal\\taxonomy\\TermForm",
 *       "delete" = "Drupal\\taxonomy\\Form\\TermDeleteForm"
 *     },
 *     "translation" = "Drupal\\taxonomy\\TermTranslationHandler"
 *   },
 *   base_table = "taxonomy_term_data",
 *   data_table = "taxonomy_term_field_data",
 *   revision_table = "taxonomy_term_revision",
 *   revision_data_table = "taxonomy_term_field_revision",
 *   uri_callback = "taxonomy_term_uri",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "tid",
 *     "revision" = "revision_id",
 *     "bundle" = "vid",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "published" = "status",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   bundle_entity_type = "taxonomy_vocabulary",
 *   field_ui_base_route = "entity.taxonomy_vocabulary.overview_form",
 *   common_reference_target = TRUE,
 *   links = {
 *     "canonical" = "/taxonomy/term/{taxonomy_term}",
 *     "delete-form" = "/taxonomy/term/{taxonomy_term}/delete",
 *     "edit-form" = "/taxonomy/term/{taxonomy_term}/edit",
 *     "create" = "/taxonomy/term",
 *   },
 *   permission_granularity = "bundle",
 *   constraints = {
 *     "TaxonomyHierarchy" = {}
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
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
    'e534b995cbfd0e4f60511f3baee33f5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
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
    '313e1f080c2aceddc98df9e47240179a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\taxonomy\\TermInterface $term */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
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
    '88b310e29728aa77fed161a02c5f7cc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\taxonomy\\TermInterface $child */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
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
    '770bfeb84a9e04de91a5b0a5695e7d66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
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
    'cc6537eae86fe177db06dabdbc3d65ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'baseFieldDefinitions',
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
    '98007a5ace90eccb7782c3a7b952e110' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'baseFieldDefinitions',
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
    '889a3a1935da7364eb9613626d12d4ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'bundleFieldDefinitions',
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
    '5298b4d3600217fd4004c29a66dcd8f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'getDescription',
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
    '3265a5716cf0129e1ae560c8fcd1a788' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'setDescription',
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
    'bbdefabbf5d8cad26a211487a395ea70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'getFormat',
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
    '94def09c2a81fd9c392451b81ae83fae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'setFormat',
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
    'b46eb7288195dd13ed87ea8b3ebf2574' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'getName',
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
    '00b84271c3ecdd630ad92d31ba20aa2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'setName',
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
    '52a1ffa6bd1f274bb88e3c3d1593ce19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'getWeight',
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
    '55b11927240abe880b683d60616c640b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'setWeight',
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
    '5d361211a3c3599420d86d8758a211f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy\\Entity',
         'uses' => 
        array (
          'editorialcontententitybase' => 'Drupal\\Core\\Entity\\EditorialContentEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'terminterface' => 'Drupal\\taxonomy\\TermInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
        ),
         'className' => 'Drupal\\taxonomy\\Entity\\Term',
         'functionName' => 'getVocabularyId',
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