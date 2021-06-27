<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/hash/hash.stub-1624000535',
   'data' => 
  array (
    'd0b029127b735513749ddf39ba363878' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Generate a hash value (message digest)
 * @link https://php.net/manual/en/function.hash.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..)
 * </p>
 * @param string $data <p>
 * Message to be hashed.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to <b>TRUE</b>, outputs raw binary data.
 * <b>FALSE</b> outputs lowercase hexits.
 * </p>
 * @return string|false a string containing the calculated message digest as lowercase hexits
 * unless <i>raw_output</i> is set to true in which case the raw
 * binary representation of the message digest is returned.
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
         'functionName' => 'hash',
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
    'cdc167d99aaec367f6a738ccb8b6032c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Timing attack safe string comparison
 * @link https://php.net/manual/en/function.hash-equals.php
 * @param string $known_string <p>The string of known length to compare against</p>
 * @param string $user_string <p>The user-supplied string</p>
 * @return bool <p>Returns <b>TRUE</b> when the two strings are equal, <b>FALSE</b> otherwise.</p>
 * @since 5.6
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
         'functionName' => 'hash_equals',
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
    '426da7ab11b1f12db82908752f815ddb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Generate a hash value using the contents of a given file
 * @link https://php.net/manual/en/function.hash-file.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..)
 * </p>
 * @param string $filename <p>
 * URL describing location of file to be hashed; Supports fopen wrappers.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to <b>TRUE</b>, outputs raw binary data.
 * <b>FALSE</b> outputs lowercase hexits.
 * </p>
 * @return string|false a string containing the calculated message digest as lowercase hexits
 * unless <i>raw_output</i> is set to true in which case the raw
 * binary representation of the message digest is returned.
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
         'functionName' => 'hash_file',
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
    '2b495011a2e3b60d3147418e166585b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Generate a keyed hash value using the HMAC method
 * @link https://php.net/manual/en/function.hash-hmac.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <b>hash_algos</b> for a list of supported algorithms.<br/>
 * Since 7.2.0 usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
 * </p>
 * @param string $data <p>
 * Message to be hashed.
 * </p>
 * @param string $key <p>
 * Shared secret key used for generating the HMAC variant of the message digest.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to <b>TRUE</b>, outputs raw binary data.
 * <b>FALSE</b> outputs lowercase hexits.
 * </p>
 * @return string|false a string containing the calculated message digest as lowercase hexits
 * unless <i>raw_output</i> is set to true in which case the raw
 * binary representation of the message digest is returned.
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
         'functionName' => 'hash_hmac',
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
    '5400d03bde9886b99b080bf7a32d2f35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Generate a keyed hash value using the HMAC method and the contents of a given file
 * @link https://php.net/manual/en/function.hash-hmac-file.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <b>hash_algos</b> for a list of supported algorithms.<br/>
 * Since 7.2.0 usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
 * </p>
 * @param string $data <p>
 * URL describing location of file to be hashed; Supports fopen wrappers.
 * </p>
 * @param string $key <p>
 * Shared secret key used for generating the HMAC variant of the message digest.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to <b>TRUE</b>, outputs raw binary data.
 * <b>FALSE</b> outputs lowercase hexits.
 * </p>
 * @return string|false a string containing the calculated message digest as lowercase hexits
 * unless <i>raw_output</i> is set to true in which case the raw
 * binary representation of the message digest is returned.
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
         'functionName' => 'hash_hmac_file',
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
    '46f10a4d78f7b7ad1c631aa58f093b95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Initialize an incremental hashing context
 * @link https://php.net/manual/en/function.hash-init.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..). For a list of supported algorithms see <b>hash_algos</b>.<br/>
 * Since 7.2.0 usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
 * </p>
 * @param int $flags [optional] <p>
 * Optional settings for hash generation, currently supports only one option:
 * <b>HASH_HMAC</b>. When specified, the <i>key</i>
 * must be specified.
 * </p>
 * @param string $key [optional] <p>
 * When <b>HASH_HMAC</b> is specified for <i>options</i>,
 * a shared secret key to be used with the HMAC hashing method must be supplied in this
 * parameter.
 * </p>
 * @return HashContext|resource a Hashing Context resource for use with <b>hash_update</b>,
 * <b>hash_update_stream</b>, <b>hash_update_file</b>,
 * and <b>hash_final</b>.
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
         'functionName' => 'hash_init',
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
    '8ca22a41f2894d8e484830e6423ad2e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Pump data into an active hashing context
 * @link https://php.net/manual/en/function.hash-update.php
 * @param HashContext|resource $context <p>
 * Hashing context returned by {@see hash_init}.
 * </p>
 * @param string $data <p>
 * Message to be included in the hash digest.
 * </p>
 * @return bool <b>TRUE</b>.
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
         'functionName' => 'hash_update',
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
    'b5790a4d8ca43c80d33563e882162796' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Pump data into an active hashing context from an open stream
 * @link https://php.net/manual/en/function.hash-update-stream.php
 * @param HashContext|resource $context <p>
 * Hashing context returned by {@see hash_init}.
 * </p>
 * @param resource $stream <p>
 * Open file handle as returned by any stream creation function.
 * </p>
 * @param int $length [optional] <p>
 * Maximum number of characters to copy from <i>handle</i>
 * into the hashing context.
 * </p>
 * @return int Actual number of bytes added to the hashing context from <i>handle</i>.
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
         'functionName' => 'hash_update_stream',
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
    '5f8f539eddab5129c5146aaa82474cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Pump data into an active hashing context from a file
 * @link https://php.net/manual/en/function.hash-update-file.php
 * @param HashContext|resource $context <p>
 * Hashing context returned by <b>hash_init</b>.
 * </p>
 * @param string $filename <p>
 * URL describing location of file to be hashed; Supports fopen wrappers.
 * </p>
 * @param resource $stream_context [optional] <p>
 * Stream context as returned by <b>stream_context_create</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
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
         'functionName' => 'hash_update_file',
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
    '16ed95822babf9163629da4883677f7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Finalize an incremental hash and return resulting digest
 * @link https://php.net/manual/en/function.hash-final.php
 * @param HashContext|resource $context <p>
 * Hashing context returned by {@see hash_init}.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to <b>TRUE</b>, outputs raw binary data.
 * <b>FALSE</b> outputs lowercase hexits.
 * </p>
 * @return string a string containing the calculated message digest as lowercase hexits
 * unless <i>raw_output</i> is set to true in which case the raw
 * binary representation of the message digest is returned.
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
         'functionName' => 'hash_final',
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
    'eb8a973d333bfa9f376e9ffd27e2be6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Copy hashing context
 * @link https://php.net/manual/en/function.hash-copy.php
 * @param HashContext|resource $context <p>
 * Hashing context returned by {@see hash_init}.
 * </p>
 * @return HashContext|resource a copy of Hashing Context resource.
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
         'functionName' => 'hash_copy',
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
    '2cdb5a4e974b31f17694d17a7b48b790' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * (PHP 5 &gt;= 5.1.2, PECL hash &gt;= 1.1)<br/>
 * Return a list of registered hashing algorithms
 * @link https://php.net/manual/en/function.hash-algos.php
 * @return array a numerically indexed array containing the list of supported
 * hashing algorithms.
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
         'functionName' => 'hash_algos',
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
    '826300e00f4909914c54b9e12b31d0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a hkdf key derivation of a supplied key input
 * @param string $algo Name of selected hashing algorithm (i.e. "sha256", "sha512", "haval160,4", etc..)
 * See {@see hash_algos()} for a list of supported algorithms.
 * <blockquote>
 * <p><strong>Note</strong></p>
 * <p>
 * Non-cryptographic hash functions are not allowed.
 * </p>
 * </blockquote>
 * @param string $key <p>Input keying material (raw binary). Cannot be empty.</p>
 * @param int $length [optional] <p>Desired output length in bytes. Cannot be greater than 255 times the chosen hash function size.
 * If <b>length</b> is 0, the output length will default to the chosen hash function size.</p>
 * @param string $info [optional] <p>Application/context-specific info string.</p>
 * @param string $salt [optional] <p>Salt to use during derivation. While optional, adding random salt significantly improves the strength of HKDF.</p>
 * @return string|false <p>Returns a string containing a raw binary representation of the derived key (also known as output keying material - OKM); or <b>FALSE</b> on failure.</p>
 * @since 7.1.2
 * Generate a HKDF key derivation of a supplied key input
 * @link https://php.net/manual/en/function.hash-hkdf.php
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
         'functionName' => 'hash_hkdf',
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
    'b4b3c8834f5ef75f11da75e95cda1a5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Return a list of registered hashing algorithms suitable for hash_hmac
 * @since 7.2
 * Return a list of registered hashing algorithms suitable for hash_hmac
 * @return string[] Returns a numerically indexed array containing the list of supported hashing algorithms suitable for {@see hash_hmac()}.
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
         'functionName' => 'hash_hmac_algos',
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
    'a8668e61753dd71766a42d9532b798ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a PBKDF2 key derivation of a supplied password
 * @link https://php.net/manual/en/function.hash-pbkdf2.php
 * @param string $algo <p>
 * Name of selected hashing algorithm (i.e. "md5", "sha256", "haval160,4", etc..) See <b>hash_algos</b> for a list of supported algorithms.<br/>
 * Since 7.2.0 usage of non-cryptographic hash functions (adler32, crc32, crc32b, fnv132, fnv1a32, fnv164, fnv1a64, joaat) was disabled.
 * </p>
 * @param string $password <p>
 * The password to use for the derivation.
 * </p>
 * @param string $salt <p>
 * The salt to use for the derivation. This value should be generated randomly.
 * </p>
 * @param int $iterations <p>
 * The number of internal iterations to perform for the derivation.
 * </p>
 * @param int $length [optional] <p>
 * The length of the output string. If raw_output is TRUE this corresponds to the byte-length of the derived key,
 * if raw_output is FALSE this corresponds to twice the byte-length of the derived key (as every byte of the key is returned as two hexits). <br/>
 * If 0 is passed, the entire output of the supplied algorithm is used.
 * </p>
 * @param bool $binary [optional] <p>
 * When set to TRUE, outputs raw binary data. FALSE outputs lowercase hexits.
 * </p>
 * @return string a string containing the derived key as lowercase hexits unless
 * <i>raw_output</i> is set to <b>TRUE</b> in which case the raw
 * binary representation of the derived key is returned.
 * @since 5.5
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
         'functionName' => 'hash_pbkdf2',
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
    '2f4e561f2535d96804a3369c9ca36de0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates a key
 * @link https://php.net/manual/en/function.mhash-keygen-s2k.php
 * @param int $algo <p>
 * The hash ID used to create the key.
 * One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @param string $password <p>
 * An user supplied password.
 * </p>
 * @param string $salt <p>
 * Must be different and random enough for every key you generate in
 * order to create different keys. Because <i>salt</i>
 * must be known when you check the keys, it is a good idea to append
 * the key to it. Salt has a fixed length of 8 bytes and will be padded
 * with zeros if you supply less bytes.
 * </p>
 * @param int $length <p>
 * The key length, in bytes.
 * </p>
 * @return string|false the generated key as a string, or <b>FALSE</b> on error.
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
         'functionName' => 'mhash_keygen_s2k',
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
    '05cc2e0f99097f69c49c2180b89cec1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the block size of the specified hash
 * @link https://php.net/manual/en/function.mhash-get-block-size.php
 * @param int $algo <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @return int|false the size in bytes or <b>FALSE</b>, if the <i>hash</i>
 * does not exist.
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
         'functionName' => 'mhash_get_block_size',
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
    '81795445935286a66fe75c9f6e94c7ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the name of the specified hash
 * @link https://php.net/manual/en/function.mhash-get-hash-name.php
 * @param int $algo <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @return string|false the name of the hash or <b>FALSE</b>, if the hash does not exist.
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
         'functionName' => 'mhash_get_hash_name',
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
    'bc3e669257e52ccb089f69d8fb9da824' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the highest available hash ID
 * @link https://php.net/manual/en/function.mhash-count.php
 * @return int the highest available hash ID. Hashes are numbered from 0 to this
 * hash ID.
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
         'functionName' => 'mhash_count',
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
    'ba1b9c9f03da575fa65e504169ffdc8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Computes hash
 * @link https://php.net/manual/en/function.mhash.php
 * @param int $algo <p>
 * The hash ID. One of the <b>MHASH_hashname</b> constants.
 * </p>
 * @param string $data <p>
 * The user input, as a string.
 * </p>
 * @param string|null $key [optional] <p>
 * If specified, the function will return the resulting HMAC instead.
 * HMAC is keyed hashing for message authentication, or simply a message
 * digest that depends on the specified key. Not all algorithms
 * supported in mhash can be used in HMAC mode.
 * </p>
 * @return string|false the resulting hash (also called digest) or HMAC as a string, or
 * <b>FALSE</b> on error.
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
         'functionName' => 'mhash',
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
    'd1d818da6af7a589bc2f4807174791b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Optional flag for <b>hash_init</b>.
 * Indicates that the HMAC digest-keying algorithm should be
 * applied to the current hashing context.
 * @link https://php.net/manual/en/hash.constants.php
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
    'df085ae9e80e6dc5b1524c35b1bbc844' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @since 7.4
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
    'ffd91d218419f13d3a7b71dfd3bab152' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array $data
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'HashContext',
         'functionName' => '__unserialize',
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