<?php 


function richee_import_files() {
  return [
    [
      'import_file_name'           => 'Demo Richee',
      'categories'                 => [ 'Category 1'],
      'import_file_url'            => 'https://raw.githubusercontent.com/mahin-ahmed1/richee-demo/main/richee-content.xml',
      'import_widget_file_url'     => 'https://raw.githubusercontent.com/mahin-ahmed1/richee-demo/main/richee-widget.wie',
      'import_customizer_file_url' => 'https://raw.githubusercontent.com/mahin-ahmed1/richee-demo/main/richee-customizer.dat',
      'import_preview_image_url'   => get_template_directory_uri().'/screenshot.png',
      'preview_url'                => 'https://personal-portfoli0.netlify.app',
    ],
   
  ];
}
add_filter( 'ocdi/import_files', 'richee_import_files' );



function richee_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', [
            'richee_primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
        ]
    );
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'richee_after_import_setup' );




function richee_plugin_page_setup( $default_settings ) {
    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Richee Demo Import' , 'richee' );
    $default_settings['menu_title']  = esc_html__( 'Richee Demo Data' , 'richee' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'one-click-demo-import';
 
    return $default_settings;
}
add_filter( 'ocdi/plugin_page_setup', 'richee_plugin_page_setup' );


function richee_after_import( $selected_import ) {
   
    if ( 'Demo Richee' === $selected_import['import_file_name'] ) {
       echo __("Hoorray ! All is done. Want to customize any content of demo? Go to Appearance->Customizer . You can customize every thing content from customizer settings ","richee");
 
        // Set logo in customizer
        set_theme_mod( 'logo_img', get_template_directory_uri() . '/assets/images/logo.png' );
    }
   
}
add_action( 'ocdi/after_import', 'richee_after_import' );


