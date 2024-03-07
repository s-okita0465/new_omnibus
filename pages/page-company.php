<?php

/**
 * Template Name: COMPANY
 * 
 * @use /company
 */
get_header();
?>
<div class="pc titleBar">
  <h2><img alt="COMPANY" src="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company.png" srcset="<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company.png 1x,<?php echo get_template_directory_uri(); ?>/images/common/header_menu_company@2x.png 2x" width="166">
    <span>会社概要</span>
  </h2>
</div>

<div class="company mvFirst">

  <section>
    <div id="company" class="companyIntro">

      <div class="wrap-h">
        <h3 class="space-a companyIntro__start">
          会社概要
        </h3>
        <div class="companyIntro__logo">
          <img alt="Omnibus" src="<?php echo get_template_directory_uri(); ?>/images/company/company_logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/company_logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/company_logo@2x.png 2x">
        </div>

        <h4 class="pointTitle">進化の連続で想いをつなぐ</h4>
        <p>これからも変化し続けるデジタル社会において、オムニバスではデータやテクノロジーを強みとしたコミュニケーションサービスによって、世の中とそこで生活をするユーザーに優れた価値を提供し続けて参ります。</p>

        <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
          <dl>
            <dt>社　　名</dt>
            <dd><?php echo nl2br(SCF::get('name')); ?></dd>
            <dt>本　　社</dt>
            <dd><?php echo nl2br(SCF::get('address')); ?></dd>
            <dt>支　　社</dt>
            <dd><?php echo nl2br(SCF::get('address2')); ?></dd>
            <dt>設　　立</dt>
            <dd><?php echo SCF::get('up'); ?></dd>
            <dt>役　　員</dt>
            <dd><?php echo nl2br(SCF::get('manager')); ?></dd>
            <dt>事業内容</dt>
            <dd><?php echo nl2br(SCF::get('business')); ?></dd>
            <?php if (SCF::get('associate')) { ?>
              <dt>関連会社</dt>
              <dd><?php echo nl2br(SCF::get('associate')); ?></dd>
            <?php } ?>
            <?php if (SCF::get('suppliers1') && SCF::get('suppliers1')) { ?>
              <dt class="companyIntro__supbox">主な取引先（五十音順）</dt>
              <dd class="companyIntro__supbox">
                <ul class="companyIntro__suppliers">
                  <li><?php echo nl2br(SCF::get('suppliers1')); ?></li>
                  <li><?php echo nl2br(SCF::get('suppliers2')); ?></li>
                </ul>
              </dd>
            <?php } ?>
          </dl>
        </div>

      </div>

      <div class="companyIntro__desc wrap-e">
        アドテクノロジーを活用したデジタルマーケティングのプランニングからクリエイティブ、オペレーションまでOne Stopでサービスを提供。2013年より日本市場における動画広告分野へ参入。2017年より日本のクレジットカード会社である株式会社クレディセゾンの完全子会社となり、決済関連データを用いた新しいデジタル広告ソリューションの開発・提供などを行なっている。
      </div>

    </div><!-- .companyIntro End -->
</div>
</section>

<section>
  <div id="access" class="companyAccess" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12964.768667335442!2d139.7323941!3d35.67227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b7eb90a6483%3A0x6ebd9f58664d25e4!2sIsaI%20AkasakA!5e0!3m2!1sja!2sjp!4v1709248458700!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <h4 class="pointTitle">ACCESS</h4>
    <div class="wrap-g">
      〒107-0052 東京都港区赤坂5丁目2番33号 IsaI AkasakA 1902号室<br><br>
      <ul>
        <li>東京メトロ千代田線「赤坂駅」より徒歩7分</li>
        <li>東京メトロ銀座線・東京メトロ半蔵門線・都営地下鉄大江戸線「青山一丁目駅」より徒歩12分</li>
      </ul>
    </div>
  </div>
</section>

