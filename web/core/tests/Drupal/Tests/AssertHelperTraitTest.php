<?php

namespace Drupal\Tests;

use Drupal\Core\Render\Markup;

/**
 * @coversDefaultClass \Drupal\Tests\AssertHelperTrait
 * @group simpletest
 * @group Tests
<<<<<<< HEAD
 */
class AssertHelperTraitTest extends UnitTestCase {

=======
 * @group legacy
 */
class AssertHelperTraitTest extends UnitTestCase {

  public function testTraitDeprecation(): void {
    $this->expectDeprecation('Drupal\Tests\AssertHelperTrait is deprecated in drupal:9.2.0 and is removed from drupal:10.0.0. There is no replacement. See https://www.drupal.org/node/3123638');
    require_once __DIR__ . '/../../fixtures/AssertHelperTestClass.php';
    $class = new AssertHelperTestClass();
  }

>>>>>>> dev
  /**
   * @covers ::castSafeStrings
   * @dataProvider providerCastSafeStrings
   */
  public function testCastSafeStrings($expected, $value) {
<<<<<<< HEAD
=======
    $this->expectDeprecation('AssertHelperTrait::castSafeStrings() is deprecated in drupal:9.2.0 and is removed from drupal:10.0.0. There is no replacement; assertEquals() will automatically cast MarkupInterface to strings when needed. See https://www.drupal.org/node/3123638');
>>>>>>> dev
    $class = new AssertHelperTestClass();
    $this->assertSame($expected, $class->testMethod($value));
  }

  public function providerCastSafeStrings() {
    $safe_string = Markup::create('test safe string');
    return [
      ['test simple string', 'test simple string'],
      [['test simple array', 'test simple array'], ['test simple array', 'test simple array']],
      ['test safe string', $safe_string],
      [['test safe string', 'test safe string'], [$safe_string, $safe_string]],
      [['test safe string', 'mixed array', 'test safe string'], [$safe_string, 'mixed array', $safe_string]],
    ];
  }

}
<<<<<<< HEAD

class AssertHelperTestClass {
  use AssertHelperTrait;

  public function testMethod($value) {
    return $this->castSafeStrings($value);
  }

}
=======
>>>>>>> dev
