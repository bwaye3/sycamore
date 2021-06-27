<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/Field/FieldFormatter/AddressPlainFormatter.php-1624732871',
   'data' => 
  array (
    'c5af67bb9683ff66baeaa7a4949f6402' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'address_plain\' formatter.
 *
 * @FieldFormatter(
 *   id = "address_plain",
 *   label = @Translation("Plain"),
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '14a18e0088fa3ce18e8463df25575b84' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '1021a9ee4c2672cec50fbb156631f1a2' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '766632f29fb4a836864bcd243810c55e' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '628bd2fe111b3ef692c5b07ee5587ed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an AddressPlainFormatter object.
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '4b76cc5a30158d5473e8039d5c35cf4e' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '971865ce64e16d1d95dcdc12363cbbf5' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '2af488bc09288d436500b69a1e0f2ebb' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
    '7b3e1a601f0a819a24cc257e59488c9e' => 
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
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\Field\\FieldFormatter\\AddressPlainFormatter',
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
  ),
));