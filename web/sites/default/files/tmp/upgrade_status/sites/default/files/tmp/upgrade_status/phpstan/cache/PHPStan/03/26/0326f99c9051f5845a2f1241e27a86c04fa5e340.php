<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/Form/EntityDuplicateFormTrait.php-1624732871',
   'data' => 
  array (
    '442bf6cd1434a4eb39cf8ef9a24370cd' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
    '6e2922cd7ab70bda33750472df1bc52f' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
    '4ef44d419b80a9ded730f0dd479af6d8' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
    'b686a5e6bb7bb93e6d86eaace833a82d' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
    '4b38ddfb102e02b54ded2c10a8c8009a' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
    '4275a0990e9139deee8d4e1c8c8979cc' => 
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
         'className' => 'Drupal\\entity\\Form\\EntityDuplicateFormTrait',
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
  ),
));