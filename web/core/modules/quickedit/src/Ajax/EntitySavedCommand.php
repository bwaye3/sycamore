<?php

namespace Drupal\quickedit\Ajax;

use Drupal\Core\Ajax\BaseCommand;

/**
 * AJAX command to indicate the entity was loaded from PrivateTempStore and
 * saved into the database.
 */
class EntitySavedCommand extends BaseCommand {

  /**
<<<<<<< HEAD
   * Constructs a EntitySaveCommand object.
=======
   * Constructs an EntitySaveCommand object.
>>>>>>> dev
   *
   * @param string $data
   *   The data to pass on to the client side.
   */
  public function __construct($data) {
    parent::__construct('quickeditEntitySaved', $data);
  }

}
