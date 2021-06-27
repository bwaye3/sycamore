<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Plugin/Block/VariationFieldBlock.php-1624732871',
   'data' => 
  array (
    '73c23b7b9e42247a5bbb05a85a3c9176' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Variation field block.
 *
 * Specific block class for Layout Builder\'s field block and variations to
 * ensure field replacement works.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Block',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationfieldrendererinterface' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'fieldblock' => 'Drupal\\layout_builder\\Plugin\\Block\\FieldBlock',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
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
    'b26c73712e6ec4254e478409d431c0a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The variation field renderer.
   *
   * @var \\Drupal\\commerce_product\\ProductVariationFieldRendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Block',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationfieldrendererinterface' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'fieldblock' => 'Drupal\\layout_builder\\Plugin\\Block\\FieldBlock',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
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
    '0a5683f8d79db6a3ae9e0543fd3b9322' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new VariationFieldBlock object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   * @param \\Drupal\\Core\\Field\\FormatterPluginManager $formatter_manager
   *   The formatter manager.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The logger.
   * @param \\Drupal\\commerce_product\\ProductVariationFieldRendererInterface $product_variation_field_render
   *   The variation field renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Block',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationfieldrendererinterface' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'fieldblock' => 'Drupal\\layout_builder\\Plugin\\Block\\FieldBlock',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
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
    'e6cea95b21eb338185a2c3be6c0a3d1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Block',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationfieldrendererinterface' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'fieldblock' => 'Drupal\\layout_builder\\Plugin\\Block\\FieldBlock',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
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
    '3689eeda561e653e3dfcd37eb933aba2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Block',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationfieldrendererinterface' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'formatterpluginmanager' => 'Drupal\\Core\\Field\\FormatterPluginManager',
          'fieldblock' => 'Drupal\\layout_builder\\Plugin\\Block\\FieldBlock',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Block\\VariationFieldBlock',
         'functionName' => 'build',
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