<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bass Theme</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
