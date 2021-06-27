<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Datetime/TimeInterface.php-1624732867',
   'data' => 
  array (
    '789a788bebccec28d0f33a1416e0b40b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for obtaining system time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\TimeInterface',
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
    '14852fa671b856d8fbaf7d12827cdb05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp for the current request.
   *
   * This method should be used to obtain the current system time at the start
   * of the request. It will be the same value for the life of the request
   * (even for long execution times).
   *
   * If the request is not available it will fallback to the current system
   * time.
   *
   * This method can replace instances of
   * @code
   * $request_time = $_SERVER[\'REQUEST_TIME\'];
   * $request_time = REQUEST_TIME;
   * $request_time = $requestStack->getCurrentRequest()->server->get(\'REQUEST_TIME\');
   * $request_time = $request->server->get(\'REQUEST_TIME\');
   * @endcode
   * and most instances of
   * @code
   * $time = time();
   * @endcode
   * with
   * @code
   * $request_time = \\Drupal::time()->getRequestTime();
   * @endcode
   * or the equivalent using the injected service.
   *
   * Using the time service, rather than other methods, is especially important
   * when creating tests, which require predictable timestamps.
   *
   * @return int
   *   A Unix timestamp.
   *
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\TimeInterface',
         'functionName' => 'getRequestTime',
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
    'bd53b6067d24f47df44223be1cfed9a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp for the current request with microsecond precision.
   *
   * This method should be used to obtain the current system time, with
   * microsecond precision, at the start of the request. It will be the same
   * value for the life of the request (even for long execution times).
   *
   * If the request is not available it will fallback to the current system
   * time with microsecond precision.
   *
   * This method can replace instances of
   * @code
   * $request_time_float = $_SERVER[\'REQUEST_TIME_FLOAT\'];
   * $request_time_float = $requestStack->getCurrentRequest()->server->get(\'REQUEST_TIME_FLOAT\');
   * $request_time_float = $request->server->get(\'REQUEST_TIME_FLOAT\');
   * @endcode
   * and many instances of
   * @code
   * $microtime = microtime();
   * $microtime = microtime(TRUE);
   * @endcode
   * with
   * @code
   * $request_time = \\Drupal::time()->getRequestMicroTime();
   * @endcode
   * or the equivalent using the injected service.
   *
   * Using the time service, rather than other methods, is especially important
   * when creating tests, which require predictable timestamps.
   *
   * @return float
   *   A Unix timestamp with a fractional portion.
   *
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\TimeInterface',
         'functionName' => 'getRequestMicroTime',
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
    '75d7f731e9a6856619398453c97e2c4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current system time as an integer.
   *
   * This method should be used to obtain the current system time, at the time
   * the method was called.
   *
   * This method can replace many instances of
   * @code
   * $time = time();
   * @endcode
   * with
   * @code
   * $request_time = \\Drupal::time()->getCurrentTime();
   * @endcode
   * or the equivalent using the injected service.
   *
   * This method should only be used when the current system time is actually
   * needed, such as with timers or time interval calculations. If only the
   * time at the start of the request is needed,
   * use TimeInterface::getRequestTime().
   *
   * Using the time service, rather than other methods, is especially important
   * when creating tests, which require predictable timestamps.
   *
   * @return int
   *   A Unix timestamp.
   *
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentMicroTime()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\TimeInterface',
         'functionName' => 'getCurrentTime',
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
    '7127413b99f9eae3c58bc19a5f1f4f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current system time with microsecond precision.
   *
   * This method should be used to obtain the current system time, with
   * microsecond precision, at the time the method was called.
   *
   * This method can replace many instances of
   * @code
   * $microtime = microtime();
   * $microtime = microtime(TRUE);
   * @endcode
   * with
   * @code
   * $request_time = \\Drupal::time()->getCurrentMicroTime();
   * @endcode
   * or the equivalent using the injected service.
   *
   * This method should only be used when the current system time is actually
   * needed, such as with timers or time interval calculations. If only the
   * time at the start of the request and microsecond precision is needed,
   * use TimeInterface::getRequestMicroTime().
   *
   * Using the time service, rather than other methods, is especially important
   * when creating tests, which require predictable timestamps.
   *
   * @return float
   *   A Unix timestamp with a fractional portion.
   *
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getRequestMicroTime()
   * @see \\Drupal\\Component\\Datetime\\TimeInterface::getCurrentTime()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Datetime',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Datetime\\TimeInterface',
         'functionName' => 'getCurrentMicroTime',
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