<?php

namespace Drupal\entity_test_revlog\Entity;

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
 *   id = "entity_test_mul_revlog",
 *   label = @Translation("Test entity - data table, revisions log"),
 *   base_table = "entity_test_mul_revlog",
 *   data_table = "entity_test_mul_revlog_field_data",
 *   revision_table = "entity_test_mul_revlog_revision",
 *   revision_data_table = "entity_test_mul_revlog_field_revision",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "revision" = "revision_id",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
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
class EntityTestMulWithRevisionLog extends EntityTestWithRevisionLog {

}
