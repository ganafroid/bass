<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bass Theme</title>
    <?php wp_head(); ?>
  </head>

  <?php 
    if( is_front_page() ):
      $bass_classes = array( 'bass-class', 'my-bass' );
    else:
      $bass_classes = array( 'not-bass-class' );
    endif;
  ?>
  
  <body <?php body_class( $bass_classes ); ?>>

    <div class="container">

      <div class="row">

        <div class="col-xs-12">

          <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
          
        </div>
      
      </div>

       <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />