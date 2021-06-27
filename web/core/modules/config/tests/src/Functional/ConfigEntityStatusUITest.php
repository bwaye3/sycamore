<?php

namespace Drupal\Tests\config\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests configuration entity status UI functionality.
 *
 * @group config
 */
class ConfigEntityStatusUITest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests status operations.
   */
  public function testCRUD() {
    $this->drupalLogin($this->drupalCreateUser([
      'administer site configuration',
    ]));

    $id = strtolower($this->randomMachineName());
    $edit = [
      'id' => $id,
      'label' => $this->randomMachineName(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/config_test/add', $edit, 'Save');
=======
    $this->drupalGet('admin/structure/config_test/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    $entity = \Drupal::entityTypeManager()->getStorage('config_test')->load($id);

    // Disable an entity.
    $disable_url = $entity->toUrl('disable');
<<<<<<< HEAD
    $this->assertLinkByHref($disable_url->toString());
    $this->drupalGet($disable_url);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoLinkByHref($disable_url->toString());

    // Enable an entity.
    $enable_url = $entity->toUrl('enable');
    $this->assertLinkByHref($enable_url->toString());
    $this->drupalGet($enable_url);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoLinkByHref($enable_url->toString());
=======
    $this->assertSession()->linkByHrefExists($disable_url->toString());
    $this->drupalGet($disable_url);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->linkByHrefNotExists($disable_url->toString());

    // Enable an entity.
    $enable_url = $entity->toUrl('enable');
    $this->assertSession()->linkByHrefExists($enable_url->toString());
    $this->drupalGet($enable_url);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->linkByHrefNotExists($enable_url->toString());
>>>>>>> dev
  }

}
