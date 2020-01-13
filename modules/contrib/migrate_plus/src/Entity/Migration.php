<?php

namespace Drupal\migrate_plus\Entity;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Migration entity.
 *
 * The migration entity stores the information about a single migration, like
 * the source, process and destination plugins.
 *
 * @ConfigEntityType(
 *   id = "migration",
 *   label = @Translation("Migration"),
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "weight" = "weight",
 *     "status" = "status"
 *   },
 *   config_export = {
 *     "id",
 *     "class",
 *     "field_plugin_method",
 *     "cck_plugin_method",
 *     "migration_tags",
 *     "migration_group",
 *     "status",
 *     "label",
 *     "source",
 *     "process",
 *     "destination",
 *     "migration_dependencies",
 *   },
 * )
 */
class Migration extends ConfigEntityBase implements MigrationInterface {

  /**
   * The migration ID (machine name).
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable label for the migration.
   *
   * @var string
   */
  protected $label;

  /**
   * {@inheritdoc}
   */
  protected function invalidateTagsOnSave($update) {
    parent::invalidateTagsOnSave($update);
    Cache::invalidateTags(['migration_plugins']);
  }

  /**
   * {@inheritdoc}
   */
  protected static function invalidateTagsOnDelete(EntityTypeInterface $entity_type, array $entities) {
    parent::invalidateTagsOnDelete($entity_type, $entities);
    Cache::invalidateTags(['migration_plugins']);
  }

  /**
   * Create a configuration entity from a core migration plugin's configuration.
   *
   * @param string $plugin_id
   *   ID of a migration plugin managed by MigrationPluginManager.
   * @param string $new_plugin_id
   *   ID to use for the new configuration entity.
   *
   * @return \Drupal\migrate_plus\Entity\MigrationInterface
   *   A Migration configuration entity (not saved to persistent storage).
   *
   * Note the list of properties being transplanted from the plugin instance or
   * definition into the Migration config entity must remain in sync with the
   * keys listed in the "config_export" annotation key of this class.
   */
  public static function createEntityFromPlugin($plugin_id, $new_plugin_id) {
    /** @var \Drupal\migrate\Plugin\MigrationPluginManagerInterface $plugin_manager */
    $plugin_manager = \Drupal::service('plugin.manager.migration');
    /** @var \Drupal\migrate\Plugin\Migration $migration_plugin */
    $migration_plugin = $plugin_manager->createInstance($plugin_id);
    $entity_array['id'] = $new_plugin_id;
    $plugin_definition = $migration_plugin->getPluginDefinition();
    $migration_details['class'] = $plugin_definition['class'];
    $entity_array['migration_tags'] = $migration_plugin->getMigrationTags();
    $entity_array['label'] = $migration_plugin->label();
    $entity_array['source'] = $migration_plugin->getSourceConfiguration();
    $entity_array['destination'] = $migration_plugin->getDestinationConfiguration();
    $entity_array['process'] = $migration_plugin->getProcess();
    $entity_array['migration_dependencies'] = $migration_plugin->getMigrationDependencies();
    return static::create($entity_array);
  }

}
