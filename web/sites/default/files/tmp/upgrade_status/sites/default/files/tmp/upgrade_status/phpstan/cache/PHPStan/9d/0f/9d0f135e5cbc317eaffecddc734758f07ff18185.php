<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Utility/Crypt.php-1624732867',
   'data' => 
  array (
    'fa2fbb4cc376cc43067e0c8a11857ba2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility class for cryptographically-secure string handling routines.
 *
 * @ingroup utility
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
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
    '330d73291169a5bda536a4d3f115c7ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a string of highly randomized bytes (over the full 8-bit range).
   *
   * This function is better than simply calling mt_rand() or any other built-in
   * PHP function because it can return a long string of bytes (compared to < 4
   * bytes normally from mt_rand()) and uses the best available pseudo-random
   * source.
   *
   * In PHP 7 and up, this uses the built-in PHP function random_bytes().
   * In older PHP versions, this uses the random_bytes() function provided by
   * the random_compat library, or the fallback hash-based generator from Drupal
   * 7.x.
   *
   * @param int $count
   *   The number of characters (bytes) to return in the string.
   *
   * @return string
   *   A randomly generated string.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Use PHP\'s built-in random_bytes() function instead.
   *
   * @see https://www.drupal.org/node/3057191
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
         'functionName' => 'randomBytes',
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
    '052e3e15c7135cc01d5762dfa27e4ca4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates a base-64 encoded, URL-safe sha-256 hmac.
   *
   * @param mixed $data
   *   Scalar value to be validated with the hmac.
   * @param mixed $key
   *   A secret key, this can be any scalar value.
   *
   * @return string
   *   A base-64 encoded sha-256 hmac, with + replaced with -, / with _ and
   *   any = padding characters removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
         'functionName' => 'hmacBase64',
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
    'a67db47405fba72fbfb1545bbf34486e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates a base-64 encoded, URL-safe sha-256 hash.
   *
   * @param string $data
   *   String to be hashed.
   *
   * @return string
   *   A base-64 encoded sha-256 hash, with + replaced with -, / with _ and
   *   any = padding characters removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
         'functionName' => 'hashBase64',
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
    '69c156cbd1d6be5563c3d95508d91289' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares strings in constant time.
   *
   * @param string $known_string
   *   The expected string.
   * @param string $user_string
   *   The user supplied string to check.
   *
   * @return bool
   *   Returns TRUE when the two strings are equal, FALSE otherwise.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Use PHP\'s built-in hash_equals() function instead.
   *
   * @see https://www.drupal.org/node/3054488
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
         'functionName' => 'hashEquals',
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
    '9561d6596647563b3f9755d027020bfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a URL-safe, base64 encoded string of highly randomized bytes.
   *
   * @param $count
   *   The number of random bytes to fetch and base64 encode.
   *
   * @return string
   *   A base-64 encoded string, with + replaced with -, / with _ and any =
   *   padding characters removed.
   *
   * @see \\Drupal\\Component\\Utility\\Crypt::randomBytes()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Crypt',
         'functionName' => 'randomBytesBase64',
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