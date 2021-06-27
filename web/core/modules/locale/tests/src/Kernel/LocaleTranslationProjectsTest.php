<?php

namespace Drupal\Tests\locale\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests locale translation project handling.
 *
 * @group locale
 */
class LocaleTranslationProjectsTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['locale', 'locale_test', 'system'];
=======
  protected static $modules = ['locale', 'locale_test', 'system'];
>>>>>>> dev

  /**
   * The module handler used in this test.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The locale project storage used in this test.
   *
   * @var \Drupal\locale\LocaleProjectStorageInterface
   */
  protected $projectStorage;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->moduleHandler = $this->container->get('module_handler');
    $this->projectStorage = $this->container->get('locale.project');
    \Drupal::state()->set('locale.remove_core_project', TRUE);
  }

  /**
   * Tests locale_translation_clear_cache_projects().
   */
  public function testLocaleTranslationClearCacheProjects() {
    $this->moduleHandler->loadInclude('locale', 'inc', 'locale.translation');

    $expected = [];
<<<<<<< HEAD
    $this->assertIdentical($expected, locale_translation_get_projects());

    $this->projectStorage->set('foo', []);
    $expected['foo'] = new \stdClass();
    $this->assertEqual($expected, locale_translation_get_projects());
=======
    $this->assertSame($expected, locale_translation_get_projects());

    $this->projectStorage->set('foo', []);
    $expected['foo'] = new \stdClass();
    $this->assertEquals($expected, locale_translation_get_projects());
>>>>>>> dev

    $this->projectStorage->set('bar', []);
    locale_translation_clear_cache_projects();
    $expected['bar'] = new \stdClass();
<<<<<<< HEAD
    $this->assertEqual($expected, locale_translation_get_projects());
=======
    $this->assertEquals($expected, locale_translation_get_projects());
>>>>>>> dev
  }

}
