<?php get_header(); ?>
<main class="p-topics">
    <div class="c-title c-title--page">
        <h1><?= single_cat_title() ?></h1>
    </div>
    <div class="l-container">
        <ul class="c-listpost">
            <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $category = get_category(get_query_var('cat'));
                $args = [
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page'=> 4,
                    'cat' =>  $category->cat_ID,
                    'paged' => $paged
                ];
                $the_query = new WP_Query( $args );
                global $wp_query; $wp_query->in_the_loop = true;
            ?>
            <?php
                // The Loop
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
                <li>
                    <span class="datepost"><?= get_the_date('Y/m/d') ?></span>
                    <?php
                        $cats = get_the_category(get_the_ID());
                        foreach ($cats as $cat) {
                    ?>
                        <a href="<?= get_category_link($cat->cat_ID) ?>" class="c-label"><?= $cat->name ?></a>
                    <?php } ?>
                    <a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
        <div class="c-pnav">
            <?php pagination_bar($the_query);?>
        </div>
    </div>
</main>
<?php 
    get_footer(); 
?>
