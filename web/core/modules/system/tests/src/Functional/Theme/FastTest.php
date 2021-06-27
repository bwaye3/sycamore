<?php

namespace Drupal\Tests\system\Functional\Theme;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests autocompletion not loading registry.
 *
 * @group Theme
 */
class FastTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['theme_test'];
=======
  protected static $modules = ['theme_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->account = $this->drupalCreateUser(['access user profiles']);
  }

  /**
   * Tests access to user autocompletion and verify the correct results.
   */
  public function testUserAutocomplete() {
    $this->drupalLogin($this->account);
    $this->drupalGet('user/autocomplete', ['query' => ['q' => $this->account->getAccountName()]]);
    $this->assertRaw($this->account->getAccountName());
<<<<<<< HEAD
    $this->assertNoText('registry initialized', 'The registry was not initialized');
=======
    $this->assertNoText('registry initialized');
>>>>>>> dev
  }

}
