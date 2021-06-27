<?php

namespace Drupal\Tests\jsonapi\Kernel\EventSubscriber;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\jsonapi\EventSubscriber\ResourceObjectNormalizationCacher;
use Drupal\jsonapi\JsonApiResource\ResourceObject;
use Drupal\jsonapi\Normalizer\Value\CacheableNormalization;
use Drupal\KernelTests\KernelTestBase;
use Drupal\user\Entity\User;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\PostResponseEvent;
=======
use Symfony\Component\HttpKernel\Event\TerminateEvent;
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\jsonapi\EventSubscriber\ResourceObjectNormalizationCacher
 * @group jsonapi
 *
 * @internal
 */
class ResourceObjectNormalizerCacherTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
<<<<<<< HEAD
=======
    'system',
>>>>>>> dev
    'serialization',
    'jsonapi',
    'user',
  ];

  /**
   * The JSON:API resource type repository.
   *
   * @var \Drupal\jsonapi\ResourceType\ResourceTypeRepositoryInterface
   */
  protected $resourceTypeRepository;

  /**
   * The JSON:API serializer.
   *
   * @var \Drupal\jsonapi\Serializer\Serializer
   */
  protected $serializer;

  /**
   * The object under test.
   *
   * @var \Drupal\jsonapi\EventSubscriber\ResourceObjectNormalizationCacher
   */
  protected $cacher;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
    parent::setUp();
=======
  protected function setUp(): void {
    parent::setUp();
    // Add the entity schemas.
    $this->installEntitySchema('user');
    // Add the additional table schemas.
    $this->installSchema('system', ['sequences']);
    $this->installSchema('user', ['users_data']);
>>>>>>> dev
    $this->resourceTypeRepository = $this->container->get('jsonapi.resource_type.repository');
    $this->serializer = $this->container->get('jsonapi.serializer');
    $this->cacher = $this->container->get('jsonapi.normalization_cacher');
  }

  /**
   * Tests that link normalization cache information is not lost.
   *
   * @see https://www.drupal.org/project/drupal/issues/3077287
   */
  public function testLinkNormalizationCacheability() {
    $user = User::create([
      'name' => $this->randomMachineName(),
      'pass' => $this->randomString(),
    ]);
<<<<<<< HEAD
=======
    $user->save();
>>>>>>> dev
    $resource_type = $this->resourceTypeRepository->get($user->getEntityTypeId(), $user->bundle());
    $resource_object = ResourceObject::createFromEntity($resource_type, $user);
    $cache_tag_to_invalidate = 'link_normalization';
    $normalized_links = $this->serializer
      ->normalize($resource_object->getLinks(), 'api_json')
      ->withCacheableDependency((new CacheableMetadata())->addCacheTags([$cache_tag_to_invalidate]));
    assert($normalized_links instanceof CacheableNormalization);
    $normalization_parts = [
      ResourceObjectNormalizationCacher::RESOURCE_CACHE_SUBSET_BASE => [
        'type' => CacheableNormalization::permanent($resource_object->getTypeName()),
        'id' => CacheableNormalization::permanent($resource_object->getId()),
        'links' => $normalized_links,
      ],
      ResourceObjectNormalizationCacher::RESOURCE_CACHE_SUBSET_FIELDS => [],
    ];
    $this->cacher->saveOnTerminate($resource_object, $normalization_parts);
<<<<<<< HEAD
    $event = $this->prophesize(PostResponseEvent::class);
=======
    $event = $this->prophesize(TerminateEvent::class);
>>>>>>> dev
    $this->cacher->onTerminate($event->reveal());
    $this->assertNotFalse((bool) $this->cacher->get($resource_object));
    Cache::invalidateTags([$cache_tag_to_invalidate]);
    $this->assertFalse((bool) $this->cacher->get($resource_object));
  }

}
