<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Access/AccessResultReasonInterface.php-1624732867',
   'data' => 
  array (
    'c20cd5f27bf16b5f3723dee83a153d95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for access result value objects with stored reason for developers.
 *
 * For example, a developer can specify the reason for forbidden access:
 * @code
 * new AccessResultForbidden(\'You are not authorized to hack core\');
 * @endcode
 *
 * @see \\Drupal\\Core\\Access\\AccessResultInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
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
    'f17a92462a4d31aec37b3b160633fc85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the reason for this access result.
   *
   * @return string|null
   *   The reason of this access result or NULL if no reason is provided.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
         'functionName' => 'getReason',
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
    '324d6e7c25b174b10fe7d1607308b2d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the reason for this access result.
   *
   * @param $reason string|null
   *   The reason of this access result or NULL if no reason is provided.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
         'functionName' => 'setReason',
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