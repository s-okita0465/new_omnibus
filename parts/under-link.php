<?php
/**
 * そのカテゴリの一覧
 */
?>

<section class="bg-gray">
  <div class="underLink wrap-a">
    <?php // サービス ?>
    <?php if(strpos($_SERVER['REQUEST_URI'],'service')!==false && get_post_type() != 'post' && strpos($_SERVER['REQUEST_URI'],'service-old')==false){ ?>
      <div class="underLinkTitle"><a href="<?php echo home_url('service'); ?>">SERVICE</a></div>
      <div class="underLinkBody">
        <ul>
          <li>
            <p><a href="<?php echo home_url('service/programaticads'); ?>">広告運用</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service/video'); ?>">動画マーケティング</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service/saisondata'); ?>">セゾンデータ活用</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service/retail'); ?>">店舗ビジネス支援</a></p>
          </li>
        </ul>
      </div>
    <?php }?>
		
    <?php // サービス（旧） ?>
    <?php if(strpos($_SERVER['REQUEST_URI'],'service-old')!==false){ ?>
      <div class="underLinkTitle">SERVICE</div>
      <div class="underLinkBody">
        <ul>
          <li>
            <p><a href="<?php echo home_url('service-old'); ?>">サービスTOP</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service-old#add'); ?>">広告事業</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service-old#data'); ?>">データ事業</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('service-old#creative'); ?>">クリエイティブ事業</a></p>
          </li>
        </ul>
      </div>
    <?php }?>

    <?php // 会社概要 ?>
    <?php //if(strpos($_SERVER['REQUEST_URI'],'company')!==false && get_post_type() != 'post'){ ?>
<!--
      <div class="underLinkTitle">COMAPNY</div>
      <div class="underLinkBody">
        <ul>
          <li>
            <p><a href="<?php echo home_url('/'); ?>company">企業情報 TOP</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('/'); ?>company/environment">働く環境</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('/'); ?>company/support">サポート制度</a></p>
          </li>
        </ul>
      </div>
-->
    <?php //}?>

    <?php // リクルート ?>
    <?php if(strpos($_SERVER['REQUEST_URI'],'recruit')!==false && get_post_type() != 'post'){ ?>
      <div class="underLinkTitle">RECRUIT</div>
      <div class="underLinkBody">
        <ul>
          <li>
            <p><a href="<?php echo home_url('/'); ?>recruit">リクルートTOP</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('/'); ?>recruit/member">人を知る</a></p>
          </li>
          <li>
            <p><a href="<?php echo home_url('/'); ?>recruit/environment">働く環境を知る</a>
          </li>
          <li>
            <p><a href="<?php echo home_url('/'); ?>recruit/outline">採用情報を知る</a></p>
          </li>
        </ul>
      </div>
    <?php } ?>
  </div>
</section>
