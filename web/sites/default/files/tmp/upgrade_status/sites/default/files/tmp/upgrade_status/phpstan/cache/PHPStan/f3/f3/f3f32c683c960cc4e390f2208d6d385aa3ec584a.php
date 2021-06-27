<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Block/BlockPluginInterface.php-1624732867',
   'data' => 
  array (
    '09d7ecceb99d2ac4618298ffe4135ced' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the required interface for all block plugins.
 *
 * @todo Add detailed documentation here explaining the block system\'s
 *   architecture and the relationships between the various objects, including
 *   brief references to the important components that are not coupled to the
 *   interface.
 *
 * @ingroup block_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
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
    '9ce2bb0bf0706f4e4b140d7a7bac8db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates the block label (title) should be displayed to end users.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
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
    '750da96953860548450d05fe935cc6b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the user-facing block label.
   *
   * @todo Provide other specific label-related methods in
   *   https://www.drupal.org/node/2025649.
   *
   * @return string
   *   The block label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'label',
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
    '10438492cb27e0ab7cde72654d192d24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the block should be shown.
   *
   * This method allows base implementations to add general access restrictions
   * that should apply to all extending block plugins.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user session for which to check access.
   * @param bool $return_as_object
   *   (optional) Defaults to FALSE.
   *
   * @return bool|\\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result. Returns a boolean if $return_as_object is FALSE (this
   *   is the default) and otherwise an AccessResultInterface object.
   *   When a boolean is returned, the result of AccessInterface::isAllowed() is
   *   returned, i.e. TRUE means access is explicitly allowed, FALSE means
   *   access is either explicitly forbidden or "no opinion".
   *
   * @see \\Drupal\\block\\BlockAccessControlHandler
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'access',
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
    '2eca04f5c25ce2c85f4333714256d34e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds and returns the renderable array for this block plugin.
   *
   * If a block should not be rendered because it has no content, then this
   * method must also ensure to return no content: it must then only return an
   * empty array, or an empty array with #cache set (with cacheability metadata
   * indicating the circumstances for it being empty).
   *
   * @return array
   *   A renderable array representing the content of the block.
   *
   * @see \\Drupal\\block\\BlockViewBuilder
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
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
    '4289d9ad9f9f6a856e6e96eafada0090' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a particular value in the block settings.
   *
   * @param string $key
   *   The key of PluginBase::$configuration to set.
   * @param mixed $value
   *   The value to set for the provided key.
   *
   * @todo This doesn\'t belong here. Move this into a new base class in
   *   https://www.drupal.org/node/1764380.
   * @todo This does not set a value in \\Drupal::config(), so the name is confusing.
   *
   * @see \\Drupal\\Component\\Plugin\\PluginBase::$configuration
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'setConfigurationValue',
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
    'f52405ff2a53cf58eaaf5638ca1309e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the configuration form elements specific to this block plugin.
   *
   * Blocks that need to add form elements to the normal block configuration
   * form should implement this method.
   *
   * @param array $form
   *   The form definition array for the block configuration form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The renderable form array representing the entire configuration form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'blockForm',
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
    '80f5e5e69c25b32c4cc58e0141dbeefb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds block type-specific validation for the block form.
   *
   * Note that this method takes the form structure and form state for the full
   * block configuration form as arguments, not just the elements defined in
   * BlockPluginInterface::blockForm().
   *
   * @param array $form
   *   The form definition array for the full block configuration form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\Core\\Block\\BlockPluginInterface::blockForm()
   * @see \\Drupal\\Core\\Block\\BlockPluginInterface::blockSubmit()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'blockValidate',
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
    '1e03db10ce6db68a5497df17115807cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds block type-specific submission handling for the block form.
   *
   * Note that this method takes the form structure and form state for the full
   * block configuration form as arguments, not just the elements defined in
   * BlockPluginInterface::blockForm().
   *
   * @param array $form
   *   The form definition array for the full block configuration form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\Core\\Block\\BlockPluginInterface::blockForm()
   * @see \\Drupal\\Core\\Block\\BlockPluginInterface::blockValidate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'blockSubmit',
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
    '01dc48713d152736e723a976b529ed7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Suggests a machine name to identify an instance of this block.
   *
   * The block plugin need not verify that the machine name is at all unique. It
   * is only responsible for providing a baseline suggestion; calling code is
   * responsible for ensuring whatever uniqueness is required for the use case.
   *
   * @return string
   *   The suggested machine name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'configurableplugininterface' => 'Drupal\\Component\\Plugin\\ConfigurablePluginInterface',
          'derivativeinspectioninterface' => 'Drupal\\Component\\Plugin\\DerivativeInspectionInterface',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockPluginInterface',
         'functionName' => 'getMachineNameSuggestion',
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