<section>
  <div id="message" class="companyMessage" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">

    <h3 class="companyIntro__start">代表メッセージ</h3>
    <div class="companyMessage_body">
      <div class="companyMessage_image">
        <picture>
          <source media="(max-width: 750px)" srcset="<?php echo get_template_directory_uri(); ?>/images/company/message_2022_sp@2x.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/company/message_2022.jpg?2" srcset="<?php echo get_template_directory_uri(); ?>/images/company/message_2022@2x.jpg?2" width="" height="" alt="">
        </picture>
      </div>
      <!--				<h4 class="companyMessage_title">ダミーテキストダミーテキストダミーテキスト</h4>-->
      <p>2022年度、年初より前代表からオムニバスを受け継ぎました。</p>
      <p>会社設立からこれまでの14年間、節目節目で訪れる環境変化と社の運営にまつわる多くの難題を乗り越え、創業者山本章悟と前代表矢野茂樹は大きな財産を築いて襷を渡してくれたこと、心より感謝しています。<br>
        オムニバスは2008年に小さなマンションから産声を上げ、急速な勢いでインターネットサービスが普及する中、広告業界においてアドテクノロジーを活用した事業を展開してきました。データを活用したターゲティング広告や自社開発した動画広告のプラットフォームを武器に、インターネット広告がより良く、より価値のあるものへ進化していけるよう邁進してきました。</p>
      <p>2017年には大手クレジットカード会社であるクレディセゾン社のグループ企業となりました。今まで以上に社会的責任が大きくなる中、未来に向けた舵取りを託され代表に就任いたしました。</p>
      <p>昨今のビジネス環境はグローバルに広がるさまざまな技術革新を捉えるだけではなく、個人の働き方や心の豊かさといった多様性にも目を向けなければならない時代となりました。過去の成功モデルが通用しにくい社会構造が形作られています。そんな中、デジタル領域でマーケティング支援を事業とするわれわれも、変革を求められていると感じています。お客さまのビジネス成長には何が必要なのか？消費者はどんな商品やサービスを求めているのか？そういった根源的な問いへ真摯に向き合い、今の時代に沿った価値を生み出していきたいと思っています。</p>
      <p>先の見通しが立てづらい世の中となりましたが、本当の意味で世のため、人のためになるサービスを提供できる会社になることを目指していきます。先人の後追いではなく、われわれが社会課題を解決していくために強固なリーダーシップを発揮し、一人でも多くの笑顔を生み出していきたいと思います。</p>
      <dl class="companyMessage_nameArea">
        <dt>株式会社オムニバス<br>代表取締役</dt>
        <dd>岩井 亮</dd>
      </dl>
    </div>

  </div>
</section>

