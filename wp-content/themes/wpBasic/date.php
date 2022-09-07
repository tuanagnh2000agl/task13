<?php get_header(); ?>
<main class="p-topics">
    <div class="c-title c-title--page">
        <h1>ARCHIVES</h1>
    </div>
    <div class="l-container">
    <?php if (have_posts()) : ?>
        <ul class="c-listpost">
            <?php
                // The Loop
                while ( have_posts() ) : the_post();
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
            <?php
                if(paginate_links()!='') {
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text'    => '',
                        'next_text'    => '',
                    ) );
                }
            ?>
        </div>
        
    <?php endif; wp_reset_postdata(); ?>
    </div>
</main>
<?php get_footer(); ?>