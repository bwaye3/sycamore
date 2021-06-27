<?php

namespace Drupal\Core\Asset;

/**
 * Resolves the dependencies of asset (CSS/JavaScript) libraries.
 */
class LibraryDependencyResolver implements LibraryDependencyResolverInterface {

  /**
   * The library discovery service.
   *
   * @var \Drupal\Core\Asset\LibraryDiscoveryInterface
   */
  protected $libraryDiscovery;

  /**
<<<<<<< HEAD
=======
   * The libraries dependencies.
   *
   * @var array
   */
  protected $librariesDependencies = [];

  /**
>>>>>>> dev
   * Constructs a new LibraryDependencyResolver instance.
   *
   * @param \Drupal\Core\Asset\LibraryDiscoveryInterface $library_discovery
   *   The library discovery service.
   */
  public function __construct(LibraryDiscoveryInterface $library_discovery) {
    $this->libraryDiscovery = $library_discovery;
  }

  /**
   * {@inheritdoc}
   */
  public function getLibrariesWithDependencies(array $libraries) {
<<<<<<< HEAD
    return $this->doGetDependencies($libraries);
=======
    $return = [];
    foreach ($libraries as $library) {
      if (!isset($this->librariesDependencies[$library])) {
        $this->librariesDependencies[$library] = $this->doGetDependencies([$library]);
      }
      $return += $this->librariesDependencies[$library];
    }
    return array_values($return);
>>>>>>> dev
  }

  /**
   * Gets the given libraries with its dependencies.
   *
   * Helper method for ::getLibrariesWithDependencies().
   *
   * @param string[] $libraries_with_unresolved_dependencies
   *   A list of libraries, with unresolved dependencies, in the order they
   *   should be loaded.
   * @param string[] $final_libraries
   *   The final list of libraries (the return value) that is being built
   *   recursively.
   *
   * @return string[]
   *   A list of libraries, in the order they should be loaded, including their
   *   dependencies.
   */
  protected function doGetDependencies(array $libraries_with_unresolved_dependencies, array $final_libraries = []) {
    foreach ($libraries_with_unresolved_dependencies as $library) {
<<<<<<< HEAD
      if (!in_array($library, $final_libraries)) {
=======
      if (!isset($final_libraries[$library])) {
>>>>>>> dev
        list($extension, $name) = explode('/', $library, 2);
        $definition = $this->libraryDiscovery->getLibraryByName($extension, $name);
        if (!empty($definition['dependencies'])) {
          $final_libraries = $this->doGetDependencies($definition['dependencies'], $final_libraries);
        }
<<<<<<< HEAD
        $final_libraries[] = $library;
=======
        $final_libraries[$library] = $library;
>>>>>>> dev
      }
    }
    return $final_libraries;
  }

  /**
   * {@inheritdoc}
   */
  public function getMinimalRepresentativeSubset(array $libraries) {
    assert(count($libraries) === count(array_unique($libraries)), '$libraries can\'t contain duplicate items.');

<<<<<<< HEAD
    $minimal = [];

    // Determine each library's dependencies.
    $with_deps = [];
    foreach ($libraries as $library) {
      $with_deps[$library] = $this->getLibrariesWithDependencies([$library]);
    }

    foreach ($libraries as $library) {
      $exists = FALSE;
      foreach ($with_deps as $other_library => $dependencies) {
        if ($library == $other_library) {
          continue;
        }
        if (in_array($library, $dependencies)) {
          $exists = TRUE;
          break;
        }
      }
      if (!$exists) {
        $minimal[] = $library;
      }
    }

    return $minimal;
=======
    // Determine each library's dependencies.
    $all_dependencies = [];
    foreach ($libraries as $library) {
      $with_deps = $this->getLibrariesWithDependencies([$library]);
      // We don't need library itself listed in the dependencies.
      $all_dependencies += array_diff($with_deps, [$library]);
    }

    return array_values(array_diff($libraries, array_intersect($all_dependencies, $libraries)));
>>>>>>> dev
  }

}
