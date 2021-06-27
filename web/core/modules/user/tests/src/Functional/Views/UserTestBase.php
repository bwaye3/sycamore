<?php

namespace Drupal\Tests\user\Functional\Views;

use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Tests\ViewTestData;
use Drupal\user\Entity\User;

/**
 * @todo.
 */
abstract class UserTestBase extends ViewTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['user_test_views', 'node'];
=======
  protected static $modules = ['user_test_views', 'node'];
>>>>>>> dev

  /**
   * Users to use during this test.
   *
   * @var array
   */
  protected $users = [];

  /**
   * Nodes to use during this test.
   *
   * @var array
   */
  protected $nodes = [];

  protected function setUp($import_test_views = TRUE) {
    parent::setUp($import_test_views);

<<<<<<< HEAD
    ViewTestData::createTestViews(get_class($this), ['user_test_views']);
=======
    ViewTestData::createTestViews(static::class, ['user_test_views']);
>>>>>>> dev

    $this->users[] = $this->drupalCreateUser();
    $this->users[] = User::load(1);
    $this->nodes[] = $this->drupalCreateNode(['uid' => $this->users[0]->id()]);
    $this->nodes[] = $this->drupalCreateNode(['uid' => 1]);
  }

}
