<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/OptionsProviderInterface.php-1624732867',
   'data' => 
  array (
    '83b1d5488a35776b2112d079071f7bb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for retrieving all possible and settable values.
 *
 * While possible values specify which values existing data might have, settable
 * values define the values that are allowed to be set by a user.
 *
 * For example, in an workflow scenario, the settable values for a state field
 * might depend on the currently set state, while possible values are all
 * states. Thus settable values would be used in an editing context, while
 * possible values would be used for presenting filtering options in a search.
 *
 * For convenience, lists of both settable and possible values are also provided
 * as structured options arrays that can be used in an Options widget such as a
 * select box or checkboxes.
 *
 * Note that this interface is mostly applicable for primitive data values, but
 * can be used on complex data structures if a (primitive) main property is
 * specified. In that case, the allowed values and options apply to the main
 * property only.
 *
 * @see \\Drupal\\Core\\Field\\Plugin\\Field\\FieldWidget\\OptionsWidgetBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
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
    '35154af3bacbcd8ea8e88ee71aa440ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of possible values.
   *
   * If the optional $account parameter is passed, then the array is filtered to
   * values viewable by the account.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   (optional) The user account for which to filter the possible values. If
   *   omitted, all possible values are returned.
   *
   * @return array
   *   An array of possible values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
         'functionName' => 'getPossibleValues',
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
    'cde0786d12a0076ab83a93844b2474c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of possible values with labels for display.
   *
   * If the optional $account parameter is passed, then the array is filtered to
   * values viewable by the account.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   (optional) The user account for which to filter the possible options.
   *   If omitted, all possible options are returned.
   *
   * @return array
   *   An array of possible options for the object that may be used in an
   *   Options widget, for example when existing data should be filtered. It may
   *   either be a flat array of option labels keyed by values, or a
   *   two-dimensional array of option groups (array of flat option arrays,
   *   keyed by option group label). Note that labels should NOT be sanitized.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
         'functionName' => 'getPossibleOptions',
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
    '860b8eb04c0fb915c31e8cb1548297b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of settable values.
   *
   * If the optional $account parameter is passed, then the array is filtered to
   * values settable by the account.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   (optional) The user account for which to filter the settable values. If
   *   omitted, all settable values are returned.
   *
   * @return array
   *   An array of settable values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
         'functionName' => 'getSettableValues',
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
    'a2ef490dfd3eda0ca80bf3d8f6b92634' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of settable values with labels for display.
   *
   * If the optional $account parameter is passed, then the array is filtered to
   * values settable by the account.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   (optional) The user account for which to filter the settable options. If
   *   omitted, all settable options are returned.
   *
   * @return array
   *   An array of settable options for the object that may be used in an
   *   Options widget, usually when new data should be entered. It may either be
   *   a flat array of option labels keyed by values, or a two-dimensional array
   *   of option groups (array of flat option arrays, keyed by option group
   *   label). Note that labels should NOT be sanitized.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
         'functionName' => 'getSettableOptions',
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