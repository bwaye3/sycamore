<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Resolver/ChainLocaleResolverInterface.php-1624732871',
   'data' => 
  array (
    'bf47c78ca85477449a85015f3d01b1a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added resolvers one by one until one of them returns the locale.
 *
 * Each resolver in the chain can be another chain, which is why this interface
 * extends the locale resolver one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainLocaleResolverInterface',
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
    'c1651c3f5f8893a53ea951aef3ce0ba8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a resolver.
   *
   * @param \\Drupal\\commerce\\Resolver\\LocaleResolverInterface $resolver
   *   The resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainLocaleResolverInterface',
         'functionName' => 'addResolver',
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
    '76b485d0ca0399360b4ac0f19b5860b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added resolvers.
   *
   * @return \\Drupal\\commerce\\Resolver\\LocaleResolverInterface[]
   *   The resolvers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Resolver',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Resolver\\ChainLocaleResolverInterface',
         'functionName' => 'getResolvers',
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