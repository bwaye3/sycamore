<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Entity/ProductVariation.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/EntityOwnerTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/user/src/EntityOwnerTrait.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityPublishedTrait.php-1624732867',
   'data' => 
  array (
    '389f51fcd5d1e488996dd3244817d051' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the product variation entity class.
 *
 * @ContentEntityType(
 *   id = "commerce_product_variation",
 *   label = @Translation("Product variation"),
 *   label_collection = @Translation("Product variations"),
 *   label_singular = @Translation("product variation"),
 *   label_plural = @Translation("product variations"),
 *   label_count = @PluralTranslation(
 *     singular = "@count product variation",
 *     plural = "@count product variations",
 *   ),
 *   bundle_label = @Translation("Product variation type"),
 *   handlers = {
 *     "event" = "Drupal\\commerce_product\\Event\\ProductVariationEvent",
 *     "storage" = "Drupal\\commerce_product\\ProductVariationStorage",
 *     "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
 *     "access" = "Drupal\\commerce_product\\ProductVariationAccessControlHandler",
 *     "permission_provider" = "Drupal\\commerce_product\\ProductVariationPermissionProvider",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\commerce_product\\ProductVariationListBuilder",
 *     "views_data" = "Drupal\\commerce_product\\ProductVariationViewsData",
 *     "form" = {
 *       "add" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
 *       "edit" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
 *       "duplicate" = "Drupal\\commerce_product\\Form\\ProductVariationForm",
 *       "delete" = "Drupal\\commerce_product\\Form\\ProductVariationDeleteForm",
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\commerce_product\\ProductVariationRouteProvider",
 *     },
 *     "inline_form" = "Drupal\\commerce_product\\Form\\ProductVariationInlineForm",
 *     "translation" = "Drupal\\content_translation\\ContentTranslationHandler"
 *   },
 *   admin_permission = "administer commerce_product",
 *   fieldable = TRUE,
 *   field_indexes = {
 *     "sku"
 *   },
 *   translatable = TRUE,
 *   translation = {
 *     "content_translation" = {
 *       "access_callback" = "content_translation_translate_access"
 *     },
 *   },
 *   base_table = "commerce_product_variation",
 *   data_table = "commerce_product_variation_field_data",
 *   entity_keys = {
 *     "id" = "variation_id",
 *     "bundle" = "type",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "label" = "title",
 *     "published" = "status",
 *     "owner" = "uid",
 *     "uid" = "uid",
 *   },
 *   links = {
 *     "add-form" = "/product/{commerce_product}/variations/add",
 *     "edit-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/edit",
 *     "duplicate-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/duplicate",
 *     "delete-form" = "/product/{commerce_product}/variations/{commerce_product_variation}/delete",
 *     "collection" = "/product/{commerce_product}/variations",
 *     "drupal:content-translation-overview" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations",
 *     "drupal:content-translation-add" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/add/{source}/{target}",
 *     "drupal:content-translation-edit" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/edit/{language}",
 *     "drupal:content-translation-delete" = "/product/{commerce_product}/variations/{commerce_product_variation}/translations/delete/{language}",
 *   },
 *   bundle_entity_type = "commerce_product_variation_type",
 *   field_ui_base_route = "entity.commerce_product_variation_type.edit_form",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '85a7315e3d3e1f1b5a0d366608df8c75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing changed time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'ef80c3267d89e3698058ff21d487f61e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp of the last entity change across all translations.
   *
   * @return int
   *   The timestamp of the last entity save operation across all
   *   translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getChangedTimeAcrossTranslations',
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
    '860802d3226918566ef8620cbe4847d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the timestamp of the last entity change for the current translation.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getChangedTime',
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
    '079cedce8eed2660802f018c8de8dd8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the timestamp of the last entity change for the current translation.
   *
   * @param int $timestamp
   *   The timestamp of the last entity save operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setChangedTime',
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
    'da987b51eaed067311897a2fcb481e43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for Commerce entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'user' => 'Drupal\\user\\Entity\\User',
          'coreentityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '18dbafb7ef332a95c8ca8f2325d379b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for entities that have an owner.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'f4f9a3d12ce9f962ec97969615d5a0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for entity owners.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the owner field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityOwnerInterface or
   *   if it does not have an "owner" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'ownerBaseFieldDefinitions',
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
    'ad120541b755b5b0bd45a8b29e069e26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getOwnerId',
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
    '19e0fcc2c81a55dcac538548eacd4bd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setOwnerId',
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
    '52471303f5290d43359458131e4d3962' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getOwner',
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
    '494e5ac6b383564377ea62e8b2dec1d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setOwner',
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
    '5fe49f02bc509e85e38739ac9b1eaec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'owner\' base field.
   *
   * @return mixed
   *   A default value for the owner field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user',
         'uses' => 
        array (
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getDefaultEntityOwner',
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
    'effe9466394428004bef5648012a8e83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'user' => 'Drupal\\user\\Entity\\User',
          'coreentityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getOwner',
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
    '8bd99cbf6ed346b0322c82a592bf30fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for published status.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'bd3d957e57b1ea891ec345dde1f2dd4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of base field definitions for publishing status.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type to add the publishing status field to.
   *
   * @return \\Drupal\\Core\\Field\\BaseFieldDefinition[]
   *   An array of base field definitions.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException
   *   Thrown when the entity type does not implement EntityPublishedInterface
   *   or if it does not have a "published" entity key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'publishedBaseFieldDefinitions',
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
    '44d3089416cf43e41f45ca9569aa4980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'isPublished',
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
    'a04d15a2d8b2c266ce62f62b334645b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setPublished',
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
    'e6a4f40f1a8d10d930cab333d23584ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'unsupportedentitytypedefinitionexception' => 'Drupal\\Core\\Entity\\Exception\\UnsupportedEntityTypeDefinitionException',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setUnpublished',
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
    '9baab99c97f9634dab0ef82f7e74dff5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'urlRouteParameters',
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
    '68c7e3751509528a7d1723df1fb3d59e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'baa57e159901d063b72a91057a657c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getProduct',
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
    '7f7903cde824c7392cd57b7beeae963c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getProductId',
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
    'e0093ab9eb43b91f5c39627a780155b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getSku',
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
    '6fd9c1a4eb841fac3eecd1b7e2521a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setSku',
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
    'e6ea15bf242659ceba40f0314928cf4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getTitle',
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
    '51bafc13227ccdf0d9489c3a60c80845' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setTitle',
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
    '305b84067c318b753c4bc189e473473a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getListPrice',
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
    'f20f150ea64b1b8c0a6396acd8b15f92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setListPrice',
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
    '80bec7e070f4e1129191caa63863a388' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getPrice',
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
    '842aa18da72f34c03c77c6791d8df3b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setPrice',
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
    'a5c274fecd16d7efaa291cb1be45563b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'isActive',
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
    'a7c8c6acd130d90af33ad23912264f1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setActive',
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
    '0e9c9de778d0644cf2eef3799b2d880e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getCreatedTime',
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
    '83f8f5f4b5d65ae025249bd056d970f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'setCreatedTime',
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
    '13d7f52f2bfc839a6bfab19a5c7f592e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getStores',
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
    'b97178b6743f17dcdb5f1a0bdf885dda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getOrderItemTypeId',
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
    '2022a5f8f9efaf46919f0cb7d9e1c1e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getOrderItemTitle',
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
    '6ea9ad5f4fba13aa5e64206f1ef379ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getAttributeFieldNames',
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
    'd3cc726ae38a104b34ddddd286369be5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getAttributeValueIds',
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
    '38e23fec45317f3e108e549bdec1d4fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getAttributeValueId',
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
    '4b4fe34422726e0646b92cd7a13e7aea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getAttributeValues',
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
    '192387c279cebdfd8ed7324bcd817604' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getAttributeValue',
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
    'a70f64c52506d2bc53dd9f3b990d9146' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'getCacheContexts',
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
    'f3885329cdc31b6556a8930a52097b4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'c630dcefb32ab78e408f0448674612ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'da8a089593386d387cd345341ce3a2f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface $variation_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '199d5d8ac5c11c5c8bea1578ffabf562' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '790d0410505fa4b52a5c18df9e49cbc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '2067040fa510ddb64714055e87aba15d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'e80565b82a0e314802d757b235d3291c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the variation title based on attribute values.
   *
   * @return string
   *   The generated value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
         'functionName' => 'generateTitle',
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
    'b35256e4dd66c8e44cc7267436248b54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'a068d1c7ba06284611e516d623815951' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    'ebc0a952464464ddf8c9fa9b6a7ade76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
    '0b14a34a6da7ff75a8cca4a14b9c91ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface $variation_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityownertrait' => 'Drupal\\commerce\\EntityOwnerTrait',
          'price' => 'Drupal\\commerce_price\\Price',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitypublishedtrait' => 'Drupal\\Core\\Entity\\EntityPublishedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'url' => 'Drupal\\Core\\Url',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
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
  ),
));