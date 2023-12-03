<?php get_header(); ?>

	<!-- p-main -->
	<main class="p-main l-main">
		<!-- p-top-mv -->
		<div class="p-top-mv">
			<figure class="p-top-mv__ph">
				<picture>
					<source media="(max-width:767px )" srcset="<?php echo get_template_directory_uri() ?>/public/assets/img/sp/mv.png" />
					<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri() ?>/public/assets/img/mv.png" />
					<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/mv.png" alt="" />
				</picture>
			</figure>
			<div class="p-top-mv__scroll"><span>Scroll</span></div>
		</div>

		<!-- /.p-top-mv -->

		<!-- p-top-works -->
		<section class="p-top-works p-top-section">
			<div class="l-inner p-top-works__inner">
				<div class="p-top-works__title">
					<h2 class="c-top-title">Works</h2>
				</div>

				<!-- p-top-works__list -->
				<div class="p-top-works__list">

				<?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
          );
          $my_post = new WP_Query($args);
          ?>

					<?php if($my_post->have_posts()) : ?>
						<?php while($my_post->have_posts()) : ?>
						  <?php $my_post->the_post(); ?>
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

				<div class="p-top-works__button">
					<a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="c-top-button bgleft"><span>MORE</span></a>
				</div>

			</div>
		</section>
		<!-- /.p-top-works -->

		<!-- p-top-service -->
		<section class="p-top-service p-top-section" id="service">
			<div class="l-inner p-top-service__inner">
				<div class="p-top-service__title">
					<h2 class="c-top-title">Service</h2>
				</div>

				<ul class="p-top-service__list">
					<li class="p-top-service__item">
						<div class="p-top-service__item-img">
							<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/service1.jpg" alt="" />
						</div>
						<p class="p-top-service__item-title">コーディング</p>
						<p class="p-top-service__item-text">
							ご要望をヒアリングし、ニーズに合わせた柔軟なコーディングをご提供いたします。<br />
							デザインの意図を大切に理想のホームページを一から制作いたします。<br />
							Wordpress化も対応可能です。お気軽にご相談ください。
						</p>
					</li>
					<li class="p-top-service__item">
						<div class="p-top-service__item-img">
							<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/service2.jpg" alt="" />
						</div>
						<p class="p-top-service__item-title">ホームページ修正</p>
						<p class="p-top-service__item-text">
							テキストの変更や画像の差し替えなど、ホームページのちょっとしたお困りごともお任せください。
						</p>
					</li>
					<li class="p-top-service__item">
						<div class="p-top-service__item-img">
							<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/service3.jpg" alt="" />
						</div>
						<p class="p-top-service__item-title">メンテナンス</p>
						<p class="p-top-service__item-text">
							ホームページのメンテナンスを定期的に行うことでサイトを安全に保ち、パフォーマンスを最適化します。ユーザー目線の使いやすさを追求いたします。
						</p>
					</li>
				</ul>
				<div class="p-top-service__button">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="c-top-button bgleft"><span>お問い合わせはこちら</span></a>
				</div>
			</div>
		</section>
		<!-- /.p-top-service -->

		<!-- p-top-about -->
		<section class="p-top-about p-top-section" id="about">
			<div class="l-inner p-top-about__inner">
				<div class="p-top-about__title">
					<h2 class="c-top-title">About</h2>
				</div>

				<div class="p-top-about__wrap">
					<div class="p-top-about__img">
						<img src="<?php echo get_template_directory_uri() ?>/public/assets/img/about.jpg" alt="Sena　Fujiiの写真" />
					</div>
					<div class="p-about__profile">
						<p class="p-top-about__name">Sena　Fujii</p>
						<p class="p-top-about__text1">
							北海道札幌市在住。
							大学卒業後、航空会社の客室乗務員として約10年間勤務。<br />
							オンラインスクールデイトラで合計1100時間の学習後、フリーランスとして独立。
						</p>
						<p class="p-top-about__text2">
							航空会社では機内の責任者として徹底したタイムマネジメントをしてきたため
							<span>スケジュール管理と納期の順守</span>をいたします。<br />
							現場では日々想定外のことが起こる中で柔軟な対応力を培ってきました。<br />
							Web制作においても最善のご提案をさせていただけるよう日々スキルの向上に努めています。<br />
							また、<span>素早い報連相を心掛けて</span>おります。
						</p>
					</div>
				</div>

				<div class="p-top-about__info">
					<div class="p-top-about__item">
						<div class="p-top-about__item-content">
							<p class="p-top-about__item-head">使用言語</p>
							<p class="p-top-about__item-body">HTML / CSS / Java Script</p>
						</div>
						<div class="p-top-about__item-content">
							<p class="p-top-about__item-head">フレームワーク等</p>
							<p class="p-top-about__item-body">
								Bootstrap / jQuery / WordPress
							</p>
						</div>
						<div class="p-top-about__item-content">
							<p class="p-top-about__item-head">使用ツール</p>
							<p class="p-top-about__item-body">
								Adobe XD / Figma　/ Illustrator
							</p>
						</div>
					</div>
					<div class="p-top-about__item">
						<p class="p-top-about__item-head">稼働時間</p>
						<div class="p-top-about__item-body">
							<p class="p-top-about__item-text1">
								平日<span>9:00~18:00</span><br />
							</p>
							<p class="p-top-about__item-text1">土日祝<span>不定期</span></p>
							<p class="p-top-about__item-text1">
								お急ぎの場合は可能な限り対応いたします。
							</p>
							<p class="p-top-about__item-text2">
								連絡は24時間受け付けております。<br />
								時間帯を気にせずご連絡ください。
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ./p-top-about -->

		
		<?php get_footer(); ?>

	</main>
	<!-- ./p-main -->


	<?php wp_footer(); ?>
</body>

</html>