<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Valjevo 1880 - <?php the_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div id="topNavigation">
      <nav class="wrapper">
        <?php wp_nav_menu(array('theme_location'=>'main')); ?>
      </nav>
    </div><!--kraj diva #topNavigation-->

    <?php
      if(get_the_ID() == "5"){
        $bannerID = "homeBanner";
      }else{
        $bannerID = "pageBanner";
      }
    ?>

    <div id="<?php echo $bannerID; ?>">
      <div class="wrapper">
        <?php the_custom_logo(); ?>
        <h1><?php echo get_bloginfo(); ?></h1>
      </div>
    </div><!--kraj diva #Banner-->
