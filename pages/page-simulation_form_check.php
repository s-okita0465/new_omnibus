<?php

/**
 * Template Name: Simulation Form Check
 *
 * @use : /simulation_form/check
 */

get_header();
?>

<div class="transaction">
	<div class="container row">
		<div class="simulation_page_title">
			<h1 class="">セゾンデータ広告　シミュレーション依頼フォーム</h1>
		</div>
		<article class="col row">
			<?php
			if (defined('SIMULATION_FORM_KEY') && SIMULATION_FORM_KEY) {
				echo do_shortcode('[mwform_formkey key="' . SIMULATION_FORM_KEY . '"]');
			}
			?>
		</article>
		<br clear="all">
	</div>
</div>

<?php
get_footer();
