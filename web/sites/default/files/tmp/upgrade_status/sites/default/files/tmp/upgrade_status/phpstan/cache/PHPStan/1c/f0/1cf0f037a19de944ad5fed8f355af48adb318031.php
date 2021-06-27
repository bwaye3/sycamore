<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/profile/src/Entity/ProfileInterface.php-1624732872',
   'data' => 
  array (
    'd2fc6f019cea7038837e2adcc58f0d47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for profiles.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
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
    '3d5c37b2efb6ea7ef693ba7b26357720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the profile is active.
   *
   * Unpublished profiles are only visible to their authors and administrators.
   *
   * @deprecated in Profile 1.0-rc4. Use ::isPublished instead.
   *
   * @return bool
   *   TRUE if the profile is active, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'isActive',
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
    '2a4a3e71076f6bea9e6c01ac1c18535e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the profile is active.
   *
   * @param bool $active
   *   Whether the profile is active.
   *
   * @deprecated in Profile 1.0-rc4. Use ::setPublished instead.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'setActive',
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
    '80f1d0d3e93c1b7effaaac86b4416261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether this is the user\'s default profile.
   *
   * A user can have a default profile of each type.
   *
   * @return bool
   *   TRUE if this is the user\'s default profile, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'isDefault',
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
    '1500eceeca6fe960bb64c689f350ba1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether this is the user\'s default profile.
   *
   * @param bool $is_default
   *   Whether this is the user\'s default profile.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'setDefault',
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
    'ec17579509b117c2c154d2d5a24d2547' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a profile data value with the given key.
   *
   * Used to store arbitrary data for the profile.
   *
   * @param string $key
   *   The key.
   * @param mixed $default
   *   The default value.
   *
   * @return mixed
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'getData',
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
    'f28c944b629a1d029101c993ae29a6e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a profile data value with the given key.
   *
   * @param string $key
   *   The key.
   * @param mixed $value
   *   The value.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'setData',
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
    '5c1b249991d04d820ddb5e8a07b6438c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets a profile data value with the given key.
   *
   * @param string $key
   *   The key.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'unsetData',
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
    'df1d1ebe8e44075a33c6c445fd6518b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the profile creation timestamp.
   *
   * @return int
   *   The profile creation timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'getCreatedTime',
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
    '6689f2a22793ecfe203480abcf4f364c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the profile creation timestamp.
   *
   * @param int $timestamp
   *   The profile creation timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'setCreatedTime',
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
    '24f698087aa8f349fc028040628fc1fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the profile revision author.
   *
   * @return \\Drupal\\user\\UserInterface
   *   The user entity for the revision author.
   *
   * @deprecated in Profile 1.0-rc5. Use
   *   \\Drupal\\Core\\Entity\\RevisionLogInterface::getRevisionUser() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'getRevisionAuthor',
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
    'b9c5d876f518a85a56d8cc2a17866f54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the profile revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return $this
   *
   * @deprecated in Profile 1.0-rc5. Use
   *   \\Drupal\\Core\\Entity\\RevisionLogInterface::setRevisionUserId() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'setRevisionAuthorId',
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
    'f09a2c62f2272403076518463534024a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the other profile is equal to the current profile.
   *
   * By default, profiles are compared using configurable fields only,
   * which means that two profiles can be considered equal even if they
   * are of different types, or belong to different users.
   * Pass "type", and/or "uid" as $field_names to avoid this behavior.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The other profile.
   * @param string[] $field_names
   *   The names of fields to compare. If empty, all configurable fields
   *   will be compared.
   *
   * @return bool
   *   TRUE if the two profiles are equal, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'equalToProfile',
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
    '67429f9b9a4c7f94cb4e223f698e07fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Populates the profile with field values from the other profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The other profile.
   * @param string[] $field_names
   *   The names of fields to transfer. If empty, all configurable fields
   *   will be transferred.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\profile\\Entity',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'revisionloginterface' => 'Drupal\\Core\\Entity\\RevisionLogInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\profile\\Entity\\ProfileInterface',
         'functionName' => 'populateFromProfile',
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