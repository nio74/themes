<?php

/**
 * Header Navigation template
 * @package giomaz
 */



$menu_class = \GIOMAZ_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('giomaz-header-menu');
$header_menus   = wp_get_nav_menu_items($header_menu_id);

?>
<nav class="navbar navbar-expand-lg navbar-light py-3">
  <div class="container">
    <?php
    if (function_exists('the_custom_logo')) {
      the_custom_logo();
    }
    ?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <?php
      if (!empty($header_menus) && is_array($header_menus)) {
      ?>
        <ul class="navbar-nav ms-auto">
          <?php
          foreach ($header_menus as $menu_item) {
            if (!$menu_item->menu_item_parent) {
              $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
              $has_children = !empty($child_menu_items) && is_array($child_menu_items);
              $has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';
              $link_target        = !empty($menu_item->target) && '_blank' === $menu_item->target ? '_blank' : '_self';

              if (!$has_children) {
          ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                    <?php echo esc_html($menu_item->title); ?>
                  </a>
                </li>
              <?php
              } else {
              ?>
                <li class="nav-item dropdown">
                  <a href="<?php echo esc_url($menu_item->url); ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo esc_html($menu_item->title); ?></a>
                  <div class="dropdown-menu" aria-label="navbarDropdown">
                    <?php
                    foreach ($child_menu_items as $child_menu_item) {
                      // $link_target = !empty($child_menu_item->target) && '_blank' === $child_menu_item->target ? '_blank' : '_self';
                    ?>
                      <a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>" target="<?php echo esc_attr($link_target); ?>" title="<?php echo esc_attr($child_menu_item->title); ?>">>
                        <?php echo esc_html($child_menu_item->title); ?>
                      </a>
            <?php
                    }
                  }
                }
              }
            }

            ?>
                  </div>
    </div>
</nav>