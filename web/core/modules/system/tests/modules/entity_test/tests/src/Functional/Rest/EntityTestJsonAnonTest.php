<?php

namespace Drupal\Tests\entity_test\Functional\Rest;

use Drupal\Tests\rest\Functional\AnonResourceTestTrait;
<<<<<<< HEAD
use Drupal\Tests\rest\Functional\EntityResource\FormatSpecificGetBcRouteTestTrait;
=======
>>>>>>> dev

/**
 * @group rest
 */
class EntityTestJsonAnonTest extends EntityTestResourceTestBase {

  use AnonResourceTestTrait;
<<<<<<< HEAD
  use FormatSpecificGetBcRouteTestTrait;
=======
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected static $format = 'json';

  /**
   * {@inheritdoc}
   */
  protected static $mimeType = 'application/json';

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

}
