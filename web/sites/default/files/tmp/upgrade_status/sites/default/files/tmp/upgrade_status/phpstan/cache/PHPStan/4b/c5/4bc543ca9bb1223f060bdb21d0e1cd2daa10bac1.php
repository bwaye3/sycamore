<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:23:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:37:"Saves file uploads to a new location.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:223:"The files will be added to the {file_managed} table as temporary files.
Temporary files are periodically cleaned. Use the \'file.usage\' service to
register the usage of the file which will automatically mark it as permanent.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:199:"Note that this function does not support correct form error handling. The
file upload widgets in core do support this. It is advised to use these in
any custom form, instead of calling this function.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:16:"$form_field_name";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:90:"A string that is the associative array key of the upload form element in
  the form array.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:11:"$validators";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:514:"(optional) An associative array of callback functions used to validate the
  file. See file_validate() for a full discussion of the array format.
  If the array is empty, it will be set up to call file_validate_extensions()
  with a safe list of extensions, as follows: "jpg jpeg gif png txt doc
  xls pdf ppt pps odt ods odp". To allow all extensions, you must explicitly
  set this array to [\'file_validate_extensions\' => \'\']. (Beware: this is not
  safe and should only be allowed for trusted users, if at all.)";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"false";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:12:"$destination";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:217:"(optional) A string containing the URI that the file should be copied to.
  This must be a stream wrapper URI. If this value is omitted or set to
  FALSE, Drupal\'s temporary files scheme will be used ("temporary://").";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"null";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:3:"int";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:6:"$delta";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:13;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:79:"(optional) The delta of the file to return the file entity.
  Defaults to NULL.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:14;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:3:"int";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:8:"$replace";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:350:"(optional) The replace behavior when the destination file already exists.
  Possible values include:
  - FileSystemInterface::EXISTS_REPLACE: Replace the existing file.
  - FileSystemInterface::EXISTS_RENAME: (default) Append
    _{incrementing number} until the filename is unique.
  - FileSystemInterface::EXISTS_ERROR: Do nothing and return FALSE.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:16;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:17;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":3:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:4:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:26:"\\Drupal\\file\\FileInterface";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:2;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"null";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:3;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"false";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:11:"description";s:0:"";s:62:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:18;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:219:"An array of file entities or a single file entity if $delta != NULL. Each
  array element contains the file entity if the upload succeeded or FALSE if
  there was an error. Function returns NULL if no file was uploaded.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:19;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:20;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:29:"_file_save_upload_from_form()";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:21;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:22;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@todo";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:70:": move this logic to a service in https://www.drupal.org/node/2244513.";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));