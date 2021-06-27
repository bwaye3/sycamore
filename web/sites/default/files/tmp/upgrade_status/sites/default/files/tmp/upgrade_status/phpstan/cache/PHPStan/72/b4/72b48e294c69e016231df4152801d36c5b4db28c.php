<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Event/OrderProfilesEvent.php-1624732871',
   'data' => 
  array (
    'd249c2500912d3f839178bfe1690b989' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the order profiles event.
 *
 * @see \\Drupal\\commerce_order\\Event\\OrderEvents
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
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
    'f03cc9fe081c4c2d6b9c39ff906cbf55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
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
    '10739dd03cb5383acbdaa57cddfce3ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The profiles, keyed by scope (billing, shipping, etc).
   *
   * @var \\Drupal\\profile\\Entity\\ProfileInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
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
    '565e9c9676bab70edfbbeea55906c09a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderProfilesEvent.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Drupal\\profile\\Entity\\ProfileInterface[] $profiles
   *   The profiles.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => '__construct',
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
    'f02fc11f78cd63d9a078f4f264670274' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   Gets the order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'getOrder',
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
    'a2e8a7d4b12d507d45d2c999c51370a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the profiles.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface[]
   *   The profiles.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'getProfiles',
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
    'bac0b7897449cd372fdf6da1f13305ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the profiles.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface[] $profiles
   *   The profiles.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'setProfiles',
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
    '8d3bb4730795510864e41b75549881de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a profile for the given scope.
   *
   * @param string $scope
   *   The scope (billing, shipping, etc).
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'addProfile',
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
    'a16ef7cea9b17972a238f59af5bcda0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the profile for the given scope.
   *
   * @param string $scope
   *   The scope (billing, shipping, etc).
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'removeProfile',
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
    '9609be006f308fd6137ddd2b376369de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether a profile exists for the given scope.
   *
   * @param string $scope
   *   The scope (billing, shipping, etc).
   *
   * @return bool
   *   TRUE if the profile exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
         'functionName' => 'hasProfile',
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