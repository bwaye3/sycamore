<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Form/StoreForm.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/Form/EntityDuplicateFormTrait.php-1624732871',
   'data' => 
  array (
    '50a1695dab05bc1ba5f3db67c80cbd4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows forms to implement EntityDuplicateFormInterface.
 *
 * Forms are expected to call $this->postSave() after the entity is saved.
 * This works around core issue #3040556.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
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
    'd9c76060a8d5e1a7181ef768d33b243c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The source entity.
   *
   * @var \\Drupal\\Core\\Entity\\EntityInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
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
    '5d217b1818ee9331fa5f9b0592dbf242' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'getSourceEntity',
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
    '19563b02b2fe9ae0ef6cca8f2bb95760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'setSourceEntity',
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
    '7c2b806782ed6ea937bc45153e88644a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes entity duplicate hooks after the entity has been duplicated.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The saved entity.
   * @param string $operation
   *   The form operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'postSave',
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
    '532a8290f275681b450463a5728b9ffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\Form',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityduplicateevent' => 'Drupal\\entity\\Event\\EntityDuplicateEvent',
          'entityevents' => 'Drupal\\entity\\Event\\EntityEvents',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'postSave',
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
    'ea6bc7b79f1cb47fb16035efdcb055fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Form',
         'uses' => 
        array (
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'form',
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
    '8b1531f4f83190f5e20714d6a7f375f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_store\\Entity\\StoreInterface $store */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Form',
         'uses' => 
        array (
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'form',
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
    '39100a0e41f44c70da1fd94418728f8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_store\\StoreStorageInterface $store_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Form',
         'uses' => 
        array (
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'form',
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
    '7d4038bf9ab9bc0c7185e271f5c92b76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Form',
         'uses' => 
        array (
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'entityduplicateformtrait' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
        ),
         'className' => 'Drupal\\commerce_store\\Form\\StoreForm',
         'functionName' => 'save',
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