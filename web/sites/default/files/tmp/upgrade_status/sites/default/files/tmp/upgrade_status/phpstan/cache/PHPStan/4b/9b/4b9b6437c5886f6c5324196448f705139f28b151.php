<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/dependency-injection/ResettableContainerInterface.php-1590872761',
   'data' => 
  array (
    '57d523e3f2f623e54281a0a380808afd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ResettableContainerInterface defines additional resetting functionality
 * for containers, allowing to release shared services when the container is
 * not needed anymore.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ResettableContainerInterface',
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
    'bc76a21c5f96fd9ec8c4a4631c5331bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resets shared services from the container.
     *
     * The container is not intended to be used again after being reset in a normal workflow. This method is
     * meant as a way to release references for ref-counting.
     * A subsequent call to ContainerInterface::get will recreate a new instance of the shared service.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\DependencyInjection\\ResettableContainerInterface',
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
  ),
));