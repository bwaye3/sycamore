<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/src/Plugin/migrate/process/CaptchaTypeFormatter.php-1624732871',
   'data' => 
  array (
    'e74ab8f090322c08d1cdd348788af183' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Perform captcha type transformation.
 *
 * @MigrateProcessPlugin(
 *   id = "captcha_type_formatter"
 * )
 *
 * To do custom value transformations use the following:
 *
 * @code
 * field_text:
 *   plugin: captcha_type_formatter
 *   source: text
 * @endcode
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\captcha\\Plugin\\migrate\\process\\CaptchaTypeFormatter',
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
    '87f5b1d5cf0dbd683671f9e2cdcaa3da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transforms the d7 separate captcha type and module into one row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Plugin\\migrate\\process',
         'uses' => 
        array (
          'migrateexecutableinterface' => 'Drupal\\migrate\\MigrateExecutableInterface',
          'processpluginbase' => 'Drupal\\migrate\\ProcessPluginBase',
          'row' => 'Drupal\\migrate\\Row',
        ),
         'className' => 'Drupal\\captcha\\Plugin\\migrate\\process\\CaptchaTypeFormatter',
         'functionName' => 'transform',
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