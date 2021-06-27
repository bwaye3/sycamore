<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PaymentOptionsBuilder.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    '3a376bdeff834f8ffae0e9b00d5e017a' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    '76f761d558d7f00acca583fbbe4ce135' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    'f8bfec5fe1ab665b46b5c4f7787e32ba' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    '907c00ba98cf1895ae20f548546a7570' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    '1bab718da9d77ec29b16073cf2aeb8b1' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    'b230aa641d8114b675f44386880ea3fe' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    'ef2e0cec427ece4bb836d91be15f5926' => 
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
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    '9f397e1f875e979c0ae8ba917f69f316' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    'ec224a8646efb611c715a3c1ddbd1e98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentOptionsBuilder object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The string translation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
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
    '288cbe0d941d1701cbe432c8966f599d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eeb3d3c1ab0e1dc503d604ba3e8b6ce1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentGatewayStorageInterface $payment_gateway_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1dadc13f4c7826c353851473b14df19f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $payment_gateways_with_payment_methods */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '287e6dc62c50afae765ba2c4fd7f516d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'efd4925d86b0c42b8487738bf344ecbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentMethodStorageInterface $payment_method_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1e2c313e1f960f625593d458fd8784f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $order_payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6ed7cdf035b2894ccef3cb768e993e47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $other_payment_gateways */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'buildOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ec5aba088c59e6bb429a425ac121846d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'selectDefaultOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2250098237a3d6a130b85d2949299d60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $order_payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'selectDefaultOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '65cf6aca76713f635190cf43784531ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $order_payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentOptionsBuilder',
         'functionName' => 'selectDefaultOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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