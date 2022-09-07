<?php

add_theme_support( 'menus' );

function custom_styles() {
     wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/styles.css' );
     
     wp_register_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
     wp_enqueue_style('owl-carousel');
     wp_register_style( 'owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
     wp_enqueue_style('owl-theme');

     wp_register_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
     wp_enqueue_style('animate-css');

     wp_register_style( 'font-awesome', ' https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' );
     wp_enqueue_style('font-awesome');

     wp_register_style( 'leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css'  );
     wp_enqueue_style('leaflet');

     wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
     wp_enqueue_script('jquery');
     
     wp_register_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, null, true );
     wp_enqueue_script('jquery-slim');
     
     wp_register_script( 'owl-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js' );
     wp_enqueue_script('owl-scripts');

     wp_register_script( 'leaflet-scripts', 'https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' );
     wp_enqueue_script('leaflet-scripts');

     /* wp_register_script( 'leaflet-providers', 'https://cdnjs.cloudflare.com/ajax/libs/leaflet-providers/1.13.0/leaflet-providers.min.js' );
     wp_enqueue_script('leaflet-providers'); */

     wp_enqueue_script( 'scripts', get_template_directory_uri() .'/dist/js/scripts.js' );
     
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );
add_theme_support( 'menus', 'post-thumbnails');
add_theme_support( 'post-thumbnails', array('butikker', 'shopping', 'madogdrikke', 'husogmøbler', 'bilogreserve', 'mainevents', 'minievents', 'forsidebanner' ));

