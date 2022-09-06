<?php
	get_header();
?>
<main class="p-service">
	<div class="l-container">
		<div class="c-title c-title--page">
			<h1>サービス</h1>
		</div>
		<div class="p-service__top">
			<p class="c-label">Smile Service</p>
			<p class="label_content">私たちのサービスは、笑顔をつくります。</p>

			<p class="note">私たち下平会計事務所のすべてのサービスは、個人事業主様や会社の経営者様を笑顔にするものです。<br/>
			笑顔のあるところにはヒトやモノが集まり、組織が活性化します。<br/>
			私たちはこれまで、笑顔のチカラでお客様の成長・発展をサポートしてきました。<br/>
			これから先もすべてのお客様に寄りそい、信頼の笑顔を育んでまいります。</p>
		</div>
		
		<div class="p-service__content">
		<?php 
			$args = array(
				'post_status' => 'publish', 
				'post_type'   => 'services',
				'order'       => "ASC",
				'showposts'   => 5, 
			);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<div class="c-service">
					<h2 class="c-service__title"><span class="c-label c-label--white"><?php the_title(); ?></span></h2>
					<p><?= the_content() ?></p>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<?php
	get_footer();
?>