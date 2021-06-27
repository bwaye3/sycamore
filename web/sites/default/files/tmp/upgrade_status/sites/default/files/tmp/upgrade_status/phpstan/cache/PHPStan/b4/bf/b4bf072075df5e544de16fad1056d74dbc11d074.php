<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldFormatter/AddressDefaultFormatter.php-1624732871',
   'data' => 
  array (
    '59706005b55160381bc1b7472cf3bff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'address_default\' formatter.
 *
 * @FieldFormatter(
 *   id = "address_default",
 *   label = @Translation("Default"),
 *   field_types = {
 *     "address",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '70aa6b4b6fb852b98bc57f16450a4063' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address format repository.
   *
   * @var \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '788e04ff1ec83a3420728d681ebc6957' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The country repository.
   *
   * @var \\CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    'e980de853d657d31691c2f73c98902b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The subdivision repository.
   *
   * @var \\CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '792a05b10bb69b8129958c5daef3faa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an AddressDefaultFormatter object.
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
   *   Any third party settings.
   * @param \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface $address_format_repository
   *   The address format repository.
   * @param \\CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface $country_repository
   *   The country repository.
   * @param \\CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface $subdivision_repository
   *   The subdivision repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '74cabb492e10c39579a960c18ef7c0f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '0a53df825888e0cfc993a47ea6efb281' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
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
    '47bc0088816fc30a908f1285c76ef915' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a renderable array for a single address item.
   *
   * @param \\Drupal\\address\\AddressInterface $address
   *   The address.
   * @param string $langcode
   *   The language that should be used to render the field.
   *
   * @return array
   *   A renderable array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'viewElement',
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
    '8e8f313c3e1bcb481863a37bda18d761' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inserts the rendered elements into the format string.
   *
   * @param string $content
   *   The rendered element.
   * @param array $element
   *   An associative array containing the properties and children of the
   *   element.
   *
   * @return string
   *   The new rendered element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'postRender',
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
    '3ca8c3b9934a2a44665b8484ba362d7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormat $address_format */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'postRender',
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
    '3c61dc51007bf2f7f15634fe5e554114' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces placeholders in the given string.
   *
   * @param string $string
   *   The string containing the placeholders.
   * @param array $replacements
   *   An array of replacements keyed by their placeholders.
   *
   * @return string
   *   The processed string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'replacePlaceholders',
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
    'f9430e70a65ad04db6cc830cddbbdbbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the address values used for rendering.
   *
   * @param \\Drupal\\address\\AddressInterface $address
   *   The address.
   * @param \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormat $address_format
   *   The address format.
   *
   * @return array
   *   The values, keyed by address field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'getValues',
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
    '56e455e6d2c62942602d0b95d30ae434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'addressfield' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressField',
          'addressformat' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormat',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'countryrepositoryinterface' => 'CommerceGuys\\Addressing\\Country\\CountryRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
          'subdivisionrepositoryinterface' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
          'addressinterface' => 'Drupal\\address\\AddressInterface',
          'fieldhelper' => 'Drupal\\address\\FieldHelper',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressDefaultFormatter',
         'functionName' => 'trustedCallbacks',
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