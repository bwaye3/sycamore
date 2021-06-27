<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityFormInterface.php-1624732867',
   'data' => 
  array (
    'dd922cc08c3e291c8fd2f8f52b3a608c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for entity form classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
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
    '0078a7078bbb332e001ec799f38bb6c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the operation for this form.
   *
   * @param string $operation
   *   The name of the current operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setOperation',
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
    '7fa256013fddecbcbe4d38d5673d526b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the operation identifying the form.
   *
   * @return string
   *   The name of the operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'getOperation',
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
    '6934843ee767ad8b61b473dcfe95c199' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the form entity.
   *
   * The form entity which has been used for populating form element defaults.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The current form entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'getEntity',
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
    'e5b70798cf96620edb6cdd9cbe504061' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the form entity.
   *
   * Sets the form entity which will be used for populating form element
   * defaults. Usually, the form entity gets updated by
   * \\Drupal\\Core\\Entity\\EntityFormInterface::submit(), however this may
   * be used to completely exchange the form entity, e.g. when preparing the
   * rebuild of a multi-step form.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity the current form should operate upon.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setEntity',
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
    '6a4af0661ee3591ebfed007acc6b8be6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines which entity will be used by this form from a RouteMatch object.
   *
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   * @param string $entity_type_id
   *   The entity type identifier.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The entity object as determined from the passed-in route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'getEntityFromRouteMatch',
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
    '2b2d97a96c05e77babba66ae70d69147' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an updated entity object based upon the submitted form values.
   *
   * For building the updated entity object the form\'s entity is cloned and
   * the submitted form values are copied to entity properties. The form\'s
   * entity remains unchanged.
   *
   * @see \\Drupal\\Core\\Entity\\EntityFormInterface::getEntity()
   *
   * @param array $form
   *   A nested array form elements comprising the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   An updated copy of the form\'s entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'buildEntity',
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
    '3be11258fa5e175b61299116d48a7d7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form submission handler for the \'save\' action.
   *
   * Normally this method should be overridden to provide specific messages to
   * the user and redirect the form after the entity has been saved.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return int
   *   Either SAVED_NEW or SAVED_UPDATED, depending on the operation performed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
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
    '8dfb603d45919f79ed9a7ea8886e39f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service for this form.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The translation manager.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setStringTranslation',
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
    'bef9ef355d039e5853ac954c9e7c79ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the module handler for this form.
   *
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setModuleHandler',
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
    '4e1b15c99bb312554a21f4b5792d003d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the entity manager for this form.
   *
   * @param \\Drupal\\Core\\Entity\\EntityManagerInterface $entity_manager
   *   The entity manager.
   *
   * @return $this
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   * EntityFormInterface::setEntityTypeManager() instead.
   *
   * @see https://www.drupal.org/node/2549139
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setEntityManager',
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
    'd703b416a36bc479bc33ada308d27843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the entity type manager for this form.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'baseformidinterface' => 'Drupal\\Core\\Form\\BaseFormIdInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormInterface',
         'functionName' => 'setEntityTypeManager',
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