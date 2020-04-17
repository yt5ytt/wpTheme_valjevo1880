<?php get_header(); ?>

<div id="container">

  <div class="wrapper">

    <?php get_template_part('content', get_post_type()); ?>

    <?php get_sidebar(); ?>

  </div>

</div>

<?php get_footer(); ?>
