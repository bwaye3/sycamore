<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/CurrencyImporterInterface.php-1624732871',
   'data' => 
  array (
    '3bbea18ead6e42ac393750158820ed16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Imports the library-provided currency data into config entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\CurrencyImporterInterface',
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
    '475638459055aef85800f93306dd62a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of importable currencies.
   *
   * @return array
   *   An array in the currencyCode => name format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\CurrencyImporterInterface',
         'functionName' => 'getImportable',
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
    '2fdfb3646cdd3b8fd9634928c15fa131' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Imports currency data for the given currency code.
   *
   * @param string $currency_code
   *   The currency code.
   *
   * @return \\Drupal\\commerce_price\\Entity\\CurrencyInterface
   *   The saved currency entity.
   *
   * @throws \\CommerceGuys\\Intl\\Exception\\UnknownCurrencyException
   *   Thrown when the currency couldn\'t be found in the library definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\CurrencyImporterInterface',
         'functionName' => 'import',
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
    '14914faae28c8c58d0bb54aa9d7f5705' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Imports currency data for the given country code.
   *
   * @param string $country_code
   *   The country code.
   *
   * @return \\Drupal\\commerce_price\\Entity\\CurrencyInterface|null
   *   The saved currency entity or NULL if the given country\'s currency
   *   isn\'t known.
   *
   * @throws \\CommerceGuys\\Intl\\Exception\\UnknownCountryException
   *   Thrown when the country couldn\'t be found in the library definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\CurrencyImporterInterface',
         'functionName' => 'importByCountry',
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
    'fafe1d76288c36fc59d362db92b7f0c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Imports translations for the given language codes.
   *
   * @param array $langcodes
   *   Array of language codes to import translations for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\CurrencyImporterInterface',
         'functionName' => 'importTranslations',
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