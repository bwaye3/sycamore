<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Plugin/Commerce/InlineForm/PluginConfiguration.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Element/CommerceElementTrait.php-1624732871',
   'data' => 
  array (
    'befa6f42820e721fb6331988ffdac50a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a plugin configuration inline form.
 *
 * If the plugin belongs to an entity, it\'s the embedding form\'s
 * responsibility to set the submitted configuration on the entity\'s plugin.
 *
 * @see \\Drupal\\commerce_payment\\Form\\PaymentGatewayForm::submitForm()
 *
 * @CommerceInlineForm(
 *   id = "plugin_configuration",
 *   label = @Translation("Plugin configuration"),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '75987de45f361a718518496e00ee21e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows form elements to use #commerce_element_submit.
 *
 * This is a substitute for the #element_submit that\'s missing from Drupal core.
 *
 * Each form element using this trait should add the attachElementSubmit and
 * validateElementSubmit callbacks to their getInfo() methods.
 *
 * If the parent form has multiple submit buttons, the element submit
 * callbacks will only be invoked when the form is submitted through a
 * submit button with a #button_type of \'primary\' or \'secondary\'.
 * This prevents irreversible changes from being applied for submit buttons
 * which only rebuild the form (e.g. "Upload file" or "Add another item").
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    'dd78e267cff5bc266c563e198c3d6a7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attaches the #commerce_element_submit functionality.
   *
   * @param array $element
   *   The form element being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The processed form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
         'functionName' => 'attachElementSubmit',
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
    'b2f761bf32920161f1c3824e9489d9f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Confirms that #commerce_element_submit handlers can be run.
   *
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @throws \\Exception
   *   Thrown if button-level #validate handlers are detected on the parent
   *   form, as a protection against buggy behavior.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
         'functionName' => 'validateElementSubmit',
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
    'b1ed9491cb07156b2eb6852f2915f944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits elements by calling their #commerce_element_submit callbacks.
   *
   * Form API has no #element_submit, requiring us to simulate it by running
   * the #commerce_element_submit handlers either in the last step of
   * validation, or the first step of submission. In this case it\'s the last
   * step of validation, allowing thrown exceptions to be converted into form
   * errors.
   *
   * @param array &$form
   *   The form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
         'functionName' => 'executeElementSubmitHandlers',
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
    '0d13ecc0ec2283db758eefe75be7ea1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether #commerce_element_submit callbacks should be executed.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   *
   * @return bool
   *   TRUE if the callbacks can be executed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
         'functionName' => 'shouldExecuteElementSubmit',
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
    '1d0dcf0445004297590baacf00944770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calls the #commerce_element_submit callbacks recursively.
   *
   * @param array &$element
   *   The current element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
         'functionName' => 'doExecuteSubmitHandlers',
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
    '60900a382a98e123b85ff662316d0fbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin manager.
   *
   * @var \\Drupal\\Core\\Executable\\ExecutableManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    'e13fb238bf1023c20345f445fa6d28ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PluginConfiguration object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Component\\Plugin\\PluginManagerInterface $plugin_manager
   *   The plugin manager interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '8a02761de5f89609cf32aefaae397772' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '9f929c85752c537a3dd1fe12e4cc1fd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    'dee7fb32c0cd1839624eede30d0c34c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '04c799e55fa537000f484a3d8ab8031d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '47a2382487b53084fb8b4bb502eeb4ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
    '1eb0ae738a7e48054677b9e7f89e698e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'commerceelementtrait' => 'Drupal\\commerce\\Element\\CommerceElementTrait',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\PluginConfiguration',
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
  ),
));