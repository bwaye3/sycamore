<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/admin_toolbar/admin_toolbar_search/tests/src/FunctionalJavascript/AdminToolbarSearchTestBase.php-1624732871',
   'data' => 
  array (
    'd6b9b3389c927b382a040432384a1026' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for testing the functionality of admin toolbar search.
 *
 * @group admin_toolbar
 * @group admin_toolbar_search
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
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
    '7bebf17384588cb44a5c47213c419b59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
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
    '582280824bfb0069cb5dfa9d2ad7bb0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A user with the \'Use Admin Toolbar search\' permission.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
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
    'aa8e671d78243e96ca8de9aab3de7383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test user without the \'Use Admin Toolbar search\' permission..
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
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
    'b66a2341eb0084ee9f9ed2f66bcec0f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'setUp',
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
    '8be1d5f3ae5d89b0bb4a318197917fd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that the search suggestions contain a given string with given input.
   *
   * @param string $search
   *   The string to search for.
   * @param string $contains
   *   Some HTML that is expected to be within the suggestions element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'assertSuggestionContains',
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
    '617b770dad1bdb98ed844610e250d556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that the search suggestions does not contain a given string.
   *
   * Assert that the search suggestions does not contain a given string with a
   * given input.
   *
   * @param string $search
   *   The string to search for.
   * @param string $contains
   *   Some HTML that is not expected to be within the suggestions element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'assertSuggestionNotContains',
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
    '5407cd2c558d1eabfa82e9c80e4b0bf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Search for an empty string to clear out the autocomplete suggestions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'resetSearch',
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
    'a034a77dd22c0f1a120701272cc53d55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that there is a link with the specified url in the admin toolbar.
   *
   * @param string $url
   *   The url to assert exists in the admin menu.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'assertMenuHasHref',
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
    '835715e57cfb55859fe780237d8416cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that there is no link with the specified url in the admin toolbar.
   *
   * @param string $url
   *   The url to assert exists in the admin menu.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript',
         'uses' => 
        array (
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'menu' => 'Drupal\\system\\Entity\\Menu',
        ),
         'className' => 'Drupal\\Tests\\admin_toolbar_search\\FunctionalJavascript\\AdminToolbarSearchTestBase',
         'functionName' => 'assertMenuDoesNotHaveHref',
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