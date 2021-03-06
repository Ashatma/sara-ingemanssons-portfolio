<?php

 function add_widgets() {

  $args = array(
    'id'            => 'page-sidebar',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Page Sidebar', 'portfolio-theme' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Show my skills and social links', 'portfolio-theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );


  $args = array(
    'id'            => 'text-widget',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'Header widget' ),
    /** Visible description in the Admin Dashboard Widget page */
    'description'   => __( 'Header field text', 'portfolio-theme' ),

    /** HTML to wrap widget title in  */
    'before_title'  => '<p class="widget-title">',
    'after_title'   => '</p>',
    /** HTML to wrap each widget  */
    'before_widget' => '<section>',
    'after_widget'  => '</section>',
  );
  register_sidebar( $args );

 }
 add_action( 'widgets_init', 'add_widgets' );
?>