<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexa Christou Photography</title>
  <?php wp_head(); ?>
</head>
<body>

<!-- Main Fixed Nav -->
  <nav class="navbar navbar-expand-xl navbar-light smart-scroll">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo site_url('/') ?>">ACP</a>
      <button class="navbar-toggler border-0">
        <i class="full-page-menu-toggler fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
          <?php 

          $menu_items = wp_get_nav_menu_items('main');

          foreach($menu_items as $item) {
            $active = is_page($item->title) ? 'active' : '';
            echo '<a class="nav-item nav-link ' . $active . '" href="' . $item->url . '">' . $item->title . '</a>';
          };

          ?>
        </div>
      </div>
    </div>
  </nav>

<!-- Full Page Nav -->

<div class="full-page--wrapper closed">
  <ul class="full-page--nav">
      <?php 

      foreach($menu_items as $item) {
        echo '<li class="full-page--link"><a href="' . $item->url . '">' . $item->title . '</a></li>';
      };

      ?>
    </ul>
</div>
