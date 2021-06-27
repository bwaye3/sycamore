<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Commerce/TaxNumberType/Other.php-1624732871',
   'data' => 
  array (
    'e20b4c9d14f73a96923e38e4a01c4019' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Other tax number type.
 *
 * Not restricted by country, provides no validation or verification.
 *
 * Used as a fallback when a country-specific plugin doesn\'t exist yet
 * or has disappeared from the system, allowing previously-entered values
 * to be viewed, and new values to be entered.
 *
 * @CommerceTaxNumberType(
 *   id = "other",
 *   label = "Other",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\Other',
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
    '32563df84ba0e27404bd243cf8f6b344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxNumberType\\Other',
         'functionName' => 'validate',
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