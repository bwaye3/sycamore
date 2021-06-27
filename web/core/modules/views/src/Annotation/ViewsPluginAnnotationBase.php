<?php

namespace Drupal\views\Annotation;

<<<<<<< HEAD
use Drupal\Component\Annotation\AnnotationInterface;
=======
>>>>>>> dev
use Drupal\Component\Annotation\Plugin;

/**
 * Defines an abstract base class for all views plugin annotations.
 */
<<<<<<< HEAD
abstract class ViewsPluginAnnotationBase extends Plugin implements AnnotationInterface {
=======
abstract class ViewsPluginAnnotationBase extends Plugin {
>>>>>>> dev

  /**
   * Whether or not to register a theme function automatically.
   *
   * @var bool (optional)
   */
  public $register_theme = TRUE;

}
