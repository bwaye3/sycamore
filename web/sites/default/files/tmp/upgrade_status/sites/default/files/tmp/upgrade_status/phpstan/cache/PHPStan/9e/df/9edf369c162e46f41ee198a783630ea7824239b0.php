<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/ckeditor/src/CKEditorPluginInterface.php-1624732867',
   'data' => 
  array (
    '0da97043125cf9d27032c9b9bcfeab51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for (loading of) CKEditor plugins.
 *
 * This is the most basic CKEditor plugin interface; it provides the bare
 * minimum information. Solely implementing this interface is not sufficient to
 * be able to enable the plugin though — a CKEditor plugin can either be enabled
 * automatically when a button it provides is present in the toolbar, or when
 * some programmatically defined condition is true. In the former case,
 * implement the CKEditorPluginButtonsInterface interface, in the latter case,
 * implement the CKEditorPluginContextualInterface interface. It is also
 * possible to implement both, for advanced use cases.
 *
 * Finally, if your plugin must be configurable, you can also implement the
 * CKEditorPluginConfigurableInterface interface.
 *
 * @see \\Drupal\\ckeditor\\CKEditorPluginButtonsInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginContextualInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginConfigurableInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginCssInterface
 * @see \\Drupal\\ckeditor\\CKEditorPluginBase
 * @see \\Drupal\\ckeditor\\CKEditorPluginManager
 * @see \\Drupal\\ckeditor\\Annotation\\CKEditorPlugin
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
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
    'fbac0b1ef1b1bebbf54594e53788dc37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if this plugin is part of the optimized CKEditor build.
   *
   * Plugins marked as internal are implicitly loaded as part of CKEditor.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
         'functionName' => 'isInternal',
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
    '3e11b9b705bfc28dcf05b2d9f795b795' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of plugins this plugin requires.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   An unindexed array of plugin names this plugin requires. Each plugin is
   *   is identified by its annotated ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
         'functionName' => 'getDependencies',
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
    '02acec19c0eed5e2cd09d47d56824bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of libraries this plugin requires.
   *
   * These libraries will be attached to the text_format element on which the
   * editor is being loaded.
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   An array of libraries suitable for usage in a render API #attached
   *   property.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
         'functionName' => 'getLibraries',
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
    '7efdd9b7338dc0c14e8c0904e4bc914c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Drupal root-relative file path to the plugin JavaScript file.
   *
   * Note: this does not use a Drupal library because this uses CKEditor\'s API.
   * @see https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_resourceManager.html#method-addExternal
   *
   * @return string|false
   *   The Drupal root-relative path to the file, FALSE if an internal plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
         'functionName' => 'getFile',
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
    '28d1dfdc6d25ee9934b19543a34f5213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the additions to CKEDITOR.config for a specific CKEditor instance.
   *
   * The editor\'s settings can be retrieved via $editor->getSettings(), but be
   * aware that it may not yet contain plugin-specific settings, because the
   * user may not yet have configured the form.
   * If there are plugin-specific settings (verify with isset()), they can be
   * found at
   * @code
   * $settings = $editor->getSettings();
   * $plugin_specific_settings = $settings[\'plugins\'][$plugin_id];
   * @endcode
   *
   * @param \\Drupal\\editor\\Entity\\Editor $editor
   *   A configured text editor object.
   *
   * @return array
   *   A keyed array, whose keys will end up as keys under CKEDITOR.config.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\ckeditor',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'editor' => 'Drupal\\editor\\Entity\\Editor',
        ),
         'className' => 'Drupal\\ckeditor\\CKEditorPluginInterface',
         'functionName' => 'getConfig',
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