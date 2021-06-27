<?php

namespace Drupal\file_test\StreamWrapper;

use Drupal\Core\StreamWrapper\LocalStream;

/**
 * Helper class for testing the stream wrapper registry.
 *
 * Dummy stream wrapper implementation (dummy://).
 */
class DummyStreamWrapper extends LocalStream {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return t('Dummy files');
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return t('Dummy wrapper for simpletest.');
  }

  public function getDirectoryPath() {
<<<<<<< HEAD
    return \Drupal::service('site.path') . '/files';
=======
    return \Drupal::getContainer()->getParameter('site.path') . '/files';
>>>>>>> dev
  }

  /**
   * Override getInternalUri().
   *
   * Return a dummy path for testing.
   */
  public function getInternalUri() {
    return '/dummy/example.txt';
  }

  /**
   * Override getExternalUrl().
   *
   * Return the HTML URI of a public file.
   */
  public function getExternalUrl() {
    return '/dummy/example.txt';
  }

}
