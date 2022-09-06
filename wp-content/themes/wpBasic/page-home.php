<?php 
	wp_head();
	get_header();
?>
<div class="c-mainvisual">
	<div class="l-container">
		<div class="c-mainvisual__inner js-slider">
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/main_img01_no.png" alt="Image main img01"></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/main_img02_no.png" alt="Image main img02"></a>
			<a href="service.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/main_img03_no.png" alt="Image main img03"></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/main_img04_no.png" alt="Image main img04"></a>
		</div>
	</div>
</div>
<main>
	<div class="l-container">
		<div class="c-grouplink">
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/img_01_no.png" alt="Image img01" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/img_02_no.png" alt="Image img02" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/img_03_no.png" alt="Image img03" class="js-imglink"></a>
		</div>

		<div class="p-topics">
			<h2 class="c-title">Topics</h2>
			<ul class="c-listpost">
			<!-- get the first post -->
			<?php
				$args = [
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page'=> 5,
				];
				$the_query = new WP_Query( $args );
			?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
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
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>

			<div class="l-btn">
				<a href="<?php bloginfo('url') ?>/topics" class="c-btn c-btn--small">一覧を見る</a>
			</div>
		</div>

		<div class="c-grouplink">
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/btn_03_no.png" alt="Image btn03" class="js-imglink"></a>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/btn_04_no.png" alt="Image btn04" class="js-imglink"></a>
		</div>

		<!-- <div class="c-access"> -->
			<!-- <div class="c-access">
				<div class="c-access__info">
					<h3 class="c-title c-title--sub">本店</h3>
					<p class="address">〒210-0005　川崎市川崎区東田町8 パレール三井ビル8階</p>
					<p class="time">JR川崎駅東口より徒歩7分　京急川崎駅より徒歩5分</p>
					<br/>
					<p>
						<span class="tel">tel : 044-233-2811</span>
						<span class="fax">fax : 044-233-0818</span>
						<br/>
						<span class="email">mail : info@wms.or.jp</span>
					</p>
				</div>
				<div class="c-access__img">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/map_01.png" alt="Image map 01">
				</div>
			</div> -->
            <?php if( have_rows('map') ): while( have_rows('map') ): the_row(); 
                    ?>
                     <div class="c-access">
                        <div class="c-access__info">
                            <h3 class="c-title c-title--sub"><?php the_sub_field('title'); ?></h3>
                            <p class="address"><?php the_sub_field('address'); ?></p>
                            <p class="time"><?php the_sub_field('time'); ?></p>
                            <br/>
                            <p>
                                <span class="tel"><?php the_sub_field('tel'); ?></span>
                                <span class="fax"><?php the_sub_field('fax'); ?></span>
                                <br/>
                                <span class="email"><?php the_sub_field('email'); ?></span>
                            </p>
                        </div>
                        <div class="c-access__img">
                            <img src="<?php the_sub_field('image'); ?>">
                        </div>
                    </div>
            <?php endwhile; endif; ?>
			
		<!-- </div> -->
	</div>
</main>
<?php
	get_footer();
	wp_footer();
?>

