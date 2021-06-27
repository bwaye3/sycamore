<?php

namespace Drupal\Tests\language\Functional;

<<<<<<< HEAD
use Drupal\Core\StringTranslation\StringTranslationTrait;
=======
>>>>>>> dev
use Drupal\Tests\BrowserTestBase;

/**
 * @coversDefaultClass \Drupal\language\Plugin\LanguageNegotiation\LanguageNegotiationUrl
 * @group language
 */
class LanguageNegotiationUrlTest extends BrowserTestBase {

<<<<<<< HEAD
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = [
=======
  /**
   * {@inheritdoc}
   */
  protected static $modules = [
>>>>>>> dev
    'language',
    'node',
    'path',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * @var \Drupal\user\Entity\User
   */
  protected $user;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create an Article node type.
    if ($this->profile != 'standard') {
      $this->drupalCreateContentType(['type' => 'article']);
    }

    $this->user = $this->drupalCreateUser([
      'administer languages',
      'access administration pages',
      'view the administration theme',
      'administer nodes',
      'create article content',
      'create url aliases',
    ]);
    $this->drupalLogin($this->user);

<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', ['predefined_langcode' => 'de'], $this->t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm(['predefined_langcode' => 'de'], 'Add language');
>>>>>>> dev
  }

  /**
   * @covers ::processInbound
   */
  public function testDomain() {
    // Check if paths that contain language prefixes can be reached when
    // language is taken from the domain.
    $edit = [
      'language_negotiation_url_part' => 'domain',
      'prefix[en]' => 'eng',
      'prefix[de]' => 'de',
      'domain[en]' => $_SERVER['HTTP_HOST'],
      'domain[de]' => "de.$_SERVER[HTTP_HOST]",
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/detection/url', $edit, $this->t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/language/detection/url');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    $nodeValues = [
      'title[0][value]' => 'Test',
      'path[0][alias]' => '/eng/test',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/add/article', $nodeValues, $this->t('Save'));
=======
    $this->drupalGet('node/add/article');
    $this->submitForm($nodeValues, 'Save');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(200);
  }

}
