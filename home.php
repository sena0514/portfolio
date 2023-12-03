<?php get_header(); ?>

	<!-- p-main -->
	<main class="p-main l-main">
		<!-- p-util-head -->
		<div class="p-util-head">
			<div class="p-util-head__title">
				<h2 class="c-util-title">Works</h2>
				<p class="c-util-title__sub">制作実績</p>
			</div>
		</div>
		<!-- ./p-util-head -->

		<?php if (function_exists('bcn_display')) : //プラグインが無効化されたら表示させない為の記述 ?>
			<!-- breadcrumb -->
			<div class="breadcrumb">
				<?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
			</div><!-- /breadcrumb -->
		<?php endif; ?>

		<div class="p-works">
			<div class="p-works__inner l-inner">
				<!-- p-top-works__list -->
				<div class="p-top-works__list">

				<?php if(have_posts()) : ?>
						<?php while(have_posts()) : ?>
						  <?php the_post(); ?>

					<!-- p-top-works__item -->
					<div class="p-top-works__item">
						<a href="<?php the_permalink(); ?>" class="p-top-works__link">
							<div class="p-top-works__img">
							<?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
										<?php the_post_thumbnail(); ?>
										<?php else : // なければnoimage画像をデフォルトで表示 ?>
										<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/noimage.jpg" alt="" />
									<?php endif; ?>
							</div>
						</a>
					</div>
					<!-- ./p-top-works__item -->
				 <?php endwhile; ?>
				<?php endif; ?>
					
				</div>
				<!-- p-top-works__list -->
			</div>
		</div>
		<!-- /.p-home -->

		<?php get_footer(); ?>

	</main>
	<!-- ./p-main -->

<?php wp_footer(); ?>
</body>

</html>