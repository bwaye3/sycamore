<?php

namespace Drupal\Tests\system\Functional\System;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests validity of date format machine names.
 *
 * @group system
 */
class DateFormatsMachineNameTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    // Create a new administrator user for the test.
    $admin = $this->drupalCreateUser(['administer site configuration']);
    $this->drupalLogin($admin);
  }

  /**
   * Tests that date formats cannot be created with invalid machine names.
   */
  public function testDateFormatsMachineNameAllowedValues() {
    // Try to create a date format with a not allowed character to test the date
    // format specific machine name replace pattern.
    $edit = [
      'label' => 'Something Not Allowed',
      'id' => 'something.bad',
      'date_format_pattern' => 'Y-m-d',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('The machine-readable name must be unique, and can only contain lowercase letters, numbers, and underscores. Additionally, it can not be the reserved word "custom".'), 'It is not possible to create a date format with the machine name that has any character other than lowercase letters, digits or underscore.');
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('The machine-readable name must be unique, and can only contain lowercase letters, numbers, and underscores. Additionally, it can not be the reserved word "custom".');
>>>>>>> dev

    // Try to create a date format with the reserved machine name "custom".
    $edit = [
      'label' => 'Custom',
      'id' => 'custom',
      'date_format_pattern' => 'Y-m-d',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('The machine-readable name must be unique, and can only contain lowercase letters, numbers, and underscores. Additionally, it can not be the reserved word "custom".'), 'It is not possible to create a date format with the machine name "custom".');
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('The machine-readable name must be unique, and can only contain lowercase letters, numbers, and underscores. Additionally, it can not be the reserved word "custom".');
>>>>>>> dev

    // Try to create a date format with a machine name, "fallback", that
    // already exists.
    $edit = [
      'label' => 'Fallback',
      'id' => 'fallback',
      'date_format_pattern' => 'j/m/Y',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('The machine-readable name is already in use. It must be unique.'), 'It is not possible to create a date format with the machine name "fallback". It is a built-in format that already exists.');
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('The machine-readable name is already in use. It must be unique.');
>>>>>>> dev

    // Create a date format with a machine name distinct from the previous two.
    $id = mb_strtolower($this->randomMachineName(16));
    $edit = [
      'label' => $this->randomMachineName(16),
      'id' => $id,
      'date_format_pattern' => 'd/m/Y',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('Custom date format added.'), 'It is possible to create a date format with a new machine name.');
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('Custom date format added.');
>>>>>>> dev

    // Try to create a date format with same machine name as the previous one.
    $edit = [
      'label' => $this->randomMachineName(16),
      'id' => $id,
      'date_format_pattern' => 'd-m-Y',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/date-time/formats/add', $edit, t('Add format'));
    $this->assertText(t('The machine-readable name is already in use. It must be unique.'), 'It is not possible to create a new date format with an existing machine name.');
=======
    $this->drupalGet('admin/config/regional/date-time/formats/add');
    $this->submitForm($edit, 'Add format');
    $this->assertSession()->pageTextContains('The machine-readable name is already in use. It must be unique.');
>>>>>>> dev
  }

}
