<?php

namespace Drupal\FunctionalJavascriptTests\Theme;

use Drupal\FunctionalJavascriptTests\TableDrag\TableDragTest;

/**
<<<<<<< HEAD
 * Runs TableDragTest in Claro.
=======
 * Tests draggable tables with Claro theme.
>>>>>>> dev
 *
 * @group claro
 *
 * @see \Drupal\FunctionalJavascriptTests\TableDrag\TableDragTest
 */
class ClaroTableDragTest extends TableDragTest {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'claro';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function findWeightsToggle($expected_text) {
    $toggle = $this->getSession()->getPage()->findLink($expected_text);
    $this->assertNotEmpty($toggle);
    return $toggle;
=======
  protected static $indentationXpathSelector = 'child::td[1]/div[contains(concat(" ", normalize-space(@class), " "), " js-tabledrag-cell-content ")]/div[contains(concat(" ", normalize-space(@class), " "), " js-indentation ")]';

  /**
   * {@inheritdoc}
   */
  protected static $tabledragChangedXpathSelector = 'child::td[1]/div[contains(concat(" ", normalize-space(@class), " "), " js-tabledrag-cell-content ")]/abbr[contains(concat(" ", normalize-space(@class), " "), " tabledrag-changed ")]';

  /**
   * Ensures that there are no duplicate tabledrag handles.
   */
  public function testNoDuplicates() {
    $this->drupalGet('tabledrag_test_nested');
    $this->assertCount(1, $this->findRowById(1)->findAll('css', '.tabledrag-handle'));
>>>>>>> dev
  }

}
