<div id="master" class="wrapper" role="main">

  <?php

    if(have_posts()):

      while(have_posts()): the_post(); ?>

        <?php if(!is_front_page()): ?>

          <div class="pageTitle"><h1><?php the_title(); ?></h1></div>

        <?php endif; ?>

        <?php the_content(); ?>

      <?php endwhile;

    endif;

    get_template_part('content', 'blog');

  ?>

</div><!-- kraj diva #master -->
