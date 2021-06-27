<?php

namespace Drupal\Tests\system\Functional\Common;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the DateFormatterInterface::format() function.
 *
 * @group Common
 */
class FormatDateTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests admin-defined formats in DateFormatterInterface::format().
   */
  public function testAdminDefinedFormatDate() {
    // Create and log in an admin user.
    $this->drupalLogin($this->drupalCreateUser([
      'administer site configuration',
    ]));

    // Add new date format.
    $edit = [
      'id' => 'example_style',
      'label' => 'Example Style',
      'date_format_pattern' => 'j M y',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
>>>>>>> dev

    // Add a second date format with a different case than the first.
    $edit = [
      'id' => 'example_style_uppercase',
      'label' => 'Example Style Uppercase',
      'date_format_pattern' => 'j M Y',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('Custom date format added.'));
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('Custom date format added.');
>>>>>>> dev

    /** @var \Drupal\Core\Datetime\DateFormatterInterface $date_formatter */
    $date_formatter = $this->container->get('date.formatter');

    $timestamp = strtotime('2007-03-10T00:00:00+00:00');
<<<<<<< HEAD
    $this->assertIdentical($date_formatter->format($timestamp, 'example_style', '', 'America/Los_Angeles'), '9 Mar 07');
    $this->assertIdentical($date_formatter->format($timestamp, 'example_style_uppercase', '', 'America/Los_Angeles'), '9 Mar 2007');
    $this->assertIdentical($date_formatter->format($timestamp, 'undefined_style'), $date_formatter->format($timestamp, 'fallback'), 'Test DateFormatterInterface::format() defaulting to `fallback` when $type not found.');
=======
    $this->assertSame($date_formatter->format($timestamp, 'example_style', '', 'America/Los_Angeles'), '9 Mar 07');
    $this->assertSame($date_formatter->format($timestamp, 'example_style_uppercase', '', 'America/Los_Angeles'), '9 Mar 2007');
    $this->assertSame($date_formatter->format($timestamp, 'undefined_style'), $date_formatter->format($timestamp, 'fallback'), 'Test DateFormatterInterface::format() defaulting to `fallback` when $type not found.');
>>>>>>> dev
  }

}
