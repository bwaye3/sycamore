<?php

namespace Drupal\sitemap\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Config\ConfigFactory;
<<<<<<< HEAD
use Drupal\Core\Extension\ModuleHandler;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\system\Entity\Menu;
use Drupal\book\BookManagerInterface;
use Drupal\Core\Url;
use Drupal\taxonomy\Entity\Vocabulary;
=======
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\sitemap\SitemapManager;
use Drupal\Core\Link;
>>>>>>> dev

/**
 * Provides a configuration form for sitemap.
 */
class SitemapSettingsForm extends ConfigFormBase {

  /**
<<<<<<< HEAD
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The book manager.
   *
   * @var \Drupal\book\BookManagerInterface
   */
  protected $bookManager;
=======
   * The SitemapMap plugin manager.
   *
   * @var \Drupal\sitemap\SitemapManager
   */
  protected $sitemapManager;

  /**
   * An array of Sitemap plugins.
   *
   * @var \Drupal\sitemap\SitemapInterface[]
   */
  protected $plugins = [];
>>>>>>> dev

  /**
   * Constructs a SitemapSettingsForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactory $config_factory
   *   The factory for configuration objects.
<<<<<<< HEAD
   * @param \Drupal\Core\Extension\ModuleHandler $module_handler
   *   The module handler.
   */
  public function __construct(ConfigFactory $config_factory, ModuleHandler $module_handler) {
    parent::__construct($config_factory);
    $this->moduleHandler = $module_handler;
=======
   * @param \Drupal\sitemap\SitemapManager $sitemap_manager
   *   The Sitemap plugin manager.
   */
  public function __construct(ConfigFactory $config_factory, SitemapManager $sitemap_manager) {
    parent::__construct($config_factory);
    $this->sitemapManager = $sitemap_manager;
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
<<<<<<< HEAD
    $module_handler = $container->get('module_handler');
    $form = new static(
      $container->get('config.factory'),
      $module_handler
    );
    if ($module_handler->moduleExists('book')) {
      $form->setBookManager($container->get('book.manager'));
    }
=======
    $form = new static(
      $container->get('config.factory'),
      $container->get('plugin.manager.sitemap')
    );
>>>>>>> dev
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'sitemap_settings';
  }

  /**
<<<<<<< HEAD
   * Set book manager service.
   *
   * @param \Drupal\book\BookManagerInterface $book_manager
   *   Book manager service to set.
   */
  public function setBookManager(BookManagerInterface $book_manager) {
    $this->bookManager = $book_manager;
  }

  /**
=======
>>>>>>> dev
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->configFactory->get('sitemap.settings');

<<<<<<< HEAD
    $form['page_title'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Page title'),
      '#default_value' => $config->get('page_title'),
      '#description' => $this->t('Page title that will be used on the @sitemap_page.', array('@sitemap_page' => $this->l($this->t('sitemap page'), Url::fromRoute('sitemap.page')))),
    );

    $sitemap_message = $config->get('message');
    $form['message'] = array(
=======
    $form['page_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Page title'),
      '#default_value' => $config->get('page_title'),
      '#description' => $this->t('Page title that will be used on the @sitemap_page.', ['@sitemap_page' => Link::fromTextAndUrl($this->t('sitemap page'), Url::fromRoute('sitemap.page'))->toString()]),
    ];

    $sitemap_message = $config->get('message');
    $form['message'] = [
>>>>>>> dev
      '#type' => 'text_format',
      '#format' => isset($sitemap_message['format']) ? $sitemap_message['format'] : NULL,
      '#title' => $this->t('Sitemap message'),
      '#default_value' => $sitemap_message['value'],
      '#description' => $this->t('Define a message to be displayed above the sitemap.'),
<<<<<<< HEAD
    );

    $form['sitemap_content'] = array(
      '#type' => 'details',
      '#title' => $this->t('Sitemap content'),
      '#open' => TRUE,
    );
    $sitemap_ordering = array();
    $form['sitemap_content']['show_front'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show front page'),
      '#default_value' => $config->get('show_front'),
      '#description' => $this->t('When enabled, this option will include the front page in the sitemap.'),
    );
    $sitemap_ordering['front'] = t('Front page');

    // Build list of books.
    if ($this->moduleHandler->moduleExists('book')) {
      $book_options = array();
      foreach ($this->bookManager->getAllBooks() as $book) {
        $book_options[$book['bid']] = $book['title'];
        $sitemap_ordering['books_' . $book['bid']] = $book['title'];
      }
      $form['sitemap_content']['show_books'] = array(
        '#type' => 'checkboxes',
        '#title' => $this->t('Books to include in the sitemap'),
        '#default_value' => $config->get('show_books'),
        '#options' => $book_options,
        '#multiple' => TRUE,
      );
    }

    // Build list of menus.
    $menus = $this->getMenus();
    $menu_options = array();
    foreach ($menus as $id => $menu) {
      $menu_options[$id] = $menu->label();
      $sitemap_ordering['menus_' . $id] = $menu->label();
    }
    $form['sitemap_content']['show_menus'] = array(
      '#type' => 'checkboxes',
      '#title' => $this->t('Menus to include in the sitemap'),
      '#default_value' => $config->get('show_menus'),
      '#options' => $menu_options,
      '#multiple' => TRUE,
    );

    // Build list of vocabularies.
    if ($this->moduleHandler->moduleExists('taxonomy')) {
      $vocab_options = array();
      $vocabularies = $this->getVocabularies();
      foreach ($vocabularies as $vocabulary) {
        $vocab_options[$vocabulary->id()] = $vocabulary->label();
        $sitemap_ordering['vocabularies_' . $vocabulary->id()] = $vocabulary->label();
      }
      $form['sitemap_content']['show_vocabularies'] = array(
        '#type' => 'checkboxes',
        '#title' => $this->t('Vocabularies to include in the sitemap'),
        '#default_value' => $config->get('show_vocabularies'),
        '#options' => $vocab_options,
        '#multiple' => TRUE,
      );
    }

    // Follows FilterFormatFormBase for tabledrag ordering.
    $form['sitemap_content']['order'] = array(
      '#type' => 'table',
      '#attributes' => array('id' => 'sitemap-order'),
      '#title' => $this->t('Sitemap order'),
      '#tabledrag' => array(
        array(
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'sitemap-order-weight',
        ),
      ),
      '#tree' => FALSE,
      '#input' => FALSE,
      '#theme_wrappers' => array('form_element'),
    );
    $sitemap_order_defaults = $config->get('order');
    foreach ($sitemap_ordering as $content_id => $content_title) {
      $form['sitemap_content']['order'][$content_id] = array(
        'content' => array(
          '#markup' => $content_title,
        ),
        'weight' => array(
          '#type' => 'weight',
          '#title' => t('Weight for @title', array('@title' => $content_title)),
          '#title_display' => 'invisible',
          '#delta' => 50,
          '#default_value' => isset($sitemap_order_defaults[$content_id]) ? $sitemap_order_defaults[$content_id] : -50,
          '#parents' => array('order', $content_id),
          '#attributes' => array('class' => array('sitemap-order-weight')),
        ),
        '#weight' => isset($sitemap_order_defaults[$content_id]) ? $sitemap_order_defaults[$content_id] : -50,
        '#attributes' => ['class' => ['draggable']],
      );
    }
    // Re-order content drag-and-drop items based on pre-existing config.
    asort($sitemap_order_defaults);
    foreach ($sitemap_order_defaults as $content_id => $weight) {
      if (isset($form['sitemap_content']['order'][$content_id])) {
        $item = $form['sitemap_content']['order'][$content_id];
        unset($form['sitemap_content']['order'][$content_id]);
        $form['sitemap_content']['order'][$content_id] = $item;
      }
    }
    // Re-add new config items.
    $new = array_diff_key($sitemap_ordering, $sitemap_order_defaults);
    foreach ($new as $content_id => $content_title) {
      $item = $form['sitemap_content']['order'][$content_id];
      unset($form['sitemap_content']['order'][$content_id]);
      $form['sitemap_content']['order'][$content_id] = $item;
    }



    $form['#attached']['library'][] = 'sitemap/sitemap.admin';

    $form['sitemap_options'] = [
      '#type' => 'details',
      '#title' => $this->t('Sitemap settings'),
    ];
    $form['sitemap_options']['show_titles'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show titles'),
      '#default_value' => $config->get('show_titles'),
      '#description' => $this->t('When enabled, this option will show titles. Disable to not show section titles.'),
    );
    $form['sitemap_options']['sitemap_rss_options'] = array(
      '#type' => 'details',
      '#title' => $this->t('RSS settings'),
    );
    $form['sitemap_options']['sitemap_rss_options']['rss_front'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('RSS feed for front page'),
      '#default_value' => $config->get('rss_front'),
      '#description' => $this->t('The RSS feed for the front page, default is rss.xml.'),
    );
    $form['sitemap_options']['sitemap_rss_options']['show_rss_links'] = array(
      '#type' => 'select',
      '#title' => $this->t('Include RSS links'),
      '#default_value' => $config->get('show_rss_links'),
      '#options' => array(
        0 => $this->t('None'),
        1 => $this->t('Include on the right side'),
        2 => $this->t('Include on the left side'),
      ),
      '#description' => $this->t('When enabled, this option will show links to the RSS feeds for the front page and taxonomy terms, if enabled.'),
    );
    $form['sitemap_options']['sitemap_rss_options']['rss_taxonomy'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('RSS depth for vocabularies'),
      '#default_value' => $config->get('rss_taxonomy'),
      '#size' => 3,
      '#maxlength' => 10,
      '#description' => $this->t('Specify how many RSS feed links should be displayed with taxonomy terms. Enter "-1" to include with all terms, "0" not to include with any terms, or "1" to show only for top-level taxonomy terms.'),
    );
    $form['sitemap_options']['sitemap_css_options'] = array(
      '#type' => 'details',
      '#title' => $this->t('CSS settings'),
    );
    $form['sitemap_options']['sitemap_css_options']['css'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Include sitemap CSS file'),
      '#default_value' => $config->get('css'),
      '#description' => $this->t("Select this box if you wish to load the CSS file included with the module. To learn how to override or specify the CSS at the theme level, visit the @documentation_page.", array('@documentation_page' => $this->l($this->t("documentation page"), Url::fromUri('https://www.drupal.org/node/2615568')))),
    );

    if ($this->moduleHandler->moduleExists('book')) {
      $form['sitemap_book_options'] = [
        '#type' => 'details',
        '#title' => $this->t('Book settings'),
      ];
      $form['sitemap_book_options']['books_expanded'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Show books expanded'),
        '#default_value' => $config->get('books_expanded'),
        '#description' => $this->t('When enabled, this option will show all children pages for each book.'),
      ];
    }

    if ($this->moduleHandler->moduleExists('forum')) {
      $form['sitemap_forum_options'] = [
        '#type' => 'details',
        '#title' => $this->t('Forum settings'),
      ];
      $form['sitemap_forum_options']['forum_threshold'] = array(
        '#type' => 'textfield',
        '#title' => $this->t('Forum count threshold'),
        '#default_value' => $config->get('forum_threshold'),
        '#size' => 3,
        '#description' => $this->t('Only show forums whose node counts are greater than this threshold. Set to -1 to disable.'),
      );
    }

    $form['sitemap_menu_options'] = [
      '#type' => 'details',
      '#title' => $this->t('Menu settings'),
    ];
    $form['sitemap_menu_options']['show_menus_hidden'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show disabled menu items'),
      '#default_value' => $config->get('show_menus_hidden'),
      '#description' => $this->t('When enabled, hidden menu links will also be shown.'),
    );

    if ($this->moduleHandler->moduleExists('taxonomy')) {
      $form['sitemap_taxonomy_options'] = [
        '#type' => 'details',
        '#title' => $this->t('Taxonomy settings'),
      ];
      $form['sitemap_taxonomy_options']['show_description'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Show vocabulary description'),
        '#default_value' => $config->get('show_description'),
        '#description' => $this->t('When enabled, this option will show the vocabulary description.'),
      ];
      $form['sitemap_taxonomy_options']['show_count'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Show node counts by taxonomy terms'),
        '#default_value' => $config->get('show_count'),
        '#description' => $this->t('When enabled, this option will show the number of nodes in each taxonomy term.'),
      ];
      $form['sitemap_taxonomy_options']['vocabulary_show_links'] = [
        '#type' => 'checkbox',
        '#title' => $this->t("Show links for taxonomy terms even if they don't contain any nodes"),
        '#default_value' => $config->get('vocabulary_show_links'),
        '#description' => $this->t('When enabled, this option will turn every taxonomy term into a link.'),
      ];
      $form['sitemap_taxonomy_options']['vocabulary_depth'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Vocabulary depth'),
        '#default_value' => $config->get('vocabulary_depth'),
        '#size' => 3,
        '#maxlength' => 10,
        '#description' => $this->t('Specify how many levels taxonomy terms should be included. Enter "-1" to include all terms, "0" not to include terms at all, or "1" to only include top-level terms.'),
      ];
      $form['sitemap_taxonomy_options']['term_threshold'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Term count threshold'),
        '#default_value' => $config->get('term_threshold'),
        '#size' => 3,
        '#description' => $this->t('Only show taxonomy terms whose node counts are greater than this threshold. Set to -1 to disable.'),
      ];
    }
=======
    ];

    // Retrieve stored configuration for the plugins.
    $plugins = $config->get('plugins');

    // Create plugin instances for all available Sitemap plugins, including both
    // enabled/configured ones as well as new and not yet configured ones.
    $definitions = $this->sitemapManager->getDefinitions();
    foreach ($definitions as $id => $definition) {
      if ($this->sitemapManager->hasDefinition($id)) {
        $plugin_config = [];
        if (!empty($plugins[$id])) {
          $plugin_config = $plugins[$id];
        }
        $this->plugins[$id] = $this->sitemapManager->createInstance($id, $plugin_config);
      }
    }

    // Plugin status.
    $form['plugins']['enabled'] = [
      '#type' => 'item',
      '#title' => $this->t('Enabled plugins'),
      '#prefix' => '<div id="sitemap-enabled-wrapper">',
      '#suffix' => '</div>',
      // This item is used as a pure wrapping container with heading. Ignore its
      // value, since 'plugins' should only contain plugin definitions.
      // See https://www.drupal.org/node/1829202.
      '#input' => FALSE,
    ];
    // Plugin order (tabledrag).
    $form['plugins']['order'] = [
      '#type' => 'table',
      // For sitemap.admin.js.
      '#attributes' => ['id' => 'sitemap-order'],
      '#title' => $this->t('Plugin display order'),
      '#tabledrag' => [
        [
          'action' => 'order',
          'relationship' => 'sibling',
          'group' => 'plugin-order-weight',
        ],
      ],
      '#tree' => FALSE,
      '#input' => FALSE,
      '#theme_wrappers' => ['form_element'],
    ];
    // Map settings.
    $form['plugin_settings'] = [
      '#type' => 'vertical_tabs',
      '#title' => $this->t('Plugin settings'),
    ];

    $defaultSort = $this->plugins;
    $sorted =$this->sortPlugins($this->plugins);

    foreach ($sorted as $id => $plugin) {
      /* @var $plugin \Drupal\sitemap\SitemapBase */

      $form['plugins']['enabled'][$id] = [
        '#type' => 'checkbox',
        '#title' => $plugin->getLabel(),
        '#default_value' => $plugin->enabled,
        '#parents' => ['plugins', $id, 'enabled'],
        '#description' => $plugin->getDescription(),
        // Default sort groups by plugin type.
        '#weight' => $defaultSort[$id]->weight,
      ];

      $form['plugins']['order'][$id]['#attributes']['class'][] = 'draggable';
      $form['plugins']['order'][$id]['#weight'] = $plugin->weight;
      $form['plugins']['order'][$id]['filter'] = [
        '#markup' => $plugin->getLabel(),
      ];
      $form['plugins']['order'][$id]['weight'] = [
        '#type' => 'weight',
        '#title' => $this->t('Weight for @title', ['@title' => $plugin->getLabel()]),
        '#title_display' => 'invisible',
        '#delta' => 50,
        '#default_value' => $plugin->weight,
        '#parents' => ['plugins', $id, 'weight'],
        '#attributes' => ['class' => ['plugin-order-weight']],
      ];

      // Retrieve the settings form of the Sitemap plugin.
      $settings_form = [
        '#parents' => ['plugins', $id, 'settings'],
        '#tree' => TRUE,
      ];
      $settings_form = $plugin->settingsForm($settings_form, $form_state);
      if (!empty($settings_form)) {
        $form['plugins']['settings'][$id] = [
          '#type' => 'details',
          '#title' => $plugin->getLabel(),
          '#open' => TRUE,
          '#weight' => $plugin->weight,
          '#parents' => ['plugins', $id, 'settings'],
          '#group' => 'plugin_settings',
        ];
        $form['plugins']['settings'][$id] += $settings_form;
      }
    }
    $form['#attached']['library'][] = 'sitemap/sitemap.admin';

