<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:12:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:39:"Prepares variables for links templates.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:34:"Default template: links.html.twig.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:562:"Unfortunately links templates duplicate the "active" class handling of l()
and LinkGenerator::generate() because it needs to be able to set the "active"
class not on the links themselves (<a> tags), but on the list items (<li>
tags) that contain the links. This is necessary for CSS to be able to style
list items differently when the link is active, since CSS does not yet allow
one to style list items only if it contains a certain element with a certain
class. I.e. we cannot yet convert this jQuery selector to a CSS selector:
jQuery(\'li:has("a.is-active")\')";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:10:"$variables";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:2448:"An associative array containing:
  - links: An array of links to be themed. Each link itself is an array, with
    the following elements:
    - title: The link text.
    - url: (optional) The \\Drupal\\Core\\Url object to link to. If the \'url\'
      element is supplied, the \'title\' and \'url\' are used to generate a link
      through \\Drupal::linkGenerator()->generate(). All data from the link
      array other than \'title\' and \'url\' are added as #options on
      the URL object. See \\Drupal\\Core\\Url::fromUri() for details on the
      options. If no \'url\' is supplied, the \'title\' is printed as plain text.
    - attributes: (optional) Attributes for the anchor, or for the <span>
      tag used in its place if no \'url\' is supplied. If element \'class\' is
      included, it must be an array of one or more class names.
  - attributes: A keyed array of attributes for the <ul> containing the list
    of links.
  - set_active_class: (optional) Whether each link should compare the
    route_name + route_parameters or url (path), language, and query options
    to the current URL, to determine whether the link is "active". If so,
    attributes will be added to the HTML elements for both the link and the
    list item that contains it, which will result in an "is-active" class
    being added to both. The class is added via JavaScript for authenticated
    users (in the active-link library), and via PHP for anonymous users (in
    the \\Drupal\\Core\\EventSubscriber\\ActiveLinkResponseFilter class).
  - heading: (optional) A heading to precede the links. May be an
    associative array or a string. If it\'s an array, it can have the
    following elements:
    - text: The heading text.
    - level: The heading level (e.g. \'h2\', \'h3\').
    - attributes: (optional) An array of the CSS attributes for the heading.
    When using a string it will be used as the text of the heading and the
    level will default to \'h2\'. Headings should be used on navigation menus
    and any list of links that consistently appears on multiple pages. To
    make the heading invisible use the \'visually-hidden\' CSS class. Do not
    use \'display:none\', which removes it from screen readers and assistive
    technology. Headings allow screen reader and keyboard only users to
    navigate to or skip the links. See
    http://juicystudio.com/article/screen-readers-display-none.php and
    http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:8;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:9;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:34:"\\Drupal\\Core\\Utility\\LinkGenerator";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:46:"\\Drupal\\Core\\Utility\\LinkGenerator::generate()";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:11;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:25:"system_page_attachments()";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));