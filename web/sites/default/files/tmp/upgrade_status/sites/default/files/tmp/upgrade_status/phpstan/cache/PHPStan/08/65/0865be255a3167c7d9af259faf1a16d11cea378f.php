<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/EntityAccessControlHandlerBase.php-1624732871',
   'data' => 
  array (
    '006a771ddc7e7a8f596b8225018c7f70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @internal
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
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
    'ca1443ee69a488f17d0709fd77c02654' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkAccess',
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
    '611e963203bdb6b62072063f2f3364b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResult $result */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkAccess',
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
    '13870aabf0c44fe9d13f1597237df6ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the entity operation and bundle permissions.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity for which to check access.
   * @param string $operation
   *   The entity operation. Usually one of \'view\', \'view label\', \'update\',
   *   \'duplicate\' or \'delete\'.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user for which to check access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkEntityPermissions',
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
    '450f683d931cec38533e1340ec7e0801' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the entity operation and bundle permissions, with owners.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity for which to check access.
   * @param string $operation
   *   The entity operation. Usually one of \'view\', \'view label\', \'update\',
   *   \'duplicate\' or \'delete\'.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user for which to check access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkEntityOwnerPermissions',
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
    '89d7977358f1d0a1066f4acaaa379997' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\EntityOwnerInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkEntityOwnerPermissions',
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
    '02b25efa7e092393f2fd5d9f416aa10f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'coreentityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
        ),
         'className' => 'Drupal\\entity\\EntityAccessControlHandlerBase',
         'functionName' => 'checkCreateAccess',
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