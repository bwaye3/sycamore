<?php

namespace Drupal\Tests\system\Functional\Theme;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests adding Twig loaders.
 *
 * @group Theme
 */
class TwigLoaderTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['twig_loader_test'];
=======
  protected static $modules = ['twig_loader_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests adding an additional twig loader to the loader chain.
   */
  public function testTwigLoaderAddition() {
    $environment = \Drupal::service('twig');

    $template = $environment->loadTemplate('kittens');
<<<<<<< HEAD
    $this->assertEqual($template->render([]), 'kittens', 'Passing "kittens" to the custom Twig loader returns "kittens".');

    $template = $environment->loadTemplate('meow');
    $this->assertEqual($template->render([]), 'cats', 'Passing something other than "kittens" to the custom Twig loader returns "cats".');
=======
    $this->assertEquals('kittens', $template->render([]), 'Passing "kittens" to the custom Twig loader returns "kittens".');

    $template = $environment->loadTemplate('meow');
    $this->assertEquals('cats', $template->render([]), 'Passing something other than "kittens" to the custom Twig loader returns "cats".');
>>>>>>> dev
  }

}
