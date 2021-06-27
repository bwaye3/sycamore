<?php

namespace Drupal\Tests\shortcut\Kernel\Plugin\migrate\source\d7;

use Drupal\Tests\migrate\Kernel\MigrateSqlSourceTestBase;

/**
 * Tests D7 ShortcutSetUsers source plugin.
 *
 * @covers Drupal\shortcut\Plugin\migrate\source\d7\ShortcutSetUsers
 *
 * @group shortcut
 */
class ShortcutSetUsersTest extends MigrateSqlSourceTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['shortcut', 'migrate_drupal'];
=======
  protected static $modules = ['shortcut', 'migrate_drupal'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  public function providerSource() {
    $tests = [];

    // The source data.
    $tests[0]['source_data']['shortcut_set_users'] = [
      [
        'uid' => '2',
        'set_name' => 'shortcut-set-2',
      ],
    ];

    // The expected results are identical to the source data.
    $tests[0]['expected_data'] = $tests[0]['source_data']['shortcut_set_users'];

    return $tests;
  }

}
