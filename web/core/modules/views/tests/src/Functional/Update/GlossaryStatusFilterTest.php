<?php

namespace Drupal\Tests\views\Functional\Update;

use Drupal\FunctionalTests\Update\UpdatePathTestBase;
use Drupal\views\Entity\View;

/**
 * Tests that the status filter is added to the glossary view.
 *
 * @group Update
<<<<<<< HEAD
 * @group legacy
=======
>>>>>>> dev
 */
class GlossaryStatusFilterTest extends UpdatePathTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setDatabaseDumpFiles() {
    $this->databaseDumpFiles = [
<<<<<<< HEAD
      __DIR__ . '/../../../../../system/tests/fixtures/update/drupal-8.4.0.bare.standard.php.gz',
=======
      __DIR__ . '/../../../../../system/tests/fixtures/update/drupal-9.0.0.filled.standard.php.gz',
>>>>>>> dev
    ];
  }

  /**
   * Tests the default glossary view.
   */
  public function testGlossaryView() {
    $view = View::load('glossary');

    $this->assertTrue(empty($view->getDisplay('default')['display_options']['filters']['status']));

    $this->runUpdates();

    $view = View::load('glossary');
    $this->assertNotEmpty($view->getDisplay('default')['display_options']['filters']['status']);
  }

}
