<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityDeleteFormTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ConfigDependencyDeleteFormTrait.php-1624732867',
   'data' => 
  array (
    '99f3e69bb484bbd2b1964b9f0263d90b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for an entity deletion form.
 *
 * This trait relies on the StringTranslationTrait and the logger method added
 * by FormBase.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
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
    '757760618d681e0f7aea592597ae027b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Lists affected configuration entities by a dependency removal.
 *
 * This trait relies on the StringTranslationTrait.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
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
    '163205f7fb52e18c56e6f380637badfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * Provided by \\Drupal\\Core\\StringTranslation\\StringTranslationTrait.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 't',
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
    '4a9793ef7a7a3bf2f8061afc97c158a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds form elements to list affected configuration entities.
   *
   * @param array $form
   *   The form array to add elements to.
   * @param string $type
   *   The type of dependency being checked. Either \'module\', \'theme\', \'config\'
   *   or \'content\'.
   * @param array $names
   *   The specific names to check. If $type equals \'module\' or \'theme\' then it
   *   should be a list of module names or theme names. In the case of \'config\'
   *   or \'content\' it should be a list of configuration dependency names.
   * @param \\Drupal\\Core\\Config\\ConfigManagerInterface $config_manager
   *   The config manager.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   *
   * @see \\Drupal\\Core\\Config\\ConfigManagerInterface::getConfigEntitiesToChangeOnDependencyRemoval()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'addDependencyListsToForm',
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
    '584fb659c43f6373f4be1116eaeeb3ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\Entity\\ConfigEntityInterface  $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'configmanagerinterface' => 'Drupal\\Core\\Config\\ConfigManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'addDependencyListsToForm',
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
    '4cc03d5df47d7b8f6e3adc0b8fe1b6f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity of this form.
   *
   * Provided by \\Drupal\\Core\\Entity\\EntityForm.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
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
    'dea5738206c29c5070edcd2691e3b80f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the logger for a specific channel.
   *
   * Provided by \\Drupal\\Core\\Form\\FormBase.
   *
   * @param string $channel
   *   The name of the channel.
   *
   * @return \\Psr\\Log\\LoggerInterface
   *   The logger for this channel.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'logger',
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
    '2d0970e4dc4ff4014c3f6e3c714ff924' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'getQuestion',
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
    '95b657b1c664cca22f57313d07ade31f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'getConfirmText',
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
    '691c7d9fa4fcd4ee302afc685955b434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the message to display to the user after deleting the entity.
   *
   * @return string
   *   The translated string of the deletion message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'getDeletionMessage',
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
    '68d7515ddd8bbc7b9ea28dc8f213da00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'getCancelUrl',
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
    'fd67f4863589ed5e8e472f8370ae6d0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL where the user should be redirected after deletion.
   *
   * @return \\Drupal\\Core\\Url
   *   The redirect URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'getRedirectUrl',
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
    'd71b1971e064e2e75e2b15c8928a4dc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs a message about the deleted entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'logDeletionMessage',
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
    '236f18c3e0c199ca2681716f93ae05a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'configdependencydeleteformtrait' => 'Drupal\\Core\\Config\\Entity\\ConfigDependencyDeleteFormTrait',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDeleteFormTrait',
         'functionName' => 'submitForm',
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