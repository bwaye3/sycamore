<?php

namespace Drupal\entity_test_revlog\Entity;

use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the test entity class.
 *
<<<<<<< HEAD
 * This entity type does not define revision_metadata_keys on purpose to test
 * the BC layer.
 *
=======
>>>>>>> dev
 * @ContentEntityType(
 *   id = "entity_test_mul_revlog_pub",
 *   label = @Translation("Test entity - data table, revisions log, publishing status"),
 *   base_table = "entity_test_mul_revlog_pub",
 *   data_table = "entity_test_mul_revlog_pub_field_data",
 *   revision_table = "entity_test_mul_revlog_pub_revision",
 *   revision_data_table = "entity_test_mul_revlog_pub_field_revision",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
<<<<<<< HEAD
=======
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message"
 *   },
>>>>>>> dev
 * )
 */
class EntityTestMulWithRevisionLogPub extends EntityTestWithRevisionLog implements EntityPublishedInterface {

  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    return parent::baseFieldDefinitions($entity_type) + EntityPublishedTrait::publishedBaseFieldDefinitions($entity_type);
  }

}
