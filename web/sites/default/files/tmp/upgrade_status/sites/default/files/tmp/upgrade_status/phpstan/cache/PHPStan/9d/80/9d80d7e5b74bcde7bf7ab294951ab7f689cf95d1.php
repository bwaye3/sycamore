<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Form/FormSubmitterInterface.php-1624732867',
   'data' => 
  array (
    '853222842983d6fdc23a183cd4a7714e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for processing form submissions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormSubmitterInterface',
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
    '48d30429fc7db826be96ce02a304e66e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles the submitted form, executing callbacks and processing responses.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return null|\\Symfony\\Component\\HttpFoundation\\Response
   *   If a response was set by a submit handler, or if the form needs to
   *   redirect, a Response object will be returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormSubmitterInterface',
         'functionName' => 'doSubmitForm',
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
    '813f4533b8798bdcca22d8138d32df0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes custom submission handlers for a given form.
   *
   * Button-specific handlers are checked first. If none exist, the function
   * falls back to form-level handlers.
   *
   * @param $form
   *   An associative array containing the structure of the form.
   * @param $form_state
   *   The current state of the form. If the user submitted the form by clicking
   *   a button with custom handler functions defined, those handlers will be
   *   stored here.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormSubmitterInterface',
         'functionName' => 'executeSubmitHandlers',
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
    '59d803c1cf4ee4f884919c99f49fbc52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirects the user to a URL after a form has been processed.
   *
   * After a form is submitted and processed, normally the user should be
   * redirected to a new destination page. This function figures out what that
   * destination should be, based on the $form_state and the \'destination\'
   * query string in the request URL, and redirects the user there.
   *
   * The result of \\Drupal\\Core\\Form|FormStateInterface::getRedirect()
   * determines where to redirect the user. See the possible return values
   * listed there. If the result is FALSE, then the user will not be redirected.
   *
   * Here is an example of how to set up a form to redirect to the path \'user\':
   * @code
   * $form_state->setRedirect(\'user.page\');
   * @endcode
   * And here is an example of how to redirect to \'node/123?foo=bar#baz\':
   * @code
   * $form_state->setRedirect(\'entity.node.canonical\',
   *   array(\'node\' => 123),
   *   array(
   *     \'query\' => array(
   *       \'foo\' => \'bar\',
   *     ),
   *     \'fragment\' => \'baz\',
   *   ),
   * );
   * @endcode
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse|null
   *
   * @see \\Drupal\\Core\\Form\\FormBuilderInterface::processForm()
   * @see \\Drupal\\Core\\Form\\FormBuilderInterface::buildForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Form\\FormSubmitterInterface',
         'functionName' => 'redirectForm',
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