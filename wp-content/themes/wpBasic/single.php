<?php 
	wp_head();
	get_header();
?>
<main class="p-single">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<div class="l-sidebar">
			<div class="c-widget">
				<h3 class="c-widget__title">Search</h3>
				<div class="c-search">
					<form action="searchpage.html" method="get">
					    <input type="text" name="keyworks" id="search" value="" />
					    <input type="submit" name="search" value="Search" />
					</form>
				</div>
			</div>
			<div class="c-widget">
				<h3 class="c-widget__title">Category</h3>
				<ul class="c-list">
					<li><a href="cat.html">お知らせ</a></li>
					<li><a href="cat.html">デイリーニュース</a></li>
					<li><a href="cat.html">事務所ニュース</a></li>
					<li><a href="cat.html">特集記事</a></li>
				</ul>
			</div>
			<div class="c-widget">
				<h3 class="c-widget__title">Archive</h3>
				<ul class="c-list">
					<li><a href="#">2018年</a></li>
					<li><a href="#">2017年</a></li>
					<li><a href="#">2016年</a></li>
					<li><a href="#">2015年</a></li>
				</ul>
			</div>
		</div>

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
				<li class="prev_link"><a href="">Prev</a></li>
				<li class="next_link"><a href="">Next</a></li>
			</ul>

		</div>
	</div>
</main>
<?php
	get_footer();
	wp_footer();
?>

