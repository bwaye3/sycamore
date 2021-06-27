<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/addressing/src/Subdivision/SubdivisionRepository.php-1621238721',
   'data' => 
  array (
    '17bc7d00f6443ecf3b8c104a02bc6f78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The address format repository.
     *
     * @var AddressFormatRepository
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    'a9ce9e6d01b4cdd8003f814dae379a03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The path where subdivision definitions are stored.
     *
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '830a65731b2d3045b8abd4a972c46a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Subdivision definitions.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '5890cad09b030636623a94c2c5a8d79b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parent subdivisions.
     *
     * Used as a cache to speed up instantiating subdivisions with the same
     * parent. Contains only parents instead of all instantiated subdivisions
     * to minimize duplicating the data in $this->definitions, thus reducing
     * memory usage.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    'd6ba3ffd6ce563ea25eadd6fc82b9352' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a SubdivisionRepository instance.
     *
     * @param AddressFormatRepositoryInterface $addressFormatRepository The address format repository.
     * @param string                           $definitionPath          Path to the subdivision definitions.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '6bee3f6c8613b823bc408afe0ecd76b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '76cebe73da2eb69873d1964fbe0f41ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '419148a6b497f91147a7d78bde12e151' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
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
    '1012d6b41b8c5189d229d24eb40a3c1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether predefined subdivisions exist for the provided parents.
     *
     * @param array $parents The parents (country code, subdivision codes).
     *
     * @return bool TRUE if predefined subdivisions exist for the provided
     *              parents, FALSE otherwise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
         'functionName' => 'hasData',
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
    '0de7ec7b48540ba6f6636a26c3474f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads the subdivision definitions for the provided parents.
     *
     * @param array $parents The parents (country code, subdivision codes).
     *
     * @return array The subdivision definitions.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
         'functionName' => 'loadDefinitions',
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
    'b6590f01d019872b828bde09cd9f18de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Processes the loaded definitions.
     *
     * Adds keys and values that were removed from the JSON files for brevity.
     *
     * @param array $definitions The definitions.
     *
     * @return array The processed definitions.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
         'functionName' => 'processDefinitions',
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
    'f26d2b91d0d18fb046672bd867afc8ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Builds a group from the provided parents.
     *
     * Used for storing a country\'s subdivisions of a specific level.
     *
     * @param array $parents The parents (country code, subdivision codes).
     *
     * @return string The group.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
         'functionName' => 'buildGroup',
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
    '59efc65b5534153b11e7eadc97357f9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a subdivision object from the provided definitions.
     *
     * @param int    $code        The subdivision code.
     * @param array  $definitions The subdivision definitions.
     *
     * @return Subdivision
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing\\Subdivision',
         'uses' => 
        array (
          'addressformatrepository' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepository',
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'locale' => 'CommerceGuys\\Addressing\\Locale',
        ),
         'className' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
         'functionName' => 'createSubdivisionFromDefinitions',
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