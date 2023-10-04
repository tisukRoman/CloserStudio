<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

  <header id="header" class="header">
    <div class="header__container">
      <nav class="header__menu">
        <?php wp_nav_menu(array('theme_location' => 'closer-studio-main-menu')); ?>
      </nav>
    </div>
  </header>
