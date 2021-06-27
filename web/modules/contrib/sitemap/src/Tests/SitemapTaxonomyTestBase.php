<?php

namespace Drupal\sitemap\Tests;

<<<<<<< HEAD
use Drupal\taxonomy\Tests\TaxonomyTestBase;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
=======
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Tests\field\Traits\EntityReferenceTestTrait;
use Drupal\Tests\taxonomy\Traits\TaxonomyTestTrait;
>>>>>>> dev

/**
 * Base class for some Sitemap test cases.
 */
<<<<<<< HEAD
abstract class SitemapTaxonomyTestBase extends TaxonomyTestBase {
=======
abstract class SitemapTaxonomyTestBase extends SitemapBrowserTestBase {

  use TaxonomyTestTrait;
  use EntityReferenceTestTrait;

  protected $defaultTheme = 'stark';
>>>>>>> dev

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = array('sitemap', 'node', 'taxonomy');
=======
  public static $modules = ['sitemap', 'node', 'taxonomy', 'views'];
>>>>>>> dev

  /**
   * A vocabulary entity.
   *
   * @var \Drupal\taxonomy\Entity\Vocabulary
   */
  protected $vocabulary;

  /**
   * A string to identify the field name for testing terms.
   *
   * @var string
   */
<<<<<<< HEAD
  protected $field_tags_name;
=======
  protected $fieldTagsName;
>>>>>>> dev

  /**
   * An array of taxonomy terms.
   *
   * @var array
   */
  protected $terms;

