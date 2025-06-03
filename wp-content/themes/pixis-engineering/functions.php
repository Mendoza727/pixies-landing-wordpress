<?php

/**
 * Theme functions and definitions
 *
 * @package PixisEngineering
 */

// Evitar acceso directo
if (! defined('ABSPATH')) {
  exit;
}

function solutek_scripts_styles()
{
  // Get theme version for cache busting
  $theme_version = wp_get_theme()->get('Version');

  // Register and enqueue CSS files
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $theme_version);
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), $theme_version);
  wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $theme_version);
  wp_enqueue_style('animated-text', get_template_directory_uri() . '/assets/css/animated-text.css', array(), $theme_version);
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), $theme_version);
  wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), $theme_version);
  wp_enqueue_style('theme-default', get_template_directory_uri() . '/assets/css/theme-default.css', array(), $theme_version);
  wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', array(), $theme_version);
  wp_enqueue_style('transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), $theme_version);
  wp_enqueue_style('splide', get_template_directory_uri() . '/assets/css/splide.min.css', array(), $theme_version);
  wp_enqueue_style('venobox', get_template_directory_uri() . '/venobox/venobox.css', array(), $theme_version);
  wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), $theme_version);
  wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css', array(), '1.9.1');
  wp_enqueue_style('solutek-main', get_stylesheet_uri(), array(), $theme_version);
  wp_enqueue_style(
    'pixies-google-fonts',
    'https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&family=Roboto:wght@400;500&display=swap',
    array(),
    null
  );

  // Register and enqueue JavaScript files
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), $theme_version, false);
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.6.2.min.js', array(), '3.6.2', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('venobox', get_template_directory_uri() . '/venobox/venobox.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('animated-text', get_template_directory_uri() . '/assets/js/animated-text.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('venobox-min', get_template_directory_uri() . '/venobox/venobox.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('scrollup', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('barfiller', get_template_directory_uri() . '/assets/js/jquery.barfiller.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed.js', array('jquery'), $theme_version, true);
  wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), $theme_version, true);
  wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . '/assets/js/vanilla-tilt.min.js', array(), $theme_version, true);
  wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), $theme_version, true);



  // Add inline script for Splide slider
  $splide_script = '
        var splide = new Splide(".splide", {
            autoWidth: true,
            type: "loop",
            perPage: 2,
            focus: 0,
            omitEnd: true,
            paginationDirection: "ltr",
            direction: "ttb",
            height: "660px",
            margin: 30,
        });
        splide.mount();
    ';
  wp_add_inline_script('splide', $splide_script);
}
add_action('wp_enqueue_scripts', 'solutek_scripts_styles');

/**
 * Add theme support for favicon
 */
function solutek_theme_setup()
{
  // Add theme support for custom favicon
  add_theme_support('custom-favicon');

  // Add other theme supports as needed
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'solutek_theme_setup');

function pixis_scripts()
{
  wp_enqueue_script('solutek-custom', get_template_directory_uri() . '/assets/js/scrollable-to-section.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'pixis_scripts');

// funcion para editar los texto
function pixis_customize_top_header($wp_customize)
{

  // Sección personalizada
  $wp_customize->add_section('pixis_top_header_section', array(
    'title' => __('Top Header Info', 'pixis'),
    'priority' => 30,
  ));

  // Dirección
  $wp_customize->add_setting('pixis_header_address', array(
    'default' => 'Carrera 55 #159-53 Bogotá, Colombia.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('pixis_header_address', array(
    'label' => __('Dirección', 'pixis'),
    'section' => 'pixis_top_header_section',
    'type' => 'text',
  ));

  // Email
  $wp_customize->add_setting('pixis_header_email', array(
    'default' => 'example@gmail.com',
    'sanitize_callback' => 'sanitize_email',
  ));
  $wp_customize->add_control('pixis_header_email', array(
    'label' => __('Email', 'pixis'),
    'section' => 'pixis_top_header_section',
    'type' => 'email',
  ));

  // Redes sociales
  $socials = [
    'facebook'  => 'Facebook URL',
    'linkedin'  => 'LinkedIn URL',
    'instagram' => 'Instagram URL',
    'youtube'   => 'YouTube URL',
  ];

  foreach ($socials as $key => $label) {
    $wp_customize->add_setting("pixis_social_{$key}", array(
      'default'           => '#',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control("pixis_social_{$key}", array(
      'label'   => __($label, 'pixis'),
      'section' => 'pixis_top_header_section',
      'type'    => 'url',
    ));
  }
}
add_action('customize_register', 'pixis_customize_top_header');


// funcionalidad para cambiar el numero de telfono del footer
function pixis_customize_footer_phone($wp_customize)
{

  // Sección personalizada
  $wp_customize->add_section('pixis_footer_phone_section', array(
    'title' => __('Footer Phone', 'pixis'),
    'priority' => 30,
  ));

  // Número de teléfono
  $wp_customize->add_setting('pixis_footer_phone', array(
    'default' => '+57 300 000 0000',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('pixis_footer_phone', array(
    'label' => __('Número de Teléfono', 'pixis'),
    'section' => 'pixis_footer_phone_section',
    'type' => 'text',
  ));
}
add_action('customize_register', 'pixis_customize_footer_phone');
