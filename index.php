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
          <div class="secondary">
            <aside>
              <h3 class="ribbon"><strong class="ribbon-content">Heading 1</strong></h3>
              <ul>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
              </ul>
            </aside>
          </div><!-- /.secondary -->
        </div><!-- /.wrapper -->
      </section><!-- /.content -->
<?php get_footer(); ?>