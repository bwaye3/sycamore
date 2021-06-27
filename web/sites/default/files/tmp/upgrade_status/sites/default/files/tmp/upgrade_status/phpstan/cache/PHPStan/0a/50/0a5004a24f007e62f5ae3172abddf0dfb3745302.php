<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/SPL/SPL_f.stub-1624000535',
   'data' => 
  array (
    '82cae1094c6956eb20429319d4860101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return available SPL classes
 * @link https://php.net/manual/en/function.spl-classes.php
 * @return array
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_classes',
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
    '1ecb491179ae4454e4c9da721f79915b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation for __autoload()
 * @link https://php.net/manual/en/function.spl-autoload.php
 * @param string $class <p>
 * </p>
 * @param string|null $file_extensions [optional] <p>
 * By default it checks all include paths to
 * contain filenames built up by the lowercase class name appended by the
 * filename extensions .inc and .php.
 * </p>
 * @return void
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload',
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
    '7f6c351719b091a3413e67e16c243f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Register and return default file extensions for spl_autoload
 * @link https://php.net/manual/en/function.spl-autoload-extensions.php
 * @param string|null $file_extensions [optional] <p>
 * When calling without an argument, it simply returns the current list
 * of extensions each separated by comma. To modify the list of file
 * extensions, simply invoke the functions with the new list of file
 * extensions to use in a single string with each extensions separated
 * by comma.
 * </p>
 * @return string A comma delimited list of default file extensions for
 * spl_autoload.
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload_extensions',
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
    'f0c9021b57d0e2dd898e6f5107e87246' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Register given function as __autoload() implementation
 * @link https://php.net/manual/en/function.spl-autoload-register.php
 * @param callable|null $callback [optional] <p>
 * The autoload function being registered.
 * If no parameter is provided, then the default implementation of
 * spl_autoload will be registered.
 * </p>
 * @param bool $throw This parameter specifies whether spl_autoload_register() should throw exceptions when the
 * autoload_function cannot be registered. Ignored since since 8.0.
 * @param bool $prepend If true, spl_autoload_register() will prepend the autoloader on the autoload stack instead of
 * appending it.
 * @return bool true on success or false on failure.
 * @throws TypeError Since 8.0.
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload_register',
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
    '9e68037af916a4654b283f08f133f2c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Unregister given function as __autoload() implementation
 * @link https://php.net/manual/en/function.spl-autoload-unregister.php
 * @param callable $callback <p>
 * The autoload function being unregistered.
 * </p>
 * @return bool true on success or false on failure.
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload_unregister',
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
    '972b42d52dd5440d8b7f84d50d860963' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return all registered __autoload() functions
 * @link https://php.net/manual/en/function.spl-autoload-functions.php
 * @return array|false An array of all registered __autoload functions.
 * If the autoload stack is not activated then the return value is false.
 * If no function is registered the return value will be an empty array.
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload_functions',
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
    '439985c415016f2883aab49b5b449fc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Try all registered __autoload() functions to load the requested class
 * @link https://php.net/manual/en/function.spl-autoload-call.php
 * @param string $class <p>
 * The class name being searched.
 * </p>
 * @return void
 * @since 5.1.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_autoload_call',
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
    '62d2b6ff08654e82c3498def8ad9de44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the parent classes of the given class
 * @link https://php.net/manual/en/function.class-parents.php
 * @param object|string $object_or_class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return string[]|false An array on success, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'class_parents',
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
    '51cf066b2234d080b401b84ffd6b5cb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the interfaces which are implemented by the given class
 * @link https://php.net/manual/en/function.class-implements.php
 * @param object|string $object_or_class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return string[]|false An array on success, or false on error.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'class_implements',
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
    '3647730b37efc596ac7fa49fbe302292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return hash id for given object
 * @link https://php.net/manual/en/function.spl-object-hash.php
 * @param object $object
 * @return string A string that is unique for each object and is always the same for
 * the same object.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_object_hash',
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
    '84b869571137cc4b2528a3bcbf0003ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Copy the iterator into an array
 * @link https://php.net/manual/en/function.iterator-to-array.php
 * @param Traversable $iterator <p>
 * The iterator being copied.
 * </p>
 * @param bool $preserve_keys [optional] <p>
 * Whether to use the iterator element keys as index.
 * </p>
 * @return array An array containing the elements of the iterator.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'iterator_to_array',
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
    '214875e17cba70ec074171a066054235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Count the elements in an iterator
 * @link https://php.net/manual/en/function.iterator-count.php
 * @param Traversable $iterator <p>
 * The iterator being counted.
 * </p>
 * @return int The number of elements in iterator.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'iterator_count',
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
    'a126768f1843af2ca4e6426d72c62ad1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Call a function for every element in an iterator
 * @link https://php.net/manual/en/function.iterator-apply.php
 * @param Traversable $iterator <p>
 * The class to iterate over.
 * </p>
 * @param callable $callback <p>
 * The callback function to call on every element.
 * The function must return true in order to
 * continue iterating over the iterator.
 * </p>
 * @param array|null $args [optional] <p>
 * Arguments to pass to the callback function.
 * </p>
 * @return int the iteration count.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'iterator_apply',
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
    '75dbcff3452969e054cd9a21b7885e9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return the traits used by the given class
 * @param object|string $object_or_class An object (class instance) or a string (class name).
 * @param bool $autoload Whether to allow this function to load the class automatically through the __autoload() magic method.
 * @return string[]|false An array on success, or false on error.
 * @link https://php.net/manual/en/function.class-uses.php
 * @see class_parents()
 * @see get_declared_traits()
 * @since 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'class_uses',
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
    'efc7d2ff4c789c31cad13b45ed25b25c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * return the integer object handle for given object
 * @param object $object
 * @return int
 * @since 7.2
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'spl_object_id',
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