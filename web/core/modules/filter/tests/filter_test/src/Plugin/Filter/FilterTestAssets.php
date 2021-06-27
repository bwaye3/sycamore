<?php

namespace Drupal\filter_test\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
<<<<<<< HEAD
 * Provides a test filter to attach assets
=======
 * Provides a test filter to attach assets.
>>>>>>> dev
 *
 * @Filter(
 *   id = "filter_test_assets",
 *   title = @Translation("Testing filter"),
 *   description = @Translation("Does not change content; attaches assets."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE
 * )
 */
class FilterTestAssets extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $result = new FilterProcessResult($text);
    $result->addAttachments([
      'library' => [
        'filter/caption',
      ],
    ]);
    return $result;
  }

}
