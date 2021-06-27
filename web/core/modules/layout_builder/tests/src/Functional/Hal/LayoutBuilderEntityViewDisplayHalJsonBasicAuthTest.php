<?php

namespace Drupal\Tests\layout_builder\Functional\Hal;

use Drupal\FunctionalTests\Hal\EntityViewDisplayHalJsonAnonTest;
use Drupal\Tests\rest\Functional\BasicAuthResourceTestTrait;

/**
 * @group layout_builder
 * @group rest
 */
class LayoutBuilderEntityViewDisplayHalJsonBasicAuthTest extends EntityViewDisplayHalJsonAnonTest {

  use BasicAuthResourceTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['basic_auth'];
=======
  protected static $modules = ['basic_auth'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected static $auth = 'basic_auth';

}
