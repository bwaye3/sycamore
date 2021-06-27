<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/addressing/src/Subdivision/SubdivisionRepositoryInterface.php-1621238721',
   'data' => 
  array (
    '6d0cd2cf3655acec52db41f469ae3912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Subdivision repository interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
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
    '153811059b5a7ff1ed87141f2b35d20c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a subdivision instance matching the provided code and parents.
     *
     * @param string $code   The subdivision code.
     * @param array  $parents The parents (country code, subdivision codes).
     *
     * @return Subdivision|null The subdivision instance, if found.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
         'functionName' => 'get',
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
    '32b7336c578c50a88af1be2be54b1fb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all subdivision instances for the provided parents.
     *
     * @param array $parents The parents (country code, subdivision codes).
     *
     * @return Subdivision[] An array of subdivision instances.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
         'functionName' => 'getAll',
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
    'cfdfb4cede9f0200bc40f4df60155704' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of subdivisions for the provided parents.
     *
     * @param array  $parents The parents (country code, subdivision codes).
     * @param string $locale The locale (e.g. fr-FR).
     *
     * @return array An array of subdivision names, keyed by code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepositoryInterface',
         'functionName' => 'getList',
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