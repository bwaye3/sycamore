<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/checklistapi/src/Commands/ChecklistapiCommands.php-1624732871',
   'data' => 
  array (
    'd86317316c581a1975e7a07303c304e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checklist API Drush command fileA Drush commandfile.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\checklistapi\\Commands',
         'uses' => 
        array (
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'user' => 'Drupal\\user\\Entity\\User',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'listcommands' => 'Drush\\Commands\\help\\ListCommands',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
        ),
         'className' => 'Drupal\\checklistapi\\Commands\\ChecklistapiCommands',
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
    'eb2a5aa479799ae8bb78a622b316e964' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger channel.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\checklistapi\\Commands',
         'uses' => 
        array (
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'user' => 'Drupal\\user\\Entity\\User',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'listcommands' => 'Drush\\Commands\\help\\ListCommands',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
        ),
         'className' => 'Drupal\\checklistapi\\Commands\\ChecklistapiCommands',
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
    'de81e334f94dd24c23877f0040b7c795' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs an instance.
   *
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_channel
   *   The logger channel factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\checklistapi\\Commands',
         'uses' => 
        array (
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'user' => 'Drupal\\user\\Entity\\User',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'listcommands' => 'Drush\\Commands\\help\\ListCommands',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
        ),
         'className' => 'Drupal\\checklistapi\\Commands\\ChecklistapiCommands',
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
    '605b8a76e29926f6a5bb54be3afe0d8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get an overview of your installed checklists with progress details.
   *
   * @command checklistapi:list
   * @aliases capi-list,capil,checklistapi-list
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\checklistapi\\Commands',
         'uses' => 
        array (
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'user' => 'Drupal\\user\\Entity\\User',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'listcommands' => 'Drush\\Commands\\help\\ListCommands',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
        ),
         'className' => 'Drupal\\checklistapi\\Commands\\ChecklistapiCommands',
         'functionName' => 'listCommand',
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
    'e6f55ab23c18aa3328ed0540f68ec456' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Show detailed info for a given checklist.
   *
   * @param string $checklist_id
   *   The checklist machine name, e.g., "example_checklist".
   *
   * @return string|void
   *   The command output.
   *
   * @command checklistapi:info
   * @aliases capi-info,capii,checklistapi-info
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\checklistapi\\Commands',
         'uses' => 
        array (
          'formattermanager' => 'Consolidation\\OutputFormatters\\FormatterManager',
          'formatteroptions' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
          'rowsoffields' => 'Consolidation\\OutputFormatters\\StructuredData\\RowsOfFields',
          'loggerchannelfactoryinterface' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'user' => 'Drupal\\user\\Entity\\User',
          'drushcommands' => 'Drush\\Commands\\DrushCommands',
          'listcommands' => 'Drush\\Commands\\help\\ListCommands',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
        ),
         'className' => 'Drupal\\checklistapi\\Commands\\ChecklistapiCommands',
         'functionName' => 'infoCommand',
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