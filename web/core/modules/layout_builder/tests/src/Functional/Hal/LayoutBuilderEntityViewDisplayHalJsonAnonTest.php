<?php

namespace Drupal\Tests\layout_builder\Functional\Hal;

use Drupal\Tests\layout_builder\Functional\Rest\LayoutBuilderEntityViewDisplayResourceTestBase;
use Drupal\Tests\rest\Functional\AnonResourceTestTrait;

/**
 * @group layout_builder
 * @group rest
 */
class LayoutBuilderEntityViewDisplayHalJsonAnonTest extends LayoutBuilderEntityViewDisplayResourceTestBase {

  use AnonResourceTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['hal'];
=======
  protected static $modules = ['hal'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected static $format = 'hal_json';

  /**
   * {@inheritdoc}
   */
  protected static $mimeType = 'application/hal+json';

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

}
