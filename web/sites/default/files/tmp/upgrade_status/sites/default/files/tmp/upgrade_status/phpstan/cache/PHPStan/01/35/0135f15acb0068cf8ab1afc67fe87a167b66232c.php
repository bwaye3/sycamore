<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Form/FormStateInterface.php-1624732867',
   'data' => 
  array (
    '46973231bf2d0ae289fb0f80687005b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for an object containing the current state of a form.
 *
 * This is passed to all form related code so that the caller can use it to
 * examine what in the form changed when the form submission process is
 * complete. Furthermore, it may be used to store information related to the
 * processed data in the form, which will persist across page requests when the
 * \'cache\' or \'rebuild\' flag is set. See \\Drupal\\Core\\Form\\FormState for
 * documentation of the available flags.
 *
 * @see \\Drupal\\Core\\Form\\FormBuilderInterface
 * @see \\Drupal\\Core\\Form\\FormValidatorInterface
 * @see \\Drupal\\Core\\Form\\FormSubmitterInterface
 * @ingroup form_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
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
    '10d6e76bdfd77efb7afcc5be7aadc4f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a reference to the complete form array.
   *
   * @return array
   *   The complete form array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getCompleteForm',
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
    '683bf56d175bee5f7045ca0eb34d0cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the complete form array.
   *
   * @param array $complete_form
   *   The complete form array.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setCompleteForm',
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
    '7a37f340fe9bfe20b5f2877cd4260cc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures an include file is loaded whenever the form is processed.
   *
   * Example:
   * @code
   *   // Load node.admin.inc from Node module.
   *   $form_state->loadInclude(\'node\', \'inc\', \'node.admin\');
   * @endcode
   *
   * Use this function instead of module_load_include() from inside a form
   * constructor or any form processing logic as it ensures that the include file
   * is loaded whenever the form is processed. In contrast to using
   * module_load_include() directly, this method makes sure the include file is
   * correctly loaded also if the form is cached.
   *
   * @param string $module
   *   The module to which the include file belongs.
   * @param string $type
   *   The include file\'s type (file extension).
   * @param string|null $name
   *   (optional) The base file name (without the $type extension). If omitted,
   *   $module is used; i.e., resulting in "$module.$type" by default.
   *
   * @return string|false
   *   The filepath of the loaded include file, or FALSE if the include file was
   *   not found or has been loaded already.
   *
   * @see module_load_include()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'loadInclude',
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
    'b7920047812f797c5ad367c448f95059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array representation of the cacheable portion of the form state.
   *
   * @return array
   *   The cacheable portion of the form state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getCacheableArray',
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
    '34134c8de69c5ffdd1abee498fd825f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of the form state.
   *
   * @param array $form_state_additions
   *   An array of values to add to the form state.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setFormState',
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
    'bf7df83938a6aae596d433f6f78cbb3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a response for this form.
   *
   * If a response is set, it will be used during processing and returned
   * directly. The form will not be rebuilt or redirected.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Response $response
   *   The response to return.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setResponse',
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
    '835b54a4767a99712bb187e7c0037f2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a response for this form.
   *
   * If a response is set, it will be used during processing and returned
   * directly. The form will not be rebuilt or redirected.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response|null
   *   The response to return, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getResponse',
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
    '51b7951fd6d9b3c5401dda98de1953a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect for the form.
   *
   * @param string $route_name
   *   The name of the route
   * @param array $route_parameters
   *   (optional) An associative array of parameter names and values.
   * @param array $options
   *   (optional) An associative array of additional options containing the
   *   same values accepted from \\Drupal\\Core\\Url::fromUri() for $options.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
   * @see \\Drupal\\Core\\Url::fromUri()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setRedirect',
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
    'ba08d2c887128c39e93476fcc4d3f246' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect URL for the form.
   *
   * @param \\Drupal\\Core\\Url $url
   *   The URL to redirect to.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setRedirectUrl',
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
    'bff568f70ba3ff47219e93f4d907d41c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value to use for redirecting after the form has been executed.
   *
   * @see \\Drupal\\Core\\Form\\FormSubmitterInterface::redirectForm()
   *
   * @return mixed
   *   The value will be one of the following:
   *   - A fully prepared \\Symfony\\Component\\HttpFoundation\\RedirectResponse.
   *   - An instance of \\Drupal\\Core\\Url to use for the redirect.
   *   - NULL, to signify that no redirect was specified and that the current
   *     path should be used for the redirect.
   *   - FALSE, to signify that no redirect should take place.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getRedirect',
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
    'c05563a8e2dc7333a01440c101d2019b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the entire set of arbitrary data.
   *
   * @param array $storage
   *   The entire set of arbitrary data to store for this form.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setStorage',
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
    '5b261a98c019cc1eed37a1b363785f58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entire set of arbitrary data.
   *
   * @return array
   *   The entire set of arbitrary data to store for this form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getStorage',
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
    '3df6f7566630fdf783e89842760a5697' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets any arbitrary property.
   *
   * @param string|array $property
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $property is a string, it will return $storage[$property]. If $property
   *   is an array, each element of the array will be used as a nested key. If
   *   $property = [\'foo\', \'bar\'] it will return $storage[\'foo\'][\'bar\'].
   *
   * @return mixed
   *   A reference to the value for that property, or NULL if the property does
   *   not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'get',
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
    '05f0b88e8f7408ba3f8ac0234560cecc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a value to an arbitrary property.
   *
   * @param string|array $property
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $property is a string, it will use $storage[$property] = $value. If
   *   $property is an array, each element of the array will be used as a nested
   *   key. If $property = [\'foo\', \'bar\'] it will use
   *   $storage[\'foo\'][\'bar\'] = $value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'set',
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
    'aecbf6c294143f32832b4ca8f5f325c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an arbitrary property is present.
   *
   * @param string $property
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $property is a string, it will return isset($storage[$property]). If
   *   $property is an array, each element of the array will be used as a nested
   *   key. If $property = [\'foo\', \'bar\'] it will return
   *   isset($storage[\'foo\'][\'bar\']).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'has',
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
    '9233b09a2c87efaa1aff145c899f739c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the build info for the form.
   *
   * @param array $build_info
   *   An array of build info.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormState::$build_info
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setBuildInfo',
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
    '177ec1dfb9fba770abe2f3d358913745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the build info for the form.
   *
   * @return array
   *   An array of build info.
   *
   * @see \\Drupal\\Core\\Form\\FormState::$build_info
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getBuildInfo',
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
    '658fa3867a289f571816e7f484449ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a value to the build info.
   *
   * @param string $property
   *   The property to use for the value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'addBuildInfo',
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
    '8dbc4a19fc6db9ce7099d354143be194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the form values as they were submitted by the user.
   *
   * These are raw and unvalidated, so should not be used without a thorough
   * understanding of security implications. In almost all cases, code should
   * use self::getValues() and self::getValue() exclusively.
   *
   * @return array
   *   An associative array of values submitted to the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getUserInput',
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
    '3eb82dd775ba21e96402f7ca05ff1560' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form values as though they were submitted by a user.
   *
   * @param array $user_input
   *   An associative array of raw and unvalidated values.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setUserInput',
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
    'dd90021ee16d79629497f83673fc0421' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the submitted and sanitized form values.
   *
   * @return array
   *   An associative array of values submitted to the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getValues',
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
    '16b08e41bfcd58829217238e1a6d711c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the submitted form value for a specific key.
   *
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will return $values[$key]. If $key is an array, each element
   *   of the array will be used as a nested key. If $key = array(\'foo\', \'bar\')
   *   it will return $values[\'foo\'][\'bar\'].
   * @param mixed $default
   *   (optional) The default value if the specified key does not exist.
   *
   * @return mixed
   *   The value for the given key, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
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
    '19dcc46dffb3e7bcd2aa09d31a7d78eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the submitted form values.
   *
   * This should be avoided, since these values have been validated already. Use
   * self::setUserInput() instead.
   *
   * @param array $values
   *   The multi-dimensional associative array of form values.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValues',
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
    'd934973213e84430da525a550402b921' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the submitted form value for a specific key.
   *
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will use $values[$key] = $value. If $key is an array, each
   *   element of the array will be used as a nested key. If
   *   $key = array(\'foo\', \'bar\') it will use $values[\'foo\'][\'bar\'] = $value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValue',
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
    'd6185fa6c65c54985a9a0afe17d2827b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a specific key from the submitted form values.
   *
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will use unset($values[$key]). If $key is an array, each
   *   element of the array will be used as a nested key. If
   *   $key = array(\'foo\', \'bar\') it will use unset($values[\'foo\'][\'bar\']).
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'unsetValue',
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
    '2069806fb21848c4d8a4ae5f83386506' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a specific key is present in the submitted form values.
   *
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will return isset($values[$key]). If $key is an array, each
   *   element of the array will be used as a nested key. If
   *   $key = array(\'foo\', \'bar\') it will return isset($values[\'foo\'][\'bar\']).
   *
   * @return bool
   *   TRUE if the $key is set, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'hasValue',
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
    '3f4ddebb281d4443ad44abea0f6c39e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a specific key has a value in the submitted form values.
   *
   * @param string|array $key
   *   Values are stored as a multi-dimensional associative array. If $key is a
   *   string, it will return empty($values[$key]). If $key is an array, each
   *   element of the array will be used as a nested key. If
   *   $key = array(\'foo\', \'bar\') it will return empty($values[\'foo\'][\'bar\']).
   *
   * @return bool
   *   TRUE if the $key has no value, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isValueEmpty',
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
    'fcbf673dccfded90af093c7844802828' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes submitted form values during form validation.
   *
   * Use this function to change the submitted value of a form element in a form
   * validation function, so that the changed value persists in $form_state
   * through to the submission handlers.
   *
   * Note that form validation functions are specified in the \'#validate\'
   * component of the form array (the value of $form[\'#validate\'] is an array of
   * validation function names). If the form does not originate in your module,
   * you can implement hook_form_FORM_ID_alter() to add a validation function
   * to $form[\'#validate\'].
   *
   * @param array $element
   *   The form element that should have its value updated; in most cases you
   *   can just pass in the element from the $form array, although the only
   *   component that is actually used is \'#parents\'. If constructing yourself,
   *   set $element[\'#parents\'] to be an array giving the path through the form
   *   array\'s keys to the element whose value you want to update. For instance,
   *   if you want to update the value of $form[\'elem1\'][\'elem2\'], which should
   *   be stored in $form_state->getValue(array(\'elem1\', \'elem2\')), you would
   *   set $element[\'#parents\'] = array(\'elem1\',\'elem2\').
   * @param mixed $value
   *   The new value for the form element.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValueForElement',
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
    'ba99deb50ba5445c26064c5b796e8731' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if any forms have any errors.
   *
   * @return bool
   *   TRUE if any form has any errors, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'hasAnyErrors',
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
    '980223a0a81477404ab223ba450d9667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Files an error against a form element.
   *
   * When a validation error is detected, the validator calls this method to
   * indicate which element needs to be changed and provide an error message.
   * This causes the Form API to not execute the form submit handlers, and
   * instead to re-display the form to the user with the corresponding elements
   * rendered with an \'error\' CSS class (shown as red by default).
   *
   * The standard behavior of this method can be changed if a button provides
   * the #limit_validation_errors property. Multistep forms not wanting to
   * validate the whole form can set #limit_validation_errors on buttons to
   * limit validation errors to only certain elements. For example, pressing the
   * "Previous" button in a multistep form should not fire validation errors
   * just because the current step has invalid values. If
   * #limit_validation_errors is set on a clicked button, the button must also
   * define a #submit property (may be set to an empty array). Any #submit
   * handlers will be executed even if there is invalid input, so extreme care
   * should be taken with respect to any actions taken by them. This is
   * typically not a problem with buttons like "Previous" or "Add more" that do
   * not invoke persistent storage of the submitted form values. Do not use the
   * #limit_validation_errors property on buttons that trigger saving of form
   * values to the database.
   *
   * The #limit_validation_errors property is a list of "sections" within
   * $form_state->getValues() that must contain valid values. Each "section" is
   * an array with the ordered set of keys needed to reach that part of
   * $form_state->getValues() (i.e., the #parents property of the element).
   *
   * Example 1: Allow the "Previous" button to function, regardless of whether
   * any user input is valid.
   *
   * @code
   *   $form[\'actions\'][\'previous\'] = array(
   *     \'#type\' => \'submit\',
   *     \'#value\' => t(\'Previous\'),
   *     \'#limit_validation_errors\' => array(),       // No validation.
   *     \'#submit\' => array(\'some_submit_function\'),  // #submit required.
   *   );
   * @endcode
   *
   * Example 2: Require some, but not all, user input to be valid to process the
   * submission of a "Previous" button.
   *
   * @code
   *   $form[\'actions\'][\'previous\'] = array(
   *     \'#type\' => \'submit\',
   *     \'#value\' => t(\'Previous\'),
   *     \'#limit_validation_errors\' => array(
   *       // Validate $form_state->getValue(\'step1\').
   *       array(\'step1\'),
   *       // Validate $form_state->getValue(array(\'foo\', \'bar\')).
   *       array(\'foo\', \'bar\'),
   *     ),
   *     \'#submit\' => array(\'some_submit_function\'), // #submit required.
   *   );
   * @endcode
   *
   * This will require $form_state->getValue(\'step1\') and everything within it
   * (for example, $form_state->getValue(array(\'step1\', \'choice\'))) to be valid,
   * so calls to self::setErrorByName(\'step1\', $message) or
   * self::setErrorByName(\'step1][choice\', $message) will prevent the submit
   * handlers from running, and result in the error message being displayed to
   * the user. However, calls to self::setErrorByName(\'step2\', $message) and
   * self::setErrorByName(\'step2][groupX][choiceY\', $message) will be
   * suppressed, resulting in the message not being displayed to the user, and
   * the submit handlers will run despite $form_state->getValue(\'step2\') and
   * $form_state->getValue(array(\'step2\', \'groupX\', \'choiceY\')) containing
   * invalid values. Errors for an invalid $form_state->getValue(\'foo\') will be
   * suppressed, but errors flagging invalid values for
   * $form_state->getValue(array(\'foo\', \'bar\')) and everything within it will
   * be flagged and submission prevented.
   *
   * Partial form validation is implemented by suppressing errors rather than by
   * skipping the input processing and validation steps entirely, because some
   * forms have button-level submit handlers that call Drupal API functions that
   * assume that certain data exists within $form_state->getValues(), and while
   * not doing anything with that data that requires it to be valid, PHP errors
   * would be triggered if the input processing and validation steps were fully
   * skipped.
   *
   * @param string $name
   *   The name of the form element. If the #parents property of your form
   *   element is array(\'foo\', \'bar\', \'baz\') then you may set an error on \'foo\'
   *   or \'foo][bar][baz\'. Setting an error on \'foo\' sets an error for every
   *   element where the #parents array starts with \'foo\'.
   * @param string $message
   *   (optional) The error message to present to the user.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setErrorByName',
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
    '05b01fa15f0dc207d89af1aeeae64465' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags an element as having an error.
   *
   * @param array $element
   *   The form element.
   * @param string $message
   *   (optional) The error message to present to the user.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setError',
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
    '075d794acb81ccd14f23ab4345fe6de4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears all errors against all form elements made by self::setErrorByName().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'clearErrors',
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
    '69610f8b27038161d9a1cf63718b5849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an associative array of all errors.
   *
   * @return array
   *   An array of all errors, keyed by the name of the form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getErrors',
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
    '76eabc793a1a385f7c73bbaa7dbb6d5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the error message filed against the given form element.
   *
   * Form errors higher up in the form structure override deeper errors as well
   * as errors on the element itself.
   *
   * @param array $element
   *   The form element to check for errors.
   *
   * @return string|null
   *   Either the error message for this element or NULL if there are no errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getError',
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
    'cb8f250d8e64bca8ebeca0b8d589f9de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form to be rebuilt after processing.
   *
   * @param bool $rebuild
   *   (optional) Whether the form should be rebuilt or not. Defaults to TRUE.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setRebuild',
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
    '5d8376ef557c142fb5478f49afaf4c87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form should be rebuilt after processing.
   *
   * @return bool
   *   TRUE if the form should be rebuilt, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isRebuilding',
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
    'b8e439a2a8a7de5ff8693f328396fb51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flags the form state as having or not an invalid token.
   *
   * @param bool $invalid_token
   *   Whether the form has an invalid token.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setInvalidToken',
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
    'b65c4b00c3c633b8b591ccbf0582431f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form has an invalid token.
   *
   * @return bool
   *   TRUE if the form has an invalid token, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'hasInvalidToken',
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
    'b17e582e0f3095c9a81ef22a21e8df7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts support notations for a form callback to a valid callable.
   *
   * Specifically, supports methods on the form/callback object as strings when
   * they start with ::, for example "::submitForm()".
   *
   * @param string|array $callback
   *   The callback.
   *
   * @return array|string
   *   A valid callable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'prepareCallback',
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
    'de44b7d526eab1d3bdaf177e59716399' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the form object that is responsible for building this form.
   *
   * @return \\Drupal\\Core\\Form\\FormInterface
   *   The form object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getFormObject',
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
    'da81ee34f34a24e912d8f037f1350f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form object that is responsible for building this form.
   *
   * @param \\Drupal\\Core\\Form\\FormInterface $form_object
   *   The form object.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setFormObject',
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
    'd430e1c35521be6bccf984bc764df61c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets this form to always be processed.
   *
   * This should only be used on RESTful GET forms that do NOT write data, as
   * this could lead to security issues. It is useful so that searches do not
   * need to have a form_id in their query arguments to trigger the search.
   *
   * @param bool $always_process
   *   TRUE if the form should always be processed, FALSE otherwise.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setAlwaysProcess',
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
    'fc5e396755ead5c558818c6a1a8a5775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this form should always be processed.
   *
   * @return bool
   *   TRUE if the form should always be processed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getAlwaysProcess',
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
    'e90cf99c2e3d52f8531d0077bd1734de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the submit and button elements for the form.
   *
   * @param array $buttons
   *   The submit and button elements.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setButtons',
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
    '2d1133ebf14f732deb75e2a298ae9e6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the submit and button elements for the form.
   *
   * @return array
   *   The submit and button elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getButtons',
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
    '1fe9dc3ea3c59ef55d27417d0a58d328' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets this form to be cached.
   *
   * @param bool $cache
   *   TRUE if the form should be cached, FALSE otherwise.
   *
   * @return $this
   *
   * @throws \\LogicException
   *   If the current request is using an HTTP method that must not change
   *   state (e.g., GET).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setCached',
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
    'e83852d70d92eab2bdc54b68217d3d06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form should be cached.
   *
   * @return bool
   *   TRUE if the form should be cached, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isCached',
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
    '1e9969dd0eaa5945774a4afb90d01cca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents the form from being cached.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'disableCache',
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
    '684c15750cafedf22934054195d5f3e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that the form was submitted and has been processed and executed.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setExecuted',
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
    '9b2cd523df965b99f05d57ead7118db9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form was submitted and has been processed and executed.
   *
   * @return bool
   *   TRUE if the form was submitted and has been processed and executed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isExecuted',
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
    'c0882acfbf1b2d1eabfb4cf2239f7ecd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets references to details elements to render them within vertical tabs.
   *
   * @param array $groups
   *   References to details elements to render them within vertical tabs.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setGroups',
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
    'ecf9808cadbfee882674cce88ac8c0d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns references to details elements to render them within vertical tabs.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getGroups',
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
    '70fb4d5754f09a41f1edb0d48d71ee6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that this form has a file element.
   *
   * @param bool $has_file_element
   *   Whether this form has a file element.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setHasFileElement',
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
    '337202522c6da2310f0af07decef8692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether this form has a file element.
   *
   * @return bool
   *   Whether this form has a file element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'hasFileElement',
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
    'c08509112ad87bd3759e26ae16345b41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the limited validation error sections.
   *
   * @param array|null $limit_validation_errors
   *   The limited validation error sections.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormState::$limit_validation_errors
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setLimitValidationErrors',
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
    '6bebc10fa6a6d0fde6bb1d38323f3cf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the limited validation error sections.
   *
   * @return array|null
   *   The limited validation error sections.
   *
   * @see \\Drupal\\Core\\Form\\FormState::$limit_validation_errors
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getLimitValidationErrors',
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
    'a698fe582e3e3d439e8a9a8bc17f9596' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the HTTP method to use for the form\'s submission.
   *
   * This is what the form\'s "method" attribute should be, not necessarily what
   * the current request\'s HTTP method is. For example, a form can have a
   * method attribute of POST, but the request that initially builds it uses
   * GET.
   *
   * @param string $method
   *   Either "GET" or "POST". Other HTTP methods are not valid form submission
   *   methods.
   *
   * @see \\Drupal\\Core\\Form\\FormState::$method
   * @see \\Drupal\\Core\\Form\\FormStateInterface::setRequestMethod()
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setMethod',
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
    '80e24ab8837a597480bedb75664c4efe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the HTTP method used by the request that is building the form.
   *
   * @param string $method
   *   Can be any valid HTTP method, such as GET, POST, HEAD, etc.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormStateInterface::setMethod()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setRequestMethod',
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
    '3e4264996d15f7ca2110b7dc2955c6c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the HTTP form method.
   *
   * @param string $method_type
   *   The HTTP form method.
   *
   * @return bool
   *   TRUE if the HTTP form method matches.
   *
   * @see \\Drupal\\Core\\Form\\FormState::$method
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isMethodType',
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
    '5f390fb4365837d14ac41c180418a1c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enforces that validation is run.
   *
   * @param bool $must_validate
   *   If TRUE, validation will always be run.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValidationEnforced',
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
    'e10005cfcdb704c1b04afbd507b39771' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if validation is enforced.
   *
   * @return bool
   *   If TRUE, validation will always be run.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isValidationEnforced',
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
    '1f422d7042a794365c94cdfc120c6d12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents the form from redirecting.
   *
   * @param bool $no_redirect
   *   If TRUE, the form will not redirect.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'disableRedirect',
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
    '122bf6e6800489a41d0a7495f599960d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if redirecting has been prevented.
   *
   * @return bool
   *   If TRUE, the form will not redirect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isRedirectDisabled',
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
    '7c7e49a55a71d3ea59b2a4ff8293b502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that the form should process input.
   *
   * @param bool $process_input
   *   If TRUE, the form input will be processed.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setProcessInput',
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
    '2dc6a3221b2cd66b20ae18702cd8ab44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form input will be processed.
   *
   * @return bool
   *   If TRUE, the form input will be processed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isProcessingInput',
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
    'ac6dbcd65f379d51a6bac721a36f5a40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that this form was submitted programmatically.
   *
   * @param bool $programmed
   *   If TRUE, the form was submitted programmatically.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setProgrammed',
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
    '6e92065904b05e01814d343572f3e10a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns if this form was submitted programmatically.
   *
   * @return bool
   *   If TRUE, the form was submitted programmatically.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isProgrammed',
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
    '8e5d83643861e85ab05236176a7bd22e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets if this form submission should bypass #access.
   *
   * @param bool $programmed_bypass_access_check
   *   If TRUE, programmatic form submissions are processed without taking
   *   #access into account.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormState::$programmed_bypass_access_check
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setProgrammedBypassAccessCheck',
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
    '176f105102a4addf432827bfa7459526' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this form submission should bypass #access.
   *
   * @return bool
   *
   * @see \\Drupal\\Core\\Form\\FormState::$programmed_bypass_access_check
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isBypassingProgrammedAccessChecks',
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
    '3152d6fa58fae96aba9c49f3ce40a172' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the rebuild info.
   *
   * @param array $rebuild_info
   *   The rebuild info.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Form\\FormState::$rebuild_info
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setRebuildInfo',
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
    '3356900e267fdb3a53a502610d1088c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the rebuild info.
   *
   * @return array
   *   The rebuild info.
   *
   * @see \\Drupal\\Core\\Form\\FormState::$rebuild_info
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getRebuildInfo',
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
    '681f9692a8de0cbd77273dfcf3eff10d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a value to the rebuild info.
   *
   * @param string $property
   *   The property to use for the value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'addRebuildInfo',
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
    'b2c495685f3913d20d888bea111e22c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the submit handlers.
   *
   * @param array $submit_handlers
   *   An array of submit handlers.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setSubmitHandlers',
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
    '0c53dfbb069b5f8b132a9b8bd6a3fd86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the submit handlers.
   *
   * @return array
   *   An array of submit handlers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getSubmitHandlers',
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
    '67c9e205721411a5f6809926f56b9475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that the form has been submitted.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setSubmitted',
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
    '88ef669d7142a7802beca1debd006efd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the form has been submitted.
   *
   * @return bool
   *   TRUE if the form has been submitted, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isSubmitted',
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
    '8c68f073a8bbbd96040d4b5ed5d8f6e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets temporary data.
   *
   * @param array $temporary
   *   Temporary data accessible during the current page request only.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setTemporary',
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
    '32cd5e976fddba2a7eb2082ba404e8a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets temporary data.
   *
   * @return array
   *   Temporary data accessible during the current page request only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getTemporary',
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
    '15b1c87abc02887731ec308cd1351b5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an arbitrary value from temporary storage.
   *
   * @param string|array $key
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $key is a string, it will return $temporary[$key]. If $key is an array,
   *   each element of the array will be used as a nested key. If
   *   $key = [\'foo\', \'bar\'] it will return $temporary[\'foo\'][\'bar\'].
   *
   * @return mixed
   *   A reference to the value for that key, or NULL if the property does
   *   not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getTemporaryValue',
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
    '06b7f90b2b91f2cc3b4867088b1cbd61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an arbitrary value in temporary storage.
   *
   * @param string|array $key
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $key is a string, it will use $temporary[$key] = $value. If $key is an
   *   array, each element of the array will be used as a nested key. If
   *   $key = [\'foo\', \'bar\'] it will use $temporary[\'foo\'][\'bar\'] = $value.
   * @param mixed $value
   *   The value to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setTemporaryValue',
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
    '11fa38d1676770d934fd4db7a454565d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a temporary value is present.
   *
   * @param string $key
   *   Properties are often stored as multi-dimensional associative arrays. If
   *   $key is a string, it will return isset($temporary[$key]). If $key is an
   *   array, each element of the array will be used as a nested key. If
   *   $key = [\'foo\', \'bar\'] it will return isset($temporary[\'foo\'][\'bar\']).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'hasTemporaryValue',
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
    'd93554228286693cb048f02a73fd0542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form element that triggered submission.
   *
   * @param array|null $triggering_element
   *   The form element that triggered submission, of NULL if there is none.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setTriggeringElement',
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
    'be2135bcd06d5a3969d4e24fa12c6594' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the form element that triggered submission.
   *
   * @return array|null
   *   The form element that triggered submission, of NULL if there is none.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getTriggeringElement',
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
    'bd853dcd9df99f45934841b0a20cb184' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the validate handlers.
   *
   * @param array $validate_handlers
   *   An array of validate handlers.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValidateHandlers',
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
    '1d3e17a4708ff7618d818520fd4ef058' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the validate handlers.
   *
   * @return array
   *   An array of validate handlers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getValidateHandlers',
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
    '1006f6097dd4b8ae9f0a220a715e081c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that validation has been completed.
   *
   * @param bool $validation_complete
   *   TRUE if validation is complete, FALSE otherwise.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setValidationComplete',
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
    '30cbed8bd049481efb36a73bddf79558' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if validation has been completed.
   *
   * @return bool
   *   TRUE if validation is complete, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'isValidationComplete',
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
    'e6fa7924c6fc3b9ab85790436fbeafce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the keys of the form values that will be cleaned.
   *
   * @return array
   *   An array of form value keys to be cleaned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'getCleanValueKeys',
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
    '45e832d79f3e209b6b3d52cde5466320' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the keys of the form values that will be cleaned.
   *
   * @param array $keys
   *   An array of form value keys to be cleaned.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'setCleanValueKeys',
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
    'b0f09b090bfc7622863e9511d94b19b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a key to the array of form values that will be cleaned.
   *
   * @param string $key
   *   The form value key to be cleaned.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'addCleanValueKey',
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
    '26575ebdc9958083ce22f05a5f35bc64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes internal Form API elements and buttons from submitted form values.
   *
   * This function can be used when a module wants to store all submitted form
   * values, for example, by serializing them into a single database column. In
   * such cases, all internal Form API values and all form button elements
   * should not be contained, and this function allows their removal before the
   * module proceeds to storage. Next to button elements, the following internal
   * values are removed by default.
   * - form_id
   * - form_token
   * - form_build_id
   * - op
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\Form\\FormStateInterface',
         'functionName' => 'cleanValues',
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