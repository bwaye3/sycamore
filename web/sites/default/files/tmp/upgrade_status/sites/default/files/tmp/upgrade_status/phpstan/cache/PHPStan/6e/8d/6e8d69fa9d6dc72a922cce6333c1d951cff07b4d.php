<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/checklistapi/checklistapi.module-1624732871',
   'data' => 
  array (
    '19480c59d829f969577036c316db8226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * An API for creating fillable, persistent checklists.
 *
 * Provides an interface for creating checklists that track progress with
 * completion times and users.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    'f9e6ba5a040713f53338292eac388c35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Access callback: Checks the current user\'s access to a given checklist.
 *
 * @param string $id
 *   The checklist ID.
 * @param string $operation
 *   (optional) The operation to test access for. Accepted values are "view",
 *   "edit", and "any". Defaults to "any".
 *
 * @return bool
 *   Returns TRUE if the current user has access to perform a given operation on
 *   the specified checklist, or FALSE if not.
 *
 * @throws InvalidArgumentException
 *   Throws an exception if an unsupported operation is supplied.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_checklist_access',
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
    '847ef25e83affc233fb46e1035d93144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads a checklist object.
 *
 * @param string $id
 *   The checklist ID.
 *
 * @return Drupal\\checklistapi\\ChecklistapiChecklist|false
 *   A fully-loaded checklist object, or FALSE if the checklist is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_checklist_load',
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
    '0755614f43f9bb19f97c0d2d9c8763d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds the checklist items to a given definition.
 *
 * @param array $definition
 *   A checklist definition as returned from checklistapi_get_checklist_info().
 *
 * @return array
 *   The checklist definition with checklist items added.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_add_checklist_items',
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
    'a5e0bcf78df73f48e3673e47d280d2e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determines whether the current user is in compact mode.
 *
 * Compact mode shows checklist forms with less description text.
 *
 * Whether the user is in compact mode is determined by a cookie. If the user
 * does not have the cookie, the setting defaults to off.
 *
 * @return bool
 *   TRUE when in compact mode, or FALSE when in expanded mode.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_compact_mode_is_on',
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
    'c5a7f56fe90086968bd1c9ae67cdd99b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets checklist definitions.
 *
 * @param string $id
 *   (optional) A checklist ID. Defaults to NULL.
 *
 * @return array|false
 *   The definition of the specified checklist, or FALSE if no such checklist
 *   exists, or an array of all checklist definitions if none is specified.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_get_checklist_info',
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
    '89344640c9cc001e281adb7602e4978d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_help',
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
    '14cfda8d8d592e826cabd3098ed05c28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_module_preinstall().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_module_preinstall',
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
    '0510b8bf2a04c32dcd70378bdab57db2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Recursively sorts array elements by #weight.
 *
 * @param array $array
 *   A nested array of elements and properties, such as the checklist
 *   definitions returned by hook_checklistapi_checklist_info().
 *
 * @return array
 *   The input array sorted recursively by #weight.
 *
 * @see checklistapi_get_checklist_info()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_sort_array',
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
    '82cc46d4c405f07f8c104ffa5b59d068' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts a string to lowerCamel case, suitably for a class property name.
 *
 * @param string $string
 *   The input string.
 *
 * @return string
 *   The input string converted to camelCase.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_strtolowercamel',
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
    '6f6a7c18b71355f34f02abed8151d086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'checklistapichecklist' => 'Drupal\\checklistapi\\ChecklistapiChecklist',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
         'className' => NULL,
         'functionName' => 'checklistapi_theme',
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