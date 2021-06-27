<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Form/ViewsForm.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1624732867',
   'data' => 
  array (
    '486d3c875a5ba0d5d2a5e5529784d247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for single- or multistep view forms.
 *
 * This class only dispatches logic to the form for the current step. The form
 * is always assumed to be multistep, even if it has only one step (which by
 * default is \\Drupal\\views\\Form\\ViewsFormMainForm). That way it is actually
 * possible for modules to have a multistep form if they need to.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    'c09c1b55db104818ed705189604c1daa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides dependency injection friendly methods for serialization.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '5446beba7a4b3b940205ad8b61377b42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of service IDs keyed by property name used for serialization.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    'ff2a8a4f352cb1b9519c78343dc8915e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of entity type IDs keyed by the property name of their storages.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    'dc9a15214cd84d0d4037997a195a074f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => '__sleep',
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
    'd978a206c0111da9d6ad7e267b1e202b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => '__wakeup',
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
    'b4b77ecea2aa2a59c7f4eb5e53646c19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => '__wakeup',
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
    '75d6118d3cc755888bbd22d57d6e0d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class resolver to get the subform form objects.
   *
   * @var \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '789a1d15e85fcb9e34c94f5427a398ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '2f2c06867325bf4a0d19aee5d133ea87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The url generator to generate the form action.
   *
   * @var \\Drupal\\Core\\Routing\\UrlGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '5f88640db6e470e3ed16f9224b7dfd79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID of the view.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    'a1bb24131093d5571f9006907aed131a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID of the active view\'s display.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '9343758820043e0de58090c54ccc46ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The arguments passed to the active view.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '08dd24017882cab0c941c24f31b84146' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ViewsForm object.
   *
   * @param \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface $class_resolver
   *   The class resolver to get the subform form objects.
   * @param \\Drupal\\Core\\Routing\\UrlGeneratorInterface $url_generator
   *   The url generator to generate the form action.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $requestStack
   *   The request stack.
   * @param string $view_id
   *   The ID of the view.
   * @param string $view_display_id
   *   The ID of the active view\'s display.
   * @param string[] $view_args
   *   The arguments passed to the active view.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    '224836024f7dabe6a71babbf711699f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'create',
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
    'ebbdfad5b81f1ee81922fa0dbe7b41d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a string for the form\'s base ID.
   *
   * @return string
   *   The string identifying the form\'s base ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'getBaseFormId',
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
    'fc0663bdf27f7f79e197ff83019b7ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'getFormId',
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
    '7d14577ff81bf977d93f1735daf89b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'buildForm',
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
    '1777206e5353f3a44207b61d241c842f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'validateForm',
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
    'b78498e6f951e945bc464f03a21441d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
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
    'ad6b6ddc074e4b8bfffce8957c579e41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the object used to build the step form.
   *
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form_state of the current form.
   *
   * @return \\Drupal\\Core\\Form\\FormInterface
   *   The form object to use.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Form',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'forminterface' => 'Drupal\\Core\\Form\\FormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'urlgeneratorinterface' => 'Drupal\\Core\\Routing\\UrlGeneratorInterface',
          'url' => 'Drupal\\Core\\Url',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\views\\Form\\ViewsForm',
         'functionName' => 'getFormObject',
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