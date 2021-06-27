<?php

namespace Drupal\Tests\system\Kernel\Form;

use Drupal\form_test\FormTestObject;
use Drupal\KernelTests\ConfigFormTestBase;

/**
 * Tests building a form from an object.
 *
 * @group Form
 */
class FormObjectTest extends ConfigFormTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['form_test'];

  protected function setUp() {
=======
  protected static $modules = ['form_test'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->form = new FormTestObject($this->container->get('config.factory'));
    $this->values = [
      'bananas' => [
        '#value' => $this->randomString(10),
        '#config_name' => 'form_test.object',
        '#config_key' => 'bananas',
      ],
    ];
  }

}
