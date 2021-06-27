<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/ContainerBuilder.php-1624732867',
   'data' => 
  array (
    '3655f33284c335ef34e93ec9a851cf46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Drupal\'s dependency injection container builder.
 *
 * @todo Submit upstream patches to Symfony to not require these overrides.
 *
 * @ingroup container
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
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
    'fc7664dd52d33f8d40b2c5966c90468e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Doctrine\\Instantiator\\InstantiatorInterface|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
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
    'e573b6c622f977f8c8416450d94acdca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
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
    '8c935f6737d4a9615e019b04235a261b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the currently set proxy instantiator or instantiates one.
   *
   * @return InstantiatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'getProxyInstantiator',
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
    '0097091cdd347061a548d45da1b4419a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A 1to1 copy of parent::shareService.
   *
   * @todo https://www.drupal.org/project/drupal/issues/2937010 Since Symfony
   *   3.4 this is not a 1to1 copy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'shareService',
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
    'e179dd4475e48f288178295c8690e33e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides Symfony\\Component\\DependencyInjection\\ContainerBuilder::set().
   *
   * Drupal\'s container builder can be used at runtime after compilation, so we
   * override Symfony\'s ContainerBuilder\'s restriction on setting services in a
   * frozen builder.
   *
   * @todo Restrict this to synthetic services only. Ideally, the upstream
   *   ContainerBuilder class should be fixed to allow setting synthetic
   *   services in a frozen builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'set',
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
    'd19f279168fbb8906f66847d2946e49b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'register',
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
    'e6e5a68bcf98d1d60c907e8fcb22f957' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setAlias',
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
    '2f63ec5ab4a8feb9c1b7894d17e75ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setDefinition',
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
    '0a8a3ec2350a7fe58494cc0880df96e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'setParameter',
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
    '81889ad896a1cb1f721008e18e2be66c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A 1to1 copy of parent::callMethod.
   *
   * @todo https://www.drupal.org/project/drupal/issues/2937010 Since Symfony
   *   3.4 this is not a 1to1 copy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
         'functionName' => 'callMethod',
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
    '8e2d43e491a76624c1d19e626196458f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'symfonycontainerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'symfonycontainer' => 'Symfony\\Component\\DependencyInjection\\Container',
          'definition' => 'Symfony\\Component\\DependencyInjection\\Definition',
          'realserviceinstantiator' => 'Symfony\\Component\\DependencyInjection\\LazyProxy\\Instantiator\\RealServiceInstantiator',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
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
  ),
));