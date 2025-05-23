<?php
get_header();
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <main id="primary" class="site-main">
    <!-- loder -->
    <div class="loader-wrapper">
      <div class="loader"></div>
      <div class="loder-section left-section"></div>
      <div class="loder-section right-section"></div>
    </div>
    
    <?php if (isset($_GET['all_posts']) && '1' === $_GET['all_posts']) : ?>

      <!-- ==== LISTADO DE TODOS LOS POSTS ==== -->
      <?php
      $all_posts = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => -1,
      ]);
      if ($all_posts->have_posts()) :
        while ($all_posts->have_posts()) :
          $all_posts->the_post();
          include(get_template_directory() . '/src/template-parts/content-all-post.php');
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No hay entradas para mostrar.</p>';
      endif;
      ?>

    <?php else : ?>

      <!-- ==== SECCIONES DE LA HOME ==== -->
      <?php
      include(get_template_directory() . '/src/template-parts/content-hero.php');
      include(get_template_directory() . '/src/template-parts/content-services.php');
      include(get_template_directory() . '/src/template-parts/content-about.php');
      include(get_template_directory() . '/src/template-parts/content-portfolio.php');
      include(get_template_directory() . '/src/template-parts/content-contact.php');
      include(get_template_directory() . '/src/template-parts/content-blog.php');
      ?>

    <?php endif; ?>

    <!-- top to tap -->
    <div class="scroll-area">
      <div class="top-wrap">
        <div class="go-top-btn-wraper">
          <div class="go-top go-top-button">
            <i class="fas fa-arrow-up"></i>
            <i class="fas fa-arrow-up"></i>
          </div>
        </div>
      </div>
    </div>

  </main><!-- #main -->

  <?php get_footer(); ?>