<?php

namespace Drupal\Tests\filter\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\user\RoleInterface;

/**
 * Tests hooks for text formats insert/update/disable.
 *
 * @group filter
 */
class FilterHooksTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'filter_test'];
=======
  protected static $modules = ['node', 'filter_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests hooks on format management.
   *
   * Tests that hooks run correctly on creating, editing, and deleting a text
   * format.
   */
  public function testFilterHooks() {
    // Create content type, with underscores.
    $type_name = 'test_' . strtolower($this->randomMachineName());
    $type = $this->drupalCreateContentType(['name' => $type_name, 'type' => $type_name]);
    $node_permission = "create $type_name content";

    $admin_user = $this->drupalCreateUser([
      'administer filters',
      'administer nodes',
      $node_permission,
    ]);
    $this->drupalLogin($admin_user);

    // Add a text format.
    $name = $this->randomMachineName();
    $edit = [];
    $edit['format'] = mb_strtolower($this->randomMachineName());
    $edit['name'] = $name;
    $edit['roles[' . RoleInterface::ANONYMOUS_ID . ']'] = 1;
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/content/formats/add', $edit, t('Save configuration'));
    $this->assertRaw(t('Added text format %format.', ['%format' => $name]));
    $this->assertText('hook_filter_format_insert invoked.');
=======
    $this->drupalGet('admin/config/content/formats/add');
    $this->submitForm($edit, 'Save configuration');
    $this->assertRaw(t('Added text format %format.', ['%format' => $name]));
    $this->assertSession()->pageTextContains('hook_filter_format_insert invoked.');
>>>>>>> dev

    $format_id = $edit['format'];

    // Update text format.
    $edit = [];
    $edit['roles[' . RoleInterface::AUTHENTICATED_ID . ']'] = 1;
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/content/formats/manage/' . $format_id, $edit, t('Save configuration'));
    $this->assertRaw(t('The text format %format has been updated.', ['%format' => $name]));
    $this->assertText('hook_filter_format_update invoked.');
=======
    $this->drupalGet('admin/config/content/formats/manage/' . $format_id);
    $this->submitForm($edit, 'Save configuration');
    $this->assertRaw(t('The text format %format has been updated.', ['%format' => $name]));
    $this->assertSession()->pageTextContains('hook_filter_format_update invoked.');
>>>>>>> dev

    // Use the format created.
    $title = $this->randomMachineName(8);
    $edit = [];
    $edit['title[0][value]'] = $title;
    $edit['body[0][value]'] = $this->randomMachineName(32);
    $edit['body[0][format]'] = $format_id;
<<<<<<< HEAD
    $this->drupalPostForm("node/add/{$type->id()}", $edit, t('Save'));
    $this->assertText(t('@type @title has been created.', ['@type' => $type_name, '@title' => $title]));

    // Disable the text format.
    $this->drupalPostForm('admin/config/content/formats/manage/' . $format_id . '/disable', [], t('Disable'));
    $this->assertRaw(t('Disabled text format %format.', ['%format' => $name]));
    $this->assertText('hook_filter_format_disable invoked.');
=======
    $this->drupalGet("node/add/{$type->id()}");
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains($type_name . ' ' . $title . ' has been created.');

    // Disable the text format.
    $this->drupalGet('admin/config/content/formats/manage/' . $format_id . '/disable');
    $this->submitForm([], 'Disable');
    $this->assertRaw(t('Disabled text format %format.', ['%format' => $name]));
    $this->assertSession()->pageTextContains('hook_filter_format_disable invoked.');
>>>>>>> dev
  }

}
