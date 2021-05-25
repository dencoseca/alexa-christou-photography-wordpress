<?php get_header(); ?>

  <?php while(have_posts()) {
    the_post(); ?>
    <div class="page--hero fade-in" style="background-image: url(<?php the_field('hero_image'); ?>)<?php if (is_page('about')) echo '; background-position: 75%' ?>"></div>
      <div class="page--title-wrapper">
        <i class="page--arrow fas fa-arrow-down"></i>
        <h1 class="page--title fade-in"><?php the_title(); ?></h1>
      </div>
    <div class="page--main-content container">
      <div class="page--text">
        <?php the_field('page_text'); ?>
      </div>
      <div class="page--gallery">
        <?php the_content(); ?>
      </div>
    </div>
  <?php } ?>




<?php get_footer(); ?>