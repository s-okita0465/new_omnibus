<?php
/*
 * Template name: デジタルはじめてパックLP
 *
*/
get_header('hajimete');
?>
 <div class="mainv">
	<div class="inner">
		<div class="catch">
			<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/mv_catch.png" alt="中小企業様の集客UPに！デジタルはじめてパック クレディセゾングループが提供するDXサービス セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カード会員様および加盟店様限定" class="sp_hidden">
			<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/mv_catch_sp.png" alt="中小企業様の集客UPに！デジタルはじめてパック クレディセゾングループが提供するDXサービス セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カード会員様および加盟店様限定" class="sp_visible">
		</div>
		<div class="btn_box">
			<a href="https://secure-link.jp/wf/?c=wf59586520" class="red_btn" target="_blank">
				お申し込みはこちらから
			</a>
		</div>
	</div>
</div>

<div id="news">
	<div class="inner">
		<?php
		$hajimete = new WP_Query(array(
			'post_type' => 'hajimete',
			'posts_per_page' => 1,
		));
		?>
		<?php if($hajimete->have_posts()):?>
		<ul>
			<?php while($hajimete->have_posts()): $hajimete->the_post();
			// カスタム カテゴリー名
			$terms = wp_get_object_terms($post->ID, 'hajimete_category');
			foreach( $terms as $term ) {
				$cate_name = $term->name;
				$cate_slug = $term->slug;
				$cate_link = get_term_link($cate_slug,'hajimete_category');
			}
			// カスタム タグ名
			$tags = wp_get_object_terms($post->ID, 'hajimete_tag');
			foreach( $tags as $tag ) {
				$tag_name = $tag->name;
				$tag_slug = $tag->slug;
				$tag_link = get_term_link($tag_slug,'hajimete_tag');
			}
			?>
			<li><a href="<?php the_permalink(); ?>">
				<time><?php the_time('Y.n.j'); ?></time>
				<span class="tag"><?php echo $cate_name; ?></span>
				<span class="txt"><?php echo wp_trim_words( get_the_title(), 40 , '…' ); ?>
					<?php if ($tags) { ?>
					<ul class="hash">
						<li>#<?php echo $tag_name; ?></li>
					</ul>
					<?php } ?>
				</span>
			</a></li>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
		<a href="<?php echo home_url('hajimete-news'); ?>" class="more_btn">お知らせ一覧を見る</a>
		<?php else: ?><!-- 投稿が存在しない時の処理 -->
		<p class="notFound">記事がありません。</p>
		<?php endif;?>
	</div>
</div>

<div id="content_top">
	<div class="inner">
		<h2>GoogleマップやSNS、WEBサイトを<span>もっと活用しませんか？</span></h2>
		<p>「デジタルはじめてパック」は、貴社の集客力・認知度UPをサポートするコンサルティングサービスです。<br>
		“初めて”の方でも、手軽にWEB集客を始めやすいメニューをご用意。<br>この機会にぜひご検討ください。</p>
	</div>
</div>

<div id="nayami"></div>
<div class="nayami_box">
	<div class="inner">
		<h3>こんなお悩みありませんか？</h3>
		<ul>
			<li>
				<div class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/icon1.png" alt="WEB集客をしたいが、ノウハウがない">
				</div>
				<p>WEB集客をしたいが、ノウハウがない</p>
			</li>
			<li>
				<div class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/icon2.png" alt="DXといわれても、何から手をつけていいかわからない">
				</div>
				<p>DXといわれても、何から手をつけていいかわからない</p>
			</li>
			<li>
				<div class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/icon3.png" alt="他社にお願いしたら、数十万円かかるといわれた">
				</div>
				<p>他社にお願いしたら、数十万円かかるといわれた</p>
			</li>
			<li>
				<div class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/icon4.png" alt="そもそも、誰に相談したらいいかわからない">
				</div>
				<p>そもそも、誰に相談したらいいかわからない</p>
			</li>
		</ul>
	</div>
</div>
<div class="cv_box">
	<div class="inner">
		<h3>その課題、「デジタルはじめてパック」が<br class="sp_visible">解決します！</h3>
		<div class="btn_box">
			<a href="https://secure-link.jp/wf/?c=wf59586520" class="red_btn" target="_blank">
				お申し込みはこちらから
			</a>
		</div>
	</div>
