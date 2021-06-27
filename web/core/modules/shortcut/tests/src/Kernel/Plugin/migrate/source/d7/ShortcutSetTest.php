<?php

namespace Drupal\Tests\shortcut\Kernel\Plugin\migrate\source\d7;

use Drupal\Tests\migrate\Kernel\MigrateSqlSourceTestBase;

/**
 * Tests D7 ShortcutSet source plugin.
 *
 * @covers Drupal\shortcut\Plugin\migrate\source\d7\ShortcutSet
 *
 * @group shortcut
 */
class ShortcutSetTest extends MigrateSqlSourceTestBase {

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
    $tests[0]['source_data']['shortcut_set'] = [
      [
        'set_name' => 'shortcut-set-2',
        'title' => 'Alternative shortcut set',
      ],
    ];

    // The expected results are identical to the source data.
    $tests[0]['expected_data'] = $tests[0]['source_data']['shortcut_set'];

    return $tests;
  }

}
