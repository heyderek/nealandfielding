<?php get_header(); ?>
      <section class="content">
        <div class="wrapper">
          <div class="primary">
          <?php while(have_posts()) : the_post(); ?>
            <article>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
          </div><!-- /.primary -->
          <?php get_sidebar(); ?>
        </div><!-- /.wrapper -->
      </section><!-- /.content -->
<?php get_footer(); ?>