<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/exposed_form/ExposedFormPluginInterface.php-1624732869',
   'data' => 
  array (
    'b3206e6b761479094580ad88a6f2ea03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for exposed filter form plugins.
 *
 * Exposed form plugins handle the rendering, validation, and submission
 * of exposed forms, and may add additional form elements. These plugins can
 * also alter the view query. See
 * \\Drupal\\views\\Plugin\\views\\exposed_form\\InputRequired as an example of
 * that functionality.
 *
 * @see \\Drupal\\views\\Annotation\\ViewsExposedForm
 * @see \\Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
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
    'fadd4470a6990b0b5f3d1ded21114537' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the exposed form.
   *
   * This method iterates over each handler configured to expose widgets
   * to the end user and attach those widgets to the exposed form.
   *
   * @param bool $block
   *   (optional) TRUE if the exposed form is being rendered as part of a
   *   block; FALSE (default) if not.
   *
   * @return array
   *   Form build array. This method returns an empty array if the form is
   *   being rendered as a block.
   *
   * @see \\Drupal\\views\\ViewExecutable::build()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'renderExposedForm',
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
    '6e82fed7743cef7481c9466d89fddba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs before the view is rendered.
   *
   * Implement if your exposed form needs to run code before the view is
   * rendered.
   *
   * @param \\Drupal\\views\\ResultRow[] $values
   *   An array of all ResultRow objects returned from the query.
   *
   * @see \\Drupal\\views\\ViewExecutable::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'preRender',
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
    'e059551d7de235c19ed38979236a913d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs after the view has been rendered.
   *
   * Implement if your exposed form needs to run code after the view is
   * rendered.
   *
   * @param string $output
   *   The rendered output of the view display.
   *
   * @see \\Drupal\\views\\ViewExecutable::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
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
    '631b9bc9cee9317dd558f7e00605da94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs before the view has been executed.
   *
   * Implement if your exposed form needs to run code before query execution.
   *
   * @see \\Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase::preExecute()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'preExecute',
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
    'a6c6e4d48123510a39d6efd75686e668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs after the view has been executed.
   *
   * Implement if your exposed form needs to run code after query execution.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'postExecute',
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
    '4604e5306baa16c6cddb3f9c2da0f119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alters the exposed form.
   *
   * The exposed form is built by calling the renderExposedForm() method on
   * this class, and then letting each exposed filter and sort handler add
   * widgets to the form. After that is finished, this method is called to
   * let the class alter the finished form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface::renderExposedForm()
   * @see \\Drupal\\views\\Form\\ViewsExposedForm::buildForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'exposedFormAlter',
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
    '2c4101518450496c7ebe3a706a18a2f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the exposed form submission.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @see \\Drupal\\views\\Form\\ViewsExposedForm::validateForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'exposedFormValidate',
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
    '7a2669da26ed197bedf9f7fe4852e9c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submits the exposed form.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $exclude
   *   Array of keys that will not appear in $view->exposed_raw_input; for
   *   example, \'form_build_id\'.
   *
   * @see \\Drupal\\views\\Form\\ViewsExposedForm::submitForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\exposed_form\\ExposedFormPluginInterface',
         'functionName' => 'exposedFormSubmit',
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
    '92a90215b74c35e2f82f84c36cc54913' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @}
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\exposed_form',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewsplugininterface' => 'Drupal\\views\\Plugin\\views\\ViewsPluginInterface',
        ),
         'className' => NULL,
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
  ),
));