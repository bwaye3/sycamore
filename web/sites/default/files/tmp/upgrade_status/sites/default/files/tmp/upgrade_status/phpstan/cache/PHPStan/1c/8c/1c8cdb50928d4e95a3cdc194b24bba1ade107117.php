<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '0.5.5',
   'data' => 'O:42:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode":2:{s:8:"children";a:7:{i:0;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:22:"SoapClient constructor";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:1;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:5:"@link";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:50:"https://php.net/manual/en/soapclient.construct.php";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:2;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:43:"PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode":2:{s:5:"types";a:2:{i:0;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:6:"string";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}i:1;O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:4:"null";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}}s:55:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\UnionTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:5:"$wsdl";s:11:"description";s:290:"<p>
URI of the WSDL file or <b>NULL</b> if working in
non-WSDL mode.
</p>
<p>
During development, WSDL caching may be disabled by the
use of the soap.wsdl_cache_ttl <i>php.ini</i> setting
otherwise changes made to the WSDL file will have no effect until
soap.wsdl_cache_ttl is expired.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:3;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@param";s:5:"value";O:49:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode":5:{s:4:"type";O:48:"PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode":2:{s:4:"name";s:5:"array";s:60:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\Type\\IdentifierTypeNode' . "\0" . 'attributes";a:0:{}}s:10:"isVariadic";b:0;s:13:"parameterName";s:8:"$options";s:11:"description";s:3161:"[optional] <p>
An array of options. If working in WSDL mode, this parameter is optional.
If working in non-WSDL mode, the location and
uri options must be set, where location
is the URL of the SOAP server to send the request to, and uri
is the target namespace of the SOAP service.
</p>
<p>
The style and use options only work in
non-WSDL mode. In WSDL mode, they come from the WSDL file.
</p>
<p>
The soap_version option should be one of either
<b>SOAP_1_1</b> or <b>SOAP_1_2</b> to
select SOAP 1.1 or 1.2, respectively. If omitted, 1.1 is used.
</p>
<p>
For HTTP authentication, the login and
password options can be used to supply credentials.
For making an HTTP connection through
a proxy server, the options proxy_host,
proxy_port, proxy_login
and proxy_password are also available.
For HTTPS client certificate authentication use
local_cert and passphrase options. An
authentication may be supplied in the authentication
option. The authentication method may be either
<b>SOAP_AUTHENTICATION_BASIC</b> (default) or
<b>SOAP_AUTHENTICATION_DIGEST</b>.
</p>
<p>
The compression option allows to use compression
of HTTP SOAP requests and responses.
</p>
<p>
The encoding option defines internal character
encoding. This option does not change the encoding of SOAP requests (it is
always utf-8), but converts strings into it.
</p>
<p>
The trace option enables tracing of request so faults
can be backtraced. This defaults to <b>FALSE</b>
</p>
<p>
The classmap option can be used to map some WSDL
types to PHP classes. This option must be an array with WSDL types
as keys and names of PHP classes as values.
</p>
<p>
Setting the boolean trace option enables use of the
methods
SoapClient->__getLastRequest,
SoapClient->__getLastRequestHeaders,
SoapClient->__getLastResponse and
SoapClient->__getLastResponseHeaders.
</p>
<p>
The exceptions option is a boolean value defining whether
soap errors throw exceptions of type
SoapFault.
</p>
<p>
The connection_timeout option defines a timeout in seconds
for the connection to the SOAP service. This option does not define a timeout
for services with slow responses. To limit the time to wait for calls to finish the
default_socket_timeout setting
is available.
</p>
<p>
The typemap option is an array of type mappings.
Type mapping is an array with keys type_name,
type_ns (namespace URI), from_xml
(callback accepting one string parameter) and to_xml
(callback accepting one object parameter).
</p>
<p>
The cache_wsdl option is one of
<b>WSDL_CACHE_NONE</b>,
<b>WSDL_CACHE_DISK</b>,
<b>WSDL_CACHE_MEMORY</b> or
<b>WSDL_CACHE_BOTH</b>.
</p>
<p>
The user_agent option specifies string to use in
User-Agent header.
</p>
<p>
The stream_context option is a resource
for context.
</p>
<p>
The features option is a bitmask of
<b>SOAP_SINGLE_ELEMENT_ARRAYS</b>,
<b>SOAP_USE_XSI_ARRAY_TYPE</b>,
<b>SOAP_WAIT_ONE_WAY_CALLS</b>.
</p>
<p>
The keep_alive option is a boolean value defining whether
to send the Connection: Keep-Alive header or
Connection: close.
</p>
<p>
The ssl_method option is one of
<b>SOAP_SSL_METHOD_TLS</b>,
<b>SOAP_SSL_METHOD_SSLv2</b>,
<b>SOAP_SSL_METHOD_SSLv3</b> or
<b>SOAP_SSL_METHOD_SSLv23</b>.
</p>";s:61:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\ParamTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:4;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:6:"@since";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:5:"5.0.1";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}i:5;O:46:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode":2:{s:4:"text";s:0:"";s:58:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTextNode' . "\0" . 'attributes";a:0:{}}i:6;O:45:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode":3:{s:4:"name";s:8:"@removed";s:5:"value";O:51:"PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode":2:{s:5:"value";s:3:"8.0";s:63:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\GenericTagValueNode' . "\0" . 'attributes";a:0:{}}s:57:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocTagNode' . "\0" . 'attributes";a:0:{}}}s:54:"' . "\0" . 'PHPStan\\PhpDocParser\\Ast\\PhpDoc\\PhpDocNode' . "\0" . 'attributes";a:0:{}}',
));