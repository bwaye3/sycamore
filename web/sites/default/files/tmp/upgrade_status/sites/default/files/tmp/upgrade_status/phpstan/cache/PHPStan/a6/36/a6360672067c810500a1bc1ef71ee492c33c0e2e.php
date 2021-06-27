<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/soap/soap.stub-1624000535',
   'data' => 
  array (
    '8295729e1de43eeb24733ce45bd3318d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The SoapClient class provides a client for SOAP 1.1, SOAP 1.2 servers. It can be used in WSDL
 * or non-WSDL mode.
 * @link https://php.net/manual/en/class.soapclient.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
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
    'a132f1ce3da68fa21377767d996e6f6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapClient constructor
     * @link https://php.net/manual/en/soapclient.construct.php
     * @param string|null $wsdl <p>
     * URI of the WSDL file or <b>NULL</b> if working in
     * non-WSDL mode.
     * </p>
     * <p>
     * During development, WSDL caching may be disabled by the
     * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
     * otherwise changes made to the WSDL file will have no effect until
     * soap.wsdl_cache_ttl is expired.
     * </p>
     * @param array $options [optional] <p>
     * An array of options. If working in WSDL mode, this parameter is optional.
     * If working in non-WSDL mode, the location and
     * uri options must be set, where location
     * is the URL of the SOAP server to send the request to, and uri
     * is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The style and use options only work in
     * non-WSDL mode. In WSDL mode, they come from the WSDL file.
     * </p>
     * <p>
     * The soap_version option should be one of either
     * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
     * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
     * </p>
     * <p>
     * For HTTP authentication, the login and
     * password options can be used to supply credentials.
     * For making an HTTP connection through
     * a proxy server, the options proxy_host,
     * proxy_port, proxy_login
     * and proxy_password are also available.
     * For HTTPS client certificate authentication use
     * local_cert and passphrase options. An
     * authentication may be supplied in the authentication
     * option. The authentication method may be either
     * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
     * <b>SOAP_AUTHENTICATION_DIGEST</b>.
     * </p>
     * <p>
     * The compression option allows to use compression
     * of HTTP SOAP requests and responses.
     * </p>
     * <p>
     * The encoding option defines internal character
     * encoding. This option does not change the encoding of SOAP requests (it is
     * always utf-8), but converts strings into it.
     * </p>
     * <p>
     * The trace option enables tracing of request so faults
     * can be backtraced. This defaults to <b>FALSE</b>
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * Setting the boolean trace option enables use of the
     * methods
     * SoapClient->__getLastRequest,
     * SoapClient->__getLastRequestHeaders,
     * SoapClient->__getLastResponse and
     * SoapClient->__getLastResponseHeaders.
     * </p>
     * <p>
     * The exceptions option is a boolean value defining whether
     * soap errors throw exceptions of type
     * SoapFault.
     * </p>
     * <p>
     * The connection_timeout option defines a timeout in seconds
     * for the connection to the SOAP service. This option does not define a timeout
     * for services with slow responses. To limit the time to wait for calls to finish the
     * default_socket_timeout setting
     * is available.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * The user_agent option specifies string to use in
     * User-Agent header.
     * </p>
     * <p>
     * The stream_context option is a resource
     * for context.
     * </p>
     * <p>
     * The features option is a bitmask of
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
     * </p>
     * <p>
     * The keep_alive option is a boolean value defining whether
     * to send the Connection: Keep-Alive header or
     * Connection: close.
     * </p>
     * <p>
     * The ssl_method option is one of
     * <b>SOAP_SSL_METHOD_TLS</b>,
     * <b>SOAP_SSL_METHOD_SSLv2</b>,
     * <b>SOAP_SSL_METHOD_SSLv3</b> or
     * <b>SOAP_SSL_METHOD_SSLv23</b>.
     * </p>
     * @since 5.0.1
     *
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => 'SoapClient',
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
    '61c38036b91889778c491dd29a9be39f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapClient constructor
     * @link https://php.net/manual/en/soapclient.construct.php
     * @param string|null $wsdl <p>
     * URI of the WSDL file or <b>NULL</b> if working in
     * non-WSDL mode.
     * </p>
     * <p>
     * During development, WSDL caching may be disabled by the
     * use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
     * otherwise changes made to the WSDL file will have no effect until
     * soap.wsdl_cache_ttl is expired.
     * </p>
     * @param array $options [optional] <p>
     * An array of options. If working in WSDL mode, this parameter is optional.
     * If working in non-WSDL mode, the location and
     * uri options must be set, where location
     * is the URL of the SOAP server to send the request to, and uri
     * is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The style and use options only work in
     * non-WSDL mode. In WSDL mode, they come from the WSDL file.
     * </p>
     * <p>
     * The soap_version option should be one of either
     * <b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
     * select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
     * </p>
     * <p>
     * For HTTP authentication, the login and
     * password options can be used to supply credentials.
     * For making an HTTP connection through
     * a proxy server, the options proxy_host,
     * proxy_port, proxy_login
     * and proxy_password are also available.
     * For HTTPS client certificate authentication use
     * local_cert and passphrase options. An
     * authentication may be supplied in the authentication
     * option. The authentication method may be either
     * <b>SOAP_AUTHENTICATION_BASIC</b> (default) or
     * <b>SOAP_AUTHENTICATION_DIGEST</b>.
     * </p>
     * <p>
     * The compression option allows to use compression
     * of HTTP SOAP requests and responses.
     * </p>
     * <p>
     * The encoding option defines internal character
     * encoding. This option does not change the encoding of SOAP requests (it is
     * always utf-8), but converts strings into it.
     * </p>
     * <p>
     * The trace option enables tracing of request so faults
     * can be backtraced. This defaults to <b>FALSE</b>
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * Setting the boolean trace option enables use of the
     * methods
     * SoapClient->__getLastRequest,
     * SoapClient->__getLastRequestHeaders,
     * SoapClient->__getLastResponse and
     * SoapClient->__getLastResponseHeaders.
     * </p>
     * <p>
     * The exceptions option is a boolean value defining whether
     * soap errors throw exceptions of type
     * SoapFault.
     * </p>
     * <p>
     * The connection_timeout option defines a timeout in seconds
     * for the connection to the SOAP service. This option does not define a timeout
     * for services with slow responses. To limit the time to wait for calls to finish the
     * default_socket_timeout setting
     * is available.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * The user_agent option specifies string to use in
     * User-Agent header.
     * </p>
     * <p>
     * The stream_context option is a resource
     * for context.
     * </p>
     * <p>
     * The features option is a bitmask of
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>,
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>.
     * </p>
     * <p>
     * The keep_alive option is a boolean value defining whether
     * to send the Connection: Keep-Alive header or
     * Connection: close.
     * </p>
     * <p>
     * The ssl_method option is one of
     * <b>SOAP_SSL_METHOD_TLS</b>,
     * <b>SOAP_SSL_METHOD_SSLv2</b>,
     * <b>SOAP_SSL_METHOD_SSLv3</b> or
     * <b>SOAP_SSL_METHOD_SSLv23</b>.
     * </p>
     * @throws SoapFault A SoapFault exception will be thrown if the wsdl URI cannot be loaded.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
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
    'c0078cef6099222b9476d9a8f507546f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @link https://php.net/manual/en/soapclient.call.php
     * @param string $name
     * @param array $args
     * @return mixed
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__call',
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
    'e7780c691b4d76cabc70f9007e4eb9d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Calls a SOAP function
     * @link https://php.net/manual/en/soapclient.soapcall.php
     * @param string $name <p>
     * The name of the SOAP function to call.
     * </p>
     * @param array $args <p>
     * An array of the arguments to pass to the function. This can be either
     * an ordered or an associative array. Note that most SOAP servers require
     * parameter names to be provided, in which case this must be an
     * associative array.
     * </p>
     * @param array $options [optional] <p>
     * An associative array of options to pass to the client.
     * </p>
     * <p>
     * The location option is the URL of the remote Web service.
     * </p>
     * <p>
     * The uri option is the target namespace of the SOAP service.
     * </p>
     * <p>
     * The soapaction option is the action to call.
     * </p>
     * @param mixed $inputHeaders [optional] <p>
     * An array of headers to be sent along with the SOAP request.
     * </p>
     * @param array &$outputHeaders [optional] <p>
     * If supplied, this array will be filled with the headers from the SOAP response.
     * </p>
     * @return mixed SOAP functions may return one, or multiple values. If only one value is returned
     * by the SOAP function, the return value of __soapCall will be
     * a simple value (e.g. an integer, a string, etc). If multiple values are
     * returned, __soapCall will return
     * an associative array of named output parameters.
     * </p>
     * <p>
     * On error, if the SoapClient object was constructed with the exceptions
     * option set to <b>FALSE</b>, a SoapFault object will be returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__soapCall',
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
    '401ddb9cff9203cc46d05aaba43d9631' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns last SOAP request
     * @link https://php.net/manual/en/soapclient.getlastrequest.php
     * @return string The last SOAP request, as an XML string.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getLastRequest',
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
    'c6f9488cb2f83ce1b26df1132e6246fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns last SOAP response
     * @link https://php.net/manual/en/soapclient.getlastresponse.php
     * @return string The last SOAP response, as an XML string.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getLastResponse',
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
    '376f2ac1124e5cbe15d11603549d2e44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the SOAP headers from the last request
     * @link https://php.net/manual/en/soapclient.getlastrequestheaders.php
     * @return string The last SOAP request headers.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getLastRequestHeaders',
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
    '7ab1c4bc3079dd4776c6cec7da83fe3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the SOAP headers from the last response
     * @link https://php.net/manual/en/soapclient.getlastresponseheaders.php
     * @return string The last SOAP response headers.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getLastResponseHeaders',
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
    '4481f7f597994e0e72d1a05328e8cd73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns list of available SOAP functions
     * @link https://php.net/manual/en/soapclient.getfunctions.php
     * @return array The array of SOAP function prototypes, detailing the return type,
     * the function name and type-hinted parameters.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getFunctions',
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
    'a5e962a8612e63530b56f9a109f3e27e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of SOAP types
     * @link https://php.net/manual/en/soapclient.gettypes.php
     * @return array The array of SOAP types, detailing all structures and types.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getTypes',
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
    'd715447cf5fa01f8dde76150dd234a9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of all cookies
     * @link https://php.net/manual/en/soapclient.getcookies.php
     * @return array The array of all cookies
     * @since 5.4.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__getCookies',
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
    'fc0f12356a9db0fedb0c824268a262f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs a SOAP request
     * @link https://php.net/manual/en/soapclient.dorequest.php
     * @param string $request <p>
     * The XML SOAP request.
     * </p>
     * @param string $location <p>
     * The URL to request.
     * </p>
     * @param string $action <p>
     * The SOAP action.
     * </p>
     * @param int $version <p>
     * The SOAP version.
     * </p>
     * @param bool|int $oneWay [optional] <p>
     * If $oneWay is set to 1, this method returns nothing.
     * Use this where a response is not expected.
     * </p>
     * @return string|null The XML SOAP response.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__doRequest',
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
    'fa4fdd6aa353e3e0f99ee3ddd2df193f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The __setCookie purpose
     * @link https://php.net/manual/en/soapclient.setcookie.php
     * @param string $name <p>
     * The name of the cookie.
     * </p>
     * @param string $value [optional] <p>
     * The value of the cookie. If not specified, the cookie will be deleted.
     * </p>
     * @return void No value is returned.
     * @since 5.0.4
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__setCookie',
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
    '3dc6b4954987648af4e1de3202086ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the location of the Web service to use
     * @link https://php.net/manual/en/soapclient.setlocation.php
     * @param string $location [optional] <p>
     * The new endpoint URL.
     * </p>
     * @return string|null The old endpoint URL.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__setLocation',
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
    '095799c6f8791a9d593e09893b714113' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets SOAP headers for subsequent calls
     * @link https://php.net/manual/en/soapclient.setsoapheaders.php
     * @param mixed $headers [optional] <p>
     * The headers to be set. It could be <b>SoapHeader</b>
     * object or array of <b>SoapHeader</b> objects.
     * If not specified or set to <b>NULL</b>, the headers will be deleted.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * @since 5.0.5
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapClient',
         'functionName' => '__setSoapHeaders',
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
    '68eee7a7a48dd49166fd938279b95df0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A class representing a variable or object for use with SOAP services.
 * @link https://php.net/manual/en/class.soapvar.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapVar',
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
    '938b58ae7c03f589d8ce99664276ca5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapVar constructor
     * @link https://php.net/manual/en/soapvar.construct.php
     * @param mixed $data <p>
     * The data to pass or return.
     * </p>
     * @param int|null $encoding <p>
     * The encoding ID, one of the XSD_... constants.
     * </p>
     * @param string $typeName [optional] <p>
     * The type name.
     * </p>
     * @param string $typeNamespace [optional] <p>
     * The type namespace.
     * </p>
     * @param string $nodeName [optional] <p>
     * The XML node name.
     * </p>
     * @param string $nodeNamespace [optional] <p>
     * The XML node namespace.
     * </p>
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapVar',
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
    '16f4bb4152a7cbfb37ff5609f3c9fedc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapVar constructor
     * @link https://php.net/manual/en/soapvar.construct.php
     * @param mixed $data <p>
     * The data to pass or return.
     * </p>
     * @param int|null $encoding <p>
     * The encoding ID, one of the XSD_... constants.
     * </p>
     * @param string $type_name [optional] <p>
     * The type name.
     * </p>
     * @param string $type_namespace [optional] <p>
     * The type namespace.
     * </p>
     * @param string $node_name [optional] <p>
     * The XML node name.
     * </p>
     * @param string $node_namespace [optional] <p>
     * The XML node namespace.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapVar',
         'functionName' => 'SoapVar',
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
    'cccbb63c77e02e7fc3f4cfafd5d9b7fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The SoapServer class provides a server for the SOAP 1.1 and SOAP 1.2 protocols. It can be used with or without a WSDL service description.
 * @link https://php.net/manual/en/class.soapserver.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
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
    '0370d9331659e0caa75346537b340c14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapServer constructor
     * @link https://php.net/manual/en/soapserver.soapserver.php
     * @param mixed $wsdl <p>
     * To use the SoapServer in WSDL mode, pass the URI of a WSDL file.
     * Otherwise, pass <b>NULL</b> and set the uri option to the
     * target namespace for the server.
     * </p>
     * @param array $options [optional] <p>
     * Allow setting a default SOAP version (soap_version),
     * internal character encoding (encoding),
     * and actor URI (actor).
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * There is also a features option which can be set to
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>,
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>.
     * </p>
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
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
    '6e510e4ebf7bcaf1a1013410bbb366ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapServer constructor
     * @link https://php.net/manual/en/soapserver.soapserver.php
     * @param mixed $wsdl <p>
     * To use the SoapServer in WSDL mode, pass the URI of a WSDL file.
     * Otherwise, pass <b>NULL</b> and set the uri option to the
     * target namespace for the server.
     * </p>
     * @param array $options [optional] <p>
     * Allow setting a default SOAP version (soap_version),
     * internal character encoding (encoding),
     * and actor URI (actor).
     * </p>
     * <p>
     * The classmap option can be used to map some WSDL
     * types to PHP classes. This option must be an array with WSDL types
     * as keys and names of PHP classes as values.
     * </p>
     * <p>
     * The typemap option is an array of type mappings.
     * Type mapping is an array with keys type_name,
     * type_ns (namespace URI), from_xml
     * (callback accepting one string parameter) and to_xml
     * (callback accepting one object parameter).
     * </p>
     * <p>
     * The cache_wsdl option is one of
     * <b>WSDL_CACHE_NONE</b>,
     * <b>WSDL_CACHE_DISK</b>,
     * <b>WSDL_CACHE_MEMORY</b> or
     * <b>WSDL_CACHE_BOTH</b>.
     * </p>
     * <p>
     * There is also a features option which can be set to
     * <b>SOAP_WAIT_ONE_WAY_CALLS</b>,
     * <b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
     * <b>SOAP_USE_XSI_ARRAY_TYPE</b>.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'SoapServer',
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
    'b34ff40d3a9f3b972b5deac006304f51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets SoapServer persistence mode
     * @link https://php.net/manual/en/soapserver.setpersistence.php
     * @param int $mode <p>
     * One of the SOAP_PERSISTENCE_XXX constants.
     * </p>
     * <p>
     * <b>SOAP_PERSISTENCE_REQUEST</b> - SoapServer data does not persist between
     * requests. This is the default behavior of any SoapServer
     * object after setClass is called.
     * </p>
     * <p>
     * <b>SOAP_PERSISTENCE_SESSION</b> - SoapServer data persists between requests.
     * This is accomplished by serializing the SoapServer class data into
     * $_SESSION[\'_bogus_session_name\'], because of this
     * <b>session_start</b> must be called before this persistence mode is set.
     * </p>
     * @return void No value is returned.
     * @since 5.1.2
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'setPersistence',
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
    '064954a4451feb49fd6756be2308cc88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the class which handles SOAP requests
     * @link https://php.net/manual/en/soapserver.setclass.php
     * @param string $class <p>
     * The name of the exported class.
     * </p>
     * @param mixed ...$args [optional] These optional parameters will be passed to the default class constructor during object creation.
     * @return void No value is returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'setClass',
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
    '066df377d80ece811966d894e6a7cec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the object which will be used to handle SOAP requests
     * @link https://php.net/manual/en/soapserver.setobject.php
     * @param object $object <p>
     * The object to handle the requests.
     * </p>
     * @return void No value is returned.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'setObject',
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
    '21646ee210742116a2a656d60667a775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds one or more functions to handle SOAP requests
     * @link https://php.net/manual/en/soapserver.addfunction.php
     * @param mixed $functions <p>
     * To export one function, pass the function name into this parameter as
     * a string.
     * </p>
     * <p>
     * To export several functions, pass an array of function names.
     * </p>
     * <p>
     * To export all the functions, pass a special constant <b>SOAP_FUNCTIONS_ALL</b>.
     * </p>
     * <p>
     * <i>functions</i> must receive all input arguments in the same
     * order as defined in the WSDL file (They should not receive any output parameters
     * as arguments) and return one or more values. To return several values they must
     * return an array with named output parameters.
     * </p>
     * @return void No value is returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'addFunction',
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
    '681c9d777865e2b29de3541c4905b037' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns list of defined functions
     * @link https://php.net/manual/en/soapserver.getfunctions.php
     * @return array An array of the defined functions.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'getFunctions',
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
    'f9ce2f211385a00bbc2e06719e231eab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Handles a SOAP request
     * @link https://php.net/manual/en/soapserver.handle.php
     * @param string $request [optional] <p>
     * The SOAP request. If this argument is omitted, the request is assumed to be
     * in the raw POST data of the HTTP request.
     * </p>
     * @return void No value is returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'handle',
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
    'd2640731d5118bc75094b6a6241eaff4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Issue SoapServer fault indicating an error
     * @link https://php.net/manual/en/soapserver.fault.php
     * @param string $code <p>
     * The error code to return
     * </p>
     * @param string $string <p>
     * A brief description of the error
     * </p>
     * @param string $actor [optional] <p>
     * A string identifying the actor that caused the fault.
     * </p>
     * @param string $details [optional] <p>
     * More details of the fault
     * </p>
     * @param string $name [optional] <p>
     * The name of the fault. This can be used to select a name from a WSDL file.
     * </p>
     * @return void No value is returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'fault',
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
    'a7f3613abd788f7ee6daa6a8000d4f91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Add a SOAP header to the response
     * @link https://php.net/manual/en/soapserver.addsoapheader.php
     * @param SoapHeader $header <p>
     * The header to be returned.
     * </p>
     * @return void No value is returned.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapServer',
         'functionName' => 'addSoapHeader',
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
    '170b731931e570360df25077001e0684' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a SOAP fault.
 * @link https://php.net/manual/en/class.soapfault.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
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
    'f30b00aed64d63b6644bd94f561ffad3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
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
    '0dd21fb95f0a6f481c1aca9404f8aba0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var mixed
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
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
    '24db114a50befea7ea026bc21d86fcab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapFault constructor
     * @link https://php.net/manual/en/soapfault.soapfault.php
     * @param string $code <p>
     * The error code of the <b>SoapFault</b>.
     * </p>
     * @param string $string <p>
     * The error message of the <b>SoapFault</b>.
     * </p>
     * @param string $actor [optional] <p>
     * A string identifying the actor that caused the error.
     * </p>
     * @param string $details [optional] <p>
     * More details about the cause of the error.
     * </p>
     * @param string $name [optional] <p>
     * Can be used to select the proper fault encoding from WSDL.
     * </p>
     * @param mixed $headerFault [optional] <p>
     * Can be used during SOAP header handling to report an error in the
     * response header.
     * </p>
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
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
    'a30ad7d15d13b541c04173da9b9ff8da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapFault constructor
     * @link https://php.net/manual/en/soapfault.soapfault.php
     * @param string $faultcode <p>
     * The error code of the <b>SoapFault</b>.
     * </p>
     * @param string $faultstring <p>
     * The error message of the <b>SoapFault</b>.
     * </p>
     * @param string $faultactor [optional] <p>
     * A string identifying the actor that caused the error.
     * </p>
     * @param string $detail [optional] <p>
     * More details about the cause of the error.
     * </p>
     * @param string $faultname [optional] <p>
     * Can be used to select the proper fault encoding from WSDL.
     * </p>
     * @param mixed $headerfault [optional] <p>
     * Can be used during SOAP header handling to report an error in the
     * response header.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
         'functionName' => 'SoapFault',
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
    'dd7505c99760d52c5a85034b7b9bdba5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Obtain a string representation of a SoapFault
     * @link https://php.net/manual/en/soapfault.tostring.php
     * @return string A string describing the SoapFault.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapFault',
         'functionName' => '__toString',
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
    '2511eb4fb4d12067c244e671a69623b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents parameter to a SOAP call.
 * @link https://php.net/manual/en/class.soapparam.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapParam',
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
    'd57392cb95ccfe3e0ce52d04877193c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapParam constructor
     * @link https://php.net/manual/en/soapparam.soapparam.php
     * @param mixed $data <p>
     * The data to pass or return. This parameter can be passed directly as PHP
     * value, but in this case it will be named as paramN and
     * the SOAP service may not understand it.
     * </p>
     * @param string $name <p>
     * The parameter name.
     * </p>
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapParam',
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
    '3ff9e6e63a4dcfeb139dc1de73bc3771' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapParam constructor
     * @link https://php.net/manual/en/soapparam.soapparam.php
     * @param mixed $data <p>
     * The data to pass or return. This parameter can be passed directly as PHP
     * value, but in this case it will be named as paramN and
     * the SOAP service may not understand it.
     * </p>
     * @param string $name <p>
     * The parameter name.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapParam',
         'functionName' => 'SoapParam',
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
    '2bcc98843b086e23af8a43e5bfc46b96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a SOAP header.
 * @link https://php.net/manual/en/class.soapheader.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapHeader',
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
    '144efa8d9f202dacd53520e6bb17785e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapHeader constructor
     * @link https://www.php.net/manual/en/soapheader.construct.php
     * @param string $namespace <p>
     * The namespace of the SOAP header element.
     * </p>
     * @param string $name <p>
     * The name of the SoapHeader object.
     * </p>
     * @param mixed $data [optional] <p>
     * A SOAP header\'s content. It can be a PHP value or a
     * <b>SoapVar</b> object.
     * </p>
     * @param bool $mustUnderstand [optional]
     * @param string $actor [optional] <p>
     * Value of the actor attribute of the SOAP header
     * element.
     * </p>
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapHeader',
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
    '9a639f4074c3ab24cf2aad3091a63b53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * SoapHeader constructor
     * @link https://php.net/manual/en/soapheader.soapheader.php
     * @param string $namespace <p>
     * The namespace of the SOAP header element.
     * </p>
     * @param string $name <p>
     * The name of the SoapHeader object.
     * </p>
     * @param mixed $data [optional] <p>
     * A SOAP header\'s content. It can be a PHP value or a
     * <b>SoapVar</b> object.
     * </p>
     * @param bool $mustunderstand [optional]
     * @param string $actor [optional] <p>
     * Value of the actor attribute of the SOAP header
     * element.
     * </p>
     * @since 5.0.1
     * @removed 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => 'SoapHeader',
         'functionName' => 'SoapHeader',
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
    '815bf06939d7cd01d7e8d2c7b88aae6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Set whether to use the SOAP error handler
 * @link https://php.net/manual/en/function.use-soap-error-handler.php
 * @param bool $enable [optional] <p>
 * Set to <b>TRUE</b> to send error details to clients.
 * </p>
 * @return bool the original value.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'use_soap_error_handler',
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
    'e62bcf38340c68effbd3ce7765cee691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks if a SOAP call has failed
 * @link https://php.net/manual/en/function.is-soap-fault.php
 * @param mixed $object <p>
 * The object to test.
 * </p>
 * @return bool This will return <b>TRUE</b> on error, and <b>FALSE</b> otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
         'functionName' => 'is_soap_fault',
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
    'd37183968e1dfdf2c6bf16ec6ababd14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @link https://php.net/manual/en/soap.constants.php
 * @since 5.5
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'deprecated' => 'JetBrains\\PhpStorm\\Deprecated',
          'languageleveltypeaware' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        ),
         'className' => NULL,
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
  ),
));