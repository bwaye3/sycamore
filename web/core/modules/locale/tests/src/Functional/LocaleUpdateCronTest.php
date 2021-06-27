<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Core\Database\Database;
use Drupal\Tests\Traits\Core\CronRunTrait;

/**
 * Tests for using cron to update project interface translations.
 *
 * @group locale
 */
class LocaleUpdateCronTest extends LocaleUpdateBase {

  use CronRunTrait;

  protected $batchOutput = [];

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
    $admin_user = $this->drupalCreateUser([
      'administer modules',
      'administer site configuration',
      'administer languages',
      'access administration pages',
      'translate interface',
    ]);
    $this->drupalLogin($admin_user);
    $this->addLanguage('de');
  }

  /**
   * Tests interface translation update using cron.
   */
  public function testUpdateCron() {
    // Set a flag to let the locale_test module replace the project data with a
    // set of test projects.
    \Drupal::state()->set('locale.test_projects_alter', TRUE);

    // Setup local and remote translations files.
    $this->setTranslationFiles();
    $this->config('locale.settings')->set('translation.default_filename', '%project-%version.%language._po')->save();

    // Update translations using batch to ensure a clean test starting point.
    $this->drupalGet('admin/reports/translations/check');
<<<<<<< HEAD
    $this->drupalPostForm('admin/reports/translations', [], t('Update translations'));
=======
    $this->drupalGet('admin/reports/translations');
    $this->submitForm([], 'Update translations');
>>>>>>> dev

    // Store translation status for comparison.
    $initial_history = locale_translation_get_file_history();

    // Prepare for test: Simulate new translations being available.
    // Change the last updated timestamp of a translation file.
    $contrib_module_two_uri = 'public://local/contrib_module_two-8.x-2.0-beta4.de._po';
    touch(\Drupal::service('file_system')->realpath($contrib_module_two_uri), REQUEST_TIME);

    // Prepare for test: Simulate that the file has not been checked for a long
    // time. Set the last_check timestamp to zero.
    $query = Database::getConnection()->update('locale_file');
    $query->fields(['last_checked' => 0]);
    $query->condition('project', 'contrib_module_two');
    $query->condition('langcode', 'de');
    $query->execute();

    // Test: Disable cron update and verify that no tasks are added to the
    // queue.
    $edit = [
      'update_interval_days' => 0,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Execute locale cron tasks to add tasks to the queue.
    locale_cron();

    // Check whether no tasks are added to the queue.
    $queue = \Drupal::queue('locale_translation', TRUE);
<<<<<<< HEAD
    $this->assertEqual($queue->numberOfItems(), 0, 'Queue is empty');
=======
    $this->assertEquals(0, $queue->numberOfItems(), 'Queue is empty');
>>>>>>> dev

    // Test: Enable cron update and check if update tasks are added to the
    // queue.
    // Set cron update to Weekly.
    $edit = [
      'update_interval_days' => 7,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/translate/settings', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/translate/settings');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Execute locale cron tasks to add tasks to the queue.
    locale_cron();

    // Check whether tasks are added to the queue.
    $queue = \Drupal::queue('locale_translation', TRUE);
<<<<<<< HEAD
    $this->assertEqual($queue->numberOfItems(), 2, 'Queue holds tasks for one project.');
    $item = $queue->claimItem();
    $queue->releaseItem($item);
    $this->assertEqual($item->data[1][0], 'contrib_module_two', 'Queue holds tasks for contrib module one.');
=======
    $this->assertEquals(2, $queue->numberOfItems(), 'Queue holds tasks for one project.');
    $item = $queue->claimItem();
    $queue->releaseItem($item);
    $this->assertEquals('contrib_module_two', $item->data[1][0], 'Queue holds tasks for contrib module one.');
>>>>>>> dev

    // Test: Run cron for a second time and check if tasks are not added to
    // the queue twice.
    locale_cron();

    // Check whether no more tasks are added to the queue.
    $queue = \Drupal::queue('locale_translation', TRUE);
<<<<<<< HEAD
    $this->assertEqual($queue->numberOfItems(), 2, 'Queue holds tasks for one project.');
=======
    $this->assertEquals(2, $queue->numberOfItems(), 'Queue holds tasks for one project.');
>>>>>>> dev

    // Ensure last checked is updated to a greater time than the initial value.
    sleep(1);
    // Test: Execute cron and check if tasks are executed correctly.
    // Run cron to process the tasks in the queue.
    $this->cronRun();

    drupal_static_reset('locale_translation_get_file_history');
    $history = locale_translation_get_file_history();
    $initial = $initial_history['contrib_module_two']['de'];
    $current = $history['contrib_module_two']['de'];
<<<<<<< HEAD
    $this->assertTrue($current->timestamp > $initial->timestamp, 'Timestamp is updated');
    $this->assertTrue($current->last_checked > $initial->last_checked, 'Last checked is updated');
=======
    // Verify that the translation of contrib_module_one is imported and
    // updated.
    $this->assertGreaterThan($initial->timestamp, $current->timestamp);
    $this->assertGreaterThan($initial->last_checked, $current->last_checked);
>>>>>>> dev
  }

}
