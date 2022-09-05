<?php
    function createMenu(){
        register_nav_menu('header-menu',__( 'Menu main' ));
    }
    add_action('init', 'createMenu');
