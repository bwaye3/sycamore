<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:6:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:90:"Searches the array for a given value and returns the first corresponding key if successful";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:51:"https://php.net/manual/en/function.array-search.php";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"mixed";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:7:"$needle";s:11:"description";s:111:"<p>
The searched value.
</p>
<p>
If needle is a string, the comparison is done
in a case-sensitive manner.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:9:"$haystack";s:11:"description";s:19:"<p>
The array.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"bool";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:7:"$strict";s:11:"description";s:152:"[optional] <p>
If the third parameter strict is set to true
then the array_search function will also check the
types of the
needle in the haystack.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:5;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":3:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:3:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:3:"int";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:2;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"false";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:11:"description";s:265:"the key for needle if it is found in the
array, false otherwise.
</p>
<p>
If needle is found in haystack
more than once, the first matching key is returned. To return the keys for
all matching values, use array_keys with the optional
search_value parameter instead.";s:62:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));