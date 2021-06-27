<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/user/user.module-1624732869',
   'data' => 
  array (
    '1b3012da104a4367453daf6b038e30a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Enables the user registration and login system.
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
    '35f84631735824f18b63406eea9597e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Maximum length of username text field.
 *
 * Keep this under 191 characters so we can use a unique constraint in MySQL.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\user\\UserInterface::USERNAME_MAX_LENGTH instead.
 *
 * @see https://www.drupal.org/node/2831620
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
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
    '0cda5e343c370861903958b2b86dd50b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Only administrators can create user accounts.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\user\\UserInterface::REGISTER_ADMINISTRATORS_ONLY instead.
 *
 * @see https://www.drupal.org/node/2831620
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
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
    '38a24f665ccbca75339f26faa95e1e1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Visitors can create their own accounts.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\user\\UserInterface::REGISTER_VISITORS instead.
 *
 * @see https://www.drupal.org/node/2831620
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
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
    '13595653996c816e6dea18807e504c2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Visitors can create accounts, but they don\'t become active without
 * administrative approval.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\user\\UserInterface::REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL
 *   instead.
 *
 * @see https://www.drupal.org/node/2831620
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
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
    '43f78325539d3bf590da05ce1f801cdd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_help().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_help',
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
    '11fe339a61307d3702c81b4bc29e4263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_theme',
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
    '3bfa3ee88d4947008068ba272df02110' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_js_settings_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_js_settings_alter',
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
    'ad1371c75f3d665126a4673306ef9eb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns whether this site supports the default user picture feature.
 *
 * This approach preserves compatibility with node/comment templates. Alternate
 * user picture implementations (e.g., Gravatar) should provide their own
 * add/edit/delete forms and populate the \'picture\' variable during the
 * preprocess stage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_picture_enabled',
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
    'ff61ae6543672d114a80831297e0e4d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_extra_field_info().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_entity_extra_field_info',
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
    'ccb08cbe200d943ab0d3882dbb99f75c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_presave() for user entities.
 *
 * @todo https://www.drupal.org/project/drupal/issues/3112704 Move to
 *   \\Drupal\\user\\Entity\\User::preSave().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_presave',
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
    'e909395ce14a0da044901a75a49d6888' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads multiple users based on certain conditions.
 *
 * This function should be used whenever you need to load more than one user
 * from the database. Users are loaded into memory and will not require
 * database access if loaded again during the same page request.
 *
 * @param array $uids
 *   (optional) An array of entity IDs. If omitted, all entities are loaded.
 * @param bool $reset
 *   A boolean indicating that the internal cache should be reset. Use this if
 *   loading a user object which has been altered during the page request.
 *
 * @return array
 *   An array of user objects, indexed by uid.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\user\\Entity\\User::loadMultiple().
 *
 * @see https://www.drupal.org/node/2266845
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_load_multiple',
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
    '3292b11c7f57adbdf66ee5c3e09cf694' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads a user object.
 *
 * @param int $uid
 *   Integer specifying the user ID to load.
 * @param bool $reset
 *   TRUE to reset the internal cache and load from the database; FALSE
 *   (default) to load from the internal cache, if set.
 *
 * @return \\Drupal\\user\\UserInterface
 *   A fully-loaded user object upon successful user load, or NULL if the user
 *   cannot be loaded.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   Drupal\\user\\Entity\\User::load().
 *
 * @see https://www.drupal.org/node/2266845
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_load',
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
    'b17700c522cb56eae4eb5e4f8d0c0489' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fetches a user object by email address.
 *
 * @param string $mail
 *   String with the account\'s email address.
 *
 * @return \\Drupal\\user\\UserInterface|false
 *   A user entity upon successful user load, or FALSE if user cannot be loaded.
 *
 * @see \\Drupal\\user\\Entity\\User::loadMultiple()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_load_by_mail',
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
    '4c0053f0632ea5fdc5445b275ec73553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fetches a user object by account name.
 *
 * @param string $name
 *   String with the account\'s user name.
 *
 * @return \\Drupal\\user\\UserInterface|false
 *   A user entity upon successful user load, or FALSE if user cannot be loaded.
 *
 * @see \\Drupal\\user\\Entity\\User::loadMultiple()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_load_by_name',
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
    'f3efb49faf9c9f3199662ea09b189c17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Verify the syntax of the given name.
 *
 * @param string $name
 *   The user name to validate.
 *
 * @return string|null
 *   A translated violation message if the name is invalid or NULL if the name
 *   is valid.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_validate_name',
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
    'b4dc10d2644f456e046c6d4cd71ee60f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate a random alphanumeric password.
 *
 * @param int $length
 *   The desired password length, in characters.
 *
 * @return string
 *   The generated random password.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_password',
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
    'b676c48fe3578fe1306f1d5eeb1b0acc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determine the permissions for one or more roles.
 *
 * @param array $roles
 *   An array of role IDs.
 *
 * @return array
 *   An array indexed by role ID. Each value is an array of permission strings
 *   for the given role.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_permissions',
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
    'f5a267cdf1c36a6285c1d428874a4e34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Determine the permissions for one or more roles during update.
 *
 * A separate version is needed because during update the entity system can\'t
 * be used and in non-update situations the entity system is preferred because
 * of the hook system.
 *
 * @param array $roles
 *   An array of role IDs.
 *
 * @return array
 *   An array indexed by role ID. Each value is an array of permission strings
 *   for the given role.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => '_user_role_permissions_update',
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
    'bc9959feb3956f075dbe6872c5b47cb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks for usernames blocked by user administration.
 *
 * @param string $name
 *   A string containing a name of the user.
 *
 * @return bool
 *   TRUE if the user is blocked, FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_is_blocked',
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
    '1898ff24919c8f47c16ed5fab2a6de21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_view() for user entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_view',
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
    'c3148ca553ca49390162f90f6d1c5958' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_view_alter() for user entities.
 *
 * This function adds a default alt tag to the user_picture field to maintain
 * accessibility.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_view_alter',
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
    '32eaa63336fe5b41008245f015a84afb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem $item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_view_alter',
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
    '5f35eddad4b6b0ab105aa7d2edd98cff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_preprocess_HOOK() for block templates.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_preprocess_block',
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
    '42604ea4f26cb12091881c131c6ea3c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Format a username.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The account object for the user whose name is to be formatted.
 *
 * @return string
 *   An unsanitized string with the username to display.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use $account->label() or $account->getDisplayName() instead
 *
 * @see https://www.drupal.org/node/3050794
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_format_name',
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
    '0b4a3c19799291d41e6808ebd84f6b39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_template_preprocess_default_variables_alter().
 *
 * @see user_user_login()
 * @see user_user_logout()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_template_preprocess_default_variables_alter',
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
    '9157c276aa2e611dae6717c870484b63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for username templates.
 *
 * Default template: username.html.twig.
 *
 * Modules that make any changes to variables like \'name\' or \'extra\' must ensure
 * that the final string is safe.
 *
 * @param array $variables
 *   An associative array containing:
 *   - account: The user account (\\Drupal\\Core\\Session\\AccountInterface).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_username',
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
    '0a08190643c98310035ef73300b1dbd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finalizes the login process and logs in a user.
 *
 * The function logs in the user, records a watchdog message about the new
 * session, saves the login timestamp, calls hook_user_login(), and generates a
 * new session.
 *
 * The current user is replaced with the passed in account.
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   The account to log in.
 *
 * @see hook_user_login()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_login_finalize',
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
    'd29932e13059a7fc71957f924741b48b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_user_login().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_login',
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
    '6765e695d7d6faced0c8dcec0d998cb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_user_logout().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_logout',
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
    '4139d577339ed00d962795203234b9b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates a unique URL for a user to log in and reset their password.
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   An object containing the user account.
 * @param array $options
 *   (optional) A keyed array of settings. Supported options are:
 *   - langcode: A language code to be used when generating locale-sensitive
 *    URLs. If langcode is NULL the users preferred language is used.
 *
 * @return string
 *   A unique URL that provides a one-time log in for the user, from which
 *   they can change their password.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_pass_reset_url',
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
    '98b81da2acb6b278a4db97f8c7c842e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates a URL to confirm an account cancellation request.
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   The user account object.
 * @param array $options
 *   (optional) A keyed array of settings. Supported options are:
 *   - langcode: A language code to be used when generating locale-sensitive
 *     URLs. If langcode is NULL the users preferred language is used.
 *
 * @return string
 *   A unique URL that may be used to confirm the cancellation of the user
 *   account.
 *
 * @see user_mail_tokens()
 * @see \\Drupal\\user\\Controller\\UserController::confirmCancel()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_cancel_url',
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
    '72dbef4eb4433a6791f66f042c918e60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates a unique hash value for use in time-dependent per-user URLs.
 *
 * This hash is normally used to build a unique and secure URL that is sent to
 * the user by email for purposes such as resetting the user\'s password. In
 * order to validate the URL, the same hash can be generated again, from the
 * same information, and compared to the hash value from the URL. The hash
 * contains the time stamp, the user\'s last login time, the numeric user ID,
 * and the user\'s email address.
 * For a usage example, see user_cancel_url() and
 * \\Drupal\\user\\Controller\\UserController::confirmCancel().
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   An object containing the user account.
 * @param int $timestamp
 *   A UNIX timestamp, typically REQUEST_TIME.
 *
 * @return string
 *   A string that is safe for use in URLs and SQL statements.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_pass_rehash',
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
    '1ce779d6f27b9da25854ea440e837be6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Cancel a user account.
 *
 * Since the user cancellation process needs to be run in a batch, either
 * Form API will invoke it, or batch_process() needs to be invoked after calling
 * this function and should define the path to redirect to.
 *
 * @param array $edit
 *   An array of submitted form values.
 * @param int $uid
 *   The user ID of the user account to cancel.
 * @param string $method
 *   The account cancellation method to use.
 *
 * @see _user_cancel()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_cancel',
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
    '7a52553ee04c451b6401cfced9678446' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements callback_batch_operation().
 *
 * Last step for cancelling a user account.
 *
 * Since batch and session API require a valid user account, the actual
 * cancellation of a user account needs to happen last.
 * @param array $edit
 *   An array of submitted form values.
 * @param \\Drupal\\user\\UserInterface $account
 *   The user ID of the user account to cancel.
 * @param string $method
 *   The account cancellation method to use.
 *
 * @see user_cancel()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => '_user_cancel',
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
    '2d2a61ba0a65275d1a18045f7451789b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements callback_batch_finished().
 *
 * Finished batch processing callback for cancelling a user account.
 *
 * @see user_cancel()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => '_user_cancel_session_regenerate',
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
    '5a1c2336d94a393a16fff0adde4debcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper function to return available account cancellation methods.
 *
 * See documentation of hook_user_cancel_methods_alter().
 *
 * @return array
 *   An array containing all account cancellation methods as form elements.
 *
 * @see hook_user_cancel_methods_alter()
 * @see user_admin_settings()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_cancel_methods',
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
    '2ca9af0fab70314dae68cadbd367896b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Delete a user.
 *
 * @param int $uid
 *   A user ID.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use the user
 *   entity\'s delete method to delete the user.
 * @code
 *   Drupal::entityTypeManager->getStorage(\'user\')->load($uid)->delete();
 * @endcode
 *
 * @see https://www.drupal.org/node/3051463
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_delete',
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
    '74ab46b9141534ae50104c2766862a81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Delete multiple user accounts.
 *
 * @param int[] $uids
 *   An array of user IDs.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use the
 *   entity storage system to delete the users.
 * @code
 *   $storage_handler = \\Drupal::entityTypeManager()->getStorage(\'user\');
 *   $users = $storage_handler->loadMultiple($uids);
 *   $storage_handler->delete($users);
 * @endcode
 *
 * @see https://www.drupal.org/node/3051463
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_delete_multiple',
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
    '6ca83dd009770b8d8f5dee95a9dff484' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generate an array for rendering the given user.
 *
 * When viewing a user profile, the $page array contains:
 *
 * - $page[\'content\'][\'member_for\']:
 *   Contains the default "Member for" profile data for a user.
 * - $page[\'content\'][\'#user\']:
 *   The user account of the profile being viewed.
 *
 * To theme user profiles, copy core/modules/user/templates/user.html.twig
 * to your theme directory, and edit it as instructed in that file\'s comments.
 *
 * @param \\Drupal\\user\\UserInterface $account
 *   A user object.
 * @param string $view_mode
 *   View mode, e.g. \'full\'.
 * @param string|null $langcode
 *   (optional) A language code to use for rendering. Defaults to the global
 *   content language of the current request.
 *
 * @return array
 *   An array as expected by \\Drupal\\Core\\Render\\RendererInterface::render().
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal::entityTypeManager()->getViewBuilder(\'user\')->view() instead.
 *
 * @see https://www.drupal.org/node/3033656
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_view',
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
    'a9fa4ef8fa6ad286943f1c5879b6e8fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constructs a drupal_render() style array from an array of loaded users.
 *
 * @param \\Drupal\\user\\UserInterface[] $accounts
 *   An array of user accounts as returned by User::loadMultiple().
 * @param string $view_mode
 *   (optional) View mode, e.g., \'full\', \'teaser\', etc. Defaults to \'teaser.\'
 * @param string|null $langcode
 *   (optional) A language code to use for rendering. Defaults to the global
 *   content language of the current request.
 *
 * @return array
 *   An array in the format expected by
 *   \\Drupal\\Core\\Render\\RendererInterface::render().
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal::entityTypeManager()->getViewBuilder(\'user\')->viewMultiple()
 *   instead.
 *
 * @see https://www.drupal.org/node/3033656
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_view_multiple',
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
    'd404363413b7b63f2bc81e46c848bac9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_mail().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_mail',
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
    'b1d302e74d7578083c9c9c9aa5ff34f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Token callback to add unsafe tokens for user mails.
 *
 * This function is used by \\Drupal\\Core\\Utility\\Token::replace() to set up
 * some additional tokens that can be used in email messages generated by
 * user_mail().
 *
 * @param array $replacements
 *   An associative array variable containing mappings from token names to
 *   values (for use with strtr()).
 * @param array $data
 *   An associative array of token replacement values. If the \'user\' element
 *   exists, it must contain a user account object with the following
 *   properties:
 *   - login: The UNIX timestamp of the user\'s last login.
 *   - pass: The hashed account login password.
 * @param array $options
 *   A keyed array of settings and flags to control the token replacement
 *   process. See \\Drupal\\Core\\Utility\\Token::replace().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_mail_tokens',
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
    '4e64e9a78d8ab301ee00f031c7965f80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieves the names of roles matching specified conditions.
 *
 * @param bool $membersonly
 *   (optional) Set this to TRUE to exclude the \'anonymous\' role. Defaults to
 *   FALSE.
 * @param string|null $permission
 *   (optional) A string containing a permission. If set, only roles
 *    containing that permission are returned. Defaults to NULL, which
 *    returns all roles.
 *
 * @return array
 *   An associative array with the role id as the key and the role name as
 *   value.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_names',
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
    '3710e44fc43ba06bcdd4ebc307aed798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_insert() for user_role entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_role_insert',
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
    'e2493cdae6b383096763b9c46d89b273' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_delete() for user_role entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_user_role_delete',
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
    '7afd0626a11fece4c8ded5cbbd7b06d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Retrieve an array of roles matching specified conditions.
 *
 * @param bool $membersonly
 *   (optional) Set this to TRUE to exclude the \'anonymous\' role. Defaults to
 *   FALSE.
 * @param string|null $permission
 *   (optional) A string containing a permission. If set, only roles
 *   containing that permission are returned. Defaults to NULL, which
 *   returns all roles.
 *
 * @return \\Drupal\\user\\RoleInterface[]
 *   An associative array with the role id as the key and the role object as
 *   value.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_roles',
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
    '54b4ddd7c10d2b84cf819012008df54d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Fetches a user role by role ID.
 *
 * @param string $rid
 *   A string representing the role ID.
 *
 * @return \\Drupal\\user\\RoleInterface|null
 *   A fully-loaded role object if a role with the given ID exists, or NULL
 *   otherwise.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\user\\Entity\\Role::load().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_load',
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
    '72c9c5fe911d28c13be57149e7562fd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Change permissions for a user role.
 *
 * This function may be used to grant and revoke multiple permissions at once.
 * For example, when a form exposes checkboxes to configure permissions for a
 * role, the form submit handler may directly pass the submitted values for the
 * checkboxes form element to this function.
 *
 * @param mixed $rid
 *   The ID of a user role to alter.
 * @param array $permissions
 *   (optional) An associative array, where the key holds the permission name
 *   and the value determines whether to grant or revoke that permission. Any
 *   value that evaluates to TRUE will cause the permission to be granted.
 *   Any value that evaluates to FALSE will cause the permission to be
 *   revoked.
 *   @code
 *     array(
 *       \'administer nodes\' => 0,                // Revoke \'administer nodes\'
 *       \'administer blocks\' => FALSE,           // Revoke \'administer blocks\'
 *       \'access user profiles\' => 1,            // Grant \'access user profiles\'
 *       \'access content\' => TRUE,               // Grant \'access content\'
 *       \'access comments\' => \'access comments\', // Grant \'access comments\'
 *     )
 *   @endcode
 *   Existing permissions are not changed, unless specified in $permissions.
 *
 * @see user_role_grant_permissions()
 * @see user_role_revoke_permissions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_change_permissions',
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
    '40de3913e4f8da87febc6ebdc1c1320f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Grant permissions to a user role.
 *
 * @param mixed $rid
 *   The ID of a user role to alter.
 * @param array $permissions
 *   (optional) A list of permission names to grant.
 *
 * @see user_role_change_permissions()
 * @see user_role_revoke_permissions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_grant_permissions',
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
    'd7732b41d91fc66ae681397ecb8f5742' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Revoke permissions from a user role.
 *
 * @param mixed $rid
 *   The ID of a user role to alter.
 * @param array $permissions
 *   (optional) A list of permission names to revoke.
 *
 * @see user_role_change_permissions()
 * @see user_role_grant_permissions()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_role_revoke_permissions',
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
    '1d181067ed693387366a78380869c2f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Conditionally create and send a notification email when a certain
 * operation happens on the given user account.
 *
 * @param string $op
 *   The operation being performed on the account. Possible values:
 *   - \'register_admin_created\': Welcome message for user created by the admin.
 *   - \'register_no_approval_required\': Welcome message when user
 *     self-registers.
 *   - \'register_pending_approval\': Welcome message, user pending admin
 *     approval.
 *   - \'password_reset\': Password recovery request.
 *   - \'status_activated\': Account activated.
 *   - \'status_blocked\': Account blocked.
 *   - \'cancel_confirm\': Account cancellation request.
 *   - \'status_canceled\': Account canceled.
 *
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The user object of the account being notified. Must contain at
 *   least the fields \'uid\', \'name\', and \'mail\'.
 * @param string $langcode
 *   (optional) Language code to use for the notification, overriding account
 *   language.
 *
 * @return array
 *   An array containing various information about the message.
 *   See \\Drupal\\Core\\Mail\\MailManagerInterface::mail() for details.
 *
 * @see user_mail_tokens()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => '_user_mail_notify',
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
    '9c673554f12ca86f420306d49039b8d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_element_info_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_element_info_alter',
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
    'fdc867b8a88029071493d556757a3d2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Form element process handler for client-side password validation.
 *
 * This #process handler is automatically invoked for \'password_confirm\' form
 * elements to add the JavaScript and string translations for dynamic password
 * validation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_form_process_password_confirm',
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
    '54edd2662ce7e5035bc2e018ae9b829e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_modules_uninstalled().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_modules_uninstalled',
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
    '8504b48b84d64ff3aeb64fa64311e28e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Saves visitor information as a cookie so it can be reused.
 *
 * @param array $values
 *   An array of key/value pairs to be saved into a cookie.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_cookie_save',
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
    'b5789c402b22a3a94da7eeea30f4fed7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Delete a visitor information cookie.
 *
 * @param string $cookie_name
 *   A cookie name such as \'homepage\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_cookie_delete',
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
    'cc299778f37cfcad3997d02d5a505a5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_toolbar().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_toolbar',
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
    '4abce792fed0df277e665942fec2345c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Logs the current user out.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_logout',
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
    '4380abbce0b6bb92f11902d28602a2a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for user templates.
 *
 * Default template: user.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *     fields attached to the user. Properties used:
 *     - #user: A \\Drupal\\user\\Entity\\User object. The user account of the
 *       profile being viewed.
 *   - attributes: HTML attributes for the containing element.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_user',
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
    'fe9464b4b7b9c57e5df42397e82c84fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter() for \\Drupal\\system\\Form\\RegionalForm.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_form_system_regional_settings_alter',
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
    '7d10a77f282005cee93f9ba35ab0519f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Additional submit handler for \\Drupal\\system\\Form\\RegionalForm.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'attachedassetsinterface' => 'Drupal\\Core\\Asset\\AttachedAssetsInterface',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'url' => 'Drupal\\Core\\Url',
          'imageitem' => 'Drupal\\image\\Plugin\\Field\\FieldType\\ImageItem',
          'action' => 'Drupal\\system\\Entity\\Action',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => NULL,
         'functionName' => 'user_form_system_regional_settings_submit',
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