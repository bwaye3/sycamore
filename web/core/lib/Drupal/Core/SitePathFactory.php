<?php

namespace Drupal\Core;

/**
 * Gets the site path from the kernel.
 */
class SitePathFactory {

  /**
   * The Drupal kernel.
   *
   * @var \Drupal\Core\DrupalKernelInterface
   */
  protected $drupalKernel;

  /**
<<<<<<< HEAD
   * Constructs an SitePathFactory instance.
=======
   * Constructs a SitePathFactory instance.
>>>>>>> dev
   *
   * @param \Drupal\Core\DrupalKernelInterface $drupal_kernel
   *   The Drupal kernel.
   */
  public function __construct(DrupalKernelInterface $drupal_kernel) {
    $this->drupalKernel = $drupal_kernel;
  }

  /**
   * Gets the site path.
   *
   * @return string
   *   The site path.
   */
  public function get() {
<<<<<<< HEAD
    return $this->drupalKernel->getSitePath();
=======
    return $this->drupalKernel->getContainer()->getParameter('site.path');
>>>>>>> dev
  }

}
