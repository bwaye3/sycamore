<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/addressing/src/UpdateHelper.php-1621238721',
   'data' => 
  array (
    '8a5de2b7aa05f4eb1d6448d04ed28939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The 1.0 branch of Addressing introduced two big changes:
 * - The recipient was split into given_name, additional_name, family_name.
 * - Subdivision IDs were removed, the subdivision code is now stored directly.
 * These two changes require updating every stored address.
 * This class provides helpers for performing that update.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\UpdateHelper',
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
    '21d66c0603c0b9bf79f6a25331c9ad29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * A static cache of the subdivision $oldId => $newId map.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\UpdateHelper',
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
    '4cee92cdb7b04cb88c177e1e93f3cfa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Splits the recipient into givenName and familyName fields.
     *
     * @param string $recipient   The recipient.
     * @param string $countryCode The country code.
     *
     * @return array The result, with givenName and familyName keys.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\UpdateHelper',
         'functionName' => 'splitRecipient',
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
    '19a89b9d96cf9ae303c0953dcdbfd93e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Updates the subdivision.
     *
     * Used for updating the administrative area, locality, dependent locality
     * address properties.
     *
     * @param string $oldValue The old value.
     *
     * @return string The new value.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\UpdateHelper',
         'functionName' => 'updateSubdivision',
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
    'd72748bb00564e52f3d830ef0f2e7e44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads the subdivision update map.
     *
     * @return array The update map.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\UpdateHelper',
         'functionName' => 'loadSubdivisionUpdateMap',
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