<?php

namespace Drupal\Tests\menu_link_content\Functional\Rest;

use Drupal\menu_link_content\Entity\MenuLinkContent;
<<<<<<< HEAD
use Drupal\Tests\rest\Functional\BcTimestampNormalizerUnixTestTrait;
=======
>>>>>>> dev
use Drupal\Tests\rest\Functional\EntityResource\EntityResourceTestBase;

/**
 * ResourceTestBase for MenuLinkContent entity.
 */
abstract class MenuLinkContentResourceTestBase extends EntityResourceTestBase {

<<<<<<< HEAD
  use BcTimestampNormalizerUnixTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = ['menu_link_content'];
=======
  /**
   * {@inheritdoc}
   */
  protected static $modules = ['menu_link_content'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected static $entityTypeId = 'menu_link_content';

  /**
   * {@inheritdoc}
   */
  protected static $patchProtectedFieldNames = [
    'changed' => NULL,
  ];

  /**
   * The MenuLinkContent entity.
   *
   * @var \Drupal\menu_link_content\MenuLinkContentInterface
   */
  protected $entity;

  /**
   * {@inheritdoc}
   */
  protected function setUpAuthorization($method) {
    switch ($method) {
      case 'GET':
      case 'POST':
      case 'PATCH':
      case 'DELETE':
        $this->grantPermissionsToTestedRole(['administer menu']);
        break;
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function createEntity() {
    $menu_link = MenuLinkContent::create([
      'id' => 'llama',
      'title' => 'Llama Gabilondo',
      'description' => 'Llama Gabilondo',
      'link' => [
        'uri' => 'https://nl.wikipedia.org/wiki/Llama',
        'options' => [
          'fragment' => 'a-fragment',
          'attributes' => [
            'class' => ['example-class'],
          ],
        ],
      ],
      'weight' => 0,
      'menu_name' => 'main',
    ]);
    $menu_link->save();

    return $menu_link;
  }

  /**
   * {@inheritdoc}
   */
  protected function getNormalizedPostEntity() {
    return [
      'title' => [
        [
          'value' => 'Dramallama',
        ],
      ],
      'link' => [
        [
          'uri' => 'http://www.urbandictionary.com/define.php?term=drama%20llama',
          'options' => [
            'fragment' => 'a-fragment',
            'attributes' => [
              'class' => ['example-class'],
            ],
          ],
        ],
      ],
      'bundle' => [
        [
          'value' => 'menu_link_content',
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getExpectedNormalizedEntity() {
    return [
      'uuid' => [
        [
          'value' => $this->entity->uuid(),
        ],
      ],
      'id' => [
        [
          'value' => 1,
        ],
      ],
      'revision_id' => [
        [
          'value' => 1,
        ],
      ],
      'title' => [
        [
          'value' => 'Llama Gabilondo',
        ],
      ],
      'link' => [
        [
          'uri' => 'https://nl.wikipedia.org/wiki/Llama',
          'title' => NULL,
          'options' => [
            'fragment' => 'a-fragment',
            'attributes' => [
              'class' => ['example-class'],
            ],
          ],
        ],
      ],
      'weight' => [
        [
          'value' => 0,
        ],
      ],
      'menu_name' => [
        [
          'value' => 'main',
        ],
      ],
      'langcode' => [
        [
          'value' => 'en',
        ],
      ],
      'bundle' => [
        [
          'value' => 'menu_link_content',
        ],
      ],
      'description' => [
        [
          'value' => 'Llama Gabilondo',
        ],
      ],
      'external' => [
        [
          'value' => FALSE,
        ],
      ],
      'rediscover' => [
        [
          'value' => FALSE,
        ],
      ],
      'expanded' => [
        [
          'value' => FALSE,
        ],
      ],
      'enabled' => [
        [
          'value' => TRUE,
        ],
      ],
      'changed' => [
<<<<<<< HEAD
        $this->formatExpectedTimestampItemValues($this->entity->getChangedTime()),
=======
        [
          'value' => (new \DateTime())->setTimestamp($this->entity->getChangedTime())
            ->setTimezone(new \DateTimeZone('UTC'))
            ->format(\DateTime::RFC3339),
          'format' => \DateTime::RFC3339,
        ],
>>>>>>> dev
      ],
      'default_langcode' => [
        [
          'value' => TRUE,
        ],
      ],
      'parent' => [],
      'revision_created' => [
<<<<<<< HEAD
        $this->formatExpectedTimestampItemValues((int) $this->entity->getRevisionCreationTime()),
=======
        [
          'value' => (new \DateTime())->setTimestamp((int) $this->entity->getRevisionCreationTime())
            ->setTimezone(new \DateTimeZone('UTC'))
            ->format(\DateTime::RFC3339),
          'format' => \DateTime::RFC3339,
        ],
>>>>>>> dev
      ],
      'revision_user' => [],
      'revision_log_message' => [],
      'revision_translation_affected' => [
        [
          'value' => TRUE,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getExpectedUnauthorizedAccessMessage($method) {
<<<<<<< HEAD
    if ($this->config('rest.settings')->get('bc_entity_resource_permissions')) {
      return parent::getExpectedUnauthorizedAccessMessage($method);
    }

=======
>>>>>>> dev
    switch ($method) {
      case 'DELETE':
        return "The 'administer menu' permission is required.";

      default:
        return parent::getExpectedUnauthorizedAccessMessage($method);
    }
  }

}
