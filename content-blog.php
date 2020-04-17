<?php
if(get_the_ID() == 26):

  $args = array(
    'type' => 'post,'
  );

  $query = new WP_Query($args);

  if($query -> have_posts()):

    while($query -> have_posts()): $query -> the_post();

    ?>

    <div class="vestiRow">

      <div class="vestiTitle">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <small><i>Postavljeno <b><u><?php the_time('d.m.Y.'); ?></u></b> u <b><u><?php the_time('H:i'); ?></u></b> časova</i></small>
      </div><!-- kraj diva .vestiTitle -->

      <div class="vestiThumb">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
      </div>

      <div class="vestiContent"><?php the_excerpt(); ?></div>
    </div><!-- kraj diva .vestiRow -->

    <?php
    endwhile;

  endif;

  wp_reset_postdata();

endif;
?>
