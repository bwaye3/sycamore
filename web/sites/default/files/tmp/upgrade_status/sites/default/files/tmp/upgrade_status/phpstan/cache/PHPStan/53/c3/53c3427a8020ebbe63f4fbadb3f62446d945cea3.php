<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/session/session.stub-1624000535',
   'data' => 
  array (
    '96996dcb0d4158a3c1465b0123496e57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get and/or set the current session name.<br/>
 * Before 7.2.0 checked cookie status and since 7.2.0 checks both cookie and session status to avoid PHP crash.
 * @link https://php.net/manual/en/function.session-name.php
 * @param string|null $name [optional] <p>
 * The session name references the name of the session, which is
 * used in cookies and URLs (e.g. PHPSESSID). It
 * should contain only alphanumeric characters; it should be short and
 * descriptive (i.e. for users with enabled cookie warnings).
 * If <i>name</i> is specified, the name of the current
 * session is changed to its value.
 * </p>
 * <p>
 * <p>
 * The session name can\'t consist of digits only, at least one letter
 * must be present. Otherwise a new session id is generated every time.
 * </p>
 * </p>
 * @return string|false the name of the current session.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_name',
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
    'a4048b74428bf0a538caf06a73029bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get and/or set the current session module.<br/>
 * Since 7.2.0 it is forbidden to set the module name to "user".
 * @link https://php.net/manual/en/function.session-module-name.php
 * @param string|null $module [optional] <p>
 * If <i>module</i> is specified, that module will be
 * used instead.
 * </p>
 * @return string|false the name of the current session module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_module_name',
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
    '4a0099f304679050dc759fccaf96bb77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get and/or set the current session save path
 * @link https://php.net/manual/en/function.session-save-path.php
 * @param string|null $path [optional] <p>
 * Session data path. If specified, the path to which data is saved will
 * be changed. <b>session_save_path</b> needs to be called
 * before <b>session_start</b> for that purpose.
 * </p>
 * <p>
 * <p>
 * On some operating systems, you may want to specify a path on a
 * filesystem that handles lots of small files efficiently. For example,
 * on Linux, reiserfs may provide better performance than ext2fs.
 * </p>
 * </p>
 * @return string|false the path of the current directory used for data storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_save_path',
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
    'b97b958b5f1a72b9065e9b9ee12e201c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get and/or set the current session id
 * @link https://php.net/manual/en/function.session-id.php
 * @param string|null $id [optional] <p>
 * If <i>id</i> is specified, it will replace the current
 * session id. <b>session_id</b> needs to be called before
 * <b>session_start</b> for that purpose. Depending on the
 * session handler, not all characters are allowed within the session id.
 * For example, the file session handler only allows characters in the
 * range a-z A-Z 0-9 , (comma) and - (minus)!
 * </p>
 * When using session cookies, specifying an <i>id</i>
 * for <b>session_id</b> will always send a new cookie
 * when <b>session_start</b> is called, regardless if the
 * current session id is identical to the one being set.
 * @return string|false <b>session_id</b> returns the session id for the current
 * session or the empty string ("") if there is no current
 * session (no current session id exists).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_id',
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
    '75faaade675c8a2046277edfa8414fbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update the current session id with a newly generated one
 * @link https://php.net/manual/en/function.session-regenerate-id.php
 * @param bool $delete_old_session [optional] <p>
 * Whether to delete the old associated session file or not.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_regenerate_id',
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
    'c63e8b3920ee44d07ff4e9e4b5c97dc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * PHP > 5.4.0 <br/>
 * Session shutdown function
 * @link https://secure.php.net/manual/en/function.session-register-shutdown.php
 * @return void
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_register_shutdown',
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
    '30947e448478e8a72be8a63d80f2b931' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Decodes session data from a string
 * @link https://php.net/manual/en/function.session-decode.php
 * @param string $data <p>
 * The encoded data to be stored.
 * </p>
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_decode',
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
    'aefb3877a0e2d86df598de186fee6cac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Register one or more global variables with the current session
 * @link https://php.net/manual/en/function.session-register.php
 * @param mixed $name <p>
 * A string holding the name of a variable or an array consisting of
 * variable names or other arrays.
 * </p>
 * @param mixed ...$_ [optional]
 * @return bool true on success or false on failure.
 * @removed 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_register',
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
    '246496d3b51775721ec9c0690ba70ef1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Unregister a global variable from the current session
 * @link https://php.net/manual/en/function.session-unregister.php
 * @param string $name <p>
 * The variable name.
 * </p>
 * @return bool true on success or false on failure.
 * @removed 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_unregister',
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
    'b7712dcd2b9240162c3ef61910c7be53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Find out whether a global variable is registered in a session
 * @link https://php.net/manual/en/function.session-is-registered.php
 * @param string $name <p>
 * The variable name.
 * </p>
 * @return bool <b>session_is_registered</b> returns true if there is a
 * global variable with the name <i>name</i> registered in
 * the current session, false otherwise.
 * @removed 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_is_registered',
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
    '6eaf75497e0f3ff03a1024f86e6ad58d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Encodes the current session data as a string
 * @link https://php.net/manual/en/function.session-encode.php
 * @return string|false the contents of the current session encoded.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_encode',
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
    '2990d181edfefec325a6df88c142010d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Initialize session data
 * @link https://php.net/manual/en/function.session-start.php
 * @param array $options [optional] <p>If provided, this is an associative array of options that will override the currently set session configuration directives. The keys should not include the session. prefix.
 * In addition to the normal set of configuration directives, a read_and_close option may also be provided. If set to TRUE, this will result in the session being closed immediately after being read, thereby avoiding unnecessary locking if the session data won\'t be changed.</p>
 * @return bool This function returns true if a session was successfully started,
 * otherwise false.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_start',
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
    '456d58ae59f2b7592434671534394148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Create new session id
 * @link https://www.php.net/manual/en/function.session-create-id.php
 * @param string $prefix [optional] If prefix is specified, new session id is prefixed by prefix.
 * Not all characters are allowed within the session id.
 * Characters in the range a-z A-Z 0-9 , (comma) and - (minus) are allowed.
 * @return string|false new collision free session id for the current session.
 * If it is used without active session, it omits collision check.
 * @since 7.1
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_create_id',
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
    '480c2d2b71b70455eecd8a76f8de82bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform session data garbage collection
 * @return int|false number of deleted session data for success, false for failure.
 * @since 7.1
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_gc',
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
    'ada41a6387e421ff29223a72b6004976' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Destroys all data registered to a session
 * @link https://php.net/manual/en/function.session-destroy.php
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_destroy',
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
    'a4419c8488ea0154b171414c98fda97b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Free all session variables
 * @link https://php.net/manual/en/function.session-unset.php
 * @return void|bool since 7.2.0 returns true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_unset',
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
    '40bfd765a7869b32d164e2dbb4378f3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets user-level session storage functions
 * @link https://php.net/manual/en/function.session-set-save-handler.php
 * @param callable $open <p>
 * Open function, this works like a constructor in classes and is
 * executed when the session is being opened. The open function
 * expects two parameters, where the first is the save path and
 * the second is the session name.
 * </p>
 * @param callable $close <p>
 * Close function, this works like a destructor in classes and is
 * executed when the session operation is done.
 * </p>
 * @param callable $read <p>
 * Read function must return string value always to make save handler
 * work as expected. Return empty string if there is no data to read.
 * Return values from other handlers are converted to boolean expression.
 * true for success, false for failure.
 * </p>
 * @param callable $write <p>
 * Write function that is called when session data is to be saved. This
 * function expects two parameters: an identifier and the data associated
 * with it.
 * </p>
 * <p>
 * The "write" handler is not executed until after the output stream is
 * closed. Thus, output from debugging statements in the "write"
 * handler will never be seen in the browser. If debugging output is
 * necessary, it is suggested that the debug output be written to a
 * file instead.
 * </p>
 * @param callable $destroy <p>
 * The destroy handler, this is executed when a session is destroyed with
 * <b>session_destroy</b> and takes the session id as its
 * only parameter.
 * </p>
 * @param callable $gc <p>
 * The garbage collector, this is executed when the session garbage collector
 * is executed and takes the max session lifetime as its only parameter.
 * </p>
 * @param callable $create_sid [optional]
 * <p>This callback is executed when a new session ID is required.
 * No parameters are provided, and the return value should be a string that is a valid
 * session ID for your handler.</p>
 * @param callable $validate_sid [optional]
 * @param callable $update_timestamp [optional]
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_set_save_handler',
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
    '99d3caccd235fb879f3629283d0e6508' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5.4)<br/>
 * Sets user-level session storage functions
 * @link https://php.net/manual/en/function.session-set-save-handler.php
 * @param SessionHandlerInterface $session_handler An instance of a class implementing SessionHandlerInterface, such as SessionHandler,
 * to register as the session handler. Since PHP 5.4 only.
 * @param bool $register_shutdown [optional] Register session_write_close() as a register_shutdown_function() function.
 * @return bool true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_set_save_handler',
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
    'b022e6b67f071f06bbc2a4100a0354f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get and/or set the current cache limiter
 * @link https://php.net/manual/en/function.session-cache-limiter.php
 * @param string|null $value [optional] <p>
 * If <i>cache_limiter</i> is specified, the name of the
 * current cache limiter is changed to the new value.
 * </p>
 * <table>
 * Possible values
 * <tr valign="top">
 * <td>Value</td>
 * <td>Headers sent</td>
 * </tr>
 * <tr valign="top">
 * <td>public</td>
 * <td>
 * <pre>
 * Expires: (sometime in the future, according session.cache_expire)
 * Cache-Control: public, max-age=(sometime in the future, according to session.cache_expire)
 * Last-Modified: (the timestamp of when the session was last saved)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private_no_expire</td>
 * <td>
 * <pre>
 * Cache-Control: private, max-age=(session.cache_expire in the future), pre-check=(session.cache_expire in the future)
 * Last-Modified: (the timestamp of when the session was last saved)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>private</td>
 * <td>
 * <pre>
 * Expires: Thu, 19 Nov 1981 08:52:00 GMT
 * Cache-Control: private, max-age=(session.cache_expire in the future), pre-check=(session.cache_expire in the future)
 * Last-Modified: (the timestamp of when the session was last saved)
 * </pre>
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>nocache</td>
 * <td>
 * <pre>
 * Expires: Thu, 19 Nov 1981 08:52:00 GMT
 * Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
 * Pragma: no-cache
 * </pre>
 * </td>
 * </tr>
 * </table>
 * @return string|false the name of the current cache limiter.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_cache_limiter',
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
    'c99c2ba8008c2f522624da44fd438e71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return current cache expire
 * @link https://php.net/manual/en/function.session-cache-expire.php
 * @param int|null $value [optional] <p>
 * If <i>new_cache_expire</i> is given, the current cache
 * expire is replaced with <i>new_cache_expire</i>.
 * </p>
 * <p>
 * Setting <i>new_cache_expire</i> is of value only, if
 * session.cache_limiter is set to a value
 * different from nocache.
 * </p>
 * @return int|false the current setting of session.cache_expire.
 * The value returned should be read in minutes, defaults to 180.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_cache_expire',
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
    '5facf9ab0ba04cbdda2d442e8e36166d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set the session cookie parameters
 * @link https://php.net/manual/en/function.session-set-cookie-params.php
 * @param array $options <p>
 * An associative array which may have any of the keys lifetime, path, domain,
 * secure, httponly and samesite. The values have the same meaning as described
 * for the parameters with the same name. The value of the samesite element
 * should be either Lax or Strict. If any of the allowed options are not given,
 * their default values are the same as the default values of the explicit
 * parameters. If the samesite element is omitted, no SameSite cookie attribute
 * is set.
 * </p>
 * @return bool returns true on success or false on failure.
 * @since 7.3
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_set_cookie_params',
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
    '5d2b6cce5c453b95d5057e05e11992ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set the session cookie parameters
 * @link https://php.net/manual/en/function.session-set-cookie-params.php
 * @param array|int $lifetime_or_options <p>
 * Lifetime of the
 * session cookie, defined in seconds.
 * </p>
 * @param string|null $path [optional] <p>
 * Path on the domain where
 * the cookie will work. Use a single slash (\'/\') for all paths on the
 * domain.
 * </p>
 * @param string|null $domain [optional] <p>
 * Cookie domain, for
 * example \'www.php.net\'. To make cookies visible on all subdomains then
 * the domain must be prefixed with a dot like \'.php.net\'.
 * </p>
 * @param bool|null $secure [optional] <p>
 * If true cookie will only be sent over
 * secure connections.
 * </p>
 * @param bool|null $httponly [optional] <p>
 * If set to true then PHP will attempt to send the
 * httponly
 * flag when setting the session cookie.
 * </p>
 * @return void|bool since 7.2.0 returns true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_set_cookie_params',
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
    '2b57741a88944aa26725489c121aae88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get the session cookie parameters
 * @link https://php.net/manual/en/function.session-get-cookie-params.php
 * @return array an array with the current session cookie information, the array
 * contains the following items:
 * "lifetime" - The
 * lifetime of the cookie in seconds.
 * "path" - The path where
 * information is stored.
 * "domain" - The domain
 * of the cookie.
 * "secure" - The cookie
 * should only be sent over secure connections.
 * "httponly" - The
 * cookie can only be accessed through the HTTP protocol.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_get_cookie_params',
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
    '70b5d492ffe33a3173940a68eaf0d748' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Write session data and end session
 * @link https://php.net/manual/en/function.session-write-close.php
 * @return void|bool since 7.2.0 returns true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_write_close',
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
    'e45f3449b15b7dbd7ad08717574f7f24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Alias of <b>session_write_close</b>
 * @link https://php.net/manual/en/function.session-commit.php
 * @return void|bool since 7.2.0 returns true on success or false on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_commit',
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
    '7d1dc06a62c853e5c410b6d78e159271' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 >= 5.4.0)<br>
 * Returns the current session status
 * @link https://php.net/manual/en/function.session-status.php
 * @return int <b>PHP_SESSION_DISABLED</b> if sessions are disabled.
 * <b>PHP_SESSION_NONE</b> if sessions are enabled, but none exists.
 * <b>PHP_SESSION_ACTIVE</b> if sessions are enabled, and one exists.
 * @since 5.4
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_status',
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
    '9f43d70e37a77e494755558d4a30be54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 >= 5.6.0)<br>
 * Discard session array changes and finish session
 * @link https://php.net/manual/en/function.session-abort.php
 * @return void|bool since 7.2.0 returns true if a session was successfully reinitialized or false on failure.
 * @since 5.6
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_abort',
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
    '4282cc94e8c1545543ca846b4068b3b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 >= 5.6.0)<br>
 * Re-initialize session array with original values
 * @link https://php.net/manual/en/function.session-reset.php
 * @return void|bool since 7.2.0 returns true if a session was successfully reinitialized or false on failure.
 * @since 5.6
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'arrayshape' => 'JetBrains\\PhpStorm\\ArrayShape',
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'session_reset',
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