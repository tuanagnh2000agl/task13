<?php
    function createMenu(){
        register_nav_menu('header-menu',__( 'Menu main' ));
    }
    add_action('init', 'createMenu');

   


    // 
    
    function pagination_tdc($wp_query, $paged, $type='') {
        if( $wp_query->max_num_pages <= 1 )
        return;
        $paged = $paged;
        $max = intval( $wp_query->max_num_pages );
        if ( $paged >= 1 )
        $links[] = $paged;
        if ( $paged >= 3 ) {
               $links[] = $paged - 1;
               $links[] = $paged - 2;
        }
        if ( ( $paged + 2 ) <= $max ) {
               $links[] = $paged + 2;
               $links[] = $paged + 1;
        }
        $html = '';
        if ( ! in_array( 1, $links ) ) {
            $class = 1 == $paged ? ' class="current"' : '';
            if(!$class) {
                $html .= '<a href="'.build_url( $type, 1).'" >1</a>';
            } else {
                $html .= '<a '.$class.'>1</a>';
            }
            if ( ! in_array( 2, $links ) )
                $html .= '<a>…</a>';
        }
        sort( $links );
        foreach ( (array) $links as $link ) {
            $class = $paged == $link ? ' class="current"' : '';
            if(!$class) {
                $html .= '<a href="'.build_url( $type, $link,).'">'.$link .'</a>';
            } else {
                $html .= '<a '.$class.'>'. $link .'</a>';
            }
        }
        if ( ! in_array( $max, $links ) ) {
            if ( ! in_array( $max - 1, $links ) ) $html .= '<li>…</li>';
            $class = $paged == $max ? ' class="current"' : '';
            $html .= '<a '.$class.' href="'.build_url( $type, $max).'">'.$max.'</a>';
        }
        return $html;
    }
    function build_url( $type, $paged){
        // if(!empty($type))
            $url = home_url('/topics/page/'.$paged);
        // else $url = home_url("/page"."/".$paged);
        return $url;
    }