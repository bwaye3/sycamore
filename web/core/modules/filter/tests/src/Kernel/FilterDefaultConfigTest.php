<?php

namespace Drupal\Tests\filter\Kernel;

use Drupal\filter\Entity\FilterFormat;
use Drupal\KernelTests\KernelTestBase;
use Drupal\user\RoleInterface;

/**
 * Tests text format default configuration.
 *
 * @group filter
 */
class FilterDefaultConfigTest extends KernelTestBase {

<<<<<<< HEAD
  public static $modules = ['system', 'user', 'filter', 'filter_test'];

  protected function setUp() {
=======
  protected static $modules = ['system', 'user', 'filter', 'filter_test'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Drupal\filter\FilterPermissions::permissions() builds a URL to output
    // a link in the description.

    $this->installEntitySchema('user');

    // Install filter_test module, which ships with custom default format.
    $this->installConfig(['user', 'filter_test']);
  }

  /**
   * Tests installation of default formats.
   */
  public function testInstallation() {
    // Verify that the format was installed correctly.
    $format = FilterFormat::load('filter_test');
    $this->assertTrue((bool) $format);
<<<<<<< HEAD
    $this->assertEqual($format->id(), 'filter_test');
    $this->assertEqual($format->label(), 'Test format');
    $this->assertEqual($format->get('weight'), 2);
=======
    $this->assertEquals('filter_test', $format->id());
    $this->assertEquals('Test format', $format->label());
    $this->assertEquals(2, $format->get('weight'));
>>>>>>> dev

    // Verify that format default property values have been added/injected.
    $this->assertNotEmpty($format->uuid());

    // Verify that the loaded format does not contain any roles.
<<<<<<< HEAD
    $this->assertEqual($format->get('roles'), NULL);
    // Verify that the defined roles in the default config have been processed.
    $this->assertEqual(array_keys(filter_get_roles_by_format($format)), [
      RoleInterface::ANONYMOUS_ID,
      RoleInterface::AUTHENTICATED_ID,
    ]);

    // Verify enabled filters.
    $filters = $format->get('filters');
    $this->assertEqual($filters['filter_html_escape']['status'], 1);
    $this->assertEqual($filters['filter_html_escape']['weight'], -10);
    $this->assertEqual($filters['filter_html_escape']['provider'], 'filter');
    $this->assertEqual($filters['filter_html_escape']['settings'], []);
    $this->assertEqual($filters['filter_autop']['status'], 1);
    $this->assertEqual($filters['filter_autop']['weight'], 0);
    $this->assertEqual($filters['filter_autop']['provider'], 'filter');
    $this->assertEqual($filters['filter_autop']['settings'], []);
    $this->assertEqual($filters['filter_url']['status'], 1);
    $this->assertEqual($filters['filter_url']['weight'], 0);
    $this->assertEqual($filters['filter_url']['provider'], 'filter');
    $this->assertEqual($filters['filter_url']['settings'], [
      'filter_url_length' => 72,
    ]);
=======
    $this->assertNull($format->get('roles'));
    // Verify that the defined roles in the default config have been processed.
    $this->assertEquals([RoleInterface::ANONYMOUS_ID, RoleInterface::AUTHENTICATED_ID], array_keys(filter_get_roles_by_format($format)));

    // Verify enabled filters.
    $filters = $format->get('filters');
    $this->assertEquals(1, $filters['filter_html_escape']['status']);
    $this->assertEquals(-10, $filters['filter_html_escape']['weight']);
    $this->assertEquals('filter', $filters['filter_html_escape']['provider']);
    $this->assertEquals([], $filters['filter_html_escape']['settings']);
    $this->assertEquals(1, $filters['filter_autop']['status']);
    $this->assertEquals(0, $filters['filter_autop']['weight']);
    $this->assertEquals('filter', $filters['filter_autop']['provider']);
    $this->assertEquals([], $filters['filter_autop']['settings']);
    $this->assertEquals(1, $filters['filter_url']['status']);
    $this->assertEquals(0, $filters['filter_url']['weight']);
    $this->assertEquals('filter', $filters['filter_url']['provider']);
    $this->assertEquals(['filter_url_length' => 72], $filters['filter_url']['settings']);
>>>>>>> dev
  }

  /**
   * Tests that changes to FilterFormat::$roles do not have an effect.
   */
  public function testUpdateRoles() {
    // Verify role permissions declared in default config.
    $format = FilterFormat::load('filter_test');
<<<<<<< HEAD
    $this->assertEqual(array_keys(filter_get_roles_by_format($format)), [
      RoleInterface::ANONYMOUS_ID,
      RoleInterface::AUTHENTICATED_ID,
    ]);
=======
    $this->assertEquals([RoleInterface::ANONYMOUS_ID, RoleInterface::AUTHENTICATED_ID], array_keys(filter_get_roles_by_format($format)));
>>>>>>> dev

    // Attempt to change roles.
    $format->set('roles', [
      RoleInterface::AUTHENTICATED_ID,
    ]);
    $format->save();

    // Verify that roles have not been updated.
    $format = FilterFormat::load('filter_test');
<<<<<<< HEAD
    $this->assertEqual(array_keys(filter_get_roles_by_format($format)), [
      RoleInterface::ANONYMOUS_ID,
      RoleInterface::AUTHENTICATED_ID,
    ]);
=======
    $this->assertEquals([RoleInterface::ANONYMOUS_ID, RoleInterface::AUTHENTICATED_ID], array_keys(filter_get_roles_by_format($format)));
>>>>>>> dev
  }

}
