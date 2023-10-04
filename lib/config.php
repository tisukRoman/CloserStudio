<?php

function closer_studio_config(){
  register_nav_menus(
    array(
      'closer-studio-main-menu' => 'Closer Studio Main Menu',
      'closer-studio-secondary-menu' => 'Closer Studio Secondary Menu',
    )
  );
}

add_action( 'after_setup_theme', 'closer_studio_config', 0 );
