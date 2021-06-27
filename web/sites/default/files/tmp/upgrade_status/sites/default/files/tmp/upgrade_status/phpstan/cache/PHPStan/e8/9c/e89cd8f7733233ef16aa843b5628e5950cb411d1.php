<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/drush/drush/src/Commands/help/ListCommands.php-1620488970',
   'data' => 
  array (
    'eefff8965d69119dbaced9de446717b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * List available commands.
     *
     * @command list
     * @option filter Restrict command list to those commands defined in the specified file. Omit value to choose from a list of names.
     * @option raw Show a simple table of command names and descriptions.
     * @bootstrap max
     * @usage drush list
     *   List all commands.
     * @usage drush list --filter=devel_generate
     *   Show only commands starting with devel-
     * @usage drush list --format=xml
     *   List all commands in Symfony compatible xml format.
     *
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'helpList',
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
    'b1d89e50c31a15b2449deb1af454c130' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
         * The listcli,json and raw formats don\'t yet go through the output formatter system.
         * because \\Consolidation\\OutputFormatters\\Transformations\\DomToArraySimplifier
         * can\'t yet handle the DomDocument that produces the Symfony expected XML. For consistency, the XML
         * output chooses to use the Symfony descriptor as well.
         */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'helpList',
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
    'df352bffe0a569a539787fb130a13f38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param $namespaced
     * @param $application
     * @return \\DOMDocument
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'buildDom',
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
    'caa9088a14198fd737ab12a04b03e964' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \\Symfony\\Component\\Console\\Application $application
     * @param array $namespaced
     * @param OutputInterface $output
     * @param string $preamble
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'renderListCLI',
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
    'da8de3f6759d54947e7d8a017d593f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array $namespaced
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'renderListRaw',
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
    'e641281220889dbb95ebf67682e9239d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param Command[] $all
     * @param string $separator
     *
     * @return Command[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drush\\Commands\\help',
         'uses' => 
        array (
          'helpdocument' => 'Consolidation\\AnnotatedCommand\\Help\\HelpDocument',
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'drush' => 'Drush\\Drush',
          'command' => 'Symfony\\Component\\Console\\Command\\Command',
          'jsondescriptor' => 'Symfony\\Component\\Console\\Descriptor\\JsonDescriptor',
          'xmldescriptor' => 'Symfony\\Component\\Console\\Descriptor\\XmlDescriptor',
          'table' => 'Symfony\\Component\\Console\\Helper\\Table',
          'outputinterface' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
          'terminal' => 'Symfony\\Component\\Console\\Terminal',
        ),
         'className' => 'Drush\\Commands\\help\\ListCommands',
         'functionName' => 'categorize',
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