</div>
<div id="service"></div>
<div id="hajimete">
	<div class="inner">
		<h2>「デジタルはじめてパック」とは？</h2>
		<p class="top_txt">クレディセゾングループのオムニバスが提供する、「WEB集客」コンサルティングサービス。<br>少予算で始めやすく、<br>プロのアドバイスで成功確率の高い集客が可能です。</p>
		<div class="select_box">
			<h4>選べる4つのメニュー</h4>
			<p class="in_txt">集客に効く4つのメニューをご用意。<br>1つからご契約可能で、複数の組み合わせもOKです。<br>また、全メニューにデジタルマーケティングについて何でもご相談いただける<br>「デジタルよろず相談室」サービスが付帯しています。</p>
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/menu1.png" alt="そもそも、誰に相談したらいいかわからない">
					<div class="txt_box">
						<p class="ttl">Googleビジネスプロフィール<br>（旧Googleマイビジネス）<br>運用コンサルティング</p>
						<p>Googleビジネスプロフィールの運用をサポート。情報登録・口コミ対策を行います。実店舗をお持ちの方におすすめです。</p>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/menu2.png" alt="SNS運用コンサルティング">
					<div class="txt_box">
						<p class="ttl">SNS運用コンサルティング</p>
						<p>自社SNSの運用をサポート。利用者の多い3つのSNS（Facebook、Twitter、Instagram）に対応。アカウント取得から日々の発信内容の企画、データ分析などのアドバイスを行います。</p>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/menu3.png" alt="WEBサイト / ECサイト制作">
					<div class="txt_box">
						<p class="ttl">WEBサイト / ECサイト制作</p>
						<p>WEBサイトやECサイトの制作・リニューアルを行います。集客をはじめ、認知度UP・ブランディング・求人など、貴社の目的やご要望にあわせて最適な制作内容をご提案します。</p>
					</div>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/menu4.png" alt="デジタル広告出稿">
					<div class="txt_box">
						<p class="ttl">デジタル広告出稿</p>
						<p>Google / Yahoo!の検索連動型広告、動画広告、SNS広告などから、貴社のご予算・目的・販売目標などにあわせて、デジタル広告の最適なプランを作成。設計から運用、レポートまで、丸ごとお任せいただけます。</p>
					</div>
				</li>
			</ul>
		</div>
		<div class="plus_box">
			<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/plus.svg" alt="プラス">
		</div>
		<div class="btm_box">
			<div class="in_box">
				<h4>デジタルよろず相談室</h4>
				<p>上記4つのメニューすべてに「デジタルよろず相談室」が付帯。<br>デジタルマーケティングに関するお悩みや疑問・質問があった場合に、<br>何でもご相談いただけるオンライン窓口です。ご相談は24時間受け付けています。</p>
			</div>
		</div>
	</div>
</div>
<div id="fee"></div>
<div id="ryoukin">
	<div class="inner">
		<h2>料金表</h2>
		<table>
			<tr class="heading">
				<th>メニュー</th>
				<th>詳細</th>
				<th>月額</th>
			</tr>
			<tr>
				<td class="table_ttl">
					Googleビジネスプロフィール<br>（旧Googleマイビジネス）<br>運用コンサルティング
				</td>
				<td data-label="詳細">
					Googleビジネスプロフィールの開設～運用を継続的にサポートいたします。<br>・情報登録 / 更新<br>
					・最新情報発信アドバイス<br>
					・口コミ返信アドバイス　等
				</td>
				<td data-label="月額">
					<p class="getugaku">22,000<span class="en">円</span><span class="nedan">（税別20,000円）</span></p>
				</td>
			</tr>
			<tr>
				<td class="table_ttl">
					SNS運用コンサルティング
				</td>
				<td data-label="詳細">
					SNSのアカウント開設～運用を継続的にサポートいたします。<br>・対象：Facebook、Twitter、Instagramのうち１つ<br>・【初月】アカウント開設～基本情報登録<br>
					<dl>
						<dt>・【2ヵ月目以降】</dt>
						<dd>
							<p>ー投稿内容の相談、活性アドバイス1回 / 月</p>
							<p>ーレポート1回 / 月</p>
						</dd>
					</dl>
				</td>
				<td data-label="月額">
					<p class="getugaku">27,500<span class="en">円</span><span class="nedan">（税別25,000円）</span></p>
				</td>
			</tr>
			<tr>
				<td class="table_ttl">
					WEBサイト / ECサイト制作
				</td>
				<td data-label="詳細">
					簡易的なWEBサイト1～3ページを制作いたします。<br>
					・サーバー費含む<br>
					・【初月（初期）】サイト構築<br>
					・【2ヵ月目以降（構築後）】構築後、月1回の分析レポート
				</td>
				<td data-label="月額">
					<p class="getugaku">22,000<span class="en">円～</span><span class="nedan">（税別20,000円～）</span></p>
				</td>
			</tr>
			<tr>
				<td class="table_ttl">
					デジタル広告出稿
				</td>
				<td data-label="詳細">
					デジタル広告（主に運用型広告）の出稿を代行いたします。<br>・デジタル広告のご提案 / シミュレーション<br>・広告出稿の素材作成、入稿手続き、運用調整<br>
					・レポート
				</td>
				<td data-label="月額">
					<p class="tudo">都度お見積もり</p>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p class="red">上記サービスに、すべて「デジタルよろず相談室」（相談サービス）が付帯いたします。</p>
				</td>
			</tr>
		</table>
		<ul>
			<li>
				※初期費用なし。
			</li>
			<li>
				※最低契約期間は6ヵ月。以降は、6ヵ月ごとの自動更新です。
			</li>
			<li>
				※原則メールでの対応となります。電話もしくはテレビ会議をご希望の場合、別途費用がかかります。(サービスに含まれている場合をのぞく)
			</li>
			<li>
				※「WEBサイト / ECサイト制作」はページ数やご要望にあわせて金額が変動いたします。詳しくはお問い合わせください。
			</li>
		</ul>
	</div>
