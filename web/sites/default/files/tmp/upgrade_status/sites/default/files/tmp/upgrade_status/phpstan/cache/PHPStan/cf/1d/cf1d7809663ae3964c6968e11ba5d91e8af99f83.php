<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Utility/Unicode.php-1624732867',
   'data' => 
  array (
    '701158d8b1fd3d66a2d6b0339226e892' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides Unicode-related conversions and operations.
 *
 * @ingroup utility
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
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
    '62b92e0d9a404b8f9de1f93966be832e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Matches Unicode characters that are word boundaries.
   *
   * Characters with the following General_category (gc) property values are used
   * as word boundaries. While this does not fully conform to the Word Boundaries
   * algorithm described in http://unicode.org/reports/tr29, as PCRE does not
   * contain the Word_Break property table, this simpler algorithm has to do.
   * - Cc, Cf, Cn, Co, Cs: Other.
   * - Pc, Pd, Pe, Pf, Pi, Po, Ps: Punctuation.
   * - Sc, Sk, Sm, So: Symbols.
   * - Zl, Zp, Zs: Separators.
   *
   * Non-boundary characters include the following General_category (gc) property
   * values:
   * - Ll, Lm, Lo, Lt, Lu: Letters.
   * - Mc, Me, Mn: Combining Marks.
   * - Nd, Nl, No: Numbers.
   *
   * Note that the PCRE property matcher is not used because we wanted to be
   * compatible with Unicode 5.2.0 regardless of the PCRE version used (and any
   * bugs in PCRE property tables).
   *
   * @see http://unicode.org/glossary
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
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
    '35d1480e949e63e385e86b1663b2e27d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that standard PHP (emulated) unicode support is being used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
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
    'b64cc0abb62c1633211a6d03a617e448' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that full unicode support with the PHP mbstring extension is
   * being used.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
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
    'dfaaf7e80fb318ef276017161c719661' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates an error during check for PHP unicode support.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
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
    '638f280acb31829b4b76b8bf57881333' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current status of unicode/multibyte support on this environment.
   *
   * @return int
   *   The status of multibyte support. It can be one of:
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_MULTIBYTE
   *     Full unicode support using an extension.
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_SINGLEBYTE
   *     Standard PHP (emulated) unicode support.
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_ERROR
   *     An error occurred. No unicode support.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'getStatus',
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
    '39ac8af6756bf79525aa0f534ac8dffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value for multibyte support status for the current environment.
   *
   * The following status keys are supported:
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_MULTIBYTE
   *     Full unicode support using an extension.
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_SINGLEBYTE
   *     Standard PHP (emulated) unicode support.
   *   - \\Drupal\\Component\\Utility\\Unicode::STATUS_ERROR
   *     An error occurred. No unicode support.
   *
   * @param int $status
   *   The new status of multibyte support.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. In
   *   Drupal 9 there will be no way to set the status and in Drupal 8 this
   *   ability has been removed because mb_*() functions are supplied using
   *   Symfony\'s polyfill.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'setStatus',
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
    '6c7d6df258c39568f47b8fe365a5c162' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks for Unicode support in PHP and sets the proper settings if possible.
   *
   * Because of the need to be able to handle text in various encodings, we do
   * not support mbstring function overloading. HTTP input/output conversion
   * must be disabled for similar reasons.
   *
   * @return string
   *   A string identifier of a failed multibyte extension check, if any.
   *   Otherwise, an empty string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'check',
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
    '473ba8a8892b9366294c72a3083a7a2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Decodes UTF byte-order mark (BOM) into the encoding\'s name.
   *
   * @param string $data
   *   The data possibly containing a BOM. This can be the entire contents of
   *   a file, or just a fragment containing at least the first five bytes.
   *
   * @return string|bool
   *   The name of the encoding, or FALSE if no byte order mark was present.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'encodingFromBOM',
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
    '4152bc4abe0dd8585a414c0e62cdeece' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts data to UTF-8.
   *
   * Requires the iconv, GNU recode or mbstring PHP extension.
   *
   * @param string $data
   *   The data to be converted.
   * @param string $encoding
   *   The encoding that the data is in.
   *
   * @return string|bool
   *   Converted data or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'convertToUtf8',
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
    'e558c593b1acfd434f4cc264154db205' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Truncates a UTF-8-encoded string safely to a number of bytes.
   *
   * If the end position is in the middle of a UTF-8 sequence, it scans backwards
   * until the beginning of the byte sequence.
   *
   * Use this function whenever you want to chop off a string at an unsure
   * location. On the other hand, if you\'re sure that you\'re splitting on a
   * character boundary (e.g. after using strpos() or similar), you can safely
   * use substr() instead.
   *
   * @param string $string
   *   The string to truncate.
   * @param int $len
   *   An upper limit on the returned string length.
   *
   * @return string
   *   The truncated string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'truncateBytes',
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
    '93c5d6781234738f5d0e1b99d928b7d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts the number of characters in a UTF-8 string.
   *
   * This is less than or equal to the byte count.
   *
   * @param string $text
   *   The string to run the operation on.
   *
   * @return int
   *   The length of the string.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. Use
   *   mb_strlen() instead.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'strlen',
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
    '4231a3434d403a16577d8ed7e07be2c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a UTF-8 string to uppercase.
   *
   * @param string $text
   *   The string to run the operation on.
   *
   * @return string
   *   The string in uppercase.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. Use
   *   mb_strtoupper() instead.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'strtoupper',
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
    'd63b87135dd6bdedc159e54be175a9ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a UTF-8 string to lowercase.
   *
   * @param string $text
   *   The string to run the operation on.
   *
   * @return string
   *   The string in lowercase.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. Use
   *   mb_strtolower() instead.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'strtolower',
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
    '5a2b9ce27c3b5c5907e0576acb7bf7db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Capitalizes the first character of a UTF-8 string.
   *
   * @param string $text
   *   The string to convert.
   *
   * @return string
   *   The string with the first character as uppercase.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'ucfirst',
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
    '443244dcc052ab1e4580056e3ce311b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts the first character of a UTF-8 string to lowercase.
   *
   * @param string $text
   *   The string that will be converted.
   *
   * @return string
   *   The string with the first character as lowercase.
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'lcfirst',
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
    'bd9ca6468c6236edf27ecb8d533af700' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Capitalizes the first character of each word in a UTF-8 string.
   *
   * @param string $text
   *   The text that will be converted.
   *
   * @return string
   *   The input $text with each word capitalized.
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'ucwords',
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
    '686241c79a050bbdd212b9c7a51258b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cuts off a piece of a string based on character indices and counts.
   *
   * Follows the same behavior as PHP\'s own substr() function. Note that for
   * cutting off a string at a known character/substring location, the usage of
   * PHP\'s normal strpos/substr is safe and much faster.
   *
   * @param string $text
   *   The input string.
   * @param int $start
   *   The position at which to start reading.
   * @param int $length
   *   The number of characters to read.
   *
   * @return string
   *   The shortened string.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. Use
   *   mb_substr() instead.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'substr',
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
    '1d70f93a3dbfd9251a6c59821476ea84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Truncates a UTF-8-encoded string safely to a number of characters.
   *
   * @param string $string
   *   The string to truncate.
   * @param int $max_length
   *   An upper limit on the returned string length, including trailing ellipsis
   *   if $add_ellipsis is TRUE.
   * @param bool $wordsafe
   *   If TRUE, attempt to truncate on a word boundary. Word boundaries are
   *   spaces, punctuation, and Unicode characters used as word boundaries in
   *   non-Latin languages; see Unicode::PREG_CLASS_WORD_BOUNDARY for more
   *   information. If a word boundary cannot be found that would make the length
   *   of the returned string fall within length guidelines (see parameters
   *   $max_length and $min_wordsafe_length), word boundaries are ignored.
   * @param bool $add_ellipsis
   *   If TRUE, add \'...\' to the end of the truncated string (defaults to
   *   FALSE). The string length will still fall within $max_length.
   * @param int $min_wordsafe_length
   *   If $wordsafe is TRUE, the minimum acceptable length for truncation (before
   *   adding an ellipsis, if $add_ellipsis is TRUE). Has no effect if $wordsafe
   *   is FALSE. This can be used to prevent having a very short resulting string
   *   that will not be understandable. For instance, if you are truncating the
   *   string "See myverylongurlexample.com for more information" to a word-safe
   *   return length of 20, the only available word boundary within 20 characters
   *   is after the word "See", which wouldn\'t leave a very informative string. If
   *   you had set $min_wordsafe_length to 10, though, the function would realise
   *   that "See" alone is too short, and would then just truncate ignoring word
   *   boundaries, giving you "See myverylongurl..." (assuming you had set
   *   $add_ellipses to TRUE).
   *
   * @return string
   *   The truncated string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'truncate',
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
    '3172363331df640bb0511ec19103c192' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares UTF-8-encoded strings in a binary safe case-insensitive manner.
   *
   * @param string $str1
   *   The first string.
   * @param string $str2
   *   The second string.
   *
   * @return int
   *   Returns < 0 if $str1 is less than $str2; > 0 if $str1 is greater than
   *   $str2, and 0 if they are equal.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'strcasecmp',
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
    'a9beaf3ba8fa0ac5087237cc6936440e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Encodes MIME/HTTP headers that contain incorrectly encoded characters.
   *
   * For example, Unicode::mimeHeaderEncode(\'tést.txt\') returns
   * "=?UTF-8?B?dMOpc3QudHh0?=".
   *
   * See http://www.rfc-editor.org/rfc/rfc2047.txt for more information.
   *
   * Notes:
   * - Only encode strings that contain non-ASCII characters.
   * - We progressively cut-off a chunk with self::truncateBytes(). This ensures
   *   each chunk starts and ends on a character boundary.
   * - Using \\n as the chunk separator may cause problems on some systems and
   *   may have to be changed to \\r\\n or \\r.
   *
   * @param string $string
   *   The header to encode.
   * @param bool $shorten
   *   If TRUE, only return the first chunk of a multi-chunk encoded string.
   *
   * @return string
   *   The mime-encoded header.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'mimeHeaderEncode',
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
    '1974deaef4e1de240a98b72affea18ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Decodes MIME/HTTP encoded header values.
   *
   * @param string $header
   *   The header to decode.
   *
   * @return string
   *   The mime-decoded header.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'mimeHeaderDecode',
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
    '1277fd74c5673e3474e3cb5f8a731a5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flip U+C0-U+DE to U+E0-U+FD and back. Can be used as preg_replace callback.
   *
   * @param array $matches
   *   An array of matches by preg_replace_callback().
   *
   * @return string
   *   The flipped text.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. There is
   *   no direct replacement.
   *
   * @see https://www.drupal.org/node/3057322
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'caseFlip',
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
    'c262ada1370cdf70ce4d618530d890e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a string is valid UTF-8.
   *
   * All functions designed to filter input should use drupal_validate_utf8
   * to ensure they operate on valid UTF-8 strings to prevent bypass of the
   * filter.
   *
   * When text containing an invalid UTF-8 lead byte (0xC0 - 0xFF) is presented
   * as UTF-8 to Internet Explorer 6, the program may misinterpret subsequent
   * bytes. When these subsequent bytes are HTML control characters such as
   * quotes or angle brackets, parts of the text that were deemed safe by filters
   * end up in locations that are potentially unsafe; An onerror attribute that
   * is outside of a tag, and thus deemed safe by a filter, can be interpreted
   * by the browser as if it were inside the tag.
   *
   * The function does not return FALSE for strings containing character codes
   * above U+10FFFF, even though these are prohibited by RFC 3629.
   *
   * @param string $text
   *   The text to check.
   *
   * @return bool
   *   TRUE if the text is valid UTF-8, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'validateUtf8',
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
    'cd2ddd7a403d282d9b6aedf0ac487897' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the position of the first occurrence of a string in another string.
   *
   * @param string $haystack
   *   The string to search in.
   * @param string $needle
   *   The string to find in $haystack.
   * @param int $offset
   *   If specified, start the search at this number of characters from the
   *   beginning (default 0).
   *
   * @return int|false
   *   The position where $needle occurs in $haystack, always relative to the
   *   beginning (independent of $offset), or FALSE if not found. Note that
   *   a return value of 0 is not the same as FALSE.
   *
   * @deprecated in drupal:8.6.0 and is removed from drupal:9.0.0. Use
   *   mb_strpos() instead.
   *
   * @see https://www.drupal.org/node/2850048
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\Unicode',
         'functionName' => 'strpos',
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