<?php
namespace Drupal\customdrupalmodule\Controller;
use Drupal\Core\Controller\ControllerBase;
class CustomdrupalmoduleController extends ControllerBase {
  public function firstMethod() {
    return array (
      '#theme' => 'my_template',
      '#version' => 'Drupal 9',
    );
  }
}
