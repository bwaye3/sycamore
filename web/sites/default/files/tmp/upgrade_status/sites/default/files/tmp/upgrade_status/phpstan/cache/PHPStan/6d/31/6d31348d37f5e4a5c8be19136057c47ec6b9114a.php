<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Plugin/views/field/RemoveButton.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/field/UncacheableFieldHandlerTrait.php-1624732869',
   'data' => 
  array (
    'c1b4cb7d6854e440afe915f539dcedbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a form element for removing the order item.
 *
 * @ViewsField("commerce_order_item_remove_button")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    '058a140b2a8a22290d8f8cf50af5206b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait encapsulating the logic for uncacheable field handlers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    '414a129bce70fe6518c0c50df0bbbde4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'render',
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
    '9d7ca58a27bca6954fca2b61b1bf8c78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::postRender()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    '2dfc16252b1848cd0dc9dd691f352aa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldPluginBase::getFieldTokenPlaceholder()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'getFieldTokenPlaceholder',
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
    '080cfafbf0dc444429eefcc4123166bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Actually renders the field markup.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A result row.
   *
   * @return string
   *   The field markup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'doRender',
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
    '9ade31ee5a6c29f1fd237ff4eb3aa427' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @see \\Drupal\\views\\Plugin\\views\\Field\\FieldHandlerInterface::getValue()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'getValue',
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
    '9ae7711a80e81d30d7cd66585c9dfc57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart manager.
   *
   * @var \\Drupal\\commerce_cart\\CartManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    '23e96387a20a0e866e3d2e3d2852601b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new EditRemove object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_cart\\CartManagerInterface $cart_manager
   *   The cart manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    '784e152e093c732b4c01947fa73573e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
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
    'b0de941a3bf77cf2710a18b715f464d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'clickSortable',
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
    'fde78f320e99a7173f68484229466cf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'getValue',
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
    '883fbcaa0c2deeb05f7bd94ca511a3e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form constructor for the views form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'viewsForm',
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
    'afb2345f1f0aa635ed9493dca32baaf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit handler for the views form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'viewsFormSubmit',
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
    '0e67d03b6b19e7481be5f40a9320312d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'viewsFormSubmit',
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
    '304e93f32d5c5ad8a9aa3ebdb4b8a3b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\views\\field',
         'uses' => 
        array (
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'fieldpluginbase' => 'Drupal\\views\\Plugin\\views\\field\\FieldPluginBase',
          'uncacheablefieldhandlertrait' => 'Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\views\\field\\RemoveButton',
         'functionName' => 'query',
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