  /**
<<<<<<< HEAD
=======
   * A user account to test with.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  public $user;

  /**
>>>>>>> dev
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

<<<<<<< HEAD
=======
    // Ensure the Article node type.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType(['type' => 'article', 'name' => 'Article']);
    }

>>>>>>> dev
    // Create a vocabulary.
    $this->vocabulary = $this->createVocabulary();

    // Create user, then login.
<<<<<<< HEAD
    $this->user = $this->drupalCreateUser(array(
=======
    $this->user = $this->drupalCreateUser([
>>>>>>> dev
      'administer sitemap',
      'access sitemap',
      'administer nodes',
      'create article content',
      'administer taxonomy',
<<<<<<< HEAD
    ));
=======
    ]);
>>>>>>> dev
    $this->drupalLogin($this->user);

    // Configure the sitemap to display the vocabulary.
    $vid = $this->vocabulary->id();
<<<<<<< HEAD
    $edit = array(
      "show_vocabularies[$vid]" => $vid,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    $this->saveSitemapForm(["plugins[vocabulary:$vid][enabled]" => TRUE]);
>>>>>>> dev
  }

  /**
   * Create taxonomy terms.
   *
   * @param \Drupal\taxonomy\Entity\Vocabulary $vocabulary
   *   Taxonomy vocabulary.
   *
   * @return array
   *   List of tags.
<<<<<<< HEAD
   */
  protected function createTerms($vocabulary) {
    $terms = array(
      $this->createTerm($vocabulary),
      $this->createTerm($vocabulary),
      $this->createTerm($vocabulary),
    );
    $this->terms = $terms;

    // Make term 2 child of term 1, term 3 child of term 2.
    $edit = array(
      // Term 1.
      'terms[tid:' . $terms[0]->id() . ':0][term][tid]' => $terms[0]->id(),
      'terms[tid:' . $terms[0]->id() . ':0][term][parent]' => 0,
      'terms[tid:' . $terms[0]->id() . ':0][term][depth]' => 0,
      'terms[tid:' . $terms[0]->id() . ':0][weight]' => 0,

      // Term 2.
      'terms[tid:' . $terms[1]->id() . ':0][term][tid]' => $terms[1]->id(),
      'terms[tid:' . $terms[1]->id() . ':0][term][parent]' => $terms[0]->id(),
      'terms[tid:' . $terms[1]->id() . ':0][term][depth]' => 1,
      'terms[tid:' . $terms[1]->id() . ':0][weight]' => 0,

      // Term 3.
      'terms[tid:' . $terms[2]->id() . ':0][term][tid]' => $terms[2]->id(),
      'terms[tid:' . $terms[2]->id() . ':0][term][parent]' => $terms[1]->id(),
      'terms[tid:' . $terms[2]->id() . ':0][term][depth]' => 2,
      'terms[tid:' . $terms[2]->id() . ':0][weight]' => 0,
    );
    $this->drupalPostForm('admin/structure/taxonomy/manage/' . $vocabulary->get('vid') . '/overview', $edit, t('Save'));

    return $terms;
=======
   *
   * @throws \Exception
   */
  protected function createTerms(Vocabulary $vocabulary) {
    $term0 = $this->createTerm($vocabulary);
    $term1 = $this->createTerm($vocabulary);
    $term2 = $this->createTerm($vocabulary);
    return [$term0, $term1, $term2];
  }

  /**
   * Create taxonomy terms.
   *
   * @param \Drupal\taxonomy\Entity\Vocabulary $vocabulary
   *   Taxonomy vocabulary.
   *
   * @return array
   *   List of tags.
   *
   * @throws \Exception
   */
  protected function createNestedTerms(Vocabulary $vocabulary) {
    $term0 = $this->createTerm($vocabulary);
    $term1 = $this->createTerm($vocabulary, ['parent' => $term0->id()]);
    $term2 = $this->createTerm($vocabulary, ['parent' => $term1->id()]);
    return [$term0, $term1, $term2];
>>>>>>> dev
  }

  /**
   * Create node and assign tags to it.
   *
<<<<<<< HEAD
   * @param $terms array
   *   An array of taxonomy terms to apply to the node.
   */
  protected function createNodeWithTerms($terms = array()) {
=======
   * @param array $terms
   *   An array of taxonomy terms to apply to the node.
   *
   * @throws \Exception
   */
  protected function createNodeWithTerms(array $terms = []) {
>>>>>>> dev
    if (empty($terms)) {
      $this->terms = $this->createTerms($this->vocabulary);
    }

    // Add an entityreference field to a node bundle.
    $this->addEntityreferenceField();

    $values = [];
    foreach ($terms as $term) {
      $values[] = $term->getName();
    }
    $title = $this->randomString();
<<<<<<< HEAD
    $edit = array(
      'title[0][value]' => $title,
      $this->field_tags_name . '[target_id]' => implode(',', $values),
    );
=======
    $edit = [
      'title[0][value]' => $title,
      $this->fieldTagsName . '[target_id]' => implode(',', $values),
    ];
>>>>>>> dev
    $this->drupalPostForm('node/add/article', $edit, t('Save'));
  }

  /**
<<<<<<< HEAD
   * Add an entityreference field to tag nodes
   */
   protected function addEntityreferenceField() {
     $this->field_tags_name = 'field_' . $this->vocabulary->id();

     $handler_settings = array(
       'target_bundles' => array(
         $this->vocabulary->id() => $this->vocabulary->id(),
       ),
       'auto_create' => TRUE,
     );

     // Create the entity reference field for terms.
     $this->createEntityReferenceField('node', 'article', $this->field_tags_name, 'Tags', 'taxonomy_term', 'default', $handler_settings, FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED);
     // Configure for autocomplete display.
     EntityFormDisplay::load('node.article.default')
       ->setComponent($this->field_tags_name, array(
         'type' => 'entity_reference_autocomplete_tags',
       ))
       ->save();
   }
=======
   * Add an entityreference field to tag nodes.
   */
  protected function addEntityreferenceField() {
    $this->fieldTagsName = 'field_' . $this->vocabulary->id();

    $handler_settings = [
      'target_bundles' => [
        $this->vocabulary->id() => $this->vocabulary->id(),
      ],
      'auto_create' => TRUE,
    ];

    // Create the entity reference field for terms.
    $this->createEntityReferenceField('node', 'article', $this->fieldTagsName, 'Tags', 'taxonomy_term', 'default', $handler_settings, FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED);
    // Configure for autocomplete display.
    EntityFormDisplay::load('node.article.default')
      ->setComponent($this->fieldTagsName, [
        'type' => 'entity_reference_autocomplete_tags',
      ])
      ->save();
  }
>>>>>>> dev

}
