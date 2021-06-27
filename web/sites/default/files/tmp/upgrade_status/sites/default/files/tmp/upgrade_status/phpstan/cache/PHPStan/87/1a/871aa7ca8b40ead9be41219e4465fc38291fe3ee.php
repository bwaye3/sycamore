<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/captcha.module-1624732871',
   'data' => 
  array (
    'dbd3d6b8796a99a20d3d03218db90b2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * This module enables basic CAPTCHA functionality.
 *
 * Administrators can add a CAPTCHA to desired forms that users without
 * the \'skip CAPTCHA\' permission (typically anonymous visitors) have
 * to solve.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
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
    '8795e1866b65bb6f135dc08654ad52e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constants for CAPTCHA persistence.
 *
 * TODO: change these integers to strings because the CAPTCHA settings
 * form saves them as strings in the variables table anyway?
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
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
    'aa0d7a5c17975d96910783e4648600d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_help',
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
    '8eb4c8381c5a176f982c520f43561922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loader for Captcha Point entity.
 *
 * @param string $id
 *   Form id string.
 *
 * @return \\Drupal\\Core\\Entity\\EntityInterface
 *   An instance of an captcha_point entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_point_load',
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
    'c5005786b0997799b38d54c4e5b87135' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_theme',
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
    '2b5ae8b7bf8423eebbeadfe96588ca24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_cron().
 *
 * Remove old entries from captcha_sessions table.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_cron',
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
    '63cd004a5d734d98ac23f6c7d196e96b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Theme function for a CAPTCHA element.
 *
 * Render it in a section element if a description of the CAPTCHA
 * is available. Render it as is otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_captcha',
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
    'ae88250242cb90b1e6a202219d02be92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_alter().
 *
 * This function adds a CAPTCHA to forms for untrusted users
 * if needed and adds. CAPTCHA administration links for site
 * administrators if this option is enabled.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_form_alter',
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
    '47d35ea988cdb0882c0a99d74c35197c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * CAPTCHA validation function to tests strict equality.
 *
 * @param string $solution
 *   The solution of the test.
 * @param string $response
 *   The response to the test.
 *
 * @return bool
 *   TRUE when case insensitive equal, FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_validate_strict_equality',
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
    'f262c03088583141a7c7814878140f48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * CAPTCHA validation function to tests case insensitive equality.
 *
 * @param string $solution
 *   The solution of the test.
 * @param string $response
 *   The response to the test.
 *
 * @return bool
 *   TRUE when case insensitive equal, FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_validate_case_insensitive_equality',
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
    'eba465ec34864172e885623517e9afb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * CAPTCHA validation function to tests equality while ignoring spaces.
 *
 * @param string $solution
 *   The solution of the test.
 * @param string $response
 *   The response to the test.
 *
 * @return bool
 *   TRUE when equal (ignoring spaces), FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_validate_ignore_spaces',
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
    '78ec97eba0a885fd1d00442b0ebbb432' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Validation function to tests case insensitive equality while ignoring spaces.
 *
 * @param string $solution
 *   The solution of the test.
 * @param string $response
 *   The response to the test.
 *
 * @return bool
 *   TRUE when equal (ignoring spaces), FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_validate_case_insensitive_ignore_spaces',
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
    '025558eef3679251a8d3795744f0dd0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for getting the posted CAPTCHA info.
 *
 * This function hides the form processing mess for several use cases an
 * browser bug workarounds.
 * For example: $element[\'#post\'] can typically be used to get the posted
 * form_id and captcha_sid, but in the case of node preview situations
 * (with correct CAPTCHA response) that does not work and we can get them from
 * $form_state[\'clicked_button\'][\'#post\'].
 * However with Internet Explorer 7, the latter does not work either when
 * submitting the forms (with only one text field) with the enter key
 * (see http://drupal.org/node/534168), in which case we also have to check
 * $form_state[\'buttons\'][\'button\'][\'0\'][\'#post\'].
 *
 * @param array $element
 *   The CAPTCHA element.
 * @param Drupal\\Core\\Form\\FormStateInterface $form_state
 *   The form state structure to extract the info from.
 * @param string $this_form_id
 *   The form ID of the form we are currently processing
 *   (which is not necessarily the form that was posted).
 *
 * @return array
 *   Array with $posted_form_id and $post_captcha_sid (with NULL values
 *   if the values could not be found, e.g. for a fresh form).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => '_captcha_get_posted_captcha_info',
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
    'c00217cf605398f6e2e200e81ae748fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * CAPTCHA validation handler.
 *
 * This function is placed in the main captcha.module file to make sure that
 * it is available (even for cached forms, which don\'t fire
 * captcha_form_alter(), and subsequently don\'t include additional include
 * files).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_validate',
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
    '3f195723628cfef590e6e8f9c1267534' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Pre-render callback for additional processing of a CAPTCHA form element.
 *
 * This encompasses tasks that should happen after the general FAPI processing
 * (building, submission and validation) but before rendering
 * (e.g. storing the solution).
 *
 * @param array $element
 *   The CAPTCHA form element.
 *
 * @return array
 *   The manipulated element.
 *
 * @deprecated in captcha:8.x-1.0 and is removed from captcha:8.x-2.0.
 *   Use \\Drupal\\captcha\\Element\\Captcha::preRenderProcess() instead.
 * @see https://www.drupal.org/project/captcha/issues/1949682
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_pre_render_process',
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
    '49c68419a9f9be74b13d39c92eb74cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation of hook_captcha().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captcha' => 'Drupal\\captcha\\Element\\Captcha',
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'database' => 'Drupal\\Core\\Database\\Database',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'element' => 'Drupal\\Core\\Render\\Element',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'settings' => 'Drupal\\Core\\Site\\Settings',
        ),
         'className' => NULL,
         'functionName' => 'captcha_captcha',
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