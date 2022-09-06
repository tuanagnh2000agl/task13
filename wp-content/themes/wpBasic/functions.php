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
