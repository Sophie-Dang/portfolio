<footer class="footer">
    <div class="copyright">
      <span class="copyright__text">Thème fait avec &#9829; - Sophie Dang</span>
    </div>
  </footer>

  <?php 
    $args = [
      'post_type' => 'project',
      'post_status' => 'publish'
    ];

    $the_query = new WP_Query($args); ?>

  <?php if ( $the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

    <!-- Modals portfolio details -->
    <?php get_template_part('template-parts/portfolio/portfolio-details'); ?>

  <?php endwhile; endif; wp_reset_query(); ?>

  <script src="js/app.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
