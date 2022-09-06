<?php
    function createMenu(){
        register_nav_menu('header-menu',__( 'Menu main' ));
    }
    add_action('init', 'createMenu');

   


    // 
    function create_posttype() {
        register_post_type(
            'services',
            array(
                'label' => 'Services',
                'labels' => array(
                    'all_items' => 'services',
                    'add_new' => 'Add new',
                    'add_new_item' => 'Add new service',
                    'edit_item' => 'Edit',
                    'new_item' => 'new item',
                    'view_item' => 'view',
                    'search_items' => 'search',
                    'not_found' => 'not found',
                    'not_found_in_trash' => 'not found in trash',
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => [ 'title', 'thumbnail', 'editor' ],
            ));
        }
    add_action( 'init', 'create_posttype' );



    // 


    function pagination_bar($custom_query = null, $paged = null) {
        global $wp_query;
        if($custom_query) $main_query = $custom_query;
        else $main_query = $wp_query;
        $big = 999999999;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'prev_text'    => ' ',
            'next_text'    => ' ',
            'current' => max( 1, $paged),
            'prev_next'    => True,
            'total' => $total
        ) );
    }