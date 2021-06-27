<?php

namespace Drupal\Tests\taxonomy\Functional;

use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\taxonomy\Entity\Term;
use Drupal\Tests\system\Functional\Entity\EntityWithUriCacheTagsTestBase;

/**
 * Tests the Taxonomy term entity's cache tags.
 *
 * @group taxonomy
 */
class TermCacheTagsTest extends EntityWithUriCacheTagsTestBase {

  /**
   * {@inheritdoc}
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

  /**
   * {@inheritdoc}
   */
  protected function createEntity() {
    // Create a "Camelids" vocabulary.
    $vocabulary = Vocabulary::create([
      'name' => 'Camelids',
      'vid' => 'camelids',
    ]);
    $vocabulary->save();

    // Create a "Llama" taxonomy term.
    $term = Term::create([
      'name' => 'Llama',
      'vid' => $vocabulary->id(),
    ]);
    $term->save();

    return $term;
  }

}
