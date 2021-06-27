<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/captcha.inc-1624732871',
   'data' => 
  array (
    '72b9abfd6a47fec1d17661d99a9d7ac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * General CAPTCHA functionality and helper functions.
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
    'fbd40ba6a543dfca8c05a08e1ad4e62f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for adding/updating a CAPTCHA point.
 *
 * @param string $form_id
 *   the form ID to configure.
 * @param string $captcha_type
 *   The setting for the given form_id, can be:
 *   - \'default\' to use the default challenge type
 *   - NULL to remove the entry for the CAPTCHA type
 *   - something of the form \'image_captcha/Image\'
 *   - an object with attributes $captcha_type->module
 *   and $captcha_type->captcha_type.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => 'captcha_set_form_id_setting',
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
    '94006c7ccad512383312da3db147532a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get the CAPTCHA setting for a given form_id.
 *
 * @param string $form_id
 *   The form_id to query for.
 * @param bool $symbolic
 *   Flag to return as (symbolic) strings instead of object.
 *
 * @return null|CaptchaPoint
 *   NULL if no setting is known
 *   captcha point object with fields \'module\' and \'captcha_type\'.
 *   If argument $symbolic is true, returns \'default\' or in the
 *   form \'captcha/Math\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => 'captcha_get_form_id_setting',
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
    '2116f2d38b88c03740383a8c43e93ed0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for generating a new CAPTCHA session.
 *
 * @param string $form_id
 *   The form_id of the form to add a CAPTCHA to.
 * @param int $status
 *   The initial status of the CAPTHCA session.
 *
 * @return string
 *   The session ID of the new CAPTCHA session.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_generate_captcha_session',
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
    '816ac0758d89a4f5075e86accbb812e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for updating the solution in the CAPTCHA session table.
 *
 * @param string $captcha_sid
 *   The CAPTCHA session ID to update.
 * @param string $solution
 *   The new solution to associate with the given CAPTCHA session.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_update_captcha_session',
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
    '106ae6a97df48809482eb7dc141ebef9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for checking if CAPTCHA is required for user.
 *
 * Based on the CAPTCHA persistence setting, the CAPTCHA session
 * ID and user session info.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_required_for_user',
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
    'ab6f355dfdde6edb289bfd50f0712ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get the CAPTCHA description.
 *
 * @return string
 *   CAPTCHA description.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_get_description',
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
    'ce535785ef3b280ca812e20c46603ccd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the error message for when a user enters an incorrect CAPTCHA answer.
 *
 * @return string
 *   Error message.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_get_error_message',
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
    '8f9acae0ded2ae4019af353962ed9579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Parse or interpret the given captcha_type.
 *
 * @param string $captcha_type
 *   representation of the CAPTCHA type,
 *   e.g. \'default\', \'captcha/Math\', \'image_captcha/Image\'.
 *
 * @return array
 *   list($captcha_module, $captcha_type).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_parse_captcha_type',
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
    'eb85f26245008ca66ad410e43a7360fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function to get placement information for a given form_id.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_get_captcha_placement',
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
    'e8f5f3ecb508551be44e23eee998226f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for searching the buttons in a form.
 *
 * @param array $form
 *   The form to search button elements in.
 *
 * @return array
 *   Array of paths to the buttons.
 *   A path is an array of keys leading to the button, the last
 *   item in the path is the weight of the button element
 *   (or NULL if undefined).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'captchapoint' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => NULL,
         'functionName' => '_captcha_search_buttons',
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