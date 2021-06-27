<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ContextProvider/ProductVariationContext.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    '0e995c54927a8c42bc2ad38afbe37b04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @todo
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    '68acb743ef6026bd2c100ca1d151ffdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    '9e3dc2958077e893a0d67281de76b217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    'f4a8ef3e3a4b96f43f4169dede1bb3ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd0502c2cb07de6122bc67a5bd9c47819' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1f0bf41be9b8ec1204acd5ae045dce0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '371a88a4cc30148bcc795b320eefdd05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cfef740fe705a3655dba4d38aa526490' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bdbe886e4cd24522d5e4f9cd54d5fa26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The route match.
   *
   * @var \\Drupal\\Core\\Routing\\RouteMatchInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    '268eeac273436d7af57100380feed868' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product variation storage.
   *
   * @var \\Drupal\\commerce_product\\ProductVariationStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    '87eb611ebf8422781dc65bd4291288ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductRouteContext object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
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
    '349ca26e264afe968d7b52d7e88f6c58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getRuntimeContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fc6dccd9d25ab39724ef989f45169314' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductTypeInterface $product_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getRuntimeContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dae629565cd0af0873822dc53f3c086e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\layout_builder\\SectionStorageInterface $section_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getRuntimeContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd83fef63684a7345c58417078bed4f0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\ContextProvider',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'producttype' => 'Drupal\\commerce_product\\Entity\\ProductType',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitydisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityDisplayInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'context' => 'Drupal\\Core\\Plugin\\Context\\Context',
          'contextproviderinterface' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
          'entitycontextdefinition' => 'Drupal\\Core\\Plugin\\Context\\EntityContextDefinition',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'defaultssectionstorageinterface' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
          'overridessectionstorageinterface' => 'Drupal\\layout_builder\\OverridesSectionStorageInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ContextProvider\\ProductVariationContext',
         'functionName' => 'getAvailableContexts',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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