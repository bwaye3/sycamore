<?php

namespace Drupal\twig_loader_test\Loader;

<<<<<<< HEAD
=======
use Twig\Loader\LoaderInterface;
>>>>>>> dev
use Twig\Source;

/**
 * A test Twig loader.
 */
<<<<<<< HEAD
class TestLoader implements \Twig_LoaderInterface, \Twig_ExistsLoaderInterface, \Twig_SourceContextLoaderInterface {
=======
class TestLoader implements LoaderInterface {
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  public function getSourceContext($name) {
    $name = (string) $name;
    $value = $name === 'kittens' ? 'kittens' : 'cats';
    return new Source($value, $name);
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function getSource($name) {
    return $this->getSourceContext($name)->getCode();
  }

  /**
   * {@inheritdoc}
   */
=======
>>>>>>> dev
  public function exists($name) {
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheKey($name) {
    return $name;
  }

  /**
   * {@inheritdoc}
   */
  public function isFresh($name, $time) {
    return TRUE;
  }

}
