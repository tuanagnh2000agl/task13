<?php
	get_header();
?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">

			<?php
				$topic = new WP_Query(array(
					'post_type' => 'test',
					'posts_per_page'  => 10,
					'order' => 'DESC',
					'orderby' => 'id',
				))

			?>
			<?php  
				if($topic->have_posts()) : while($topic->have_posts()): $topic->the_post();
			?>
			<li>
				<span class="datepost"><?= get_the_date('Y/d/m') ?></span>
				<a href="<?php bloginfo('url') ?>/cat" class="c-label"><?php the_title() ?></a>
				<a href="<?php bloginfo('url') ?>/post"><?php the_content() ?></a>
			</li>
			
			<?php  posts_nav_link();  endwhile; endif; wp_reset_query();?>	
		</ul>

		<div class="c-pnav">
			<a href="" class="prev"></a>
			<a href="" class="current">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="" class="next"></a>
		</div>
	</div>
</main>
<?php
	wp_footer();
	get_footer();
?>