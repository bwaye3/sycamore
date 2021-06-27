<?php

namespace Drupal\Tests\language\Kernel\Condition;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests that the language condition, provided by the language module, is
 * working properly.
 *
 * @group language
 */
class LanguageConditionTest extends KernelTestBase {

  /**
   * The condition plugin manager.
   *
   * @var \Drupal\Core\Condition\ConditionManager
   */
  protected $manager;

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system', 'language'];

  protected function setUp() {
=======
  protected static $modules = ['system', 'language'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installConfig(['language']);
    // Setup Italian.
    ConfigurableLanguage::createFromLangcode('it')->save();

    $this->manager = $this->container->get('plugin.manager.condition');
  }

  /**
<<<<<<< HEAD
   * Test the language condition.
=======
   * Tests the language condition.
>>>>>>> dev
   */
  public function testConditions() {
    // Grab the language condition and configure it to check the content
    // language.
    $language = \Drupal::languageManager()->getLanguage('en');
    $condition = $this->manager->createInstance('language')
      ->setConfig('langcodes', ['en' => 'en', 'it' => 'it'])
      ->setContextValue('language', $language);
    $this->assertTrue($condition->execute(), 'Language condition passes as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is English, Italian.');
=======
    $this->assertEquals('The language is English, Italian.', $condition->summary());
>>>>>>> dev

    // Change to Italian only.
    $condition->setConfig('langcodes', ['it' => 'it']);
    $this->assertFalse($condition->execute(), 'Language condition fails as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is Italian.');
=======
    $this->assertEquals('The language is Italian.', $condition->summary());
>>>>>>> dev

    // Negate the condition
    $condition->setConfig('negate', TRUE);
    $this->assertTrue($condition->execute(), 'Language condition passes as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is not Italian.');
=======
    $this->assertEquals('The language is not Italian.', $condition->summary());
>>>>>>> dev

    // Change the default language to Italian.
    $language = \Drupal::languageManager()->getLanguage('it');

    $condition = $this->manager->createInstance('language')
      ->setConfig('langcodes', ['en' => 'en', 'it' => 'it'])
      ->setContextValue('language', $language);

    $this->assertTrue($condition->execute(), 'Language condition passes as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is English, Italian.');
=======
    $this->assertEquals('The language is English, Italian.', $condition->summary());
>>>>>>> dev

    // Change to Italian only.
    $condition->setConfig('langcodes', ['it' => 'it']);
    $this->assertTrue($condition->execute(), 'Language condition passes as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is Italian.');
=======
    $this->assertEquals('The language is Italian.', $condition->summary());
>>>>>>> dev

    // Negate the condition
    $condition->setConfig('negate', TRUE);
    $this->assertFalse($condition->execute(), 'Language condition fails as expected.');
    // Check for the proper summary.
<<<<<<< HEAD
    $this->assertEqual($condition->summary(), 'The language is not Italian.');
=======
    $this->assertEquals('The language is not Italian.', $condition->summary());
>>>>>>> dev
  }

}
