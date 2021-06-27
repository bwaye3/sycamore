<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Resolver/TaxTypeAwareInterface.php-1624732871',
   'data' => 
  array (
    '35ef96fe9654610f25321cd457caf96d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for resolvers that depend on the tax type.
 *
 * The tax type is not passed to the resolver\'s resolve() method
 * because the method\'s signature couldn\'t be modified in 2.x
 * for backwards compatibility reasons.
 *
 * @see \\Drupal\\commerce_tax\\Resolver\\TaxTypeAwareTrait
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Resolver',
         'uses' => 
        array (
          'taxtypeinterface' => 'Drupal\\commerce_tax\\Entity\\TaxTypeInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Resolver\\TaxTypeAwareInterface',
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
    '8077d9c4b5e381e70ee71f558950948f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the tax type.
   *
   * @param \\Drupal\\commerce_tax\\Entity\\TaxTypeInterface $tax_type
   *   The tax type.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Resolver',
         'uses' => 
        array (
          'taxtypeinterface' => 'Drupal\\commerce_tax\\Entity\\TaxTypeInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Resolver\\TaxTypeAwareInterface',
         'functionName' => 'setTaxType',
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