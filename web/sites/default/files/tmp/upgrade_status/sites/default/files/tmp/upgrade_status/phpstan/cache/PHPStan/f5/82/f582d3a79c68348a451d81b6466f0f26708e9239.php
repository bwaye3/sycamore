<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Datetime/DateTimePlus.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Utility/ToStringTrait.php-1624732867',
   'data' => 
  array (
    'aab84edafb0aebd478597a5819c3c693' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wraps DateTime().
 *
 * This class wraps the PHP DateTime class with more flexible initialization
 * parameters, allowing a date to be created from an existing date object,
 * a timestamp, a string with an unknown format, a string with a known
 * format, or an array of date parts. It also adds an errors array
 * and a __toString() method to the date object.
 *
 * This class is less lenient than the DateTime class. It changes
 * the default behavior for handling date values like \'2011-00-00\'.
 * The DateTime class would convert that value to \'2010-11-30\' and report
 * a warning but not an error. This extension treats that as an error.
 *
 * As with the DateTime class, a date object may be created even if it has
 * errors. It has an errors array attached to it that explains what the
 * errors are. This is less disruptive than allowing datetime exceptions
 * to abort processing. The calling script can decide what to do about
 * errors using hasErrors() and getErrors().
 *
 * @method $this add(\\DateInterval $interval)
 * @method static array getLastErrors()
 * @method $this modify(string $modify)
 * @method $this setDate(int $year, int $month, int $day)
 * @method $this setISODate(int $year, int $week, int $day = 1)
 * @method $this setTime(int $hour, int $minute, int $second = 0, int $microseconds = 0)
 * @method $this setTimestamp(int $unixtimestamp)
 * @method $this setTimezone(\\DateTimeZone $timezone)
 * @method $this sub(\\DateInterval $interval)
 * @method int getOffset()
 * @method int getTimestamp()
 * @method \\DateTimeZone getTimezone()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'd5591c494a1b1825a5aad838e804320d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wraps __toString in a trait to avoid some fatals.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '6d644ff4e077292d4298724e709fd536' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __toString() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '__toString',
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
    '6e182ea32a42c4af7087208361db653f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * For test purposes, wrap die() in an overridable method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '_die',
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
    '1b6b2d80e0db7dd2a8e4b33e344771c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the object as a string.
   *
   * @return string|object
   *   The rendered string or an object implementing __toString().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'a93393ced364c0801f070362bc3965cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A RFC7231 Compliant date.
   *
   * @see http://tools.ietf.org/html/rfc7231#section-7.1.1.1
   *
   * Example: Sun, 06 Nov 1994 08:49:37 GMT
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'a7ffccda2a4606c631c6335b63004fe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of possible date parts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '53f7cc4cef35c4c1e0f90e40f205164d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The value of the time value passed to the constructor.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '153428b8f1444a5c38da182e5d015fd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The prepared time, without timezone, for this date.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'ba93f7b6bbd9d9b9d73bee36e847ca87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The value of the timezone passed to the constructor.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'da3604f057571cd24826de2fbca5756d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The prepared timezone object used to construct this date.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '1a7723ad93a2200d7db4a761925be547' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The value of the format passed to the constructor.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'd09864b8d206a8ce0120e154f38a8423' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The prepared format, if provided.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '371cb77b13051c20b108589b0cd8a2cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The value of the language code passed to the constructor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '35734237b5ca52b5633dc0bc02b0ec48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of errors encountered when creating this date.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '15c9495a645ef69ddf8f7a34262a8f14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The DateTime object.
   *
   * @var \\DateTime
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    '30dce29de467daab39d110b282567326' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object from an input date object.
   *
   * @param \\DateTime $datetime
   *   A DateTime object.
   * @param array $settings
   *   (optional) A keyed array for settings, suitable for passing on to
   *   __construct().
   *
   * @return static
   *   A new DateTimePlus object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'createFromDateTime',
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
    '8134ecf53b89b9a0db7e3edb28b62c42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object from an array of date parts.
   *
   * Converts the input value into an ISO date, forcing a full ISO
   * date even if some values are missing.
   *
   * @param array $date_parts
   *   An array of date parts, like (\'year\' => 2014, \'month\' => 4).
   * @param mixed $timezone
   *   (optional) \\DateTimeZone object, time zone string or NULL. NULL uses the
   *   default system time zone. Defaults to NULL.
   * @param array $settings
   *   (optional) A keyed array for settings, suitable for passing on to
   *   __construct().
   *
   * @return static
   *   A new DateTimePlus object.
   *
   * @throws \\InvalidArgumentException
   *   If the array date values or value combination is not correct.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'createFromArray',
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
    'f7b3ee4e7572e059b07ec5d73156b027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object from timestamp input.
   *
   * The timezone of a timestamp is always UTC. The timezone for a
   * timestamp indicates the timezone used by the format() method.
   *
   * @param int $timestamp
   *   A UNIX timestamp.
   * @param mixed $timezone
   *   (optional) \\DateTimeZone object, time zone string or NULL. See
   *   __construct() for more details.
   * @param array $settings
   *   (optional) A keyed array for settings, suitable for passing on to
   *   __construct().
   *
   * @return static
   *   A new DateTimePlus object.
   *
   * @throws \\InvalidArgumentException
   *   If the timestamp is not numeric.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'createFromTimestamp',
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
    '294817600ce1f4ed4a07f2375fae0eb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a date object from an input format.
   *
   * @param string $format
   *   PHP date() type format for parsing the input. This is recommended
   *   to use things like negative years, which php\'s parser fails on, or
   *   any other specialized input with a known format. If provided the
   *   date will be created using the createFromFormat() method.
   *   @see http://php.net/manual/datetime.createfromformat.php
   * @param string $time
   *   String representing the time.
   * @param mixed $timezone
   *   (optional) \\DateTimeZone object, time zone string or NULL. See
   *   __construct() for more details.
   * @param array $settings
   *   (optional) A keyed array for settings, suitable for passing on to
   *   __construct(). Supports an additional key:
   *   - validate_format: (optional) Boolean choice to validate the
   *     created date using the input format. The format used in
   *     createFromFormat() allows slightly different values than format().
   *     Using an input format that works in both functions makes it
   *     possible to a validation step to confirm that the date created
   *     from a format string exactly matches the input. This option
   *     indicates the format can be used for validation. Defaults to TRUE.
   *
   * @return static
   *   A new DateTimePlus object.
   *
   * @throws \\InvalidArgumentException
   *   If the a date cannot be created from the given format.
   * @throws \\UnexpectedValueException
   *   If the created date does not match the input value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'createFromFormat',
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
    'b9e97d0ca32a3394b9360a3ee839cf2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a date object set to a requested date and timezone.
   *
   * @param string $time
   *   (optional) A date/time string. Defaults to \'now\'.
   * @param mixed $timezone
   *   (optional) \\DateTimeZone object, time zone string or NULL. NULL uses the
   *   default system time zone. Defaults to NULL. Note that the $timezone
   *   parameter and the current timezone are ignored when the $time parameter
   *   either is a UNIX timestamp (e.g. @946684800) or specifies a timezone
   *   (e.g. 2010-01-28T15:00:00+02:00).
   *   @see http://php.net/manual/datetime.construct.php
   * @param array $settings
   *   (optional) Keyed array of settings. Defaults to empty array.
   *   - langcode: (optional) String two letter language code used to control
   *     the result of the format(). Defaults to NULL.
   *   - debug: (optional) Boolean choice to leave debug values in the
   *     date object for debugging purposes. Defaults to FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '__construct',
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
    'ba244fdbd03a67650fa9a85f9a1ca4b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the timezone name.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
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
    'e9bcdfd50c42efff5d5e60004a3dec9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __call method.
   *
   * Passes through all unknown calls onto the DateTime object.
   *
   * @param string $method
   *   The method to call on the decorated object.
   * @param array $args
   *   Call arguments.
   *
   * @return mixed
   *   The return value from the method on the decorated object. If the proxied
   *   method call returns a DateTime object, then return the original
   *   DateTimePlus object, which allows function chaining to work properly.
   *   Otherwise, the value from the proxied method call is returned.
   *
   * @throws \\Exception
   *   Thrown when the DateTime object is not set.
   * @throws \\BadMethodCallException
   *   Thrown when there is no corresponding method on the DateTime object to
   *   call.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '__call',
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
    'a06f558eef18d6fd4f122e063ab3613f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the difference between two DateTimePlus objects.
   *
   * @param \\Drupal\\Component\\Datetime\\DateTimePlus|\\DateTime $datetime2
   *   The date to compare to.
   * @param bool $absolute
   *   Should the interval be forced to be positive?
   *
   * @return \\DateInterval
   *   A DateInterval object representing the difference between the two dates.
   *
   * @throws \\BadMethodCallException
   *    If the input isn\'t a DateTime or DateTimePlus object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'diff',
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
    '1b09e02788126390f61e2bad89f4173e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __callStatic method.
   *
   * Passes through all unknown static calls onto the DateTime object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '__callStatic',
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
    '025964a3b8d3cde8e6fbbce2418c36e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __clone method.
   *
   * Deep-clones the DateTime object we\'re wrapping.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => '__clone',
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
    '1cda6a9755bfa193c3092351ddca6fce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the input time value.
   *
   * Changes the input value before trying to use it, if necessary.
   * Can be overridden to handle special cases.
   *
   * @param mixed $time
   *   An input value, which could be a timestamp, a string,
   *   or an array of date parts.
   *
   * @return mixed
   *   The massaged time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'prepareTime',
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
    '89037105b874ec1d815aa6a06ef5394f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the input timezone value.
   *
   * Changes the timezone before trying to use it, if necessary.
   * Most importantly, makes sure there is a valid timezone
   * object before moving further.
   *
   * @param mixed $timezone
   *   Either a timezone name or a timezone object or NULL.
   *
   * @return \\DateTimeZone
   *   The massaged time zone.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'prepareTimezone',
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
    '901569e9ff5a0463ed84295166458727' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the input format value.
   *
   * Changes the input format before trying to use it, if necessary.
   * Can be overridden to handle special cases.
   *
   * @param string $format
   *   A PHP format string.
   *
   * @return string
   *   The massaged PHP format string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'prepareFormat',
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
    '9e074676267570fc9eac80aaa148f906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Examines getLastErrors() to see what errors to report.
   *
   * Two kinds of errors are important: anything that DateTime
   * considers an error, and also a warning that the date was invalid.
   * PHP creates a valid date from invalid data with only a warning,
   * 2011-02-30 becomes 2011-03-03, for instance, but we don\'t want that.
   *
   * @see http://php.net/manual/time.getlasterrors.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'checkErrors',
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
    'f8d522c13dea118689e63d200e09b64c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Detects if there were errors in the processing of this date.
   *
   * @return bool
   *   TRUE if there were errors in the processing of this date, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'hasErrors',
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
    'adc7b47330ccd77a8d51180f0369ee4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets error messages.
   *
   * Public function to return the error messages.
   *
   * @return array
   *   An array of errors encountered when creating this date.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'getErrors',
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
    'e13e8f611d61cbfd427a702489e5a2f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an ISO date from an array of values.
   *
   * @param array $array
   *   An array of date values keyed by date part.
   * @param bool $force_valid_date
   *   (optional) Whether to force a full date by filling in missing
   *   values. Defaults to FALSE.
   *
   * @return string
   *   The date as an ISO string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'arrayToISO',
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
    'bc9bcaae7b52fdec15c0e7f6890a7950' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a complete array from a possibly incomplete array of date parts.
   *
   * @param array $array
   *   An array of date values keyed by date part.
   * @param bool $force_valid_date
   *   (optional) Whether to force a valid date by filling in missing
   *   values with valid values or just to use empty values instead.
   *   Defaults to FALSE.
   *
   * @return array
   *   A complete array of date parts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'prepareArray',
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
    '305b9362ec81d3d70f80bf0b282abac9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that arrays of date parts will create a valid date.
   *
   * Checks that an array of date parts has a year, month, and day,
   * and that those values create a valid date. If time is provided,
   * verifies that the time values are valid. Sort of an
   * equivalent to checkdate().
   *
   * @param array $array
   *   An array of datetime values keyed by date part.
   *
   * @return bool
   *   TRUE if the datetime parts contain valid values, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'checkArray',
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
    'b612474b92ec1aab2483167a4f62bb59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pads date parts with zeros.
   *
   * Helper function for a task that is often required when working with dates.
   *
   * @param int $value
   *   The value to pad.
   * @param int $size
   *   (optional) Size expected, usually 2 or 4. Defaults to 2.
   *
   * @return string
   *   The padded value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'datePad',
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
    'b8be15cff1cf7a9ff3412b47f7819f26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats the date for display.
   *
   * @param string $format
   *   Format accepted by date().
   * @param array $settings
   *   - timezone: (optional) String timezone name. Defaults to the timezone
   *     of the date object.
   *
   * @return string|null
   *   The formatted value of the date or NULL if there were construction
   *   errors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'format',
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
    'a67def42f82596f0e96829f31a290fce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the default time for an object built from date-only data.
   *
   * The default time for a date without time can be anything, so long as it is
   * consistently applied. If we use noon, dates in most timezones will have the
   * same value for in both the local timezone and UTC.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'setDefaultDateTime',
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
    'c815d648c9c8c1c28085db48cd8e0bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a clone of the proxied PHP \\DateTime object wrapped by this class.
   *
   * @return \\DateTime
   *   A clone of the wrapped PHP \\DateTime object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Component\\Datetime\\DateTimePlus',
         'functionName' => 'getPhpDateTime',
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