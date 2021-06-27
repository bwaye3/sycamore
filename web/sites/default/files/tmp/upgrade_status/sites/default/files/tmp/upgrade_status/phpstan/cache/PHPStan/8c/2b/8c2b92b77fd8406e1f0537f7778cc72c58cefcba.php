<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/LinkGeneratorTrait.php-1624732867',
   'data' => 
  array (
    '66407333383d21886cabaa91f8ee19b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Link Generator.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Link instead.
 *
 * @see https://www.drupal.org/node/2614344
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
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
    '2f447ec80a8168270ed4f066e9d9b383' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The link generator.
   *
   * @var \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
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
    '639bbe7f127df0c6abea0cf3f46b77ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a link to a route given a route name and its parameters.
   *
   * For details on the arguments, usage, and possible exceptions see
   * \\Drupal\\Core\\Utility\\LinkGeneratorInterface::generate().
   *
   * @return \\Drupal\\Core\\GeneratedLink
   *   A GeneratedLink object containing a link to the given route and
   *   parameters and bubbleable metadata.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Link::fromTextAndUrl() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Utility\\LinkGeneratorInterface::generate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
         'functionName' => 'l',
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
    'b506728de4061b2e70d157aca9db2d6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the link generator.
   *
   * @return \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   *   The link generator
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Inject the
   *   \'link_generator\' service or use \\Drupal\\Core\\Link instead
   *
   * @see https://www.drupal.org/node/2614344
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
         'functionName' => 'getLinkGenerator',
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
    'b2f34c158e856c713e95c7472e981a1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the link generator service.
   *
   * @param \\Drupal\\Core\\Utility\\LinkGeneratorInterface $generator
   *   The link generator service.
   *
   * @return $this
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Inject the
   *   \'link_generator\' service or use \\Drupal\\Core\\Link instead
   *
   * @see https://www.drupal.org/node/2614344
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
         'functionName' => 'setLinkGenerator',
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