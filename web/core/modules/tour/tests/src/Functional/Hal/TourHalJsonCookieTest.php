<?php

namespace Drupal\Tests\tour\Functional\Hal;

use Drupal\Tests\rest\Functional\CookieResourceTestTrait;
use Drupal\Tests\tour\Functional\Rest\TourResourceTestBase;

/**
 * @group hal
 */
class TourHalJsonCookieTest extends TourResourceTestBase {

  use CookieResourceTestTrait;

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
  protected $defaultTheme = 'stark';

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
  protected static $auth = 'cookie';

}
