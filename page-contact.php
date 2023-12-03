<?php
/*
Template Name: page-contact
*/
?>

<?php get_header(); ?>

	<!-- p-main -->
	<main class="p-main l-main">

		<!-- p-util-head -->
		<div class="p-util-head">
			<div class="p-util-head__title">
				<h2 class="c-util-title">Contact</h2>
				<p class="c-util-title__sub">お問い合わせ</p>
			</div>
		</div>
		<!-- ./p-util-head -->

		<?php if (function_exists('bcn_display')) : //プラグインが無効化されたら表示させない為の記述 ?>
			<!-- breadcrumb -->
			<div class="breadcrumb">
				<?php bcn_display(); // BreadcrumbNavXTのパンくずを表示するための記述 ?>
			</div><!-- /breadcrumb -->
		<?php endif; ?>

		<!-- p-contact -->
		<div class="p-contact">
			<div class="p-contact__inner l-inner">
				<div class="p-contact__content">
					<p class="p-contact__text">
						以下の内容をお伝えいただけますと幸いです。<br />
						1営業日以内にご返信いたします。
					</p>
					<div class="p-contact__info">
						1.ご相談内容<br />
						2.スケジュール（希望納期）<br />
						3.ご予算<br />
						4.デザインの作成ツールと準備状況<br />
						5.サーバー・ドメインの取得情報
					</div>
				</div>

				<!-- p-contact__form -->
				<div class="p-contact__form">

				 <?php echo do_shortcode('[contact-form-7 id="73f5154" title="お問い合わせ"]'); ?>

					
				</div>
				<!-- /.p-contact__form -->
			</div>
		</div>
		<!-- /.p-contact -->

		<?php get_footer(); ?>

	</main>
	<!-- ./p-main -->

	<?php wp_footer(); ?>
</body>

</html>