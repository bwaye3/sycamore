<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Plugin/Commerce/InlineForm/CustomerProfile.php-1624732871',
   'data' => 
  array (
    '12b334cfd45c772a2d645943951dad95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an inline form for managing a customer profile.
 *
 * Allows copying values to and from the customer\'s address book.
 *
 * Supports two modes, based on the profile type setting:
 * - Single: The customer can have only a single profile of this type.
 * - Multiple: The customer can have multiple profiles of this type.
 *
 * @CommerceInlineForm(
 *   id = "customer_profile",
 *   label = @Translation("Customer profile"),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '038646ba0e6bb9f1325c22128d1bf160' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address book.
   *
   * @var \\Drupal\\commerce_order\\AddressBookInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '7b160961433fcfa37e68084081e7d064' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current country.
   *
   * @var \\Drupal\\commerce\\CurrentCountryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '9cce3f57f1ae37a7806322f9c2cd6701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '6d4dff26538f0b3da3ded881d54b435b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '5649632a57e0afc4ac40b8733e6ed208' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The customer profile.
   *
   * @var \\Drupal\\profile\\Entity\\ProfileInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '9a32d9d56b4b0f7b37ff72f2a3b5de3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CustomerProfile object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_order\\AddressBookInterface $address_book
   *   The address book.
   * @param \\Drupal\\commerce\\CurrentCountryInterface $current_country
   *   The current country.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    '3a5fd67bfc26ae1905f90389371230f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    'fc0fb84e1d02389d2633c182c57b9d7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'defaultConfiguration',
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
    'a4d66f59eb925050306b0ca4d3426b61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'requiredConfiguration',
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
    'e534d980fad561d383ef07f506f0408b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'validateConfiguration',
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
    '9fd7501c2b220d4485f8785039a44dd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'buildInlineForm',
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
    'a031d8e7162437ffcfccce4c68fdf821' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'ajaxRefresh',
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
    'cfa63bfd558f4bc03d039a60e4fbec87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears form input when select_address is used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'clearValues',
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
    '5151b06964090eeb77a6064775ef5471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'validateInlineForm',
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
    '6c2def0e44b88b8611fb1070be272885' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'submitInlineForm',
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
    '23daf19c2e9a91b19438ba63de5ffea0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a user entity for the given user ID.
   *
   * Falls back to the anonymous user if the user ID is empty or unknown.
   *
   * @param string $uid
   *   The user ID.
   *
   * @return \\Drupal\\user\\UserInterface
   *   The user entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'loadUser',
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
    '348b58c3425a1793e22cb64e0429c1e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'loadUser',
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
    '1f6bccfb6f0b9006f96d84ffbe6cb1ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the form display used to build the profile form.
   *
   * @return \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface
   *   The form display.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'loadFormDisplay',
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
    'cf967bf1e115c2b0685696559c28c340' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the current profile should be shown rendered.
   *
   * @param array $inline_form
   *   The inline form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   *
   * @return bool
   *   TRUE if the profile should be shown rendered, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'shouldRender',
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
    '549cdf05750193219dce56edc4ae98c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the profile form.
   *
   * @param array $profile_form
   *   The profile form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   *
   * @return array
   *   The prepared profile form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'prepareProfileForm',
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
    '48157d3436240b9a34f3079d50c37b10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the list of options for the given address book profiles.
   *
   * Adds the special _original and _new options.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface[] $address_book_profiles
   *   The address book profiles.
   *
   * @return array
   *   The profile options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
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
    'da6033dd153865d32fbf0f5ddd072e13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects the option ID for the given address book profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $address_book_profile
   *   The address book profile.
   *
   * @return string
   *   The option ID. A profile ID, or \'_new\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'selectOptionForProfile',
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
    '16faef47a720bf33529161d9bdb89871' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the address book profile for the given option ID.
   *
   * @param string $option_id
   *   The option ID. A profile ID, or a special value (\'_original\', \'_new\').
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface|null
   *   The profile, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'getProfileForOption',
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
    'f75da3e914a96bd5d3100b80d8146902' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $address_book_profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'getProfileForOption',
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
    '7054cdb39a686e08348ed79a08958535' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects a default profile from the given set of address book profiles.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface[] $address_book_profiles
   *   The address book profiles.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface|false
   *   The selected default profile, or FALSE if no profiles were given.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'selectDefaultProfile',
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
    'bb0413c6e071bc200deda91abb97958d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the given profile is incomplete.
   *
   * A profile is incomplete if it has an empty required field.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return bool
   *   TRUE if the given profile is incomplete, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'isProfileIncomplete',
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
    '052609401c8bcc966e556e4d3d6d2a37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the copy label for the given profile type.
   *
   * @param string $profile_type_id
   *   The profile type ID.
   * @param bool $update_on_copy
   *   Whether the copy will update an existing address book profile.
   *
   * @return string
   *   The copy label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'getCopyLabel',
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
    'e3d7b9558d4566d64bef5c9d7c32de6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the name of the triggering element.
   *
   * @param array $inline_form
   *   The inline form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the complete form.
   *
   * @return string
   *   The name of the triggering element, if the triggering element is
   *   a part of the inline form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'currentcountryinterface' => 'Drupal\\commerce\\CurrentCountryInterface',
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'user' => 'Drupal\\user\\Entity\\User',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\InlineForm\\CustomerProfile',
         'functionName' => 'getTriggeringElementName',
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