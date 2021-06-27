<?php

namespace Drupal\Tests\system\Kernel\Token;

use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;

/**
 * Base class for token replacement tests.
 */
abstract class TokenReplaceKernelTestBase extends EntityKernelTestBase {

  /**
   * The interface language.
   *
   * @var \Drupal\Core\Language\LanguageInterface
   */
  protected $interfaceLanguage;

  /**
   * Token service.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $tokenService;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system'];
=======
  protected static $modules = ['system'];
>>>>>>> dev

  protected function setUp() {
    parent::setUp();
    // Install default system configuration.
    $this->installConfig(['system']);
<<<<<<< HEAD
    \Drupal::service('router.builder')->rebuild();
=======
>>>>>>> dev

    $this->interfaceLanguage = \Drupal::languageManager()->getCurrentLanguage();
    $this->tokenService = \Drupal::token();
  }

}
