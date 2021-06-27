<?php

namespace Drupal\FunctionalTests\Installer;

use Drupal\Core\Serialization\Yaml;

/**
 * Tests distribution profile support.
 *
 * @group Installer
 */
class SingleVisibleProfileTest extends InstallerTestBase {

  /**
   * The installation profile to install.
   *
   * Not needed when only one is visible.
   *
   * @var string
   */
  protected $profile = NULL;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function prepareEnvironment() {
    parent::prepareEnvironment();
    $profiles = ['standard', 'demo_umami'];
    foreach ($profiles as $profile) {
      $info = [
        'type' => 'profile',
<<<<<<< HEAD
        'core' => \Drupal::CORE_COMPATIBILITY,
=======
        'core_version_requirement' => '^8 || ^9 || ^10',
>>>>>>> dev
        'name' => 'Override ' . $profile,
        'hidden' => TRUE,
      ];
      // File API functions are not available yet.
      $path = $this->siteDirectory . '/profiles/' . $profile;
      mkdir($path, 0777, TRUE);
      file_put_contents("$path/$profile.info.yml", Yaml::encode($info));
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpProfile() {
    // This step is skipped, because there is only one visible profile.
  }

  /**
   * Confirms that the installation succeeded.
   */
  public function testInstalled() {
<<<<<<< HEAD
    $this->assertUrl('user/1');
    $this->assertSession()->statusCodeEquals(200);
    // Confirm that we are logged-in after installation.
    $this->assertText($this->rootUser->getAccountName());
    // Confirm that the minimal profile was installed.
    $this->assertEqual(\Drupal::installProfile(), 'minimal');
=======
    $this->assertSession()->addressEquals('user/1');
    $this->assertSession()->statusCodeEquals(200);
    // Confirm that we are logged-in after installation.
    $this->assertSession()->pageTextContains($this->rootUser->getAccountName());
    // Confirm that the minimal profile was installed.
    $this->assertEquals('minimal', \Drupal::installProfile());
>>>>>>> dev
  }

}
