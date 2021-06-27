<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/AvailabilityManagerInterface.php-1624732871',
   'data' => 
  array (
    '1753d967790b5c17c68f111b645459a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added checkers to determine the availability of a purchasable entity.
 *
 * If any checker returns FALSE, the entity is considered to be unavailable.
 * Example checks:
 * - Whether the entity is in stock.
 * - Whether the entity\'s "available on" date is before the current date.
 *
 * @see \\Drupal\\commerce\\AvailabilityCheckerInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\AvailabilityManagerInterface',
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
    '59f6499fa848940f7cf38167b2e630da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a checker.
   *
   * @param \\Drupal\\commerce\\AvailabilityCheckerInterface $checker
   *   The checker.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\AvailabilityManagerInterface',
         'functionName' => 'addChecker',
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
    '66ed7a6af82851d64026aed2d6fe35f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all added checkers.
   *
   * @return \\Drupal\\commerce\\AvailabilityCheckerInterface[]
   *   The checkers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\AvailabilityManagerInterface',
         'functionName' => 'getCheckers',
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
    '255a53152f8f75dea9e5f2b8cc1d633c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the availability of the given purchasable entity.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The purchasable entity.
   * @param string $quantity
   *   The quantity.
   * @param \\Drupal\\commerce\\Context $context
   *   The context.
   *
   * @return bool
   *   TRUE if the purchasable entity is available, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\AvailabilityManagerInterface',
         'functionName' => 'check',
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