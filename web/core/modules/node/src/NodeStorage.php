<?php

namespace Drupal\node;

use Drupal\Core\Entity\Sql\SqlContentEntityStorage;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;

/**
 * Defines the storage handler class for nodes.
 *
 * This extends the base storage class, adding required special handling for
 * node entities.
 */
class NodeStorage extends SqlContentEntityStorage implements NodeStorageInterface {

  /**
   * {@inheritdoc}
   */
  public function revisionIds(NodeInterface $node) {
    return $this->database->query(
<<<<<<< HEAD
      'SELECT vid FROM {' . $this->getRevisionTable() . '} WHERE nid=:nid ORDER BY vid',
=======
      'SELECT [vid] FROM {' . $this->getRevisionTable() . '} WHERE [nid] = :nid ORDER BY [vid]',
>>>>>>> dev
      [':nid' => $node->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function userRevisionIds(AccountInterface $account) {
    return $this->database->query(
<<<<<<< HEAD
      'SELECT vid FROM {' . $this->getRevisionDataTable() . '} WHERE uid = :uid ORDER BY vid',
=======
      'SELECT [vid] FROM {' . $this->getRevisionDataTable() . '} WHERE [uid] = :uid ORDER BY [vid]',
>>>>>>> dev
      [':uid' => $account->id()]
    )->fetchCol();
  }

  /**
   * {@inheritdoc}
   */
  public function countDefaultLanguageRevisions(NodeInterface $node) {
<<<<<<< HEAD
    return $this->database->query('SELECT COUNT(*) FROM {' . $this->getRevisionDataTable() . '} WHERE nid = :nid AND default_langcode = 1', [':nid' => $node->id()])->fetchField();
=======
    return $this->database->query('SELECT COUNT(*) FROM {' . $this->getRevisionDataTable() . '} WHERE [nid] = :nid AND [default_langcode] = 1', [':nid' => $node->id()])->fetchField();
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function updateType($old_type, $new_type) {
    return $this->database->update($this->getBaseTable())
      ->fields(['type' => $new_type])
      ->condition('type', $old_type)
      ->execute();
  }

  /**
   * {@inheritdoc}
   */
  public function clearRevisionsLanguage(LanguageInterface $language) {
    return $this->database->update($this->getRevisionTable())
      ->fields(['langcode' => LanguageInterface::LANGCODE_NOT_SPECIFIED])
      ->condition('langcode', $language->getId())
      ->execute();
  }

}
