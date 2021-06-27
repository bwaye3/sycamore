<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/image_captcha/image_captcha.module-1624732871',
   'data' => 
  array (
    '971b70480250ad06859cde01fc5ea01d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Implements image CAPTCHA for use with the CAPTCHA module.
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
    '632bbcaa9ea33c0181c752e4bad890e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => 'image_captcha_help',
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
    '07f4520777eebb82421147d10099ccd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Getter for fonts to use in the image CAPTCHA.
 *
 * @return array
 *   List of font paths.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_get_enabled_fonts',
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
    'ee01ffd0e422dc5ff30b05b060faecfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function to get font(s).
 *
 * @return string|array
 *   URI of file hash or List of font paths.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_get_font_uri',
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
    '161cff95a925356bcfb9ca6fee93a85f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function to get fonts from the given directories.
 *
 * @param array|null $directories
 *   (Optional) an array of directories
 *   to recursively search through, if not given, the default
 *   directories will be used.
 *
 * @return array
 *   Fonts file objects (with fields \'name\',
 *   \'basename\' and \'filename\'), keyed on the sha256 hash of the font
 *   path (to have an easy token that can be used in an url
 *   without en/decoding issues).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_get_available_fonts_from_directories',
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
    '1079555729c1a23b13142dfddcfaa11c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for checking if the specified fonts are available.
 *
 * @param array $fonts
 *   Paths of fonts to check.
 *
 * @return array
 *   List($readable_fonts, $problem_fonts).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_check_fonts',
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
    'f03637453d8a569fd10abddcbb141aca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for splitting an utf8 string correctly in characters.
 *
 * Assumes the given utf8 string is well formed.
 * See http://en.wikipedia.org/wiki/Utf8 for more info.
 *
 * @param string $str
 *   UTF8 string to be split.
 *
 * @return array
 *   List of caracters given string consists of.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_utf8_split',
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
    'a9d15f7ed67f134d77342c564b9a14b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for checking the setup of the Image CAPTCHA.
 *
 * The image CAPTCHA requires at least the GD PHP library.
 * Support for TTF is recommended and the enabled
 * font files should be readable.
 * This functions checks these things.
 *
 * @param bool $check_fonts
 *   Whether or not the enabled fonts should be checked.
 *
 * @return int
 *   Status code: bitwise \'OR\' of status flags like
 *   IMAGE_CAPTCHA_ERROR_NO_GDLIB, IMAGE_CAPTCHA_ERROR_NO_TTF_SUPPORT,
 *   IMAGE_CAPTCHA_ERROR_TTF_FILE_READ_PROBLEM.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_check_setup',
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
    'bfa7355219201a069915992fcc32d9fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function for calculating image height and width.
 *
 * They are based on given code and current font/spacing settings.
 *
 * @param string $code
 *   The utf8 string which will be used to split in characters.
 *
 * @return array
 *   [$width, $heigh].
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => '_image_captcha_image_size',
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
    '13c4159d66ed8a1ef1d2ed47ad9b03a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_captcha().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => 'image_captcha_captcha',
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
    '5623b580bd724daf14f0390f11f5aa2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => 'image_captcha_theme',
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
    'c80a58d8a6436a6032b5617425e93470' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_element_info_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => 'image_captcha_element_info_alter',
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
    '5e476b08e334a02d6521aedd079d3609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add image refresh button to captcha form element.
 *
 * @return array
 *   The processed element.
 *
 * @see captcha_element_info()
 * @see image_captcha_element_info_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'link' => 'Drupal\\Core\\Link',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
        ),
         'className' => NULL,
         'functionName' => 'image_captcha_after_build_process',
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