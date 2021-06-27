<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity_print/src/Renderer/RendererInterface.php-1624732871',
   'data' => 
  array (
    '6a68c6fb28afed66bc3678f0604aff01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The renderer interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print\\Renderer',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity_print\\Renderer\\RendererInterface',
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
    '0c872ad231ebb570334ba7bce3acfcfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the renderable for this entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   The entities we\'re rendering.
   *
   * @return array
   *   The renderable array for the entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print\\Renderer',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity_print\\Renderer\\RendererInterface',
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
    '75a29e2710dc1b052b7a203d9985de9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the HTML from the renderable array of entities.
   *
   * @param array $entities
   *   An array of entities we\'re rendering.
   * @param array $render
   *   A renderable array.
   * @param bool $use_default_css
   *   TRUE if we should inject our default CSS otherwise FALSE.
   * @param bool $optimize_css
   *   TRUE if we should compress the CSS otherwise FALSE.
   *
   * @return string
   *   The generated HTML.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print\\Renderer',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity_print\\Renderer\\RendererInterface',
         'functionName' => 'generateHtml',
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
    '3d8b72748686c77d8b9687b3135f28fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the filename for the entity we\'re printing *without* the extension.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   The entities for which to generate the filename from.
   *
   * @return string
   *   The generate file name for this entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print\\Renderer',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity_print\\Renderer\\RendererInterface',
         'functionName' => 'getFilename',
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