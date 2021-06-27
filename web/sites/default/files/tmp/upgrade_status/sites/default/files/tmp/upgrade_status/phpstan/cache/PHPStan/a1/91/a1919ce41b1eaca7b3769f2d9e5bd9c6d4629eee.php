<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/consolidation/output-formatters/src/Options/FormatterOptions.php-1602389732',
   'data' => 
  array (
    '45d09be0ab9dc2ebfa6bf8c614ad8325' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * FormetterOptions holds information that affects the way a formatter
 * renders its output.
 *
 * There are three places where a formatter might get options from:
 *
 * 1. Configuration associated with the command that produced the output.
 *    This is passed in to FormatterManager::write() along with the data
 *    to format.  It might originally come from annotations on the command,
 *    or it might come from another source.  Examples include the field labels
 *    for a table, or the default list of fields to display.
 *
 * 2. Options specified by the user, e.g. by commandline options.
 *
 * 3. Default values associated with the formatter itself.
 *
 * This class caches configuration from sources (1) and (2), and expects
 * to be provided the defaults, (3), whenever a value is requested.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
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
    'e2e270339685f2137ea3785e6a185033' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** var array */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
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
    '01c73ffc2365b4f1d74a960d559ef145' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** var InputInterface */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
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
    '66e919629505c5bffd5d1af113334d4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new FormatterOptions with the configuration data and the
     * user-specified options for this request.
     *
     * @see FormatterOptions::setInput()
     * @param array $configurationData
     * @param array $options
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
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
    'ffd52a8a9f212d03b28f83b6b7604814' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new FormatterOptions object with new configuration data (provided),
     * and the same options data as this instance.
     *
     * @param array $configurationData
     * @return FormatterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'override',
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
    'faa35df3eed389e7f44181a1a6807932' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a formatter option
     *
     * @param string $key
     * @param array $defaults
     * @param mixed $default
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
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
    'e90311595e0cc6deb630baa69620a7e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the XmlSchema to use with --format=xml for data types that support
     * that.  This is used when an array needs to be converted into xml.
     *
     * @return XmlSchema
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getXmlSchema',
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
    'bc364cdf16195c5a22cad9fd9a9fbe0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Determine the format that was requested by the caller.
     *
     * @param array $defaults
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getFormat',
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
    'afdd362543b920b993708a2c6d22bc5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Look up a key, and return its raw value.
     *
     * @param string $key
     * @param array $defaults
     * @param mixed $default
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'fetch',
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
    '7009b1e31f20c512fecd985df72dfeca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reduce provided defaults to the single item identified by \'$key\',
     * if it exists, or an empty array otherwise.
     *
     * @param string $key
     * @param array $defaults
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'defaultsForKey',
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
    '7f4baba879afac34909834a016961c18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Look up all of the items associated with the provided defaults.
     *
     * @param array $defaults
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'fetchRawValues',
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
    '565b3fea317b3085f31a2fd34a777bab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Given the raw value for a specific key, do any type conversion
     * (e.g. from a textual list to an array) needed for the data.
     *
     * @param string $key
     * @param mixed $value
     * @return mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'parse',
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
    '2c86eaeaa0f3602564ef0571405eea0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Convert from a textual list to an array
     *
     * @param string $value
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'parsePropertyList',
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
    '09992edb88247b57fdff62973550c2e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Given a specific key, return the class method name of the
     * parsing method for data stored under this key.
     *
     * @param string $key
     * @return string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getOptionFormat',
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
    '8238b14328a0d07e390d0d1a459e93b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change the configuration data for this formatter options object.
     *
     * @param array $configurationData
     * @return FormatterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setConfigurationData',
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
    '778bb177d6dd777a31314f94ea28f5e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change one configuration value for this formatter option.
     *
     * @param string $key
     * @param mixed $value
     * @return FormetterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setConfigurationValue',
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
    '4c90779baf799e150e67126b597886fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change one configuration value for this formatter option, but only
     * if it does not already have a value set.
     *
     * @param string $key
     * @param mixed $value
     * @return FormetterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setConfigurationDefault',
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
    'de92387a84e9542d6b276dd2e50d5296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return a reference to the configuration data for this object.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getConfigurationData',
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
    '359c8c69387ff5589a6feed9f05b14d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Set all of the options that were specified by the user for this request.
     *
     * @param array $options
     * @return FormatterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setOptions',
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
    'a904ecc0458c6a9e412807ba83933826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Change one option value specified by the user for this request.
     *
     * @param string $key
     * @param mixed $value
     * @return FormatterOptions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setOption',
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
    'f42043eab2b862357dad147872790a44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return a reference to the user-specified options for this request.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getOptions',
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
    'bd8967a2e2191ee8f4cac2421d5999f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Provide a Symfony Console InputInterface containing the user-specified
     * options for this request.
     *
     * @param InputInterface $input
     * @return type
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'setInput',
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
    '9ecff7a350a9cc6dfef29c9d2a853a0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return all of the options from the provided $defaults array that
     * exist in our InputInterface object.
     *
     * @param array $defaults
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Consolidation\\OutputFormatters\\Options',
         'uses' => 
        array (
          'inputinterface' => 'Symfony\\Component\\Console\\Input\\InputInterface',
          'propertyparser' => 'Consolidation\\OutputFormatters\\Transformations\\PropertyParser',
          'xmlschema' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchema',
          'xmlschemainterface' => 'Consolidation\\OutputFormatters\\StructuredData\\Xml\\XmlSchemaInterface',
        ),
         'className' => 'Consolidation\\OutputFormatters\\Options\\FormatterOptions',
         'functionName' => 'getInputOptions',
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