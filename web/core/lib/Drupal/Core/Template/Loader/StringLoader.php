<?php

namespace Drupal\Core\Template\Loader;

<<<<<<< HEAD
use Twig\Loader\ExistsLoaderInterface;
use Twig\Loader\SourceContextLoaderInterface;
=======
use Twig\Loader\LoaderInterface;
>>>>>>> dev
use Twig\Source;

/**
 * Loads string templates, also known as inline templates.
 *
<<<<<<< HEAD
 * This loader is intended to be used in a Twig loader chain and whitelists
=======
 * This loader is intended to be used in a Twig loader chain and only loads
>>>>>>> dev
 * string templates that begin with the following comment:
 * @code
 * {# inline_template_start #}
 * @endcode
 *
 * This class override ensures that the string loader behaves as expected in
 * the loader chain. If Twig's string loader is used as is, any string (even a
 * reference to a file-based Twig template) is treated as a valid template and
<<<<<<< HEAD
 * is rendered instead of a \Twig_Error_Loader exception being thrown.
=======
 * is rendered instead of a \Twig\Error\LoaderError exception being thrown.
>>>>>>> dev
 *
 * @see \Drupal\Core\Template\TwigEnvironment::renderInline()
 * @see \Drupal\Core\Render\Element\InlineTemplate
 * @see twig_render_template()
 */
<<<<<<< HEAD
class StringLoader implements \Twig_LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface {
=======
class StringLoader implements LoaderInterface {
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  public function exists($name) {
    if (strpos($name, '{# inline_template_start #}') === 0) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function getSource($name) {
    return $name;
  }

  /**
   * {@inheritdoc}
   */
=======
>>>>>>> dev
  public function getCacheKey($name) {
    return $name;
  }

  /**
   * {@inheritdoc}
   */
  public function isFresh($name, $time) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getSourceContext($name) {
    $name = (string) $name;
    return new Source($name, $name);
  }

}
