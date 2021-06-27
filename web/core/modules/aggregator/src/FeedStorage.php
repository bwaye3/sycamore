<?php

namespace Drupal\aggregator;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;

/**
<<<<<<< HEAD
 * Controller class for aggregator's feeds.
 *
 * This extends the Drupal\Core\Entity\Sql\SqlContentEntityStorage class, adding
 * required special handling for feed entities.
=======
 * Defines the storage handler class for feed entities.
 *
 * This extends the base storage class, adding required special handling for
 * feed entities.
>>>>>>> dev
 */
class FeedStorage extends SqlContentEntityStorage implements FeedStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function getFeedIdsToRefresh() {
<<<<<<< HEAD
    return $this->database->query('SELECT fid FROM {' . $this->getBaseTable() . '} WHERE queued = 0 AND checked + refresh < :time AND refresh <> :never', [
=======
    return $this->database->query('SELECT [fid] FROM {' . $this->getBaseTable() . '} WHERE [queued] = 0 AND [checked] + [refresh] < :time AND [refresh] <> :never', [
>>>>>>> dev
      ':time' => REQUEST_TIME,
      ':never' => static::CLEAR_NEVER,
    ])->fetchCol();
  }

}
