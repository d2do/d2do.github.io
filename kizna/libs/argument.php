<?php
$pagename = str_replace(array('/', 'kizna', '.php', '?s='), '', $_SERVER['REQUEST_URI']);
$pagename = $pagename ? $pagename : 'default';

switch ($pagename) {
	case 'lineup':
		if(!isset($titlepage)) $titlepage = '商品ラインナップ | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = 'お客様に合わせた自由設計の「オーダー住宅」、リーズナブルなオリジナル企画住宅「オリジナル住宅」、バリアフリーが不要な「オーダー住宅 平屋」。お客様のご要望に合わせて、最適なプランをご提案いたします。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'event':
		if(!isset($titlepage)) $titlepage = '見学会・セミナー | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '完成見学会や住宅ローンの無料相談会など、失敗しない家づくりのための見学会やセミナーを随時開催しています。絆ハウスは無理な営業は一切行いませんので、どうぞお気軽にお越しください。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'works':
		if(!isset($titlepage)) $titlepage = '事例集 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '安心価格で高品質な「家族の笑顔と絆を深める家」の事例集です。お客様それぞれの理想を叶えた家をご紹介します。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'spec':
		if(!isset($titlepage)) $titlepage = '品質・工法・保証 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '絆ハウスの家は、高品質な工法と充実した保証でご家族の笑顔を守る、安心で快適な家です。地震に強い「ベタ基礎」と全棟「耐震等級3相当構造」の家。「マシュマロ断熱」や「Low-eガラス」を使用した年中快適な断熱仕様。安心の10種類のアフター保証。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'interview':
		if(!isset($titlepage)) $titlepage = 'お客様インタビュー | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '絆ハウスで家を建てた方のインタビューです。家づくりや建てた後の暮らし方についてお話を伺いました。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'faq':
		if(!isset($titlepage)) $titlepage = 'よくあるご質問 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '絆ハウスの家づくりについて、住宅ローン・資金についてなど、よくあるご質問をまとめました。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'company':
		if(!isset($titlepage)) $titlepage = '会社案内 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '三重県伊勢市の新築注文住宅「絆ハウス KIZNA」の会社概要、アクセス、スタッフ・職人紹介など。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'companyoverview':
		if(!isset($titlepage)) $titlepage = '会社概要・アクセス | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '絆ハウスKIZNA（有限会社 竹ヤ装建）〒516-0041 三重県伊勢市常磐2丁目3-18　フリーダイヤル：0120-085-394／TEL：0596-24-1387（年中無休 8:00-20:00）';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'companystaff':
		if(!isset($titlepage)) $titlepage = 'スタッフ・職人紹介 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '三重県伊勢市の絆ハウスKIZNAのスタッフと職人をご紹介。お客様の理想の家づくりのお手伝いをいたします。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'blog':
		if(!isset($titlepage)) $titlepage = 'スタッフブログ | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '完成見学会・セミナーのレポートや家づくりについての情報、絆ハウスの日常などを随時更新中。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'reform':
		if(!isset($titlepage)) $titlepage = 'リフォーム | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '家づくりのプロだからできる、お客様に合わせた最適なリフォームをご提案いたします。お子様が成長するにあたって、細かな設備リフォームや、大きなリフォームが必要になってきます。設備リフォームから大規模リフォームまで、絆ハウスに全てお任せください。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'contact':
		if(!isset($titlepage)) $titlepage = 'お問い合わせ・来店予約 | 三重県伊勢市の絆ハウス';
		if(!isset($desPage)) $desPage = '家づくりを成功させるための資料を無料プレゼント中。家づくりについてのお問い合わせや、ご相談のための来店予約、セミナー予約などはこちらから。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	case 'recruit':
		if(!isset($titlepage)) $titlepage = '採用情報 | 三重県伊勢市の新築注文住宅は絆ハウス';
		if(!isset($desPage)) $desPage = '三重県伊勢市の工務店「絆ハウスKIZNA」の採用情報ページです。私たちと一緒に「家族の絆を深める家」をつくりませんか？';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
	break;
	default:
		if(!isset($titlepage)) $titlepage = '三重県伊勢市の新築注文住宅は絆ハウス KIZNA';
		if(!isset($desPage)) $desPage = '三重県伊勢市の絆ハウス KIZNAは、安心価格で高品質な「家族の笑顔と絆を深める家」を提供しています。住宅ローンの相談会も随時開催中です。住宅ローンが組めず家づくりを諦める前にぜひ一度ご相談ください。';
		if(!isset($keyPage)) $keyPage = '';
		if(!isset($txtH1)) $txtH1 = '';
}

if ( defined('ABSPATH') ) {
	$desc_posttype =  trim(preg_replace("/&nbsp;/",'', strip_tags(apply_filters('the_content', get_post_field('post_content', get_the_id())) ) ));
	$content_posttype = mb_strcut($desc_posttype, 0, 120,'UTF-8')."...";
	if ( is_singular('blog') ) {
		$titlepage = single_post_title("", FALSE)." | 三重県伊勢市の新築注文住宅は絆ハウス";
		$desPage = $content_posttype;
	}
	if ( is_singular('event') ) {
		$titlepage = single_post_title("", FALSE)." | 三重県伊勢市の新築注文住宅は絆ハウス";
		$desPage = $content_posttype;
	}
	if ( is_singular('works') ) {
		$titlepage = single_post_title("", FALSE)." | 三重県伊勢市の新築注文住宅は絆ハウス";
		$desPage = $content_posttype;
	}
	if ( is_singular('interview') ) {
		$titlepage = single_post_title("", FALSE)." | 三重県伊勢市の新築注文住宅は絆ハウス";
		$desPage = "";
	}
}
?>
