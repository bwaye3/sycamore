<?php

namespace Drupal\Tests\language\Kernel;

use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Url;

/**
 * Tests the ConfigurableLanguage entity.
 *
 * @group language
 * @coversDefaultClass \Drupal\language\ConfigurableLanguageManager
 */
class ConfigurableLanguageManagerTest extends LanguageTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['user'];
=======
  protected static $modules = ['user'];
>>>>>>> dev

  /**
   * The language negotiator.
   *
   * @var \Drupal\language\LanguageNegotiatorInterface
   */
  protected $languageNegotiator;

  /**
   * The language manager.
   *
   * @var \Drupal\language\ConfigurableLanguageManagerInterface
   */
  protected $languageManager;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('user');

    $this->languageNegotiator = $this->container->get('language_negotiator');
    $this->languageManager = $this->container->get('language_manager');
  }

  /**
   * @covers ::getLanguageSwitchLinks
   */
  public function testLanguageSwitchLinks() {
    $this->languageNegotiator->setCurrentUser($this->prophesize('Drupal\Core\Session\AccountInterface')->reveal());
    $this->languageManager->getLanguageSwitchLinks(LanguageInterface::TYPE_INTERFACE, new Url('<current>'));
  }

}
