<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/better_exposed_filters/src/BetterExposedFiltersHelper.php-1624732871',
   'data' => 
  array (
    '97050a4ee7ee439675a6ca59859e7a37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a helper class for better exposed filters.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
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
    '11b9ccba2537c0b0f60d640600ff10cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rewrites a set of options given a string from the config form.
   *
   * Rewrites should be specified, one per line, using the format
   * old_string|new_string. If new_string is empty, the option will be removed.
   *
   * @param array $options
   *   An array of key => value pairs that may be rewritten.
   * @param string $rewrite_settings
   *   String representing the entry in the settings form.
   * @param bool $reorder
   *   Reorder $options based on the rewrite settings.
   *
   * @return array
   *   Rewritten $options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
         'functionName' => 'rewriteOptions',
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
    '5da0a7fd3669b2f98c4e8a6c918a8d8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flattens list of mixed options into a simple array of scalar value.
   *
   * @param array $options
   *   List of mixed options - scalar, translatable markup or taxonomy term
   *   options.
   * @param bool $preserve_keys
   *   TRUE if the original keys should be preserved, FALSE otherwise.
   *
   * @return array
   *   Flattened list of scalar options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
         'functionName' => 'flattenOptions',
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
    '6c878eda7e8f2358cbf553cc5ce47f25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sort options alphabetically.
   *
   * @param array $options
   *   Array of unsorted options - scalar, translatable markup or taxonomy term
   *   options.
   *
   * @return array
   *   Alphabetically sorted array of original values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
         'functionName' => 'sortOptions',
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
    '880c957e7fc5f47b1c7abad42db8d954' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sort nested options alphabetically.
   *
   * @param array $options
   *   Array of nested unsorted options - scalar, translatable markup or
   *   taxonomy term options.
   * @param string $delimiter
   *   The delimiter used to indicate nested level. (e.g. -Seattle)
   *
   * @return array
   *   Alphabetically sorted array of original values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
         'functionName' => 'sortNestedOptions',
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