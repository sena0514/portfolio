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

		<!-- breadcrumb -->
		<div class="breadcrumb"></div>
		<!-- /breadcrumb -->

		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : ?>
				<?php the_post(); ?>

				<!-- p-entry -->
				<div class="p-entry">
					<div class="l-inner p-entry__inner">

						<a href="<?php the_field('url'); ?>" target="_blank" class="p-entry__link">
							<div class="p-entry__img">
							<?php if (has_post_thumbnail()) : // アイキャッチ画像が設定されてれば表示 ?>
										<?php the_post_thumbnail(); ?>
										<?php else : // なければnoimage画像をデフォルトで表示 ?>
										<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/noimage.jpg" alt="" />
									<?php endif; ?>
							</div>
						</a>

						<div class="p-entry__button">
							<a href="<?php the_field('url'); ?>" target="_blank" class="c-top-button bgleft"><span>WEBサイトを見る</span></a>
						</div>

						<div class="p-entry__info">
							<p class="p-entry__title"><?php the_title(); ?></p>
							<div class="p-entry__content">
								<!-- p-entry__content-body -->
								<div class="p-entry__content-body">
								  <?php if ( get_field( 'language' ) ) : ?>
									 <p class="p-entry__content-head">使用言語：</p>
										<p class="p-entry__content-text">
											<?php the_field( 'language' ); ?>
										</p>
										<?php endif; ?>
								</div>
								<!-- ./p-entry__content-body -->

								<!-- p-entry__content-body -->
								<div class="p-entry__content-body">
									<?php if ( get_field( 'range' ) ) : ?>
										<p class="p-entry__content-head">担当範囲：</p>
										<p class="p-entry__content-text"><?php the_field( 'range' ); ?></p>
									<?php endif; ?>
								</div>
								<!-- ./p-entry__content-body -->

								<!-- p-entry__content-body -->
								<div class="p-entry__content-body">
								  <?php if ( get_field( 'term' ) ) : ?>
										<p class="p-entry__content-head">制作期間：</p>
										<p class="p-entry__content-text"><?php the_field( 'term' ); ?></p>
									<?php endif; ?>
								</div>
								<!-- ./p-entry__content-body -->

								<p class="p-entry__content-overview">
								 <?php echo nl2br( esc_html( get_field( 'overview' ) ) ); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /.p-entry -->

				<?php endwhile; ?>
			<?php endif; ?>

    <?php get_footer(); ?>
		
	</main>
	<!-- ./p-main -->

	
  <?php wp_footer(); ?>
</body>

</html>