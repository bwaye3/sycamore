<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/file/src/Entity/File.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/user/src/EntityOwnerTrait.php-1624732869',
   'data' => 
  array (
    '6ed9f419555ad2e6401497adcbfb92af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the file entity class.
 *
 * @ingroup file
 *
 * @ContentEntityType(
 *   id = "file",
 *   label = @Translation("File"),
 *   label_collection = @Translation("Files"),
 *   label_singular = @Translation("file"),
 *   label_plural = @Translation("files"),
 *   label_count = @PluralTranslation(
 *     singular = "@count file",
 *     plural = "@count files",
 *   ),
 *   handlers = {
 *     "storage" = "Drupal\\file\\FileStorage",
 *     "storage_schema" = "Drupal\\file\\FileStorageSchema",
 *     "access" = "Drupal\\file\\FileAccessControlHandler",
 *     "views_data" = "Drupal\\file\\FileViewsData",
 *   },
 *   base_table = "file_managed",
 *   entity_keys = {
 *     "id" = "fid",
 *     "label" = "filename",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "owner" = "uid",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '4f412008f64fefbb8b754275e1e3a6c8' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '1d354a5720e95e1afbfe00a44e5ed0e3' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    'a09131d0634607b6272412fc2f78223c' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '0d12ac3b562338b9209263574babb3cf' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    'e72c1365798a1b8db24eda883fcef0fd' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '5e6bb323e3ebea648ca3fd77fe1b959b' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '9fb4b4bb0d55b3f0303c1bf5a0e73af9' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '9f765c633cad12aca516c3208a907872' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    'd0227150f7dab8a915e30fbf365bd50d' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    'e2cd7bab27fede1ec620278bb46bca0e' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '3d5041e298690a8ba84fe67fc8780f82' => 
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
         'className' => 'Drupal\\file\\Entity\\File',
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
    '5578faebab24fc68c553b56c1cf73e1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'getFilename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bc6f47b6f5d243bcff998ccb5630d362' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setFilename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c5bf90dc3f00124f800e823ca0797cc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'getFileUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fe481ef9ed8b306d5afaf134f72e9675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setFileUri',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '51869adb5e5fcb92f59e40d38f2cd9ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'createFileUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a640aec510c0a5744414a8cbd40adebd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see file_url_transform_relative()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '13449fc945113c82d6f1c53ef51abc24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'getMimeType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b7fe4c4bcdfd6691a6405a349365447c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setMimeType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6b204671bd35190d017339a1178b17c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'getSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '31f4466369065abeb7dcb585a72c381d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '29105cc5f8977bafc158604dee5712e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '5b6a52d7067bb3af41f93ee8897f05a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'isPermanent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3a6eb34e62ecba7ea2b267b5e4d09f6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'isTemporary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5305b9733e96075e4de3174281f0b9c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setPermanent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '17ec3e35f4331c40dbc3816b223a56d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
         'functionName' => 'setTemporary',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fc6ffabc9d9aa5f954e0e662a4a9aaff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '39affb923e6c4c935f0c99c64f2ba5ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '865b51b99b6b5be0635b184909e7f530' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '21cf8999dd62dfad85b3f9ec729745a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    'cf41b4cc776d7baec78966a4896ad094' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
    '13547527bc262e38971b4f3afa30b316' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'fileinterface' => 'Drupal\\file\\FileInterface',
          'entityownertrait' => 'Drupal\\user\\EntityOwnerTrait',
        ),
         'className' => 'Drupal\\file\\Entity\\File',
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
  ),
));