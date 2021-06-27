<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Access/AccessResultInterface.php-1624732867',
   'data' => 
  array (
    '923b398ea1d0c081c33564df7c97e4df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for access result value objects.
 *
 * IMPORTANT NOTE: You have to call isAllowed() when you want to know whether
 * someone has access. Just using
 * @code
 * if ($access_result) {
 *   // The user has access!
 * }
 * else {
 *   // The user doesn\'t have access!
 * }
 * @endcode
 * would never enter the else-statement and hence introduce a critical security
 * issue.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
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
    'c19a2d6420e8ff8d8d99b0e49de410eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether this access result indicates access is explicitly allowed.
   *
   * @return bool
   *   When TRUE then isForbidden() and isNeutral() are FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
         'functionName' => 'isAllowed',
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
    'd78b0e1018d1d62786ccb391039371de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether this access result indicates access is explicitly forbidden.
   *
   * This is a kill switch — both orIf() and andIf() will result in
   * isForbidden() if either results are isForbidden().
   *
   * @return bool
   *   When TRUE then isAllowed() and isNeutral() are FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
         'functionName' => 'isForbidden',
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
    '7655d19892ff23c7a8fd4fb7788fec94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether this access result indicates access is not yet determined.
   *
   * @return bool
   *   When TRUE then isAllowed() and isForbidden() are FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
         'functionName' => 'isNeutral',
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
    '9f35cb6e6fb2fd04678b4f4bef8cb731' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Combine this access result with another using OR.
   *
   * When OR-ing two access results, the result is:
   * - isForbidden() in either ⇒ isForbidden()
   * - otherwise if isAllowed() in either ⇒ isAllowed()
   * - otherwise both must be isNeutral() ⇒ isNeutral()
   *
   * Truth table:
   * @code
   *   |A N F
   * --+-----
   * A |A A F
   * N |A N F
   * F |F F F
   * @endcode
   *
   * @param \\Drupal\\Core\\Access\\AccessResultInterface $other
   *   The other access result to OR this one with.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
         'functionName' => 'orIf',
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
    '6a9cb871004ecdb814239a79e72cf134' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Combine this access result with another using AND.
   *
   * When AND-ing two access results, the result is:
   * - isForbidden() in either ⇒ isForbidden()
   * - otherwise, if isAllowed() in both ⇒ isAllowed()
   * - otherwise, one of them is isNeutral()  ⇒ isNeutral()
   *
   * Truth table:
   * @code
   *   |A N F
   * --+-----
   * A |A N F
   * N |N N F
   * F |F F F
   * @endcode
   *
   * @param \\Drupal\\Core\\Access\\AccessResultInterface $other
   *   The other access result to AND this one with.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Access',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Access\\AccessResultInterface',
         'functionName' => 'andIf',
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