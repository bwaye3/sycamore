<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate/src/Event/RollbackAwareInterface.php-1624732868',
   'data' => 
  array (
    'bd8f0bcd8bc2d04f17628b48efcd29c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for plugins that react to pre- or post-rollback events.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
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
    '10f502acd4e8e35104d5541851689e4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs pre-rollback tasks.
   *
   * @param \\Drupal\\migrate\\Event\\MigrateRollbackEvent $event
   *   The pre-rollback event object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
         'functionName' => 'preRollback',
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
    '2ddb5eb1605c4f5b69ffee619613cdae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs post-rollback tasks.
   *
   * @param \\Drupal\\migrate\\Event\\MigrateRollbackEvent $event
   *   The post-rollback event object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate\\Event\\RollbackAwareInterface',
         'functionName' => 'postRollback',
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