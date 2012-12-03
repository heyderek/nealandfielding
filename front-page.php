<?php get_header(); ?>
    <section class="featured-content">
        <div class="wrapper">
          <img src="<?php bloginfo('template_url'); ?>/images/stockholder.png" alt="stock placeholder" />
          <div class="caption">
            <h3>You Have Options</h3>
            <p>The law office of Fielding and Neal are tax attorneys committed to:</p>
            <ol>
              <li>Determining your option; and</li>
              <li>Professionally implementing your decision.</li>
            </ol>
            <a href="#" class="button">Learn More</a>
          </div><!-- /.caption -->
        </div><!-- /.wrapper -->
      </section><!-- /.featured-content -->
      <section class="content">
        <div class="wrapper">
          <div class="primary">
            <?php while(have_posts()) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <?php endwhile; ?>
          </div><!-- /.primary -->
          <?php get_sidebar(); ?>
        </div><!-- /.wrapper -->
      </section><!-- /.content -->
    <?php get_footer(); ?>