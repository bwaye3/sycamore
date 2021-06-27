<?php

namespace Drupal\Tests\taxonomy\Kernel\Views;

use Drupal\Core\Link;
use Drupal\Core\Render\RenderContext;
use Drupal\Tests\taxonomy\Traits\TaxonomyTestTrait;
use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Tests\ViewTestData;
use Drupal\views\Views;

/**
 * Tests the taxonomy term TID field handler.
 *
 * @group taxonomy
 */
class TaxonomyFieldTidTest extends ViewsKernelTestBase {

  use TaxonomyTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'taxonomy',
    'taxonomy_test_views',
    'text',
    'filter',
  ];

  /**
   * {@inheritdoc}
   */
  public static $testViews = ['test_taxonomy_tid_field'];

  /**
   * A taxonomy term to use in this test.
   *
   * @var \Drupal\taxonomy\TermInterface
   */
  protected $term1;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $this->installEntitySchema('taxonomy_term');
    $this->installConfig(['filter']);

    /** @var \Drupal\taxonomy\Entity\Vocabulary $vocabulary */
    $vocabulary = $this->createVocabulary();
    $this->term1 = $this->createTerm($vocabulary);

<<<<<<< HEAD
    ViewTestData::createTestViews(get_class($this), ['taxonomy_test_views']);
=======
    ViewTestData::createTestViews(static::class, ['taxonomy_test_views']);
>>>>>>> dev
  }

  /**
   * Tests the taxonomy field handler.
   */
  public function testViewsHandlerTidField() {
    /** @var \Drupal\Core\Render\RendererInterface $renderer */
    $renderer = \Drupal::service('renderer');

    $view = Views::getView('test_taxonomy_tid_field');
    $this->executeView($view);

    $actual = $renderer->executeInRenderContext(new RenderContext(), function () use ($view) {
      return $view->field['name']->advancedRender($view->result[0]);
    });
    $expected = Link::fromTextAndUrl($this->term1->label(), $this->term1->toUrl());

    $this->assertEquals($expected->toString(), $actual);
  }

}
