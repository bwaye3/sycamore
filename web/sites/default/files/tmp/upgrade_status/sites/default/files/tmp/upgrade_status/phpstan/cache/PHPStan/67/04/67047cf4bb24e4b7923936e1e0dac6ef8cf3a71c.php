<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Plugin/Commerce/InlineForm/InlineFormBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/AjaxFormTrait.php-1624732871',
   'data' => 
  array (
    'b6d80b53bf7e704327059caebb13cb98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base class for inline forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '87df6742b9c4b071c7c8c03ffe22a032' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax handler for refreshing an entire form.
   *
   * All status messages need to be displayed when refreshing the form.
   * In large forms, it is a best practise to output these messages close
   * to the triggering element. For example, when ajax is triggered at
   * checkout, the messages should be shown above the relevant checkout pane.
   * When [\'#ajax\'][\'element\'] is specified, the messages will be shown above
   * it. Otherwise, the status messages will be shown above the whole form.
   * Example:
   * <code>
   * $inline_form[\'apply\'][\'#ajax\'][\'element\'] = $inline_form[\'#parents\'];
   * </code>
   *
   * Note that both the form and the element need to have an #id specified,
   * as a workaround to core bug #2897377. This was already done for
   * checkout forms, checkout panes, and inline forms.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   The ajax response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'ajaxRefreshForm',
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
    'b45e986af96430692b829708dce4aa40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new InlineFormBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '3e61434a7efbeb7127dea5153d5aa2fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '08895354084489ca26504e684c5e259e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'getConfiguration',
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
    '2026cdf9beeffd2aeaa60638e0ed087b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'setConfiguration',
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
    'ab26bac810572dd087c942829b12773b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '73e93af3e82867ee63628881cd0324d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the required configuration for this plugin.
   *
   * @return string[]
   *   The required configuration keys.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '403715a11eb956867dd90818d86b4778' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates configuration.
   *
   * @throws \\RuntimeException
   *   Thrown if a configuration value is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    'c181efa5cf741ac67baf01416f4ca0d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'getLabel',
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
    'b4fa414743577fb855f315e75bb82e39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '4428362dc34e914b11f5c3a48b5d9219' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    '975af90a65c67338bfcb4e60d2edee7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
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
    'e1fa8fe724954138f402dbe20a162335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs the inline form validation.
   *
   * @param array $inline_form
   *   The inline form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'runValidate',
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
    '19cc8063dba779faf6a8e29c3be091fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'runValidate',
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
    '6aa0da70214ef80390d96c7f5415f831' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs the inline form submission.
   *
   * @param array $inline_form
   *   The inline form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'runSubmit',
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
    '8a87a8ab02ded26a549207ef5d986b02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormInterface $plugin */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'runSubmit',
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
    '80b3588428c2a6c49b3c060de35b32da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the page title based on the inline form\'s #page_title property.
   *
   * @param array $inline_form
   *   The inline form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\InlineFormBase',
         'functionName' => 'updatePageTitle',
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