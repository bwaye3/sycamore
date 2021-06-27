<?php

namespace Drupal\path_encoded_test\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Returns responses for path_encoded_test routes.
 */
class PathEncodedTestController {

  /**
<<<<<<< HEAD
   * Returns a HTML simple response.
=======
   * Returns an HTML simple response.
>>>>>>> dev
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function simple() {
    return new Response('<html><body>PathEncodedTestController works</body></html>');
  }

}
