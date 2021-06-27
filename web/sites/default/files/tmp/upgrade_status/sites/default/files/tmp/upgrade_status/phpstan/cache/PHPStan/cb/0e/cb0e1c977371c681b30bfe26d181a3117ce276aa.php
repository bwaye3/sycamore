<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:3:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:77:"Defines an interface for loading, transforming and rendering menu link trees.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:1114:"The main purposes of this interface are:
- Load a list of menu links, given a menu name, using
  MenuLinkTreeInterface::load(). Loaded menu links are returned as a
  tree by looking at the links\' tree meta-data.
- Which links are loaded can be specified in the menu link tree parameters
  that are passed to the load() method. You can build your own set of
  parameters, or you can start from typical defaults by calling the
  MenuLinkTreeInterface::getCurrentRouteMenuTreeParameters() method. See
  \\Drupal\\Core\\Menu\\MenuTreeParameters for more on menu tree parameters.
- Transform a menu link tree, by calling MenuLinkTreeInterface::transform().
  Examples include access checking, adding custom classes, extracting a
  subtree depending on the active trail, etc. Note that translation is not
  a tree transformation, because menu links themselves are responsible
  for translation. Transformations are performed by "menu link tree
  manipulators", which are functions or methods; see
  \\Drupal\\Core\\Menu\\DefaultMenuLinkTreeManipulators for examples.
- Create a render array using MenuLinkTreeInterface::build().";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));