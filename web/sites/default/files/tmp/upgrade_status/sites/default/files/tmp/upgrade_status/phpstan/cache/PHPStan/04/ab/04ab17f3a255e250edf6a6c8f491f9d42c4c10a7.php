<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:17:"Opens file or URL";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:44:"https://php.net/manual/en/function.fopen.php";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:9:"$filename";s:11:"description";s:1412:"<p>
If filename is of the form "scheme://...", it
is assumed to be a URL and PHP will search for a protocol handler
(also known as a wrapper) for that scheme. If no wrappers for that
protocol are registered, PHP will emit a notice to help you track
potential problems in your script and then continue as though
filename specifies a regular file.
</p>
<p>
If PHP has decided that filename specifies
a local file, then it will try to open a stream on that file.
The file must be accessible to PHP, so you need to ensure that
the file access permissions allow this access.
If you have enabled "safemode",
or open_basedir further
restrictions may apply.
</p>
<p>
If PHP has decided that filename specifies
a registered protocol, and that protocol is registered as a
network URL, PHP will check to make sure that
allow_url_fopen is
enabled. If it is switched off, PHP will emit a warning and
the fopen call will fail.
</p>
<p>
The list of supported protocols can be found in . Some protocols (also referred to as
wrappers) support context
and/or "php.ini" options. Refer to the specific page for the
protocol in use for a list of options which can be set. (e.g.
"php.ini" value user_agent used by the
http wrapper).
</p>
<p>
On the Windows platform, be careful to escape any backslashes
used in the path to the file, or use forward slashes.
</p>
<pre>
<?php
$handle = fopen("c:\\\\folder\\\\resource.txt", "r");
?>
</pre>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:5:"$mode";s:11:"description";s:3879:"<p>
The mode parameter specifies the type of access
you require to the stream. It may be any of the following:
<table>
A list of possible modes for fopen
using mode
<tr valign="top">
<td>mode</td>
<td>Description</td>
</tr>
<tr valign="top">
<td>\'r\'</td>
<td>
Open for reading only; place the file pointer at the
beginning of the file.
</td>
</tr>
<tr valign="top">
<td>\'r+\'</td>
<td>
Open for reading and writing; place the file pointer at
the beginning of the file.
</td>
</tr>
<tr valign="top">
<td>\'w\'</td>
<td>
Open for writing only; place the file pointer at the
beginning of the file and truncate the file to zero length.
If the file does not exist, attempt to create it.
</td>
</tr>
<tr valign="top">
<td>\'w+\'</td>
<td>
Open for reading and writing; place the file pointer at
the beginning of the file and truncate the file to zero
length. If the file does not exist, attempt to create it.
</td>
</tr>
<tr valign="top">
<td>\'a\'</td>
<td>
Open for writing only; place the file pointer at the end of
the file. If the file does not exist, attempt to create it.
</td>
</tr>
<tr valign="top">
<td>\'a+\'</td>
<td>
Open for reading and writing; place the file pointer at
the end of the file. If the file does not exist, attempt to
create it.
</td>
</tr>
<tr valign="top">
<td>\'x\'</td>
<td>
Create and open for writing only; place the file pointer at the
beginning of the file. If the file already exists, the
fopen call will fail by returning false and
generating an error of level E_WARNING. If
the file does not exist, attempt to create it. This is equivalent
to specifying O_EXCL|O_CREAT flags for the
underlying open(2) system call.
</td>
</tr>
<tr valign="top">
<td>\'x+\'</td>
<td>
Create and open for reading and writing; place the file pointer at
the beginning of the file. If the file already exists, the
fopen call will fail by returning false and
generating an error of level E_WARNING. If
the file does not exist, attempt to create it. This is equivalent
to specifying O_EXCL|O_CREAT flags for the
underlying open(2) system call.
</td>
</tr>
</table>
</p>
<p>
Different operating system families have different line-ending
conventions. When you write a text file and want to insert a line
break, you need to use the correct line-ending character(s) for your
operating system. Unix based systems use \\n as the
line ending character, Windows based systems use \\r\\n
as the line ending characters and Macintosh based systems use
\\r as the line ending character.
</p>
<p>
If you use the wrong line ending characters when writing your files, you
might find that other applications that open those files will "look
funny".
</p>
<p>
Windows offers a text-mode translation flag (\'t\')
which will transparently translate \\n to
\\r\\n when working with the file. In contrast, you
can also use \'b\' to force binary mode, which will not
translate your data. To use these flags, specify either
\'b\' or \'t\' as the last character
of the mode parameter.
</p>
<p>
The default translation mode depends on the SAPI and version of PHP that
you are using, so you are encouraged to always specify the appropriate
flag for portability reasons. You should use the \'t\'
mode if you are working with plain-text files and you use
\\n to delimit your line endings in your script, but
expect your files to be readable with applications such as notepad. You
should use the \'b\' in all other cases.
</p>
<p>
If you do not specify the \'b\' flag when working with binary files, you
may experience strange problems with your data, including broken image
files and strange problems with \\r\\n characters.
</p>
<p>
For portability, it is strongly recommended that you always
use the \'b\' flag when opening files with fopen.
</p>
<p>
Again, for portability, it is also strongly recommended that
you re-write code that uses or relies upon the \'t\'
mode so that it uses the correct line endings and
\'b\' mode instead.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"bool";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:17:"$use_include_path";s:11:"description";s:152:"[optional] <p>
The optional third use_include_path parameter
can be set to \'1\' or true if you want to search for the file in the
include_path, too.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:5;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:8:"resource";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:8:"$context";s:11:"description";s:10:"[optional]";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":3:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:8:"resource";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"false";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:11:"description";s:54:"a file pointer resource on success, or false on error.";s:62:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));