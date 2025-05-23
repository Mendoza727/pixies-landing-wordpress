<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
    // Aquí incluimos tu partial visual con todo el HTML que antes tenías en src/header.php
    get_template_part( 'src/header' );
  ?>
