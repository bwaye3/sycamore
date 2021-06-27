<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/AddressBookInterface.php-1624732871',
   'data' => 
  array (
    'be5428864d25711e88ac67301f53d310' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a customer\'s address book.
 *
 * An address book is a collection of profile entities belonging to a
 * customer. Profiles can be of different types, and customers have a
 * default profile for each type.
 *
 * Anonymous profiles (uid: 0) belong to a parent entity (e.g. an order or
 * payment method) and maintain a record of customer information for
 * use in that entity\'s context. They are not part of an address book but
 * can be copied to be saved to a customer\'s address book.
 *
 * We separate profiles in this manner to ensure data integrity for the
 * orders, payment methods, etc., preventing the customer information
 * saved to them from being edited or deleted in other contexts.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
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
    'ee568183cf807ed0262660eaf67a8911' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether a customer can have multiple profiles of this type.
   *
   * @param string $profile_type_id
   *   The profile type ID.
   *
   * @return bool
   *   TRUE if a customer can have multiple profiles of this type, FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'allowsMultiple',
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
    '9f6b36359950c47ba898d70f4320543c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the address book has a UI exposed.
   *
   * Usually presented as an "Address book" tab on user pages, replacing
   * profile module\'s per-profile-type tabs.
   *
   * @return bool
   *   TRUE if the address book has a UI exposed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'hasUi',
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
    '6f5d2fad4ceaa97879b0a994222ebc1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the profile types used by the address book.
   *
   * Only customer profile types are included.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileTypeInterface[]
   *   The profile types, keyed by profile type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'loadTypes',
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
    '6bd8ec2a7d51ecb88e3df5eec02bf167' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all profiles for the given customer.
   *
   * Ensures that the loaded profiles are available, by filtering
   * them against $available_countries.
   *
   * @param \\Drupal\\user\\UserInterface $customer
   *   The customer.
   * @param string $profile_type_id
   *   The profile type ID.
   * @param array $available_countries
   *   List of country codes. If empty, all countries will be available.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface[]
   *   The available profiles, keyed by profile ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'loadAll',
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
    'b492e4b151dc6a788e44e215b3f39e93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the customer\'s profile.
   *
   * Takes the default profile, if found.
   * Otherwise falls back to the newest published profile.
   *
   * Primarily used for profile types which only allow a
   * single profile per user.
   *
   * Ensures that the loaded profile is available, by filtering it
   * against $available_countries. If the loaded profile is not
   * available, NULL will be returned instead.
   *
   * @param \\Drupal\\user\\UserInterface $customer
   *   The customer.
   * @param string $profile_type_id
   *   The profile type ID.
   * @param array $available_countries
   *   List of country codes. If empty, all countries will be available.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface|null
   *   The profile, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'load',
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
    'e740454b4219a6ce34cce2b959a06ec3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the profile needs to be copied to the customer\'s address book.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   *
   * @return bool
   *   TRUE if the profile needs to be copied to the customer\'s address book,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'needsCopy',
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
    'f725a9d62fc12825c2a97cd78c762f32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies the profile to the customer\'s address book.
   *
   * If the customer is allowed to have multiple profiles of this type,
   * the given profile will be duplicated and assigned to them.
   * If the given profile was already copied to the customer\'s address book
   * once, the matching address book profile will be updated instead.
   *
   * If the customer is only allowed to have a single profile of this type,
   * the default profile will be loaded (created if missing) and updated.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The profile.
   * @param \\Drupal\\user\\UserInterface $customer
   *   The customer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AddressBookInterface',
         'functionName' => 'copy',
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