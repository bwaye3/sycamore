<?php

namespace Drupal\KernelTests\Core\Extension;

<<<<<<< HEAD
use Drupal\Core\Site\Settings;
=======
>>>>>>> dev
use Drupal\KernelTests\KernelTestBase;

/**
 * @coversDefaultClass \Drupal\Core\Extension\ThemeEngineExtensionList
 * @group Extension
 */
class ThemeEngineExtensionListTest extends KernelTestBase {

  /**
   * @covers ::getList
   */
  public function testGetlist() {
<<<<<<< HEAD
    $settings = Settings::getAll();
    $settings['install_profile'] = 'testing';
    new Settings($settings);

=======
>>>>>>> dev
    // Confirm that all theme engines are available.
    $theme_engines = \Drupal::service('extension.list.theme_engine')->getList();
    $this->assertArrayHasKey('twig', $theme_engines);
    $this->assertArrayHasKey('nyan_cat', $theme_engines);
    $this->assertCount(2, $theme_engines);
  }

}
