<div class="l-sidebar">
    <div class="c-widget">
        <h3 class="c-widget__title">Search</h3>
        <div class="c-search">
            <?php get_search_form() ?>
        </div>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Category</h3>
        <ul class="c-list">
        <?php
            $args = array(
                'type'      => 'post',
                'child_of'  => 0,
                'parent'    => ''
            );
        $categories = get_categories( $args );
        foreach ( $categories as $category ) { ?>
            <li><a href="<?= get_term_link($category->slug, 'category'); ?>"><?php echo $category->name ?></a></li>
        <?php } ?>

            
        </ul>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Archive</h3>
        <ul class="c-list">
            <?php
                $args = array(
                    'type' => 'yearly',
                    'after' => '年',
                    'post_type' => 'post',
                );
                wp_get_archives($args);
            ?>
        </ul>
    </div>
</div>