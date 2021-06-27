<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Plugin/Commerce/CheckoutFlow/CheckoutFlowInterface.php-1624732871',
   'data' => 
  array (
    '3623b5c1d3354a91c2fc85aad788b7cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Places an order through a series of steps.
 *
 * Checkout flows are multi-step forms that can be configured by the store
 * administrator. This configuration is stored in the commerce_checkout_flow
 * config entity and injected into the plugin at instantiation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
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
    'd66d66788af04e868470e58cd342ee0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   The current order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'getOrder',
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
    'dfc33d18736b4188f73cd8aa0f7fab30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the previous step ID for the given step ID.
   *
   * Note that we’re not calling getVisibleSteps() on purpose here to bypass
   * its static caching which may no longer be valid due to previous panes
   * altering the order.
   *
   * @param string $step_id
   *   The step ID.
   *
   * @return string|null
   *   The previous step, or NULL if there is none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'getPreviousStepId',
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
    'df57d05274823afc94f101169d73a7c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the next step ID for the given step ID.
   *
   * Note that we’re not calling getVisibleSteps() on purpose here to bypass
   * its static caching which may no longer be valid due to previous panes
   * altering the order.
   *
   * @param string $step_id
   *   The step ID.
   *
   * @return string|null
   *   The next step ID, or NULL if there is none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'getNextStepId',
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
    'a3dd7938a9aecd1e7526c314f7cb99ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirects an order to a specific step in the checkout.
   *
   * @param string $step_id
   *   The step ID to redirect to.
   *
   * @throws \\Drupal\\commerce\\Response\\NeedsRedirectException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'redirectToStep',
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
    '71bf4f8bc4f3ba6f403ca581bfdeb301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the defined steps.
   *
   * @return array
   *   An array of step definitions, keyed by step ID.
   *   Possible keys:
   *   - label: The label of the step.
   *   - previous_label: The label shown on the button that returns the
   *                     customer back to this step.
   *   - next_label: The label shown on the button that sends the customer to
   *                 this step.
   *   - has_sidebar: Whether the step has a sidebar.
   *   - hidden: Whether the step is hidden. Hidden steps aren\'t shown
   *             in the checkout progress block until they are reached.
   *   Note:
   *   If the previous_label or next_label keys are missing, the
   *   corresponding buttons will not be shown to the customer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'getSteps',
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
    'ba676ddd8810d2e593aa7b3d52bf6c97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the visible steps.
   *
   * @return array
   *   An array of step definitions, keyed by step ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
         'functionName' => 'getVisibleSteps',
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