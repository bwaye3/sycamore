<?php

namespace Drupal\Tests\statistics\Functional;

use Drupal\Core\Database\Database;
use Drupal\Tests\BrowserTestBase;
use Drupal\node\Entity\Node;

/**
 * Tests request logging for cached and uncached pages.
 *
<<<<<<< HEAD
 * We subclass WebTestBase rather than StatisticsTestBase, because we
=======
 * We subclass BrowserTestBase rather than StatisticsTestBase, because we
>>>>>>> dev
 * want to test requests from an anonymous user.
 *
 * @group statistics
 */
class StatisticsLoggingTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'statistics', 'block', 'locale'];
=======
  protected static $modules = ['node', 'statistics', 'block', 'locale'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * User with permissions to create and edit pages.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $authUser;

  /**
   * Associative array representing a hypothetical Drupal language.
   *
   * @var array
   */
  protected $language;

  /**
   * The Guzzle HTTP client.
   *
   * @var \GuzzleHttp\Client
   */
  protected $client;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create Basic page node type.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);
    }

    $this->authUser = $this->drupalCreateUser([
      // For node creation.
      'access content',
      'create page content',
      'edit own page content',
      // For language negotiation administration.
      'administer languages',
      'access administration pages',
    ]);

    // Ensure we have a node page to access.
    $this->node = $this->drupalCreateNode(['title' => $this->randomMachineName(255), 'uid' => $this->authUser->id()]);

    // Add a custom language and enable path-based language negotiation.
    $this->drupalLogin($this->authUser);
    $this->language = [
      'predefined_langcode' => 'custom',
      'langcode' => 'xx',
      'label' => $this->randomMachineName(16),
      'direction' => 'ltr',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $this->language, t('Add custom language'));
    $this->drupalPostForm('admin/config/regional/language/detection', ['language_interface[enabled][language-url]' => 1], t('Save settings'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($this->language, 'Add custom language');
    $this->drupalGet('admin/config/regional/language/detection');
    $this->submitForm(['language_interface[enabled][language-url]' => 1], 'Save settings');
>>>>>>> dev
    $this->drupalLogout();

    // Enable access logging.
    $this->config('statistics.settings')
      ->set('count_content_views', 1)
      ->save();

    // Clear the logs.
    Database::getConnection()->truncate('node_counter');
    $this->client = \Drupal::httpClient();
  }

  /**
   * Verifies node hit counter logging and script placement.
   */
  public function testLogging() {
    $path = 'node/' . $this->node->id();
    $module_path = drupal_get_path('module', 'statistics');
    $stats_path = base_path() . $module_path . '/statistics.php';
    $lib_path = base_path() . $module_path . '/statistics.js';
    $expected_library = '/<script src=".*?' . preg_quote($lib_path, '/.') . '.*?">/is';

    // Verify that logging scripts are not found on a non-node page.
    $this->drupalGet('node');
    $settings = $this->getDrupalSettings();
<<<<<<< HEAD
    $this->assertSession()->responseNotMatches($expected_library, 'Statistics library JS not found on node page.');
=======
    // Statistics library JS should not be present.
    $this->assertSession()->responseNotMatches($expected_library);
>>>>>>> dev
    $this->assertFalse(isset($settings['statistics']), 'Statistics settings not found on node page.');

    // Verify that logging scripts are not found on a non-existent node page.
    $this->drupalGet('node/9999');
    $settings = $this->getDrupalSettings();
<<<<<<< HEAD
    $this->assertSession()->responseNotMatches($expected_library, 'Statistics library JS not found on non-existent node page.');
=======
    // Statistics library JS should not be present.
    $this->assertSession()->responseNotMatches($expected_library);
>>>>>>> dev
    $this->assertFalse(isset($settings['statistics']), 'Statistics settings not found on node page.');

    // Verify that logging scripts are found on a valid node page.
    $this->drupalGet($path);
    $settings = $this->getDrupalSettings();
<<<<<<< HEAD
    $this->assertPattern($expected_library);
    $this->assertIdentical($this->node->id(), $settings['statistics']['data']['nid'], 'Found statistics settings on node page.');
=======
    $this->assertSession()->responseMatches($expected_library);
    $this->assertSame($settings['statistics']['data']['nid'], $this->node->id(), 'Found statistics settings on node page.');
>>>>>>> dev

    // Verify the same when loading the site in a non-default language.
    $this->drupalGet($this->language['langcode'] . '/' . $path);
    $settings = $this->getDrupalSettings();
<<<<<<< HEAD
    $this->assertPattern($expected_library);
    $this->assertIdentical($this->node->id(), $settings['statistics']['data']['nid'], 'Found statistics settings on valid node page in a non-default language.');
=======
    $this->assertSession()->responseMatches($expected_library);
    $this->assertSame($settings['statistics']['data']['nid'], $this->node->id(), 'Found statistics settings on valid node page in a non-default language.');
>>>>>>> dev

    // Manually call statistics.php to simulate ajax data collection behavior.
    global $base_root;
    $post = ['nid' => $this->node->id()];
    $this->client->post($base_root . $stats_path, ['form_params' => $post]);
    $node_counter = \Drupal::service('statistics.storage.node')->fetchView($this->node->id());
<<<<<<< HEAD
    $this->assertIdentical(1, $node_counter->getTotalCount());
=======
    $this->assertSame(1, $node_counter->getTotalCount());
>>>>>>> dev

    // Try fetching statistics for an invalid node ID and verify it returns
    // FALSE.
    $node_id = 1000000;
    $node = Node::load($node_id);
    $this->assertNull($node);

    // This is a test specifically for the deprecated statistics_get() function
    // and so should remain unconverted until that function is removed.
    $result = \Drupal::service('statistics.storage.node')->fetchView($node_id);
<<<<<<< HEAD
    $this->assertIdentical($result, FALSE);
=======
    $this->assertFalse($result);
>>>>>>> dev
  }

}