<section>
  <div id="vision" class="philosophy">

    <div class="vision">
      <h3><img src="<?php echo get_template_directory_uri(); ?>/images/company/vision_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/vision_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/vision_title@2x.png 2x" alt="VISION"></h3>
      <h4>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/company/vision_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/vision_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/vision_catch@2x.png 2x" alt="型にハマらぬコミュニケーションカンパニーへ。そしてそのビジョンを、一人ひとりがリードするチームへ。">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/company/vision_catch_sp.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/vision_catch_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/vision_catch_sp@2x.png 2x" alt="型にハマらぬコミュニケーションカンパニーへ。そしてそのビジョンを、一人ひとりがリードするチームへ。">
      </h4>
      <p>創業から10年以上が経ち、今わたしたちは誰しもが情報の送り手・受け手になる時代に生きています。時代に即した次なる進化として、オムニバスは型にはまらないコミュニケーションを世に届けることを目指します。<br>自分の想いが心から伝わり、相手が動いてくれること。それが本当のコミュニケーション。我々は、広告主から生活者への広告コミュニケーションに限らず、人と人、人と社会など、それぞれの想いを自由な発想でつなげる企業を目指します。<br>型にはまらないコミュニケーションを生み出していくには、我々一人ひとりの主体性や責任感、熱意がなくてはなりません。自由な発想で一人ひとりが自ら仕事をつくる。リードしていく。そんな人間が集まるチームになることも我々が目指すビジョンです。そこへの道のりはきっとワクワクするものになり、そしてそんなチームは本当の意味での働く喜びに溢れているはずです。</p>
    </div>

    <div class="value">
      <h3><img src="<?php echo get_template_directory_uri(); ?>/images/company/value_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value_title@2x.png 2x" alt="VALUE"></h3>

      <div class="valueContents">
        <h4>
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/company/value_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value_catch@2x.png 2x" alt="オムニバスが掲げる5つのバリュー">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/company/value_catch_sp.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value_catch_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value_catch_sp@2x.png 2x" alt="オムニバスが掲げる5つのバリュー">
        </h4>

        <div class="valueContentsBox valueContentsBox-01">
          <h5><img src="<?php echo get_template_directory_uri(); ?>/images/company/value01_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value01_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value01_title@2x.png 2x" alt="THINK OUT OF BOX"></h5>
          <h6><img src="<?php echo get_template_directory_uri(); ?>/images/company/value01_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value01_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value01_catch@2x.png 2x" alt="これまでの「正解」に捉われず、もっと多様に、もっと自由に考えよう。"></h6>
          <img class="valueContentsIcon" src="<?php echo get_template_directory_uri(); ?>/images/company/value01_img.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value01_img.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value01_img@2x.png 2x" alt="">
          <p>新しい事業の開発や組織の枠を越えた連携など、「型にハマらぬコミュニケーションカンパニー」になるためには不可欠な行動指針です。</p>
        </div>

        <div class="valueContentsBox valueContentsBox-02">
          <h5><img src="<?php echo get_template_directory_uri(); ?>/images/company/value02_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value02_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value02_title@2x.png 2x" alt="ADVANCE YOURSELF"></h5>
          <h6><img src="<?php echo get_template_directory_uri(); ?>/images/company/value02_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value02_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value02_catch@2x.png 2x" alt="今の自分と対峙しよう。進化を止めない自分でいよう。"></h6>
          <img class="valueContentsIcon" src="<?php echo get_template_directory_uri(); ?>/images/company/value02_img.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value02_img.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value02_img@2x.png 2x" alt="">
          <p>現在の「自分」や「自分たちの事業」に向き合い、進化し続けることを心掛けましょう。劇的な変化だけでなく、日々の改善の積み重ねも重要です。</p>
        </div>

        <div class="valueContentsBox valueContentsBox-03">
          <h5><img src="<?php echo get_template_directory_uri(); ?>/images/company/value03_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value03_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value03_title@2x.png 2x" alt="RESPECT EACH OTHER"></h5>
          <h6>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/company/value03_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value03_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value03_catch@2x.png 2x" alt="共に働くクライアント／パートナー企業／社内の仲間／に感謝を忘れずにいよう。全方位に誠実さを忘れず信用を勝ち取ろう。">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/company/value03_catch_sp.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value03_catch_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value03_catch_sp@2x.png 2x" alt="共に働くクライアント／パートナー企業／社内の仲間／に感謝を忘れずにいよう。全方位に誠実さを忘れず信用を勝ち取ろう。">
          </h6>
          <img class="valueContentsIcon" src="<?php echo get_template_directory_uri(); ?>/images/company/value03_img.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value03_img.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value03_img@2x.png 2x" alt="">
          <p>クライアントファーストに代わるBOOです。私たちの挑戦を成功に導くには、多方面から信用を勝ち取ることが重要です。</p>
        </div>

        <div class="valueContentsBox valueContentsBox-04">
          <h5><img src="<?php echo get_template_directory_uri(); ?>/images/company/value04_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value04_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value04_title@2x.png 2x" alt="LEADERSHIP／OWNERSHIP"></h5>
          <h6><img src="<?php echo get_template_directory_uri(); ?>/images/company/value04_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value04_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value04_catch@2x.png 2x" alt="自らチームを勝利へ導こう。「私が要」の仕事をつくろう。"></h6>
          <img class="valueContentsIcon" src="<?php echo get_template_directory_uri(); ?>/images/company/value04_img.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value04_img.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value04_img@2x.png 2x" alt="">
          <p>次なる進化や新しい挑戦の実現には、メンバー 一人ひとりの「私がオムニバス/仕事を引っ張っていくのだ」という主体性や責任感が不可欠です。</p>
        </div>

        <div class="valueContentsBox valueContentsBox-05">
          <h5><img src="<?php echo get_template_directory_uri(); ?>/images/company/value05_title.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value05_title.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value05_title@2x.png 2x" alt="TELL A DREAM"></h5>
          <h6>
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/company/value05_catch.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value05_catch.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value05_catch@2x.png 2x" alt="夢を語れる人になろう。その夢に、己の熱意とプライドを約束しよう。">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/company/value05_catch_sp.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value05_catch_sp.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value05_catch_sp@2x.png 2x" alt="夢を語れる人になろう。その夢に、己の熱意とプライドを約束しよう。">
          </h6>
          <img class="valueContentsIcon" src="<?php echo get_template_directory_uri(); ?>/images/company/value05_img.png" srcset="<?php echo get_template_directory_uri(); ?>/images/company/value05_img.png 1x,<?php echo get_template_directory_uri(); ?>/images/company/value05_img@2x.png 2x" alt="">
          <p>「こういう自分になりたい！」「こういう仕事をしたい！」という想いを一人ひとりが胸を張って発信できる社風が必要です。</p>
        </div>
      </div>
    </div>
</section>

<?php get_template_part('parts/under-link-company'); ?>

<?php
get_footer();
