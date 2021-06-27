<?php

namespace Drupal\Tests\system\Kernel\Render;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the Classy theme.
 *
 * @group Theme
 */
class ClassyTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['system', 'twig_theme_test'];
=======
  protected static $modules = ['system', 'twig_theme_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function setUp() {
=======
  public function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Use the classy theme.
    $this->container->get('theme_installer')->install(['classy']);
    $this->container->get('config.factory')
      ->getEditable('system.theme')
      ->set('default', 'classy')
      ->save();
    // Clear the theme registry.
    $this->container->set('theme.registry', NULL);

  }

  /**
<<<<<<< HEAD
   * Test the classy theme.
=======
   * Tests the classy theme.
>>>>>>> dev
   */
  public function testClassyTheme() {
    \Drupal::messenger()->addError('An error occurred');
    \Drupal::messenger()->addStatus('But then something nice happened');
    $messages = [
      '#type' => 'status_messages',
    ];
    $this->render($messages);
    $this->assertNoText('custom-test-messages-class', 'The custom class attribute value added in the status messages preprocess function is not displayed as page content.');
  }

}
