<?php

namespace Drupal\Component\Plugin\Exception;

<<<<<<< HEAD
use BadMethodCallException;

=======
>>>>>>> dev
/**
 * Exception thrown when a decorator's _call() method is triggered, but the
 * decorated object does not contain the requested method.
 */
<<<<<<< HEAD
class InvalidDecoratedMethod extends BadMethodCallException implements ExceptionInterface {}
=======
class InvalidDecoratedMethod extends \BadMethodCallException implements ExceptionInterface {}
>>>>>>> dev
