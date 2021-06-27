<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/Repository/CurrencyRepository.php-1624732871',
   'data' => 
  array (
    '96ad5e3c03b0faf928dcaf29078b043c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the currency repository.
 *
 * Provides currencies to the CurrencyFormatter in the expected format,
 * loaded from Drupal\'s currency storage (commerce_currency entities).
 *
 * Note: This repository doesn\'t support loading currencies in a non-default
 * locale, since it would be imprecise to map $locale to Drupal\'s languages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
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
    '388f1be6ce893a75df04a9c7418c6380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The currency storage.
   *
   * @var \\Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
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
    'f8c2c82f0c205a4605fd5c9d59490c78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an CurrencyRepository instance.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
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
    '4773a7e512ac50324d4eebcfbf189aed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'get',
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
    'f17d87f7b69715375876c08870ec085a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Entity\\CurrencyInterface $currency */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'get',
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
    '8b0785d1adb4fbf10e8435fbd4198e0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'getAll',
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
    'ac615f2d21fd18212195ecbc9154dec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Entity\\CurrencyInterface[] $currencies */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'getAll',
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
    '7981d23028e2963dfd56617287207590' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'getList',
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
    '1aad3c677e3c0d0fbf0ffc69cf052519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Entity\\CurrencyInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'getList',
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
    '05b89294aef4908a84e2ea988c896e0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a currency value object from the given entity.
   *
   * @param \\Drupal\\commerce_price\\Entity\\CurrencyInterface $currency
   *   The currency entity.
   *
   * @return \\CommerceGuys\\Intl\\Currency\\Currency
   *   The currency value object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Repository',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\commerce_price\\Repository\\CurrencyRepository',
         'functionName' => 'createValueObjectFromEntity',
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