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
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$topic = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page'  => 5,
					'order' => 'DESC',
                    'paged' => $paged
				))

			?>
			<?php  
				if($topic->have_posts()) : while($topic->have_posts()): $topic->the_post();
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
			
			<?php  endwhile; endif; wp_reset_query();?>	
		</ul>

		<div class="c-pnav">
			<?php pagination_bar($topic);?>
		</div>
	</div>
</main>
<?php
	wp_footer();
?>