<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/profile/src/ProfileStorageInterface.php-1624732872',
   'data' => 
  array (
    'a727af848d5f7a4f7d1f4c10f6e58ec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for profile entity storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\profile\\ProfileStorageInterface',
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
    '00c86c94daec8e3d1c3196e8a45061f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the given user\'s profiles.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user.
   * @param string $profile_type_id
   *   The profile type ID.
   * @param bool $published
   *   Whether to load published or unpublished profiles. Defaults to published.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface[]
   *   The profiles, ordered by publishing status and ID, descending.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\profile\\ProfileStorageInterface',
         'functionName' => 'loadMultipleByUser',
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
    '3f65141de9388903ca4f3ad42d689ac4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the given user\'s profile.
   *
   * Takes the default profile, if found.
   * Otherwise falls back to the newest published profile.
   *
   * Primarily used for profile types which only allow a
   * single profile per user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user.
   * @param string $profile_type_id
   *   The profile type ID.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface
   *   The profile. NULL if no matching entity was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\profile\\ProfileStorageInterface',
         'functionName' => 'loadByUser',
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
    'cb1759336f36e393d751b562ad2b11f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the given user\'s default profile.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user.
   * @param string $profile_type_id
   *   The profile type ID.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface
   *   The profile. NULL if no matching entity was found.
   *
   * @deprecated in Profile 1.0. Use loadByUser() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\profile\\ProfileStorageInterface',
         'functionName' => 'loadDefaultByUser',
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