<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/File/FileSystemInterface.php-1624732867',
   'data' => 
  array (
    '2abf227290a9d2c7cf05e310da12022a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for helpers that operate on files and stream wrappers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '37787f75a8297595f2b508ad51690add' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag for dealing with existing files: Appends number until name is unique.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '07e232a150ca0a27b366330976f3d74e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag for dealing with existing files: Replace the existing file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '4a3d50ec2e3b9ebb1446f2d7b3cf7bc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag for dealing with existing files: Do nothing and return FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '32ac66a53b0d55e9754eb77ada156bbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag used by ::prepareDirectory() -- create directory if not present.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '348f19f0c595d15737e9008682521ebb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag used by ::prepareDirectory() -- file permissions may be changed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
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
    '15a575f00bd7a67fc8fb0596b158f916' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Moves an uploaded file to a new location.
   *
   * PHP\'s move_uploaded_file() does not properly support streams if
   * open_basedir is enabled, so this function fills that gap.
   *
   * Compatibility: normal paths and stream wrappers.
   *
   * @param string $filename
   *   The filename of the uploaded file.
   * @param string $uri
   *   A string containing the destination URI of the file.
   *
   * @return bool
   *   TRUE on success, or FALSE on failure.
   *
   * @see move_uploaded_file()
   * @see https://www.drupal.org/node/515192
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'moveUploadedFile',
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
    '1baeeb044e88f52cf4f31d1bafcecff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the permissions on a file or directory.
   *
   * This function will use the file_chmod_directory and
   * file_chmod_file settings for the default modes for directories
   * and uploaded/generated files. By default these will give everyone read
   * access so that users accessing the files with a user account without the
   * webserver group (e.g. via FTP) can read these files, and give group write
   * permissions so webserver group members (e.g. a vhost account) can alter
   * files uploaded and owned by the webserver.
   *
   * PHP\'s chmod does not support stream wrappers so we use our wrapper
   * implementation which interfaces with chmod() by default. Contrib wrappers
   * may override this behavior in their implementations as needed.
   *
   * @param string $uri
   *   A string containing a URI file, or directory path.
   * @param int $mode
   *   Integer value for the permissions. Consult PHP chmod() documentation for
   *   more information.
   *
   * @return bool
   *   TRUE for success, FALSE in the event of an error.
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'chmod',
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
    'cf7fe5558d3380f43537d2a5896bc4cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a file.
   *
   * PHP\'s unlink() is broken on Windows, as it can fail to remove a file when
   * it has a read-only flag set.
   *
   * @param string $uri
   *   A URI or pathname.
   * @param resource $context
   *   Refer to http://php.net/manual/ref.stream.php
   *
   * @return bool
   *   Boolean TRUE on success, or FALSE on failure.
   *
   * @see unlink()
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'unlink',
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
    'b379c78197cc3b5f406ef5b01589f3d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the absolute filepath of a local URI or filepath.
   *
   * The use of this method is discouraged, because it does not work for
   * remote URIs. Except in rare cases, URIs should not be manually resolved.
   *
   * Only use this function if you know that the stream wrapper in the URI uses
   * the local file system, and you need to pass an absolute path to a function
   * that is incompatible with stream URIs.
   *
   * @param string $uri
   *   A stream wrapper URI or a filepath, possibly including one or more
   *   symbolic links.
   *
   * @return string|false
   *   The absolute local filepath (with no symbolic links) or FALSE on failure.
   *
   * @see \\Drupal\\Core\\StreamWrapper\\StreamWrapperInterface::realpath()
   * @see http://php.net/manual/function.realpath.php
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'realpath',
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
    'c5376f29b13295abaf1a4af8b345c9a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the name of the directory from a given path.
   *
   * PHP\'s dirname() does not properly pass streams, so this function fills that
   * gap. It is backwards compatible with normal paths and will use PHP\'s
   * dirname() as a fallback.
   *
   * Compatibility: normal paths and stream wrappers.
   *
   * @param string $uri
   *   A URI or path.
   *
   * @return string
   *   A string containing the directory name.
   *
   * @see dirname()
   * @see https://www.drupal.org/node/515192
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'dirname',
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
    'c8b891c33c9b114f8baf59b2778dbf2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the filename from a given path.
   *
   * PHP\'s basename() does not properly support streams or filenames beginning
   * with a non-US-ASCII character.
   *
   * @see http://bugs.php.net/bug.php?id=37738
   * @see basename()
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'basename',
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
    'a6b6c1819290a03834383307d93900c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a directory, optionally creating missing components in the path to
   * the directory.
   *
   * When PHP\'s mkdir() creates a directory, the requested mode is affected by
   * the process\'s umask. This function overrides the umask and sets the mode
   * explicitly for all directory components created.
   *
   * @param string $uri
   *   A URI or pathname.
   * @param int $mode
   *   Mode given to created directories. Defaults to the directory mode
   *   configured in the Drupal installation. It must have a leading zero.
   * @param bool $recursive
   *   Create directories recursively, defaults to FALSE. Cannot work with a
   *   mode which denies writing or execution to the owner of the process.
   * @param resource $context
   *   Refer to http://php.net/manual/ref.stream.php
   *
   * @return bool
   *   Boolean TRUE on success, or FALSE on failure.
   *
   * @see mkdir()
   * @see https://www.drupal.org/node/515192
   * @ingroup php_wrappers
   *
   * @todo Update with open_basedir compatible recursion logic from
   *   \\Drupal\\Component\\PhpStorage\\FileStorage::ensureDirectory().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'mkdir',
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
    '9fe0125c853dd9f77bb252a808fc400e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a directory.
   *
   * PHP\'s rmdir() is broken on Windows, as it can fail to remove a directory
   * when it has a read-only flag set.
   *
   * @param string $uri
   *   A URI or pathname.
   * @param resource $context
   *   Refer to http://php.net/manual/ref.stream.php
   *
   * @return bool
   *   Boolean TRUE on success, or FALSE on failure.
   *
   * @see rmdir()
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'rmdir',
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
    'c12cb4cae8dd0b0c7426bda84148d100' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a file with a unique filename in the specified directory.
   *
   * PHP\'s tempnam() does not return a URI like we want. This function will
   * return a URI if given a URI, or it will return a filepath if given a
   * filepath.
   *
   * Compatibility: normal paths and stream wrappers.
   *
   * @param string $directory
   *   The directory where the temporary filename will be created.
   * @param string $prefix
   *   The prefix of the generated temporary filename.
   *   Note: Windows uses only the first three characters of prefix.
   *
   * @return string|bool
   *   The new temporary filename, or FALSE on failure.
   *
   * @see tempnam()
   * @see https://www.drupal.org/node/515192
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'tempnam',
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
    'f4754b064200295ae6e15dc30bc4dcab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the scheme of a URI (e.g. a stream).
   *
   * @param string $uri
   *   A stream, referenced as "scheme://target" or "data:target".
   *
   * @return string|bool
   *   A string containing the name of the scheme, or FALSE if none. For
   *   example, the URI "public://example.txt" would return "public".
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface::getScheme()
   *   instead.
   *
   * @see https://www.drupal.org/node/3035273
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'uriScheme',
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
    'e6a06b364a59ec1d67e33ff9d1a5a5b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the scheme of a stream URI is valid.
   *
   * Confirms that there is a registered stream handler for the provided scheme
   * and that it is callable. This is useful if you want to confirm a valid
   * scheme without creating a new instance of the registered handler.
   *
   * @param string $scheme
   *   A URI scheme, a stream is referenced as "scheme://target".
   *
   * @return bool
   *   Returns TRUE if the string is the name of a validated stream, or FALSE if
   *   the scheme does not have a registered handler.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   *   Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface::isValidScheme()
   *   instead.
   *
   * @see https://www.drupal.org/node/3035273
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'validScheme',
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
    '256a6ee265c3f63ee2b151e5db01111c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies a file to a new location without invoking the file API.
   *
   * This is a powerful function that in many ways performs like an advanced
   * version of copy().
   * - Checks if $source and $destination are valid and readable/writable.
   * - If file already exists in $destination either the call will error out,
   *   replace the file or rename the file based on the $replace parameter.
   * - If the $source and $destination are equal, the behavior depends on the
   *   $replace parameter. FileSystemInterface::EXISTS_REPLACE will replace the
   *   existing file. FileSystemInterface::EXISTS_ERROR will error out.
   *   FileSystemInterface::EXISTS_RENAME will rename the file until the
   *   $destination is unique.
   * - Provides a fallback using realpaths if the move fails using stream
   *   wrappers. This can occur because PHP\'s copy() function does not properly
   *   support streams if open_basedir is enabled. See
   *   https://bugs.php.net/bug.php?id=60456
   *
   * @param string $source
   *   A string specifying the filepath or URI of the source file.
   * @param string $destination
   *   A URI containing the destination that $source should be copied to. The
   *   URI may be a bare filepath (without a scheme).
   * @param int $replace
   *   Replace behavior when the destination file already exists:
   *   - FileSystemInterface::EXISTS_REPLACE - Replace the existing file.
   *   - FileSystemInterface::EXISTS_RENAME - Append _{incrementing number}
   *     until the filename is unique.
   *   - FileSystemInterface::EXISTS_ERROR - Throw an exception.
   *
   * @return string
   *   The path to the new file.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'copy',
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
    '5698b56017742fb3c4b6d1ec18a50595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes a file without database changes or hook invocations.
   *
   * This function should be used when the file to be deleted does not have an
   * entry recorded in the files table.
   *
   * @param string $path
   *   A string containing a file path or (streamwrapper) URI.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'delete',
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
    '9ef554035fef4b4488e7508ab87461f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes all files and directories in the specified filepath recursively.
   *
   * If the specified path is a directory then the function is called
   * recursively to process the contents. Once the contents have been removed
   * the directory is also removed.
   *
   * If the specified path is a file then it will be processed with delete()
   * method.
   *
   * Note that this only deletes visible files with write permission.
   *
   * @param string $path
   *   A string containing either an URI or a file or directory path.
   * @param callable|null $callback
   *   Callback function to run on each file prior to deleting it and on each
   *   directory prior to traversing it. For example, can be used to modify
   *   permissions.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'deleteRecursive',
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
    'e524a5d72a891412475b4096905aad30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Moves a file to a new location without database changes or hook invocation.
   *
   * This is a powerful function that in many ways performs like an advanced
   * version of rename().
   * - Checks if $source and $destination are valid and readable/writable.
   * - Checks that $source is not equal to $destination; if they are an error
   *   is reported.
   * - If file already exists in $destination either the call will error out,
   *   replace the file or rename the file based on the $replace parameter.
   * - Works around a PHP bug where rename() does not properly support streams
   *   if safe_mode or open_basedir are enabled.
   *
   * @param string $source
   *   A string specifying the filepath or URI of the source file.
   * @param string $destination
   *   A URI containing the destination that $source should be moved to. The
   *   URI may be a bare filepath (without a scheme) and in that case the
   *   default scheme (public://) will be used.
   * @param int $replace
   *   Replace behavior when the destination file already exists:
   *   - FileSystemInterface::EXISTS_REPLACE - Replace the existing file.
   *   - FileSystemInterface::EXISTS_RENAME - Append _{incrementing number}
   *     until the filename is unique.
   *   - FileSystemInterface::EXISTS_ERROR - Do nothing and return FALSE.
   *
   * @return string
   *   The path to the new file.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   *
   * @see https://bugs.php.net/bug.php?id=60456
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'move',
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
    'f1bd0c8055a3a1dcf0f4831b01c5b0fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves a file to the specified destination without invoking file API.
   *
   * This function is identical to file_save_data() except the file will not be
   * saved to the {file_managed} table and none of the file_* hooks will be
   * called.
   *
   * @param string $data
   *   A string containing the contents of the file.
   * @param string $destination
   *   A string containing the destination location. This must be a stream
   *   wrapper URI.
   * @param int $replace
   *   Replace behavior when the destination file already exists:
   *   - FileSystemInterface::EXISTS_REPLACE - Replace the existing file.
   *   - FileSystemInterface::EXISTS_RENAME - Append _{incrementing number}
   *     until the filename is unique.
   *   - FileSystemInterface::EXISTS_ERROR - Do nothing and return FALSE.
   *
   * @return string
   *   A string with the path of the resulting file, or FALSE on error.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   *
   * @see file_save_data()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'saveData',
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
    'a715105b36be15e04a68f5bd4d722e45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that the directory exists and is writable.
   *
   * Directories need to have execute permissions to be considered a directory
   * by FTP servers, etc.
   *
   * @param string $directory
   *   A string reference containing the name of a directory path or URI. A
   *   trailing slash will be trimmed from a path.
   * @param int $options
   *   A bitmask to indicate if the directory should be created if it does
   *   not exist (FileSystemInterface::CREATE_DIRECTORY) or made writable if it
   *   is read-only (FileSystemInterface::MODIFY_PERMISSIONS).
   *
   * @return bool
   *   TRUE if the directory exists (or was created) and is writable. FALSE
   *   otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'prepareDirectory',
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
    'f50ffec7da0ea423af4ac274e5b50604' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a full file path from a directory and filename.
   *
   * If a file with the specified name already exists, an alternative will be
   * used.
   *
   * @param string $basename
   *   The filename.
   * @param string $directory
   *   The directory or parent URI.
   *
   * @return string
   *   File path consisting of $directory and a unique filename based off
   *   of $basename.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'createFilename',
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
    '00118a0433b3a41f257ffa5dc811d9ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines the destination path for a file.
   *
   * @param string $destination
   *   The desired final URI or filepath.
   * @param int $replace
   *   Replace behavior when the destination file already exists.
   *   - FileSystemInterface::EXISTS_REPLACE - Replace the existing file.
   *   - FileSystemInterface::EXISTS_RENAME - Append _{incrementing number}
   *     until the filename is unique.
   *   - FileSystemInterface::EXISTS_ERROR - Do nothing and return FALSE.
   *
   * @return string|bool
   *   The destination filepath, or FALSE if the file already exists
   *   and FileSystemInterface::EXISTS_ERROR is specified.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\FileException
   *   Implementation may throw FileException or its subtype on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'getDestinationFilename',
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
    '0f3d40a3af64924318462312915b5a43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the path of the configured temporary directory.
   *
   * If the path is not set, it will fall back to the OS-specific default if
   * set, otherwise a directory under the public files directory. It will then
   * set this as the configured directory.
   *
   * @return string
   *   A string containing the path to the temporary directory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'getTempDirectory',
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
    'cb90528fff6f116eda5bc1de09f4ac19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all files that match a given mask in a given directory.
   *
   * Directories and files beginning with a dot are excluded; this prevents
   * hidden files and directories (such as SVN working directories) from being
   * scanned. Use the umask option to skip configuration directories to
   * eliminate the possibility of accidentally exposing configuration
   * information. Also, you can use the base directory, recurse, and min_depth
   * options to improve performance by limiting how much of the filesystem has
   * to be traversed.
   *
   * @param string $dir
   *   The base directory or URI to scan, without trailing slash.
   * @param string $mask
   *   The preg_match() regular expression for files to be included.
   * @param array $options
   *   An associative array of additional options, with the following elements:
   *   - \'nomask\': The preg_match() regular expression for files to be excluded.
   *     Defaults to the \'file_scan_ignore_directories\' setting.
   *   - \'callback\': The callback function to call for each match. There is no
   *     default callback.
   *   - \'recurse\': When TRUE, the directory scan will recurse the entire tree
   *     starting at the provided directory. Defaults to TRUE.
   *   - \'key\': The key to be used for the returned associative array of files.
   *     Possible values are \'uri\', for the file\'s URI; \'filename\', for the
   *     basename of the file; and \'name\' for the name of the file without the
   *     extension. Defaults to \'uri\'.
   *   - \'min_depth\': Minimum depth of directories to return files from.
   *     Defaults to 0.
   *
   * @return array
   *   An associative array (keyed on the chosen key) of objects with \'uri\',
   *   \'filename\', and \'name\' properties corresponding to the matched files.
   *
   * @throws \\Drupal\\Core\\File\\Exception\\NotRegularDirectoryException
   *   If the directory does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\File',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\File\\FileSystemInterface',
         'functionName' => 'scanDirectory',
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