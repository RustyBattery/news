<?php

namespace Drupal\news_module\Controller;

use Drupal\Core\Controller\ControllerBase;

final class NewsModuleController extends ControllerBase
{

  public function index()
  {
    $page = $_GET['page'] ?? 1;
    $per_page = 3;


    $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

    $ids = $nodeStorage->getQuery()
      ->accessCheck(TRUE)
      ->condition('status', 1)
      ->condition('type', 'news')
      ->range($per_page * ($page - 1), $per_page)->execute();

    $count = $nodeStorage->getQuery()
      ->accessCheck(TRUE)
      ->condition('status', 1)
      ->condition('type', 'news')
      ->count()->execute();

    $news = $nodeStorage->loadMultiple($ids);

    $prev_link = $page > 1 ? \Drupal::request()->getRequestUri() . '?page=' . $page - 1 : null;
    $next_link = $page < ceil($count / $per_page) ? \Drupal::request()->getRequestUri() . '?page=' . $page + 1 : null;

    return [
      '#theme' => 'news_index',
      '#news' => $news,
      '#prev_link' => $prev_link,
      '#next_link' => $next_link,
    ];
  }
}
