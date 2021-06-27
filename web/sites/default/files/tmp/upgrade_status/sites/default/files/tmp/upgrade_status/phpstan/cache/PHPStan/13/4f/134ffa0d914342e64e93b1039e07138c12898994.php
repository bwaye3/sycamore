<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Theme/ThemeManagerInterface.php-1624732867',
   'data' => 
  array (
    '0073bfa59fab4bda10ae6f070c79c18f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a high level access to the active theme and methods to use it.
 *
 * Beside the active theme it provides a wrapper around _theme as well as the
 * alter functionality for themes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
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
    'ef7fa777646340d7def2a36a41c44d4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates themed output.
   *
   * See the @link themeable Default theme implementations topic @endlink for
   * details.
   *
   * @param string $hook
   *   The name of the theme hook to call.
   * @param array $variables
   *   An associative array of theme variables.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   The rendered output, or a Markup object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
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
    '890d79c5e8a58279196bb1d84bb3bdc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the active theme object.
   *
   * @return \\Drupal\\Core\\Theme\\ActiveTheme
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'getActiveTheme',
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
    '6f0336f796e5852363f4bedeb2ea9aec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether there is an active theme.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'hasActiveTheme',
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
    '3e2a8113b6ec716f6d71877709ab31c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the current active theme.
   *
   * Note: This method should not be used in common cases, just in special cases
   * like tests.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'resetActiveTheme',
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
    'd12c52c2ed745aede82acafa4425aa7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current active theme manually.
   *
   * Note: This method should not be used in common cases, just in special cases
   * like tests.
   *
   * @param \\Drupal\\Core\\Theme\\ActiveTheme $active_theme
   *   The new active theme.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'setActiveTheme',
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
    'a442048107523918c9fd26f26bc6ad09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes alterable variables to specific $theme_TYPE_alter() implementations.
   *
   * Executes an alter hook on the current theme. It also invokes alter hooks
   * for all base themes.
   *
   * $theme specifies the theme name of the active theme and all its base
   * themes.
   *
   * This dispatch function hands off the passed-in variables to type-specific
   * $theme_TYPE_alter() implementations in the active theme. It ensures a
   * consistent interface for all altering operations.
   *
   * A maximum of 2 alterable arguments is supported. In case more arguments
   * need to be passed and alterable, modules provide additional variables
   * assigned by reference in the last $context argument:
   * @code
   *   $context = array(
   *     \'alterable\' => &$alterable,
   *     \'unalterable\' => $unalterable,
   *     \'foo\' => \'bar\',
   *   );
   *   $this->alter(\'mymodule_data\', $alterable1, $alterable2, $context);
   * @endcode
   *
   * Note that objects are always passed by reference. If it is absolutely
   * required that no implementation alters a passed object in $context, then an
   * object needs to be cloned:
   * @code
   *   $context = array(
   *     \'unalterable_object\' => clone $object,
   *   );
   *   $this->alter(\'mymodule_data\', $data, $context);
   * @endcode
   *
   * @param string|array $type
   *   A string describing the type of the alterable $data. \'form\', \'links\',
   *   \'node_content\', and so on are several examples. Alternatively can be an
   *   array, in which case $theme_TYPE_alter() is invoked for each value in the
   *   array. When Form API is using $this->alter() to
   *   execute both $theme_form_alter() and $theme_form_FORM_ID_alter()
   *   implementations, it passes array(\'form\', \'form_\' . $form_id) for $type.
   * @param mixed $data
   *   The variable that will be passed to $theme_TYPE_alter() implementations
   *   to be altered. The type of this variable depends on the value of the
   *   $type argument. For example, when altering a \'form\', $data will be a
   *   structured array. When altering a \'profile\', $data will be an object.
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference. If more
   *   context needs to be provided to implementations, then this should be an
   *   associative array as described above.
   *
   * @see \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'alter',
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
    '9cae615e4f416ac62c7d049aa6b49443' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides an alter hook for a specific theme.
   *
   * Similar to ::alter, it also invokes the alter hooks for the base themes.
   *
   * @param \\Drupal\\Core\\Theme\\ActiveTheme $theme
   *   A manually specified theme.
   * @param string|array $type
   *   A string describing the type of the alterable $data.
   * @param mixed $data
   *   The variable that will be passed to $theme_TYPE_alter() implementations
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference.
   *
   * @see ::alter
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
         'functionName' => 'alterForTheme',
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