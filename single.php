<?php get_header(); ?>

<div id="container">

  <div class="wrapper">

    <div id="master" class="wrapper" role="main">

      <?php

        if(have_posts()):

          while(have_posts()): the_post(); ?>

            <div class="postHeader" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center; background-size: cover;">

              <div class="darkerPostHeader">
                <div class="postTitle">
                  <h1><?php the_title(); ?></h1>
                  <small>Postavljeno: <?php the_time('d.m.Y.'); ?> u <?php the_time('H:m'); ?> časova</small>
                </div><!-- kraj diva .postTitle -->
              </div><!-- kraj diva .darkerPostHeader -->

            </div><!-- kraj diva .postHeader -->

            <?php the_content(); ?>

          <?php endwhile;

        endif;

      ?>

    </div>

    <?php get_sidebar(); ?>

  </div>

</div>

<?php get_footer(); ?>
