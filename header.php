<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>

<body>
	<!-- p-header -->
	<header class="p-header l-header">
		<div class="p-header_inner">
			<h1 class="p-header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-header__logo-link">SENA<br />
					FUJII<br />
					PortfolioSite</a>
			</h1>
			<nav class="p-header__nav">
				<ul class="p-header__list">
					<li class="p-header__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-header__item-link">Home</a>
					</li>
					<li class="p-header__item">
						<a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="p-header__item-link">Works</a>
					</li>
					<li class="p-header__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>#service" class="p-header__item-link">Service</a>
					</li>
					<li class="p-header__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>#about" class="p-header__item-link">About</a>
					</li>
					<li class="p-header__item">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-header__item-link _contact">Contact</a>
					</li>
				</ul>
			</nav>
			<ul class="p-header__sns">
				<li class="p-header__sns-item">
					<a href="https://twitter.com/siratama_goro" target="_blank" class="p-header__sns-link">
						<i class="fa-brands fa-square-x-twitter fa-2x" style="color: #fff"></i>
					</a>
				</li>
			</ul>
		</div>
	</header>
	<!-- ./p-header -->

	<!-- p-drawer -->
	<div class="p-drawer">
		<div class="p-drawer__inner">
			<h1 class="p-drawer__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-drawer__logo-link">
					SENA<br />
					FUJII<br />
					PortfolioSite</a>
			</h1>
			<div class="p-drawer__items">
				<div class="p-drawer__contact">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="p-drawer__contact-link">
						<i class="fa-regular fa-envelope fa-2x" style="color: #333"></i>
						<p>Contact</p>
					</a>
				</div>
				<div class="p-drawer__icon">
					<div class="p-drawer__bars">
						<span class="p-drawer__bar1"></span>
						<span class="p-drawer__bar2"></span>
						<span class="p-drawer__bar3"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./p-drawer -->

	<!-- p-drawer__menu -->
	<div class="p-drawer__menu">
		<ul class="p-drawer__list">
			<li class="p-drawer__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li class="p-drawer__item"><a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Works</a></li>
			<li class="p-drawer__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#service">Service</a></li>
			<li class="p-drawer__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
			<li class="p-drawer__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">Contact</a></li>
		</ul>
		<div class="p-drawer__sns">
			<a href="https://twitter.com/siratama_goro" target="_blank">
				<i class="fa-brands fa-square-x-twitter fa-2x" style="color: #333333"></i>
			</a>
		</div>
	</div>
	<!-- ./p-drawer__menu -->