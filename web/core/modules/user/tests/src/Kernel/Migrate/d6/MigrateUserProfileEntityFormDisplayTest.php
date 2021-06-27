<?php

namespace Drupal\Tests\user\Kernel\Migrate\d6;

use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Tests the user profile entity form display migration.
 *
 * @group migrate_drupal_6
 */
class MigrateUserProfileEntityFormDisplayTest extends MigrateDrupal6TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->executeMigrations([
      'user_profile_field',
      'user_profile_field_instance',
      'user_profile_entity_form_display',
    ]);
  }

  /**
   * Tests migration of user profile fields.
   */
  public function testUserProfileEntityFormDisplay() {
    $display = EntityFormDisplay::load('user.user.default');

    // Test a text field.
    $component = $display->getComponent('profile_color');
<<<<<<< HEAD
    $this->assertIdentical('text_textfield', $component['type']);

    // Test a list field.
    $component = $display->getComponent('profile_bands');
    $this->assertIdentical('text_textfield', $component['type']);

    // Test a date field.
    $component = $display->getComponent('profile_birthdate');
    $this->assertIdentical('datetime_default', $component['type']);
=======
    $this->assertSame('text_textfield', $component['type']);

    // Test a list field.
    $component = $display->getComponent('profile_bands');
    $this->assertSame('text_textfield', $component['type']);

    // Test a date field.
    $component = $display->getComponent('profile_birthdate');
    $this->assertSame('datetime_default', $component['type']);
>>>>>>> dev

    // Test PROFILE_PRIVATE field is hidden.
    $this->assertNull($display->getComponent('profile_sell_address'));

    // Test PROFILE_HIDDEN field is hidden.
    $this->assertNull($display->getComponent('profile_sold_to'));

    // Test that a checkbox field has the proper display label setting.
    $component = $display->getComponent('profile_really_really_love_mig');
<<<<<<< HEAD
    $this->assertIdentical('boolean_checkbox', $component['type']);
    $this->assertIdentical(TRUE, $component['settings']['display_label']);
=======
    $this->assertSame('boolean_checkbox', $component['type']);
    $this->assertTrue($component['settings']['display_label']);
>>>>>>> dev
  }

}
