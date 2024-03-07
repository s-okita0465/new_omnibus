<?php

/**
 * Template Name: Subcontracting Form Send
 *
 * @use : /subcontracting_form/send/
 */
get_header();
?>

<div class="titleBar">
    <h2>
        <span style="font-size: 2.4rem;">CONTACT</span>
    </h2>
</div>

<div class="contactform_send">
    <div class="contactform_send_container">
        <div class="body-container-wrapper">

            <div class="body-container container-fluid" id="hoge" style="padding:0px;">
                <h3 class="send_message">フォームへのご記入ありがとうございました</h3>
                <div class="company_logo">
                    <img alt="Omnibus" src="<?php echo get_template_directory_uri(); ?>/images/company/company_logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/company_logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/company_logo@2x.png 2x">
                </div>

                <li>
                    お問い合わせ頂いたお客様：　後ほど担当者よりご連絡させて頂きます。
                </li>
                <li>
                    資料ダウンロードをされたお客様：　ご入力頂いたメールアドレス宛てにダウンロードURLをお送りさせて頂きました。
                </li>
                <p>引き続き何卒よろしくお願い申し上げます。</p>
            </div>
        </div>
    </div>
</div>
<?php
if (defined('SUBCONTRACTING_FORM_KEY') && SUBCONTRACTING_FORM_KEY) {
    echo do_shortcode('[mwform_formkey key="' . SUBCONTRACTING_FORM_KEY . '"]');
}
?>
<?php
get_footer();
