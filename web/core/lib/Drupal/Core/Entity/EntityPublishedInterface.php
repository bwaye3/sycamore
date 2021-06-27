<?php

namespace Drupal\Core\Entity;

/**
 * Provides an interface for access to an entity's published state.
 */
interface EntityPublishedInterface extends EntityInterface {

  /**
   * Returns whether or not the entity is published.
   *
   * @return bool
   *   TRUE if the entity is published, FALSE otherwise.
   */
  public function isPublished();

  /**
   * Sets the entity as published.
   *
<<<<<<< HEAD
   * @param bool|null $published
   *   (optional and deprecated) TRUE to set this entity to published, FALSE to
   *   set it to unpublished. Defaults to NULL. This parameter is deprecated in
   *   Drupal 8.3.0 and will be removed before Drupal 9.0.0. Use this method,
   *   without any parameter, to set the entity as published and
   *   setUnpublished() to set the entity as unpublished.
   *
=======
>>>>>>> dev
   * @return $this
   *
   * @see \Drupal\Core\Entity\EntityPublishedInterface::setUnpublished()
   */
<<<<<<< HEAD
  public function setPublished($published = NULL);
=======
  public function setPublished();
>>>>>>> dev

  /**
   * Sets the entity as unpublished.
   *
   * @return $this
   */
  public function setUnpublished();

}
