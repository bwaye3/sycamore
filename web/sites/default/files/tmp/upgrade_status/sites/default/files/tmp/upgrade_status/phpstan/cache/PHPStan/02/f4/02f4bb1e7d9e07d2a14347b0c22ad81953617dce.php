<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/Element/RenderCallbackInterface.php-1624732867',
   'data' => 
  array (
    '341c1ae637ef6683a660be4c3b3c604e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Indicates all public methods are safe to use in render callbacks.
 *
 * This should only be used when all public methods on the class are supposed to
 * used as render callbacks or the class implements ElementInterface. If this is
 * not the case then use TrustedCallbackInterface instead.
 *
 * @see \\Drupal\\Core\\Render\\Element\\ElementInterface
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 * @see \\Drupal\\Core\\Render\\Renderer::doCallback()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render\\Element',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
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
  ),
));