<?php

namespace Drupal\Tests\syslog\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests syslog settings.
 *
 * @group syslog
 */
class SyslogTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['syslog'];
=======
  protected static $modules = ['syslog'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the syslog settings page.
   */
  public function testSettings() {
    $admin_user = $this->drupalCreateUser(['administer site configuration']);
    $this->drupalLogin($admin_user);

    // If we're on Windows, there is no configuration form.
    if (defined('LOG_LOCAL6')) {
<<<<<<< HEAD
      $this->drupalPostForm('admin/config/development/logging', ['syslog_facility' => LOG_LOCAL6], t('Save configuration'));
      $this->assertText(t('The configuration options have been saved.'));
=======
      $this->drupalGet('admin/config/development/logging');
      $this->submitForm(['syslog_facility' => LOG_LOCAL6], 'Save configuration');
      $this->assertSession()->pageTextContains('The configuration options have been saved.');
>>>>>>> dev

      $this->drupalGet('admin/config/development/logging');
      // Should be one field.
      $field = $this->xpath('//option[@value=:value]', [':value' => LOG_LOCAL6]);
      $this->assertSame('selected', $field[0]->getAttribute('selected'), 'Facility value saved.');
    }
  }

}
