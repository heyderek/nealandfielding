<?php get_header(); ?>
      <section class="content">
        <div class="wrapper">
          <div class="primary">
            <?php while(have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <h4><?php the_date('F, Y'); ?></h4>
            <?php the_content(); ?>
            <?php endwhile; ?>
          </div><!-- /.primary -->
        <?php get_sidebar(); ?>
        </div><!-- /.wrapper -->
      </section><!-- /.content -->
    <?php get_footer(); ?>