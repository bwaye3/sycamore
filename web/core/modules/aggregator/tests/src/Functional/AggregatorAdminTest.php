<?php

namespace Drupal\Tests\aggregator\Functional;

<<<<<<< HEAD
use Drupal\Component\Render\FormattableMarkup;

=======
>>>>>>> dev
/**
 * Tests aggregator admin pages.
 *
 * @group aggregator
 */
class AggregatorAdminTest extends AggregatorTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the settings form to ensure the correct default values are used.
   */
  public function testSettingsPage() {
    $this->drupalGet('admin/config');
    $this->clickLink('Aggregator');
    $this->clickLink('Settings');
    // Make sure that test plugins are present.
<<<<<<< HEAD
    $this->assertText('Test fetcher');
    $this->assertText('Test parser');
    $this->assertText('Test processor');
=======
    $this->assertSession()->pageTextContains('Test fetcher');
    $this->assertSession()->pageTextContains('Test parser');
    $this->assertSession()->pageTextContains('Test processor');
>>>>>>> dev

    // Set new values and enable test plugins.
    $edit = [
      'aggregator_allowed_html_tags' => '<a>',
      'aggregator_summary_items' => 10,
      'aggregator_clear' => 3600,
      'aggregator_teaser_length' => 200,
      'aggregator_fetcher' => 'aggregator_test_fetcher',
      'aggregator_parser' => 'aggregator_test_parser',
      'aggregator_processors[aggregator_test_processor]' => 'aggregator_test_processor',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/services/aggregator/settings', $edit, t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));

    foreach ($edit as $name => $value) {
      $this->assertFieldByName($name, $value, new FormattableMarkup('"@name" has correct default value.', ['@name' => $name]));
    }

    // Check for our test processor settings form.
    $this->assertText(t('Dummy length setting'));
=======
    $this->drupalGet('admin/config/services/aggregator/settings');
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');

    // Check that settings have the correct default value.
    foreach ($edit as $name => $value) {
      $this->assertSession()->fieldValueEquals($name, $value);
    }

    // Check for our test processor settings form.
    $this->assertSession()->pageTextContains('Dummy length setting');
>>>>>>> dev
    // Change its value to ensure that settingsSubmit is called.
    $edit = [
      'dummy_length' => 100,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/services/aggregator/settings', $edit, t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));
    $this->assertFieldByName('dummy_length', 100, '"dummy_length" has correct default value.');
=======
    $this->drupalGet('admin/config/services/aggregator/settings');
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');
    $this->assertSession()->fieldValueEquals('dummy_length', 100);
>>>>>>> dev

    // Make sure settings form is still accessible even after uninstalling a module
    // that provides the selected plugins.
    $this->container->get('module_installer')->uninstall(['aggregator_test']);
    $this->resetAll();
    $this->drupalGet('admin/config/services/aggregator/settings');
    $this->assertSession()->statusCodeEquals(200);
  }

  /**
   * Tests the overview page.
   */
  public function testOverviewPage() {
    $feed = $this->createFeed($this->getRSS091Sample());
    $this->drupalGet('admin/config/services/aggregator');

<<<<<<< HEAD
    $result = $this->xpath('//table/tbody/tr');
    // Check if the amount of feeds in the overview matches the amount created.
    $this->assertCount(1, $result, 'Created feed is found in the overview');
    // Check if the fields in the table match with what's expected.
    $link = $this->xpath('//table/tbody/tr//td[1]/a');
    $this->assertEquals($feed->label(), $link[0]->getText());
    $count = $this->container->get('entity_type.manager')->getStorage('aggregator_item')->getItemCount($feed);
    $td = $this->xpath('//table/tbody/tr//td[2]');
    $this->assertEquals(\Drupal::translation()->formatPlural($count, '1 item', '@count items'), $td[0]->getText());
=======
    // Check if the amount of feeds in the overview matches the amount created.
    $this->assertSession()->elementsCount('xpath', '//table/tbody/tr', 1);

    // Check if the fields in the table match with what's expected.
    $this->assertSession()->elementTextContains('xpath', '//table/tbody/tr//td[1]/a', $feed->label());
    $count = $this->container->get('entity_type.manager')->getStorage('aggregator_item')->getItemCount($feed);
    $this->assertSession()->elementTextContains('xpath', '//table/tbody/tr//td[2]', \Drupal::translation()->formatPlural($count, '1 item', '@count items'));
>>>>>>> dev

    // Update the items of the first feed.
    $feed->refreshItems();
    $this->drupalGet('admin/config/services/aggregator');
<<<<<<< HEAD
    $result = $this->xpath('//table/tbody/tr');
    // Check if the fields in the table match with what's expected.
    $link = $this->xpath('//table/tbody/tr//td[1]/a');
    $this->assertEquals($feed->label(), $link[0]->getText());
    $count = $this->container->get('entity_type.manager')->getStorage('aggregator_item')->getItemCount($feed);
    $td = $this->xpath('//table/tbody/tr//td[2]');
    $this->assertEquals(\Drupal::translation()->formatPlural($count, '1 item', '@count items'), $td[0]->getText());
=======
    $this->assertSession()->elementsCount('xpath', '//table/tbody/tr', 1);

    // Check if the fields in the table match with what's expected.
    $this->assertSession()->elementTextContains('xpath', '//table/tbody/tr//td[1]/a', $feed->label());
    $count = $this->container->get('entity_type.manager')->getStorage('aggregator_item')->getItemCount($feed);
    $this->assertSession()->elementTextContains('xpath', '//table/tbody/tr//td[2]', \Drupal::translation()->formatPlural($count, '1 item', '@count items'));
>>>>>>> dev
  }

}
