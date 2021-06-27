<?php

namespace Drupal\Tests\locale\Kernel;

use Drupal\Core\Language\LanguageInterface;
use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests that the configurable language manager and locale operate correctly.
 *
 * @group locale
 */
class LocaleConfigurableLanguageManagerTest extends KernelTestBase {

  /**
   * A list of modules to install for this test.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['language', 'locale'];
=======
  protected static $modules = ['language', 'locale'];
>>>>>>> dev

  public function testGetLanguages() {
    $this->installSchema('locale', ['locales_source', 'locales_target', 'locales_location']);
    $default_language = new ConfigurableLanguage(['label' => $this->randomMachineName(), 'id' => 'default', 'weight' => 0], 'configurable_language');
    $default_language->save();

    // Set new default language.
    \Drupal::service('language.default')->set($default_language);
    \Drupal::service('string_translation')->setDefaultLangcode($default_language->getId());

    $languages = \Drupal::service('language_manager')->getLanguages(LanguageInterface::STATE_ALL);
<<<<<<< HEAD
    $this->assertEqual(['default', 'und', 'zxx'], array_keys($languages));
=======
    $this->assertEquals(['default', 'und', 'zxx'], array_keys($languages));
>>>>>>> dev

    $configurableLanguage = new ConfigurableLanguage(['label' => $this->randomMachineName(), 'id' => 'test', 'weight' => 1], 'configurable_language');
    // Simulate a configuration sync by setting the flag otherwise the locked
    // language weights would be updated whilst saving.
    // @see \Drupal\language\Entity\ConfigurableLanguage::postSave()
    $configurableLanguage->setSyncing(TRUE)->save();

    $languages = \Drupal::service('language_manager')->getLanguages(LanguageInterface::STATE_ALL);
<<<<<<< HEAD
    $this->assertEqual(['default', 'test', 'und', 'zxx'], array_keys($languages));
=======
    $this->assertEquals(['default', 'test', 'und', 'zxx'], array_keys($languages));
>>>>>>> dev
  }

}
