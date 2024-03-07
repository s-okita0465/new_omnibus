<?php

/**
 * Template Name: Transaction Application Check
 *
 * @use : /transaction_application/check/
 */

get_header();
?>

<div class="transaction">
	<div class="container row">
		<div class="page_title">
			<h1 class="">広告媒体社新規取引開始用<br class="sp">申請フォーム</h1>
			<h2 class="">下記、当社ブランドセーフティポリシー及び無効トラフィック除外ポリシーを確認の上、フォームの記入をお願いいたします。<br><a href="https://e-omnibus.co.jp/adsafety/">広告品質向上に関する取り組み</a><br></h2>
		</div>
		<article class="col row">
			<?php
			if (defined('TRANSACTION_FORM_KEY') && TRANSACTION_FORM_KEY) {
				echo do_shortcode('[mwform_formkey key="' . TRANSACTION_FORM_KEY . '"]');
			}
			?>
		</article>
		<br clear="all">
	</div>
</div>

<?php
get_footer();
