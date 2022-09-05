<?php
	get_header();
?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>特集記事</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php 
				$args = array(
					'post_status' => 'publish', 
					'post_type' => 'post', 
					'cat' => 10, 
							);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<span class="datepost"><?= get_the_date('Y/m/d'); ?></span>
					<a href="<?php bloginfo('url') ?>/cat" class="c-label"><?php the_title(); ?></a>
					<a href="<?php bloginfo('url') ?>/cat" class="c-label">デイリーニュース</a>
					<a href="<?php the_permalink()?>"><?php the_excerpt(); ?></a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			
		
			<?php 
				$args = array(
					'post_status' => 'publish', 
					'post_type' => 'post', 
					'showposts' => 9, 
					'cat' => 10, 
					'offset' => 1,
					);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<span class="datepost"><?= get_the_date('Y/m/d'); ?></span>
					<a href="<?php bloginfo('url') ?>/cat" class="c-label"><?php the_title(); ?></a>
					<a href="<?php the_permalink()?>"><?php the_excerpt(); ?></a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
			
		</ul>

		<?php if(paginate_links()!='') {?>
			<div class="quatrang">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('« Mới hơn'),
					'next_text'    => __('Tiếp theo »'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
				?>
			</div>
		<?php } ?>
	</div>
</main>

<?php
	get_footer();
	wp_footer();
?>