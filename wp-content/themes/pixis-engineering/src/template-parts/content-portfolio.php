<div class="project-area">
  <div class="container-fluid">
    <div class="row align-items-center px-3 pb-3 mb-5">
      <div class="col-lg-6 d-flex align-items-center">
        <h2 class="mb-0 mx-3">
          <span style="color: #00c9a7; font-weight: bold">Proyectos</span>
          <span style="color: #0057a0; font-weight: bold"> destacados</span>
        </h2>
      </div>
      <div class="col-lg-6 d-flex align-items-center">
        <hr
          class="flex-grow-1 border border-secondary opacity-75 m-0 ms-3"
          style="height: 2px" />
      </div>
    </div>
    <div class="row carousel">
      <!-- Div de fondo con solo background y z-index -->
      <div
        class="background-div"></div>

      <div class="project_list owl-carousel">
        <?php
        $proyectos = new WP_Query(array('post_type' => 'proyecto', 'posts_per_page' => -1));
        if ($proyectos->have_posts()):
          while ($proyectos->have_posts()): $proyectos->the_post(); ?>
            <div class="col-lg-12 col-md-12">
              <div class="project-single-box">
                <div class="project-thumb rounded">
                  <?php the_post_thumbnail('pixis_project_thumb', [
                    'class' => 'img-fluid',
                    'alt' => get_the_title(),
                    'loading' => 'lazy'
                  ]); ?>
                </div>
                <div class="project-content">
                  <h3 class="project-title"><a href="javascript:void(0);"><?php the_title(); ?></a></h3>
                </div>
              </div>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </div>
</div>

<!-- clientes area -->
<div class="brand-area">
  <div class="container">
    <div class="row">
      <div class="brand_list owl-carousel">
        <?php
        $clientes = new WP_Query(array('post_type' => 'cliente', 'posts_per_page' => -1));
        if ($clientes->have_posts()):
          while ($clientes->have_posts()): $clientes->the_post(); ?>
            <div class="col-lg-12">
              <div class="brand-box">
                <div class="brand-thumb">
                  <?php the_post_thumbnail('medium', ['alt' => get_the_title(), 'loading' => 'lazy']); ?>
                </div>
              </div>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </div>
</div>