    // Sitemap CSS settings.
    $form['css'] = [
      '#type' => 'details',
      '#title' => $this->t('CSS settings'),
    ];
    $form['css']['include_css'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Include sitemap CSS file'),
      '#default_value' => $config->get('include_css'),
      '#description' => $this->t("Select this box if you wish to load the CSS file included with the module. To learn how to override or specify the CSS at the theme level, visit the @documentation_page.", ['@documentation_page' => Link::fromTextAndUrl($this->t("documentation page"), Url::fromUri('https://www.drupal.org/node/2615568'))->toString()]),
    ];
>>>>>>> dev

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory->getEditable('sitemap.settings');

    $keys = array(
      'page_title',
      array('message', 'value'),
      array('message', 'format'),
      'show_front',
      'show_titles',
      'show_menus',
      'show_menus_hidden',
      'show_vocabularies',
      'show_description',
      'show_count',
      'vocabulary_show_links',
      'vocabulary_depth',
      'term_threshold',
      'forum_threshold',
      'rss_front',
      'show_rss_links',
      'rss_taxonomy',
      'css',
      'order',
    );

    if ($this->moduleHandler->moduleExists('book')) {
      $keys[] = 'show_books';
      $keys[] = 'books_expanded';
    }

    // Save config.
    foreach ($keys as $key) {
      if ($form_state->hasValue($key)) {
        if ($key == 'order') {
          $order = $form_state->getValue($key);
          asort($order);
          $config->set(is_string($key) ? $key : implode('.', $key), $order);
        } else {
          $config->set(is_string($key) ? $key : implode('.', $key), $form_state->getValue($key));
        }
=======
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->configFactory->getEditable('sitemap.settings');

    // Save config.
    foreach ($form_state->cleanValues()->getValues() as $key => $value) {
      if ($key == 'plugins') {
        foreach ($value as $instance_id => $plugin_config) {
          // Update the plugin configurations.
          $this->plugins[$instance_id]->setConfiguration($plugin_config);
        }
        // Save in sitemap.settings.
        $config->set($key, $value);
      }
      else {
        $config->set($key, $value);
>>>>>>> dev
      }
    }
    $config->save();

<<<<<<< HEAD
=======
    //@TODO Is a more targeted cache cleanup possible?
>>>>>>> dev
    drupal_flush_all_caches();

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['sitemap.settings'];
  }

  /**
<<<<<<< HEAD
   * Helper function to get all menus.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]|\Drupal\system\Entity\Menu[]
   */
  protected function getMenus() {
    return Menu::loadMultiple();
  }

  /**
   * Helper function to get all vocabularies.
   *
   * @return \Drupal\Core\Entity\EntityInterface[]|\Drupal\taxonomy\Entity\Vocabulary[]
   */
  protected function getVocabularies() {
    return Vocabulary::loadMultiple();
=======
   * Sort the plugins by weight.
   *
   * @param $plugins
   *
   * @return array
   */
  protected function sortPlugins($plugins) {
    // We cannot use array_column here because pluginId is protected.
    //$order = array_column($plugins, 'weight', 'publicId');
    $order = [];
    foreach ($plugins as $id => $plugin) {
      $order[$id] = $plugin->weight;
    }
    asort($order);
    foreach ($order as $id => $weight) {
      $order[$id] = $plugins[$id];
    }

    return $order;
>>>>>>> dev
  }

}
