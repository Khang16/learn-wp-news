<?php
require get_theme_file_path('/inc/theme-setup.php');
require get_theme_file_path('/inc/enqueue-assets.php');

function my_ecom_site_widgets_init() {

  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget 1', 'my-ecom-site' ),
    'id'            => 'footer-1',
    'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'my-ecom-site' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => esc_html__( 'Main Sidebar', 'my-ecom-site' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets here to appear in your main sidebar.', 'my-ecom-site' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );

}
add_action( 'widgets_init', 'my_ecom_site_widgets_init' );