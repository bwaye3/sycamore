<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Batch/BatchBuilder.php-1624732867',
   'data' => 
  array (
    '378010d0f117f090486c9451f0aa9518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds an array for a batch process.
 *
 * Example code to create a batch:
 * @code
 * $batch_builder = (new BatchBuilder())
 *   ->setTitle(t(\'Batch Title\'))
 *   ->setFinishCallback(\'batch_example_finished_callback\')
 *   ->setInitMessage(t(\'The initialization message (optional)\'));
 * foreach ($ids as $id) {
 *   $batch_builder->addOperation(\'batch_example_callback\', [$id]);
 * }
 * batch_set($batch_builder->toArray());
 * @endcode
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '1b3d71402183663358375f2c86c3879c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The set of operations to be processed.
   *
   * Each operation is a tuple of the function / method to use and an array
   * containing any parameters to be passed.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '44434e31cb84e586eccc7c154f4564c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The title for the batch.
   *
   * @var string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '06c939a992e1c4593d8e5e163a3a0e59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The initializing message for the batch.
   *
   * @var string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    'e9eedba04b72687ff8b3c69a3fe2c03f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The message to be shown while the batch is in progress.
   *
   * @var string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '1360d6f41d03a5c92a2978f92ebd02f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The message to be shown if a problem occurs.
   *
   * @var string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    'dc68ab2dfd0aab53378577a80277c854' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of a function / method to be called when the batch finishes.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '8550912ce9b727b33963b880aaabf28b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file containing the operation and finished callbacks.
   *
   * If the callbacks are in the .module file or can be autoloaded, for example,
   * static methods on a class, then this does not need to be set.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    'e149d46b1f4242c6adc90532ccab1fb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of libraries to be included when processing the batch.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '832f879e20681c80a330b2cb6700a96e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of options to be used with the redirect URL.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '1807a20a850241a42b0e8a56dce3c43c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Specifies if the batch is progressive.
   *
   * If true, multiple calls are used. Otherwise an attempt is made to process
   * the batch in a single run.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    'b697dbca4e1033e02015998a1920af5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The details of the queue to use.
   *
   * A tuple containing the name of the queue and the class of the queue to use.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '7d55b10662f04f63ace54d3c46f025bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the default values for the batch builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
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
    '80f117d16ff1cfab0c6528995162bf46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the title.
   *
   * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $title
   *   The title.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setTitle',
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
    '8f9da439e84e3ea72fe3c99b260a4f06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the finished callback.
   *
   * This callback will be executed if the batch process is done.
   *
   * @param callable $callback
   *   The callback.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setFinishCallback',
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
    '33b6866126be7e9bc3fa9035f85d1506' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the displayed message while processing is initialized.
   *
   * Defaults to \'Initializing.\'.
   *
   * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $message
   *   The text to display.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setInitMessage',
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
    '05cffdf13c347253d173db87c2c434b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the message to display when the batch is being processed.
   *
   * Defaults to \'Completed @current of @total.\'.
   *
   * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $message
   *   The text to display.  Available placeholders are:
   *   - \'@current\'
   *   - \'@remaining\'
   *   - \'@total\'
   *   - \'@percentage\'
   *   - \'@estimate\'
   *   - \'@elapsed\'.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setProgressMessage',
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
    '7e23b9c6ab0e6bede6c2a0068d07f6f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the message to display if an error occurs while processing.
   *
   * Defaults to \'An error has occurred.\'.
   *
   * @param string|\\Drupal\\Core\\StringTranslation\\TranslatableMarkup $message
   *   The text to display.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setErrorMessage',
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
    '403bfcff624f7fc19e6c2d9104d44c89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the file that contains the callback functions.
   *
   * The path should be relative to base_path(), and thus should be built using
   * drupal_get_path(). Defaults to {module_name}.module.
   *
   * The file needs to be set before using ::addOperation(),
   * ::setFinishCallback(), or any other function that uses callbacks from the
   * file. This is so that PHP knows about the included functions.
   *
   * @param string $filename
   *   The path to the file.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setFile',
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
    'd0b77c5beafce94d711e62ff84b4f69a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the libraries to use when processing the batch.
   *
   * Adds the libraries for use on the progress page. Any previously added
   * libraries are removed.
   *
   * @param string[] $libraries
   *   The libraries to be used.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setLibraries',
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
    'e246df25244eea62c4d940ccfa0c3d7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the options for redirect URLs.
   *
   * @param array $options
   *   The options to use.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Url
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setUrlOptions',
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
    'ad1e218b3f4abbcb6ee0b90006573086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the batch to run progressively.
   *
   * @param bool $is_progressive
   *   (optional) A Boolean that indicates whether or not the batch needs to run
   *   progressively. TRUE indicates that the batch will run in more than one
   *   run. FALSE indicates that the batch will finish in a single run. Defaults
   *   to TRUE.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setProgressive',
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
    'a167b7d75986aa24852ac648b2f6f200' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an override for the default queue.
   *
   * The class will typically either be \\Drupal\\Core\\Queue\\Batch or
   * \\Drupal\\Core\\Queue\\BatchMemory. The class defaults to Batch if progressive
   * is TRUE, or to BatchMemory if progressive is FALSE.
   *
   * @param string $name
   *   The unique identifier for the queue.
   * @param string $class
   *   The fully qualified name of a class that implements
   *   \\Drupal\\Core\\Queue\\QueueInterface.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'setQueue',
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
    'dd3291868c206ab422a876f2876e0e50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a batch operation.
   *
   * @param callable $callback
   *   The name of the callback function.
   * @param array $arguments
   *   An array of arguments to pass to the callback function.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'addOperation',
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
    '5090ea95277a5aa54471f77394fc252a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a \\Drupal\\Core\\Batch\\Batch object into an array.
   *
   * @return array
   *   The array representation of the object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Batch',
         'uses' => 
        array (
          'queueinterface' => 'Drupal\\Core\\Queue\\QueueInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Batch\\BatchBuilder',
         'functionName' => 'toArray',
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