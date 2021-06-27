<?php

namespace Drupal\FunctionalTests\Routing;

use Drupal\Tests\BrowserTestBase;

/**
 * @group routing
 */
class DefaultFormatTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['system', 'default_format_test'];
=======
  protected static $modules = ['system', 'default_format_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  public function testFoo() {
    $this->drupalGet('/default_format_test/human');
    $this->assertSame('format:html', $this->getSession()->getPage()->getContent());
<<<<<<< HEAD
    $this->assertSame('MISS', $this->drupalGetHeader('X-Drupal-Cache'));
    $this->drupalGet('/default_format_test/human');
    $this->assertSame('format:html', $this->getSession()->getPage()->getContent());
    $this->assertSame('HIT', $this->drupalGetHeader('X-Drupal-Cache'));

    $this->drupalGet('/default_format_test/machine');
    $this->assertSame('format:json', $this->getSession()->getPage()->getContent());
    $this->assertSame('MISS', $this->drupalGetHeader('X-Drupal-Cache'));
    $this->drupalGet('/default_format_test/machine');
    $this->assertSame('format:json', $this->getSession()->getPage()->getContent());
    $this->assertSame('HIT', $this->drupalGetHeader('X-Drupal-Cache'));
=======
    $this->assertSession()->responseHeaderEquals('X-Drupal-Cache', 'MISS');
    $this->drupalGet('/default_format_test/human');
    $this->assertSame('format:html', $this->getSession()->getPage()->getContent());
    $this->assertSession()->responseHeaderEquals('X-Drupal-Cache', 'HIT');

    $this->drupalGet('/default_format_test/machine');
    $this->assertSame('format:json', $this->getSession()->getPage()->getContent());
    $this->assertSession()->responseHeaderEquals('X-Drupal-Cache', 'MISS');
    $this->drupalGet('/default_format_test/machine');
    $this->assertSame('format:json', $this->getSession()->getPage()->getContent());
    $this->assertSession()->responseHeaderEquals('X-Drupal-Cache', 'HIT');
>>>>>>> dev
  }

  public function testMultipleRoutesWithSameSingleFormat() {
    $this->drupalGet('/default_format_test/machine');
    $this->assertSame('format:json', $this->getSession()->getPage()->getContent());
  }

}
