<?php

namespace Drupal\Tests\language\Kernel;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\KernelTests\KernelTestBase;

/**
 * Ensures the language config overrides can be installed.
 *
 * @group language
 */
class LanguageConfigOverrideInstallTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['language', 'config_events_test'];
=======
  protected static $modules = ['language', 'config_events_test'];
>>>>>>> dev

  /**
   * Tests the configuration events are not fired during install of overrides.
   */
  public function testLanguageConfigOverrideInstall() {
    ConfigurableLanguage::createFromLangcode('de')->save();
    // Need to enable test module after creating the language otherwise saving
    // the language will install the configuration.
    $this->enableModules(['language_config_override_test']);
    \Drupal::state()->set('config_events_test.event', FALSE);
    $this->installConfig(['language_config_override_test']);
    $event_recorder = \Drupal::state()->get('config_events_test.event', FALSE);
    $this->assertFalse($event_recorder);
    $config = \Drupal::service('language.config_factory_override')->getOverride('de', 'language_config_override_test.settings');
<<<<<<< HEAD
    $this->assertEqual($config->get('name'), 'Deutsch');
=======
    $this->assertEquals('Deutsch', $config->get('name'));
>>>>>>> dev
  }

}
