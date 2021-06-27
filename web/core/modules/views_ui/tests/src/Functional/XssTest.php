<?php

namespace Drupal\Tests\views_ui\Functional;

/**
 * Tests the Xss vulnerability.
 *
 * @group views_ui
 */
class XssTest extends UITestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'user', 'views_ui', 'views_ui_test'];
=======
  protected static $modules = ['node', 'user', 'views_ui', 'views_ui_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  public function testViewsUi() {
    $this->drupalGet('admin/structure/views/view/sa_contrib_2013_035');
    // Verify that the field admin label is properly escaped.
<<<<<<< HEAD
    $this->assertEscaped('<marquee>test</marquee>');

    $this->drupalGet('admin/structure/views/nojs/handler/sa_contrib_2013_035/page_1/header/area');
    // Verify that the token label is properly escaped.
    $this->assertEscaped('{{ title }} == <marquee>test</marquee>');
    $this->assertEscaped('{{ title_1 }} == <script>alert("XSS")</script>');
=======
    $this->assertSession()->assertEscaped('<marquee>test</marquee>');

    $this->drupalGet('admin/structure/views/nojs/handler/sa_contrib_2013_035/page_1/header/area');
    // Verify that the token label is properly escaped.
    $this->assertSession()->assertEscaped('{{ title }} == <marquee>test</marquee>');
    $this->assertSession()->assertEscaped('{{ title_1 }} == <script>alert("XSS")</script>');
>>>>>>> dev
  }

  /**
   * Checks the admin UI for double escaping.
   */
  public function testNoDoubleEscaping() {
    $this->drupalGet('admin/structure/views');
<<<<<<< HEAD
    $this->assertNoEscaped('&lt;');

    $this->drupalGet('admin/structure/views/view/sa_contrib_2013_035');
    $this->assertNoEscaped('&lt;');

    $this->drupalGet('admin/structure/views/nojs/handler/sa_contrib_2013_035/page_1/header/area');
    $this->assertNoEscaped('&lt;');
=======
    $this->assertSession()->assertNoEscaped('&lt;');

    $this->drupalGet('admin/structure/views/view/sa_contrib_2013_035');
    $this->assertSession()->assertNoEscaped('&lt;');

    $this->drupalGet('admin/structure/views/nojs/handler/sa_contrib_2013_035/page_1/header/area');
    $this->assertSession()->assertNoEscaped('&lt;');
>>>>>>> dev
  }

}
