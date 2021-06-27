<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/Plugin/Field/FieldFormatter/PriceCalculatedFormatter.php-1624732871',
   'data' => 
  array (
    '10dca9d1975c7cf0eb2d9a8a6215d82e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_price_calculated\' formatter.
 *
 * @FieldFormatter(
 *   id = "commerce_price_calculated",
 *   label = @Translation("Calculated"),
 *   field_types = {
 *     "commerce_price"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    'c063d027d1bdeef4b70f8e037eea3992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain price resolver.
   *
   * @var \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '634d865024d8c262ab59da6f26a41a58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '237a6303ff0b1ed44b68e9bd74d2f256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current store.
   *
   * @var \\Drupal\\commerce_store\\CurrentStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '82075c1a933db033162faf61eadd45fb' => 
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
   * @param \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface $chain_price_resolver
   *   The chain price resolver.
   * @param \\Drupal\\commerce_store\\CurrentStoreInterface $current_store
   *   The current store.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '9d33d66259804d58e5f8693786816076' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    'f2a2891bf31f231e8c09639b4fcd9da6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    'fea6a0defd8b1cf9c9c2c7c1e5899c66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\PurchasableEntityInterface $purchasable_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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
    '1dcc66b98e52a286fef55d1fc48c729e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Plugin\\Field\\FieldFormatter\\PriceCalculatedFormatter',
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