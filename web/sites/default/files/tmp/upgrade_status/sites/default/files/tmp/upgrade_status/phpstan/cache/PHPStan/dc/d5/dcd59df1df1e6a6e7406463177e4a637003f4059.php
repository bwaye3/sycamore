<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/addressing/src/AddressFormat/AddressFormatHelper.php-1621238721',
   'data' => 
  array (
    'a53614cc0fdbbd5f7b39213193d023b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helpers for handling address formats.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\AddressFormat',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
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
    '0955a2e18edb5d4ebd8b6ecbfa836b34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the list of used fields, grouped by line.
     *
     * Used for generating address forms.
     *
     * Applies field overrides, to ensure hidden fields are skipped.
     *
     * @param string         $formatString   The format string.
     * @param FieldOverrides $fieldOverrides The field overrides.
     *
     * @return array An array of address fields grouped by line, in the same
     *               order as they appear in the format string. For example:
     *               [
     *                 [givenName, familyName],
     *                 [organization],
     *                 [addressLine1],
     *                 [addressLine2],
     *                 [locality, administrativeArea, postalCode]
     *               ]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\AddressFormat',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
         'functionName' => 'getGroupedFields',
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
    '7a90043c7d43504148f00dc20b2cbf11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the required fields.
     *
     * Applies field overrides to the required fields
     * specified by the address format.
     *
     * @param AddressFormat $addressFormat   The address format.
     * @param FieldOverrides $fieldOverrides The field overrides.
     *
     * @return string[] The required fields.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\AddressFormat',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatHelper',
         'functionName' => 'getRequiredFields',
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