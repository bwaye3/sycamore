<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/dependency-injection/Container.php-1590872761',
   'data' => 
  array (
    '29f66c6935e573b1759859e8234dd970' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Container is a dependency injection container.
 *
 * It gives access to object instances (services).
 * Services and parameters are simple key/pair stores.
 * The container can have four possible behaviors when a service
 * does not exist (or is not initialized for the last case):
 *
 *  * EXCEPTION_ON_INVALID_REFERENCE: Throws an exception (the default)
 *  * NULL_ON_INVALID_REFERENCE:      Returns null
 *  * IGNORE_ON_INVALID_REFERENCE:    Ignores the wrapping command asking for the reference
 *                                    (for instance, ignore a setter if the service does not exist)
 *  * IGNORE_ON_UNINITIALIZED_REFERENCE: Ignores/returns null for uninitialized services or invalid references
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
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
    '2dc476346264cf1745429e3b67ef1854' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
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
    'a076d831b21b015686cc0ba62dc3f2ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compiles the container.
     *
     * This method does two things:
     *
     *  * Parameter values are resolved;
     *  * The parameter bag is frozen.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'compile',
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
    '6781a7893edadb545740780c98ff9c99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the container is compiled.
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'isCompiled',
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
    '9b007ee7655d6a60860a926c96bd39b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the container parameter bag are frozen.
     *
     * @deprecated since version 3.3, to be removed in 4.0.
     *
     * @return bool true if the container parameter bag are frozen, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'isFrozen',
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
    '675079721ccce0ecb387d1696f2e0ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the service container parameter bag.
     *
     * @return ParameterBagInterface A ParameterBagInterface instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'getParameterBag',
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
    'a792abd8aea7bb217cc7ecb5b359c7a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a parameter.
     *
     * @param string $name The parameter name
     *
     * @return mixed The parameter value
     *
     * @throws InvalidArgumentException if the parameter is not defined
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'getParameter',
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
    '79c8176ac73c2856cf0359ad28920002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if a parameter exists.
     *
     * @param string $name The parameter name
     *
     * @return bool The presence of parameter in container
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'hasParameter',
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
    'dd8df58b14a71becae5105e43f3de95f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a parameter.
     *
     * @param string $name  The parameter name
     * @param mixed  $value The parameter value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
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
    '4f878fa4c29aaeafeca12308c2c5b609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a service.
     *
     * Setting a synthetic service to null resets it: has() returns false and get()
     * behaves in the same way as if the service was never created.
     *
     * @param string      $id      The service identifier
     * @param object|null $service The service instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
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
    '94b260e823377f847d6bbbdbf5ee9875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the given service is defined.
     *
     * @param string $id The service identifier
     *
     * @return bool true if the service is defined, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'has',
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
    '496266ddfed2f9994e8e205b6013f273' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a service.
     *
     * If a service is defined both through a set() method and
     * with a get{$id}Service() method, the former has always precedence.
     *
     * @param string $id              The service identifier
     * @param int    $invalidBehavior The behavior when the service does not exist
     *
     * @return object|null The associated service
     *
     * @throws ServiceCircularReferenceException When a circular reference is detected
     * @throws ServiceNotFoundException          When the service is not defined
     * @throws \\Exception                        if an exception has been thrown when the service has been resolved
     *
     * @see Reference
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'get',
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
    'cfa326655d5b22af9b521a91a3959223' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the given service has actually been initialized.
     *
     * @param string $id The service identifier
     *
     * @return bool true if service has already been initialized, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'initialized',
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
    '69914b7442c202c3c79bfef8be86fe13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'reset',
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
    '08d59257a2cf4ee93733c1c8091d882d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets all service ids.
     *
     * @return string[] An array of all defined service ids
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'getServiceIds',
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
    '0e10a25e2f787e5197e6037e6afa5982' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets service ids that existed at compile time.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'getRemovedIds',
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
    '9d6225280da8f851ea04d6378a6dfa8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Camelizes a string.
     *
     * @param string $id A string to camelize
     *
     * @return string The camelized string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'camelize',
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
    'e5c84fb0b6e67a05daa05de3ababb9f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * A string to underscore.
     *
     * @param string $id The string to underscore
     *
     * @return string The underscored string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'underscore',
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
    '11bac5f87e6155dea7f4c9ee7a3fe232' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a service by requiring its factory file.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'load',
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
    'a3cc65a294acf8da01424f850099de79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fetches a variable from the environment.
     *
     * @param string $name The name of the environment variable
     *
     * @return mixed The value to use for the provided environment variable name
     *
     * @throws EnvNotFoundException When the environment variable is not found and has no default value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'getEnv',
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
    '8eaa54e74beea88872a9e9de1cc35e45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the case sensitive id used at registration time.
     *
     * @param string $id
     *
     * @return string
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
          'envnotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\EnvNotFoundException',
          'invalidargumentexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException',
          'parametercircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ParameterCircularReferenceException',
          'servicecircularreferenceexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceCircularReferenceException',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'envplaceholderparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\EnvPlaceholderParameterBag',
          'frozenparameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag',
          'parameterbaginterface' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface',
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\Container',
         'functionName' => 'normalizeId',
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