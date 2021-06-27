<?php

namespace Drupal\Tests\serialization\Unit\EntityResolver;

use Drupal\Tests\UnitTestCase;
use Drupal\serialization\EntityResolver\ChainEntityResolver;

/**
 * @coversDefaultClass \Drupal\serialization\EntityResolver\ChainEntityResolver
 * @group serialization
 */
class ChainEntityResolverTest extends UnitTestCase {

  /**
   * A mocked normalizer.
   *
   * @var \Symfony\Component\Serializer\Normalizer\NormalizerInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $testNormalizer;

  /**
   * Test data passed to the resolve method.
   *
   * @var \stdClass
   */
  protected $testData;

  /**
   * A test entity type.
   *
   * @var string
   */
  protected $testEntityType = 'test_type';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    $this->testNormalizer = $this->createMock('Symfony\Component\Serializer\Normalizer\NormalizerInterface');
    $this->testData = new \stdClass();
  }

  /**
<<<<<<< HEAD
   * Test the resolve method with no matching resolvers.
=======
   * Tests the resolve method with no matching resolvers.
>>>>>>> dev
   *
   * @covers ::__construct
   * @covers ::resolve
   */
  public function testResolverWithNoneResolved() {
    $resolvers = [
      $this->createEntityResolverMock(),
      $this->createEntityResolverMock(),
    ];

    $resolver = new ChainEntityResolver($resolvers);

    $this->assertNull($resolver->resolve($this->testNormalizer, $this->testData, $this->testEntityType));
  }

  /**
<<<<<<< HEAD
   * Test the resolve method with no matching resolvers, using addResolver.
=======
   * Tests the resolve method with no matching resolvers, using addResolver.
>>>>>>> dev
   *
   * @covers ::addResolver
   * @covers ::resolve
   */
  public function testResolverWithNoneResolvedUsingAddResolver() {
    $resolver = new ChainEntityResolver();
    $resolver->addResolver($this->createEntityResolverMock());
    $resolver->addResolver($this->createEntityResolverMock());

    $this->assertNull($resolver->resolve($this->testNormalizer, $this->testData, $this->testEntityType));
  }

  /**
<<<<<<< HEAD
   * Test the resolve method with a matching resolver first.
=======
   * Tests the resolve method with a matching resolver first.
>>>>>>> dev
   *
   * @covers ::__construct
   * @covers ::resolve
   */
  public function testResolverWithFirstResolved() {
    $resolvers = [
      $this->createEntityResolverMock(10),
      $this->createEntityResolverMock(NULL, FALSE),
    ];

    $resolver = new ChainEntityResolver($resolvers);

    $this->assertSame(10, $resolver->resolve($this->testNormalizer, $this->testData, $this->testEntityType));
  }

  /**
<<<<<<< HEAD
   * Test the resolve method with a matching resolver last.
=======
   * Tests the resolve method with a matching resolver last.
>>>>>>> dev
   *
   * @covers ::__construct
   * @covers ::resolve
   */
  public function testResolverWithLastResolved() {
    $resolvers = [
      $this->createEntityResolverMock(),
      $this->createEntityResolverMock(10),
    ];

    $resolver = new ChainEntityResolver($resolvers);

    $this->assertSame(10, $resolver->resolve($this->testNormalizer, $this->testData, $this->testEntityType));
  }

  /**
<<<<<<< HEAD
   * Test the resolve method where one resolver returns 0.
=======
   * Tests the resolve method where one resolver returns 0.
>>>>>>> dev
   *
   * @covers ::__construct
   * @covers ::resolve
   */
  public function testResolverWithResolvedToZero() {
    $resolvers = [
      $this->createEntityResolverMock(0),
      $this->createEntityResolverMock(NULL, FALSE),
    ];

    $resolver = new ChainEntityResolver($resolvers);

    $this->assertSame(0, $resolver->resolve($this->testNormalizer, $this->testData, $this->testEntityType));
  }

  /**
   * Creates a mock entity resolver.
   *
   * @param null|int $return
   *   Whether the mocked resolve method should return TRUE or FALSE.
   * @param bool $called
   *   Whether or not the resolve method is expected to be called.
   *
   * @return \Drupal\serialization\EntityResolver\EntityResolverInterface|\PHPUnit\Framework\MockObject\MockObject
   *   The mocked entity resolver.
   */
  protected function createEntityResolverMock($return = NULL, $called = TRUE) {
    $mock = $this->createMock('Drupal\serialization\EntityResolver\EntityResolverInterface');

    if ($called) {
      $mock->expects($this->once())
        ->method('resolve')
        ->with($this->testNormalizer, $this->testData, $this->testEntityType)
        ->will($this->returnValue($return));
    }
    else {
      $mock->expects($this->never())
        ->method('resolve');
    }

    return $mock;
  }

}
