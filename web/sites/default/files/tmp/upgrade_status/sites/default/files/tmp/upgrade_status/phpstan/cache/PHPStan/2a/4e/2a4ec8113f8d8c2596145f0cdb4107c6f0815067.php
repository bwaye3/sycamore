<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Controller/AddressBookController.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    '76b820e7dff1b909c8b2877170658bfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the address book UI.
 *
 * Profile module provides a user tab per profile type.
 * However, a Commerce site might have multiple customer profile types
 * (e.g. one for billing, one for shipping), and they should all be managed
 * under a single "Address book" tab.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '7b7a264d75dd2b2ef1c74d1f0366b701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'e5c01526749ecf037276ad826ff54b84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'bda0d96e973eabcad14a6d40a15a3c6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'setMessenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '374bee178f9a6145dd4b7a18df86b027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ff9894e747d50e1a68101ea63d45b6a3' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'eea72fc872ab3d2abce90f70887ee775' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'cbccae8414560f3fb3a8176974a0ca2d' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '7cd682cc2cdeb8959a5923ff16f10f20' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '9e8da4112811c067629cc80925f39b1c' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'b8bcb72bfbd972da0b21c4eae4fbe913' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '3aba0f2099dec7caedc2ec27f36f002c' => 
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
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '970b0a9eaa6d9b2fedf380316512de6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address book.
   *
   * @var \\Drupal\\commerce_order\\AddressBookInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'a20d2f0cc583a25d359d21e5a9e00598' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity form builder.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '97306f6cfdfd9c81cee48a22af361a76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    'f4385f5df65cc40bcc2332adb798fb51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AddressBookController object.
   *
   * @param \\Drupal\\commerce_order\\AddressBookInterface $address_book
   *   The address book.
   * @param \\Drupal\\Core\\Entity\\EntityFormBuilderInterface $entity_form_builder
   *   The entity form builder.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '3c90d94a51b8a794e2f8b9f128963480' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
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
    '2c79d0962a37b3d47841c2bd2023829a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an edit title for the given profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return string
   *   The edit title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'editTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd5c72a327ac57500092536525b9a65d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a delete title for the given profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return string
   *   The delete title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'deleteTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '90012dce21725485ef8befc71f4e11ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the given profile as default.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
   *   A redirect back to the overview page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'setDefault',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cdd077aa872144fb744d19619dfc2398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the overview page.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   The user account.
   *
   * @return array
   *   The response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'overviewPage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bc86a01f03a8997e1c5f3e399a906237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the add form.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   The user account.
   * @param \\Drupal\\profile\\Entity\\ProfileTypeInterface $profile_type
   *   The profile type.
   *
   * @return array
   *   The response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'addForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cedb88f40955cfd220da0ce36d1cdd30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access for the overview page.
   *
   * Grants access if the current user is allowed to view at least one
   * customer profile type.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   The user account.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The currently logged in account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'checkOverviewAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a21251b7911731ecb698850c4e3dea3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access for the add form.
   *
   * @param \\Drupal\\user\\UserInterface $user
   *   The user account.
   * @param \\Drupal\\profile\\Entity\\ProfileTypeInterface $profile_type
   *   The profile type.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The currently logged in account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'checkCreateAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ff30ce1e3c25c45e5a3d06b2b3263c5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResult $result */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'checkCreateAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f517f83991a8ca69512d7dbb4b75113a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters out profile types that the current user is not allowed to view.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileTypeInterface[] $profile_types
   *   The profile types.
   * @param \\Drupal\\user\\UserInterface $owner
   *   The profile owner.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The currently logged in account.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileTypeInterface[]
   *   The filtered profile types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'filterTypesByViewAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bd31594d08d499e7738771e4ee5c238e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the operation links for the given profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   * @param \\Drupal\\profile\\Entity\\ProfileTypeInterface $profile_type
   *   The profile type.
   *
   * @return array
   *   A renderable array with the operation links.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Controller',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityformbuilderinterface' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'profiletypeinterface' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\commerce_order\\Controller\\AddressBookController',
         'functionName' => 'buildOperations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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