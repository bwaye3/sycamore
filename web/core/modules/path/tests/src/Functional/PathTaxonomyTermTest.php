<?php

namespace Drupal\Tests\path\Functional;

<<<<<<< HEAD
use Drupal\Core\Database\Database;
=======
>>>>>>> dev
use Drupal\taxonomy\Entity\Vocabulary;

/**
 * Tests URL aliases for taxonomy terms.
 *
 * @group path
 */
class PathTaxonomyTermTest extends PathTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['taxonomy'];
=======
  protected static $modules = ['taxonomy'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a Tags vocabulary for the Article node type.
    $vocabulary = Vocabulary::create([
      'name' => t('Tags'),
      'vid' => 'tags',
    ]);
    $vocabulary->save();

    // Create and log in user.
    $web_user = $this->drupalCreateUser([
      'administer url aliases',
      'administer taxonomy',
      'access administration pages',
    ]);
    $this->drupalLogin($web_user);
  }

  /**
   * Tests alias functionality through the admin interfaces.
   */
  public function testTermAlias() {
    // Create a term in the default 'Tags' vocabulary with URL alias.
    $vocabulary = Vocabulary::load('tags');
    $description = $this->randomMachineName();
    $edit = [
      'name[0][value]' => $this->randomMachineName(),
      'description[0][value]' => $description,
      'path[0][alias]' => '/' . $this->randomMachineName(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $vocabulary->id() . '/add', $edit, t('Save'));
    $tid = Database::getConnection()->query("SELECT tid FROM {taxonomy_term_field_data} WHERE name = :name AND default_langcode = 1", [':name' => $edit['name[0][value]']])->fetchField();

    // Confirm that the alias works.
    $this->drupalGet($edit['path[0][alias]']);
    $this->assertText($description, 'Term can be accessed on URL alias.');
=======
    $this->drupalGet('admin/structure/taxonomy/manage/' . $vocabulary->id() . '/add');
    $this->submitForm($edit, 'Save');
    $tids = \Drupal::entityQuery('taxonomy_term')
      ->accessCheck(FALSE)
      ->condition('name', $edit['name[0][value]'])
      ->condition('default_langcode', 1)
      ->execute();
    $tid = reset($tids);

    // Confirm that the alias works.
    $this->drupalGet($edit['path[0][alias]']);
    $this->assertSession()->pageTextContains($description);
>>>>>>> dev

    // Confirm the 'canonical' and 'shortlink' URLs.
    $elements = $this->xpath("//link[contains(@rel, 'canonical') and contains(@href, '" . $edit['path[0][alias]'] . "')]");
    $this->assertTrue(!empty($elements), 'Term page contains canonical link URL.');
    $elements = $this->xpath("//link[contains(@rel, 'shortlink') and contains(@href, 'taxonomy/term/" . $tid . "')]");
    $this->assertTrue(!empty($elements), 'Term page contains shortlink URL.');

    // Change the term's URL alias.
    $edit2 = [];
    $edit2['path[0][alias]'] = '/' . $this->randomMachineName();
<<<<<<< HEAD
    $this->drupalPostForm('taxonomy/term/' . $tid . '/edit', $edit2, t('Save'));

    // Confirm that the changed alias works.
    $this->drupalGet(trim($edit2['path[0][alias]'], '/'));
    $this->assertText($description, 'Term can be accessed on changed URL alias.');

    // Confirm that the old alias no longer works.
    $this->drupalGet(trim($edit['path[0][alias]'], '/'));
    $this->assertNoText($description, 'Old URL alias has been removed after altering.');
=======
    $this->drupalGet('taxonomy/term/' . $tid . '/edit');
    $this->submitForm($edit2, 'Save');

    // Confirm that the changed alias works.
    $this->drupalGet(trim($edit2['path[0][alias]'], '/'));
    $this->assertSession()->pageTextContains($description);

    // Confirm that the old alias no longer works.
    $this->drupalGet(trim($edit['path[0][alias]'], '/'));
    $this->assertNoText($description);
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(404);

    // Remove the term's URL alias.
    $edit3 = [];
    $edit3['path[0][alias]'] = '';
<<<<<<< HEAD
    $this->drupalPostForm('taxonomy/term/' . $tid . '/edit', $edit3, t('Save'));

    // Confirm that the alias no longer works.
    $this->drupalGet(trim($edit2['path[0][alias]'], '/'));
    $this->assertNoText($description, 'Old URL alias has been removed after altering.');
=======
    $this->drupalGet('taxonomy/term/' . $tid . '/edit');
    $this->submitForm($edit3, 'Save');

    // Confirm that the alias no longer works.
    $this->drupalGet(trim($edit2['path[0][alias]'], '/'));
    $this->assertNoText($description);
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(404);
  }

}
