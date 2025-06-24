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

/**
 * Cargar archivos de funciones del tema
 */
function defer_non_critical_css($tag, $handle)
{
  $defer_styles = ['font-awesome', 'bootstrap-icons', 'flaticon', 'meanmenu', 'responsive', 'venobox'];

  if (in_array($handle, $defer_styles)) {
    return str_replace("rel='stylesheet'", "rel='stylesheet' media='print' onload=\"this.onload=null;this.media='all'\"", $tag);
  }

  return $tag;
}
add_filter('style_loader_tag', 'defer_non_critical_css', 10, 2);

function defer_js_scripts($tag, $handle)
{
  $defer_scripts = ['modernizr']; // Puedes añadir más aquí

  foreach ($defer_scripts as $defer_handle) {
    if ($defer_handle === $handle) {
      return str_replace(' src', ' defer src', $tag);
    }
  }

  return $tag;
}
add_filter('script_loader_tag', 'defer_js_scripts', 10, 2);


/**
 * Enqueue theme scripts and styles
 */

function solutek_scripts_styles()
{
  // Get theme version for cache busting
  $theme_version = wp_get_theme()->get('Version');
  $theme_uri = get_template_directory_uri();

  // CSS files array for easier management
  $css_files = array(
    'bootstrap' => '/assets/css/bootstrap.min.css',
    'owl-carousel' => '/assets/css/owl.carousel.min.css',
    'animate' => '/assets/css/animate.css',
    'animated-text' => '/assets/css/animated-text.css',
    'font-awesome' => '/assets/css/all.min.css',
    'flaticon' => '/assets/css/flaticon.css',
    'theme-default' => '/assets/css/theme-default.css',
    'meanmenu' => '/assets/css/meanmenu.min.css',
    'transitions' => '/assets/css/owl.transitions.css',
    'splide' => '/assets/css/splide.min.css',
    'venobox' => '/venobox/venobox.css',
    'responsive' => '/assets/css/responsive.css'
  );

  // Register and enqueue CSS files
  foreach ($css_files as $handle => $path) {
    wp_enqueue_style($handle, $theme_uri . $path, array(), $theme_version);
  }

  function pixis_preload_fonts()
  {
?>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&family=Roboto:wght@400;500&display=swap" onload="this.onload=null;this.rel='stylesheet';">
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&family=Roboto:wght@400;500&display=swap">
    </noscript>
  <?php
  }
  add_action('wp_head', 'pixis_preload_fonts', 0);


  // External CSS
  wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css', array(), '1.9.1');
  wp_enqueue_style('solutek-main', get_stylesheet_uri(), array(), $theme_version);
  wp_enqueue_style(
    'pixies-google-fonts',
    'https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;700&family=Roboto:wght@400;500&display=swap',
    array(),
    null
  );

  // JavaScript files array for easier management
  $js_files = array(
    'modernizr' => array('path' => '/assets/js/vendor/modernizr-3.5.0.min.js', 'deps' => array(), 'footer' => false),
    'jquery' => array('path' => '/assets/js/vendor/jquery-3.6.2.min.js', 'deps' => array(), 'footer' => true, 'version' => '3.6.2'),
    'bootstrap' => array('path' => '/assets/js/bootstrap.min.js', 'deps' => array('jquery'), 'footer' => true),
    'owl-carousel' => array('path' => '/assets/js/owl.carousel.min.js', 'deps' => array('jquery'), 'footer' => true),
    'counterup' => array('path' => '/assets/js/jquery.counterup.min.js', 'deps' => array('jquery'), 'footer' => true),
    'waypoints' => array('path' => '/assets/js/waypoints.min.js', 'deps' => array('jquery'), 'footer' => true),
    'wow' => array('path' => '/assets/js/wow.js', 'deps' => array('jquery'), 'footer' => true),
    'imagesloaded' => array('path' => '/assets/js/imagesloaded.pkgd.min.js', 'deps' => array('jquery'), 'footer' => true),
    'venobox' => array('path' => '/venobox/venobox.js', 'deps' => array('jquery'), 'footer' => true),
    'animated-text' => array('path' => '/assets/js/animated-text.js', 'deps' => array('jquery'), 'footer' => true),
    'venobox-min' => array('path' => '/venobox/venobox.min.js', 'deps' => array('jquery'), 'footer' => true),
    'isotope' => array('path' => '/assets/js/isotope.pkgd.min.js', 'deps' => array('jquery'), 'footer' => true),
    'meanmenu' => array('path' => '/assets/js/jquery.meanmenu.js', 'deps' => array('jquery'), 'footer' => true),
    'scrollup' => array('path' => '/assets/js/jquery.scrollUp.js', 'deps' => array('jquery'), 'footer' => true),
    'barfiller' => array('path' => '/assets/js/jquery.barfiller.js', 'deps' => array('jquery'), 'footer' => true),
    'typed' => array('path' => '/assets/js/typed.js', 'deps' => array('jquery'), 'footer' => true),
    'vanilla-tilt' => array('path' => '/assets/js/vanilla-tilt.min.js', 'deps' => array(), 'footer' => true),
    'theme' => array('path' => '/assets/js/theme.js', 'deps' => array('jquery'), 'footer' => true)
  );

  // Register and enqueue JavaScript files
  foreach ($js_files as $handle => $config) {
    $version = isset($config['version']) ? $config['version'] : $theme_version;
    wp_enqueue_script($handle, $theme_uri . $config['path'], $config['deps'], $version, $config['footer']);
  }

  // External JavaScript
  wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), $theme_version, true);

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
 * Additional theme scripts
 */
