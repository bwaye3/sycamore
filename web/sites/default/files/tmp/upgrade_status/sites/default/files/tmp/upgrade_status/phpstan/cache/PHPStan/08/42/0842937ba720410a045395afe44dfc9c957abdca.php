<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:13:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:40:"Log in a user with the internal browser.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:105:"If a user is already logged in, then the current user is logged out before
logging in the specified user.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:386:"Please note that neither the current user nor the passed-in user object is
populated with data of the logged in user. If you need full access to the
user object after logging in, it must be updated manually. If you also need
access to the plain-text password of the user (set by drupalCreateUser()),
e.g. to log in the same user again, then it must be re-assigned manually.
For example:";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:5;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@code";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:0:"";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:233:"// Create a user.
  $account = $this->drupalCreateUser(array());
  $this->drupalLogin($account);
  // Load real user object.
  $pass_raw = $account->pass_raw;
  $account = User::load($account->id());
  $account->pass_raw = $pass_raw;";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:7;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:8:"@endcode";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:0:"";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:37:"\\Drupal\\Core\\Session\\AccountInterface";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:8:"$account";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:10;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:44:"User object representing the user to log in.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:12;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:18:"drupalCreateUser()";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));