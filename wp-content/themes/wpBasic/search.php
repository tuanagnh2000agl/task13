<?php get_header(); ?>
<main class="p-topics">
    <div class="c-title c-title--page">
        <h1>SEARCH RESULTS</h1>
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
    <?php else : ?>
        <section class="c-nosearch">
            <div class="c-nosearch__content">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png" alt="No search">
                <h2 class="c-nosearch__contenttitle">No Result Found</h2>
                <p class="c-nosearch__contenttext">We've searched more than 350 post</p>
                <p class="c-nosearch__contenttext">We did not find any post for your search</p>
                <span class="u-btn"><a href="<?php bloginfo('url') ?>" class="u-btn__link">Come Back</a></span>
            </div>
            <div class="container">
                <div class="circle">
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:4;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:8;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                </div>
                <div class="circle">
                    <span style="--i:0;"></span>
                    <span style="--i:1;"></span>
                    <span style="--i:2;"></span>
                    <span style="--i:3;"></span>
                    <span style="--i:4;"></span>
                    <span style="--i:5;"></span>
                    <span style="--i:6;"></span>
                    <span style="--i:7;"></span>
                    <span style="--i:8;"></span>
                    <span style="--i:9;"></span>
                    <span style="--i:10;"></span>
                    <span style="--i:11;"></span>
                    <span style="--i:12;"></span>
                    <span style="--i:13;"></span>
                    <span style="--i:14;"></span>
                    <span style="--i:15;"></span>
                    <span style="--i:16;"></span>
                    <span style="--i:17;"></span>
                    <span style="--i:18;"></span>
                    <span style="--i:19;"></span>
                    <span style="--i:20;"></span>
                </div>
            </div>
        </section>
    <?php endif; wp_reset_postdata(); ?>
    </div>
</main>
<?php get_footer(); ?>