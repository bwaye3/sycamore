<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/includes/common.inc-1624732867',
   'data' => 
  array (
    'a7767a0e4ea4abd0ca33eaf989d4876d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Common functions that many Drupal modules will need to reference.
 *
 * The functions that are critical and need to be available even when serving
 * a cached page are instead located in bootstrap.inc.
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
    '4e3747d55b78c2a7e16889c03f332c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return status for saving which involved creating a new item.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '8cb500768381d988dde4d12742d05144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @defgroup php_wrappers PHP wrapper functions
 * @{
 * Functions that are wrappers or custom implementations of PHP functions.
 *
 * Certain PHP functions should not be used in Drupal. Instead, Drupal\'s
 * replacement functions should be used.
 *
 * For example, for improved or more secure UTF8-handling, or RFC-compliant
 * handling of URLs in Drupal.
 *
 * For ease of use and memorizing, all these wrapper functions use the same name
 * as the original PHP function, but prefixed with "drupal_". Beware, however,
 * that not all wrapper functions support the same arguments as the original
 * functions.
 *
 * You should always use these wrapper functions in your code.
 *
 * Wrong:
 * @code
 *   $my_substring = substr($original_string, 0, 5);
 * @endcode
 *
 * Correct:
 * @code
 *   $my_substring = mb_substr($original_string, 0, 5);
 * @endcode
 *
 * @}
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '149b6c8d37999e41edd3f1c515607115' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return status for saving which involved an update to an existing item.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '2c7abdb24824b1d493c797b76a3bb866' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return status for saving which deleted an existing item.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'b2f2863574aa440aa3dcb07ed9b42e68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default aggregation group for CSS files added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '6854d984acac8383e7c5dfef4c0d5496' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default aggregation group for theme CSS files added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '9129654afcd031752b3bfb09e2d3373f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default weight for CSS rules that style HTML elements ("base" styles).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '2050b90c9ab7217b03a1dbf9f655881a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default weight for CSS rules that layout a page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'e506977a11b5518df90abe5022178cd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default weight for CSS rules that style design components (and their associated states and themes.)
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '7679d980889f8646b9be5e5ffe356c1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default weight for CSS rules that style states and are not included with components.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'db24e2883ab26ba4282f6addfb49fa3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default weight for CSS rules that style themes and are not included with components.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'e492d8aad9f32eb66379406de67bccee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default group for JavaScript settings added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'ee9c387eea7292b1a4662b7cb95a1970' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default group for JavaScript and jQuery libraries added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'f96f0f624af0ed1a586b5c69237124d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default group for module JavaScript code added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '0285c3cef294575a08b23248aa57832f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The default group for theme JavaScript code added to the page.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'e97c807f2fcabb7fa09b50b59212bb0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The delimiter used to split plural strings.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use Drupal\\Component\\Gettext\\PoItem::DELIMITER instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'e917007f1a8c0aa318477716cfad823e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares a \'destination\' URL query parameter.
 *
 * Used to direct the user back to the referring page after completing a form.
 * By default the current URL is returned. If a destination exists in the
 * previous request, that destination is returned. As such, a destination can
 * persist across multiple pages.
 *
 * @return array
 *   An associative array containing the key:
 *   - destination: The value of the current request\'s \'destination\' query
 *     parameter, if present. This can be either a relative or absolute URL.
 *     However, for security, redirection to external URLs is not performed.
 *     If the query parameter isn\'t present, then the URL of the current
 *     request is returned.
 *
 * @ingroup form_api
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use the redirect.destination service.
 *
 * @see \\Drupal\\Core\\EventSubscriber\\RedirectResponseSubscriber::checkRedirectUrl()
 * @see https://www.drupal.org/node/2448603
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_destination',
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
    '1aca8d8ede75387f033704da57d9055d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Verifies the syntax of the given email address.
 *
 * @param string $mail
 *   A string containing an email address.
 *
 * @return bool
 *   TRUE if the address is in a valid format.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal::service(\'email.validator\')->isValid().
 *
 * @see https://www.drupal.org/node/2912661
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'valid_email_address',
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
    'ff28d3f1464a0510a59541a8dffb84cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Strips dangerous protocols from a URI and encodes it for output to HTML.
 *
 * @param $uri
 *   A plain-text URI that might contain dangerous protocols.
 *
 * @return string
 *   A URI stripped of dangerous protocols and encoded for output to an HTML
 *   attribute value. Because it is already encoded, it should not be set as a
 *   value within a $attributes array passed to Drupal\\Core\\Template\\Attribute,
 *   because Drupal\\Core\\Template\\Attribute expects those values to be
 *   plain-text strings. To pass a filtered URI to
 *   Drupal\\Core\\Template\\Attribute, call
 *   \\Drupal\\Component\\Utility\\UrlHelper::stripDangerousProtocols() instead.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use UrlHelper::stripDangerousProtocols() or UrlHelper::filterBadProtocol()
 *   instead. UrlHelper::stripDangerousProtocols() can be used in conjunction
 *   with \\Drupal\\Component\\Render\\FormattableMarkup and an @variable
 *   placeholder which will perform the necessary escaping.
 *   UrlHelper::filterBadProtocol() is functionality equivalent to check_url()
 *   apart from the fact it is protected from double escaping bugs. Note that
 *   this method no longer marks its output as safe.
 *
 * @see \\Drupal\\Component\\Utility\\UrlHelper::stripDangerousProtocols()
 * @see \\Drupal\\Component\\Utility\\UrlHelper::filterBadProtocol()
 * @see https://www.drupal.org/node/2560027
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'check_url',
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
    '7f8e81a9e928c3effbd1a5bf7fa79612' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates a string representation for the given byte count.
 *
 * @param $size
 *   A size in bytes.
 * @param $langcode
 *   Optional language code to translate to a language other than what is used
 *   to display the page.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   A translated string representation of the size.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'format_size',
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
    'e849a8e42d70d2dc294e7863f93e943b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats a date, using a date type or a custom date format string.
 *
 * @param $timestamp
 *   A UNIX timestamp to format.
 * @param $type
 *   (optional) The format to use, one of:
 *   - One of the built-in formats: \'short\', \'medium\',
 *     \'long\', \'html_datetime\', \'html_date\', \'html_time\',
 *     \'html_yearless_date\', \'html_week\', \'html_month\', \'html_year\'.
 *   - The name of a date type defined by a date format config entity.
 *   - The machine name of an administrator-defined date format.
 *   - \'custom\', to use $format.
 *   Defaults to \'medium\'.
 * @param $format
 *   (optional) If $type is \'custom\', a PHP date format string suitable for
 *   input to date(). Use a backslash to escape ordinary text, so it does not
 *   get interpreted as date format characters.
 * @param $timezone
 *   (optional) Time zone identifier, as described at
 *   http://php.net/manual/timezones.php Defaults to the time zone used to
 *   display the page.
 * @param $langcode
 *   (optional) Language code to translate to. Defaults to the language used to
 *   display the page.
 *
 * @return
 *   A translated date string in the requested format.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal::service(\'date.formatter\')->format().
 *
 * @see \\Drupal\\Core\\Datetime\\DateFormatter::format()
 * @see https://www.drupal.org/node/1876852
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'format_date',
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
    'b498e86214808b678cd56ca20b741d8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns an ISO8601 formatted date based on the given date.
 *
 * @param string $date
 *   A UNIX timestamp.
 *
 * @return string
 *   An ISO8601 formatted date.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   date(\'c\', $date) instead.
 *
 * @see https://www.drupal.org/node/2999991
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'date_iso8601',
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
    '82a88a5a4db9e29497fc3a5a46761ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats an attribute string for an HTTP header.
 *
 * @param array $attributes
 *   An associative array of attributes such as \'rel\'.
 *
 * @return string
 *   A ; separated string ready for insertion in a HTTP header. No escaping is
 *   performed for HTML entities, so this string is not safe to be printed.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor::formatHttpHeaderAttributes()
 *   instead.
 *
 * @see https://www.drupal.org/node/3000051
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_http_header_attributes',
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
    '21bd18df07701cdc57c673b269f14a36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Attempts to set the PHP maximum execution time.
 *
 * This function is a wrapper around the PHP function set_time_limit().
 * When called, set_time_limit() restarts the timeout counter from zero.
 * In other words, if the timeout is the default 30 seconds, and 25 seconds
 * into script execution a call such as set_time_limit(20) is made, the
 * script will run for a total of 45 seconds before timing out.
 *
 * If the current time limit is not unlimited it is possible to decrease the
 * total time limit if the sum of the new time limit and the current time spent
 * running the script is inferior to the original time limit. It is inherent to
 * the way set_time_limit() works, it should rather be called with an
 * appropriate value every time you need to allocate a certain amount of time
 * to execute a task than only once at the beginning of the script.
 *
 * Before calling set_time_limit(), we check if this function is available
 * because it could be disabled by the server administrator. We also hide all
 * the errors that could occur when calling set_time_limit(), because it is
 * not possible to reliably ensure that PHP or a security extension will
 * not issue a warning/error if they prevent the use of this function.
 *
 * @param $time_limit
 *   An integer specifying the new time limit, in seconds. A value of 0
 *   indicates unlimited execution time.
 *
 * @ingroup php_wrappers
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Component\\Utility\\Environment::setTimeLimit() instead.
 *
 * @see https://www.drupal.org/node/3000058
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_set_time_limit',
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
    'a6c26be62e034f4274bdd8a01db87d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the base URL path (i.e., directory) of the Drupal installation.
 *
 * Function base_path() adds a "/" to the beginning and end of the returned path
 * if the path is not empty. At the very least, this will return "/".
 *
 * Examples:
 * - http://example.com returns "/" because the path is empty.
 * - http://example.com/drupal/folder returns "/drupal/folder/".
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'base_path',
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
    '59fae01e5776fa0f668730f7e9596d07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes old cached CSS files.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface::deleteAll().
 *
 * @see https://www.drupal.org/node/2317841
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_clear_css_cache',
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
    'a3b5d9facd5777a56125bf0485c14113' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constructs an array of the defaults that are used for JavaScript assets.
 *
 * @param $data
 *   (optional) The default data parameter for the JavaScript asset array.
 *
 * @see hook_js_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_js_defaults',
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
    '98f9b8ea6f01ed205bb81cb4213863ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds JavaScript to change the state of an element based on another element.
 *
 * A "state" means a certain property on a DOM element, such as "visible" or
 * "checked". A state can be applied to an element, depending on the state of
 * another element on the page. In general, states depend on HTML attributes and
 * DOM element properties, which change due to user interaction.
 *
 * Since states are driven by JavaScript only, it is important to understand
 * that all states are applied on presentation only, none of the states force
 * any server-side logic, and that they will not be applied for site visitors
 * without JavaScript support. All modules implementing states have to make
 * sure that the intended logic also works without JavaScript being enabled.
 *
 * #states is an associative array in the form of:
 * @code
 * array(
 *   STATE1 => CONDITIONS_ARRAY1,
 *   STATE2 => CONDITIONS_ARRAY2,
 *   ...
 * )
 * @endcode
 * Each key is the name of a state to apply to the element, such as \'visible\'.
 * Each value is a list of conditions that denote when the state should be
 * applied.
 *
 * Multiple different states may be specified to act on complex conditions:
 * @code
 * array(
 *   \'visible\' => CONDITIONS,
 *   \'checked\' => OTHER_CONDITIONS,
 * )
 * @endcode
 *
 * Every condition is a key/value pair, whose key is a jQuery selector that
 * denotes another element on the page, and whose value is an array of
 * conditions, which must be met on that element:
 * @code
 * array(
 *   \'visible\' => array(
 *     JQUERY_SELECTOR => REMOTE_CONDITIONS,
 *     JQUERY_SELECTOR => REMOTE_CONDITIONS,
 *     ...
 *   ),
 * )
 * @endcode
 * All conditions must be met for the state to be applied.
 *
 * Each remote condition is a key/value pair specifying conditions on the other
 * element that need to be met to apply the state to the element:
 * @code
 * array(
 *   \'visible\' => array(
 *     \':input[name="remote_checkbox"]\' => array(\'checked\' => TRUE),
 *   ),
 * )
 * @endcode
 *
 * For example, to show a textfield only when a checkbox is checked:
 * @code
 * $form[\'toggle_me\'] = array(
 *   \'#type\' => \'checkbox\',
 *   \'#title\' => t(\'Tick this box to type\'),
 * );
 * $form[\'settings\'] = array(
 *   \'#type\' => \'textfield\',
 *   \'#states\' => array(
 *     // Only show this field when the \'toggle_me\' checkbox is enabled.
 *     \'visible\' => array(
 *       \':input[name="toggle_me"]\' => array(\'checked\' => TRUE),
 *     ),
 *   ),
 * );
 * @endcode
 *
 * The following states may be applied to an element:
 * - enabled
 * - disabled
 * - required
 * - optional
 * - visible
 * - invisible
 * - checked
 * - unchecked
 * - expanded
 * - collapsed
 *
 * The following states may be used in remote conditions:
 * - empty
 * - filled
 * - checked
 * - unchecked
 * - expanded
 * - collapsed
 * - value
 *
 * The following states exist for both elements and remote conditions, but are
 * not fully implemented and may not change anything on the element:
 * - relevant
 * - irrelevant
 * - valid
 * - invalid
 * - touched
 * - untouched
 * - readwrite
 * - readonly
 *
 * When referencing select lists and radio buttons in remote conditions, a
 * \'value\' condition must be used:
 * @code
 *   \'#states\' => array(
 *     // Show the settings if \'bar\' has been selected for \'foo\'.
 *     \'visible\' => array(
 *       \':input[name="foo"]\' => array(\'value\' => \'bar\'),
 *     ),
 *   ),
 * @endcode
 *
 * @param $elements
 *   A renderable array element having a #states property as described above.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Form\\FormHelper::processStates() instead.
 *
 * @see https://www.drupal.org/node/3000069
 * @see \\Drupal\\Core\\Form\\FormHelper::processStates()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_process_states',
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
    'af1349eb111560ecc81092f6a40ed486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Assists in attaching the tableDrag JavaScript behavior to a themed table.
 *
 * Draggable tables should be used wherever an outline or list of sortable items
 * needs to be arranged by an end-user. Draggable tables are very flexible and
 * can manipulate the value of form elements placed within individual columns.
 *
 * To set up a table to use drag and drop in place of weight select-lists or in
 * place of a form that contains parent relationships, the form must be themed
 * into a table. The table must have an ID attribute set and it
 * may be set as follows:
 * @code
 * $table = array(
 *   \'#type\' => \'table\',
 *   \'#header\' => $header,
 *   \'#rows\' => $rows,
 *   \'#attributes\' => array(
 *     \'id\' => \'my-module-table\',
 *   ),
 * );
 * return \\Drupal::service(\'renderer\')->render($table);
 * @endcode
 *
 * In the theme function for the form, a special class must be added to each
 * form element within the same column, "grouping" them together.
 *
 * In a situation where a single weight column is being sorted in the table, the
 * classes could be added like this (in the theme function):
 * @code
 * $form[\'my_elements\'][$delta][\'weight\'][\'#attributes\'][\'class\'] = array(\'my-elements-weight\');
 * @endcode
 *
 * Each row of the table must also have a class of "draggable" in order to
 * enable the drag handles:
 * @code
 * $row = array(...);
 * $rows[] = array(
 *   \'data\' => $row,
 *   \'class\' => array(\'draggable\'),
 * );
 * @endcode
 *
 * When tree relationships are present, the two additional classes
 * \'tabledrag-leaf\' and \'tabledrag-root\' can be used to refine the behavior:
 * - Rows with the \'tabledrag-leaf\' class cannot have child rows.
 * - Rows with the \'tabledrag-root\' class cannot be nested under a parent row.
 *
 * Calling drupal_attach_tabledrag() would then be written as such:
 * @code
 * drupal_attach_tabledrag(\'my-module-table\', array(
 *   \'action\' => \'order\',
 *   \'relationship\' => \'sibling\',
 *   \'group\' => \'my-elements-weight\',
 * );
 * @endcode
 *
 * In a more complex case where there are several groups in one column (such as
 * the block regions on the admin/structure/block page), a separate subgroup
 * class must also be added to differentiate the groups.
 * @code
 * $form[\'my_elements\'][$region][$delta][\'weight\'][\'#attributes\'][\'class\'] = array(\'my-elements-weight\', \'my-elements-weight-\' . $region);
 * @endcode
 *
 * The \'group\' option is still \'my-element-weight\', and the additional
 * \'subgroup\' option will be passed in as \'my-elements-weight-\' . $region. This
 * also means that you\'ll need to call drupal_attach_tabledrag() once for every
 * region added.
 *
 * @code
 * foreach ($regions as $region) {
 *   drupal_attach_tabledrag(\'my-module-table\', array(
 *     \'action\' => \'order\',
 *     \'relationship\' => \'sibling\',
 *     \'group\' => \'my-elements-weight\',
 *     \'subgroup\' => \'my-elements-weight-\' . $region,
 *   ));
 * }
 * @endcode
 *
 * In a situation where tree relationships are present, adding multiple
 * subgroups is not necessary, because the table will contain indentations that
 * provide enough information about the sibling and parent relationships. See
 * MenuForm::BuildOverviewForm for an example creating a table
 * containing parent relationships.
 *
 * @param $element
 *   A form element to attach the tableDrag behavior to.
 * @param array $options
 *   These options are used to generate JavaScript settings necessary to
 *   configure the tableDrag behavior appropriately for this particular table.
 *   An associative array containing the following keys:
 *   - \'table_id\': String containing the target table\'s id attribute.
 *     If the table does not have an id, one will need to be set,
 *     such as <table id="my-module-table">.
 *   - \'action\': String describing the action to be done on the form item.
 *      Either \'match\' \'depth\', or \'order\':
 *     - \'match\' is typically used for parent relationships.
 *     - \'order\' is typically used to set weights on other form elements with
 *       the same group.
 *     - \'depth\' updates the target element with the current indentation.
 *   - \'relationship\': String describing where the "action" option
 *     should be performed. Either \'parent\', \'sibling\', \'group\', or \'self\':
 *     - \'parent\' will only look for fields up the tree.
 *     - \'sibling\' will look for fields in the same group in rows above and
 *       below it.
 *     - \'self\' affects the dragged row itself.
 *     - \'group\' affects the dragged row, plus any children below it (the entire
 *       dragged group).
 *   - \'group\': A class name applied on all related form elements for this action.
 *   - \'subgroup\': (optional) If the group has several subgroups within it, this
 *     string should contain the class name identifying fields in the same
 *     subgroup.
 *   - \'source\': (optional) If the $action is \'match\', this string should contain
 *     the classname identifying what field will be used as the source value
 *     when matching the value in $subgroup.
 *   - \'hidden\': (optional) The column containing the field elements may be
 *     entirely hidden from view dynamically when the JavaScript is loaded. Set
 *     to FALSE if the column should not be hidden.
 *   - \'limit\': (optional) Limit the maximum amount of parenting in this table.
 *
 * @see MenuForm::BuildOverviewForm()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_attach_tabledrag',
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
    '4a1d75933dfa52b6e29d6725e5d260c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes old cached JavaScript files and variables.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Asset\\AssetCollectionOptimizerInterface::deleteAll().
 *
 * @see https://www.drupal.org/node/2317841
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_clear_js_cache',
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
    '1ed14e2f74c26e66ffb55c3bf94e7175' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Pre-render callback: Renders a link into #markup.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Render\\Element\\Link::preRenderLink().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_pre_render_link',
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
    '4d8eeac624d7d0da9777428e5b6896c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Pre-render callback: Collects child links into a single array.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Render\\Element\\Link::preRenderLinks() instead.
 *
 * @see https://www.drupal.org/node/2966725
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_pre_render_links',
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
    '2f7b397c240577f9ed3bd30a3009838a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renders final HTML given a structured array tree.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Render\\RendererInterface::renderRoot() instead.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface::renderRoot()
 * @see https://www.drupal.org/node/2912696
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_render_root',
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
    'f7cabf2ad48582110b7fba1c35fdd654' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renders HTML given a structured array tree.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
 *   \'renderer\' service instead.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface::render()
 * @see https://www.drupal.org/node/2912696
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_render',
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
    'f454a6a944fe3c38edc5ee8b5567abd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renders children of an element and concatenates them.
 *
 * @param array $element
 *   The structured array whose children shall be rendered.
 * @param array $children_keys
 *   (optional) If the keys of the element\'s children are already known, they
 *   can be passed in to save another run of
 *   \\Drupal\\Core\\Render\\Element::children().
 *
 * @return string|\\Drupal\\Component\\Render\\MarkupInterface
 *   The rendered HTML of all children of the element.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Avoid early
 *   rendering when possible or loop through the elements and render them as
 *   they are available.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface::render()
 * @see https://www.drupal.org/node/2912757
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_render_children',
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
    '74fcf4156ca597193d84c55189509a42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renders an element.
 *
 * This function renders an element. The top level element is shown with show()
 * before rendering, so it will always be rendered even if hide() had been
 * previously used on it.
 *
 * @param $element
 *   The element to be rendered.
 *
 * @return
 *   The rendered element.
 *
 * @see \\Drupal\\Core\\Render\\RendererInterface
 * @see show()
 * @see hide()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'render',
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
    '13927114c1b0988aea7380c1491a0f29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Hides an element from later rendering.
 *
 * The first time render() or drupal_render() is called on an element tree,
 * as each element in the tree is rendered, it is marked with a #printed flag
 * and the rendered children of the element are cached. Subsequent calls to
 * render() or drupal_render() will not traverse the child tree of this element
 * again: they will just use the cached children. So if you want to hide an
 * element, be sure to call hide() on the element before its parent tree is
 * rendered for the first time, as it will have no effect on subsequent
 * renderings of the parent tree.
 *
 * @param $element
 *   The element to be hidden.
 *
 * @return
 *   The element.
 *
 * @see render()
 * @see show()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'hide',
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
    '0d4ff89c4765f0a95e84f09e068149a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Shows a hidden element for later rendering.
 *
 * You can also use render($element), which shows the element while rendering
 * it.
 *
 * The first time render() or drupal_render() is called on an element tree,
 * as each element in the tree is rendered, it is marked with a #printed flag
 * and the rendered children of the element are cached. Subsequent calls to
 * render() or drupal_render() will not traverse the child tree of this element
 * again: they will just use the cached children. So if you want to show an
 * element, be sure to call show() on the element before its parent tree is
 * rendered for the first time, as it will have no effect on subsequent
 * renderings of the parent tree.
 *
 * @param $element
 *   The element to be shown.
 *
 * @return
 *   The element.
 *
 * @see render()
 * @see hide()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'show',
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
    '1701f80be9d656883f23b1840287a9a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves the default properties for the defined element type.
 *
 * @param $type
 *   An element type as defined by an element plugin.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal::service(\'element_info\')->getInfo() instead.
 *
 * @see https://www.drupal.org/node/2235461
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'element_info',
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
    '0d48e9f70ad8b65b5814ef5224eeadc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves a single property for the defined element type.
 *
 * @param $type
 *   An element type as defined by an element plugin.
 * @param $property_name
 *   The property within the element type that should be returned.
 * @param $default
 *   (Optional) The value to return if the element type does not specify a
 *   value for the property. Defaults to NULL.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal::service(\'element_info\')->getInfoProperty() instead.
 *
 * @see https://www.drupal.org/node/2235461
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'element_info_property',
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
    '76961847f2c035aead4d05854d7b6f02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Flushes all persistent caches, resets all variables, and rebuilds all data structures.
 *
 * At times, it is necessary to re-initialize the entire system to account for
 * changed or new code. This function:
 * - Clears all persistent caches:
 *   - The bootstrap cache bin containing base system, module system, and theme
 *     system information.
 *   - The common \'default\' cache bin containing arbitrary caches.
 *   - The page cache.
 *   - The URL alias path cache.
 * - Resets all static variables that have been defined via drupal_static().
 * - Clears asset (JS/CSS) file caches.
 * - Updates the system with latest information about extensions (modules and
 *   themes).
 * - Updates the bootstrap flag for modules implementing bootstrap_hooks().
 * - Rebuilds the full database schema information (invoking hook_schema()).
 * - Rebuilds data structures of all modules (invoking hook_rebuild()). In
 *   core this means
 *   - blocks, node types, date formats and actions are synchronized with the
 *     database
 *   - The \'active\' status of fields is refreshed.
 * - Rebuilds the menu router.
 *
 * This means the entire system is reset so all caches and static variables are
 * effectively empty. After that is guaranteed, information about the currently
 * active code is updated, and rebuild operations are successively called in
 * order to synchronize the active system according to the current information
 * defined in code.
 *
 * All modules need to ensure that all of their caches are flushed when
 * hook_cache_flush() is invoked; any previously known information must no
 * longer exist. All following hook_rebuild() operations must be based on fresh
 * and current system data. All modules must be able to rely on this contract.
 *
 * @see \\Drupal\\Core\\Cache\\CacheHelper::getBins()
 * @see hook_cache_flush()
 * @see hook_rebuild()
 *
 * This function also resets the theme, which means it is not initialized
 * anymore and all previously added JavaScript and CSS is gone. Normally, this
 * function is called as an end-of-POST-request operation that is followed by a
 * redirect, so this effect is not visible. Since the full reset is the whole
 * point of this function, callers need to take care for backing up all needed
 * variables and properly restoring or re-initializing them on their own. For
 * convenience, this function automatically re-initializes the maintenance theme
 * if it was initialized before.
 *
 * @todo Try to clear page/JS/CSS caches last, so cached pages can still be
 *   served during this possibly long-running operation. (Conflict on bootstrap
 *   cache though.)
 * @todo Add a global lock to ensure that caches are not primed in concurrent
 *   requests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_flush_all_caches',
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
    'b4a7694a873bd78d82be1d388838145a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Extension\\ThemeHandlerInterface $theme_handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_flush_all_caches',
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
    'a3aaa47454da3cafb2f705ff148909c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Changes the dummy query string added to all CSS and JavaScript files.
 *
 * Changing the dummy query string appended to CSS and JavaScript files forces
 * all browsers to reload fresh files.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => '_drupal_flush_css_js',
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
    '20f6cb07997ebcecea999513b1e3a220' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Outputs debug information.
 *
 * The debug information is passed on to trigger_error() after being converted
 * to a string using _drupal_debug_message().
 *
 * @param $data
 *   Data to be output.
 * @param $label
 *   Label to prefix the data.
 * @param $print_r
 *   Flag to switch between print_r() and var_export() for data conversion to
 *   string. Set $print_r to FALSE to use var_export() instead of print_r().
 *   Passing recursive data structures to var_export() will generate an error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'debug',
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
    '4e80d28374a7cb2a80351f6084274390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks whether a version is compatible with a given dependency.
 *
 * @param $v
 *   A parsed dependency structure e.g. from ModuleHandler::parseDependency().
 * @param $current_version
 *   The version to check against (like 4.2).
 *
 * @return
 *   NULL if compatible, otherwise the original dependency version string that
 *   caused the incompatibility.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Extension\\Dependency::isCompatible() instead.
 *
 * @see https://www.drupal.org/node/2756875
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_check_incompatibility',
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
    '0c643c0642877ad21d41d134a54e5678' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns a string of supported archive extensions.
 *
 * @return string
 *   A space-separated string of extensions suitable for use by the file
 *   validation system.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Archiver\\ArchiverManager::getExtensions() instead.
 *
 * @see https://www.drupal.org/node/2999951
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'archiver_get_extensions',
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
    '9c47f0c964d949262226ca79a5665436' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates the appropriate archiver for the specified file.
 *
 * @param string $file
 *   The full path of the archive file. Note that stream wrapper paths are
 *   supported, but not remote ones.
 *
 * @return \\Drupal\\Core\\Archiver\\ArchiverInterface|false
 *   A newly created instance of the archiver class appropriate for the
 *   specified file, already bound to that file. If no appropriate archiver
 *   class was found, will return FALSE.
 *
 * @throws \\Exception
 *   If a remote stream wrapper path was passed.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Instead,
 *   get plugin.manager.archiver service from container and call getInstance()
 *   method on it. For example $archiver->getInstance([\'filepath\' => $file]);
 *
 * @see https://www.drupal.org/node/2999951
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'archiver_get_archiver',
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
    '77a913f3bf713a9860acaa1d2966f42a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Assembles the Drupal Updater registry.
 *
 * An Updater is a class that knows how to update various parts of the Drupal
 * file system, for example to update modules that have newer releases, or to
 * install a new theme.
 *
 * @return array
 *   The Drupal Updater class registry.
 *
 * @see \\Drupal\\Core\\Updater\\Updater
 * @see hook_updater_info()
 * @see hook_updater_info_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_updaters',
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
    '652eb28ecde744ce109c984c2f328bab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Assembles the Drupal FileTransfer registry.
 *
 * @return
 *   The Drupal FileTransfer class registry.
 *
 * @see \\Drupal\\Core\\FileTransfer\\FileTransfer
 * @see hook_filetransfer_info()
 * @see hook_filetransfer_info_alter()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
          'bytes' => 'Drupal\\Component\\Utility\\Bytes',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'sortarray' => 'Drupal\\Component\\Utility\\SortArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'element' => 'Drupal\\Core\\Render\\Element',
          'link' => 'Drupal\\Core\\Render\\Element\\Link',
          'htmlresponseattachmentsprocessor' => 'Drupal\\Core\\Render\\HtmlResponseAttachmentsProcessor',
          'markup' => 'Drupal\\Core\\Render\\Markup',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_filetransfer_info',
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