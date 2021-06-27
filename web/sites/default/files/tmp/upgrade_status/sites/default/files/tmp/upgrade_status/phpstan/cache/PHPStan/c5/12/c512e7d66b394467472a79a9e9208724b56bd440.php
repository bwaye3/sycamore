<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Plugin/migrate/cckfield/AddressField.php-1624732871',
   'data' => 
  array (
    'b037ab4d98e4afcad2ef9be046d445db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Cck migration field.
 *
 * @MigrateCckField(
 *   id = "addressfield",
 *   core = {7},
 *   type_map = {
 *    "addressfield" = "address"
 *   },
 *   source_module = "addressfield",
 *   destination_module = "address"
 * )
 *
 * @deprecated in address:8.x-1.3 and is removed from address:8.x-2.0. Use
 *   \\Drupal\\address\\Plugin\\migrate\\field\\AddressField instead.
 *
 * @see https://www.drupal.org/project/address/issues/2912087
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\migrate\\cckfield',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'baseaddressfield' => 'Drupal\\address\\Plugin\\migrate\\field\\AddressField',
          'migratecckfieldinterface' => 'Drupal\\migrate_drupal\\Plugin\\MigrateCckFieldInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\migrate\\cckfield\\AddressField',
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
    'df8c3e20b12343a692b57f350377574b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Plugin\\migrate\\cckfield',
         'uses' => 
        array (
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'baseaddressfield' => 'Drupal\\address\\Plugin\\migrate\\field\\AddressField',
          'migratecckfieldinterface' => 'Drupal\\migrate_drupal\\Plugin\\MigrateCckFieldInterface',
        ),
         'className' => 'Drupal\\address\\Plugin\\migrate\\cckfield\\AddressField',
         'functionName' => 'processCckFieldValues',
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