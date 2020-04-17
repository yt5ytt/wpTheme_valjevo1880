<?php

  /*******************************************************************/
  /*                    ACTIVATING SCRIPTS                           */
  /*******************************************************************/

  function script_init(){

    /*CSS*/
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('betaStilovi', get_template_directory_uri() . '/css/master.css', array(), '1.0.1', 'all');
    wp_enqueue_style('bannerAnimacija', get_template_directory_uri() . '/css/animation.css', array(), '1.0.1', 'all');

    /*JS*/
    wp_enqueue_script('betaSkripte', get_template_directory_uri() . '/js/master.js', array(), '1.0.1', 'true');

  }

  add_action('wp_enqueue_scripts', 'script_init');

  /*******************************************************************/
  /*                       ACTIVATING MENUS                          */
  /*******************************************************************/

  function nav_menu_init(){

    add_theme_support('menus');

    register_nav_menus(
      array(
          'main'    =>  'Main Navigation',
          'aside'   =>  'Sidebar Navigation',
          'footer'  =>  'Footer Navigation',
      )
    );

  }

  add_action('init', 'nav_menu_init');

  /*******************************************************************/
  /*                      ACTIVATING LOGO                            */
  /*******************************************************************/

  function add_custom_logo(){

    $defaults = array(
      'width'   => 10,
      'height'  => 10,
      'flex-width'  => true,
      'flex-height' => true
    );

    add_theme_support('custom-logo', $defaults);
  }

  add_action('init', 'add_custom_logo');

  /*******************************************************************/
  /*              ACTIVATING CUSTOM THEME SUPPORT                    */
  /*******************************************************************/

  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',
    array('aside', 'gallery', 'image', 'audio', 'video', 'chat', 'quote', 'status', 'link')
  );
  add_post_type_support('page', 'post-formats');

  /*******************************************************************/
  /*                   ACTIVATING WIDGETS SIDEBAR                    */
  /*******************************************************************/

  function sidebar_init(){
    register_sidebar(
      array(
          'name'          =>  'Sidebar',
          'id'            =>  'sidebar-1',
          'class'         =>  'custom',
          'description'   =>  'Standard sidebar',
          'before_widget' =>  '<div class="widgetRow">',
          'after_widget'  =>  '</div>',
          'before_title'  =>  '<h1 class="widgetTitle">',
          'after_title '  =>  '</h1>',
      )
    );
  }

  add_action('widgets_init','sidebar_init');
?>
