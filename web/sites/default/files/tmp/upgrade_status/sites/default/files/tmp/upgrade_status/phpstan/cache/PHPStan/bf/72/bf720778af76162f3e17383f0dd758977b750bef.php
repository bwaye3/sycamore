<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Render/MarkupInterface.php-1624732867',
   'data' => 
  array (
    'a00d2c279044fca3d52a96293af2806c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Marks an object\'s __toString() method as returning markup.
 *
 * Objects that implement this interface will not be automatically XSS filtered
 * by the render system or automatically escaped by the theme engine.
 *
 * If there is any risk of the object\'s __toString() method returning
 * user-entered data that has not been filtered first, it must not be used. If
 * the object that implements this does not perform automatic escaping or
 * filtering itself, then it must be marked as "@internal". For example, Views
 * has the internal ViewsRenderPipelineMarkup object to provide a custom render
 * pipeline in order to render JSON and to fast render fields. By contrast,
 * FormattableMarkup and TranslatableMarkup always sanitize their output when
 * used correctly.
 *
 * If the object is going to be used directly in Twig templates it should
 * implement \\Countable so it can be used in if statements.
 *
 * @see \\Drupal\\Component\\Render\\MarkupTrait
 * @see \\Drupal\\Core\\Template\\TwigExtension::escapeFilter()
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * @see \\Drupal\\views\\Render\\ViewsRenderPipelineMarkup
 * @see twig_render_template()
 * @see sanitization
 * @see theme_render
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Render\\MarkupInterface',
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
    'e70cbe5e6315b98430bb8144c6fecb81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns markup.
   *
   * @return string
   *   The markup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Render\\MarkupInterface',
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
  ),
));