function bygoghave_post() {

     
        

     register_taxonomy(
          'Telefon nr.',
          'post', array (
               'hierarchical' => true,
              'labels' => array( 
                  'name' => 'Telefon numre',
                  'singular_name' => 'Tlf.',
                  'search_items' =>  __( 'Søg Tlf Nr.' ),
                  'all_items' => __( 'Alle Tlf. Nr.' ),
                  'parent_item' => __( 'Brug ikke dette felt' ),
                  'parent_item_colon' => __( 'Parent Location:' ),
                  'edit_item' => __( 'Edit Tlf. Nr.' ),
                  'update_item' => __( 'Opdater Tlf. Nr.' ),
                  'add_new_item' => __( 'Tilføj Tlf. Nr.' ),
                  'new_item_name' => __( 'Nyt Tlf. Nr.' ),
                  'menu_name' => __( 'Telefon numre' ),
                  ) ,
              )
          
              );
              register_taxonomy(
               'Åbningstider',
               'post', array (
                    'hierarchical' => true,
                   'labels' => array( 
                       'name' => 'Åbningstid',
                       'singular_name' => 'Tlf.',
                       'search_items' =>  __( 'Søg Åbningstid' ),
                       'all_items' => __( 'Alle Åbningstid' ),
                       'parent_item' => __( 'Brug ikke dette felt' ),
                       'parent_item_colon' => __( 'Parent Location:' ),
                       'edit_item' => __( 'Edit Åbningstid' ),
                       'update_item' => __( 'Opdater Åbningstid' ),
                       'add_new_item' => __( 'LÆS HER: Ved tilføjelse af åbningstider som ikke er et lige tal, som f.eks. 08.30, skrives det på denne måde 08:30' ),
                       'new_item_name' => __( 'Nyt Åbningstid' ),
                       'menu_name' => __( 'Åbningstid' ),
                       ) ,
                   )
               
                   );

                   register_taxonomy(
                    'Lukketider',
                    'post', array (
                         'hierarchical' => true,
                        'labels' => array( 
                            'name' => 'Lukketid',
                            'singular_name' => 'Tlf.',
                            'search_items' =>  __( 'Søg Lukketid' ),
                            'all_items' => __( 'Alle Lukketid' ),
                            'parent_item' => __( 'Brug ikke dette felt' ),
                            'parent_item_colon' => __( 'Parent Location:' ),
                            'edit_item' => __( 'Edit Lukketid' ),
                            'update_item' => __( 'Opdater Lukketid' ),
                            'add_new_item' => __( 'LÆS HER: Ved tilføjelse af Lukketider som ikke er et lige tal, som f.eks. 08.30, skrives det på denne måde 08:30' ),
                            'new_item_name' => __( 'Nyt Lukketid' ),
                            'menu_name' => __( 'Lukketid' ),
                            ) ,
                        )
                    
                        );

                        register_taxonomy(
                         'Dato',
                         'post', array (
                              'hierarchical' => true,
                             'labels' => array( 
                                 'name' => 'Dato',
                                 'singular_name' => 'Dato',
                                 'search_items' =>  __( 'Søg Dato' ),
                                 'all_items' => __( 'Alle Datoer' ),
                                 'parent_item' => __( 'Brug ikke dette felt' ),
                                 'parent_item_colon' => __( 'Parent Location:' ),
                                 'edit_item' => __( 'Edit Dato' ),
                                 'update_item' => __( 'Opdater Dato' ),
                                 'add_new_item' => __( 'Tilføj Dato' ),
                                 'new_item_name' => __( 'Ny Dato' ),
                                 'menu_name' => __( 'Dato' ),
                                 ) ,
                             )
                         
                             );


                             register_post_type( 'forsidebanner', array(
                              'labels' => array(
                                   'name' => 'Main Banner',
                                   'singular_name' => _x('Banner', 'post type singular name'),
                                   'add_new' => _x('Tilføj ikke ny, rediger eksisterende', 'Banner'),
                                   'edit_item' => __('Rediger Banner'),
                                   'new_item' => __('Tilføj ikke ny'),
                                   'all_items' => __('Alle Banner'),
                                   'view_item' => __('Vis Banner'),
                                   'search_items' => __('Søg Banner'),
                                   'not_found' =>  __('Ingen Banner fundet'),
                                   'not_found_in_trash' => __('Ingen Banner i papirskurven'), 
                                   'parent_item_colon' => '',
                                   'menu_name' => __('Forside Banner')
                                   ),
                                   'menu_icon' => 'dashicons-images-alt',
                                   'public' => true,
                                   'publicly_queryable' => true,
                                   'show_ui' => true, 
                                   'show_in_menu' => true, 
                                   'query_var' => true,
                                   'rewrite' => true,
                                   'capability_type' => 'post',
                                   'has_archive' => true, 
                                   'hierarchical' => false,
                                   'menu_position' => null,
                                   'supports' => array( 'title', 'editor', 'page-attributes', 'author', 'thumbnail', 'excerpt', 'comments' ),
                                   'categories' => true,
                              ) );
      

                        register_post_type( 'mainevents', array(
                         'labels' => array(
                              'name' => 'Main Events',
                              'singular_name' => _x('Event', 'post type singular name'),
                              'add_new' => _x('Tilføj ikke ny, rediger eksisterende', 'Event'),
                              'edit_item' => __('Rediger Event'),
                              'new_item' => __('Tilføj ikke ny'),
                              'all_items' => __('Alle Event'),
                              'view_item' => __('Vis Event'),
                              'search_items' => __('Søg Event'),
                              'not_found' =>  __('Ingen Event fundet'),
                              'not_found_in_trash' => __('Ingen Event i papirskurven'), 
                              'parent_item_colon' => '',
                              'menu_name' => __('Main-Events')
                              ),
                              'menu_icon' => 'dashicons-calendar',
                              'public' => true,
                              'publicly_queryable' => true,
                              'show_ui' => true, 
                              'show_in_menu' => true, 
                              'query_var' => true,
                              'rewrite' => true,
                              'capability_type' => 'post',
                              'has_archive' => true, 
                              'hierarchical' => false,
                              'menu_position' => null,
                              'supports' => array( 'title', 'editor', 'page-attributes', 'author', 'thumbnail', 'excerpt', 'comments' ),
                              'categories' => true,
                         ) );
                         register_taxonomy_for_object_type( 'Dato', 'mainevents' );


                         register_post_type( 'minievents', array(
                              'labels' => array(
                                   'name' => 'Main Events',
                                   'singular_name' => _x('Event', 'post type singular name'),
                                   'add_new' => _x('Ny Event', 'Event'),
                                   'edit_item' => __('Rediger Event'),
                                   'new_item' => __('Ny Event'),
                                   'all_items' => __('Alle Event'),
                                   'view_item' => __('Vis Event'),
                                   'search_items' => __('Søg Event'),
                                   'not_found' =>  __('Ingen Event fundet'),
                                   'not_found_in_trash' => __('Ingen Event i papirskurven'), 
                                   'parent_item_colon' => '',
                                   'menu_name' => __('Mini-Events')
                                   ),
                                   'menu_icon' => 'dashicons-calendar',
                                   'public' => true,
                                   'publicly_queryable' => true,
                                   'show_ui' => true, 
                                   'show_in_menu' => true, 
                                   'query_var' => true,
                                   'rewrite' => true,
                                   'capability_type' => 'post',
                                   'has_archive' => true, 
                                   'hierarchical' => false,
                                   'menu_position' => null,
                                   'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                                   'categories' => true,
                              ) );
                              register_taxonomy_for_object_type( 'Dato', 'minievents' );
                         
               

     register_post_type( 'Butikker', array(
          'labels' => array(
               'name' => 'Byg & Have',
               'singular_name' => _x('Butik', 'post type singular name'),
               'add_new' => _x('Ny Butik, HUSK at vælg Template', 'Butik'),
               'edit_item' => __('Rediger Butik'),
               'new_item' => __('Ny Butik, HUSK at vælg Template'),
               'all_items' => __('Alle Butikker'),
               'view_item' => __('Vis Butik'),
               'search_items' => __('Søg Butik'),
               'not_found' =>  __('Ingen butikker fundet'),
               'not_found_in_trash' => __('Ingen butikker i papirskurven'), 
               'parent_item_colon' => '',
               'menu_name' => __('Byg & Have')
               ),
               'menu_icon' => 'dashicons-hammer',
               'public' => true,
               'publicly_queryable' => true,
               'show_ui' => true, 
               'show_in_menu' => true, 
               'query_var' => true,
               'rewrite' => true,
               'capability_type' => 'post',
               'has_archive' => true, 
               'hierarchical' => false,
               'menu_position' => null,
               'supports' => array( 'title', 'editor', 'template', 'author', 'thumbnail', 'excerpt', 'comments' ),
               'categories', 'Template' => true,  
          ) ,  
     
     );
    
          register_taxonomy_for_object_type( 'category', 'butikker' ); 
          register_taxonomy_for_object_type( 'Telefon nr.', 'butikker' );
          register_taxonomy_for_object_type( 'Åbningstider', 'butikker' );
          register_taxonomy_for_object_type( 'Lukketider', 'butikker' );
          
          register_post_type( 'bilogreserve', array(
               'labels' => array(
                    'name' => 'Bil & Reservedele',
                    'singular_name' => _x('Butik', 'post type singular name'),
                    'add_new' => _x('Ny Butik, HUSK at vælg Template', 'Butik'),
                    'edit_item' => __('Rediger Butik'),
                    'new_item' => __('Ny Butik, HUSK at vælg Template'),
                    'all_items' => __('Alle Butikker'),
                    'view_item' => __('Vis Butik'),
                    'search_items' => __('Søg Butik'),
                    'not_found' =>  __('Ingen butikker fundet'),
                    'not_found_in_trash' => __('Ingen butikker i papirskurven'), 
                    'parent_item_colon' => '',
                    'menu_name' => __('Bil & Reservedele')
                    ),
                    'menu_icon' => 'dashicons-car',
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true, 
                    'show_in_menu' => true, 
                    'query_var' => true,
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'has_archive' => true, 
                    'hierarchical' => false,
                    'menu_position' => null,
                    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                    'categories' => true,
               ) );
               register_taxonomy_for_object_type( 'category', 'bilogreserve' ); 
               register_taxonomy_for_object_type( 'Telefon nr.', 'bilogreserve' );
               register_taxonomy_for_object_type( 'Åbningstider', 'bilogreserve' );
               register_taxonomy_for_object_type( 'Lukketider', 'bilogreserve' );
         
          register_post_type( 'shopping', array(
               'labels' => array(
                    'name' => 'Shopping',
                    'singular_name' => _x('Butik', 'post type singular name'),
                    'add_new' => _x('Ny Butik, HUSK at vælg Template', 'Butik'),
                    'edit_item' => __('Rediger Butik'),
                    'new_item' => __('Ny Butik, HUSK at vælg Template'),
                    'all_items' => __('Alle Butikker'),
                    'view_item' => __('Vis Butik'),
                    'search_items' => __('Søg Butik'),
                    'not_found' =>  __('Ingen butikker fundet'),
                    'not_found_in_trash' => __('Ingen butikker i papirskurven'), 
                    'parent_item_colon' => '',
                    'menu_name' => __('Shopping')
                    ),
                    'menu_icon' => 'dashicons-cart',
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true, 
                    'show_in_menu' => true, 
                    'query_var' => true,
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'has_archive' => true, 
                    'hierarchical' => false,
                    'menu_position' => null,
                    'supports' => array( 'title', 'thumbnail', 'editor', 'author',  'page-attributes', 'email', 'excerpt', 'comments' ),
                    'categories' => true,
               ) );
               register_taxonomy_for_object_type( 'category', 'shopping' ); 
               register_taxonomy_for_object_type( 'Telefon nr.', 'shopping' );
               register_taxonomy_for_object_type( 'Åbningstider', 'shopping' );
          register_taxonomy_for_object_type( 'Lukketider', 'shopping' );

     register_post_type( 'husogmobler', array(
          'labels' => array(
               'name' => 'Hus & Møbler',
               'singular_name' => _x('Butik', 'post type singular name'),
               'add_new' => _x('Ny Butik, HUSK at vælg Template', 'Butik'),
               'edit_item' => __('Rediger Butik'),
               'new_item' => __('Ny Butik, HUSK at vælg Template'),
               'all_items' => __('Alle Butikker'),
               'view_item' => __('Vis Butik'),
               'search_items' => __('Søg Butik'),
               'not_found' =>  __('Ingen butikker fundet'),
               'not_found_in_trash' => __('Ingen butikker i papirskurven'), 
               'parent_item_colon' => '',
               'menu_name' => __('Hus & Møbler')
               ),
               'menu_icon' => 'dashicons-admin-home',
               'public' => true,
               'publicly_queryable' => true,
               'show_ui' => true, 
               'show_in_menu' => true, 
               'query_var' => true,
               'rewrite' => true,
               'capability_type' => 'post',
               'has_archive' => true, 
               'hierarchical' => false,
               'menu_position' => null,
               'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
               'categories' => true,
          ) );
          register_taxonomy_for_object_type( 'category', 'husogmobler' ); 
          register_taxonomy_for_object_type( 'Telefon nr.', 'husogmobler' );
          register_taxonomy_for_object_type( 'Åbningstider', 'husogmobler' );
          register_taxonomy_for_object_type( 'Lukketider', 'husogmobler' );

               register_post_type( 'madogdrikke', array(
                    'labels' => array(
                         'name' => 'Mad & Drikke',
                         'singular_name' => _x('Butik', 'post type singular name'),
                         'add_new' => _x('Ny Butik, HUSK at vælg Template', 'Butik'),
                         'edit_item' => __('Rediger Butik'),
                         'new_item' => __('Ny Butik, HUSK at vælg Template'),
                         'all_items' => __('Alle Butikker'),
                         'view_item' => __('Vis Butik'),
                         'search_items' => __('Søg Butik'),
                         'not_found' =>  __('Ingen butikker fundet'),
                         'not_found_in_trash' => __('Ingen butikker i papirskurven'), 
                         'parent_item_colon' => '',
                         'menu_name' => __('Mad & Drikke')
                         ),
                         'menu_icon' => 'dashicons-food',
                         'public' => true,
                         'publicly_queryable' => true,
                         'show_ui' => true, 
                         'show_in_menu' => true, 
                         'query_var' => true,
                         'rewrite' => true,
                         'capability_type' => 'post',
                         'has_archive' => true, 
                         'hierarchical' => false,
                         'menu_position' => null,
                         'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                         'categories' => true,
                    ) );
                    register_taxonomy_for_object_type( 'category', 'madogdrikke' ); 
                    register_taxonomy_for_object_type( 'Telefon nr.', 'madogdrikke' );
                    register_taxonomy_for_object_type( 'Åbningstider', 'madogdrikke' );
          register_taxonomy_for_object_type( 'Lukketider', 'madogdrikke' );

          

     };
 
add_action( 'init', 'bygoghave_post' )

?>