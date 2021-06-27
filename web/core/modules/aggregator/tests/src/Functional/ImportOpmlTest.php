<?php

namespace Drupal\Tests\aggregator\Functional;

use Drupal\aggregator\Entity\Feed;

/**
 * Tests OPML import.
 *
 * @group aggregator
 */
class ImportOpmlTest extends AggregatorTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'help'];
=======
  protected static $modules = ['block', 'help'];
>>>>>>> dev

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
      'administer news feeds',
      'access news feeds',
      'create article content',
      'administer blocks',
    ]);
    $this->drupalLogin($admin_user);
  }

  /**
   * Opens OPML import form.
   */
  public function openImportForm() {
    // Enable the help block.
    $this->drupalPlaceBlock('help_block', ['region' => 'help']);

    $this->drupalGet('admin/config/services/aggregator/add/opml');
<<<<<<< HEAD
    $this->assertText('A single OPML document may contain many feeds.', 'Found OPML help text.');
    $this->assertField('files[upload]', 'Found file upload field.');
    $this->assertField('remote', 'Found Remote URL field.');
    $this->assertField('refresh', '', 'Found Refresh field.');
=======
    $this->assertSession()->pageTextContains('A single OPML document may contain many feeds.');
    // Ensure that the file upload, remote URL, and refresh fields exist.
    $this->assertSession()->fieldExists('files[upload]');
    $this->assertSession()->fieldExists('remote');
    $this->assertSession()->fieldExists('refresh');
>>>>>>> dev
  }

  /**
   * Submits form filled with invalid fields.
   */
  public function validateImportFormFields() {
<<<<<<< HEAD
    $count_query = \Drupal::entityQuery('aggregator_feed')->count();
    $before = $count_query->execute();

    $edit = [];
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $edit, t('Import'));
    $this->assertRaw(t('<em>Either</em> upload a file or enter a URL.'), 'Error if no fields are filled.');
=======
    $count_query = \Drupal::entityQuery('aggregator_feed')->accessCheck(FALSE)->count();
    $before = $count_query->execute();

    $edit = [];
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('<em>Either</em> upload a file or enter a URL.'));
>>>>>>> dev

    $path = $this->getEmptyOpml();
    $edit = [
      'files[upload]' => $path,
      'remote' => file_create_url($path),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $edit, t('Import'));
    $this->assertRaw(t('<em>Either</em> upload a file or enter a URL.'), 'Error if both fields are filled.');

    $edit = ['remote' => 'invalidUrl://empty'];
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $edit, t('Import'));
    $this->assertText(t('The URL invalidUrl://empty is not valid.'), 'Error if the URL is invalid.');

    $after = $count_query->execute();
    $this->assertEqual($before, $after, 'No feeds were added during the three last form submissions.');
=======
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('<em>Either</em> upload a file or enter a URL.'));

    // Error if the URL is invalid.
    $edit = ['remote' => 'invalidUrl://empty'];
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('The URL invalidUrl://empty is not valid.');

    $after = $count_query->execute();
    $this->assertEquals($before, $after, 'No feeds were added during the three last form submissions.');
>>>>>>> dev
  }

  /**
   * Submits form with invalid, empty, and valid OPML files.
   */
  protected function submitImportForm() {
<<<<<<< HEAD
    $count_query = \Drupal::entityQuery('aggregator_feed')->count();
    $before = $count_query->execute();

    $form['files[upload]'] = $this->getInvalidOpml();
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $form, t('Import'));
    $this->assertText(t('No new feed has been added.'), 'Attempting to upload invalid XML.');

    $edit = ['remote' => file_create_url($this->getEmptyOpml())];
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $edit, t('Import'));
    $this->assertText(t('No new feed has been added.'), 'Attempting to load empty OPML from remote URL.');

    $after = $count_query->execute();
    $this->assertEqual($before, $after, 'No feeds were added during the two last form submissions.');
=======
    $count_query = \Drupal::entityQuery('aggregator_feed')->accessCheck(FALSE)->count();
    $before = $count_query->execute();

    // Attempting to upload invalid XML.
    $form['files[upload]'] = $this->getInvalidOpml();
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($form, 'Import');
    $this->assertSession()->pageTextContains('No new feed has been added.');

    // Attempting to load empty OPML from remote URL
    $edit = ['remote' => file_create_url($this->getEmptyOpml())];
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('No new feed has been added.');

    $after = $count_query->execute();
    $this->assertEquals($before, $after, 'No feeds were added during the two last form submissions.');
>>>>>>> dev

    foreach (Feed::loadMultiple() as $feed) {
      $feed->delete();
    }

    $feeds[0] = $this->getFeedEditArray();
    $feeds[1] = $this->getFeedEditArray();
    $feeds[2] = $this->getFeedEditArray();
    $edit = [
      'files[upload]' => $this->getValidOpml($feeds),
      'refresh'       => '900',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/services/aggregator/add/opml', $edit, t('Import'));
    $this->assertRaw(t('A feed with the URL %url already exists.', ['%url' => $feeds[0]['url[0][value]']]), 'Verifying that a duplicate URL was identified');
    $this->assertRaw(t('A feed named %title already exists.', ['%title' => $feeds[1]['title[0][value]']]), 'Verifying that a duplicate title was identified');

    $after = $count_query->execute();
    $this->assertEqual($after, 2, 'Verifying that two distinct feeds were added.');
=======
    $this->drupalGet('admin/config/services/aggregator/add/opml');
    $this->submitForm($edit, 'Import');
    // Verify that a duplicate URL was identified.
    $this->assertRaw(t('A feed with the URL %url already exists.', ['%url' => $feeds[0]['url[0][value]']]));
    // Verify that a duplicate title was identified.
    $this->assertRaw(t('A feed named %title already exists.', ['%title' => $feeds[1]['title[0][value]']]));

    $after = $count_query->execute();
    $this->assertEquals(2, $after, 'Verifying that two distinct feeds were added.');
>>>>>>> dev

    $feed_entities = Feed::loadMultiple();
    $refresh = TRUE;
    foreach ($feed_entities as $feed_entity) {
      $title[$feed_entity->getUrl()] = $feed_entity->label();
      $url[$feed_entity->label()] = $feed_entity->getUrl();
      $refresh = $refresh && $feed_entity->getRefreshRate() == 900;
    }

<<<<<<< HEAD
    $this->assertEqual($title[$feeds[0]['url[0][value]']], $feeds[0]['title[0][value]'], 'First feed was added correctly.');
    $this->assertEqual($url[$feeds[1]['title[0][value]']], $feeds[1]['url[0][value]'], 'Second feed was added correctly.');
=======
    $this->assertEquals($title[$feeds[0]['url[0][value]']], $feeds[0]['title[0][value]'], 'First feed was added correctly.');
    $this->assertEquals($url[$feeds[1]['title[0][value]']], $feeds[1]['url[0][value]'], 'Second feed was added correctly.');
>>>>>>> dev
    $this->assertTrue($refresh, 'Refresh times are correct.');
  }

  /**
   * Tests the import of an OPML file.
   */
  public function testOpmlImport() {
    $this->openImportForm();
    $this->validateImportFormFields();
    $this->submitImportForm();
  }

}
