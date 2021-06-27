<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:5:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:24:"Format a local time/date";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:43:"https://php.net/manual/en/function.date.php";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:7:"$format";s:11:"description";s:5979:"<p>
The format of the outputted date string. See the formatting
options below. There are also several
predefined date constants
that may be used instead, so for example DATE_RSS
contains the format string \'D, d M Y H:i:s\'.
</p>
<p>
<br>
The following characters are recognized in the
format parameter string:
<br><br>
<table>
<tr valign="top" colspan="3" bgcolor="silver">
<th>format character</th>
<th>Description</th>
<th>Example returned values</th>
</tr>
<tr valign="top">
<td><b>Day</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>d</td>
<td>Day of the month, 2 digits with leading zeros</td>
<td>01 to 31</td>
</tr>
<tr valign="top">
<td>D</td>
<td>A textual representation of a day, three letters</td>
<td>Mon through Sun</td>
</tr>
<tr valign="top">
<td>j</td>
<td>Day of the month without leading zeros</td>
<td>1 to 31</td>
</tr>
<tr valign="top">
<td>l (lowercase \'L\')</td>
<td>A full textual representation of the day of the week</td>
<td>Sunday through Saturday</td>
</tr>
<tr valign="top">
<td>N</td>
<td>ISO-8601 numeric representation of the day of the week (added in
PHP 5.1.0)</td>
<td>1 (for Monday) through 7 (for Sunday)</td>
</tr>
<tr valign="top">
<td>S</td>
<td>English ordinal suffix for the day of the month, 2 characters</td>
<td>
st, nd, rd or
th. Works well with j
</td>
</tr>
<tr valign="top">
<td>w</td>
<td>Numeric representation of the day of the week</td>
<td>0 (for Sunday) through 6 (for Saturday)</td>
</tr>
<tr valign="top">
<td>z</td>
<td>The day of the year (starting from 0)</td>
<td>0 through 365</td>
</tr>
<tr valign="top">
<td><b>Week</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>W</td>
<td>ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
<td>Example: 42 (the 42nd week in the year)</td>
</tr>
<tr valign="top">
<td><b>Month</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>F</td>
<td>A full textual representation of a month, such as January or March</td>
<td>January through December</td>
</tr>
<tr valign="top">
<td>m</td>
<td>Numeric representation of a month, with leading zeros</td>
<td>01 through 12</td>
</tr>
<tr valign="top">
<td>M</td>
<td>A short textual representation of a month, three letters</td>
<td>Jan through Dec</td>
</tr>
<tr valign="top">
<td>n</td>
<td>Numeric representation of a month, without leading zeros</td>
<td>1 through 12</td>
</tr>
<tr valign="top">
<td>t</td>
<td>Number of days in the given month</td>
<td>28 through 31</td>
</tr>
<tr valign="top">
<td><b>Year</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>L</td>
<td>Whether it\'s a leap year</td>
<td>1 if it is a leap year, 0 otherwise.</td>
</tr>
<tr valign="top">
<td>o</td>
<td>ISO-8601 year number. This has the same value as
Y, except that if the ISO week number
(W) belongs to the previous or next year, that year
is used instead. (added in PHP 5.1.0)</td>
<td>Examples: 1999 or 2003</td>
</tr>
<tr valign="top">
<td>Y</td>
<td>A full numeric representation of a year, 4 digits</td>
<td>Examples: 1999 or 2003</td>
</tr>
<tr valign="top">
<td>y</td>
<td>A two digit representation of a year</td>
<td>Examples: 99 or 03</td>
</tr>
<tr valign="top">
<td><b>Time</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>a</td>
<td>Lowercase Ante meridiem and Post meridiem</td>
<td>am or pm</td>
</tr>
<tr valign="top">
<td>A</td>
<td>Uppercase Ante meridiem and Post meridiem</td>
<td>AM or PM</td>
</tr>
<tr valign="top">
<td>B</td>
<td>Swatch Internet time</td>
<td>000 through 999</td>
</tr>
<tr valign="top">
<td>g</td>
<td>12-hour format of an hour without leading zeros</td>
<td>1 through 12</td>
</tr>
<tr valign="top">
<td>G</td>
<td>24-hour format of an hour without leading zeros</td>
<td>0 through 23</td>
</tr>
<tr valign="top">
<td>h</td>
<td>12-hour format of an hour with leading zeros</td>
<td>01 through 12</td>
</tr>
<tr valign="top">
<td>H</td>
<td>24-hour format of an hour with leading zeros</td>
<td>00 through 23</td>
</tr>
<tr valign="top">
<td>i</td>
<td>Minutes with leading zeros</td>
<td>00 to 59</td>
</tr>
<tr valign="top">
<td>s</td>
<td>Seconds, with leading zeros</td>
<td>00 through 59</td>
</tr>
<tr valign="top">
<td>u</td>
<td>Microseconds (added in PHP 5.2.2)</td>
<td>Example: 654321</td>
</tr>
<tr valign="top">
<td><b>Timezone</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>e</td>
<td>Timezone identifier (added in PHP 5.1.0)</td>
<td>Examples: UTC, GMT, Atlantic/Azores</td>
</tr>
<tr valign="top">
<td>I (capital i)</td>
<td>Whether or not the date is in daylight saving time</td>
<td>1 if Daylight Saving Time, 0 otherwise.</td>
</tr>
<tr valign="top">
<td>O</td>
<td>Difference to Greenwich time (GMT) in hours</td>
<td>Example: +0200</td>
</tr>
<tr valign="top">
<td>P</td>
<td>Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
<td>Example: +02:00</td>
</tr>
<tr valign="top">
<td>T</td>
<td>Timezone abbreviation</td>
<td>Examples: EST, MDT ...</td>
</tr>
<tr valign="top">
<td>Z</td>
<td>Timezone offset in seconds. The offset for timezones west of UTC is always
negative, and for those east of UTC is always positive.</td>
<td>-43200 through 50400</td>
</tr>
<tr valign="top">
<td><b>Full Date/Time</b></td>
<td>---</td>
<td>---</td>
</tr>
<tr valign="top">
<td>c</td>
<td>ISO 8601 date (added in PHP 5)</td>
<td>2004-02-12T15:19:21+00:00</td>
</tr>
<tr valign="top">
<td>r</td>
<td>RFC 2822 formatted date</td>
<td>Example: Thu, 21 Dec 2000 16:01:07 +0200</td>
</tr>
<tr valign="top">
<td>U</td>
<td>Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
<td>See also time</td>
</tr>
</table>
</p>
<p>
Unrecognized characters in the format string will be printed
as-is. The Z format will always return
0 when using gmdate.
</p>
<p>
Since this function only accepts integer timestamps the
u format character is only useful when using the
date_format function with user based timestamps
created with date_create.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:3:"int";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"null";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:10:"$timestamp";s:11:"description";s:163:"[optional] Default value: now(). The optional timestamp parameter is an integer Unix timestamp
that defaults to the current local time if a timestamp is not given.";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":3:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"false";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:11:"description";s:129:"a formatted date string. If a non-numeric value is used for
timestamp, false is returned and an
E_WARNING level error is emitted.";s:62:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));