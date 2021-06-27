<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/profile/src/Entity/ProfileTypeInterface.php-1624732872',
   'data' => 
  array (
    '7c6f6bea6ca900cfc035adc0bb1072bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface defining a profile type entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
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
    '823da00d2f24fb22c6808f71b160f50c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the profile type display label.
   *
   * This is the user-facing name, unlike the regular label,
   * which is admin-facing. Used on user pages.
   *
   * @return string
   *   The display label. If empty, use the regular label instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'getDisplayLabel',
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
    '206e45c546f6d93d0d043fae2bd2aa1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the profile type display label.
   *
   * @param string $display_label
   *   The display label.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'setDisplayLabel',
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
    'f9548a912108204a256fe1e239edb78d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether a user can have multiple profiles of this type.
   *
   * @return bool
   *   TRUE if a user can have multiple profiles of this type, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
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
    '7efd57b0e4ccfb482e0306ffa232c324' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether a user can have multiple profiles of this type.
   *
   * @param bool $multiple
   *   Whether a user can have multiple profiles of this type.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'setMultiple',
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
    '087801c4dc723ca5ef14c2ce81758d6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether a profile of this type should be created during registration.
   *
   * @return bool
   *   TRUE a profile of this type should be created during registration,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'getRegistration',
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
    '076997ad62df18fa527f9fbb95e93628' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether a profile of this type should be created during registration.
   *
   * @param bool $registration
   *   Whether a profile of this type should be created during registration.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'setRegistration',
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
    '3f156536260853eef910eaacfed0ac7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the user roles allowed to have profiles of this type.
   *
   * @return string[]
   *   The role IDs. If empty, all roles are allowed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'getRoles',
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
    'd7291c4dc7dbb796dc7cae8dd74af895' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the user roles allowed to have profiles of this type.
   *
   * @param string[] $rids
   *   The role IDs.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'setRoles',
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
    'c76b930060a40146c389c7186012ef4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether this profile type allows revisions.
   *
   * @return bool
   *   Whether this profile type allows revisions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'allowsRevisions',
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
    '09cb7155b52d6cad54aab1dad9ba089c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether profiles of this type should show the revision fields.
   *
   * @return bool
   *   Whether profiles of this type should show the revision fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'revisionableentitybundleinterface' => 'Drupal\\Core\\Entity\\RevisionableEntityBundleInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileTypeInterface',
         'functionName' => 'showRevisionUi',
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