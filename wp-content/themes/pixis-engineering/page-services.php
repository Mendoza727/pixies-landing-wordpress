<?php
/*
Template Name: servicios
*/
get_header();
?>
<div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loder-section left-section"></div>
    <div class="loder-section right-section"></div>
</div>

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


<?php
include(get_template_directory() . '/src/template-parts/content-services.php');
?>

<!-- member team -->
<div class="team-area style-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h5 class="section-sub-title">Nuestros Miembros</h5>
                </div>
            </div>
        </div>
        <div class="row p-2">
            <?php
            $args = array('post_type' => 'miembro', 'posts_per_page' => -1);
            $miembros = new WP_Query($args);

            if ($miembros->have_posts()) :
                while ($miembros->have_posts()) : $miembros->the_post();
                    $cargo = get_post_meta(get_the_ID(), '_cargo', true);
                    $facebook = get_post_meta(get_the_ID(), '_facebook', true);
                    $twitter = get_post_meta(get_the_ID(), '_twitter', true);
                    $behance = get_post_meta(get_the_ID(), '_behance', true);
            ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-team-box">
                            <div class="single-team-thumb">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('pixis_member_thumb', [
                                        'alt' => get_the_title(),
                                        'loading' => 'lazy',
                                        'class' => 'img-fluid'
                                    ]);
                                }
                                ?>
                                <div class="team-content">
                                    <div class="team-inner-title">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo esc_html($cargo); ?></p>
                                    </div>
                                    <div class="team-social-icon">
                                        <ul>
                                            <?php if ($facebook): ?><li><a href="<?php echo esc_url($facebook); ?>">facebook</a></li><?php endif; ?>
                                            <?php if ($twitter): ?><li><a href="<?php echo esc_url($twitter); ?>">twitter</a></li><?php endif; ?>
                                            <?php if ($behance): ?><li><a href="<?php echo esc_url($behance); ?>">behance</a></li><?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<div class="col-12 text-center"><p>No hay miembros registrados en este momento.</p></div>';
            endif;
            ?>
        </div>
    </div>
</div>

<!-- blogs -->
<?php
include(get_template_directory() . '/src/template-parts/content-blog.php');
?>

<?php get_footer(); ?>