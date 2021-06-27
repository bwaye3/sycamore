<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Plugin/Field/FieldFormatter/PriceCalculatedFormatter.php-1624732871',
   'data' => 
  array (
    '3551ff2da6939ad2146ceaefe9fa5f22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Alternative implementation of the \'commerce_price_calculated\' formatter.
 *
 * @see \\Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '1f6b5e24ef3eb8f5f9ca14bbf6817aa8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The adjustment type manager.
   *
   * @var \\Drupal\\commerce_order\\AdjustmentTypeManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '23bf8313b6d9c9afe9133ae408e8b829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    'c29de3f0ad31e4f9dc1636e208e3035f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current store.
   *
   * @var \\Drupal\\commerce_store\\CurrentStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    'd5b13a8ffcd9031f57a487a6c02d7bfb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The price calculator.
   *
   * @var \\Drupal\\commerce_order\\PriceCalculatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '4af1e5b95acbd562293eeeb4ff48b3d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PriceCalculatedFormatter object.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings settings.
   * @param \\CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface $currency_formatter
   *   The currency formatter.
   * @param \\Drupal\\commerce_order\\AdjustmentTypeManager $adjustment_type_manager
   *   The adjustment type manager.
   * @param \\Drupal\\commerce_store\\CurrentStoreInterface $current_store
   *   The current store.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\commerce_order\\PriceCalculatorInterface $price_calculator
   *   The price calculator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '50e031f42128b95109ddd580adab8a4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '953b8a5d98d75622f566998d902fce90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'defaultSettings',
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
    'a23c4297e76999ea3caeaf5fb0c58e80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'settingsForm',
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
    'a785b7dcf0b26dbeb64ec6f61461f14a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'settingsSummary',
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
    'fa4721d049c0102f41f6da1d61570df9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'viewElements',
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
    '523192f38974f86b129ad30d19662cc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\PurchasableEntityInterface $purchasable_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'viewElements',
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
    '7730a4f57f82372f0b27fcc66ce52024' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustmenttypemanager' => 'Drupal\\commerce_order\\AdjustmentTypeManager',
          'pricecalculatorinterface' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
          'pricedefaultformatter' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceDefaultFormatter',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
         'functionName' => 'isApplicable',
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