function pixis_scripts()
{
  wp_enqueue_script('solutek-custom', get_template_directory_uri() . '/assets/js/scrollable-to-section.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'pixis_scripts');

/**
 * Add theme support for favicon and other features
 */
function solutek_theme_setup()
{
  // Theme support array for easier management
  $theme_supports = array(
    'custom-favicon',
    'title-tag',
    'post-thumbnails'
  );

  foreach ($theme_supports as $support) {
    add_theme_support($support);
  }

  // HTML5 support with specific features
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'solutek_theme_setup');

/**
 * Customizer functions
 */

// Top Header customization
function pixis_customize_top_header($wp_customize)
{
  // Add section
  $wp_customize->add_section('pixis_top_header_section', array(
    'title' => __('Top Header Info', 'pixis'),
    'priority' => 30,
  ));

  // Settings and controls configuration
  $header_settings = array(
    'pixis_header_address' => array(
      'default' => 'Carrera 55 #159-53 Bogotá, Colombia.',
      'sanitize' => 'sanitize_text_field',
      'label' => __('Dirección', 'pixis'),
      'type' => 'text'
    ),
    'pixis_header_email' => array(
      'default' => 'example@gmail.com',
      'sanitize' => 'sanitize_email',
      'label' => __('Email', 'pixis'),
      'type' => 'email'
    )
  );

  // Add header settings
  foreach ($header_settings as $setting_id => $config) {
    $wp_customize->add_setting($setting_id, array(
      'default' => $config['default'],
      'sanitize_callback' => $config['sanitize'],
    ));
    $wp_customize->add_control($setting_id, array(
      'label' => $config['label'],
      'section' => 'pixis_top_header_section',
      'type' => $config['type'],
    ));
  }

  // Social media settings
  $socials = array(
    'facebook' => 'Facebook URL',
    'linkedin' => 'LinkedIn URL',
    'instagram' => 'Instagram URL',
    'youtube' => 'YouTube URL',
  );

  foreach ($socials as $key => $label) {
    $wp_customize->add_setting("pixis_social_{$key}", array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control("pixis_social_{$key}", array(
      'label' => __($label, 'pixis'),
      'section' => 'pixis_top_header_section',
      'type' => 'url',
    ));
  }
}
add_action('customize_register', 'pixis_customize_top_header');

// Footer phone customization
function pixis_customize_footer_phone($wp_customize)
{
  $wp_customize->add_section('pixis_footer_phone_section', array(
    'title' => __('Footer Phone', 'pixis'),
    'priority' => 30,
  ));

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

// Services section customization
function pixis_customize_services_section($wp_customize)
{
  $wp_customize->add_section('pixis_services_section', array(
    'title' => __('Servicios de la Home', 'pixis'),
    'priority' => 31,
  ));

  for ($i = 1; $i <= 4; $i++) {
    $service_settings = array(
      "pixis_service_{$i}_title" => array(
        'type' => 'text',
        'label' => __("Título Servicio {$i}", 'pixis'),
        'sanitize' => 'sanitize_text_field'
      ),
      "pixis_service_{$i}_desc" => array(
        'type' => 'textarea',
        'label' => __("Descripción Servicio {$i}", 'pixis'),
        'sanitize' => 'sanitize_textarea_field'
      )
    );

    foreach ($service_settings as $setting_id => $config) {
      $wp_customize->add_setting($setting_id, array(
        'default' => '',
        'sanitize_callback' => $config['sanitize'],
      ));
      $wp_customize->add_control($setting_id, array(
        'label' => $config['label'],
        'section' => 'pixis_services_section',
        'type' => $config['type'],
      ));
    }

    // Service icon
    $wp_customize->add_setting("pixis_service_{$i}_icon", array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "pixis_service_{$i}_icon", array(
      'label' => __("Ícono Servicio {$i}", 'pixis'),
      'section' => 'pixis_services_section',
    )));
  }
}
add_action('customize_register', 'pixis_customize_services_section');

// Contact headings customization
function pixis_customize_contact_headings($wp_customize)
{
  $wp_customize->add_section('pixis_contact_headings_section', array(
    'title' => __('Textos de la Sección de Contacto', 'pixis'),
    'priority' => 32,
  ));

  $contact_settings = array(
    'pixis_contact_h1_line1' => array(
      'default' => 'Make an Online Appointment Booking',
      'label' => __('Título H1 Línea 1', 'pixis')
    ),
    'pixis_contact_h1_line2' => array(
      'default' => 'For Business Planning.',
      'label' => __('Título H1 Línea 2', 'pixis')
    )
  );

  foreach ($contact_settings as $setting_id => $config) {
    $wp_customize->add_setting($setting_id, array(
      'default' => $config['default'],
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($setting_id, array(
      'label' => $config['label'],
      'section' => 'pixis_contact_headings_section',
      'type' => 'text',
    ));
  }
}
add_action('customize_register', 'pixis_customize_contact_headings');

// Footer newsletter and address customization
function pixis_customize_footer_newsletter_address($wp_customize)
{
  $wp_customize->add_section('pixis_footer_newsletter_section', array(
    'title' => __('Newsletter y Dirección (Footer)', 'pixis'),
    'priority' => 35,
  ));

  $footer_settings = array(
    'pixis_footer_newsletter_title' => array(
      'default' => 'Newsletter',
      'type' => 'text',
      'label' => __('Título del Newsletter', 'pixis'),
      'sanitize' => 'sanitize_text_field'
    ),
    'pixis_footer_newsletter_text' => array(
      'default' => 'Globally monetize plug-and-play data it solu monotonectally disseminate oriented busine multifunctional mind design.',
      'type' => 'textarea',
      'label' => __('Texto del Newsletter', 'pixis'),
      'sanitize' => 'sanitize_textarea_field'
    ),
    'pixis_footer_address_title' => array(
      'default' => 'Lorem ipsum dolor sit.',
      'type' => 'text',
      'label' => __('Título del bloque de dirección', 'pixis'),
      'sanitize' => 'sanitize_text_field'
    ),
    'pixis_footer_widget_text' => array(
      'default' => 'Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed',
      'type' => 'textarea',
      'label' => __('Texto del widget (footer)', 'pixis'),
      'sanitize' => 'sanitize_textarea_field'
    )
  );

  foreach ($footer_settings as $setting_id => $config) {
    $wp_customize->add_setting($setting_id, array(
      'default' => $config['default'],
      'sanitize_callback' => $config['sanitize'],
    ));
    $wp_customize->add_control($setting_id, array(
      'label' => $config['label'],
      'section' => 'pixis_footer_newsletter_section',
      'type' => $config['type'],
    ));
  }
}
add_action('customize_register', 'pixis_customize_footer_newsletter_address');

// Hero section customization
function pixis_customize_hero_section($wp_customize)
{
  $wp_customize->add_section('pixis_hero_section', array(
    'title' => __('Hero Principal (Texto Superior)', 'pixis'),
    'priority' => 25,
  ));

  $hero_settings = array(
    'pixis_hero_subtitle' => array(
      'default' => 'BEST IT SOLUTION PROVIDER',
      'type' => 'text',
      'label' => __('Subtítulo (h6)', 'pixis')
    ),
    'pixis_hero_title1' => array(
      'default' => 'Elevate Your',
      'type' => 'text',
      'label' => __('Título 1 (h1)', 'pixis')
    ),
    'pixis_hero_span' => array(
      'default' => 'Business',
      'type' => 'text',
      'label' => __('Palabra destacada (span)', 'pixis')
    ),
    'pixis_hero_title2' => array(
      'default' => 'with IT Excellence',
      'type' => 'text',
      'label' => __('Título 2 (h1)', 'pixis')
    ),
    'pixis_hero_paragraph' => array(
      'default' => 'We have been operating for over a decade prvid have beens',
      'type' => 'textarea',
      'label' => __('Párrafo', 'pixis')
    )
  );

  foreach ($hero_settings as $setting_id => $config) {
    $sanitize_callback = $config['type'] === 'textarea' ? 'sanitize_text_field' : 'sanitize_text_field';

    $wp_customize->add_setting($setting_id, array(
      'default' => $config['default'],
      'sanitize_callback' => $sanitize_callback,
    ));
    $wp_customize->add_control($setting_id, array(
      'label' => $config['label'],
      'section' => 'pixis_hero_section',
      'type' => $config['type'],
    ));
  }
}
add_action('customize_register', 'pixis_customize_hero_section');

/**
 * Custom Post Types and Meta Boxes
 */

// Register team member post type
function pixis_register_team_post_type()
{
  $labels = array(
    'name' => 'Miembros',
    'singular_name' => 'Miembro',
    'menu_name' => 'Miembros',
    'name_admin_bar' => 'Miembro',
    'add_new' => 'Añadir nuevo',
    'add_new_item' => 'Añadir miembro',
    'new_item' => 'Nuevo miembro',
    'edit_item' => 'Editar miembro',
    'view_item' => 'Ver miembro',
    'all_items' => 'Todos los miembros',
    'search_items' => 'Buscar miembros',
    'not_found' => 'No se encontraron miembros',
    'not_found_in_trash' => 'No hay miembros en la papelera',
  );

  register_post_type('miembro', array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-groups',
    'supports' => array('title', 'thumbnail'),
    'has_archive' => false,
    'show_in_rest' => true,
  ));
}
add_action('init', 'pixis_register_team_post_type');

// Add meta boxes for team members
function pixis_add_miembro_meta_boxes()
{
  add_meta_box('pixis_miembro_info', 'Información del miembro', 'pixis_miembro_info_callback', 'miembro', 'normal', 'default');
}
add_action('add_meta_boxes', 'pixis_add_miembro_meta_boxes');

// Meta box callback for team member info
function pixis_miembro_info_callback($post)
{
  $meta_fields = array(
    'cargo' => array('label' => 'Cargo:', 'type' => 'text'),
    'facebook' => array('label' => 'Facebook:', 'type' => 'url'),
    'twitter' => array('label' => 'Twitter:', 'type' => 'url'),
    'behance' => array('label' => 'Behance:', 'type' => 'url')
  );

  foreach ($meta_fields as $field => $config) {
    $value = get_post_meta($post->ID, "_{$field}", true);
    $sanitized_value = $config['type'] === 'url' ? esc_url($value) : esc_attr($value);

    echo "<label for='pixis_{$field}'>{$config['label']}</label>";
    echo "<input type='{$config['type']}' name='pixis_{$field}' value='{$sanitized_value}' style='width:100%;' /><br><br>";
  }
}

// Save team member meta data
function pixis_save_miembro_meta($post_id)
{
  $meta_fields = array(
    'cargo' => 'sanitize_text_field',
    'facebook' => 'esc_url_raw',
    'twitter' => 'esc_url_raw',
    'behance' => 'esc_url_raw'
  );

  foreach ($meta_fields as $field => $sanitize_function) {
    if (isset($_POST["pixis_{$field}"])) {
      update_post_meta($post_id, "_{$field}", $sanitize_function($_POST["pixis_{$field}"]));
    }
  }
}
add_action('save_post', 'pixis_save_miembro_meta');

// Customize title placeholder for team members
function pixis_rename_title_placeholder_for_miembros($title)
{
  $screen = get_current_screen();
  if ('miembro' == $screen->post_type) {
    $title = 'Nombre del miembro';
  }
  return $title;
}
add_filter('enter_title_here', 'pixis_rename_title_placeholder_for_miembros');

// Admin script to rename title label
function pixis_rename_title_label_script()
{
  $screen = get_current_screen();
  if ($screen->post_type === 'miembro') {
  ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const label = document.querySelector('label[for="title"]');
        if (label) label.textContent = 'Nombre';
      });
    </script>
<?php
  }
}
add_action('admin_footer', 'pixis_rename_title_label_script');

// Register projects post type
function pixis_register_proyectos_cpt()
{
  $labels = array(
    'name' => 'Proyectos',
    'singular_name' => 'Proyecto',
    'add_new' => 'Añadir nuevo',
    'add_new_item' => 'Añadir nuevo Proyecto',
    'edit_item' => 'Editar Proyecto',
    'new_item' => 'Nuevo Proyecto',
    'view_item' => 'Ver Proyecto',
    'search_items' => 'Buscar Proyecto',
    'not_found' => 'No encontrado',
    'not_found_in_trash' => 'No encontrado en la papelera',
  );

  register_post_type('proyecto', array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array('title', 'thumbnail'),
    'has_archive' => false,
    'show_in_rest' => true,
  ));
}
add_action('init', 'pixis_register_proyectos_cpt');

// Register clients post type
function pixis_register_clientes_cpt()
{
  $labels = array(
    'name' => 'Clientes',
    'singular_name' => 'Cliente',
    'add_new' => 'Añadir nuevo',
    'add_new_item' => 'Añadir nuevo Cliente',
    'edit_item' => 'Editar Cliente',
    'new_item' => 'Nuevo Cliente',
    'view_item' => 'Ver Cliente',
    'search_items' => 'Buscar Cliente',
    'not_found' => 'No encontrado',
    'not_found_in_trash' => 'No encontrado en la papelera',
  );

  register_post_type('cliente', array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-groups',
    'supports' => array('title', 'thumbnail'),
    'has_archive' => false,
    'show_in_rest' => true,
  ));
}
add_action('init', 'pixis_register_clientes_cpt');
