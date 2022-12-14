<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>
		<?php if (is_home() || is_front_page()) : ?>
            Home | Training wordpress
        <?php endif; ?>
        <?php if (is_page('services')) : ?>
            サービス | Training wordpress
        <?php endif; ?>
		<?php if (is_date()) : ?>
            Date | Training wordpress
        <?php endif; ?>
        <?php if (is_page('topics')) : ?>
            Topics | Training wordpress
        <?php endif; ?>
		<?php if (is_404()) : ?>
            404 | Training wordpress
        <?php endif; ?>
		<?php if (is_search()) : ?>
            Search | Training wordpress
        <?php endif; ?>
		<?php if (is_single('')) : ?>
            Post | Training wordpress
        <?php endif; ?>
	</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/404.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<header class="c-header">
	<div class="l-container">
		<div class="c-header__top">
			<div class="logo">
				<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="税理士法人下平会計事務所"></a>
			</div>
			<div class="contact">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/hed_tel.png" alt=""><br/>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/hed_con_no.png" alt="Image hed_con_no" class="js-imglink">

			</div>
		</div>
		<nav class="c-gnav">
			<?php wp_nav_menu( 
				array( 
					'theme_location' => 'header-menu', 
					'container' => 'false', 
					'menu_id' => 'c-header-menu', 
					'menu_class' => 'c-header-menu'
				) 
			); ?>
		</nav>
	</div>
</header>