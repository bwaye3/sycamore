<?php

namespace Drupal\file;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;

/**
 * File storage for files.
 */
class FileStorage extends SqlContentEntityStorage implements FileStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function spaceUsed($uid = NULL, $status = FILE_STATUS_PERMANENT) {
    $query = $this->database->select($this->entityType->getBaseTable(), 'f')
      ->condition('f.status', $status);
<<<<<<< HEAD
    $query->addExpression('SUM(f.filesize)', 'filesize');
=======
    $query->addExpression('SUM([f].[filesize])', 'filesize');
>>>>>>> dev
    if (isset($uid)) {
      $query->condition('f.uid', $uid);
    }
    return $query->execute()->fetchField();
  }

}
