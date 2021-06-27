<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/views/area/CouponRedemption.php-1624732871',
   'data' => 
  array (
    'afbac21bd701f8995608be5489be95ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a coupon redemption area handler.
 *
 * Shows the coupon redemption field with discounts listed in the footer of a
 * View.
 *
 * @ingroup views_area_handlers
 *
 * @ViewsArea("commerce_coupon_redemption")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    'e83f9d87c455218fb28e6081ca0393c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order storage.
   *
   * @var \\Drupal\\Core\\Entity\\Sql\\SqlContentEntityStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    '27d11df790409f8d4b1c74c54e3cd58f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The inline form manager.
   *
   * @var \\Drupal\\commerce\\InlineFormManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    '7dad0afadda5b1a14309c4e516c0a9b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderTotal instance.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce\\InlineFormManager $inline_form_manager
   *   The inline form manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    '813701bc9c4e55778f53b4fd5ed51a2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    '5fa34bfad0b0634d9e151ac20df69341' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
         'functionName' => 'defineOptions',
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
    '4108e5ea95e056d388203b891ccb9b3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
         'functionName' => 'buildOptionsForm',
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
    'f5d905ab3db306fd15eff983468cd0ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    '55ca14579932e49c3ab72ccd22b7848a' => 
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
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
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
    'eeeda9f631d704d7b04167a1d4dfc7da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Method for the condition when view is empty.
   *
   * @param bool $empty
   *   Variable for view content exists or not.
   *
   * @return bool
   *   Returns boolean based on $empty.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
         'functionName' => 'viewsFormEmpty',
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
    '42d94d9f1f495f658520aa7c6490dc45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback for refreshing the order summary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
         'functionName' => 'ajaxRefreshSummary',
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
    '59abc59ff2455aaeafa977b66ac4d1ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\views\\area',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'insertcommand' => 'Drupal\\Core\\Ajax\\InsertCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'areapluginbase' => 'Drupal\\views\\Plugin\\views\\area\\AreaPluginBase',
          'numericargument' => 'Drupal\\views\\Plugin\\views\\argument\\NumericArgument',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\views\\area\\CouponRedemption',
         'functionName' => 'ajaxRefreshSummary',
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