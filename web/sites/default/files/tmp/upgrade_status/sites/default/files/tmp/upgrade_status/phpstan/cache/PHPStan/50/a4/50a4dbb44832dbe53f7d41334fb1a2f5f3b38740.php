<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/file/src/FileInterface.php-1624732868',
   'data' => 
  array (
    'a1132d354e0584ae25c962337d17251c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines getter and setter methods for file entity base fields.
 *
 * @ingroup file
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
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
    '7d2d9aab38b15828ebc0df3ed34bb0a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of the file.
   *
   * This may differ from the basename of the URI if the file is renamed to
   * avoid overwriting an existing file.
   *
   * @return string
   *   Name of the file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'getFilename',
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
    '7ee6c93ef0d42234705197377e1e0f2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the name of the file.
   *
   * @param string $filename
   *   The file name that corresponds to this file. May differ from the basename
   *   of the URI and changing the filename does not change the URI.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setFilename',
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
    'da74cc2b36b4e175f866c0b862be2246' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URI of the file.
   *
   * @return string
   *   The URI of the file, e.g. public://directory/file.jpg.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'getFileUri',
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
    '3eda784d484132a3ccc2700058557173' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the URI of the file.
   *
   * @param string $uri
   *   The URI of the file, e.g. public://directory/file.jpg. Does not change
   *   the location of the file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setFileUri',
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
    '88a0d4d211a206b734d9fd97a6bd47a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a file URL for the URI of this file.
   *
   * @param bool $relative
   *   (optional) Whether the URL should be root-relative, defaults to TRUE.
   *
   * @return string
   *   A string containing a URL that may be used to access the file.
   *
   * @see file_create_url()
   * @see file_url_transform_relative()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'createFileUrl',
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
    '71b862fe779ac2c4b0ecc6d0a37cf6c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the MIME type of the file.
   *
   * @return string
   *   The MIME type of the file, e.g. image/jpeg or text/xml.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'getMimeType',
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
    '47500781bfe0cde78bbaf70345e7c589' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the MIME type of the file.
   *
   * @param string $mime
   *   The MIME type of the file, e.g. image/jpeg or text/xml.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setMimeType',
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
    'b634b2c974d38f0fae92eb7635abd9dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the size of the file.
   *
   * @return string
   *   The size of the file in bytes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'getSize',
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
    '3ba0513066e8035de38fa3b41b37cbf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the size of the file.
   *
   * @param int $size
   *   The size of the file in bytes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setSize',
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
    '0381a09b7c2bf3d047eb78a4fcca0e0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if the file is permanent.
   *
   * @return bool
   *   TRUE if the file status is permanent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'isPermanent',
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
    'd9a928675427f9136ada410178855f55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if the file is temporary.
   *
   * @return bool
   *   TRUE if the file status is temporary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'isTemporary',
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
    'acdf40b00891e9dc2f385055e01936a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the file status to permanent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setPermanent',
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
    'ca48a65b1d0bec1ab36112f6137f48a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the file status to temporary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'setTemporary',
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
    '711c1d5b113a7182bf3f80034a9b0ae2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the file entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the file entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\file',
         'uses' => 
        array (
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
        ),
         'className' => 'Drupal\\file\\FileInterface',
         'functionName' => 'getCreatedTime',
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