<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Form/ProductAttributeTranslationAddForm.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Form/ProductAttributeTranslationFormTrait.php-1624732871',
   'data' => 
  array (
    'a6a5588c7e3144c988abf59644d11593' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the form for adding product attribute translations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'configmappermanagerinterface' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
          'configtranslationaddform' => 'Drupal\\config_translation\\Form\\ConfigTranslationAddForm',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    '73361dc005fd8b0d5df7a003ee9fb228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the product attribute translation forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributevalueinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    '2a5c00006b7d5258e13de530dc8ce1df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributevalueinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    'f0ec074180a59d5e3bca4682dd2cd5d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The inline form manager.
   *
   * @var \\Drupal\\commerce\\InlineFormManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributevalueinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    '7faf23d28a362279923a4c14b05b185c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the translation form for product attribute values.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface $attribute
   *   The product attribute.
   *
   * @return array
   *   The translation form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributevalueinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
         'functionName' => 'buildValuesForm',
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
    '5a9ce006af51ffda33fe4b07781a2e40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the given product attribute value in the original language.
   *
   * Skips non-translatable fields. Skips all base fields other than the name.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface $value
   *   The product attribute value.
   *
   * @return array
   *   The render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributevalueinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
         'functionName' => 'renderOriginalValue',
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
    '4863183c57c0ba79aa848da654e34360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductAttributeTranslationAddForm object.
   *
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config_manager
   *   The typed configuration manager.
   * @param \\Drupal\\config_translation\\ConfigMapperManagerInterface $config_mapper_manager
   *   The configuration mapper manager.
   * @param \\Drupal\\language\\ConfigurableLanguageManagerInterface $language_manager
   *   The configurable language manager.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce\\InlineFormManager $inline_form_manager
   *   The inline form manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'configmappermanagerinterface' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
          'configtranslationaddform' => 'Drupal\\config_translation\\Form\\ConfigTranslationAddForm',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    'd4e208e647bd87e43b01c52b3449c53e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'configmappermanagerinterface' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
          'configtranslationaddform' => 'Drupal\\config_translation\\Form\\ConfigTranslationAddForm',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
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
    '421aa9b41ff11348152daac28f1cf89f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'configmappermanagerinterface' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
          'configtranslationaddform' => 'Drupal\\config_translation\\Form\\ConfigTranslationAddForm',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
         'functionName' => 'buildForm',
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
    'e03eb5baa46ead24bcdfea599ae54bff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Form',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'configmappermanagerinterface' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
          'configtranslationaddform' => 'Drupal\\config_translation\\Form\\ConfigTranslationAddForm',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Form\\ProductAttributeTranslationAddForm',
         'functionName' => 'getEntityTypeManager',
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