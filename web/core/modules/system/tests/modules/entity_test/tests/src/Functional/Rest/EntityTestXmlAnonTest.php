<?php

namespace Drupal\Tests\entity_test\Functional\Rest;

use Drupal\Tests\rest\Functional\AnonResourceTestTrait;
<<<<<<< HEAD
use Drupal\Tests\rest\Functional\EntityResource\FormatSpecificGetBcRouteTestTrait;
=======
>>>>>>> dev
use Drupal\Tests\rest\Functional\EntityResource\XmlEntityNormalizationQuirksTrait;

/**
 * @group rest
 */
class EntityTestXmlAnonTest extends EntityTestResourceTestBase {

  use AnonResourceTestTrait;
<<<<<<< HEAD
  use FormatSpecificGetBcRouteTestTrait;
=======
>>>>>>> dev
  use XmlEntityNormalizationQuirksTrait;

  /**
   * {@inheritdoc}
   */
  protected static $format = 'xml';

  /**
   * {@inheritdoc}
   */
  protected static $mimeType = 'text/xml; charset=UTF-8';

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

}
