<?php
/**
 * Template Name: RECRUIT - 人を知る
 * 
 * @use /recruit/member
 */
 get_header();
 ?>
<div class="mv mvFirst recruitUnder">
  <img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv_03@2x.jpg 2x">
  <div class="mvInner">
    <h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit@2x.png 2x" width="135"><span>採用情報</span></h2>
  </div>
</div>
 
<section>
  <div class="recruitIntro bg-white" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div class="wrap-f space-a">
      <h3 class="pointTitle">人を知る</h3>
      <p class="recruitIntro__ext">オムニバスでは「チームプレイ」を合言葉に、チームでの仕事を通じ一生涯の仲間を創ることを何より大切に考えています。自由でフラットな社風の元、それぞれ専門性と個性を併せ持ったオムニバスのメンバーを紹介します。</p>
    </div>
  </div>
</section>

<?php
  $human = new WP_Query(array(
    'post_type' => 'member',
    'posts_per_page' => -1,
  ));

  if($human->have_posts()){
?>
<section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
	<div class="recruitHumanList wrap-h">
    <?php
      while($human->have_posts()){
        $human->the_post();

        $list_img = SCF::get('list_img');
        if(!empty($list_img)){
          $list_img = wp_get_attachment_image_src($list_img,'full');
          $list_img = $list_img[0];
        }
    ?>
    <a class="op" href="<?php the_permalink(); ?>">
      <img alt="<?php the_title(); ?>" src="<?php echo $list_img; ?>">
      <p><?php echo preg_replace('/\s\s/','<br>',SCF::get('position')); ?><br><?php the_title(); ?></p>
    </a>
    <?php
      }
      wp_reset_postdata();
      /*
    ?>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <a class="op" href="<?php echo home_url('/'); ?>recruit/human">
      <img alt="サンプル" src="<?php echo get_template_directory_uri(); ?>/images/sample/sample_human_01.png">
      <p>＿部署/所属<br>＿名前</p>
    </a>
    <?php */ ?>
  </div>
</section>
<?php } ?>


<?php get_template_part('parts/under-link-company'); ?>
<?php get_template_part('parts/under','link'); ?>
	
<?php get_footer();