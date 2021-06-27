<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/SectionListInterface.php-1624732868',
   'data' => 
  array (
    '72e15c8a8aa3dc37ff3871aac12dccf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for an object that stores layout sections.
 *
 * @see \\Drupal\\layout_builder\\Section
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
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
    'ed31621aeeff24f7e91705bda3fa86ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the layout sections.
   *
   * @return \\Drupal\\layout_builder\\Section[]
   *   A sequentially and numerically keyed array of section objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'getSections',
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
    '5a171501464ab913f15cb65a9c8582d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a domain object for the layout section.
   *
   * @param int $delta
   *   The delta of the section.
   *
   * @return \\Drupal\\layout_builder\\Section
   *   The layout section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'getSection',
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
    '3541642946e4e2635e804fdd04d35662' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a new section to the end of the list.
   *
   * @param \\Drupal\\layout_builder\\Section $section
   *   The section to append.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'appendSection',
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
    '394fbfffe461ff03c63652ccdfecafa6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inserts a new section at a given delta.
   *
   * If a section exists at the given index, the section at that position and
   * others after it are shifted backward.
   *
   * @param int $delta
   *   The delta of the section.
   * @param \\Drupal\\layout_builder\\Section $section
   *   The section to insert.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'insertSection',
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
    '0de86b6f15a8699345c8959ff65fb28e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the section at the given delta.
   *
   * As sections are stored sequentially and numerically this will re-key every
   * subsequent section, shifting them forward.
   *
   * @param int $delta
   *   The delta of the section.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'removeSection',
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
    '45fd3ea07f28ed29d485ebe70e1bb535' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all of the sections.
   *
   * @param bool $set_blank
   *   (optional) The default implementation of section lists differentiates
   *   between a list that has never contained any sections and a list that has
   *   purposefully had all sections removed in order to remain blank. Passing
   *   TRUE will mirror ::removeSection() by tracking this as a blank list.
   *   Passing FALSE will reset the list as though it had never contained any
   *   sections at all. Defaults to FALSE.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\layout_builder\\SectionListInterface',
         'functionName' => 'removeAllSections',
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