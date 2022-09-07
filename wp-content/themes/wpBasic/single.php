<?php 
	wp_head();
	get_header();
?>
<main class="p-single">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<?php get_sidebar() ?>

		<div class="l-main">
			<h2 class="p-single__title"><?php the_title() ?></h2>
			<div class="p-single__info">
				<span><?= get_the_date() ?></span>
				<p>
                        <?php
							$cats = get_the_category(get_the_ID());
							foreach ($cats as $cat) {
						?>
							<a href="<?= get_category_link($cat->cat_ID) ?>" ><?= $cat->name ?></a>
						<?php } ?>
				</p>
			</div>

			<div class="p-single__content">
				<?php echo get_the_content() ?>
			</div>

			<ul class="groupbtn">
				<li class="prev_link"><?php previous_post_link('%link', 'Prev', TRUE); ?></li>
				<li class="next_link"><?php next_post_link('%link', 'Next', TRUE); ?></li>
			</ul>

		</div>
	</div>
</main>
<?php
	get_footer();
	wp_footer();
?>

