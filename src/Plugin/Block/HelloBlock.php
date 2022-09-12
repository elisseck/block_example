<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    \Drupal::service('civicrm')->initialize();

    \Civi::service('angularjs.loader')
      ->addModules('afformMyForm'); // Todo: use variable for form name

    return [
      '#theme' => 'hello_block',
      '#data' => [], // Todo: pass variable to template
    ];
  }

}
