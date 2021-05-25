<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexa Christou Photography</title>
  <?php wp_head(); ?>
</head>
<body>

  
<?php while(have_posts()) {
  the_post(); ?>

  <div class="front-page--background fade-in" style="background-image: url(<?php the_field('hero_image') ?>)">
    <h1 class="front-page--brand">ACP</h1>
    <ul class="front-page--nav">
      <?php 

      $menu_items = wp_get_nav_menu_items('main');

      foreach($menu_items as $item) {
        echo '<li class="front-page--link"><a href="' . $item->url . '">' . $item->title . '</a></li>';
      };

      ?>
    </ul>
  </div>

<?php } ?>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js" integrity="sha512-pCPP9sfLW9T7EZiw725jUl+ux032sjGhFE+ZAx00C1iO55ZmZJWpfNGbDf2ZF5b0UqxRqSW548PbZEWmH+S7pA==" crossorigin="anonymous"></script>
</body>
</html>