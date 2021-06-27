<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/filter/ManyToOne.php-1624732869',
   'data' => 
  array (
    '51fdf29500d502cd6b7dfc9be9cfaaf3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Complex filter to handle filtering for many to one relationships,
 * such as terms (many terms per node) or roles (many roles per user).
 *
 * The construct method needs to be overridden to provide a list of options;
 * alternately, the valueForm and adminSummary methods need to be overridden
 * to provide something that isn\'t just a select list.
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("many_to_one")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'manytoonehelper' => 'Drupal\\views\\ManyToOneHelper',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\ManyToOne',
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
    '86cf3d6199d5acc18baf3f3ea83ccfd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\views\\ManyToOneHelper
   *
   * Stores the Helper object which handles the many_to_one complexity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'manytoonehelper' => 'Drupal\\views\\ManyToOneHelper',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\ManyToOne',
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
    '5eb70a2f7d90747f0b366fd136d062ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'manytoonehelper' => 'Drupal\\views\\ManyToOneHelper',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\ManyToOne',
         'functionName' => 'init',
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
    '1980941f30a14893454362eb83550ce6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Override ensureMyTable so we can control how this joins in.
   * The operator actually has influence over joining.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\filter',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'manytoonehelper' => 'Drupal\\views\\ManyToOneHelper',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\filter\\ManyToOne',
         'functionName' => 'ensureMyTable',
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