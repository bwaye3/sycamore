<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PluginForm/PaymentOffsiteForm.php-1624732871',
   'data' => 
  array (
    '28cbec6ff4231310fb9a6556980893eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base class for payment off-site forms.
 *
 * Payment gateways are expected to inherit from this class and provide a
 * buildConfigurationForm() method which calls buildRedirectForm() with the
 * right parameters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\PluginForm',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\commerce_payment\\PluginForm\\PaymentOffsiteForm',
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
    '9487a22b3074d01ffde180e90a38d917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\PluginForm',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\commerce_payment\\PluginForm\\PaymentOffsiteForm',
         'functionName' => 'buildConfigurationForm',
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
    '8a11b851cfa8447f646481c1e386e67e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the redirect form.
   *
   * @param array $form
   *   The plugin form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param string $redirect_url
   *   The redirect url.
   * @param array $data
   *   Data that should be sent along.
   * @param string $redirect_method
   *   The redirect method (REDIRECT_GET or REDIRECT_POST constant).
   *
   * @return array
   *   The redirect form, if $redirect_method is REDIRECT_POST.
   *
   * @throws \\Drupal\\commerce\\Response\\NeedsRedirectException
   *   The redirect exception, if $redirect_method is REDIRECT_GET.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\PluginForm',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\commerce_payment\\PluginForm\\PaymentOffsiteForm',
         'functionName' => 'buildRedirectForm',
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
    'a0ca861b8748074ab27d712893c46c9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the complete form for a POST redirect.
   *
   * Sets the form #action, adds a class for the JS to target.
   * Workaround for buildConfigurationForm() not receiving $complete_form.
   *
   * @param array $form
   *   The plugin form.
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
         'namespace' => 'Drupal\\commerce_payment\\PluginForm',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\commerce_payment\\PluginForm\\PaymentOffsiteForm',
         'functionName' => 'processRedirectForm',
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
    '5448d07b51a106a605bd97e2dc7091ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\PluginForm',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\commerce_payment\\PluginForm\\PaymentOffsiteForm',
         'functionName' => 'submitConfigurationForm',
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