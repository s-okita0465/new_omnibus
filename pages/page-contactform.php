<?php

/**
 * Template Name: CONTACTFORM
 *
 * @use : /contactform/
 */
get_header();

?>

<div class="transaction">
	<div class="container row">
		<div class="page_title">
			<h1 class="">お問い合わせフォーム</h1>
		</div>
		<article class="col row">
			<?php
			if (defined('CONTACT_FORM_KEY') && CONTACT_FORM_KEY) {
				echo do_shortcode('[mwform_formkey key="' . CONTACT_FORM_KEY . '"]');
			}
			?>
		</article>

		<!-- contents_body -->
		<br clear="all">
	</div>
</div>

<?php
get_footer();
