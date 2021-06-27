<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/serializer/Normalizer/NormalizerInterface.php-1590865085',
   'data' => 
  array (
    '4799221a1e6c6b665264e530543d4ae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface of normalizers.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'circularreferenceexception' => 'Symfony\\Component\\Serializer\\Exception\\CircularReferenceException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
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
    '800440ae801d18fb213b2b94711c69cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Normalizes an object into a set of arrays/scalars.
     *
     * @param mixed  $object  Object to normalize
     * @param string $format  Format the normalization result will be encoded as
     * @param array  $context Context options for the normalizer
     *
     * @return array|string|int|float|bool|null
     *
     * @throws InvalidArgumentException   Occurs when the object given is not a supported type for the normalizer
     * @throws CircularReferenceException Occurs when the normalizer detects a circular reference when no circular
     *                                    reference handler can fix it
     * @throws LogicException             Occurs when the normalizer is not called in an expected context
     * @throws ExceptionInterface         Occurs for all the other cases of errors
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'circularreferenceexception' => 'Symfony\\Component\\Serializer\\Exception\\CircularReferenceException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
         'functionName' => 'normalize',
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
    'e60613a13e43a470ab3cc1230310a907' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the given class is supported for normalization by this normalizer.
     *
     * @param mixed  $data   Data to normalize
     * @param string $format The format being (de-)serialized from or into
     *
     * @return bool
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Serializer\\Normalizer',
         'uses' => 
        array (
          'circularreferenceexception' => 'Symfony\\Component\\Serializer\\Exception\\CircularReferenceException',
          'exceptioninterface' => 'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface',
          'invalidargumentexception' => 'Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException',
          'logicexception' => 'Symfony\\Component\\Serializer\\Exception\\LogicException',
        ),
         'className' => 'Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface',
         'functionName' => 'supportsNormalization',
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