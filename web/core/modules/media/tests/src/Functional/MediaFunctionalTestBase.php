<?php

namespace Drupal\Tests\media\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\media\Traits\MediaTypeCreationTrait;

/**
 * Base class for Media functional tests.
 */
abstract class MediaFunctionalTestBase extends BrowserTestBase {

  use MediaFunctionalTestTrait;
  use MediaTypeCreationTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'system',
    'node',
    'field_ui',
    'views_ui',
    'media',
    'media_test_source',
  ];

}
