<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Lock/LockBackendInterface.php-1624732867',
   'data' => 
  array (
    'f1a0163c8d5c66e1e993d037ffa4c633' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Lock backend interface.
 *
 * @ingroup lock
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
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
    'a2b59de33695ff4c26cd35ef1c49a03a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Acquires a lock.
   *
   * @param string $name
   *   Lock name. Limit of name\'s length is 255 characters.
   * @param float $timeout
   *   (optional) Lock lifetime in seconds. Defaults to 30.0.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'acquire',
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
    '6947181850766d89fc355628df131712' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if a lock is available for acquiring.
   *
   * @param string $name
   *   Lock to acquire.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'lockMayBeAvailable',
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
    '533ce3230c7d20fe226c3481b7711bf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits a short amount of time before a second lock acquire attempt.
   *
   * While this method is subject to have a generic implementation in abstract
   * backend implementation, some backends may provide non blocking or less I/O
   * intensive wait mechanism: this is why this method remains on the backend
   * interface.
   *
   * @param string $name
   *   Lock name currently being locked.
   * @param int $delay
   *   Seconds to wait for. Defaults to 30.
   *
   * @return bool
   *   TRUE if the lock holds, FALSE if it may be available. You still need to
   *   acquire the lock manually and it may fail again.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'wait',
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
    'e36d0540395aec6b7c52ee315fb0d0d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Releases the given lock.
   *
   * @param string $name
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'release',
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
    'ec66aa23bc5cbc5ba3595d93b86f1d0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Releases all locks for the given lock token identifier.
   *
   * @param string $lockId
   *   (optional) If none given, remove all locks from the current page.
   *   Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'releaseAll',
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
    'cda129ad7efced7c6593db9b5fdddffb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the unique page token for locks.
   *
   * Locks will be wiped out at the end of each page request on a token basis.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Lock',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Lock\\LockBackendInterface',
         'functionName' => 'getLockId',
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