<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:17:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:71:"Builds a renderable array for the value of a single field in an entity.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:2;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:76:"The resulting output is a fully themed field with label and multiple
values.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:3;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:4;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:325:"This function can be used by third-party modules that need to output an
isolated field.
- Do not use inside node (or any other entity) templates; use
  render($content[FIELD_NAME]) instead.
- The FieldItemInterface::view() method can be used to output a single
  formatted field value, without label or wrapping field markup.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:6;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:102:"The function takes care of invoking the prepare_view steps. It also
respects field access permissions.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:7;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:8;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:41:"\\Drupal\\Core\\Field\\FieldItemListInterface";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:6:"$items";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:9;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:52:"FieldItemList containing the values to be displayed.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:10;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:16:"$display_options";s:11:"description";s:0:"";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:11;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:966:"Can be either:
  - The name of a view mode. The field will be displayed according to the
    display settings specified for this view mode in the $field
    definition for the field in the entity\'s bundle. If no display settings
    are found for the view mode, the settings for the \'default\' view mode
    will be used.
  - An array of display options. The following key/value pairs are allowed:
    - label: (string) Position of the label. The default \'field\' theme
      implementation supports the values \'inline\', \'above\' and \'hidden\'.
      Defaults to \'above\'.
    - type: (string) The formatter to use. Defaults to the
      \'default_formatter\' for the field type. The default formatter will
      also be used if the requested formatter is not available.
    - settings: (array) Settings specific to the formatter. Defaults to the
      formatter\'s default settings.
    - weight: (float) The weight to assign to the renderable element.
      Defaults to 0.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:12;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:13;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:7:"@return";s:5:"value";O:50:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode":3:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:11:"description";s:0:"";s:62:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ReturnTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:14;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:40:"A renderable array for the field values.";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:15;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:16;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:4:"@see";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:63:"\\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewFieldItem()";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));