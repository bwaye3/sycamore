<?php

namespace Drupal\Tests\language\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\language\Entity\ConfigurableLanguage;

/**
 * Tests the ConfigurableLanguage entity.
 *
 * @group language
 * @see \Drupal\language\Entity\ConfigurableLanguage.
 */
class ConfigurableLanguageTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['language'];
=======
  protected static $modules = ['language'];
>>>>>>> dev

  /**
   * Tests configurable language name methods.
   */
  public function testName() {
    $name = $this->randomMachineName();
    $language_code = $this->randomMachineName(2);
    $configurableLanguage = new ConfigurableLanguage(['label' => $name, 'id' => $language_code], 'configurable_language');
<<<<<<< HEAD
    $this->assertEqual($configurableLanguage->getName(), $name);
    $this->assertEqual($configurableLanguage->setName('Test language')->getName(), 'Test language');
=======
    $this->assertEquals($name, $configurableLanguage->getName());
    $this->assertEquals('Test language', $configurableLanguage->setName('Test language')->getName());
>>>>>>> dev
  }

}
