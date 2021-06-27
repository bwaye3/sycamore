<?php

namespace Drupal\Tests\node\Functional;

/**
 * Asserts that buttons are present on a page.
 */
trait AssertButtonsTrait {

  /**
   * Assert method to verify the buttons in the dropdown element.
   *
   * @param array $buttons
   *   A collection of buttons to assert for on the page.
   * @param bool $dropbutton
   *   Whether to check if the buttons are in a dropbutton widget or not.
   */
  public function assertButtons(array $buttons, $dropbutton = TRUE) {
<<<<<<< HEAD

    // Try to find a Save button.
    $save_button = $this->xpath('//input[@type="submit"][@value="Save"]');

    // Verify that the number of buttons passed as parameters is
    // available in the dropbutton widget.
    if ($dropbutton) {
      $i = 0;
      $count = count($buttons);

      // Assert there is no save button.
      $this->assertTrue(empty($save_button));

      // Dropbutton elements.
      /** @var \Behat\Mink\Element\NodeElement[] $elements */
      $elements = $this->xpath('//div[@class="dropbutton-wrapper"]//input[@type="submit"]');
      $this->assertCount($count, $elements);
      foreach ($elements as $element) {
        $value = $element->getValue() ?: '';
        $this->assertEqual($buttons[$i], $value);
        $i++;
=======
    // Verify that the number of buttons passed as parameters is
    // available in the dropbutton widget.
    if ($dropbutton) {
      $count = count($buttons);

      // Assert there is no save button.
      $this->assertSession()->buttonNotExists('Save');

      // Dropbutton elements.
      $this->assertSession()->elementsCount('xpath', '//div[@class="dropbutton-wrapper"]//input[@type="submit"]', $count);
      for ($i = 0; $i++; $i < $count) {
        $this->assertSession()->elementTextEquals('xpath', "(//div[@class='dropbutton-wrapper']//input[@type='submit'])[{$i + 1}]", $buttons[$i]);
>>>>>>> dev
      }
    }
    else {
      // Assert there is a save button.
<<<<<<< HEAD
      $this->assertTrue(!empty($save_button));
=======
      $this->assertSession()->buttonExists('Save');
>>>>>>> dev
      $this->assertNoRaw('dropbutton-wrapper');
    }
  }

}
