<? php ?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
  <div id="header_area" class="<?php echo get_theme_mod('naimur_menu_position'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-3"><a href=""><img src="<?php echo get_theme_mod('naimur_logo') ?>" alt=""></a></div>
        <div class="col-md-9">
          <?php wp_nav_menu(array('theme_location'=>'main_menu','menu_id'=>'nav')); ?>
        </div>
      </div>
    </div>
  </div>
  <?php wp_footer() ?>
</body>

</html>