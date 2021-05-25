<?php wp_footer(); ?>

<footer class="footer">
  <ul>
    <?php 

    $menu_items = wp_get_nav_menu_items('main');

    foreach($menu_items as $item) {
      echo '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';
    };

    ?>
  </ul>
  <div class="footer--external-links">
    <a class="footer--external-link" href="mailto:alexachristouphotography@gmail.com">alexachristouphotography@gmail.com</a>
    <a class="footer--external-link" href="https://leonbrown.dev">site by LEON BROWN</a>
    <p class="footer--external-link">&copy Alexa Christou Photography 2019</p>
  </div>
</footer>

</body>
</html>