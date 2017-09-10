<?php

class Filipvanreeth {

  public function __construct() {
    add_action( 'wp_enqueue_scripts' , array( $this, 'enqueue_scripts' ) );
    add_action( 'wp_enqueue_scripts' , array( $this, 'enqueue_google_fonts' ) );
  }

  public function enqueue_scripts() {
    wp_enqueue_script('jquery');
    // Theme
    wp_enqueue_style( 'fvr-styles', get_stylesheet_directory_uri() . '/css/styles.css' );
    // Font Awesome
    wp_enqueue_style( 'fvr-font-awesome', get_stylesheet_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css' );
  }

  public function enqueue_google_fonts() {
    wp_enqueue_style( 'fvr-google-fonts', 'http://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900|Droid+Serif:400,400i|Open+Sans:300italic,400italic,700italic,400,700,300', false );
  }

}

new Filipvanreeth();
