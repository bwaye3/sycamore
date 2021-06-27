<?php

namespace Drupal\sitemap\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
<<<<<<< HEAD
use Drupal\Core\Annotation\Translation;
=======
>>>>>>> dev
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Url;

/**
 * Provides a 'Syndicate (sitemap)' block.
 *
 * @Block(
 *   id = "sitemap_syndicate",
 *   label = @Translation("Syndicate"),
 *   admin_label = @Translation("Syndicate (sitemap)")
 * )
 */
class SitemapSyndicateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
<<<<<<< HEAD
    return array(
      'cache' => array(
        // No caching.
        'max_age' => 0,
      ),
    );
=======
    return [
      'cache' => [
        // No caching.
        'max_age' => 0,
      ],
    ];
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access content');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('sitemap.settings');
    $route_name = \Drupal::routeMatch()->getRouteName();

    if ($route_name == 'blog.user_rss') {
<<<<<<< HEAD
      $feedurl = Url::fromRoute('blog.user_rss', array(
        'user' => \Drupal::routeMatch()->getParameter('user'),
      ));
=======
      $feedurl = Url::fromRoute('blog.user_rss', [
        'user' => \Drupal::routeMatch()->getParameter('user'),
      ]);
>>>>>>> dev
    }
    elseif ($route_name == 'blog.blog_rss') {
      $feedurl = Url::fromRoute('blog.blog_rss');
    }
    else {
      $feedurl = $config->get('rss_front');
    }

<<<<<<< HEAD
    $feed_icon = array(
      '#theme' => 'feed_icon',
      '#url' => $feedurl,
      '#title' => t('Syndicate'),
    );
    $output = \Drupal::service('renderer')->render($feed_icon);
    // Re-use drupal core's render element.
    $more_link = array(
      '#type' => 'more_link',
      '#url' => Url::fromRoute('sitemap.page'),
      '#attributes' => array('title' => t('View the sitemap to see more RSS feeds.')),
    );
    $output .= \Drupal::service('renderer')->render($more_link);

    return array(
      '#type' => 'markup',
      '#markup' => $output,
    );
=======
    $feed_icon = [
      '#theme' => 'feed_icon',
      '#url' => $feedurl,
      '#title' => t('Syndicate'),
    ];
    $output = \Drupal::service('renderer')->render($feed_icon);
    // Re-use drupal core's render element.
    $more_link = [
      '#type' => 'more_link',
      '#url' => Url::fromRoute('sitemap.page'),
      '#attributes' => ['title' => t('View the sitemap to see more RSS feeds.')],
    ];
    $output .= \Drupal::service('renderer')->render($more_link);

    return [
      '#type' => 'markup',
      '#markup' => $output,
    ];
>>>>>>> dev
  }

}