</div>
<div id="start">
	<div class="bg_box"></div>
	<div class="inner">
		<div class="start_box">
			<h2><span class="blue">限定特典</span><span class="min">お試しスタートプラン</span></h2>
			<ul>
				<li class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/startplan.png" alt="セゾンカード会員様限定特典 お試しスタートプラン">
				</li>
				<li class="txt_box">
					<p class="nomal">セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カード会員様およびセゾンカード加盟店様には、お試しプランをご用意！<br>下記の対象プラン約3ヵ月分を無料でお試しいただけます。</p>
					<p class="rand">対象プラン：Googleビジネスプロフィール（旧Googleマイビジネス）運用コンサルティング、SNS運用コンサルティング </p>
				</li>
			</ul>
		</div>
		<div class="card_box">
			<ul>
				<li class="img_box">
					<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/card.png" alt="セゾンカード会員様限定特典 お試しスタートプラン">
				</li>
				<li class="txt_box">
					<p class="nomal">この機会にぜひ、セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カードのご入会をご検討ください。</p>
					<div class="btn_box">
						<a href="https://www.saisoncard.co.jp/amextop/sbs-pro/?P5=38L" class="red_btn" target="_blank">詳しくはこちら</a>
					</div>
				</li>
			</ul>
		</div>
		<h3>さらに！ご希望の方には、<br class="sp_visible"><a href="https://e-omnibus.co.jp/service/shindan" target="_blank"><span>「WEB無料診断」</span></a>も実施中。</h3>
		<p class="check">プロのコンサルタントが、貴社のWEBサイトを無料で診断。<br class="sp_hidden">課題点やこれから取り組むべき点などを、具体的にお伝えします。<br>（お申し込み時に、「WEB無料診断」に<img src="<?php echo get_template_directory_uri(); ?>/images/service/hajimete/check_box_icon.png" alt="チェック">を入れてください）</p>
		<div class="careful">
			<h4><span>ご注意事項</span></h4>
			<ul>
				<li>・「お試しスタートプラン」「WEB無料診断」は初回お申し込み時のみ／1アカウント（法人および個人事業主）
				1回に限りご利用いただけます。</li>

				<li>・Googleビジネスプロフィール（旧Googleマイビジネス）運用コンサルティング・SNS運用コンサルティング同時お申し込みの場合に限り、両プラン で「お試しスタートプラン」をご利用いただけます。</li>

				<li>・SNS運用コンサルティングプランでご利用いただけるSNSは1つに限ります。<br>	（Facebook、Twitter、Instagramから選択）</li>

				<li>・お試しスタートプランは、各月お申し込みいただける企業数に限りがございます。（月10社様まで）<br>
				規定数をこえた場合、ご利用いただけないもしくはサービス開始月を調整させていただく場合がございます。</li>

				<li>・お申し込みには、<span class="red">セゾン紹介コード（数字4桁）</span>が必要です。詳しくは、クレディセゾン営業担当者までお問い合わせください。</li>

				<li>・「お試しスタートプラン」終了後の料金は、セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カードにてお支払いください。</li>

				<li>・当特典は、セゾンプラチナ・ビジネス・アメリカン・エキスプレス®・カード会員様およびセゾンカード加盟店様が対象です。<br>
				対象ではない方からのお申し込みと判明した場合、サービスを停止させていただく可能性がございます。</li>
			</ul>
		</div>
	</div>
</div>

<?php get_footer('hajimete');