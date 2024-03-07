<?php
/**
 * 人を知るの詳細ページ
 * 
 * @use /human
 */
 get_header();
 ?>
<div class="humanDetail">

<div class="mv mvFirst recruitUnder">
  <img class="ofi" alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/recruit/recruit_mv.jpg">
  <div class="mvInner">
    <h2 class="pc"><img alt="RECRUIT" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png"
   srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_recruit@2x.png 2x" width="135"><span>採用情報</span></h2>
  </div>
</div>
 
<section>
  <div class="recruitIntro bg-white">
    <div class="wrap-f space-b">
      <p class="pointTitle">人を知る</p>
    </div>
  </div>
</section>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      // メイン画像
      $main_img = SCF::get('main_img');
      if(!empty($main_img)){
        $main_img = wp_get_attachment_image_src($main_img,'full');
        $main_img = $main_img[0];
      }

      // インタビュー画像
      $int_img = SCF::get('interview_img');
      if(!empty($int_img)){
        $int_img = wp_get_attachment_image_src($int_img,'full');
        $int_img = $int_img[0];
      }

      // qa
      $qa = SCF::get('qa');

      // ムービー
      $movie = SCF::get('movie');

      // スケジュール
      $schedules = SCF::get('schedules');
        ?>
        <section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <div class="humanDetail__intro wrap-d">
            <?php if(!empty($main_img)){ ?>
              <img src="<?php echo $main_img; ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <h3>
              <?php echo preg_replace('/\s\s/','<br>',SCF::get('position')); ?><br>
              <?php the_title(); ?>
            </h3>
          </div>
        </section>

        <section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <div class="humanDetail__sectitle">
              インタビュー<span>Interview</span>
            </div>
          <div class="humanDetail__interview wrap-d">
            
            <?php if(!empty($int_img)){ ?>
            <figure>
              <img src="<?php echo $int_img; ?>" alt="<?php the_title(); ?>">
            </figure>
            <?php }
              
              if(0 < count($qa)){
                ?>
                <dl>
                <?php foreach($qa as $a){ ?>
                  <dt><?php echo $a["question"]; ?></dt>
                  <dd><?php echo $a["answer"]; ?></dd>
                <?php } ?>
                </dl>
                <?php
              }
            ?>
          </div>
        </section>
        
        <?php if(!empty($movie)){ ?>
        <section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <div class="humanDetail__movie">
            <?php echo $movie; ?>
          </div>
        </section>
        <?php } ?>

        <?php if(0 < count($schedules)){ ?>
        <section data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <div class="humanDetail__sectitle">
              1日のスケジュール<span>Schedule</span>
            </div>
          <div class="humanDetail__schedule wrap-f">
            <dl>
              <?php foreach($schedules as $s){ ?>
                <dt><span><?php echo $s["time"];?></span><?php echo $s["title"];  ?></dt>
                <dd><?php echo $s["body"]; ?></dd>
              <?php } ?>
            </dl>
          </div>
        </section>
        <?php } ?>
        
      
        <div class="pagesNavi space-a">
          <div class="prev">
            <?php
              $next = get_next_post();
              if(!empty($next)){
            ?>
            <a href="<?php echo get_the_permalink($next->ID); ?>">前へ</a>
            <?php } ?>
          </div>
          <div><a href="<?php echo home_url('/'); ?>recruit/human">一覧へ戻る</a></div>
          <div class="next">
            <?php
              $prev = get_previous_post();
              if(!empty($prev)){
            ?>
            <a href="<?php echo get_the_permalink($prev->ID); ?>">次へ</a>
            <?php } ?>
          </div>
        </div>
        
        <?php
    }
  }

get_template_part('parts/recruit','under');
?>
</div><!-- .humanDetail End -->
<?php
 get_footer();
